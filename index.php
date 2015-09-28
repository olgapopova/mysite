<?php
include("model.php");
$rows=get_all_rows();

//echo print_r($rows,1);

?>
<!DOCTYPE html>
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
				/*foreach($rows as $k=>$v){
				echo 'Head: '.$v['titel'].'<br>Content: '.$v['article'];
				}
				*/
				foreach($rows as $row){
				echo 'Record:'.$row[0].'.';
				echo $row[3].'<br>Content: '.$row[4];
				}

			?>

</body>
</html>
