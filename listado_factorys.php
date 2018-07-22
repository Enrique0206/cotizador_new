<?php
require_once './autoload.php';

$lista = FactorysDAO::listar();
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
		<div id="contenido" class="container">	
				<!-- Table -->
				<div class="panel panel-default">			
    
					<div class="panel-heading text-center">
                    	<h4 class="panel-title">Lista de Empresas</h4>
                  	</div>    					
        
  					<div class="panel-body table-responsive">   					 
  						<table class="table table-hover">
         					<thead>                	 			   
								<tr>
									<th class="text-center">ID</th>
									<th class="text-center">NOMBRE</th>
                        			<th class="text-center">DIRECCION</th>    
									<th class="text-center">TELEFONO</th> 
                        			<th class="text-center" width="30"></th> 
									<th class="text-center" width="30"></th> 
                   				</tr>
            				</thead>
        		
                			<tbody>
                   			<?php foreach ($lista as $empresa) { ?>								
                    			<tr class="text-center">                  					
                    				<td><?=$empresa->id?></td>
									<td><?=$empresa->nombre?></td>
									<td><?=$empresa->direccion?></td>
									<td><?=$empresa->telefono?></td>									
									<td><a href="editar_factorys.php?id=<?=$empresa->id?>" class="btn btn-warning" >Editar</a></td> 	
									<td><a href="eliminar_factorys.php?id=<?=$empresa->id?>" class="btn btn-danger">Eliminar</a></td> 
                    			</tr>                   
       	     				<?php }?>
              				</tbody>
							
        				</table>			
					</div>												
				</div>	
    			<!-- Table -->	
				
				<div class="container">
					<a href="listar_factorys.php" class="btn btn-success" >Nuevo</a>	
				</div>
		</div> 	
        
         <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    </body>
</html>
