<?php
  // Pega ID na URL
  $id = $_GET ['id'];
  // Constroi String com código SQL
  $sql = "select * from produtos where id = '$id'; ";
  // Inclui a conexão com o Banco de Dados
  include '../includes/conexao.php';
  // Executa String $SQL no Banco de Dados
  $resultado = $conexao->query($sql);
  //Transforma dados em um objeto
  $item = mysqli_fetch_object($resultado)
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <?php include "../includes/head.php"; ?>
</head>

<body>
  <div class="container">
    <h3>Sistema XYZ</h3>
    <div class="row">
      <div class="col-3 menu">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Clientes</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Produtos</a>
          </li>
        </ul>
      </div>
      <div class="col-9 dados">
        <h4>Lista de Produtos</h4>
        <form action="add.php" method="post">

          <input type="hidden" name="campoId" value="<?php echo $id; ?>">
          
          <div class="mb-3">
            <label for="idname" class="form-label">Nome</label>
            <input type="text" name="campoName" class="form-control" id="idname" value="<?php echo $item->nome; ?>"
              placeholder="Nome do Produto">
          </div>
          <div class="mb-3">
            <label for="idcategoria" class="form-label">Categoria</label>
            <input type="text" name="campoCategoria" class="form-control" id="idcategoria" value="<?php echo $item->categoria; ?>"
              placeholder="Alimentício">
          </div>
          <div class="mb-3">
            <label for="idpreco" class="form-label">Preço</label>
            <input type="text" name="campoPreco" class="form-control" id="idpreco" value="<?php echo $item->preco
            ; ?>"
              placeholder="Preço">
          </div>
          <button type="submit" class="btn btn-light mb-3">Gravar</button>
          <a href="./" class="btn btn-light mb-3">Voltar</a>
        </form>
      </div>
    </div>

  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>