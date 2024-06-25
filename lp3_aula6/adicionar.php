<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="CSS/style.css">
  <title>CRUD - Aula 1</title>
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
        <form>
          <div class="mb-3">
            <label for="idname" class="form-label">Nome</label>
            <input type="text" name="campoName" class="form-control" id="exampleFormControlInput1"
              placeholder="Seu nome">
          </div>
          <div class="mb-3">
            <label for="iddate" class="form-label">Data de Nascimento</label>
            <input type="date" name="campoDate" class="form-control" id="exampleFormControlInput1"
              placeholder="Seu data de nascimento">
          </div>
          <div class="mb-3">
            <label for="idemail" class="form-label">Email</label>
            <input type="email" name="campoEmail" class="form-control" id="exampleFormControlInput1"
              placeholder="name@example.com">
          </div>
          <div class="mb-3">
            <label for="idcpf" class="form-label">CPF</label>
            <input type="text" name="campoCpf" class="form-control" id="exampleFormControlInput1"
              placeholder="999999999-99">
          </div>
          <label class="form-label">Sexo</label>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="campoSexo" id="flexRadioDefault1">
            <label class="form-check-label" for="idsexom">
              Masculino
            </label>
          </div>
          <div class="form-check mb-3">
            <input class="form-check-input" type="radio" name="campoSexo" id="flexRadioDefault2" checked>
            <label class="form-check-label" for="idsexof">
              Feminino
            </label>
          </div>
          <div class="mb-3">
            <label for="idobservação" class="form-label">Observação</label>
            <textarea class="form-control" name="campoObservação" id="exampleFormControlTextarea1" rows="3"></textarea>
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