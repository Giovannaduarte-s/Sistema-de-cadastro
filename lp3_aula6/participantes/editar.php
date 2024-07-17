<?php
// Pega ID na URL
$id = $_GET['id'];
// Constroi String com código SQL
$sql = "select * from participantes where id = '$id'; ";
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
        <h4>Lista de Participantes</h4>
        <form action="edit.php" method="post">

          <input type="hidden" name="campoId" value="<?php echo $id; ?>">

          <div class="mb-3">
            <label for="idname" class="form-label">Nome</label>
            <input type="text" name="campoName" class="form-control" id="idname" value="<?php echo $item->nome; ?>">
          </div>
          <div class="mb-3">
            <label for="idcpf" class="form-label">CPF</label>
            <input type="text" name="campoCpf" class="form-control" id="idcpf" value="<?php echo $item->cpf; ?>">
          </div>
          <div class="mb-3">
            <label for="idemail" class="form-label">Email</label>
            <input type="email" name="campoEmail" class="form-control" id="idemail" value="<?php echo $item->email; ?>">
          </div>
          <div class="mb-3">
            <label for="idtelefone" class="form-label">Telefone</label>
            <input type="text" name="campoTelefone" class="form-control" id="idtelefone" value="<?php echo $item->telefone; ?>">
          </div>
          <div class="mb-3">
            <label for="idRua">Rua</label>
            <input type="text" name="campoRua" class="form-control" id="idRua" value="<?php echo $item->rua; ?>">
          </div>
          <div class="mb-3">
            <label for="idnumero" class="form-label">Número</label>
            <input type="number" name="campoNumero" class="form-control" id="idnumero" value="<?php echo $item->numero; ?>">
          </div>
          <div class="mb-3">
            <label for="idBairro">Bairro</label>
            <input type="text" name="campoBairro" class="form-control" id="idBairro" value="<?php echo $item->bairro; ?>">
          </div>
          <div class="mb-3">
            <label for="idCidade">Cidade</label>
            <input type="text" name="campoCidade"class="form-control" id="idCidade" value="<?php echo $item->cidade; ?>">
          </div>
          <div class="mb-3">
            <label for="idCep">Cep</label>
            <input type="text" name="campoCep" class="form-control" id="idCep" value="<?php echo $item->cep; ?>">
          </div>
          <div class="mb-3 w-50">
            <label for="idcomplemento" class="form-label">Complemento</label>
            <textarea name="campoComplemento" class="form-control border border-primary" id="idcomplemento" rows="3"><?php echo $item->complemento; ?></textarea>
          </div>
          <div class="mb-3 form-check">
            <input class="form-check-input" type="checkbox" value="1"
            id="selecionado" name="campoSelecionado" <?php if($item->selecionado==1){echo "checked";} ?>>
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