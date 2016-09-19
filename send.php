<?php
if(!empty($_POST['name']) && !empty($_POST['phone']))
{
	//echo $_POST['name'];
	//echo $_POST['phone'];

$to = 'kazan-brus@yandex.ru'; //Почта получателя, через запятую можно указать сколько угодно адресов
        $subject = 'Обратный звонок'; //Заголовок сообщения
        $message = '
                <html>
                    <head>
                        <title>'.$subject.'</title>
                    </head>
                    <body>
					<h3>Форма обратной связи на сайте:</h3>
						<p><b>Имя: </b>'.$_POST['name'].'</p>
						<p><b style="color:red;">Телефон: </b>'.$_POST['phone'].'</p>                       
                    </body>
                </html>'; //Текст нашего сообщения можно использовать HTML теги
        $headers  = "Content-type: text/html; charset=utf-8 \r\n"; //Кодировка письма
        $headers .= "From: whg.su <robot@whg.su>\r\n"; //Наименование и почта отправителя
        mail($to, $subject, $message, $headers); //Отправка письма с помощью функции mail
		echo 'Данные успешно отправлены. Ожидайте звонка менеджера';

}
else
{
	//echo $_POST['phone'];

	$to = 'kazan-brus@yandex.ru'; //Почта получателя, через запятую можно указать сколько угодно адресов
        $subject = 'Обратный звонок'; //Заголовок сообщения
        $message = '
                <html>
                    <head>
                        <title>'.$subject.'</title>
                    </head>
                    <body>
					<h3>Форма обратной связи на сайте:</h3>
						<p><b style="color:red;">Телефон: </b>'.$_POST['phone'].'</p>                       
                    </body>
                </html>'; //Текст нашего сообщения можно использовать HTML теги
        $headers  = "Content-type: text/html; charset=utf-8 \r\n"; //Кодировка письма
        $headers .= "From: whg.su <robot@whg.su>\r\n"; //Наименование и почта отправителя
        mail($to, $subject, $message, $headers); //Отправка письма с помощью функции mail
		echo 'Данные успешно отправлены. Ожидайте звонка менеджера';
}

