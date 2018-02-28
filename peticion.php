<html>
	<head>
		<title>punto 3</title>
	</head>
	<body>
		<h1>Indice de Masa Corporal</h1>
		
	<?php 		
		$nombre=$_POST["nombre"];
		$kilogramos=$_POST["kilogramos"];
		$estatura=$_POST["estatura"];
		$Imc=($kilogramos/($estatura*$estatura));
	
		print " su indice de masa corporal es".$Imc."<br>";

		if ($Imc < 18.0){
			echo "esta por debajo del peso";
		}
		else if  ($Imc > 18.0){
			echo "su estado es Saludable";
		}
		else if ($Imc < 25.0){
			echo "se encuentra con Sobrepeso";
		}
		else if($Imc < 39.0){
			echo "Obeso";
		}
		else if ($Imc > 40.0){
			echo "Obesidad mórfida";
		}
		
	?>
	<br>
	</body>
</html>