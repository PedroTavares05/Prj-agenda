<?php
//deixando a área da sessão preparada para receber mensagens
session_start();

include_once("conexao.php");
include_once("url.php");

//Objeto que receberá os dados da tabela de Contados
$contatos = [];

$queryContato = "SELECT * FROM tb_contatos";

$result = $connDB->prepare($queryContato);

$result->execute();

//MOSTRA TODOS OS DADOS POR MEIO DA PDO

$contatos = $result->fetchAll();




