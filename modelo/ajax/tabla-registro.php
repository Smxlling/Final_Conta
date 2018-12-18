<?php
    include '../Cuenta.php';
    include '../conexion.php';
    $oCuenta=new Cuenta();
    $conexion=new CDConexion('localhost',5432,'postgres','postgres','contabilidad');

    $conexion->openConnection();


    $strQuery="SELECT id_registro,public.\"Cuenta\".id_cuenta,descripcion,debe,haber,fecha_modificacion,categoria_balance 
    FROM public.\"Registro_Cuenta\"  INNER JOIN public.\"Cuenta\" 
    on public.\"Registro_Cuenta\".id_cuenta = public.\"Cuenta\".id_cuenta;";


    
    $query=pg_query($strQuery);

    while($resultado=pg_fetch_row($query)){
        $arreglo[] =array('id_registro'=>$resultado[0],'id_cuenta'=>$resultado[1],'descripcion'=>$resultado[2],'debe'=>$resultado[3],'haber'=>$resultado[4],'fecha_modificacion'=>$resultado[5],'categoria_balance'=>$resultado[6]);
        
    }
        $ojon_code=json_encode($arreglo);

        
        echo $ojon_code;


?>