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
                                <h5 class="card-title">Listas das peças</h5>
                                <p class="card-category">Confira as peças</p>
                                <input type="text" id="searchInput" onkeyup="searchPecas()" placeholder="Pesquisar por código da peça...">
                                <button onclick="calcularTotal()">Calcular Total</button> <!-- Botão para calcular o total -->
                            </div>
                            <div class="card-body ">
                                <table id="example" class="display" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Código da peça</th>
                                            <th>Nome de peça</th>
                                            <th>Valor da peça</th>
                                            <th>Fornecedor</th>
                                            <th>Valor de venda</th>
                                            <th>&nbsp;</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                         <?php
                                            include "../_scripts/config.php";
                                            $sql = "SELECT * FROM pecas";
                                            $query  = $mysqli->query($sql);
                                            $dados = $query->fetch_array();
                                            while($dados = $query->fetch_array()){
                                            ?>
                                        <tr> 
                                            <td><?php echo $dados['cod_peca']; ?></td>
                                            <td><?php echo $dados['nome_peca']; ?></td>
                                            <td><?php echo $dados['valor_vend']; ?></td>
                                            <td><?php echo $dados['fornecedor']; ?></td>
                                            <td><?php echo $dados['valor_venda']; ?></td>
                                            <td><?php echo $dados['quant_pecas']; ?></td>
                                            <td><i></i></a> |
                                            <a href="editar_peca.php?id=<?php echo $dados['id']; ?>"><i class="fa-regular fa-pen-to-square"></i></a>

                                                <a href="../_scripts/deletar_cad_pessoais.php?id=<?php echo $dados['id']; ?> ">
                                                    <i class="fa-solid fa-trash-can"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Codigo da peça</th>
                                            <th>Nome da peça</th>
                                            <th>valor da peça</th>
                                            <th>Fornecedor</th>
                                            <th>valor de venda</th>
                                            <th>Quantidade de peças</th>
                                            <th>&nbsp;</th>
                                        </tr>
                                        <a href="cad_dados_pessoais.php" class="btn btn-primary">Cadastrar nova peça</a>

                                    </tfoot>
                                </table>
                            </div>
                            <div class="card-footer ">
                                <hr>
                                <div class="stats">
                                    <span id="totalPeças"></span> 
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

    <script>
        function calcularTotal() {
            var total = 0;
            var table = document.getElementById("example");
            var tbody = table.getElementsByTagName("tbody")[0];
            var rows = tbody.getElementsByTagName("tr");
            
            for (var i = 0; i < rows.length; i++) {
                var cells = rows[i].getElementsByTagName("td");
                var valorPeça = parseFloat(cells[2].innerText.replace("R$ ", "")); 

                if (!isNaN(valorPeça)) {
                    total += valorPeça;
                }
            }

            document.getElementById("totalPeças").innerText = "Total: R$ " + total.toFixed(2); // Exibe o total no elemento desejado
        }

        function searchPecas() {
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("searchInput");
            filter = input.value.toUpperCase();
            table = document.getElementById("example");
            tr = table.getElementsByTagName("tr");

            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[0]; // Coluna do código da peça

                if (td) {
                    txtValue = td.textContent || td.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }
                }
            }
        }
    </script>
</body>
</html>
