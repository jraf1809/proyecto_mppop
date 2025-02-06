
<?php

	$imbi = $_POST['captura'];
	
	echo "Usuario: ".$imbi;


	$conexion = mysqli_connect("localhost","universidad","123","universidad");
 
	if(isset($_POST['update'])){
		
	$cambio = $_POST['caballete'];
	$vac = $_POST['vaca'];
	$uni = $_POST['tres'];
	$dojun = $_POST['cuatro'];
	$blanco = $_POST['estado'];
	$negro = $_POST['municipio'];
	$a = $_POST['calle'];
	$b = $_POST['cinco'];
	$c = $_POST['fech'];
	$d = $_POST['naci'];
	$f = $_POST['edad'];
	$g = $_POST['civil'];
	$h = $_POST['sangui'];
	$i = $_POST['peso'];
    $j = $_POST['camisa'];
	$k = $_POST['pantalon'];
	$l = $_POST['calzado'];
	$m = $_POST['hab'];
	$n = $_POST['fam'];
	$o = $_POST['emer'];
	$p = $_POST['hij'];
	$q = $_POST['vivienda'];
	$r = $_POST['certificado'];
	$s = $_POST['numcer'];
	$t = $_POST['disca'];
	$u = $_POST['primaria'];
	$v = $_POST['bachiller'];
	$w = $_POST['tecnico'];
	$x = $_POST['licenciado'];
	$y = $_POST['maestria'];
	$z = $_POST['doctorado'];
	$un = $_POST['otra'];
	$ichi = $_POST['curso'];
	
	
	
	$consulta = "SELECT * FROM basica";
	
	$exe = mysqli_query($conexion,$consulta);
	
	$recorrer = mysqli_fetch_array($exe);
	
		
	$actualizar = "UPDATE basica SET nombre = '$cambio',
									 apellido = '$vac',
									 telefono = '$uni',
									 correo = '$dojun',
									 estado = '$blanco',
									 municipio = '$negro',
									 calle = '$a',
									 cedula = '$b',
									 fregistro = '$c',
									 nacimiento = '$d',
									 edad = '$f',
									 edocivil = '$g',
									 gruposan = '$h',
									 peso = '$i',
									 camisa = '$j',
									 pantalon = '$k',
									 calzado = '$l',
									 habitacion = '$m',
									 familiar = '$n',
									 emergencia = '$o',
									 hijo = '$p',
									 vivienda = '$q',
									 certificado = '$r',
									 numerocert = '$s',
									 discapacidad = '$t',
									 primaria = '$u',
									 bachiller = '$v',
									 tecnico = '$w',
									 licenciado = '$x',
									 maestria = '$y',
									 doctorado = '$z',
									 otra ='$un',
									 curso = '$ichi'
									 
													 WHERE cedula = '$imbi'";
									
									
	$ejecutar = mysqli_query($conexion,$actualizar);
	
		
	echo "  - DATOS MODIFICADOS CORRECTAMENTE";	
		
		
		
		
	}								
									
 ?>			
									
	
						
<html>


<body>

<form ACTION="mostrar.php">
 
 <input TYPE="SUBMIT" VALUE="Continuar" NAME="">
 
 
 </form>
 
</BODY>

</HTML>