<?php 

/*function ola($texto){

	return "Olá $texto!<br>";

}

echo ola("mundo");
echo ola("Glaucio");
echo ola("João");*/

/*function ola($texto = "mundo"){

	return "Olá $texto!<br>";

}

echo ola();*/

function ola($texto = "mundo", $periodo = "bom dia"){

	return "Olá $texto! $periodo<br>";

}

echo ola();
echo ola("");
echo ola("João");

 ?>