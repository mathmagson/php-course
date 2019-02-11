<?php 

//phpinfo();

require_once("vendor".DIRECTORY_SEPARATOR."autoload.php");

$app = new \Slim\Slim();

$app->get('/', function(){

	//echo "Home Page";

	echo json_encode(array(
		'date'=>date("Y-n-d H:i:s")
	));

});

$app->get('/hello/:name', function ($name) {
    echo "Hello, " . $name;
});

$app->run();

 ?>