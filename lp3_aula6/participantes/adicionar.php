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
        <h4>Lista de Selecionados</h4>
        <form action="add.php" method="post">
          <div class="mb-3">
            <label for="idname" class="form-label">Nome</label>
            <input type="text" name="campoName" class="form-control" id="idname" placeholder="Nome do Selecionado">
          </div>
          <div class="mb-3">
            <label for="idcpf" class="form-label">CPF</label>
            <input type="text" name="campoCpf" class="form-control" id="idcpf" placeholder="999999999-99">
          </div>
          <div class="mb-3">
            <label for="idemail" class="form-label">Email</label>
            <input type="email" name="campoEmail" class="form-control" id="idemail" placeholder="name@example.com">
          </div>
          <div class="mb-3">
            <label for="idtelefone" class="form-label">Telefone</label>
            <input type="text" name="campoTelefone" class="form-control" id="idtelefone" placeholder="(99) 9 9999-9999">
          </div>
          <div class="mb-3">
            <label for="idRua">Rua</label>
            <input type="text" name="campoRua" class="form-control" id="idRua" placeholder="Rua da sua residência">
          </div>
          <div class="mb-3">
            <label for="idnumero" class="form-label">Número</label>
            <input type="number" name="campoNumero" class="form-control" id="idnumero" placeholder="Número da sua residência">
          </div>
          <div class="mb-3">
            <label for="idBairro">Bairro</label>
            <input type="text" name="campoBairro" class="form-control" id="idBairro" placeholder="Bairro da sua residência">
          </div>
          <div class="mb-3">
            <label for="idCidade">Cidade</label>
            <input type="text" name="campoCidade"class="form-control" id="idCidade" placeholder="Cidade em que mora">
          </div>
          <div class="mb-3">
            <label for="idCep">Cep</label>
            <input type="text" name="campoCep" class="form-control" id="idCep" placeholder="99999-999">
          </div>
          <div class="mb-3 w-50">
            <label for="idcomplemento" class="form-label">Complemento</label>
            <textarea name="campoComplemento" class="form-control border border-primary" id="idcomplemento" rows="3"></textarea>
          </div>
          <div class="mb-3 form-check">
            <input class="form-check-input" type="checkbox" value="1"
            id="selecionado" name="campoSelecionado">
            <label class="form-check-label" for="flexCheckDefalt">
              Selecionado
            </label>
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