<?php
require_once('config/config.php');

$conn = Database::getConnection();

$email = $conn->real_escape_string($_POST['email']);
$senha = $conn->real_escape_string($_POST['senha']);

$sql = "SELECT * FROM usuarios WHERE email='$email' and senha='$senha'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    session_start();
    $user = $result->fetch_assoc(); // Pegue os dados do usuário em uma única chamada
    $_SESSION['nome'] = $user['nome'];
    $_SESSION['email'] = $user['email'];
    $_SESSION['nivel'] = $user['nivel'];
    $_SESSION['foto']=$user['foto'];
    
    $nivel = $user['nivel'];

    if ($nivel == "admin") {
        echo "<script>window.location.href='painel-admin';</script>";
    } elseif ($nivel == "secretaria") {
        echo "<script>window.location.href='painel-secretaria';</script>";
    }
} else {
    echo "Usuário ou senha inválidos.";
}
?>
