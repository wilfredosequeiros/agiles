<?php
	  echo '<center>';
	  echo '<table border=0 class="ventanas" width="650" cellspacing="0" cellpadding="0">';
	  echo '<tr>';
	  echo "<td height='10' class='tabla_ventanas_login' height='10' colspan='3'><legend align='center'>.: Nuevo Comesal :.</legend></td>";
	  echo '</tr>';
	  echo '<tr><td colspan=3>';
	  $attributes = array("class" => "form-horizontal", "id" => "form", "name" => "form");
	  //echo form_open("clientes/Save", $attributes);
	  echo form_open();
	  echo '<center>';
	  echo '<table border=0>';
	  
	#dibujamos campos texto
	$Codigo 	  = array(
	'name'        => 'codigo',
	'id'          => 'codigo',
	'size'        => 50,
	'value'		  => set_value('codigo',@$datos_comesales[0]->codigo),
	'placeholder' => 'Codigo',
	'type'        => 'text',
	);
	echo '<tr>';
	echo '<td>'.form_label("Codigo:",'codigo').'</td>';
	echo '<td>';
	echo form_input($Codigo);
	echo '</td>';
	echo '<td><font color="red">'.form_error('codigo').'</font></td>';
	echo '</tr>';
	
	$Apellidos = array(
	'name'        => 'apellidos',
	'id'          => 'apellidos',
	'size'        => 50,
	'value'		  => set_value('apellidos',@$datos_comesales[0]->apellidos),
	'placeholder' => 'Apellidos',
	'type'        => 'text',
	);
	echo '<tr>';
	echo '<td>'.form_label("Apellidos:",'apellidos').'</td>';
	echo '<td>';
	echo form_input($Apellidos);
	echo '</td>';
	echo '<td><font color="red">'.form_error('apellidos').'</font></td>';
	echo '</tr>';
	
	#dibujamos campos texto
	$Nombres	  = array(
	'name'        => 'nombres',
	'id'          => 'nombres',
	'size'        => 50,
	'value'		  => set_value('nombres',@$datos_comesales[0]->nombres),
	'placeholder' => 'Nombres',
	'type'        => 'text',
	);
	echo '<tr>';
	echo '<td>'.form_label("Nombres:",'nombres').'</td>';
	echo '<td>';
	echo form_input($Nombres);
	echo '</td>';
	echo '<td><font color="red">'.form_error('nombres').'</font></td>';
	echo '</tr>';

	$CampoOpcionesSexo = array(
	'NoSirve'               	=> '---SELECCIONE TIPO DE USUARIO---',
	'2'		=> 'Femenino',
	'1'	    	=> 'Masculino',
	);
	// $Sexo = array(
	// '0'               	=> '---SELECCIONE TIPO DE SEXO---',
	// 'Masculino'		 	=> 'Masculino',
	// 'Femenino'	    	=> 'Femenino',
	// );
	echo '<tr>';
    echo '<td>'.form_label("Sexo:",'sexo').'</td>';
    echo '<td>';              // $CampoOpcionesSexo
    echo  form_dropdown('sexo',$CampoOpcionesSexo, set_value('sexo',@$datos_comesales[0]->sexo));
    echo '</td>';
    // echo '<td><font color="red">'.form_error('sexo').'</font></td>';
    echo '</tr>';
	
	
    $Facultad 	  = array(
	'name'        => 'facultad',
	'id'          => 'facultad',
	'size'        => 50,
	'value'		  => set_value('facultad',@$datos_comesales[0]->facultad),
	'placeholder' => 'Facultad',
	'type'        => 'text',
	);
	echo '<tr>';
	echo '<td>'.form_label("Facultad:",'facultad').'</td>';
	echo '<td>';
	echo form_input($Facultad);
	echo '</td>';
	echo '<td><font color="red">'.form_error('facultad').'</font></td>';
	echo '</tr>';

	$Carrera 	  = array(
	'name'        => 'carrera',
	'id'          => 'carrera',
	'size'        => 50,
	'value'		  => set_value('carrera',@$datos_comesales[0]->carrera),
	'placeholder' => 'Carrera',
	'type'        => 'text',
	);
	echo '<tr>';
	echo '<td>'.form_label("Carrera:",'carrera').'</td>';
	echo '<td>';
	echo form_input($Carrera);
	echo '</td>';
	echo '<td><font color="red">'.form_error('carrera').'</font></td>';
	echo '</tr>';

		
	echo '<tr>';
	echo '<td colspan=3>'.$this->session->flashdata('msg').'</td>';
	echo '</tr>';
	echo '<tr><td colspan=3><hr/></td></tr>';
	echo '<tr>';
	echo '<td colspan=3><center>';
	echo '<input type="submit" class="btn btn-success" value="Guardar">';
    echo '</center></td></tr>';
    echo '</table></center>';
    echo form_close(); 
    echo '</td></tr>';
    echo '</table>';
    echo '</center>';
?>