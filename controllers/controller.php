<?php
function render_template($path, array $args){
	extract($args);
	ob_start();
	require $path;
	$html=ob_get_clean();
	return $html;
}
function list_action()
{
	$sql="SELECT * FROM pages ORDER BY id DESC";
	$rows=get_all_rows($sql);
	$html=render_template("view/list.php",array ('rows'=>$rows));
	return $html;
	//require "view/list.php";
}
function admin_action()
{
	$sql="SELECT * FROM pages ORDER BY id DESC";
	$rows=get_all_rows($sql);
	$html=render_template("view/admin.php",array ('rows'=>$rows));
	return $html;
	//require "view/admin.php";
}
function add_action()
{
	add_row();//$row=
	
	$sql="SELECT * FROM pages ORDER BY id DESC";
	$rows=get_all_rows($sql);
	$html=render_template("view/admin.php",array ('rows'=>$rows));
	return $html;
	//require "view/admin.php";
}

function show_action($id)
{
	//$id=$_REQUEST['id'];
	//$sql="SELECT * FROM `pages` WHERE `id`=$id";
	//$row=get_all_rows($sql);
	$row=get_row($id);	
	$html=render_template("view/show.php",array ('row'=>$row));
	return $html;
}

?>