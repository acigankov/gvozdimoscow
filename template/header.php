 <?php require_once  'config/config.php'; ?>
<!doctype html>
<html lang="ru">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robots" content="index, follow" />
    <meta name="keywords" content="<?= $data['head_keywords']; ?>" />
    <meta name="description" content="<?= $data['head_description']; ?>" />

    <meta property="og:title" content="<?= $data['site_title']; ?>">
    <meta property="og:site_name" content="<?= $data['site_title']; ?>">
    <meta property="og:url" content="<?= $data['site_url']; ?>">
    <meta property="og:description" content="<?= $data['head_description']; ?>">
    <meta property="og:image" content="<?= $data['site_url'];?>img/logo.png">
    <meta property="og:type" content="website"> 


    <!-- Normalize Css -->
    <link rel="stylesheet" href="/css/normalize.css">
    <!-- Font-Awesome Css -->
    <link rel="stylesheet" href="/libs/fontawesome/css/all.css">
    <!-- Slick Slider Css-->
    <link rel="stylesheet" href="libs/slick/slick-theme.css" />
    <link rel="stylesheet" href="libs/slick/slick.css" />
    <!-- Animate Css-->
    <link rel="stylesheet" href="../css/animate.css" />
    <!--Fancybox css-->
    <link rel="stylesheet" href="libs/fancybox/jquery.fancybox.min.css" />
    <!--datetimepicker . css// date & time in forms pluign-->    
    <link rel="stylesheet" href="../libs/datetimepicker/jquery.datetimepicker.css" />
    <!-- Main Css -->
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="/css/lunch.css">
    <!--media-->
    <link rel="stylesheet" href="/css/media.css" />
    <link rel="stylesheet" href="/css/lunch-media.css" />
    <!-- Favicon -->
    <link href="/img/favicon/favicon.svg" sizes="16x16" rel="icon" type="image/svg+xml" />
    <link rel="shortcut icon" href="/img/favicon/favicon.png" type="image/png">
    <title><?= $data['site_title']; ?></title>

</head>

<body>

    
<!--прелоадер-->
<div id="preloader"><div id="preloader_preload"></div></div>
<!--конец прелоадер-->    

<!--баннер с ланчами-->
    <div class="right-banner">
        <a href="/menu.php#lunch" title="бизнес-ланчи"><img src="../img/right-banner.png" alt="banner"></a>
    </div>
<!--конец баннер с ланчами-->


    <div class="wrapper">
        
        <!--всплывающая плашка меню при скролле-->
        <div class="menu-sticky top-menu">
            <ul>
                <li><a href="/">О Нас</a></li>
                <li class="menu-link-for-lunch"><a href="/menu.php">Меню</a></li>
                <li><a href="/afisha.php">Афиша</a></li>
                <li><a href="/bankety.php">Банкеты</a></li>
                <li><a href="http://quiz.gvozdimoscow.ru/" target="_blank">Квиз</a></li>
            </ul>
            <p class="tel"><i class="fas fa-phone"></i>&nbsp;<a href="tel:+7(495)276-19-87">+7 (495) 276-19-87</a></p>

            <div class="top-buttons ">
                <a href="#" class="open-window" id="tes1t" title="забронировать столик">забронировать столик</a>
            </div>

            <div class="main-logo center">
                <a href="/" title="logo">
                    <img src="../img/logo.png" alt="logo" class="img-fluid">
                </a>
            </div>
            
        </div>
        
        <!--конец всплывающая плашка меню при скролле-->
        
            <header class="top-header">
                <!-- левый контейнер в шапке -->
                <div class="left-container">
                    <div class="soc">
                        <a href="https://vk.com/gvozdipub_moscow" title="Мы вКонтакте" target="_blank"><i class="fab fa-vk"></i></a>
                        <a href="https://ru-ru.facebook.com/gvozdipubmoscow/" title="Мы в Facebook" target="_blank"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://www.instagram.com/gvozdipub_moscow/" title="Мы в Instagram" target="_blank"><i class="fab fa-instagram"></i></a>
                    </div>

                    <div class ="top-menu">
                        <ul>
                            <li><a href="/">О Нас</a></li>
                            <li class="menu-link-for-lunch"><a href="/menu.php">Меню</a></li>
                            <li><a href="/afisha.php">Афиша</a></li>
                            <li><a href="/bankety.php">Банкеты</a></li>
                            <li><a href="http://quiz.gvozdimoscow.ru/" target="_blank">Квиз</a></li>
                        </ul> 
                    </div>
                </div>

                <div class="main-logo center">
                    <a href="/" title="logo">
                        <img src="../img/logo.png" alt="logo" class="img-fluid">
                    </a>
                </div>

                <div class="right-container">
                    <div class="top-buttons ">
                        <!--<a href="#" title="заказать звонок" class="open-window-question">заказать звонок</a>-->
                        <a href="#" class="open-window"  title="забронировать столик">забронировать столик</a>
                    </div>
                    <div class="top-contacts">
                        <img src="../img/work-time.png" title="часы   работы" class="work-time-img center">
                        <div class="work-time">
                            <p>вс-чт с 08:00 до 00:00</p>
                            <p>пт-сб с 08:00 до 02:00</p>
                        </div>
                        <div class="top-contacts-phone">
                            <p class="tel"><a href="tel:+7(495)276-19-87">+7 (495) 276-19-87</a></p>
                            <p>Ул. Воронцовская/20</p>
                        </div>  
                    </div>
                </div>
                
                <!--плашка меню на моб экранах-->
                <div class="mobile-menu-buttons">
                    <button class="header-font mnu-btn" type="button">☰</button>
                    <a href="#" class="btn-menu open-window" title="забронировать столик" >забронировать столик</a>
                </div>  
                <div class="mobile-menu-buttons mobile-sticky">
                    <button class="header-font mnu-btn" type="button" >☰</button>
                    <a href="#" class="btn-menu open-window" title="забронировать столик">забронировать столик</a>
                </div>  
                <!--конец плашка меню на моб экранах-->
                
                <div class="gv-border-white gv-border-bottom"></div> 
            </header>
        
        
        
        <!--modals-->
        <div class="modals">
            <div class="overlay grid" title="окно"></div>
            <div class="overlay-age grid" title="окно"></div>
            <div class="popup">
                <div class="close-window">x</div>

                <form action="#" id="form-reserve" method="post" class="modal-form">

                    <div class="form-field form-field-text">
                        <label class="header-font" for="modal-name">ваше имя</label>
                        <input id="modal-name" name="name" type="text"/>
                    </div>
                    <div class="form-field form-field-text">
                        <label class="header-font" for="modal-tel">ваш телефон</label>
                        <input id="modal-tel" name="tel" type="text" />
                    </div>
                    <div class="form-field form-field-text">
                        <label class="header-font" for="modal-guestqnt">количество гостей</label>
                        <input id="modal-guestqnt" name="qnt" type="text" />
                    </div>
                    <div class="form-field form-field-text-date grid">
                        <div class="modal-form-day">
                            <label class="header-font" for="modal-date-day">дата брони</label>
                            <input id="modal-date-day" name="date" min="<?= date("Y-m-d"); ?>"
                                   max="<?= date("Y-m-d", strtotime("+14 days"));?>"
                                   type="date" value="<?= date("Y-m-d"); ?>"/>
                        </div>
                        <div class="modal-form-time" >
                            <label class="header-font" for="modal-date-time">время брони</label>
                            <input id="modal-date-time" name="time" type="time"/>
                        </div>
                    </div>

                    <input type="submit" id="form-reserve-submit" value="" />
                </form>
                <p class="result_ header-font"></p>
            </div>

            <div class="popup-question">
                <div class="close-window">x</div>

                <form id="form-question" action="#" method="post" class="modal-form">

                    <div class="form-field form-field-text">
                        <label class="header-font" for="modal-name-q">ваше имя</label>
                        <input id="modal-name-q" name="name_q" type="text" />
                    </div>
                    <div class="form-field form-field-text">
                        <label class="header-font" for="modal-tel-q">ваш телефон</label>
                        <input id="modal-tel-q" name="tel_q" type="text" />
                    </div>

                    <input type="submit" value=""/>
                </form>
                
                <p class="result_ header-font"></p>
                
            </div>
            
            <div class="popup-age">

                <p class="header-font"> ДАННЫЙ РАЗДЕЛ САЙТА НЕ ДОСТУПЕН ДЛЯ ЛИЦ МЛАДШЕ 18 ЛЕТ</p>
                <p class="header-font"> Вам исполнилось 18 ЛЕТ ?</p>
              

                <div class="bankety-buttons">
                    <button class="age-button-close">ДА</button>
                    <button onclick="window.location = '/';">НЕТ</button>
                </div>
                
                  <p class="popup-text">Содержащаяся на сайте справочная информация об ассортименте алкогольной продукции
                    не является предложением о приобретении и доводится до сведения посетителей в соответствии с требованиями 
                    Закона РФ от 07.02.1992 N 2300-1 "О защите прав потребителей" и Федерального закона от 28.12.2009 N 381-ФЗ 
                    "Об основах государственного регулирования торговой деятельности в Российской Федерации", с учетом ограничений, 
                    установленных Федеральным законом от 13.03.2006 N 38-ФЗ "О рекламе" (в редакции Федерального закона от 20.07.2012 
                    N 119-ФЗ).
                </p>
            </div>
            
            
            
        </div>
<!--end modals-->

<!-- start mobile menu-->
        <div class="mobile-menu animated slideInLeft">
            <div class="mobile-menu-content">
                <div class="soc">
                    <a href="https://vk.com/gvozdipub_moscow" title="Мы вКонтакте" target="_blank"><i class="fab fa-vk"></i></a>
                    <a href="https://ru-ru.facebook.com/gvozdipubmoscow/" title="Мы в Facebook" target="_blank"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://www.instagram.com/gvozdipub_moscow/" title="Мы в Instagram" target="_blank"><i class="fab fa-instagram"></i></a>
                </div>

                <div class="top-contacts-phone">
                    <p class="tel"><a href="tel:+7(495)276-19-87">+7 (495) 276-19-87</a></p>
                    <p>Ул. Воронцовская/20</p>
                </div>  

                <ul class="header-font">

                    <li><a href="/">О Нас</a></li>
                    <li><a href="/menu.php">Меню</a></li>
                    <li><a href="/afisha.php">Афиша</a></li>
                    <li><a href="/bankety.php">Банкеты</a></li>
                    <li><a href="http://quiz.gvozdimoscow.ru/" target="_blank">Квиз</a></li>
                </ul> 

                <div class="top-buttons ">
                    <!--<a href="#" title="заказать звонок" class="open-window-question">заказать звонок</a>-->
                    <a href="#" class="open-window"  title="забронировать столик">забронировать столик</a>
                </div>

            </div>
        </div>



        <div class="mobile-overlay"></div>


<!-- конец mobile menu-->

<!--button UP-->
<div id="button-up" class="animated fadeInRightBig"><i class="fas fa-arrow-up"></i></div>
<!--конец button UP-->
