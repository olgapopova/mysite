<?php
ob_start();
echo '<h2>'.$row['title'].'</h2>';
echo '<p>Author'.$row['author'].'</p>';
echo '<p>'.$row['text'].'</p>';
echo '<p>date:'.$row['date'].'</p>';
$content=ob_get_clean();
include 'view/layout.php';

?>