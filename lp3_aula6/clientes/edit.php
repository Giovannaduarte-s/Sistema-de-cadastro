<?php
$id = $_POST["campoId"];
$nome = $_POST["campoName"];
$email = $_POST["campoEmail"];
$cpf = $_POST["campoCpf"];
$data = $_POST["campoDate"];
$sexo = $_POST["campoSexo"];
$obs = $_POST["campoObservação"];


include '../includes/conexao.php';

$sql = "update clientes set nome='$nome', email='$email', cpf='$cpf', data='$data', sexo='$sexo', obs='$obs' where id = '$id'; ";

$conexao->query($sql);

header("location: index.php");
