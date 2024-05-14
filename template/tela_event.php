<!DOCTYPE html>
<html lang="pt-br">

<?php include "head.php";?>

<body class="">
  <div class="wrapper ">
    <?php include "menu.php"; ?>
    <div class="main-panel">
     

    <?php include "nav_superior.php"; ?>

      <div class="content">
        <!--cards-->
        <div class="row">
          <div class="col-md-12">
              <div class="card-body ">
                <form class="row g-3" method="post" action="../_scripts/salvar_evento.php">
                  <div class="col-md-6">
                    <label for="inputTitle" class="form-label">Titulo</label>
                    <input type="text" name="title" required class="form-control" id="title">
                  </div>
                  <div class="col-md-6">
                    <label for="inputStart" class="form-label">Data de Inicio</label>
                    <input type="date" name="start" required class="form-control" id="start">
                  </div>
                  <div class="col-md-6">
                    <label for="inputEnd" class="form-label">Data de término</label>
                    <input type="date" name="end" required class="form-control" id="end">
                  </div>
                  <div class="col-12">
                    <button type="submit" class="btn btn-primary">Salvar</button>
                    <a href="cad_dados_pessoais.php" class="btn btn-primary">Voltar</a>
                  </div>
                </form>
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