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
                                <h5 class="card-title">Editar Peça</h5>
                                <p class="card-category">Dados da peça</p>
                            </div>
                            <div class="card-body ">
                                <?php
                                include "../_scripts/config.php";
                                if(isset($_GET['id'])){
                                    $id_peca = $_GET['id'];
                                    $sql = "SELECT * FROM pecas WHERE id='$id_peca'";
                                    $query  = $mysqli->query($sql);
                                    $dados = $query->fetch_array();
                                } else {
                                    // Redirecionar de volta para a página anterior ou mostrar uma mensagem de erro
                                    header("Location: list_func.php");
                                    exit();
                                }
                                ?>
                                <form class="row g-3" method="post" action="../_scripts/salvar_edit_cad_pessoais.php">
                                    <input type="hidden" name="id" value="<?php echo $dados['id']; ?>">
                                    <div class="col-md-6">
                                        <label for="inputEmail4" class="form-label">Código Peça</label>
                                        <input type="text" name="cod_peca" value="<?php echo $dados['cod_peca']; ?>">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="inputPassword4"  class="form-label">Nome da peça</label>
                                        <input type="text" name="nome_peca" value="<?php echo $dados['nome_peca']; ?>">
                                    </div>
                                    <div class="col-4">
                                        <label for="inputAddress"  class="form-label">Valor da peça</label>
                                        <input type="text" name="valor_vend" value="<?php echo $dados['valor_vend']; ?>" class="form-control">
                                    </div>
                                    <div class="col-8">
                                        <label for="inputAddress2" class="form-label">Fornecedor</label>
                                        <input type="text" class="form-control" name="fornecedor" value="<?php echo $dados['fornecedor']; ?>">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="inputCity" class="form-label">Valor de venda</label>
                                        <input type="text" name="valor_venda" value="<?php echo $dados['valor_venda']; ?>" class="form-control">
                                    </div>
                                    <div class="col-md-4">
                                        <label for="inputCity" class="form-label">Quantidade de peças</label>
                                        <input type="text" name="quant_pecas" value="<?php echo $dados['quant_pecas']; ?>" class="form-control">
                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary">Editar informações</button>
                                        <a href="list_func.php" class="btn btn-primary">Ver Peças</a>
                                    </div>
                                </form>
                            </div>
                            <div class="card-footer ">
                                <hr>
                                <div class="stats">
                                    <i class="fa fa-history"></i> Editar dados das peças
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
