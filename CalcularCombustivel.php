<?php


include 'Calcular.php';

 $distancia = $_POST['distancia'];
 $litros = $_POST['litros'];


$media = new Calcular();
$media->setKM($_POST['distancia']);
$media->setConsumo($_POST['litros']);

$media->media();

if ($media) {
	header('Location: index.php?media=' . $media);
}
