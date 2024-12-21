<?php
require_once(dirname(__DIR__, 3) . "/utils/dashboard.php");
@session_start();

if (@$_SESSION['nivel'] == null || @$_SESSION['nivel'] != 'admin') {
    // echo "<script language='javascript'> window.location='../index.php' </script>";
    header("Location:../../../index.php");
}
// ini_set('display_errors', 1);
if (isset($_GET['pagina'])) {
    $pagina = filter_input(INPUT_GET, 'pagina', FILTER_VALIDATE_INT);
}
if (!$pagina) {
    $pagina = 1;
    // $_GET=null;
}

if (isset($_GET['search'])) {
    $result = getSearch($_GET['search']);
} else {
    $result = getVisits($pagina);
}


// require_once("../../../utils/dashboard.php");
// require_once("../../../config/config.php");

?>

<!DOCTYPE html>
<html lang="pt">

<head>
    <!-- <link rel="stylesheet" href="../../../assets/css/style2.css"> -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Cinfotech</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta
        content="width=device-width, initial-scale=1.0, shrink-to-fit=no"
        name="viewport" />
    <link
        rel="icon"
        href="../../../assets/img/sistema/favicon.ico"
        type="image/x-icon" />

    <!-- Fonts and icons -->
    <script src="../../../assets/js/plugin/webfont/webfont.min.js"></script>
    <script>
        WebFont.load({
            google: {
                families: ["Public Sans:300,400,500,600,700"]
            },
            custom: {
                families: [
                    "Font Awesome 5 Solid",
                    "Font Awesome 5 Regular",
                    "Font Awesome 5 Brands",
                    "simple-line-icons",
                ],
                urls: ["assets/css/fonts.min.css"],
            },
            active: function() {
                sessionStorage.fonts = true;
            },
        });
    </script>

    <!-- CSS Files -->
    <link rel="stylesheet" href="../../../assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../../../assets/css/plugins.min.css" />
    <link rel="stylesheet" href="../../../assets/css/kaiadmin.min.css" />

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link rel="stylesheet" href="../../../assets/css/demo.css" />
</head>

<body>
    <div class="wrapper">
        <!-- Sidebar -->
        <div class="sidebar" data-background-color="dark">
            <div class="sidebar-logo">
                <!-- Logo Header -->
                <div class="logo-header" data-background-color="dark">
                    <a href="../../index.php" class="logo">
                        <img
                            src="../../../assets/img/sistema/logo_light.svg"
                            alt="navbar brand"
                            class="navbar-brand"
                            height="20" />
                    </a>
                    <div class="nav-toggle">
                        <button class="btn btn-toggle toggle-sidebar">
                            <i class="gg-menu-right"></i>
                        </button>
                        <button class="btn btn-toggle sidenav-toggler">
                            <i class="gg-menu-left"></i>
                        </button>
                    </div>
                    <button class="topbar-toggler more">
                        <i class="gg-more-vertical-alt"></i>
                    </button>
                </div>
                <!-- End Logo Header -->
            </div>
            <div class="sidebar-wrapper scrollbar scrollbar-inner">
                <div class="sidebar-content">
                    <ul class="nav nav-secondary">
                        <li class="nav-section">
                            <span class="sidebar-mini-icon">
                                <i class="fa fa-ellipsis-h"></i>
                            </span>
                            <h4 class="text-section">Administrativo</h4>
                        </li>
                        <li class="nav-item">
                            <a data-bs-toggle="collapse" href="#base">
                                <i class="fas fa-layer-group"></i>
                                <p>Cadastro</p>
                                <span class="caret"></span>
                            </a>
                            <div class="collapse" id="base">
                                <ul class="nav nav-collapse">
                                    <li>
                                        <a href="cadastro_alunos.php">
                                            <span class="sub-item">Alunos</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="salas.php">
                                            <span class="sub-item">Salas</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="turmas.php">
                                            <span class="sub-item">Turmas</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="professores.php">
                                            <span class="sub-item">Professores</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="sub-item">Visitantes</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="nav-item">
                            <a data-bs-toggle="collapse" href="#forms">
                                <i class="fas fa-pen-square"></i>
                                <p>Relatorios</p>
                                <span class="caret"></span>
                            </a>
                            <div class="collapse" id="forms">
                                <ul class="nav nav-collapse">
                                    <li>
                                        <a href="../forms/forms.html">
                                            <span class="sub-item">Alunos</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="../forms/forms.html">
                                            <span class="sub-item">Visitantes</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="../forms/forms.html">
                                            <span class="sub-item">Alunos</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a data-bs-toggle="collapse" href="#tables">
                                <i class="fas fa-table"></i>
                                <p>Tables</p>
                                <span class="caret"></span>
                            </a>
                            <div class="collapse" id="tables">
                                <ul class="nav nav-collapse">
                                    <li>
                                        <a href="../tables/tables.html">
                                            <span class="sub-item">Basic Table</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="../tables/datatables.html">
                                            <span class="sub-item">Datatables</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a data-bs-toggle="collapse" href="#maps">
                                <i class="fas fa-map-marker-alt"></i>
                                <p>Maps</p>
                                <span class="caret"></span>
                            </a>
                            <div class="collapse" id="maps">
                                <ul class="nav nav-collapse">
                                    <li>
                                        <a href="../maps/googlemaps.html">
                                            <span class="sub-item">Google Maps</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="../maps/jsvectormap.html">
                                            <span class="sub-item">Jsvectormap</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>



                    </ul>
                </div>
            </div>
        </div>
        <!-- End Sidebar -->

        <div class="main-panel">
            <div class="main-header">
                <div class="main-header-logo">
                    <!-- Logo Header -->
                    <div class="logo-header" data-background-color="dark">
                        <a href="../../index.html" class="logo">
                            <img
                                src="../../../assets/img/sistema/logo_light.svg"
                                alt="navbar brand"
                                class="navbar-brand"
                                height="20" />
                        </a>
                        <div class="nav-toggle">
                            <button class="btn btn-toggle toggle-sidebar">
                                <i class="gg-menu-right"></i>
                            </button>
                            <button class="btn btn-toggle sidenav-toggler">
                                <i class="gg-menu-left"></i>
                            </button>
                        </div>
                        <button class="topbar-toggler more">
                            <i class="gg-more-vertical-alt"></i>
                        </button>
                    </div>
                    <!-- End Logo Header -->
                </div>
                <!-- Navbar Header -->
                <nav
                    class="navbar navbar-header navbar-header-transparent navbar-expand-lg border-bottom">
                    <div class="container-fluid">

                        <ul class="navbar-nav topbar-nav ms-md-auto align-items-center">
                            <li class="nav-item topbar-user dropdown hidden-caret">
                                <a
                                    class="dropdown-toggle profile-pic"
                                    data-bs-toggle="dropdown"
                                    href="#"
                                    aria-expanded="false">
                                    <div class="avatar-sm">
                                        <img
                                            src="../../../assets/img/perfil/peril.jpg"
                                            alt="..."
                                            class="avatar-img rounded-circle" />
                                    </div>
                                    <span class="profile-username">
                                        <span class="op-7"><?= $_SESSION['nome'] ?></span>
                                        <span class="fw-bold"></span>
                                    </span>
                                </a>
                                <ul class="dropdown-menu dropdown-user animated fadeIn">
                                    <div class="dropdown-user-scroll scrollbar-outer">
                                        <li>
                                            <div class="user-box">
                                                <div class="avatar-lg">
                                                    <img
                                                        src="../../../assets/img/perfil/peril.jpg"
                                                        alt="image profile"
                                                        class="avatar-img rounded" />
                                                </div>
                                                <div class="u-text">
                                                    <h4><?= $_SESSION['nome'] ?></h4>
                                                    <p class="text-muted"><?= $_SESSION['email'] ?></p>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Configuracao de conta</a>
                                            <!-- <div class="dropdown-divider"></div> -->
                                            <a class="dropdown-item" href="../../../logout.php">Logout</a>
                                        </li>
                                    </div>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
                <!-- End Navbar -->
            </div>

            <div class="container">
                <div class="page-inner">
                    <div
                        class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
                        <div class=" ms-md-auto py-2 py-md-0">
                            <a href="cadastro_visitantes.php?funcao=view" class="btn btn-primary btn-round">Adicionar usuario</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-11">
                            <form action="cadastro_visitantes.php" method="post">
                                <div class="card card-round">
                                    <div class="card-header">
                                        <div class="card-head-row d-flex justify-content-between align-items-center">
                                            <?php if (isset($_GET['funcao'])): ?>
                                                <!-- Título -->
                                                <div class="card-title">
                                                    Visualizar os dados do Visitante
                                                </div>
                                                <!-- Campo de busca alinhado à direita -->
                                                <form action="#" method="post">

                                                    <div class="col-md-4 d-flex align-items-center">
                                                        <input
                                                            value=""
                                                            type="text"
                                                            placeholder="Search ..."
                                                            name="search"
                                                            id="search-input"
                                                            class="form-control me-2" />
                                                        <a
                                                            href="javascript:void(0);"
                                                            onclick="redirectToSearch()">
                                                            <i class="bi bi-search"></i>
                                                        </a>
                                                    </div>
                                                    <script>
                                                        function redirectToSearch() {
                                                            // Obtém o valor do input
                                                            const searchValue = document.getElementById('search-input').value;

                                                            // Redireciona para a URL com o parâmetro de busca
                                                            if (searchValue.trim() !== "") { // Verifica se não está vazio
                                                                window.location.href = `cadastro_visitantes.php?funcao=view&search=${encodeURIComponent(searchValue)}`;
                                                            } else {
                                                                alert("Por favor, insira um termo de busca."); // Alerta se o campo estiver vazio
                                                            }
                                                        }
                                                    </script>

                                                </form>
                                        </div>
                                    <?php else: ?>
                                        <!-- Título -->
                                        <div class="card-title">
                                            Insira aqui os dados do Visitante
                                        </div>
                                    <?php endif ?>
                                    </div>

                                </div>
                                <div class="card-body">
                                    <div class="" style="min-height: 370px;">
                                        <?php if (!isset($_GET['funcao'])): ?>

                                            <div class="row mb-4">

                                                <div class="col-md-5">
                                                    <label class="form-label" for="nome">Nome</label>
                                                    <input name="nome" id="nome" type="text" placeholder="Digite o nome" class="form-control" required />
                                                </div>
                                                <div class="col-md-5">
                                                    <label class="form-label" for="email">E-mail</label>
                                                    <input name="email" id="email" type="email" placeholder="digite o email" class="form-control" required />
                                                </div>
                                                <div class="col-md-2">
                                                    <label class="form-label" for="genero">Genero</label>
                                                    <select name="genero" id="genero" class="form-control">
                                                        <option value="M">M</option>
                                                        <option value="F">F</option>
                                                    </select>
                                                </div>

                                            </div>
                                            <div class="row mb-4">

                                                <div class="col-md-4">
                                                    <label class="form-label" for="telefone">Telefone</label>
                                                    <input name="telefone" id="telefone" type="text" placeholder="Insira o nº de tel" class="form-control" required />
                                                </div>
                                                <div class="col-md-3">
                                                    <label class="form-label" for="idade">idade</label>
                                                    <input name="idade" id="idade" type="number" placeholder="insira a idade" class="form-control" required />
                                                </div>
                                                <div class="col-md-5">
                                                    <label class="form-label" for="data_visita">Data da Visita</label>
                                                    <input name="data_visita" id="data_visita" type="date" class="form-control" />

                                                </div>


                                            </div>
                                        <?php else: ?>
                                            <div class="table-responsive">
                                                <table class="table table-sm">
                                                    <thead>
                                                        <tr>
                                                            <th>Nome</th>
                                                            <th>idade</th>
                                                            <th>Email</th>
                                                            <th>Genero</th>
                                                            <th>Data da Visita</th>
                                                            <th>Telefone</th>
                                                            <th>Ações</th>
                                                        </tr>
                                                    </thead>

                                                    <tbody>
                                                        <?php while ($row = $result->fetch_assoc()): ?>
                                                            <tr>
                                                                <td><?php echo $row['nome']; ?></td>
                                                                <td><?php echo $row['idade']; ?></td>
                                                                <td><?php echo $row['email']; ?></td>
                                                                <td><?php echo $row['genero']; ?></td>
                                                                <td><?php echo date('d/m/Y', strtotime($row['data_visita'])); ?></td>
                                                                <td><?php echo $row['telefone']; ?></td>

                                                                <td>
                                                                    <a href="#" class='text-primary mr-1' title='Editar Dados'><i class="bi bi-clipboard2-data"></i></a>
                                                                    
                                                                    <a href="#" class='text-info mr-1' title='Ver Endereço'><i class="bi bi-pencil-square"></i></a>
                                                                    <a href="#" class='text-danger mr-1' title='Excluir Registro'><i class="bi bi-trash3"></i></a>
                                                                </td>


                                                            </tr>
                                                        <?php endwhile ?>





                                                    </tbody>
                                                </table>
                                            </div>


                                        <?php endif ?>

                                    </div>
                                </div>
                                <div class="card-footer">
                                    <?php if (!isset($_GET['funcao'])): ?>
                                        <div class="d-flex justify-content-end">
                                            <button type="submit" name="cadastrar" class="btn btn-primary btn-round btn-lg">Cadastrar</button>
                                        </div>
                                    <?php else: ?>
                                        <nav aria-label="Page navigation example">
                                            <ul class="pagination justify-content-end">
                                                <li class="page-item ">
                                                    <a class="page-link" href="cadastro_visitantes.php?funcao=view&pagina=<?php echo ($pagina == 1) ? 1 : ($pagina - 1); ?>">Previous</a>


                                                </li>
                                                <?php for ($cont = 0; $cont < 3; $cont++):
                                                    if (($pagina + $cont) < getVisitsCoutable()):
                                                ?>
                                                        <li class="page-item"><a class="page-link" href="cadastro_visitantes.php?funcao=view&pagina=<?= $pagina + $cont; ?>"><?php echo $pagina + $cont; ?></a></li>

                                                    <?php endif ?>
                                                <?php endfor ?>
                                                <li class="page-item"><a class="page-link" href="#">...</a></li>
                                                <li class="page-item"><a class="page-link" href="cadastro_visitantes.php?funcao=view&pagina=<?= getVisitsCoutable(); ?>"><?= getVisitsCoutable(); ?></a></li>
                                                <li class="page-item">
                                                    <a class="page-link" href="cadastro_visitantes.php?funcao=view&pagina=<?php echo ($pagina == getVisitsCoutable()) ? $pagina : ($pagina + 1); ?>">Next</a>
                                                </li>
                                            </ul>
                                        </nav>
                                    <?php endif ?>
                                </div>

                        </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>

        <footer class="footer">
            <div class="container-fluid d-flex justify-content-between">
                <nav class="pull-left">
                    <ul class="nav">

                        <li class="nav-item">
                            <a class="nav-link" href="https://wa.me/244936099656?text=Olá,%20preciso%20de%20ajuda!" target="_blank"> Obter apoio via Whatsapp </a>
                        </li>
                    </ul>
                </nav>
                <div>
                    Desenvolvido Pela
                    <a target="_blank" href="https://lojavirtual.luokaliye.ao/">Luokaliye Tech</a>.
                </div>
            </div>
        </footer>
    </div>


    </div>
    <!--   Core JS Files   -->
    <script src="../../../assets/js/core/jquery-3.7.1.min.js"></script>
    <script src="../../../assets/js/core/popper.min.js"></script>
    <script src="../../../assets/js/core/bootstrap.min.js"></script>

    <script src="../assets/js/core/jquery-3.7.1.min.js"></script>
    <script src="../assets/js/core/popper.min.js"></script>
    <script src="../assets/js/core/bootstrap.min.js"></script>

    <!-- jQuery Scrollbar -->
    <script src="../../../assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>

    <!-- Chart JS -->
    <script src="../../../assets/js/plugin/chart.js/chart.min.js"></script>

    <!-- jQuery Sparkline -->
    <script src="../../../assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>

    <!-- Chart Circle -->
    <script src="../../../assets/js/plugin/chart-circle/circles.min.js"></script>

    <!-- Datatables -->
    <script src="../../../assets/js/plugin/datatables/datatables.min.js"></script>

    <!-- Bootstrap Notify -->
    <script src="../../../assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>

    <!-- jQuery Vector Maps -->
    <script src="../../../assets/js/plugin/jsvectormap/jsvectormap.min.js"></script>
    <script src="../../../assets/js/plugin/jsvectormap/world.js"></script>

    <!-- Sweet Alert -->
    <script src="../../../assets/js/plugin/sweetalert/sweetalert.min.js"></script>

    <!-- Kaiadmin JS -->
    <script src="../../../assets/js/kaiadmin.min.js"></script>

    <!-- Kaiadmin DEMO methods, don't include it in your project! -->
    <script src="../../../assets/js/setting-demo.js"></script>
    <script src="../../../assets/js/demo.js"></script>
    <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>

</body>

</html>

<?php


if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['cadastrar'])) {
    // Código a ser executado quando o botão 'cadastrar' for clicado


    $nome = htmlspecialchars(trim($_POST['nome']));
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $genero = htmlspecialchars(trim($_POST['genero']));
    $telefone = htmlspecialchars(trim($_POST['telefone']));
    $idade = filter_var($_POST['idade'], FILTER_VALIDATE_INT);
    $data_visita = $_POST['data_visita'];  // Formata para o padrão SQL

    if ($data_visita == null) {
        $data_visita = date('Y-m-d', time());
    }

    // Verifica se a idade é válida
    if ($idade === false) {
        echo "
    <script>
        Swal.fire({
            title: 'Sucesso!',
            text: 'Essa idade e invalida',
            icon: 'success',
            confirmButtonText: 'OK'
        });
    </script>
    ";
    }

    // Executando o INSERT no banco de dados usando Prepared Statements
    try {
        // Supondo que $conn seja sua conexão PDO com o banco de dados
        $conn = Database::getConnection();  // Exemplo de como obter a conexão

        // SQL de inserção
        $sql = "INSERT INTO visitantes (nome, email, genero, telefone, idade, data_visita) 
       VALUES (?, ?, ?, ?, ?, ?)";

        // Preparando a declaração
        if ($stmt = $conn->prepare($sql)) {
            // Vincula os parâmetros com tipos
            $stmt->bind_param("ssssds", $nome, $email, $genero, $telefone, $idade, $data_visita);

            // Executa a declaração
            if ($stmt->execute()) {
                echo "
    <script>
        Swal.fire({
            title: 'Sucesso!',
            text: 'Dados Cadastrados com sucesso',
            icon: 'success',
            confirmButtonText: 'OK'
        });
    </script>
    ";
            } else {
                echo "
    <script>
        Swal.fire({
            title: 'Erro!',
            text: 'Error: $stmt->error',
            icon: 'success',
            confirmButtonText: 'OK'
        });
    </script>
    ";
            }

            // Fecha a declaração
            $stmt->close();
        } else {
            echo "
    <script>
        Swal.fire({
            title: 'Error!',
            text: 'Error: $conn->error',
            icon: 'error',
            confirmButtonText: 'OK'
        });
    </script>
    ";
        }
    } catch (Exception $e) {
        // Caso ocorra algum erro
        $erro = $e->getMessage();
        echo "
    <script>
        Swal.fire({
            title: 'Error!',
            text: 'Error: $erro',
            icon: 'success',
            confirmButtonText: 'OK'
        });
    </script>
    ";
    }
}

if (isset($_GET['search'])) {
    $search = $_GET['search'];
    echo "
    <script>
        Swal.fire({
            title: 'Teste',
            text: 'Tentou pesquisar: $search',
            icon: 'info',
            confirmButtonText: 'OK'
        });
    </script>
    ";
}
