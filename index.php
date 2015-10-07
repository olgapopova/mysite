<?php
error_reporting(E_ALL);
ini_set('display_errors',1);
include "model.php";

$uri=$_SERVER['REQUEST_URI'];
$uri=rtrim($uri,"/");
echo "uri=$uri";
echo '<br>SERVER[PHP_SELF]='.$_SERVER['PHP_SELF'];


if ($uri=='/mysite/index.php' || $uri=='/mysite/')
{
	$response=list_action();
} 
elseif($uri=='/mysite/index.php/admin' || $uri=='/mysite/')
{
	$response=admin_action();
}
elseif($uri=='/mysite/index.php/add' || $uri=='/mysite/')
{
	$response=add_action();
}

echo $response;


?>

