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
        <h4>Lista de Clientes</h4>
        <form action="add.php" method="post">
          <div class="mb-3">
            <label for="idname" class="form-label">Nome</label>
            <input type="text" name="campoName" class="form-control" id="idname"
              placeholder="Seu nome">
          </div>
          <div class="mb-3">
            <label for="iddate" class="form-label">Data de Nascimento</label>
            <input type="date" name="campoDate" class="form-control" id="iddate"
              placeholder="Seu data de nascimento">
          </div>
          <div class="mb-3">
            <label for="idemail" class="form-label">Email</label>
            <input type="email" name="campoEmail" class="form-control" id="idemail"
              placeholder="name@example.com">
          </div>
          <div class="mb-3">
            <label for="idcpf" class="form-label">CPF</label>
            <input type="text" name="campoCpf" class="form-control" id="idcpf"
              placeholder="999999999-99">
          </div>
          <label class="form-label">Sexo</label>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="campoSexo" id="idsexom" value="1">
            <label class="form-check-label" for="idsexom">
              Masculino
            </label>
          </div>
          <div class="form-check mb-3">
            <input class="form-check-input" type="radio" name="campoSexo" id="idsexof" value="0" checked>
            <label class="form-check-label" for="idsexof">
              Feminino
            </label>
          </div>
          <div class="mb-3">
            <label for="idobservação" class="form-label">Observação</label>
            <textarea class="form-control" name="campoObservação" id="idobservação" rows="3"></textarea>
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