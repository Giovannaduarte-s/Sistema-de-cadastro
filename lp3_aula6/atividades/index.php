<?php
include "../includes/conexao.php";
$sql = "select * from atividades";

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
          <h4>Lista de Atividades</h4>
          <a href="./adicionar.php" class="btn btn-light btn-sm mb-3">Adicionar</a>
          <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Hora início</th>
                <th scope="col">Hora termino </th>
                <th scope="col">Turno</th>
                <th scope="col">Quantidade de pessoas</th>
                <th scope="col">Descrição</th>
                <th scope="col">Ações</th>
              </tr>
            </thead>
            <tbody>

              <?php while ($item = mysqli_fetch_object($resultado)) { ?>
                <tr>
                  <th scope="row"><?php echo $item->id; ?></th>
                  <td><?php echo $item->nome; ?></td>
                  <td><?php echo $item->hora_inicio; ?></td>
                  <td><?php echo $item->hora_final ?></td>
                  <td><?php if($item->turno==0){echo "Matutino";}  if($item->turno==1){echo "Vespertino";}  if($item->turno==2){echo "Noturno";} ?></td>
                  <td><?php echo $item->numero;?></td>
                  <td><?php echo $item->descricao; ?></td>
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