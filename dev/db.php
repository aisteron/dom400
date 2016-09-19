<div class='inner'>
<h2>Лучшие проекты месяца</h2>



<div class='list'>
<?php
$db = new SQLite3('new');

$results = $db->query('SELECT * FROM houses');
while ($row = $results->fetchArray()) {
    //var_dump($row);
	//echo $row['name'];
	//echo 'Площадь: '.$row['square'];
	$thumb=$row['thumb'];
	$name = $row['name'];
	$square = $row['square'];
	$id=$row['id'];
	
	echo "<div class='house' id='{$id}' onclick='showHouse({$id})'>";
	
	echo '<img src='.$thumb.'>';
	
	echo "<p class='name'>".$name.'</p>';
	echo "<p class='square'>S = ".$square.' м<sup>2</sup></p>';
	

	echo '</div>';
}
?>
</div>


<link rel="stylesheet" href="dev/css/swiper.min.css">
