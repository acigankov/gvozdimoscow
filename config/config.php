<?php
$actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
//vars

$data = [
    'site_title'        => 'Бар «Гвозди»',
    'site_url'          => $actual_link,
    'head_keywords'     => 'Бар Гвозди, ресторана, паб в Москве, пивной ресторан, поесть , ланчи',
    'head_description'  => '«Гвозди» – это место с хорошим настроением, место где тебе всегда рады, а атмосфера располагает к правильному отдыху. Это место, куда можно прийти большой компанией отметить День рождения или заглянуть в конце трудного дня и встретить там своих друзей.'
];



//lunches
function showLunchTemplate() {

    $weekNum = '1'; //поменял 19.05.2019 

    switch (date('w')) {
        case '1';
            $imgLunchUrl = "template/lunch/" . $weekNum . "/lunch1.php";
            break;
        case '2';
            $imgLunchUrl = "template/lunch/" . $weekNum . "/lunch2.php";
            break;
        case '3';
            $imgLunchUrl = "template/lunch/" . $weekNum . "/lunch3.php";
            break;
        case '4';
            $imgLunchUrl = "template/lunch/" . $weekNum . "/lunch4.php";
            break;
        case '5';
            $imgLunchUrl = "template/lunch/" . $weekNum . "/lunch5.php";
            break;
        case '6';
            $imgLunchUrl = "template/lunch/" . $weekNum . "/lunch1.php";
            break;
        case '0';
            $imgLunchUrl = "template/lunch/" . $weekNum . "/lunch1.php";
            break;
    }return include($imgLunchUrl);
}

//показываем дни недели.
function getDayRus() {
    $days = array(
        'Понедельник', 'Понедельник', 'Вторник', 'Среда',
        'Четверг', 'Пятница', 'Понедельник'
    );
    return $days[(date('w'))];
}


?>
