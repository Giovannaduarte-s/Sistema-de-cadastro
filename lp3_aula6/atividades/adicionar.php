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
        <h4>Lista de Atividades</h4>
        <form action="add.php" method="post">
          <div class="mb-3">
            <label for="idname" class="form-label">Nome</label>
            <input type="text" name="campoName" class="form-control" id="idname" placeholder="Nome da Atividade">
          </div>
          <div class="mb-3">
            <label for="idhora_inicio" class="form-label">Hora de ínicio</label>
            <input type="time" name="campoHora_inicial" class="form-control" id="idhora_inicio"
              placeholder="Hora inicial - 00:00">
          </div>
          <div class="mb-3">
            <label for="idhora_final" class="form-label">Hora do Término</label>
            <input type="time" name="campoHora_final" class="form-control" id="idhora_final"
              placeholder="Hora final - 00:00">
          </div>
          <div class="mb-3 w-50">
            <label for="idturno" class="form-label">Turno</label>
            <select class="form-select border border-primary" id="idturno" name="campoTurno">
              <option selected disabled>Turno</option>
              <option value="0">Matutino</option>
              <option value="1">Vespertino</option>
              <option value="2">Noturno</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="idnumero" class="form-label">Quantidade de pessoas:</label>
            <input type="text" name="campoNumero" class="form-control" id="idnumero" placeholder="Quant. máx. pessoas">
          </div>
          <div class="mb-3 w-50">
            <label for="iddescricao" class="form-label">Descrição:</label>
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