<?php
$id = $_POST["campoId"];
$nome = $_POST["campoName"];
$hora_inicial = $_POST["campoHora_inicial"];
$hora_final = $_POST["campoHora_final"];
$turno = $_POST["campoTurno"];
$numero = $_POST["campoNumero"];
$descricao = $_POST["campoDescricao"];

include '../includes/conexao.php';

$sql = "update atividades set nome='$nome', hora_inicio='$hora_inicial', hora_final='$hora_final', turno='$turno', numero='$numero', descricao='$descricao' where id = '$id'; ";

$conexao->query($sql);

header("location: index.php");
