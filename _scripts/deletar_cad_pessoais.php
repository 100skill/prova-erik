<!DOCTYPE html>
<html>
<head>
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
<?php
include "config.php";

$id = $_GET['id'];

// Consulta para verificar a quantidade atual da peça
$sqlQuantidade = "SELECT quant_pecas FROM pecas WHERE id='$id'";
$resultadoQuantidade = $mysqli->query($sqlQuantidade);
$quantidade = $resultadoQuantidade->fetch_assoc()['quant_pecas'];

if ($quantidade == 1) {
    // Se a quantidade for igual a um, remover a peça do banco de dados
    $sqlRemover = "DELETE FROM pecas WHERE id='$id'";
    $queryRemover = $mysqli->query($sqlRemover);
    
    if($queryRemover){?>
        <script>
            Swal.fire({
                title: "Sucesso!",
                text: "Peça removida com sucesso.",
                icon: "success"
            }).then(okay => {
                if(okay){
                    window.location.href = "../template/list_func.php";
                }
            });
        </script>
    <?php } else {
        echo "<script>alert('Falha ao remover peça');</script>";
        echo "<script>window.location='../index.php'</script>";
    }
} else {
    // Se a quantidade não for igual a um, subtrair 1 da quantidade
    $sqlSubtrair = "UPDATE pecas SET quant_pecas = GREATEST(quant_pecas - 1, 0) WHERE id='$id'";
    $querySubtrair = $mysqli->query($sqlSubtrair);
    
    if($querySubtrair){?>
        <script>
            Swal.fire({
                title: "Sucesso!",
                text: "Quantidade de peças atualizada com sucesso.",
                icon: "success"
            }).then(okay => {
                if(okay){
                    window.location.href = "../template/list_func.php";
                }
            });
        </script>
    <?php } else {
        echo "<script>alert('Falha ao atualizar quantidade de peças');</script>";
        echo "<script>window.location='../index.php'</script>";
    }
}
?>
</body>
</html>