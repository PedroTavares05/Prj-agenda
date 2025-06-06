<?php
$host = "localhost";
$user = "root";
$pass = "sql123";
$dbname = "bd_agenda_t342";

try {
    $connDB = new PDO("mysql:host=$host;dbname=$dbname",$user,$pass);

    //ATIVAR O MODO DE ERROS DO PDO
    //Os atributos, do PDO, abaixo irão mostrar os erros que por ventura aconteça na chamada do banco

    $connDB->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

} catch (PDOException $erro) {
    //ERRO DE CONEXÃO
    $erro = $erro->getMessage();
    echo "<h2>Ocorreu um Erro de Conexão com o Banco</h2>" .$erro;
}