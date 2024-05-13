<html>
<head>
    <body>
        <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php

include "config.php";

$id = $_POST['id'];
$cod_peca = $_POST['cod_peca'];
$nome_peca = $_POST['nome_peca'];
$valor_vend = $_POST['valor_vend'];
$fornecedor = $_POST['fornecedor'];
$valor_venda = $_POST['valor_venda'];
$quant_pecas = $_POST['quant_pecas'];

$sql = "UPDATE pecas SET cod_peca = '$cod_peca', nome_peca = '$nome_peca', valor_vend = '$valor_vend', fornecedor = '$fornecedor', valor_venda = '$valor_venda', quant_pecas = '$quant_pecas' WHERE id = '$id'";
$query = $mysqli->query($sql);

if($query){
    ?>
    <script>
        Swal.fire({
            title: "Sucesso!",
            text: "Informações Atualizadas  .",
            icon: "success"
        }).then(okay => {
            if(okay){
                window.location.href = "../template/list_func.php";
            }
        });
    </script>
    <?php
}else{
    echo "<script>alert('Erro ao editar ');</script>";
}
?>



    </body>
</html>
