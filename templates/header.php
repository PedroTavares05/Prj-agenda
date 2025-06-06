<?php
//INCLUINDO A CHAMADA DO ARQUIVO URL.PHP QUE CONTÉM O PADRÃO DE DIRECIONAMENTO PARA OUTRAS PASTAS DO PROJETO
//include_once em PHP serve para incluir um arquivo em outro, mas apenas uma vez durante a execução do script

include_once("config/url.php");

//LIMPEZA DE MENSAGEM NA ÁREA DA SESSION
if(isset($_SESSION['msg'])){
    $printMsg = $_SESSION['msg'];
    $_SESSION['msg'] = '';
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--BIBLIOTECA DO BOOTSTRAP-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.3/css/bootstrap.min.css"
        integrity="sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!--FONT - awesome - FONTE DE ÍCONES -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!--DIRECIONANDO PARA A PASTA CSS -->
    <link rel="stylesheet" href="<?= $Base_url ?>css/estilos.css">

    <title>Agenda de Contatos</title>
</head>

<body>
    <header>
        <!--Utilizando classes do bootstrap para criação de barras de navegação rápidas sem criação de CSSs-->

        <nav class="navbar navbar-expand-ig navbar-dark bg-primary">
            <a class="navbar-brand" href="<?= $Base_url ?>index.php">
                <img src="<?= $Base_url ?>img/logo.svg" alt="Logo Agenda">
            </a>
            <!--Incluindo na área de Navegação as opções do Menu-->
            <div>
                <div class="navbar-nav">
                    <a class="nav-link" id="home-link" href="<?= $Base_url ?>index.php">Agenda</a>
                    <a class="nav-link" id="addcontato-link" href="<?= $Base_url ?>addContato.php">Adicionar Contato</a>
                    <a class="nav-link" id="indexusua-link" href="<?= $Base_url ?>indexUsuario.php">Usuários</a>
                </div>
            </div>
        </nav>
    </header>

</body>

</html>