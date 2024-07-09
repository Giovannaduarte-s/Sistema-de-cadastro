<?php
$nome = $_POST["campoName"];
$date = $_POST["campoDate"];
$email = $_POST["campoEmail"];
$cpf = $_POST["campoCpf"];
$sexo = $_POST["campoSexo"];
$obs = $_POST["campoObservação"];

include '../includes/conexao.php';

$sql = "insert into clientes(nome, data, email, cpf, sexo, obs)
values ('$nome', '$date', '$email',' $cpf', '$sexo', '$obs')";

$conexao->query($sql);

header("location: index.php");