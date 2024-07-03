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
          <div class="mb-3">
            <label for="idname" class="form-label">Nome</label>
            <input type="text" name="campoName" class="form-control" id="idname"
              placeholder="Nome do Produto">
          </div>
          <div class="mb-3">
            <label for="idcategoria" class="form-label">Categoria</label>
            <input type="text" name="campoCategoria" class="form-control" id="idcategoria"
              placeholder="Alimentício">
          </div>
          <div class="mb-3">
            <label for="idpreco" class="form-label">Preço</label>
            <input type="text" name="campoPreco" class="form-control" id="idpreco"
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