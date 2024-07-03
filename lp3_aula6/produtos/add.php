<?php
    $nome = $_POST["campoName"]; 
    $categoria = $_POST["campoCategoria"];
    $preco = $_POST["campoPreco"];

   include '../includes/conexao.php';

   $sql = "insert into Produtos(nome, categoria, preco)
           values ('$nome', '$categoria', '$preco')";
    $conexao->query($sql);