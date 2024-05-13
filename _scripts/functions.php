<?php
function dadosUser($login){
    include "config.php";
    $sql = "SELECT * FROM usuario WHERE login = '$login'";
    $query  = $mysqli->query($sql);
    $dados = $query->fetch_array();

    return ($dados['login']);
}

function dadosAlterarUsuario($id){
    include "config.php";
    $sql = "SELECT * FROM pecas WHERE id = '$id'";
    $query = $mysqli->query($sql);
    $dados = $query->fetch_array();

    return ($dados);
}

?>