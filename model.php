<?php
//работа с базой данных
//функция соединения с базой данных

function open_database_connection(){
$link=mysql_connect("localhost","pupil_new","123");
mysql_select_db('pupil_new',$link);
//mysql_query("SET CHARSET SET UTF-8");
mysql_query("SET NAMES utf8");
return $link;
}

function close_database_connection($link){
	mysql_close($link);
}

function get_all_rows($sql){
	$link=open_database_connection();
	$result=mysql_query($sql,$link);
	$rows=array();
	while ($row=mysql_fetch_array($result)){
		$rows[]=$row;
	}
	close_database_connection($link);
	return $rows;
}
function add_row()
{
	if(empty($_REQUEST['add_title']) && 
		empty($_REQUEST['add_author']) && 
			empty($_REQUEST['add_content']) )
	{
		return;
	}

	$titul=$_REQUEST['add_title'];
	$author=$_REQUEST['add_author'];
	$content1=$_REQUEST['add_content'];
	$date=date("Y-m-d H:i:s");
	$link=open_database_connection();
	$sql="INSERT INTO `pages` (`id`, `date`, `author`, `title`, `text`) 
	VALUES (NULL, '$date', '$author', '$titul', '$content1')";
	mysql_query($sql);
	close_database_connection($link);
	return;
}
function get_row($id){
	$link=open_database_connection();
	$sql="SELECT * FROM `pages` WHERE `id`=$id";
	$result=mysql_query($sql,$link);
	$rows=array();
	while ($row=mysql_fetch_array($result)){
		$rows[]=$row;
	}
	close_database_connection($link);
	return $rows;
}


?>