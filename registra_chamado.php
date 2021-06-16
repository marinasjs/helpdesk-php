<?php

session_start();
//montagem do texto
$titulo = str_replace('#', '-', $_POST['titulo']);
$categoria = str_replace('#', '-', $_POST['caregoria']);
$descricao =  str_replace('#', '-', $_POST['descricao']);

$texto =$_SESSION['id'] . '#' . $_POST['titulo'] . '#' .  $_POST['categoria'] . '#' . $_POST['descricao'] . PHP_EOL;

$arquivo = fopen('arquivo.txt','a'); //abre o arquivo
fwrite($arquivo, $texto); //escreve o arquivo
fclose($arquivo);//fecha o arquivo
echo $texto;

header('Location:abrir_chamado.php');
?>