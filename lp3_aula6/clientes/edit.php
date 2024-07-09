<?php
$id = $_POST["campoId"];
$nome = $_POST["campoName"];
$email = $_POST["campoEmail"];


include '../includes/conexao.php';

$sql = "update clientes set nome='$nome', email='$email' where id = '$id'; ";

$conexao->query($sql);

header("location: index.php");
