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
    <div class="container text-center">
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
          <a href="./adicionar.php" class="btn btn-light btn-sm mb-3">Adicionar</a>
          <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">E-mail</th>
                <th scope="col">Ações</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Giovanna</td>
                <td>giovanna.cassiano@estudante.iftm.edu.br</td>
                <td>
                  <button type="button" class="btn btn-light">Editar</button>
                  <button type="button" class="btn btn-light">Excluir</button>
                </td>
              </tr>
              <tr>
                <th scope="row">1</th>
                <td>Giovanna</td>
                <td>giovanna.cassiano@estudante.iftm.edu.br</td>
                <td>
                  <button type="button" class="btn btn-light">Editar</button>
                  <button type="button" class="btn btn-light">Excluir</button>
                </td>
              </tr>
              <tr>
                <th scope="row">1</th>
                <td>Giovanna</td>
                <td>giovanna.cassiano@estudante.iftm.edu.br</td>
                <td>
                  <button type="button" class="btn btn-light">Editar</button>
                  <button type="button" class="btn btn-light">Excluir</button>
                </td>
              </tr>
            </tbody>
          </table>

        </div>

      </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"></script>
</body>

</html>