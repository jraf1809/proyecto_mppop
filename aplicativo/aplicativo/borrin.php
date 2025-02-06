

<?php

	$ce =  $_POST['pp'];
	
	$conexion = mysqli_connect("localhost","universidad","123","universidad");

	if(isset($_POST['uu'])){
		
		$eliminar = "DELETE FROM basica WHERE cedula = '$ce'";
	 
	    $resultado = mysqli_query($conexion,$eliminar);
			
	}
	
	echo "DATOS ELIMINADOS CORRECTAMENTE";
 
 
 		
 
 
 ?>



<html>


<body>

<form ACTION="mostrar.php">
 
 <input TYPE="SUBMIT" VALUE="Continuar" NAME="">
 
 
 </form>
 
</BODY>

</HTML>