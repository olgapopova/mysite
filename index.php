<?php
error_reporting(E_ALL);
ini_set('display_errors',1);
include "model.php";

$uri=$_SERVER['REQUEST_URI'];
echo "uri=$uri";
echo '<br>SERVER[PHP_SELF]='.$_SERVER['PHP_SELF'];


if ($uri=='/mysite/index.php' || $uri=='/mysite/')
{
	$sql="SELECT * FROM pages ORDER BY id DESC";
	$rows=get_all_rows($sql);
	require "view/list.php";
} 
elseif($uri='/mysite/index.php/admin')
{
	$sql="SELECT * FROM pages ORDER BY id DESC";
	$rows=get_all_rows($sql);
	require "view/admin.php";
}
elseif($uri='/mysite/index.php/add')
{
	$row=add_row();
	
	$sql="SELECT * FROM pages ORDER BY id DESC";
	$rows=get_all_rows($sql);
	require "view/admin.php";
}




?>

