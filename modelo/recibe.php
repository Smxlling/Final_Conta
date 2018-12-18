<?php
include 'conexion.php';


$oConnection=new CDConexion('localhost',5432,'postgres','postgres','contabilidad');

$oConnection->openConnection();





$strQuery='SELECT * FROM public."Cuenta";';
$queryt=$oConnection->runQuery($strQuery);

while($resultado=pg_fetch_row($queryt)){
    $arreglo[] =array('descripcion'=>$resultado[0],'categoria_balance'=>$resultado[1],'categoria_estado_resultado'=>$resultado[2],'id_cuenta'=>$resultado[3]);
    
}
    $ojon_code=json_encode($arreglo);

    
    echo $ojon_code;

?>