<?php
    include '../conexion.php';
    include '../Cuenta.php';
    function guardarRegistro($oCuenta){
        global $oCuenta;
        $queryStr="INSERT INTO public.\"Registro_Cuenta\"(id_registro, fecha_modificacion, saldo, id_cuenta, debe, haber) VALUES(3,$oCuenta->getFechaModificacion(), 323, $oCuenta->getIdCuenta(), $oCuenta->getDebe(), $oCuenta->getHaber());";

        pg_query($queryStr);

    }
    $oCuenta=new Cuenta();
    $oCuenta->setIdCuenta($_POST['id_cuenta']);
    if($_POST['debe']){
        $oCuenta->setDebe($_POST['debe']);
    }else{
       $oCuenta->setDebe(0);
    }
    
    if($_POST['haber']){
        $oCuenta->setHaber($_POST['haber']);
    }else{
        $oCuenta->sethaber(0);
    }

    $oCuenta->setFechaModificacion($_POST['fecha_modificacion']);

    
    
    $oConnection=new CDConexion('localhost',5432,'postgres','postgres','contabilidad');
    
    $oConnection->openConnection();
    
  
    $queryStr="INSERT INTO public.\"Registro_Cuenta\"(id_registro, fecha_modificacion, saldo, id_cuenta, debe, haber) VALUES(4677,'".$oCuenta->getFechaModificacion()."', 323, ".$oCuenta->getIdCuenta().",".$oCuenta->getDebe().",".$oCuenta->getHaber().");";

    pg_query($queryStr);

    echo "Se guardo correctamente";

    


    
   

?>