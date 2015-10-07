<?php
function list_action()
{
	$sql="SELECT * FROM pages ORDER BY id DESC";
	$rows=get_all_rows($sql);
	require "view/list.php";
}
function admin_action()
{
	$sql="SELECT * FROM pages ORDER BY id DESC";
	$rows=get_all_rows($sql);
	require "view/admin.php";
}
function add_action()
{
	$row=add_row();
	
	$sql="SELECT * FROM pages ORDER BY id DESC";
	$rows=get_all_rows($sql);
	require "view/admin.php";
}

?>