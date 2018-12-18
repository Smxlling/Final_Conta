<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/nueva-partida.css">
    <title>Document</title>
</head>
<body>
    <div class="container border p-0 mt-4 ">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="titulo-pd text-center">Partida doble</h3>
                </div>
            </div>
        <div class="container contenedor ">
            
            <div class="row form-group">
           
            
                <div class="col-lg-3">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="inputGroupSelect01">Cuenta</label>
                        </div>
                        <select id="idCuenta"class="custom-select" name="idCuenta" id="inputGroupSelect01">
                        <option selected>Elige</option>
                        <option value="1">cuenta</option>
                        <option value="2">cuenta</option>
                        <option value="3">cuenta</option>
                        </select>
                    </div>

                </div>

                <div class="col-lg-2">
                    <input type="text" class="form-control" name="txtDebe" id="txtDebe" placeholder="Debe">
                
                </div>
                <div class="col-lg-2">
                <input type="text" class="form-control" name="txtHaber" id="txtHaber" placeholder="Haber">
                </div>
            
            

                
            </div>
            <div class="row">
                <div class="col-lg-2">
                    <input id="btnAceptar" class="container btn btn-primary" type="button" value="Aceptar">
                </div>
                <div class="col-lg-2">
                <input class="container btn btn-primary" type="button" value="Nuevo">
                </div>
                
            </div>

            <div class="row mt-4">
                <div class="col-lg-12">
                    <table class="tabla table">
                        <thead class="head-partida">
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Id Cuenta</th>
                                <th scope="col">Descripcion</th>
                                <th scope="col">Haber</th>
                                <th scope="col">Fecha Modificacion</th>
                                <th scope="col">Categoria Balance</th>
                            </tr>
                        </thead>
                        <tbody id="cuerpo">
                           
                        </tbody>
                    </table>

                        
                </div>
            </div>
        </div>
    </div>
    <script src="../controlador/js/jquery-3.3.1.js"></script>
    <script src="../controlador/js/enviodatos.js"></script>
</body>
</html>