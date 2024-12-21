<?php

// require_once("../utils/dashboard.php");
// ini_set('display_errors',1);
@session_start();

if (@$_SESSION['nivel'] == null || @$_SESSION['nivel'] != 'admin') {
    // echo "<script language='javascript'> window.location='../index.php' </script>";
    header("Location:../../../index.php");
}

?>

<!DOCTYPE html>
<html lang="pt">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Cinfotech</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

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
                            src="../../../assets/img/sistema/logo_index.png"
                            alt="navbar brand"
                            class="navbar-brand"
                            height="35"
                            width="100%" />
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
                                        <a href="#">
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
                                        <a href="cadastro_visitantes.php">
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
                            <a data-bs-toggle="collapse" href="#charts">
                                <i class="far fa-chart-bar"></i>
                                <p>Gráficos</p>
                                <span class="caret"></span>
                            </a>
                            <div class="collapse" id="charts">
                                <ul class="nav nav-collapse">
                                    <li>
                                        <a href="#">
                                            <span class="sub-item">Chart Js</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="sub-item">Sparkline</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a href="#">
                                <i class="fas fa-desktop"></i>
                                <p>Widgets</p>
                                <span class="badge badge-success">4</span>
                            </a>
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
                                            src="../../../assets/img/perfil/<?php echo $_SESSION['foto'];?>"
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
                                                        src="../../../assets/img/perfil/<?php echo $_SESSION['foto'];?>"
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

                    <div class="row">
                        <div class="col-md-11">
                            <form action="cadastro_alunos.php" method="post">
                                <div class="card card-round">
                                    <div class="card-header">
                                        <div class="card-head-row">
                                            <div class="card-title">Insira aqui os dados do Aluno</div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="" style="min-height: 270px">

                                            <div class="row mb-4">

                                                <div class="col-md-5">
                                                    <label class="form-label" for="nome">Nome</label>
                                                    <input name="nome" id="nome" type="text" placeholder="Digite o nome" class="form-control" />
                                                </div>
                                                <div class="col-md-5">
                                                    <label class="form-label" for="email">E-mail</label>
                                                    <input name="email" id="email" type="email" placeholder="digite o email" class="form-control" />
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

                                                <div class="col-md-5">
                                                    <label class="form-label" for="telefone">Telefone</label>
                                                    <input name="telefone" id="telefone" type="text" placeholder="Insira o nº de tel" class="form-control" />
                                                </div>
                                                <div class="col-md-6">
                                                    <label class="form-label" for="endereco">Endereco</label>
                                                    <input name="endereco" id="endereco" type="text" placeholder="insira o endereco" class="form-control" />
                                                </div>

                                            </div>
                                            <div class="row mb-4">
                                                <div class="col-md-3">
                                                    <label class="form-label" for="idade">idade</label>
                                                    <input name="idade" id="idade" type="number" placeholder="insira a idade" class="form-control" />
                                                </div>
                                                <div class="col-md-5">
                                                    <label class="form-label" for="data_visita">Data da Visita</label>
                                                    <input name="data_visita" id="data_visita" type="date" class="form-control" />

                                                </div>


                                            </div>

                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <div class="d-flex justify-content-end">
                                            <button class="btn btn-primary btn-round btn-lg">Cadastrar</button>
                                        </div>
                                    </div>
                            </form>
                        </div>
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

</body>

</html>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $errors = [];

    // Captura e sanitiza os dados do formulário
    $nome = htmlspecialchars(trim($_POST['nome']));
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $genero = htmlspecialchars(trim($_POST['genero']));
    $telefone = htmlspecialchars(trim($_POST['telefone']));
    $idade = filter_var($_POST['idade'], FILTER_VALIDATE_INT);
    $endereco = htmlspecialchars(trim($_POST['endereco']));

    // Tratamento de arquivos
    $foto = $_FILES['foto'];
    $bi = $_FILES['bi'];
    $certificado = $_FILES['certificado'];

    // Validações de campos obrigatórios e formatos
    if (empty($nome)) {
        $errors[] = "O nome é obrigatório.";
    } elseif (strlen($nome) < 3) {
        $errors[] = "O nome deve ter pelo menos 3 caracteres.";
    }

    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "E-mail inválido.";
    }

    if (empty($genero) || !in_array($genero, ['M', 'F'])) {
        $errors[] = "O gênero é inválido.";
    }

    if (empty($telefone) || !preg_match('/^\d{9,20}$/', $telefone)) {
        $errors[] = "O telefone deve conter entre 9 e 20 dígitos.";
    }

    if ($idade === false || $idade < 0 || $idade > 120) {
        $errors[] = "A idade deve ser um número válido entre 0 e 120.";
    }

    if (empty($endereco)) {
        $errors[] = "O endereço é obrigatório.";
    }

    // Validação da foto (deve ser uma imagem)
    if ($foto['error'] !== UPLOAD_ERR_OK) {
        $errors[] = "Erro ao enviar a foto. Código de erro: " . $foto['error'];
    } else {
        $fotoExtensao = strtolower(pathinfo($foto['name'], PATHINFO_EXTENSION));
        $extensoesValidasFoto = ['jpg', 'jpeg', 'png', 'gif'];

        // Verificar se a foto é realmente uma imagem
        $fotoVerificada = getimagesize($foto['tmp_name']);
        if (!$fotoVerificada) {
            $errors[] = "A foto não é uma imagem válida.";
        }

        if (!in_array($fotoExtensao, $extensoesValidasFoto)) {
            $errors[] = "A foto deve ser um arquivo de imagem válido (jpg, jpeg, png ou gif).";
        }
    }

    // Validação do BI (deve ser um arquivo PDF)
    if ($bi['error'] !== UPLOAD_ERR_OK) {
        $errors[] = "Erro ao enviar o BI. Código de erro: " . $bi['error'];
    } else {
        $biTipo = mime_content_type($bi['tmp_name']);
        if ($biTipo !== 'application/pdf') {
            $errors[] = "O BI deve ser um arquivo no formato PDF.";
        }
    }

    // Validação do Certificado (deve ser um arquivo PDF)
    if ($certificado['error'] !== UPLOAD_ERR_OK) {
        $errors[] = "Erro ao enviar o certificado. Código de erro: " . $certificado['error'];
    } else {
        $certificadoTipo = mime_content_type($certificado['tmp_name']);
        if ($certificadoTipo !== 'application/pdf') {
            $errors[] = "O certificado deve ser um arquivo no formato PDF.";
        }
    }

    // Exibição dos erros ou mensagem de sucesso
    if (!empty($errors)) {
        echo "<script>
            Swal.fire({
                title: 'Erro!',
                html: '" . implode('<br>', $errors) . "',
                icon: 'error',
                confirmButtonText: 'OK'
            });
        </script>";
    } else {
        try {
            // Mover os arquivos antes da inserção no banco de dados
            $fotoDestino = '../../../assets/img/perfil/foto_' . uniqid() . '.' . $fotoExtensao;
            if (!move_uploaded_file($foto['tmp_name'], $fotoDestino)) {
                throw new Exception('Erro ao fazer upload da foto.');
            }

            $biDestino = '../../../assets/arqs/bi_' . uniqid() . '.pdf';
            if (!move_uploaded_file($bi['tmp_name'], $biDestino)) {
                throw new Exception('Erro ao fazer upload do BI.');
            }

            $certificadoDestino = '../../../assets/arqs/certificado_' . uniqid() . '.pdf';
            if (!move_uploaded_file($certificado['tmp_name'], $certificadoDestino)) {
                throw new Exception('Erro ao fazer upload do certificado.');
            }

            // Conectar ao banco de dados
            // $conn = new mysqli("localhost", "usuario", "senha", "banco_de_dados");
            $conn=Database::getConnection();

            // Verificar a conexão
            if ($conn->connect_error) {
                die("Falha na conexão: " . $conn->connect_error);
            }

            // Preparar a consulta SQL com a inserção de dados
            $sql = "INSERT INTO alunos (nome, email, genero, telefone, idade, endereco, foto, bi, certificado, matriculado) 
                    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, 0)";

            // Preparar a declaração
            $stmt = $conn->prepare($sql);

            if ($stmt === false) {
                throw new Exception('Erro ao preparar a consulta: ' . $conn->error);
            }

            // Vincular os parâmetros
            $stmt->bind_param("ssssissss", $nome, $email, $genero, $telefone, $idade, $endereco, $fotoDestino, $biDestino, $certificadoDestino);

            // Executar a consulta
            $stmt->execute();

            if ($stmt->affected_rows > 0) {
                // Sucesso na inserção
                echo "
                <script>
                    Swal.fire({
                        title: 'Sucesso!',
                        text: 'Aluno cadastrado com sucesso!',
                        icon: 'success',
                        confirmButtonText: 'OK'
                    });
                </script>";
            } else {
                throw new Exception('Falha ao inserir os dados no banco.');
            }

            // Fechar a declaração e a conexão
            $stmt->close();
            $conn->close();

        } catch (Exception $e) {
            // Caso ocorra um erro no processo (upload ou inserção)
            echo "
            <script>
                Swal.fire({
                    title: 'Erro!',
                    text: '{$e->getMessage()}',
                    icon: 'error',
                    confirmButtonText: 'OK'
                });
            </script>";
        }
    }
}
?>
