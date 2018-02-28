<html>
	<head>
		<title>calculo vendedor</title>
	</head>
	<body>
		<h1>Calcular el salario de un vendedor</h1>
		
	<?php   
		$nombre=$_POST['nombre'];
		$cantidad=$_POST['cantidad'];
		$total=$_POST['total'];
		
		
		$salario=450000;
 		$comision=($cantidad*50000); 
		$comisionPorcentaje=($total*0.05); 
		$salario=($salario+$comision+$comisionPorcentaje);

		 echo "El salario del vendedor   ".$nombre; 
		 echo "  es: ".$salario;
	?>
	<br>
	</body>
</html>
