<?php
include 'config.php';

$query = "SELECT id, title, color, start, end FROM events";

$resultados_eventos = $mysqli->prepare($query);

if($resultados_eventos){
    $resultados_eventos->execute();
    
    $resultados_eventos->bind_result($id,$title,$color,$star,$end);

    $eventos = [];

    while($resultados_eventos->fetch()){
        $eventos[]=[
            'id'=$id,
            'title'=$title,
            'color'=$color,
            'start'=$start,
            'end'=$end
        ];
    }
    echo json_encode($eventos);
}else{
    echo"Erro ao preparar consulta SQL";
}







?>