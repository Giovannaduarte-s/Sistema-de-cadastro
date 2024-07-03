<?php
  include "../includes/conexao.php";
  $sql = "select * from Produtos";

  $resultado = $conexao->query($sql);
  mysqli_close($conexao);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <?php include "../includes/head.php"; ?>
</head>

<body>
  <div class="container">
    <div class="container text-center">
      <h3>Sistema XYZ</h3>
      <div class="row">
        <?php include "../includes/menu.php"; ?>
        <div class="col-9 dados">
          <h4>Lista de Produtos</h4>
          <a href="./adicionar.php" class="btn btn-light btn-sm mb-3">Adicionar</a>
          <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Categoria</th>
                <th scope="col">Preço</th>
                <th scope="col">Ações</th>
              </tr>
            </thead>
            <tbody>

            <?php while ($item = mysqli_fetch_object($resultado)) { ?>
              <tr>
                <th scope="row"><?php echo $item->id; ?></th>
                <td><?php echo $item->nome; ?></td>
                <td><?php echo $item->categoria; ?></td>
                <td><?php echo $item->preco; ?></td>
                <td>
                  <button type="button" class="btn btn-light">Editar</button>
                  <button type="button" class="btn btn-light">Excluir</button>
                </td>
              </tr>
            <?php } ?>
            </tbody>
          </table>

        </div>

    </div>

  </div>
  <?php include "../includes/js.php";?>
</body>

</html>