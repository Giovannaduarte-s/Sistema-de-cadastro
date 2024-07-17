<?php
// Pega ID na URL
$id = $_GET['id'];
// Constroi String com código SQL
$sql = "select * from videos where id = '$id'; ";
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
        <h4>Lista de Vídeos:</h4>
        <form action="edit.php" method="post">

          <input type="hidden" name="campoId" value="<?php echo $id; ?>">

          <div class="mb-3">
            <label for="idtitulo" class="form-label">Título</label>
            <input type="text" name="campoTitulo" class="form-control" id="idtitulo"
              value="<?php echo $item->titulo; ?>">
          </div>
          <div class="mb-3">
            <label for="idautor" class="form-label">Autor</label>
            <input type="text" name="campoAutor" class="form-control" id="idautor"  value="<?php echo $item->autor; ?>">
          </div>
          <div class="mb-3">
            <label for="iddata" class="form-label">Data</label>
            <input type="date" name="campoData" class="form-control" id="iddata"  value="<?php echo $item->data; ?>">
          </div>
          <div class="mb-3">
            <label for="idvideo" class="form-label">Vídeo</label>
            <input type="text" name="campoVideo" class="form-control" id="idvideo"  value="<?php echo $item->video; ?>">
          </div>
          <div class="mb-3">
            <label for="idduracao" class="form-label">Duração</label>
            <input type="time" name="campoDuracao" class="form-control" id="idduracao"  value="<?php echo $item->duracao; ?>">
          </div>
          <div class="mb-3 w-50">
            <label for="iddescricao" class="form-label">Descrição</label>
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