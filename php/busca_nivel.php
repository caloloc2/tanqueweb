<?php 

$respuesta['estado'] = false;

try{
    require 'meta.php';

    $tanque = Meta::Consulta_Unico("SELECT * FROM tanque ORDER BY id_tanque DESC LIMIT 1");

    $nivel = 0;
    if ($tanque['nivel']!=''){
        $nivel = floatval($tanque['nivel']);
    }

    $respuesta['nivel'] = $nivel;

    $respuesta['estado'] = true;
}catch(Exception $e){
    $respuesta['error'] = $e->getMessage();
}

echo json_encode($respuesta);