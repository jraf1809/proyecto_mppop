


<HTML>

<HEAD>

 <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	

	
</HEAD>

<BODY>

	

 <?php
 
	$identidad = $_POST['cam'];
	
	
	
	
	$conexion = mysqli_connect("localhost","universidad","123","universidad");
	
	$identidad = $_POST['cam'];
	
	$consulta = "SELECT * FROM basica WHERE cedula = '$identidad'";
	
	$ejecutar = mysqli_query($conexion,$consulta);
	
	$ver = mysqli_fetch_array($ejecutar);
	
	
 
 ?>
 

   <form ACTION="duolika.php" METHOD="POST">

	<b>Usuario a Modificar:</b> <input type="text" class="controls" name="captura" id="" VALUE="<?php echo $identidad?>" readonly>

	<br>
	<br>
	
	<b>Fecha de Registro:</b> <input type="date" id="fecha_creacion" name="fech" value="<?php echo $ver['fregistro']; ?>">
	
	<br>
	<br>
	
   <b>Nombres:</b> <input type="text" class="controls" name="caballete" id="nombres" VALUE="<?php echo $ver['nombre']; ?>">
	
   <b>Apellidos:</b>  <input type="text" class="controls"name="vaca" id="apellido" VALUE="<?php echo $ver['apellido']; ?>">
  
   <b>Cedula:</b>	<input type="cedula"class="controls" name="cinco" id="" VALUE="<?php echo $ver['cedula']; ?>">
   
   <b>Fecha de Nacimiento:</b> <input type="date" id="" name="naci" VALUE="<?php echo $ver['nacimiento']; ?>">
   
   
   <br>
   <br>
   
  
    <b>Edad:</b>  <input type="text"class="controls" name="edad" id="" VALUE="<?php echo $ver['edad']; ?>">
   
    <b>Telefono Celular:</b>  <input type="text" class="controls"name="tres" id="Telefono" VALUE="<?php echo $ver['telefono']; ?>">
   
 
   
     <b>Correo:</b>  <input type="email"class="controls" name="cuatro" id="email" VALUE="<?php echo $ver['correo']; ?>">
   
   <b>Estado Civil: <?php echo $ver['edocivil'];?> </b> <select name="civil" value="">
        <option value="Seleccionar">Seleccionar</option>
        <option value="Soltero">Soltero</option>
        <option value="casado">Casado</option>
        <option value="Viudo">Viudo</option>
    </select>
	
	<br>
	<br>
	
	<b>Grupo Sanguineo:</b>  <input type="text" class="controls"name="sangui" id="" VALUE="<?php echo $ver['gruposan']; ?>">
	
	<br>
    <br>
	
	<b>Peso:</b>  <input type="text" class="controls"name="peso" id="" VALUE="<?php echo $ver['peso']; ?>">
	
	
	<b>Talla de Camisa:</b>  <input type="text" class="controls"name="camisa" id="" VALUE="<?php echo $ver['camisa']; ?>">
	
	<b>Talla de Pantalon:</b>  <input type="text" class="controls"name="pantalon" id="" VALUE="<?php echo $ver['pantalon']; ?>">
	
	<b>Calzado:</b>  <input type="text" class="controls"name="calzado" id="" VALUE="<?php echo $ver['calzado']; ?>">
	<br>
	<br>
	
	<b>Telefono de Habitacion:</b>  <input type="text" class="controls"name="hab" id="" VALUE="<?php echo $ver['habitacion']; ?>">
  
    <br>
	
	
	<h1>Direccion de Residencia: </h1>
	<h2>Estado: </h2> <b> <?php echo $ver['estado'];?></b>
	
	<select NAME="estado" ID="">
	
	
		<option value="">--Seleccionar Estado--</option>
		<option VALUE="Dto.Capital">Dto.Capital</option>
		<option VALUE="Miranda">Miranda</option>
		<option VALUE="Carabobo">Carabobo</option>
		<option VALUE="Zulia">Zulia</option>
		<option VALUE="Merida">Merida</option>

	</select>
	
	<h2>Municipio: </h2> <b> <?php echo $ver['municipio'];?></b>
	
	<select NAME="municipio" ID="">
	
	
		<option value="">--Seleccionar Municipio--</option>
		<option VALUE="Libertador">Libertador</option>
		<option VALUE="Baruta">Baruta</option>
		<option VALUE="El Hatillo">El Hatillo</option>
		<option VALUE="Brion">Brion</option>
		<option VALUE="Guaicaipuro">Guaicaipuro</option>

	</select>
	
	<h2>Calle/Avenida/Transversal: </h2>
	
	<textarea id="" name="calle" rows="5" cols="50""><?php echo $ver['calle']; ?></textarea>
	
	
	
	
	<br>
    <br>
	
	<b>¿Tiene algun familiar en el MPPOP?:</b> <b> <?php echo $ver['familiar'];?></b>
	
	<select name="fam">
        <option value="Seleccionar">Seleccionar</option>
        <option value="si">Si</option>
        <option value="no">No</option>
    </select>
	
	<b>Telefono de Emergencia:</b>  <input type="text" class="controls"name="emer" id="" VALUE="<?php echo $ver['emergencia']; ?>">
	
	<b>Posee Hijo Mayor a 25 Anos?</b> <b> <?php echo $ver['hijo'];?></b>
	
							<select name="hij">
							
									<option VALUE="seleccionar">Seleccionar</option>
									<option VALUE="si">Si</option>
									<option VALUE="no">No</option>
									
							</select>
							
	<br/>
	<br/>
	                                 
	<b>Pertenencia de Vivienda: </b> <b> <?php echo $ver['vivienda'];?></b>
	
	<select name="vivienda">
	
        <option value="Seleccionar">Seleccionar</option>
        <option value="Propia">Propia</option>
        <option value="Alquiler">Alquiler</option>
        <option value="Familiar">Familiar</option>
        <option value="Pagando">Pagando</option>
		
    </select>

	<br>
	<br>
	
	<b>Tiene Certificado de Carrera?: </b> <b> <?php echo $ver['certificado'];?></b>
	
	<select name="certificado">
        <option value="Seleccionar">Seleccionar</option>
        <option value="Si" aria-required="true">Si</option>
        <option value="No">No</option>
    </select>
	
	<b>Numero de Certificado:</b>  <input type="text" class="controls"name="numcer" id="" VALUE="<?php echo $ver['numerocert']; ?>">
	
	<b>Posee Alguna Discapacidad?:</b>  <input type="text" class="controls"name="disca" id="" VALUE="<?php echo $ver['discapacidad']; ?>">
	
	<br>
	<br>
	<h2>NIvel Educativo del Tarbajador: </h2>
	
	<br>
	
	<b>Primaria: </b> <b> <?php echo $ver['primaria'];?></b>
	
	<select name="primaria">
        <option value="Seleccionar">Seleccionar</option>
        <option value="Si">Si</option>
        <option value="No">No</option>
    </select>
				   
	<b>Bachiller: </b> <b> <?php echo $ver['bachiller'];?></b>
	
	<select name="bachiller">
        <option value="Seleccionar">Seleccionar</option>
        <option value="Si">Si</option>
        <option value="No">No</option>
    </select>
				   
	<b>Tecnico Superior En:</b>  <input type="text" class="controls"name="tecnico" id="" VALUE="<?php echo $ver['tecnico']; ?>" >
	<b>Licenciado En:</b>  <input type="text" class="controls"name="licenciado" id="" VALUE="<?php echo $ver['licenciado']; ?>">
	<b>Maestria En:</b>  <input type="text" class="controls"name="maestria" id="" VALUE="<?php echo $ver['maestria']; ?>">
	<br>
	<br>
	<b>Doctorado En:</b>  <input type="text" class="controls"name="doctorado" id="" VALUE="<?php echo $ver['maestria']; ?>">
	<b>Otra Carrera:</b>  <input type="text" class="controls"name="otra" id="" VALUE="<?php echo $ver['otra']; ?>">
	<b>Cursos realizados con relación al cargo a desempeñar:</b>  <input type="text" class="controls"name="curso" id="" VALUE="<?php echo $ver['curso']; ?>">
	
	
  
   
   <br>
   <br>
   
   <input TYPE="SUBMIT" NAME="update" VALUE="MODIFICAR"/>
	
 
 
 </form>
 

 
 
 <form ACTION="mostrar.php">
 
 <input TYPE="SUBMIT" VALUE="Continuar" NAME="">
 
 
 </form>
 
</BODY>

</HTML>








