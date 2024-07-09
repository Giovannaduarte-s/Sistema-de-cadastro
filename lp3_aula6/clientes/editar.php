<?php
// Pega ID na URL
$id = $_GET['id'];
// Constroi String com código SQL
$sql = "select * from clientes where id = '$id'; ";
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
        <form action="edit.php" method="post">

          <input type="hidden" name="campoId" value="<?php echo $id; ?>">

          <div class="mb-3">
            <label for="idname" class="form-label">Nome</label>
            <input type="text" name="campoName" class="form-control" id="idname" value="<?php echo $item->nome; ?>">
          </div>
          <div class="mb-3">
            <label for="idcpf" class="form-label">CPF</label>
            <input type="text" name="campoCpf" class="form-control" id="idcpf" value="<?php echo $item->cpf; ?>">
          <div class="mb-3">
            <label for="idemail" class="form-label">Email:</label>
            <input type="e-mail" name="campoEmail" class="form-control" id="idemail" value="<?php echo $item->email; ?>">
          </div>
          <div class="mb-3">
            <label for="iddate" class="form-label">Data de Nascimento</label>
            <input type="date" name="campoDate" class="form-control" id="iddate" value="<?php echo $item->data; ?>">
          </div>
          <label class="form-label">Sexo</label>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="campoSexo" id="idsexom" value="1" <?php if($item->sexo==1){echo "checked";} ?>>
            <label class="form-check-label" for="idsexom">
              Masculino
            </label>
          </div>
          <div class="form-check mb-3">
            <input class="form-check-input" type="radio" name="campoSexo" id="idsexof" value="0" <?php if($item->sexo==0){echo "checked";} ?>>
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