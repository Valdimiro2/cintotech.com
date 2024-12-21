<?php
// $root = dirname(__DIR__, 2); // Ajusta o nível de pastas
// require_once("$root/config/conexao.php");


require_once(__DIR__ . '/../config/config.php');

function getUserCount()
{
    $conn = Database::getConnection();

    $sql = "SELECT COUNT(*) AS contagem FROM visitantes";
    $result = $conn->query($sql)->fetch_assoc()['contagem'];
    return $result;
}


function getalunosCount()
{
    $conn = Database::getConnection();

    $sql = "SELECT COUNT(*) AS contagem FROM alunos";
    $result = $conn->query($sql)->fetch_assoc()['contagem'];
    return $result;
}
function getTurmas()
{
    $conn = Database::getConnection();

    $sql = "SELECT COUNT(*) AS contagem FROM turmas";
    $result = $conn->query($sql)->fetch_assoc()['contagem'];
    return $result;
}

function getVisits($pagina = 1, $limite = 6)
{


    $inicio = ($pagina * $limite) - $limite;
    $conn = Database::getConnection();

    $sql = "SELECT * 
FROM visitantes ORDER BY data_visita LIMIT $inicio, $limite";
    $result = $conn->query($sql);
    return $result;
}

function getVisitsCoutable($limite = 6)
{
    $conn = Database::getConnection();

    $sql = "SELECT COUNT(*) AS contagem FROM visitantes";
    $result = $conn->query($sql);
    return ceil($result->fetch_assoc()['contagem'] / $limite);
}

function getvisitdateCount()
{
    $conn = Database::getConnection();

    $sql = "SELECT COUNT(*) AS contagem 
FROM visitantes 
WHERE data_visita BETWEEN CURDATE() - INTERVAL 30 DAY AND CURDATE();";
    $result = $conn->query($sql)->fetch_assoc()['contagem'];
    return $result;
}
function getvisitrate()
{
    $conn = Database::getConnection();


    $current_count = getvisitdateCount();

    // Consulta para obter o número de visitantes nos 60-120 dias atrás
    $sql_previous = "SELECT COUNT(*) AS contagem 
                     FROM visitantes 
                     WHERE data_visita BETWEEN CURDATE() - INTERVAL 60 DAY AND CURDATE() - INTERVAL 30 DAY;";
    $previous_count = $conn->query($sql_previous)->fetch_assoc()['contagem'];

    // Verificar se o valor anterior é diferente de zero para evitar divisão por zero
    if ($previous_count != 0) {
        // Calcular a variação percentual
        $rate = (($current_count - $previous_count) / $previous_count) * 100;

        // Arredondar para 2 casas decimais
        $rate = round($rate, 2);

        return $rate; // Retorna a taxa de variação (positiva ou negativa)
    }
}



function getprevious()
{
    $conn = Database::getConnection();


    // Consulta para obter o número de visitantes nos 60-120 dias atrás
    $sql_previous = "SELECT COUNT(*) AS contagem 
                     FROM visitantes 
                     WHERE data_visita BETWEEN CURDATE() - INTERVAL 60 DAY AND CURDATE() - INTERVAL 30 DAY;";
    $previous_count = $conn->query($sql_previous)->fetch_assoc()['contagem'];

    // Verificar se o valor anterior é diferente de zero para evitar divisão por zero
    return $previous_count;
}

function getSearch($search)
{
    // Obter conexão com o banco de dados
    $conn = Database::getConnection();

    // Consulta SQL usando prepared statements
    $sql = "SELECT * FROM visitantes WHERE nome LIKE ? OR telefone LIKE ? OR email LIKE ?";
    $stmt = $conn->prepare($sql);

    if (!$stmt) {
        die("Erro ao preparar a consulta: " . $conn->error);
    }
    $search = "%" . $search . "%";
    // Associa o valor do parâmetro (string ou inteiro, dependendo do tipo esperado)
    $stmt->bind_param("sss", $search, $search, $search); // 3 strings para nome, telefone e email

    // Executa a consulta
    $stmt->execute();

    // Obtém os resultados
    $result = $stmt->get_result();


    return $result;
}




function getVisitById($visitante_id)
{
    // Obter conexão com o banco de dados
    $conn = Database::getConnection();

    // Consulta SQL usando prepared statements
    $sql = "SELECT * FROM visitantes WHERE id=?";
    $stmt = $conn->prepare($sql);

    if (!$stmt) {
        die("Erro ao preparar a consulta: " . $conn->error);
    }
    $stmt->bind_param("i", $visitante_id);

    $stmt->execute();

    // Obtém os resultados
    $result = $stmt->get_result();


    return $result;
}
