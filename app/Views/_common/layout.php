<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ACC - Sistema de Controle Atividades Complementares</title>
    <?php echo link_tag('assets/bootstrap/css/bootstrap.min.css') ?>
    <script src="<?php echo base_url('assets/jquery/jquery-3.5.1.min.js') ?>"></script>
    <style>
        body {
            padding-top: 80px;
        }

        .logo_site {
            height: 40px;
            margin: 0;
        }
    </style>
    <script>
        var base_url = "<?php echo base_url() ?>";
    </script>
</head>
<body>
<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
        <a href="<?php echo base_url() ?>" class="navbar-brand"><img src="<?php echo base_url('assets/imagens/logo_php_exp_white.png') ?>" alt="ACC" class="logo_site"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item"><a href="<?php echo base_url('home') ?>" class="nav-link ">Home</a></li>                   
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle " href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Controle de ACC
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item " href="<?php echo base_url('categorias') ?>">Categoria ACC</a>                        
                    </div>
                </li>
                <li class="nav-item"><a href="<?php echo base_url('relatorio') ?>" class="nav-link ">Relatório</a></li>
                <li class="nav-item"><a href="" class="nav-link ">|</a></li>
            
                <span class="navbar-text">
                    <span class="text-white font-weight-bold">Bem-vindo</span>
                </span>
                

            </ul>
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle " href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Configurações
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item " href="<?php echo base_url('perfis') ?>">Perfis</a>
                        <a class="dropdown-item " href="<?php echo base_url('usuarios') ?>">Usuários</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="<?php echo base_url('login/signout') ?>">Sair</a>
                </li>

            </ul>
        </div>
    </nav>
    <div class="container" role="main">
        <?php echo $this->renderSection('content') ?>
    </div>

    <script src="<?php echo base_url('assets/jquery.mask/jquery.mask.js') ?>"></script>
    <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js') ?>"></script>
</body>
</html>