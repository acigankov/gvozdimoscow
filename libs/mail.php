<?php

/**
 * Description of mail
 *
 * @author Темыч
 */
//форма с вопросом

if (isset($_POST['name_q']) && !empty($_POST['name_q'])) {

    $name = $_POST['name_q'];
    $tel = $_POST['tel_q'];
    $to = 'acigankov@inbox.ru, v.v.ilyin@yandex.ru, gvozdimsk1@gmail.com, gvozdibron1@yandex.ru';
    $subject = 'Заказ звонка с сайта gvozdi';
    $message = 'hello Manager! <br>' . "\r\n"
            . $name . ' просит перезвонить ему по номеру - <br>' . "\r\n"
            . $tel;

// Для отправки HTML-письма должен быть установлен заголовок Content-type
    $headers = 'Content-type: text/html; charset=utf-8' . "\r\n" .
            'MIME-Version: 1.0' . "\r\n" .
// Дополнительные заголовки
            'From: gvozdi@email.ru' . "\r\n" .
            'Reply-To: gvozdi@email.ru' . "\r\n" .
            'X-Mailer: PHP/' . phpversion();

    if (mail($to, $subject, $message, $headers)) {

        $filename = '../logs/mail/save_mail.txt';
        $text = date("Y-m-d H:i:s") . ", Звонок , $name , $tel , " . PHP_EOL ;
        file_put_contents($filename, $text, FILE_APPEND);

        unset($_POST);
    }

    // Формируем массив для JSON ответа
    $result = array(
        'name' => $name,
        'phonenumber' => $tel
    );

    // Переводим массив в JSON
    echo json_encode($result);
}


//форма брони
if (isset($_POST['name']) && !empty($_POST['tel'])) {

    $name = $_POST['name'];
    $tel = $_POST['tel'];
    $qnt = $_POST['qnt'];
    $date = date('d.m.Y', strtotime($_POST['date']));
    $time = $_POST['time'];
    $to = 'acigankov@inbox.ru, v.v.ilyin@yandex.ru, gvozdimsk1@gmail.com, gvozdibron1@yandex.ru';
    $subject = 'Заказ столика с сайта gvozdi';

    $message = 'hello Manager! <br>' . "\r\n"
            . $name . ' просит забронировать столик  <br>' . "\r\n"
            . $date . ' в ' . $time . ' , кол-во гостей : ' . $qnt . '<br>' . "\r\n"
            . 'телефон для связи : ' . $tel;

// Для отправки HTML-письма должен быть установлен заголовок Content-type
    $headers = 'Content-type: text/html; charset=utf-8' . "\r\n" .
            'MIME-Version: 1.0' . "\r\n" .
// Дополнительные заголовки
            'From: gvozdi@email.ru' . "\r\n" .
            'Reply-To: gvozdi@email.ru' . "\r\n" .
            'X-Mailer: PHP/' . phpversion();



    if (mail($to, $subject, $message, $headers)) {

        $filename = '../logs/mail/save_mail.txt';
        $text = date("Y-m-d H:i:s") . ", Бронирование , $name , $tel  " . PHP_EOL ;
        file_put_contents($filename, $text, FILE_APPEND);

        unset($_POST);
    }

    // Формируем массив для JSON ответа
    $result = array(
        'name' => $name,
        'phonenumber' => $tel
    );

    // Переводим массив в JSON
   echo json_encode($result);

}

else { die($_POST); }

?>
