<?php
// Pega ID na URL
$id = $_GET['id'];
// Constroi String com código SQL
$sql = "select * from atividades where id = '$id'; ";
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
        <h4>Lista de Atividades</h4>
        <form action="edit.php" method="post">

          <input type="hidden" name="campoId" value="<?php echo $id; ?>">

          <div class="mb-3">
            <label for="idname" class="form-label">Nome</label>
            <input type="text" name="campoName" class="form-control" id="idname" value="<?php echo $item->nome; ?>">
          </div>
          <div class="mb-3">
            <label for="idhora_inicio" class="form-label">Hora de ínicio</label>
            <input type="time" name="campoHora_inicial" class="form-control" id="idhora_inicio" value="<?php echo $item->hora_inicio; ?>">
          </div>
          <div class="mb-3">
            <label for="idhora_final" class="form-label">Hora do Término</label>
            <input type="time" name="campoHora_final" class="form-control" id="idhora_final" value="<?php echo $item->hora_final; ?>">
          </div>
          <div class="mb-3 w-50">
            <label for="idturno" class="form-label">Turno</label>
            <select class="form-select border border-primary" id="idturno" name="campoTurno">
              <option selected disabled>Turno</option>
              <option value="0"<?php if($item->turno==0){echo "selected";} ?>>Matutino</option>
              <option value="1"<?php if($item->turno==1){echo "selected";} ?>>Vespertino</option>
              <option value="2"<?php if($item->turno==2){echo "selected";} ?>>Noturno</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="idnumero" class="form-label">Quantidade de pessoas:</label>
            <input type="text" name="campoNumero" class="form-control" id="idnumero" value="<?php echo $item->numero; ?>">
          </div>
          <div class="mb-3 w-50">
            <label for="iddescricao" class="form-label">Descrição:</label>
            <textarea name="campoDescricao" class="form-control border border-primary" id="iddescricao" rows="3"><?php echo $item->descricao; ?></textarea>
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