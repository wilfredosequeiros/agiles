
<script type="text/javascript">
            /*CLIENTES*/
            $(document).ready(function() {
                $('#control').dataTable( {
                    // sDom: hace un espacio entre la tabla y los controles 
                "sDom": "<'row-fluid'<'span6'l><'span6'f>r>t<'row-fluid'<'span6'i><'span6'p>>",
        
                } );
            } );
</script>

<div id="container">
	<h2 align="center">Catalogo de Control</h2>
	<?php
if(isset($_GET['save'])){
	echo '<div class="alert alert-success text-center">La Información  se Almaceno Correctamente</div>';
}
if(isset($_GET['delete'])){
	echo '<div class="alert alert-warning text-center">La Información  se ha Eliminado Correctamente</div>';
}
if(isset($_GET['update'])){
	echo '<div class="alert alert-success text-center">La Información  se Actualizo Correctamente</div>';
}
if(isset($_GET['permisos'])){
		echo '<div class="alert alert-success text-center">Los Permisos fueron Asignados Correctamente</div>';
	}
	if(isset($_GET['password'])){
		echo '<div class="alert alert-success text-center">La Contraseña fue actualizado Correctamente</div>';
	}
?>
<center>
<table id="control" border="0" cellpadding="0" cellspacing="0" class="pretty">
<thead>
<tr>
	<th>OPCIONES</th>
	<th>id_comesales</th>
	<th>targeta</th>
	<th>fecha</th>
	<th>controldia</th>
	

</tr>
</thead>
<tbody>
 <?php 
 $contador = 0;
 if(!empty($control)){
 	foreach($control as $controles){
 		echo '<tr>';
		echo '<td>'
?>
		<a href="<?php echo base_url();?>index.php/control/editar/<?php echo $controles->id;?>/" class="btn btn-success">Editar</a>
		
		<a href="<?php echo base_url();?>index.php/control/eliminar/<?php echo $controles->id ?>" class="btn btn-danger">Eliminar</a>
<?php		
		echo '</td>';
 		echo '<td>'.$controles->id_comesales.'</td>';
		echo '<td>'.$controles->targeta.'</td>';
		echo '<td>'.$controles->fecha.'</td>';
	    echo '<td>'.$controles->controldia.'</td>';
		
 			
 			
 			
 	
 		echo '</tr>';
 	} 
 }

 ?>
</tbody>
</table>
</center>
</div>