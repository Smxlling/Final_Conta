    var json;
    var debe;
    var haber;
    var idCuenta;

$("document").ready(function(){
        //cargar la tabla registros de cuentas
        $.ajax({
            type: 'POST',
            url: '../modelo/ajax/tabla-registro.php',
            success: function(resp){
            var oJson=JSON.parse(resp);
                console.log(oJson);
                for(var i=0; i<oJson.length; i++){
                    var tr = `<tr>
                      <td>`+oJson[i].id_registro+`</td>
                      <td>`+oJson[i].id_cuenta+`</td>
                      <td>`+oJson[i].descripcion+`</td>
                      <td>`+oJson[i].debe+`</td>
                      <td>`+oJson[i].haber+`</td>
                      <td>`+oJson[i].fecha_modificacion+`</td>
                      <td>`+oJson[i].categoria_balance+`</td>
                    </tr>`;
                    $("#cuerpo").append(tr)
                  } 
            }
        });


        var txtDebe=$('#txtDebe');
        var txtHaber=$('#txtHaber')


        txtDebe.change(function(e){
            if($(this).val().length>1){
               $('#txtHaber').attr('disabled','disabled');
            }else{
                $('#txtHaber').removeAttr('disabled');
            }
        });

        txtHaber.change(function(e){
            if($(this).val().length>1){
               txtDebe.attr('disabled','disabled');
            }else{
                txtHaber.removeAttr('disabled');
            }
        });
        

        $('#btnAceptar').click(function(e){
            if(!txtDebe.attr('disabled')){  
                debe=txtDebe.val();
               
            }
            if(!txtHaber.attr('disabled')){
                haber=txtHaber.val();
                
            }
        
            idCuenta=document.getElementById("idCuenta").options.selectedIndex;
            f=new Date()
            var dia=f.getDate();
            var mes=f.getMonth()+1;
            var anio=f.getFullYear();   
            var fecha=dia+"-"+mes+"-"+anio;
            
           
           var  parametros = {"id_cuenta":idCuenta,"fecha_modificacion":fecha,"debe":debe,"haber":haber};
            
            $.ajax({
                type: 'POST',
                url: '../modelo/ajax/recibe-insercion.php',
                data: parametros,
                success: function(resp){
                    
                    console.log(resp); 
                }
            });
            
        }); 

        


       
       
        
        
        
/**/

    });



