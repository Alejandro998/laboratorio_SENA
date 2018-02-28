  <html>
	<head>
		<title>punto 3</title>
	</head>
	<body>
		<h1>Indice de Masa Corporal</h1>
		
	<?php 

		$presupuesto=$_POST["presupuesto"];

		echo "area de Ginecologia".($presupuesto*0.40)."<br>";
		echo "area de Traumatologia".($presupuesto*0.30)."<br>";
		echo "area de Pediatria".($presupuesto*0.30)."<br>";

		?>
		<br>
	</body>
</html>