<!DOCTYPE html>
<html>
<head>
	<title>Calculo Combustivel</title>
	<meta charset="utf-8">
	<style>
		.vermelho {color : red}
		.verde	{color : green}
	</style>
</head>
<body>

<form method="POST" action="CalcularCombustivel.php">
	<p> Distancia: </p> <input type="number" required name="distancia">
	<p>Litros usados: </p> <input type="number" required name="litros">
<br>
<br>
<input type="submit" value="Calcular">

</form> 

</body>
</html>


<?php



	if(isset($_GET['media'])) {
		$media = $_GET['media'];
		if ($media >= 10) {
			echo '<h2 class="verde"> A média é ' . number_format($media, 2, ',', ',') . ' litros por km rodado. </h2>';
		}else{
			echo '<h2 class="vermelho"> A média é ' . number_format($media, 2, ',', ',') . ' litros por km rodado. </h2>';
		}
	}
?>
