<?php 

include("filho.php");

$pessoa = new Pessoa(70, 1.80, 23);

/*echo $pessoa;*/

$filho = new Filho(65, 1.70, 24);
$filho->setTimeDoCoracao("Cruzeirão Criminoso!");

/*echo $filho;
echo"<br>".$filho->getTimeDoCoracao()."<br>";*/

echo json_encode($pessoa);


?>