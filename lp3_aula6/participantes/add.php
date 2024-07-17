<?php
$nome = $_POST["campoName"];
$cpf = $_POST["campoCpf"];
$email = $_POST["campoEmail"];
$telefone = $_POST["campoTelefone"];
$rua = $_POST["campoRua"];
$numero = $_POST["campoNumero"];
$bairro = $_POST["campoBairro"];
$cidade = $_POST["campoCidade"];
$cep = $_POST["campoCep"];
$complemento = $_POST["campoComplemento"];
$selecionado = $_POST["campoSelecionado"];

include '../includes/conexao.php';

$sql = "insert into participantes(nome, cpf, email, telefone, rua, numero, bairro, cidade, cep, complemento, selecionado)
values ('$nome', ' $cpf', '$email', '$telefone', '$rua', '$numero', '$bairro', '$cidade', '$cep', '$complemento', '$selecionado')";

$conexao->query($sql);

header("location: index.php");