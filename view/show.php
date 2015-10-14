<?php
ob_start();
foreach($rows as $row){
echo '<h2>'.$row['title'].'</h2>';
echo '<p>Author: '.$row['author'].'</p>';
echo '<p>Article:<br>'.$row['text'].'</p>';
echo '<p>date: '.$row['date'].'</p>';
}
$content=ob_get_clean();
include 'view/layout.php';

?>