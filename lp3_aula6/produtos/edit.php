<?php
$id = $_POST["campoId"];
$nome = $_POST["campoName"];
$categoria = $_POST["campoCategoria"];
$preco = $_POST["campoPreco"];

include '../includes/conexao.php';

$sql = "update produtos set nome='$nome', categoria='$categoria', preco='$preco' where id = '$id'; ";

$conexao->query($sql);

header("location: index.php");