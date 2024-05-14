<!DOCTYPE html>
<html lang="pt-br">
<?php include "head.php"; ?>
<body class="">
    <div class="wrapper">
        <?php include "menu.php"; ?>
        <div class="main-panel">
            <!-- Navbar -->
            <?php include "nav_superior.php"; ?>
            <!-- End Navbar -->
            <div class="content">
                <!--cards-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title">Cadastrar Peça</h5>
                                <p class="card-category">Dados da peça</p>
                            </div>
                            <div class="card-body">
                                <form class="row g-3" method="post" action="../_scripts/salvar_cad_pessoais.php">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="cod">Cod peça</label>
                                            <input type="text" name="cod_peca" id="cod" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="forn">Fornecedor</label>
                                            <input type="text" name="fornecedor" id="forn" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="inputPassword4">Nome da peça</label>
                                            <input type="text" name="nome_peca" required class="form-control" id="inputPassword4">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="valor_compra">Valor compra</label>
                                            <input type="text" class="form-control" name="valor_vend">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="quantidade">Quantidade</label>
                                            <input type="text" class="form-control" name="quant_pecas" id="quantidade">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="valor_venda">Valor de venda</label>
                                            <input type="text" name="valor_venda" id="valorv" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary">Salvar</button>
                                        <a href="list_func.php" class="btn btn-primary">Ver Peças</a>
                                        <a href="calendario.php" class="btn btn-primary">Ver calendario</a>
                                        <a href="tela_event.php" class="btn btn-primary">Marcar Eventos</a>
                                    </div>
                                </form>
                            </div>
                            <div class="card-footer">
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
