<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta author="Popova">
	<title>Start page</title>
</head>
<body>
	<h1>heading1</h1>
	<ol>
		<li>
			<?php echo 'hello world'; ?>
		</li>		

	</ol>
	
		
		<?php 
		$n=0;
		foreach($rows as $row){
			$n++;
		echo '<h3>'.$n.'. Head: '.$row['title'].'</h3>Content: '.$row['text'];
		}
		?>
		

		<?php 
		/*foreach($rows as $row){
			echo 'Record:'.$row[0].'.';
			echo $row[3].'<br>Content: '.$row[4];
		}*/
	?>


</body>
</html>
