<?php ob_start(); ?>
<h3>Admin page</h3>
<form action="/mysite/index.php/add" method="POST" name="form1">
	<table>
		<tr>
			<td>Article heading:</td>
			<td><input type="text" name="add_title"></td>
			
		</tr>
		<tr>
			<td>Author:</td>
			<td><input type="text" name="add_author"></td>
			
		</tr>
		<tr>
			<td>Article text:</td>
			<td><input type="text" name="add_content"></td>
			
		</tr>
		<tr>
			<td><input type="reset" name="reset" value="Clear"></td>
			<td><input type="submit" name="submit" value="Send"></td>
			
		</tr>

	</table>
</form>
<?php 
	$n=0;
	foreach($rows as $row){
		$n++;
		echo '<h3>'.$n.'. Head: '.$row['title'].'</h3>Content: '.$row['text'];
	}

		echo '<h5>Всего записей в базе: '.$n.'</h5>';
?>	


<?php $content=ob_get_clean();?>
<?php include ("view/layout.php");?>