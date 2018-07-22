<?php
require_once './autoload.php';

$lista = FactorysDAO::listar();

$id = $_GET['id'];  
$orden = OrdensDAO::obtener($id);
?>

<html>
    <head lang="es">
        <title>Cotizador</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
		<link href="css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>        
    </head>
    <body>
        <div class="container">
            
            <form action="editar_ordens_cod.php" method="POST" enctype="multipart/form-data">
            
                <div class="panel panel-default">				

                    <div class="panel-heading text-primary text-center">
                        <h4 class="panel-title">Registro de Cotizaciones</h4>
                    </div>

                    <div class="panel-body">
						<div class="row">
							<div class="form-group col-lg-6 col-md-6 col-sm-12 col-lg-12"> 
								<label for="id"><?=$orden->id?></label>
								<input type="hidden" id="id" name="id" class="form-control" required="" min="0" max="1000" placeholder="Ingrese el id" value="<?=$orden->id?>">
							</div>
						</div>					
						
						<div class="row">
							<div class="form-group col-lg-6 col-md-6 col-sm-12 col-lg-12">
								<label for="numero">N Cotizacion</label>
								<input type="number" id="telefono" name="numero" class="form-control"  required="" autocomplete="off" value="<?=$orden->numero_cot?>">                            
							</div>							
                        </div>
						<div class="row">
							<div class="form-group col-lg-6 col-md-6 col-sm-12 col-lg-12">
							   <label for="empresa">Empresa</label>
							   <select name="empresa" id="empresa" class="form-control" required="" autocomplete="off">
									<option value="" selected="" disabled="">Seleccione</option>
									<?php foreach($lista as $empresa){?>
									<option value="<?=$empresa->id?>"><?=$empresa->nombre?></option>
                                <?php }?>
							   </select>						   
							</div>							
                        </div>	
                    </div>

                    <div class="panel-footer mt-5">
                        <input type="submit" value="Actualizar" class="btn btn-sm btn-success"/>
                    </div>

                </div>
                
            </form>
            
        </div>
        
         <script src="js/jquery-3.2.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
    </body>
</html>

