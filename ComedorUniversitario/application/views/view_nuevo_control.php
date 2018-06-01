
<?php
	//echo '<h1>formulario de control</h1>';
	// echo '<h1>'.$comesales[0] .'</h1>';
	  //print "pruebita";
/*foreach($comesales as $clave=>$valor )
{
	print " $clave => $valor->nombres\n";
}*/





// for($i=0;$i<5;$i++)
// 	{
// 	    $body  		= "#bcd9e1";
// 		$booleano   = false;
// 		$CheckText  = "<font color='red'>Permiso No Asignado</font>";
// 		if($i%2)
// 		{$body="#ffffff";}
// 		if($estatus_menu[$i]=="1")
// 		{
// 			$booleano = true;
// 			$CheckText= "<font color='green'>Permiso Asignado</font>";
// 		}
// 		echo '<tr bgcolor="'.$body.'">';
// 		echo '<td>'.form_checkbox("permissions[]",$id_menu[$i],$booleano).' '.$CheckText.'</td>';
// 		echo '<td>'.$descripcion_menu[$i].'</td>';
// 		echo '<td>'.$id_menu[$i].form_hidden("ID",$datos_usuarios[0]->ID).'</td>';
// 		echo '</tr>';
// 	  }


	  echo '<center>';
	  echo '<table border=0 class="ventanas" width="650" cellspacing="0" cellpadding="0">';
	  echo '<tr>';
	  echo "<td height='10' class='tabla_ventanas_login' height='10' colspan='3'><legend align='center'>.: Nuevo Comesal :.</legend></td>";
	  echo '</tr>';
	  echo '<tr><td colspan=3>';
	  $attributes = array("class" => "form-horizontal", "id" => "form", "name" => "form");
	  echo form_open("Control/nuevo", $attributes);
	  // echo form_open("Control/guardarControl", $attributes);
	  // echo form_open();
	  echo '<center>';
	  echo '<table border=0>';
	  





	echo '<tr>';
	echo '<td>'.form_label("Comensales:",'id_comesales').'</td>';
		echo '<td>';
			echo '<select name="id_comesales">';
				foreach($comesales as $clave=>$valor )
				{
					echo '<option value='.$valor->id.'>'.$valor->nombres;
					echo '</option>';
				}
			echo "</select>";
		echo '</td>';
	echo '</tr>';
	#dibujamos campos texto
	$Targeta 	  = array(
	'name'        => 'targeta',
	'id'          => 'targeta',
	'size'        => 10,
	'value'		  => set_value('codigo',@$datos_control[0]->targeta),
	'placeholder' => 'Targeta',
	'type'        => 'text',
	);
	echo '<tr>';
	echo '<td>'.form_label("Targeta:",'targeta').'</td>';
	echo '<td>';
	echo form_input($Targeta);
	echo '</td>';
	echo '<td><font color="red">'.form_error('targeta').'</font></td>';
	echo '</tr>';
	
	$Fecha = array(
	'name'        => 'fecha',
	'id'          => 'fecha',
	'value'		  => set_value('fecha',@$datos_control[0]->fecha),
	'placeholder' => 'Fecha',
	'type'        => 'date',
	);
	echo '<tr>';
	echo '<td>'.form_label("Fecha:",'fecha').'</td>';
	echo '<td>';
	echo form_input($Fecha);
	echo '</td>';
	echo '<td><font color="red">'.form_error('fecha').'</font></td>';
	echo '</tr>';
	

	echo '<tr>';
	echo '<td>'.form_label("Dias:",'controldia').'</td>';
	echo '<td>';
		// lunes---------------------------
		$Controldia1 = array(
		'name'        => 'controldia',
		'id'          => 'controldia',
		'value'		  => set_value('controldia',@$datos_control[0]->controldia),
		'checked'	  =>false,
		'value'       =>"Lunes",
		);
	  	$CheckText1  = "<font color='blue'>Lunes</font>";
	  	echo form_checkbox($Controldia1).' '.$CheckText1;
	  	// martes---------------------------
	  	$Controldia2 = array(
		'name'        => 'controldia',
		'id'          => 'controldia',
		'value'		  => set_value('controldia',@$datos_control[0]->controldia),
		'checked'	  =>false,
		'value'       =>"Martes",
		);
	  	$CheckText2  = "<font color='blue'>Martes</font>";
	  	echo form_checkbox($Controldia2).' '.$CheckText2;
	  	// miercoles---------------------------
	  	$Controldia3 = array(
		'name'        => 'controldia',
		'id'          => 'controldia',
		'value'		  => set_value('controldia',@$datos_control[0]->controldia),
		'checked'	  =>false,
		'value'       =>"Miercoles",
		);
	  	$CheckText3  = "<font color='blue'>Miercoles</font>";
	  	echo form_checkbox($Controldia3).' '.$CheckText3;
	  	// jueves---------------------------
	  	$Controldia4 = array(
		'name'        => 'controldia',
		'id'          => 'controldia',
		'value'		  => set_value('controldia',@$datos_control[0]->controldia),
		'checked'	  =>false,
		'value'       =>"Jueves",
		);
	  	$CheckText4  = "<font color='blue'>Jueves</font>";
	  	echo form_checkbox($Controldia4).' '.$CheckText4;
	  	// viernes---------------------------
	  	$Controldia5 = array(
		'name'        => 'controldia',
		'id'          => 'controldia',
		'value'		  => set_value('controldia',@$datos_control[0]->controldia),
		'checked'	  =>false,
		'value'       =>"Viernes",
		);
	  	$CheckText5  = "<font color='blue'>Viernes</font>";
	  	echo form_checkbox($Controldia5).' '.$CheckText5;
  	echo '</td>';
  	echo '</tr>';




	// $CampoOpcionesSexo = array(
	// '0'               	=> '---SELECCIONE TIPO DE USUARIO---',
	// 'Administrador'		=> 'Femenino',
	// 'Invitado'	    	=> 'Masculino',
	// );
	// $Sexo = array(
	// '0'               	=> '---SELECCIONE TIPO DE SEXO---',
	// 'Masculino'		 	=> 'Masculino',
	// 'Femenino'	    	=> 'Femenino',
	// );
	// echo '<tr>';
 //    echo '<td>'.form_label("Sexo:",'sexo').'</td>';
 //    echo '<td>';              // $CampoOpcionesSexo
 //    echo  form_dropdown('sexo',$CampoOpcionesSexo, set_value('sexo',@$datos_comesales[0]->sexo));
 //    echo '</td>';
 //    echo '<td><font color="red">'.form_error('sexo').'</font></td>';
 //    echo '</tr>';
	
	
 //    $Facultad 	  = array(
	// 'name'        => 'facultad',
	// 'id'          => 'facultad',
	// 'size'        => 50,
	// 'value'		  => set_value('facultad',@$datos_comesales[0]->facultad),
	// 'placeholder' => 'Facultad',
	// 'type'        => 'text',
	// );
	// echo '<tr>';
	// echo '<td>'.form_label("Facultad:",'facultad').'</td>';
	// echo '<td>';
	// echo form_input($Facultad);
	// echo '</td>';
	// echo '<td><font color="red">'.form_error('facultad').'</font></td>';
	// echo '</tr>';

	// $Carrera 	  = array(
	// 'name'        => 'carrera',
	// 'id'          => 'carrera',
	// 'size'        => 50,
	// 'value'		  => set_value('carrera',@$datos_comesales[0]->carrera),
	// 'placeholder' => 'Carrera',
	// 'type'        => 'text',
	// );
	// echo '<tr>';
	// echo '<td>'.form_label("Carrera:",'carrera').'</td>';
	// echo '<td>';
	// echo form_input($Carrera);
	// echo '</td>';
	// echo '<td><font color="red">'.form_error('carrera').'</font></td>';
	// echo '</tr>';

		
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