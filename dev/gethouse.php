<?php
$id = intval($_GET['id']);

$db = new SQLite3('new');

$results = $db->query('SELECT * FROM houses WHERE id ='.$id);

while ($row = $results->fetchArray()) {

	echo '<h1>'.$row['name'].'</h1>';

	echo '<div class="wrapper">';
	if($id<=11)
	{
	echo '<div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide"><img data-src="img/projects/0'.$id.'/001.jpg" class="lazyload"></div>
            <div class="swiper-slide"><img data-src="img/projects/0'.$id.'/002.jpg" class="lazyload"></div>
            <div class="swiper-slide"><img data-src="img/projects/0'.$id.'/003.jpg" class="lazyload"></div>
            <div class="swiper-slide"><img data-src="img/projects/0'.$id.'/004.jpg" class="lazyload"></div>
            <div class="swiper-slide"><img data-src="img/projects/0'.$id.'/005.jpg" class="lazyload"></div>
            <div class="swiper-slide"><img data-src="img/projects/0'.$id.'/006.jpg" class="lazyload"></div>
            <div class="swiper-slide"><img data-src="img/projects/0'.$id.'/007.jpg" class="lazyload"></div>

        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
    </div>';	
} else
{
	echo '<div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide"><img data-src="img/projects/0'.$id.'/001.png" class="lazyload"></div>
            <div class="swiper-slide"><img data-src="img/projects/0'.$id.'/002.png" class="lazyload"></div>
            <div class="swiper-slide"><img data-src="img/projects/0'.$id.'/003.png" class="lazyload"></div>
            <div class="swiper-slide"><img data-src="img/projects/0'.$id.'/004.png" class="lazyload"></div>
            <div class="swiper-slide"><img data-src="img/projects/0'.$id.'/005.png" class="lazyload"></div>
            <div class="swiper-slide"><img data-src="img/projects/0'.$id.'/006.png" class="lazyload"></div>
            <div class="swiper-slide"><img data-src="img/projects/0'.$id.'/007.png" class="lazyload"></div>

        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
    </div>';
}
	


    echo '<div class="stats">
    <div class="innerstats">
    <p><b>Характеристики:</b></p>
    <table>
    <tr>
    	<td>Размеры дома (м):</td>
    	<td>'.$row['size'].' м</td>
    </tr>

    <tr>
    	<td>Общая площадь (м<sup>2</sup>):</td>
    	<td>'.$row['square'].'</td>
    </tr>
    
    <tr>
    	<td>Площадь 1<sup>го</sup> этажа (м<sup>2</sup>):</td>
    	<td>'.$row['sq1'].'</td>
    </tr>

    <tr>
    	<td>Площадь 2<sup>го</sup> этажа (м<sup>2</sup>):</td>
    	<td>'.$row['sq2'].'</td>
    </tr>

    <tr>
    	<td>Веранда:</td>
    	<td>'.$row['veranda'].'</td>
    </tr>

    <tr>
    	<td>Балкон:</td>
    	<td>'.$row['balkon'].'</td>
    </tr>

    <tr>
    	<td>Спален:</td>
    	<td>'.$row['spal'].'</td>
    </tr>

    <tr>
    	<td>Сан. узлов:</td>
    	<td>'.$row['san'].'</td>
    </tr>	
    </table>
    </div>
    <div class="forms">
	    <p><b>Запросить стоимость по акции "Бесплатный фундамент"</b></p>
	    <input disabled type="text" value="'.$row['name'].'">
	    <form class="form">
		    <input type="text" placeholder="Ваше имя" name="name" required>
		    <input type="text" placeholder="Ваш телефон" name="phone" required>
		    <input type="submit" value="Запросить">
	    </form>
	    <p>Мы не передаем Вашу персональную информацию третьим лицам</p>
    </div>
    </div>
    ';
    echo '</div>';

	}