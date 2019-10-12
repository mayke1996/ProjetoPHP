<?php 

header("Content-type: application/json");
include("filho.php");

$pessoa = new Pessoa(70, 1.80, 23);

/*echo $pessoa;*/

$filho = new Filho(65, 1.70, 24);
$filho->setTimeDoCoracao("Cruzeirão Criminoso");

/*echo $filho;
echo"<br>".$filho->getTimeDoCoracao()."<br>";*/

/*
if ($filho->getTimeDoCoracao() == "Cruzeirão Criminoso") {
	http_response_code(201);
	echo json_encode($filho);
}
else {
	http_response_code(404);
	$resposta = array("message" => "Não existe");
	echo json_encode($resposta);
}*/

echo $filho->findAll();


?>