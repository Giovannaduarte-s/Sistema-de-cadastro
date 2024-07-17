<?php
$id = $_POST["campoId"];
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

$sql = "UPDATE participantes SET nome = '$nome', cpf = '$cpf', email = '$email', telefone = '$telefone', rua = '$rua', numero = '$numero', bairro = '$bairro', cidade = '$cidade', cep = '$cep', complemento = '$complemento', selecionado = '$selecionado' WHERE participantes.id = $id;";

$conexao->query($sql);

header("location: index.php");
