<html>
<head>
    <body>
        <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php
include "config.php";

$cod_peca = $_POST['cod_peca'];
$nome_peca = $_POST['nome_peca'];
$valor_vend = $_POST['valor_vend'];
$fornecedor = $_POST['fornecedor'];
$valor_venda = $_POST['valor_venda'];
$quant_pecas = $_POST['quant_pecas'];



$sql = "INSERT INTO pecas (cod_peca,nome_peca,valor_vend,fornecedor,valor_venda,quant_pecas) VALUES ('$cod_peca'
,'$nome_peca
','$valor_vend','$fornecedor','$valor_venda','$quant_pecas')";
$query = $mysqli->query($sql);

if($query){?>
    <script>
                Swal.fire({
                    title: "Sucesso!",
                    text: "Cadastro Realizado com Sucesso.",
                    icon: "success"
                    }).then(okay => {
                        if(okay){
                            window.location.href = "../template/list_func.php";
                        }
                    });
            </script>
                
<?php }else{
    echo "<script>alert('Login inválido');</script>";
    echo "<script>window.location='../index.php'</script>";
}

?>
    </body>
</html>