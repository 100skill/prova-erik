<html>
<head>
    <body>
        <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php
include "config.php";

$id = $_GET['id'];

// Subtrai uma unidade da quantidade da peça com o ID especificado
$sqlSubtrair = "UPDATE pecas SET quant_pecas = quant_pecas - 1 WHERE id='$id'";
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
                
<?php }else{
    echo "<script>alert('Falha ao atualizar quantidade de peças');</script>";
    echo "<script>window.location='../index.php'</script>";
}

?>
    </body>
</html>
