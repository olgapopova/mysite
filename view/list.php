<?php ob_start(); ?>

<!--<h1>heading1 Uus Head</h1>
	<ol>
		<li>
			<?php echo 'hello world'; ?>
		</li>		

	</ol>-->
	
		
	<?php 
		$n=0;
		foreach($rows as $row){
			$n++;
		//echo '<h3>'.$n.'. Head: '.$row['title'].'</h3>Content: '.$row['text'];
			echo '<li>';
			echo '<a href="/mysite/index.php/show?id='.$row['id'].'">'.$row['title'].'</a>';
			echo '</li>';

		}

		echo '<h5>Всего записей в базе: '.$n.'</h5>';
	?>
		

	<?php 
		/*foreach($rows as $row){
			echo 'Record:'.$row[0].'.';
			echo $row[3].'<br>Content: '.$row[4];
		}*/
	?>
<?php $content=ob_get_clean();?>
<?php include ("view/layout.php");?>