<?php 

require_once("config.php");

$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios ORDER BY deslogin");

//print_r($usuarios);

$headers = array();

foreach ($usuarios[0] as $key => $value) {
	array_push($headers, ucfirst($key));
}

//print_r($headers);

$file = fopen("usuarios.csv", "w+");

fwrite($file, implode(",", $headers) . "\r\n");

foreach ($usuarios as $row) {
	
	$data = array();

	foreach ($row as $key => $value) {
		
		array_push($data, $value);

	} // End foreach de coluna

	fwrite($file, implode(",", $data) . "\r\n");

} // End foreach de linha

fclose($file);

//echo implode(",", $headers);

 ?>