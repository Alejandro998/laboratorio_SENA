<html>
	<head>
		<title>punto 4</title>
	</head>
	<body>
		<h1>nombre del Articulo</h1>
		
	<?php 		
		$nombreArticulo=$_POST["nombreArticulo"];
		$precioArticulo=$_POST["precioArticulo"];
		$clave=$_POST["clave"];
  
		if ($clave ==1 ) {
			$descuento=($precioArticulo*0.10);
			$total=($precioArticulo-$descuento);
			echo "Nombre del Articulo:".$nombreArticulo."<br>";
			echo "Precio del Articulo:".$precioArticulo."<br>";
			echo "Precio con el descuento es :".$total."<br>";
		}else{
			 ($clave ==2 );
			 $descuento=($precioArticulo*0.20);
			 $total=($precioArticulo-$descuento);
			 echo "Nombre del Articulo:".$nombreArticulo."<br>";
			 echo "Precio del Articulo:".$precioArticulo."<br>";
			 echo "precio es :".$total;
		}
	?>
	<br>
	</body>
</html>