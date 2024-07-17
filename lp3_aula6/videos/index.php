<?php
include "../includes/conexao.php";
$sql = "select * from videos";

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
          <h4>Lista de Vídeos</h4>
          <a href="./adicionar.php" class="btn btn-light btn-sm mb-3">Adicionar</a>
          <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Título</th>
                <th scope="col">Duração</th>
                <th scope="col">Link</th>
                <th scope="col">Ações</th>
              </tr>
            </thead>
            <tbody>

              <?php while ($item = mysqli_fetch_object($resultado)) { ?>
                <tr>
                  <th scope="row"><?php echo $item->id; ?></th>
                  <td><?php echo $item->titulo; ?></td>
                  <td><?php echo $item->duracao; ?></td>
                  <td><a href="<?php echo "https://www.youtube.com/watch?v=".$item->video; ?>">Link</a></td>
                  <td>
                    <a href="editar.php?id=<?php echo $item->id ?>" class="btn btn-light">Editar</a>
                    <a href="javascript:excluir(<?php echo $item->id ?>)" class="btn btn-light">Excluir</a>
                  </td>
                </tr>
              <?php } ?>
            </tbody>
          </table>

        </div>

      </div>

    </div>
    <?php include "../includes/js.php"; ?>
    <!-- Início - Js para exclusão -->
    <script>
      function excluir(id) {
        if (confirm("Tem certeza?")) {
          window.location.href = "del.php?id=" + id;
        }

      }
    </script>
    <!-- Fim - Js para exclusão -->

</body>

</html>