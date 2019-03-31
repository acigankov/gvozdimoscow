$(document).ready(function () {
    
//preloader    
var preloader = document.getElementById("preloader_preload");

function fadeOutnojquery(el){
    el.style.opacity = 1;
    var interpreloader = setInterval(function(){
        el.style.opacity = el.style.opacity - 0.05;
        if (el.style.opacity <=0.05){ 
            clearInterval(interpreloader);
            preloader.style.display = "none";
        }
    },16);
}

window.onload = function () {
        setTimeout(function () {
            fadeOutnojquery(preloader);
        }, 300); //время показа после загрузки 
    };

    if (window.location.pathname === '/menu.php') {
        //убираем баннер на странице меню
        $('.right-banner').css({'display': 'none'});
    }


    //ссылки на категории на странице меню

    if ($(window).width() < 768) {
        $(".food-menu-categories-line , .food-menu-categories-line-bar").css({'display': 'none'});
    }

    if ($(window).width() >= 768) { //если ширина окна >= 768 пикселов

//убираем при кликах на табы, где ссылки на категории не нужы
        $(".food-menu-top-line").on("click", "a", function (e) {
            e.preventDefault();
            $('html, body').animate({scrollTop: 0}, 800);
            switch (this.id) {
                case 'f-menu':
                    $(".food-menu-categories-line").css({'display': 'grid'});
                    $(".food-menu-categories-line-bar").css({'display': 'none'});
                    break;

                case 'f-breakfasts':
                    $(".food-menu-categories-line , .food-menu-categories-line-bar").css({'display': 'none'});
                    break;

                case 'f-lunches':
                    $(".food-menu-categories-line , .food-menu-categories-line-bar").css({'display': 'none'});
                    break;

                case 'f-bar':
                    $(".food-menu-categories-line").css({'display': 'none'});
                    $(".food-menu-categories-line-bar").css({'display': 'grid'});
                    break;

                case 'f-sishas':
                    $(".food-menu-categories-line , .food-menu-categories-line-bar").css({'display': 'none'});
                    break;
            }
        });

//скролл при клике на категорию
        $("#scroll-to, #scroll-to-bar").on("click", "a", function (e) {
            //отменяем стандартную обработку нажатия по ссылке
            e.preventDefault();

            //удаляем класс у всех элементов массива. Знаю , что неправильно, но работает.
            var arr = $("#scroll-to a");
            for (var i = 0; i < arr.length; i++) {
                $(arr[i]).removeClass('active');
            }

            var arr_bar = $("#scroll-to-bar a");
            for (var i = 0; i < arr_bar.length; i++) {
                $(arr_bar[i]).removeClass('active');
            }

            //при клике ставим класс active
            $(this).addClass('active');

            //забираем идентификатор бока с атрибута href
            var destination = $(this).attr('href'),
                    //узнаем высоту от начала страницы до блока на который ссылается якорь
                    top = $(destination).offset().top - 200;

            //анимируем переход на расстояние - top за 1000 мс
            $('body,html').animate({scrollTop: top}, 1000);
        });
    }
    
//tabs for menu page

$('.tabs__caption a').click(function(e){e.preventDefault();});
(function($) {
  $(function() {
    $("ul.tabs__caption").on("click", "li:not(.active)", function() {
      $(this)
        .addClass("active")
        .siblings()
        .removeClass("active")
        .closest("div.tabs")
        .find("div.tabs__content")
        .removeClass("active")
        .eq($(this).index())
        .addClass("active");
    });
  });
})(jQuery);


//slick slider in header
$(".header-slider").slick({
    respondTo: "min",
    dots: true,
    arrows: false,
    autoplay: true,
    adaptiveHeight: true,
    autoplaySpeed: 2300,
    responsive: [
        {
            breakpoint: 480,
                settings: {
                    dots: false
                }
            }
    ]
});

//slick slider options, for akcii page
$(".slider-nav").slick({
    dots: false,
    infinite: true,
    centerMode: false,
    slidesToShow: 2,
    slidesToScroll: 1,
    focusOnSelect: true,
    arrows: false,
    asNavFor: ".slider-for"
});
$('.slider-for').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: true,
    asNavFor: '.slider-nav',
    autoplay: true,
    autoplaySpeed: 2000
});

//slick slider categories menu page


    $(".food-menu-categories-line, .food-menu-categories-line-bar ").slick({
       // slidesToShow: 10,
        slidesToScroll: 5,
        dots: false,
        arrows: true,
        autoplay: false,
        infinite: true,
        centerMode: false,
        variableWidth: true
    });

//active pages
    $(function () {
        var location = window.location.href;
        var cur_url = '/' + location.split('/').pop();

        $('.top-menu li').each(function () {
            var link = $(this).find('a').attr('href');

            if (cur_url == link)
            {
                $(this).addClass('active');
            }
        });

        $('.footer-menu li').each(function () {
            var link = $(this).find('a').attr('href');

            if (cur_url == link)
            {
                $(this).find('a').addClass('active');
            }
        });

        if (cur_url === '/menu.php#lunch') {//заколхозил клик по баннеру
            history.pushState('', document.title, window.location.pathname);
            $('#li-lunch').click();
            $(".food-menu-categories-line , .food-menu-categories-line-bar").css({'display': 'none'});
            $('.top-menu .menu-link-for-lunch').addClass('active');
            $('.footer-menu .menu-link-for-lunch a').addClass('active');
        }
    });

// Fancy-box. Images and gallery
$("[data-fancybox]").fancybox({
   protect: true,
   toolbar  : true
  });
  

//modal
var age_confirmed = false;

$('.close-window, .overlay').click(function (e) {
    $('.modals, form, .result_').css({'display': 'none'});
    $('.popup, .popup-question, .overlay').css({'opacity': 0, 'visibility': 'hidden'});
    e.preventDefault();
});

$('.age-button-close').click(function (e) {
    $('.modals').css({'display': 'none'});
    $('.popup-age, .overlay-age').css({'opacity': 0, 'visibility': 'hidden'});
    age_confirmed = true;
    e.preventDefault();
});

$('a.open-window').click(function (e) {
    $('.modals, form').css({'display': 'block'});
    $('.popup, .overlay').css({'opacity': 0.95, 'visibility': 'visible'});
    e.preventDefault();
});

$('a.open-window-question').click(function (e) {
    $('.modals, form').css({'display': 'block'});
    $('.popup-question, .overlay').css({'opacity': 0.95, 'visibility': 'visible'});
    e.preventDefault();
});

$('a.open-window-age').click(function (e) {
    if (!age_confirmed) {
        $('.modals').css({'display': 'block'});
        $('.popup-age').css({'opacity': 1, 'visibility': 'visible'});
        $('.overlay-age').css({'opacity': 1, 'visibility': 'visible', 'background-color': '#ccc'});
        e.preventDefault();
    }
});



//mobile-menu

    
    var mobileShowed = false;

    $('.mobile-menu-buttons button').click(function () {
        
        //показываем левое выезжающее меню
        
        $('.mobile-sticky, .food-menu-sticky').css({'display': 'none'});
        $('.mobile-menu , .mobile-overlay').css({'display': 'block'});
        mobileShowed  = true;
    });

    $('.close-window , .mobile-overlay').click(function () {
        
        //убираем левое выезжающее меню
        
        $('.mobile-menu , .mobile-overlay').css({'display': 'none'});
        mobileShowed = false;
        if (!mobileShowed && $(window).scrollTop() >= 200) {
            $('.mobile-sticky, .food-menu-sticky').css({'display': 'grid'});
        }
    });


//sticky-header + button-up 

    $(window).scroll(function () {
        
        if ($(this).width() >= 768) { //если ширина окна >= 768 пикселов
            
            $('.mobile-menu , .mobile-overlay , .mobile-sticky').css({'display': 'none'});

            if ($(this).scrollTop() >= 200) {//показываем
                $('.menu-sticky').css({
                    'display': 'flex',
                    'justify-content' : 'space-around',
                    'position': 'fixed',
                    'top': '0px',
                    'max-width': '1180px',
                    'width': '100%',
                    'line-height': '70px',
                    'max-height': '70px'
                }).addClass('animated fadeInDown');
                $('.food-menu-top-line') //плашка с кнопками разделов меню
                        .css({
                        'position' : 'fixed',
                        'display' : 'initial'
                        })
                        .addClass('top-menu-fixed mobile-box-shadow animated fadeInDown');
//                $('.food-menu-categories-line-bar') //плашка с кнопками с каруселькой категорий
//                        .css({
//                        'position' : 'fixed',
//                        'display' : 'initial'
//                        })
//                        .addClass('top-menu-fixed-categories mobile-box-shadow animated fadeInDown');
               $('#button-up').css({'display' : 'initial'});

                
            } else if ($(this).scrollTop() <= 200) {  //убираем
                $('.menu-sticky').css({'display': 'none'}).removeClass('animated fadeInDown');
                $('#button-up').css({'display': 'none'});
                $('.food-menu-top-line')
                        .css({'display' : 'grid' , 'position' : 'initial'})
                        .removeClass('top-menu-fixed mobile-box-shadow animated fadeInDown');
//                $('.food-menu-categories-line-bar')
//                        .css({'display' : 'grid' , 'position' : 'initial'})
//                        .removeClass('top-menu-fixed-categories mobile-box-shadow animated fadeInDown');
            }
                    
        } else if ($(this).width() <= 767) {
            
            if ($(this).scrollTop() >= 200 && !mobileShowed) { //показываем
                $('#button-up').css({'display' : 'initial' , 'bottom' : 100});
                $('.mobile-sticky')
                        .css({'display': 'grid'})
                        .addClass('mobile-menu-fixed mobile-box-shadow animated fadeInDown');
                $('.food-menu-top-line')
                        .css({
                            'position': 'fixed',
                            'display': 'block'
                        })
                        .addClass('top-menu-fixed mobile-box-shadow animated fadeInDown');

            } else if ($(this).scrollTop() <= 200 || mobileShowed) {//убираем
                $('#button-up').css({'display': 'none'});
                $('.mobile-sticky')
                        .css({'display' : 'none'})
                        .removeClass('mobile-menu-fixed mobile-box-shadow animated fadeInDown');
                $('.food-menu-top-line')
                        .css({'display' : 'grid' , 'position' : 'initial'})
                        .removeClass('top-menu-fixed mobile-box-shadow animated fadeInDown');
            }

        }

    });

    $('#button-up').click(function (e) {
        $('html, body').animate({scrollTop: 0}, 800);
        $(this).css({
            'display': 'none'
        });
        e.preventDefault();
    });   
    
    //валидация форм
    
    $(function () {
        // для браузеров, не понимающих type=date 
        
        var user = detect.parse(navigator.userAgent);
        if (user.browser.family === 'IE' || user.browser.family === 'Safari') {
            
            $('#modal-date-time').attr('type' , 'text');
            
            $('#modal-date-time').datetimepicker({
                datepicker: false,
                step : 30,
                format: 'H:i'
            });
            $('#modal-date-day').datetimepicker({
                timepicker: false,
                minDate: 0,
                format: 'd.m.Y'
            });
        }
        
        var name_q = $('#modal-name-q');
        var name = $('#modal-name');
        var tel = $('#modal-tel');
        var tel_q = $('#modal-tel-q');
        var qnt = $('#modal-guestqnt');
        var date = $('#modal-date-day');
        var time = $('#modal-date-time');
        
        name.inputmask({
            mask : 'a{20}', // маска
            jitMasking: true  // отключение статичных символов при вводе
        });
        
        tel.inputmask({
            mask: '9-(999)-999-99-99',
            jitMasking: true
        });  
        name_q.inputmask({
            mask : 'a{20}', // маска
            jitMasking: true  // отключение статичных символов при вводе
        });
        
        tel_q.inputmask({
            mask: '9-(999)-999-99-99',
            jitMasking: true
        });  
        
        qnt.inputmask({
            mask: '9{3}',
            jitMasking: true
        });  

        //валидация ввода полей
        
        validationFields(name, 3); // имя
        validationFields(name_q, 3); // имя
        validationFields(tel, 17); // телефон
        validationFields(tel_q, 17); // телефон
        validationFields(qnt, 1); // кол-во гостей
        validationFields(date); // дата
        validationFields(time); // время
       
        
        
        function validationFields(selector, numForvalid) {
            
            if(validationFields.arguments.length === 2) {
                
            selector.change(function (e) {
                if (selector.val().length < numForvalid) {
                    $(this).removeClass('input-focus-ok').addClass('input-focus-err');
                } else {
                    $(this).removeClass('input-focus-err').addClass('input-focus-ok');
                }
            });
            
            selector.focus(function (e) {
                if (selector.val().length < numForvalid) {
                    $(this).removeClass('input-focus-ok').addClass('input-focus-err');
                }
                else {
                    $(this).removeClass('input-focus-err').addClass('input-focus-ok');
                }
            });
            
            selector.keyup(function (e) {

                let val = $(this).val();

                $(this).addClass('input-focus-err');

                if (val.length <= numForvalid) {
                    $(this).removeClass('input-focus-ok').addClass('input-focus-err');
                } else {
                    $(this).removeClass('input-focus-err').addClass('input-focus-ok');
                }
            });
            
        } else {
            
                selector.click(function (e) {

                    let val = $(this).val();

                    if (val.length === 0) {
                        $(this).removeClass('input-focus-ok').addClass('input-focus-err');
                    } else {
                        $(this).removeClass('input-focus-err').addClass('input-focus-ok');
                    }
                });
                selector.change(function (e) {

                    let val = $(this).val();

                    if (val.length === 0) {
                        $(this).removeClass('input-focus-ok').addClass('input-focus-err');
                    } else {
                        $(this).removeClass('input-focus-err').addClass('input-focus-ok');
                    }
                });
        }
        
    }
                //проверка перед отправвкой
                
        function checkFormFieldsReserve() {
            if (name.hasClass('input-focus-err')
                    || tel.hasClass('input-focus-err')
                    || qnt.hasClass('input-focus-err')
                    || date.hasClass('input-focus-err')
                    || time.hasClass('input-focus-err')) {
                return false;
            } else {
                return true;
            }
        }
        function checkFormFieldsQuestion() {
            if (name.hasClass('input-focus-err') || tel.hasClass('input-focus-err')) {
                return false;
            } else {
                return true;
            }
        }
                
            $('#form-reserve').on('submit', function (e) {
                e.preventDefault();
            
                if (name.val() === '' || name.hasClass('input-focus-err')) {
                name.addClass('input-focus-err');
                name.focus();
                name.attr('required' , 'required');
            }

            if (tel.val() === '' || tel.hasClass('input-focus-err')) {
                tel.addClass('input-focus-err');
                tel.focus();
                tel.attr('required' , 'required');
            }

            if (qnt.val() === '' || qnt.hasClass('input-focus-err'))  {
                qnt.addClass('input-focus-err');
                qnt.focus();
                qnt.attr('required' , 'required');
            }

            if (date.val() === '' || date.hasClass('input-focus-err')) {
                date.addClass('input-focus-err');
                date.focus();
                date.attr('required' , 'required');
            }

            if (time.val() === ''  || time.hasClass('input-focus-err')) {
                time.addClass('input-focus-err');
                time.focus();
                time.attr('required' , 'required');
            }
        
            if (!checkFormFieldsReserve ()) {
                alert('Необходимо заполнить все поля! ');
            } else {
                var url = 'libs/mail.php';
                var form = $('#form-reserve');
                var result_ = $('.result_');
                sendAjaxForm(result_, form, url);
            }
            
        });
        
        $('#form-question').on('submit', function (e) {
            e.preventDefault();

            if (name_q.val() === '' || name.hasClass('input-focus-err')) {
                name_q.addClass('input-focus-err');
                name_q.focus();
                name_q.attr('required', 'required');
            }

            if (tel_q.val() === '' || (tel.hasClass('input-focus-err'))) {
                tel_q.addClass('input-focus-err');
                tel_q.focus();
                tel_q.attr('required', 'required');
            }

            if (!checkFormFieldsQuestion()) {
                alert('Необходимо заполнить все поля! ');
            } else {
                var url = 'libs/mail.php';
                var form = $('#form-question');
                var result_ = $('.result_');
                sendAjaxForm(result_, form, url);
            }
        });
        
        function sendAjaxForm(result_, form, url) {
            $.ajax({
                
                url: url, //url страницы 
                cache: false, // выключили кэш
                type: "POST", //метод отправки
                dataType: "html", //формат данных
                data: form.serialize(), // Сеарилизуем объект
                success: function (response) { //Данные отправлены успешно
                    var result = $.parseJSON(response);
                    form.css({'display' : 'none'});
                    result_.css({'display' : 'block'});
                    result_.text('Спасибо , ' + result.name + '. Наш менеджер свяжется с Вами по телефону: ' + result.phonenumber);
                },
                error: function (response) { // Данные не отправлены
                
                form.css({'display' :'none'});
                result_.css({'display' : 'block'});
                result_.text('Ошибка. Данные не отправленны.');
                }
                
            });
        }
        
    });
    
});
