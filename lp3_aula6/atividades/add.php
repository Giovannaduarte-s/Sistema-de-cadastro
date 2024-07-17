<?php
$nome = $_POST["campoName"];
$hora_inicial = $_POST["campoHora_inicial"];
$hora_final = $_POST["campoHora_final"];
$turno = $_POST["campoTurno"];
$numero = $_POST["campoNumero"];
$descricao = $_POST["campoDescricao"];

include '../includes/conexao.php';

$sql = "insert into atividades(nome, hora_inicio, hora_final, turno, numero, descricao)
values ('$nome', '$hora_inicial', '$hora_final',' $turno', '$numero', '$descricao')";

$conexao->query($sql);

header("location: index.php");