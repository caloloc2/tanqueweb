<?php 

$respuesta['estado'] = false;

try{
    
    require 'php/meta.php';

    if (isset($_REQUEST['nivel'])){
        $nivel = $_REQUEST['nivel'];

        $tanque = Meta::Consulta_Unico("SELECT * FROM tanque ORDER BY id_tanque DESC LIMIT 1");
    
        if ($tanque==''){
            $nuevo = Meta::Nuevo_Tanque($nivel);
        }else{
            $actualiza = Meta::Ejecutar("UPDATE tanque SET nivel=".$nivel." WHERE id_tanque=".$tanque['id_tanque']);
        }
    
        $respuesta['estado'] = true;
    }else{
        $respuesta['error'] = "Debe ingresar un valor de nivel para el tanque";
    }
    
}catch(Exception $e){
    $respuesta['error'] = $e->getMessage();
}

echo json_encode($respuesta);