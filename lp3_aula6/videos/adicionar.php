<!DOCTYPE html>
<html lang="pt-br">

<head>
  <?php include "../includes/head.php"; ?>
</head>

<body>
  <div class="container">
    <h3>Sistema XYZ</h3>
    <div class="row">
      <?php include "../includes/menu.php"; ?>
      <div class="col-9 dados">
        <h4>Lista de Vídeos</h4>
        <form action="add.php" method="post">
          <div class="mb-3">
            <label for="idtitulo" class="form-label">Título do vídeo</label>
            <input type="text" name="campoTitulo" class="form-control" id="idtitulo" placeholder="Dennis DJ">
          </div>
          <div class="mb-3">
            <label for="idautor" class="form-label">Autor</label>
            <input type="text" name="campoAutor" class="form-control" id="idautor" placeholder="Dennis DJ">
          </div>
          <div class="mb-3">
            <label for="iddata" class="form-label">Data</label>
            <input type="date" name="campoData" class="form-control" id="iddata" placeholder="10/10/2010">
          </div>
          <div class="mb-3">
            <label for="idvideo" class="form-label">Vídeo</label>
            <input type="text" name="campoVideo" class="form-control" id="idvideo" placeholder="120445202">
          </div>
          <div class="mb-3">
            <label for="idduracao" class="form-label">Duração</label>
            <input type="time" name="campoDuracao" class="form-control" id="idduracao"
              placeholder="13:13">
          </div>
          <div class="mb-3 w-50">
            <label for="iddescricao" class="form-label">Descrição</label>
            <textarea name="campoDescricao" class="form-control border border-primary" id="iddescricao" rows="3"></textarea>
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