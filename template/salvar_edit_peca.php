<?php
include "../_scripts/config.php";

$id_peca = $_POST['id_peca'];
$cod_peca = $_POST['cod_peca'];
$nome_peca = $_POST['nome_peca'];
$valor_vend = $_POST['valor_vend'];
$fornecedor = $_POST['fornecedor'];
$quant_pecas = $_POST['quant_pecas'];

$sql = "UPDATE pecas SET cod_peca='$cod_peca', nome_peca='$nome_peca', valor_vend='$valor_vend', fornecedor='$fornecedor', quant_pecas='$quant_pecas' WHERE id='$id_peca'";
$mysqli->query($sql);

header("Location: lista_de_pecas.php"); // Redireciona de volta para a lista de peças após a edição
exit();
?>
