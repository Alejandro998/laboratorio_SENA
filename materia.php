<html>
  <head>
      <title>laboratorio php</title>
</head>
<body>
<center>
<?php
 		$parcialuno=$_POST['parcialuno'];
 		$parcialdos=$_POST['parcialdos'];
 		$parcialtres=$_POST['parcialtres'];
 		$examen=$_POST['examen'];
 		$trabajo=$_POST['trabajo'];

 $promedio_parcial= ($parcialuno + $parcialdos + $parcialtres)/3;

 $porcentaje_parcial= $promedio_parcial*0.35;
 $porcentaje_examen=$examen*0.35;
 $porcentaje_trabajo=$trabajo*0.30;
 $notaFinal=($porcentaje_parcial+$porcentaje_examen+$porcentaje_trabajo);
 
 	echo "su nota final es".$notaFinal;
 	
 	if($notaFinal >3){  
 	 echo "aprobado";
 	 }
 	else{
 	 echo "no aprobado";
 	 }
 
?>
	</body>
</html>
  