<?php 

require_once("vendor/autoload.php");

$app = new \Slim\Slim();

$app->config('debug', true);

$app->get('/', function() {
    
	$sql = new Academiapa\DB\Sql();

	$results = $sql->select("SELECT * FROM tb_usuarios");

	echo json_encode($results);

});

$app->run();

 ?>