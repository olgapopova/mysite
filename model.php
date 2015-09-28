<?php
//работа с базой данных
//функция соединения с базой данных

function open_database_connection(){
//$link=mysql_connect("localhost","root","") ;//or die("Ei ole ühendust")
$link=mysql_connect("localhost","pupil_new","123");
$db=mysql_select_db('pupil_new',$link);

//mysql_query("SET CHARSET SET UTF-8");//????????????????
mysql_query("SET NAMES utf8");
return $link;
}
function close_database_connection($link){
	mysql_close($link);
}
function get_all_rows(){
	$link=open_database_connection();

	$result=mysql_query("SELECT * FROM pages");
	$rows=array();
	while ($row=mysql_fetch_array($result)){
		$rows[]=$row;
	}
	
	//mysqli_real_escape_string($link,$login);//ekran dannix
	//close_database_connection($link);//??????????
	mysql_close($link);
	return $rows;
	
			
}


?>
