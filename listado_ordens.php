<?php
require_once './autoload.php';

$lista = OrdensDAO::listar();
?>


<html>
    <head lang="es">
          <title>TODO supply a title</title>
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
									<th class="text-center">Id</th>
									<th class="text-center">Numero de Cotizacion</th>
                        			<th class="text-center">Empresa</th>    
									<th class="text-center">Fecha</th> 
                        			<th class="text-center" width="30"></th> 
									<th class="text-center" width="30"></th> 
                   				</tr>
            				</thead>
        		
                			<tbody>
                   			<?php foreach ($lista as $orden) { ?>								
                    			<tr class="text-center">                  					
                    				<td><?=$orden->id?></td>
									<td><?=$orden->numero_cot?></td>
									<td><?=$orden->empresa_nombre?></td>
									<td><?=$orden->creado?></td>									
									<!--<td><a href="editar_factorys.php?id=<?=$orden->id?>" class="btn btn-warning" >Editar</a></td> 	
									<td><a href="eliminar_factorys.php?id=<?=$orden->id?>" class="btn btn-danger">Eliminar</a></td> -->
									<td><a href="editar_ordens.php?id=<?=$orden->id?>" class="btn btn-warning" >Editar</a></td> 	
									<td><a href="eliminar_ordens.php?id=<?=$orden->id?>" class="btn btn-danger">Eliminar</a></td> 
                    			</tr>                   
       	     				<?php }?>
              				</tbody>
							
        				</table>			
					</div>												
				</div>	
    			<!-- Table -->	
				
				<div class="container">
					<a href="listar_ordens.php" class="btn btn-success" >Nuevo</a>	
				</div>
		</div> 	
        
         <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    </body>
</html>
