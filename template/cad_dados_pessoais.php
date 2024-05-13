<!DOCTYPE html>
<html lang="pt-br">

<?php include "head.php"; ?>

<body class="">
  <div class="wrapper ">
    <?php include "menu.php"; ?>
    <div class="main-panel">
      <!-- Navbar -->
      <?php include "nav_superior.php"; ?>
      <!-- End Navbar -->
      <div class="content">
        <!--cards-->
        <div class="row">
          <div class="col-md-12">
            <div class="card ">
              <div class="card-header ">
                <h5 class="card-title">Cadastrar Peça</h5>
                <p class="card-category">Dados da peça</p>
              </div>
              <div class="card-body ">
                <form class="row g-3" method="post" action="../_scripts/salvar_cad_pessoais.php">
                  <div class="col-md-6">
                    <label for="inputEmail4" class="form-label">Cod peça</label>
                    <input  name="cod_peca"  id="cod">
                  </div>
                  <div class="col-md-6">
                    <label for="inputEmail4" class="form-label">Fornecedor</label>
                    <input  name="fornecedor"  id="forn">
                  </div>
                  <div class="col-md-6">
                    <label for="inputPassword4"  class="form-label">Nome da peça</label>
                    <input type="text" name="nome_peca" required class="form-control" id="inputPassword4">
                  </div>
                  <div class="col-4">
                    <label for="inputAddress"  class="form-label">Valor compra</label>
                    <input type="text"class="form-control" name="valor_vend">
                  </di compra>
                  <div class="col-8">
                    <label for="inputAddress2" class="form-label">Quantidade</label>
                    <input type="text" class="form-control"  name="quant_pecas"  id="quantidade" >
                  </div>
                  <div class="col-md-4">
                    <label for="inputCity" class="form-label">valor de venda</label>
                    <input type="text" name="valor_venda" id="valorv" class="form-control" >
                  </div>
                  <div class="col-md-4">
                  
                  </div>
                  <div class="col-12">
                    <button type="submit" class="btn btn-primary">Salvar</button>
                    <a href="list_func.php" class="btn btn-primary">Ver Peças</a>
                    

                  </div>
                </form>
              </div>
              <div class="card-footer ">
                <hr>
                <div class="stats">
                  <i class="fa fa-history"></i> Cadastro de peças
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php include "footer.php"; ?>
    </div>
  </div>
  <?php include "js.php"; ?>

</body>

</html>