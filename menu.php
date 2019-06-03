<?php require_once __DIR__ . '/template/header.php'; ?>

<section class="food-menu">
    <div class="separator">
        <div class="separator-left-black"></div>
        <h1 class="header-font">Меню</h1>
        <div class="separator-right-black"></div>
    </div>


    <div class="tabs">

        <div class="food-menu-top-line-wrapper">

            <div class="food-menu-top-line grid ">
                <ul class="header-font tabs__caption">
                    <li class="active">
                        <a href="#" title="основное меню" id="f-menu">меню</a>
                    </li>
                    <li>
                        <a href="#" title="завтраки" id="f-breakfasts">завтраки</a>
                    </li>
                    <li id="li-lunch">
                        <a href="#" title="бизнес-ланчи" id="f-lunches">ланчи</a>
                    </li>
                    <li>
                        <a href="#" title="бар" class="open-window-age" id="f-bar">бар</a>
                    </li>
                    <li>
                        <a href="#" title="кальяны" id="f-sishas">кальяны</a>
                    </li>
                </ul>
            </div>    



            <!--категории еды-->
            <div class="food-menu-categories-line grid" id="scroll-to">
                <div class="item">
                    <a href="#on_company"><img src="img/menu/menu-categories/on_company.jpg" alt="Блюда на Компанию"/></a>
                    <div class="title">Блюда на Компанию</div>
                    <span class="price">от 499<i class="fas fa-ruble-sign"></i></span>
                </div>
                <div class="item">
                    <a href="#hol_zakuski"><img src="img/menu/menu-categories/hol_zakuski.jpg" alt="Холодные Закуски"/></a>
                    <div class="title">Холодные Закуски</div>
                    <span class="price">от 299<i class="fas fa-ruble-sign"></i></span>
                </div>
                <div class="item">
                    <a href="#piv_zakuski"><img src="img/menu/menu-categories/piv_zakuski.jpg" alt="Пивные Закуски"/></a>
                    <div class="title">Пивные Закуски</div>
                    <span class="price">от 199<i class="fas fa-ruble-sign"></i></span>
                </div>
                <div class="item">
                    <a href="#salads"><img src="img/menu/menu-categories/salads.jpg" alt="Салаты"/></a>
                    <div class="title">Салаты</div>
                    <span class="price">от 299<i class="fas fa-ruble-sign"></i></span>
                </div>
                <div class="item">
                    <a href="#soups"><img src="img/menu/menu-categories/soups.jpg" alt="Первые Блюда"/></a>
                    <div class="title">Первые Блюда</div>
                    <span class="price">от 199<i class="fas fa-ruble-sign"></i></span>
                </div>
                <div class="item">
                    <a href="#gor_menu"><img src="img/menu/menu-categories/gor_menu.jpg" alt="Горячие Блюда"/></a>
                    <div class="title">Горячие Блюда</div>
                    <span class="price">от 399<i class="fas fa-ruble-sign"></i></span>
                </div>
                <div class="item">
                    <a href="#pasta"><img src="img/menu/menu-categories/pasta.jpg" alt="Паста"/></a>
                    <div class="title">Паста</div>
                    <span class="price">от 399<i class="fas fa-ruble-sign"></i></span>
                </div>
                <div class="item">
                    <a href="#steiks"><img src="img/menu/menu-categories/steiks.jpg" alt="Стейки"/></a>
                    <div class="title">Стейки</div>
                    <span class="price">от 499<i class="fas fa-ruble-sign"></i></span>
                </div>
                <div class="item">
                    <a href="#garniry"><img src="img/menu/menu-categories/garniry.jpg" alt="Гарниры"/></a>
                    <div class="title">Гарниры</div>
                    <span class="price">от 149<i class="fas fa-ruble-sign"></i></span>
                </div>
                <div class="item">
                    <a href="#burgers"><img src="img/menu/menu-categories/burgers.jpg" alt="Бургеры"/></a>
                    <div class="title">Бургеры</div>
                    <span class="price">от 299<i class="fas fa-ruble-sign"></i></span>
                </div>
                <div class="item">
                    <a href="#hot_dogs"><img src="img/menu/menu-categories/hot_dogs.jpg" alt="Бешенные Псы"/></a>
                    <div class="title">Бешенные Псы</div>
                    <span class="price">от 349<i class="fas fa-ruble-sign"></i></span>
                </div>
                <div class="item">
                    <a href="#deserts"><img src="img/menu/menu-categories/deserts.jpg" alt="Десерты"/></a>
                    <div class="title">Десерты</div>
                    <span class="price">от 199<i class="fas fa-ruble-sign"></i></span>
                </div>
            </div>

            <!--коне категории еды-->

            <!--категории бара-->
            <div class="food-menu-categories-line-bar grid" id="scroll-to-bar">;

                <div class="item">
                    <a href="#f_igristoevino"><img src="img/menu/menu-categories/igristoe_vino.jpg" alt="Игристое Вино"/></a>
                    <div class="title">Игристое Вино</div>
                    <span class="price">от 149<i class="fas fa-ruble-sign"></i></span>
                </div>
                <div class="item">
                    <a href="#f_vine"><img src="img/menu/menu-categories/vine.jpg" alt="Вино"/></a>
                    <div class="title">Вино</div>
                    <span class="price">от 199<i class="fas fa-ruble-sign"></i></span>
                </div>
                <div class="item">
                    <a href="#f_ling-drinks"><img src="img/menu/menu-categories/long.jpg" alt="Лонг Дринки"/></a>
                    <div class="title">Лонг Дринки</div>
                    <span class="price">от 399<i class="fas fa-ruble-sign"></i></span>
                </div>
                <div class="item">
                    <a href="#f_shots"><img src="img/menu/menu-categories/shots.jpg" alt="Шоты"/></a>
                    <div class="title">Шоты</div>
                    <span class="price">от 299<i class="fas fa-ruble-sign"></i></span>
                </div>
                <div class="item">
                    <a href="#f_hot"><img src="img/menu/menu-categories/hot.jpg" alt="Хот"/></a>
                    <div class="title">Хот</div>
                    <span class="price">от 299<i class="fas fa-ruble-sign"></i></span>
                </div>
                <div class="item">
                    <a href="#f_bir"><img src="img/menu/menu-categories/bir.jpg" alt="Бир"/></a>
                    <div class="title">Бир</div>
                    <span class="price">от 299<i class="fas fa-ruble-sign"></i></span>
                </div>
                <div class="item">
                    <a href="#f_vodka"><img src="img/menu/menu-categories/vodka.jpg" alt="Водка"/></a>
                    <div class="title">Водка</div>
                    <span class="price">от 149<i class="fas fa-ruble-sign"></i></span>
                </div>
                <div class="item">
                    <a href="#f_samogon"><img src="img/menu/menu-categories/samogon.jpg" alt="Самогон"/></a>
                    <div class="title">Самогон</div>
                    <span class="price">от 149<i class="fas fa-ruble-sign"></i></span>
                </div>
                <div class="item">
                    <a href="#f_whisky"><img src="img/menu/menu-categories/whisky.jpg" alt="Виски"/></a>
                    <div class="title">Виски</div>
                    <span class="price">от 149<i class="fas fa-ruble-sign"></i></span>
                </div>
                <div class="item">
                    <a href="#f_jin"><img src="img/menu/menu-categories/jin.jpg" alt="Джин"/></a>
                    <div class="title">Джин</div>
                    <span class="price">от 299<i class="fas fa-ruble-sign"></i></span>
                </div>
                <div class="item">
                    <a href="#f_rum"><img src="img/menu/menu-categories/rum.jpg" alt="Ром"/></a>
                    <div class="title">Ром</div>
                    <span class="price">от 249<i class="fas fa-ruble-sign"></i></span>
                </div>
                <div class="item">
                    <a href="#f_tequila"><img src="img/menu/menu-categories/tequila.jpg" alt="Текила"/></a>
                    <div class="title">Текила</div>
                    <span class="price">от 249<i class="fas fa-ruble-sign"></i></span>
                </div>
                <div class="item">
                    <a href="#f_cogniac"><img src="img/menu/menu-categories/cogniac.jpg" alt="Коньяк"/></a>
                    <div class="title">Коньяк</div>
                    <span class="price">от 199<i class="fas fa-ruble-sign"></i></span>
                </div>
                <div class="item">
                    <a href="#f_vermut"><img src="img/menu/menu-categories/vermut.jpg" alt="Вермут"/></a>
                    <div class="title">Вермут</div>
                    <span class="price">от 249<i class="fas fa-ruble-sign"></i></span>
                </div>
                <div class="item">
                    <a href="#f_liquer"><img src="img/menu/menu-categories/liquer.jpg" alt="Ликер"/></a>
                    <div class="title">Ликер</div>
                    <span class="price">от 249<i class="fas fa-ruble-sign"></i></span>
                </div>
                <div class="item">
                    <a href="#f_firm_beer"><img src="img/menu/menu-categories/firm_beer.jpg" alt="Фирменное Пиво"/></a>
                    <div class="title">Фирменное Пиво</div>
                    <span class="price">от 119<i class="fas fa-ruble-sign"></i></span>
                </div>
                <div class="item">
                    <a href="#f_craft_beer"><img src="img/menu/menu-categories/craft_beer.jpg" alt="Крафтовое Пиво"/></a>
                    <div class="title">Крафтовое Пиво</div>
                    <span class="price">от 199<i class="fas fa-ruble-sign"></i></span>
                </div>
                <div class="item">
                    <a href="#f_import_beer"><img src="img/menu/menu-categories/import_beer.jpg" alt="Импортное Пиво"/></a>
                    <div class="title">Импортное Пиво</div>
                    <span class="price">от 299<i class="fas fa-ruble-sign"></i></span>
                </div>
                <div class="item">
                    <a href="#f_season_beer"><img src="img/menu/menu-categories/season_beer.jpg" alt="Сезонное Пиво"/></a>
                    <div class="title">Сезонное Пиво</div>
                    <span class="price">от 199<i class="fas fa-ruble-sign"></i></span>
                </div>
                <div class="item">
                    <a href="#f_tea"><img src="img/menu/menu-categories/tea.jpg" alt="Чай"/></a>
                    <div class="title">Чай</div>
                    <span class="price">от 199<i class="fas fa-ruble-sign"></i></span>
                </div>
                <div class="item">
                    <a href="#f_hot_coctails"><img src="img/menu/menu-categories/hot_coctails.jpg" alt="Горячие Коктейли"/></a>
                    <div class="title">Горячие Коктейли</div>
                    <span class="price">от 349<i class="fas fa-ruble-sign"></i></span>
                </div>
                <div class="item">
                    <a href="#f_coffee"><img src="img/menu/menu-categories/coffee.jpg" alt="Кофе"/></a>
                    <div class="title">Кофе</div>
                    <span class="price">от 99<i class="fas fa-ruble-sign"></i></span>
                </div>
                <div class="item">
                    <a href="#f_cold_drinks"><img src="img/menu/menu-categories/cold_drinks.jpg" alt="Холодные Напитки"/></a>
                    <div class="title">Холодные Напитки</div>
                    <span class="price">от 79<i class="fas fa-ruble-sign"></i></span>
                </div>
                <div class="item">
                    <a href="#f_non_alco_coctails"><img src="img/menu/menu-categories/no-alco.jpg" alt="Безалкогольные Коктейли"/></a>
                    <div class="title">Безалкогольные Коктейли</div>
                    <span class="price">от 299<i class="fas fa-ruble-sign"></i></span>
                </div>
                <div class="item">
                    <a href="#f_lemonades"><img src="img/menu/menu-categories/lemonades.jpg" alt="Лимонады"/></a>
                    <div class="title">Лимонады</div>
                    <span class="price">от 349<i class="fas fa-ruble-sign"></i></span>
                </div>
                <div class="item">
                    <a href="#f_milkshakes"><img src="img/menu/menu-categories/milkshakes.jpg" alt="Милкшейки"/></a>
                    <div class="title">Милкшейки</div>
                    <span class="price">от 299<i class="fas fa-ruble-sign"></i></span>
                </div>
            </div>
            <!--конец категории бар-->
        </div>    

        <!--вкладка основное меню-->

        <div class="food-menu-container-osnmenu animated fadeIn tabs__content active" id="osnmenu">

            <div class="food-menu-advertisment" id="on_company">
                <span>
                    блюда на компанию ● от 499<i class="fas fa-ruble-sign"></i>
                </span>
            </div>

            <div class="food-menu-menu grid" >
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/osn-menu/meat-set-big.jpg" data-fancybox="image-meat-set" data-caption="Мясной Сет">
                            <img src="img/menu/osn-menu/meat-set-big.jpg" class="item-img img-fluid" title="Мясной Сет">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>мясной сет</h3>
                        <span class="menu-bar-item-description">[КРЫЛЬЯ КУРИНЫЕ, НАГГЕТСЫ КУРИНЫЕ,КАРТОФЕЛЬ ФРИ, 
                            ГРЕНКИ, СОУС БЛЮ ЧИЗ, СОУС BBQ]
                        </span>
                        <span class="menu-bar-item-weight">
                            150/100/90/80/20/20 гр.
                        </span>
                        <span class="menu-bar-item-price">
                            ~499
                        </span>
                    </div>    
                </div>
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/osn-menu/kolbas-mile-big.jpg" data-fancybox="image-kolb-mile" data-caption="Колбасная Миля">
                            <img src="img/menu/osn-menu/kolbas-mile-big.jpg" class="item-img img-fluid" title="Колбасная Миля">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>колбасная миля</h3>
                        <span class="menu-bar-item-description">[КОЛБАСКИ-УЛИТКИ ИЗ КУРИЦЫ, КОЛБАСКИ ИЗ СВИНИНЫ,
                                КУРИНЫЕ КОЛБАСКИ, ОВОЩИ ГРИЛЬ, КАРТОФЕЛЬНЫЕ ДОЛЬКИ,
                                ГРЕНКИ, КАРТОФЕЛЬ ФРИ, СОУС BBQ, СОУС СЫРНЫЙ]
                        </span>
                        <span class="menu-bar-item-weight">
                            450/120/80/90/130/20/20 гр.
                        </span>
                        <span class="menu-bar-item-price">
                            ~999
                        </span>
                    </div>    
                </div>
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/osn-menu/beer-set-big.jpg" data-fancybox="image-beer-set" data-caption="Пивной Набор">
                            <img src="img/menu/osn-menu/beer-set-big.jpg" class="item-img img-fluid" title="Пивной Сет">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>пивной сет</h3>
                        <span class="menu-bar-item-description">[ СЫРНЫЕ НАГГЕТСЫ, ЛУКОВЫЕ КОЛЬЦА, ГРЕНКИ, КАРТОФЕЛЬ ФРИ,
                            СОУС БЛЮ ЧИЗ, СОУС СЫРНЫЙ ]
                        </span>
                        <span class="menu-bar-item-weight">
                            80/100/110/90/20/20 гр.
                        </span>
                        <span class="menu-bar-item-price">
                            ~499
                        </span>
                    </div>    
                </div>
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <div class="hit-label"></div>
                        <a href="img/menu/osn-menu/big-kush.jpg" data-fancybox="image-big-kush" data-caption="Большой Куш">
                            <img src="img/menu/osn-menu/big-kush.jpg" class="item-img img-fluid" title="Большой Куш" alt="">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>большой куш</h3>
                        <span class="menu-bar-item-description">[СВИНЫЕ РЕБРЫШКИ, КОЛБАСКИ ГОВЯЖЬИ, КОЛБАСКИ СВИНЫЕ, 
                            КРЫЛЫШКИ BBQ, СТЕЙК СКЕРТ, 
                            КАРТОФЕЛЬ ФРИ, ЧЕСНОЧНЫЕ ГРЕНКИ][ПОДАЕТСЯ С БАРБЕКЮ И СМЕТАННО-ЧЕСНОЧНЫМ СОУСАМИ]
                        </span>
                        <span class="menu-bar-item-weight">
                            750/180/90/80/20/20 гр.
                        </span>
                        <span class="menu-bar-item-price">
                            ~1999
                        </span>
                    </div>    
                </div>
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <div class="new-label"></div>
                        <a href="img/menu/osn-menu/more-set.jpg" data-fancybox="image-more-set" data-caption="Морской сет">
                            <img src="img/menu/osn-menu/more-set.jpg" class="item-img img-fluid" title="Морской сет">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>морской сет</h3>
                        <span class="menu-bar-item-description">[ КРЕВЕТКИ В ТЕМПУРЕ, КОЛЬЦА КАЛЬМАРОВ, ГРЕНКИ,
                            КАРТОФЕЛЬ ФРИ, СОУС КИСЛО-СЛАДКИЙ, СОУС BBQ ]
                        </span>
                        <span class="menu-bar-item-weight">
                            80/70/70/90/20/20 гр.
                        </span>
                        <span class="menu-bar-item-price">
                            ~599
                        </span>
                    </div>    
                </div>
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/osn-menu/jackpot.jpg" data-fancybox="image-jack-pot" data-caption="Джек Пот">
                            <img src="img/menu/osn-menu/jackpot.jpg" class="item-img img-fluid" title="джек пот" alt="">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>джек пот</h3>
                        <span class="menu-bar-item-description">[КОЛБАСКИ КУРИНЫЕ, СВИНЫЕ, ГОВЯЖЬИ; КРЫЛЬЯ BBQ, РЕБРА СВИНЫЕ,
                            СЫРНЫЕ ПАЛОЧКИ, ЛУК. КОЛЬЦА, НАГГЕТСЫ, ГРЕНКИ,
                            КАРТОФЕЛЬ ФРИ, КАРТОФЕЛЬНЫЕ. ДОЛЬКИ]
                            [ПОДАЕТСЯ С БАРБЕКЮ, СЫРНЫМ, БЛЮ ЧИЗ,
                            КЛЮКВЕННЫМ СОУСАМИ]
                        </span>
                        <span class="menu-bar-item-weight">
                            600/350/250/140/150/120/
                            200/240/20/20/20/20/20 гр.
                        </span>
                        <span class="menu-bar-item-price">
                            ~2999
                        </span>
                    </div>    
                </div>
            </div>


            <div class="food-menu-advertisment" id="hol_zakuski">
                <span>
                    холодные закуски ● от 299<i class="fas fa-ruble-sign"></i>
                </span>
            </div>

            <div class="food-menu-menu grid" >
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/osn-menu/raznosoli.jpg" data-fancybox="image-raznosol" data-caption="Разносолы">
                            <img src="img/menu/osn-menu/raznosoli.jpg" class="item-img img-fluid" title="raznosol" alt="">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>разносолы</h3>
                        <span class="menu-bar-item-description">
                            [САЛО, ЧЕРЕМША, ПОМИДОРЫ МАРИНОВАННЫЕ,
                            ОГУРЦЫ СОЛЕНЫЕ, ПЕРЕЦ ОСТРЫЙ, ЧЕСНОК МАРИНОВАННЫЙ]
                        </span>
                        <span class="menu-bar-item-weight">
                            300 гр.
                        </span>
                        <span class="menu-bar-item-price">
                            ~299
                        </span>
                    </div>    
                </div>
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/osn-menu/seledka-kart.jpg" data-fancybox="image-seld-kartofel" data-caption="Cеледочка с картофелем">
                            <img src="img/menu/osn-menu/seledka-kart.jpg" class="item-img img-fluid" title="Cеледочка с картофелем" alt="">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>селедочка с картофелем</h3>
                        <span class="menu-bar-item-description">
                            [КАРТОФЕЛЬ, СЕЛЬДЬ СЛАБОСОЛЕНАЯ,
                            МАРИНОВАННЫЙ ЛУК, СВЕЖАЯ ЗЕЛЕНЬ,
                            ПОДСОЛНЕЧНОЕ МАСЛО]
                        </span>
                        <span class="menu-bar-item-weight">
                            100/120/20 гр.
                        </span>
                        <span class="menu-bar-item-price">
                            ~299
                        </span>
                    </div>    
                </div>
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/osn-menu/chezze-plate.jpg" data-fancybox="image-cheese-assort" data-caption="Сырное ассорти">
                            <img src="img/menu/osn-menu/chezze-plate.jpg" class="item-img img-fluid" title="Сырное ассорти" alt="">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>сырное ассорти</h3>
                        <span class="menu-bar-item-description">
                            [ДОРБЛЮ, ГОЛЛАНДСКИЙ, ПАРМЕЗАН, ЧЕЧИЛ ]
                            [ ПОДАЕТСЯ С МЕДОМ, ОРЕХАМИ,
                            ГРУШЕЙ И ВИНОГРАДОМ]
                        </span>
                        <span class="menu-bar-item-weight">
                            210 гр.
                        </span>
                        <span class="menu-bar-item-price">
                            ~399
                        </span>
                    </div>    
                </div>
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <div class="veget-label"></div>
                        <a href="img/menu/osn-menu/veget-plate.jpg" data-fancybox="image-veget" data-caption="Овощная тарелка">
                            <img src="img/menu/osn-menu/veget-plate.jpg" class="item-img img-fluid" title="Овощная тарелка" alt="">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>Овощная тарелка</h3>
                        <span class="menu-bar-item-description">
                            [ОГУРЦЫ, ПОМИДОРЫ, БОЛГАРСКИЙ ПЕРЕЦ,
                            РЕДИС, ЛИСТ САЛАТА, ЗЕЛЕНЬ]
                        </span>
                        <span class="menu-bar-item-weight">
                            300 гр.
                        </span>
                        <span class="menu-bar-item-price">
                            ~299
                        </span>
                    </div>    
                </div>
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/osn-menu/kop4enosti.jpg" data-fancybox="image-kopctср" data-caption="Копчености">
                            <img src="img/menu/osn-menu/kop4enosti.jpg" class="item-img img-fluid" title="Копчености" alt="">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>копчености</h3>
                        <span class="menu-bar-item-description">
                            [ДЖЕРКИ ИЗ ИНДЕЙКИ, СЫР ЧЕЧИЛ,
                            ГРЕНКИ БОРОДИНСКИЕ,
                            КОЛБАСКИ ПИККОЛИНИ, СОУС BBQ]
                        </span>
                        <span class="menu-bar-item-weight">
                            130/20 гр.
                        </span>
                        <span class="menu-bar-item-price">
                            ~399
                        </span>
                    </div>    
                </div>
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <div class="new-label"></div>
                        <a href="img/menu/osn-menu/kop4enosti_xl.jpg" data-fancybox="image-kopctсрxl" data-caption="Копчености XL">
                            <img src="img/menu/osn-menu/kop4enosti_xl.jpg" class="item-img img-fluid" title="Копчености XL" alt="">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>копчености XL</h3>
                        <span class="menu-bar-item-description">
                            [АНЧОУСЫ, КОЛБАСКИ ПИККОЛИНИ,
                            ЛОМТИКИ ОЛЕНИНЫ, БАЛЫЧОК ИЗ ИНДЕЙКИ,
                            КОПЧЕНЫЙ КАЛЬМАР, СЫР ЧЕЧИЛ,
                            ГРЕНКИ, СОУС BBQ, СОУС КИСЛО-СЛАДКИЙ]
                        </span>
                        <span class="menu-bar-item-weight">
                            230/20/20 гр.
                        </span>
                        <span class="menu-bar-item-price">
                            ~599
                        </span>
                    </div>    
                </div>
            </div>                

            <div class="food-menu-advertisment" id="piv_zakuski">
                <span>
                    пивные закуски ● от 199<i class="fas fa-ruble-sign"></i>
                </span>
            </div>

            <div class="food-menu-menu grid">
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/osn-menu/kril-bbq.jpg" data-fancybox="image-chicken-bbk" data-caption="Крылья куриные bbq">
                            <img src="img/menu/osn-menu/kril-bbq.jpg" class="item-img img-fluid" title="Крылья куриные bbq" alt="">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>крылья куриные bbq</h3>
                        <span class="menu-bar-item-description">
                            [КУРИНЫЕ КРЫЛЬЯ В СОУСЕ BBQ]
                            [ПОДАЮТСЯ С СОУСОМ БЛЮ ЧИЗ] 
                        </span>
                        <span class="menu-bar-item-weight">
                            265/20 гр.
                        </span>
                        <span class="menu-bar-item-price">
                            ~399
                        </span>
                    </div>    
                </div>
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/osn-menu/jaren-cheezze.jpg" data-fancybox="image-jaren-cheeze" data-caption="Жареный сыр">
                            <img src="img/menu/osn-menu/jaren-cheezze.jpg" class="item-img img-fluid" title="Жареный сыр" alt="">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>жареный сыр</h3>
                        <span class="menu-bar-item-description">
                            [МЯГКИЙ ГОЛАНДСКИЙ СЫР, ОБЖАРЕННЫЙ ВО ФРИТЮРЕ]
                            [ПОДАЕТСЯ С ЧЕСНОЧНЫМИ ГРЕНКАМИ,
                            КЛЮКВЕННЫМ И БЛЮ ЧИЗ СОУСАМИ]
                        </span>
                        <span class="menu-bar-item-weight">
                            120/80/20/20 гр.
                        </span>
                        <span class="menu-bar-item-price">
                            ~399
                        </span>
                    </div>    
                </div>
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/osn-menu/onion-circles.jpg" data-fancybox="image-jaren-onion" data-caption="Луковые кольца">
                            <img src="img/menu/osn-menu/onion-circles.jpg" class="item-img img-fluid" title="Луковые кольца" alt="">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>луковые кольца</h3>
                        <span class="menu-bar-item-description">
                            [КОЛЬЦА ЛУКА В ПАНИРОВКЕ, ОБЖАРЕННЫЕ ВО ФРИТЮРЕ
                            ДО ЗОЛОТИСТОЙ КОРОЧКИ]
                            [ПОДАЮТСЯ С СЫРНЫМ СОУСОМ]
                        </span>
                        <span class="menu-bar-item-weight">
                            130/20 гр.
                        </span>
                        <span class="menu-bar-item-price">
                            ~199
                        </span>
                    </div>    
                </div>
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <div class="new-label"></div>
                        <a href="img/menu/osn-menu/shrimps_.jpg" data-fancybox="image-shrimps_" data-caption="Креветки в панировке">
                            <img src="img/menu/osn-menu/shrimps_.jpg" class="item-img img-fluid" title="Креветки в панировке" alt="">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>креветки в панировке</h3>
                        <span class="menu-bar-item-description">
                            [ПОДАЮТСЯ С КИСЛО-СЛАДКИМ СОУСОМ]
                        </span>
                        <span class="menu-bar-item-weight">
                            90/20 гр.
                        </span>
                        <span class="menu-bar-item-price">
                            ~399
                        </span>
                    </div>    
                </div>
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/osn-menu/gedza.jpg" data-fancybox="image-gedza" data-caption="Гедза со свининой">
                            <img src="img/menu/osn-menu/gedza.jpg" class="item-img img-fluid" title="Гедза со свининой" alt="">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>гедза со свининой</h3>
                        <span class="menu-bar-item-description">
                            [ПОДАЕТСЯ С КИСЛО-СЛАДКИМ СОУСОМ]
                        </span>
                        <span class="menu-bar-item-weight">
                            120/20 гр.
                        </span>
                        <span class="menu-bar-item-price">
                            ~249
                        </span>
                    </div>    
                </div>
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <div class="new-label"></div>
                        <a href="img/menu/osn-menu/spring-roll.jpg" data-fancybox="image-spring-roll" data-caption="Cпринг роллы с говядиной">
                            <img src="img/menu/osn-menu/spring-roll.jpg" class="item-img img-fluid" title="Cпринг роллы с говядиной" alt="">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>спринг роллы с говядиной</h3>
                        <span class="menu-bar-item-description">
                            [ГОВЯДИНА, ЛУК, ПЕРЕЦ БОЛГАРСКИЙ, СОУС ТЕРИЯКИ, СОУС КИСЛО-СЛАДКИЙ]
                        </span>
                        <span class="menu-bar-item-weight">
                            200/20 гр.
                        </span>
                        <span class="menu-bar-item-price">
                            ~399
                        </span>
                    </div>    
                </div>
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <div class="hot-label"></div>
                        <a href="img/menu/osn-menu/kessadillia-chiken.jpg" data-fancybox="image-kesadilia" data-caption="Кесадилья с курицей">
                            <img src="img/menu/osn-menu/kessadillia-chiken.jpg" class="item-img img-fluid" title="Кесадилья с курицей" alt="">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>кесадилья с курицей</h3>
                        <span class="menu-bar-item-description">
                            [ПЕРЕЦ БОЛГАРСКИЙ, ЛУК КРАСНЫЙ, ХАЛАПЕНЬО,
                            КИНЗА, КУРИНАЯ ГРУДКА, ТОРТИЛЬЯ, СЫР]
                            [ПОДАЕТСЯ С СОУСОМ САЛЬСА И СМЕТАНОЙ]
                        </span>
                        <span class="menu-bar-item-weight">
                            230/20/20 гр.
                        </span>
                        <span class="menu-bar-item-price">
                            ~399
                        </span>
                    </div>    
                </div>
            </div>

            <div class="food-menu-advertisment" id="salads">
                <span>
                    салаты ● от 299<i class="fas fa-ruble-sign"></i>
                </span>
            </div>

            <div class="food-menu-menu grid">
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/osn-menu/greek-salad.jpg" data-fancybox="image-greek-salad" data-caption="Греческий салат">
                            <img src="img/menu/osn-menu/greek-salad.jpg" class="item-img img-fluid" title="Греческий салат" alt="">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>греческий салат</h3>
                        <span class="menu-bar-item-description">
                            [СВЕЖИЕ ПОМИДОРЫ, ОГУРЦЫ, ЛИСТЬЯ САЛАТА,
                            БОЛГАРСКИЙ ПЕРЕЦ, МАСЛИНЫ, КРАСНЫЙ ЛУК, СЫР ФЕТА]
                            [ОЛИВКОВОЕ МАСЛО]
                        </span>
                        <span class="menu-bar-item-weight">
                            200 гр.
                        </span>
                        <span class="menu-bar-item-price">
                            ~299
                        </span>
                    </div>    
                </div>
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/osn-menu/ceazar-chiken.jpg" data-fancybox="image-caesar-salad" data-caption="Цезарь с курицей">
                            <img src="img/menu/osn-menu/ceazar-chiken.jpg" class="item-img img-fluid" title="Цезарь с курицей" alt="">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>цезарь с курицей</h3>
                        <span class="menu-bar-item-description">
                            [ОРИГИНАЛЬНАЯ ЗАПРАВКА, КУРИНОЕ ФИЛЕ, СЫР,
                            САЛАТНЫЙ ЛИСТ, ПЕРЕПЕЛИНЫЕ ЯЙЦА, ПОМИДОРЫ ЧЕРРИ,
                            ХРУСТЯЩИЕ СУХАРИКИ]
                        </span>
                        <span class="menu-bar-item-weight">
                            180 гр.
                        </span>
                        <span class="menu-bar-item-price">
                            ~349
                        </span>
                    </div>    
                </div>
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/osn-menu/caezar-semga.jpg" data-fancybox="image-caesar-semga" data-caption="Цезарь с семгой">
                            <img src="img/menu/osn-menu/caezar-semga.jpg" class="item-img img-fluid" title="Цезарь с семгой" alt="">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>цезарь с семгой</h3>
                        <span class="menu-bar-item-description">
                            [ОРИГИНАЛЬНАЯ ЗАПРАВКА, СЕМГА ХОЛОДНОГО КОПЧЕНИЯ,
                            СЫР, САЛАТНЫЙ ЛИСТ, ПЕРЕПЕЛИНЫЕ ЯЙЦА, ПОМИДОРЫ ЧЕРРИ,
                            ХРУСТЯЩИЕ СУХАРИКИ]
                        </span>
                        <span class="menu-bar-item-weight">
                            170 гр.
                        </span>
                        <span class="menu-bar-item-price">
                            ~399
                        </span>
                    </div>    
                </div>
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/osn-menu/gril-salad.jpg" data-fancybox="image-grille-salad" data-caption="Гриль салат">
                            <img src="img/menu/osn-menu/gril-salad.jpg" class="item-img img-fluid" title="Гриль салат" alt="">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>гриль салат</h3>
                        <span class="menu-bar-item-description">
                            [ЛИСТЬЯ САЛАТА, ЦУКИНИ, ПЕРЕЦ БОЛГАРСКИЙ,
                            БАКЛАЖАН, ЛУК КРАСНЫЙ, ШАМПИНЬОНЫ,
                            ОБЖАРЕННАЯ КУРИНАЯ ГРУДКА,
                            СОУС ОТ ШЕФ-ПОВАРА]
                        </span>
                        <span class="menu-bar-item-weight">
                            170 гр.
                        </span>
                        <span class="menu-bar-item-price">
                            ~349
                        </span>
                    </div>    
                </div>
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/osn-menu/caezar-shrimps.jpg" data-fancybox="image-caesar-shrimps" data-caption="Цезарь с креветками">
                            <img src="img/menu/osn-menu/caezar-shrimps.jpg" class="item-img img-fluid" title="Цезарь с креветками" alt="">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>цезарь с креветками</h3>
                        <span class="menu-bar-item-description">
                            [ОРИГИНАЛЬНАЯ ЗАПРАВКА, СЕМГА ХОЛОДНОГО КОПЧЕНИЯ,
                            СЫР, САЛАТНЫЙ ЛИСТ, ПЕРЕПЕЛИНЫЕ ЯЙЦА, ПОМИДОРЫ ЧЕРРИ,
                            ХРУСТЯЩИЕ СУХАРИКИ]
                        </span>
                        <span class="menu-bar-item-weight">
                            170 гр.
                        </span>
                        <span class="menu-bar-item-price">
                            ~399
                        </span>
                    </div>    
                </div>
                
            </div>

            <div class="food-menu-advertisment" id="soups">
                <span>
                    первые блюда ● от 199<i class="fas fa-ruble-sign"></i>
                </span>
            </div>

            <div class="food-menu-menu grid">
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/osn-menu/borsh.jpg" data-fancybox="image-borsch" data-caption="Борщ с домашним салом">
                            <img src="img/menu/osn-menu/borsh.jpg" class="item-img img-fluid" title="Борщ с домашним салом" alt="">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>борщ с домашним салом</h3>
                        <span class="menu-bar-item-description">
                            [НАВАРИСТЫЙ БОРЩ НА ГОВЯЖЬЕМ БУЛЬОНЕ
                            С ТОМЛЕНЫМИ ОВОЩАМИ]
                            [ПОДАЕТСЯ С ДОМАШНИМ САЛОМ,
                            СМЕТАНОЙ И ГОРЧИЦЕЙ]
                        </span>
                        <span class="menu-bar-item-weight">
                            250/20/15/20 гр.
                        </span>
                        <span class="menu-bar-item-price">
                            ~199
                        </span>
                    </div>
                </div>    
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <div class="hit-label"></div>
                        <a href="img/menu/osn-menu/solynka.jpg" data-fancybox="image-solynka" data-caption="Cолянка ядреная">
                            <img src="img/menu/osn-menu/solynka.jpg" class="item-img img-fluid" title="Cолянка ядреная" alt="">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>солянка ядреная</h3>
                        <span class="menu-bar-item-description" style="color:#f2c946">
                            [ЛУЧШЕЕ СРЕДСТВО ПРИЙТИ В СЕБЯ ПОСЛЕ
                            «ТРУДНОГО» ВЕЧЕРА / МГНОВЕННО ВЕРНЕТ
                            ВАС К ЖИЗНИ]
                        </span>
                        <span class="menu-bar-item-description">
                            [СУП НА МЯСНОМ БУЛЬОНЕ, С КОПЧЕНОСТЯМИ,
                            БОЧКОВЫМИ ОГУРЧИКАМИ И ОЛИВКАМИ]
                            [ПОДАЕТСЯ С ЛИМОНОМ И СМЕТАНОЙ]
                        </span>
                        <span class="menu-bar-item-weight">
                            250/15/20 гр.
                        </span>
                        <span class="menu-bar-item-price">
                            ~199
                        </span>
                    </div>    
                </div>
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/osn-menu/norv-soup.jpg" data-fancybox="image-norvsoup" data-caption="Норвежский суп">
                            <img src="img/menu/osn-menu/norv-soup.jpg" class="item-img img-fluid" title="Норвежский суп" alt="Норвежский суп">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>норвежский суп</h3>
                        <span class="menu-bar-item-description">
                            [КЛАССИЧЕСКИЙ СУП С НОРВЕЖСКОЙ
                            СЕМГОЙ И СЛИВКАМИ]
                        </span>
                        <span class="menu-bar-item-weight">
                            250 гр.
                        </span>
                        <span class="menu-bar-item-price">
                            ~249
                        </span>
                    </div>    
                </div>
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/osn-menu/thom-yam.jpg" data-fancybox="image-thomyam" data-caption="Том ям">
                            <img src="img/menu/osn-menu/thom-yam.jpg" class="item-img img-fluid" title="Том ям" alt="Том ям">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>том ям</h3>
                        <span class="menu-bar-item-description">
                            [БУЛЬОН ТОМ ЯМ, КРЕВЕТКИ, ЛАПША УДОН, ЧЕРРИ, ШАМПИНЬОНЫ, КИНЗА]
                        </span>
                        <span class="menu-bar-item-weight">
                            250 гр.
                        </span>
                        <span class="menu-bar-item-price">
                            ~299
                        </span>
                    </div>    
                </div>
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <div class="new-label"></div>
                        <a href="img/menu/osn-menu/baget_.jpg" data-fancybox="image-baget_" data-caption="Багет с чесноком и сыром">
                            <img src="img/menu/osn-menu/baget_.jpg" class="item-img img-fluid" title="Том ям" alt="Багет с чесноком и сыром">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>багет с чесноком и сыром</h3>
                        <span class="menu-bar-item-description">
                            [БАГЕТ С ЧЕСНОКОМ, МАСЛОМ И СЫРОМ]
                        </span>
                        <span class="menu-bar-item-price">
                            ~99
                        </span>
                    </div>    
                </div>
            </div>

            <div class="food-menu-advertisment" id="gor_menu">
                <span>
                    горячие блюда ● от 399<i class="fas fa-ruble-sign"></i>
                </span>
            </div>

            <div class="food-menu-menu grid">
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/osn-menu/shrimps-chesn.jpg" data-fancybox="image-krevietki" data-caption="Креветки в чесночном соусе">
                            <img src="img/menu/osn-menu/shrimps-chesn.jpg" class="item-img img-fluid" title="Креветки в чесночном соусе" alt="">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>креветки в чесночном соусе</h3>
                        <span class="menu-bar-item-description">
                            [ТИГРОВЫЕ КРЕВЕТКИ, ОБЖАРЕННЫЕ В ФИРМЕННОМ СОУСЕ ОТ ШЕФ-ПОВАРА]
                        </span>
                        <span class="menu-bar-item-weight">
                            120/20 гр.
                        </span>
                        <span class="menu-bar-item-price">
                            ~399
                        </span>
                    </div>    
                </div>
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/osn-menu/jarkoe-semga.jpg" data-fancybox="image-zharkoeizsemgi" data-caption="Жаркое из семги">
                            <img src="img/menu/osn-menu/jarkoe-semga.jpg" class="item-img img-fluid" title="Жаркое из семги" alt="">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>жаркое из семги</h3>
                        <span class="menu-bar-item-description">
                            [ФИЛЕ НОРВЕЖСКОЙ СЕМГИ, ТУШЕНОЕ С КАРТОФЕЛЕМ, ЛУКОМ,
                            БОЛГАРСКИМ ПЕРЦЕМ И ШАМПИНЬОНАМИ]
                        </span>
                        <span class="menu-bar-item-weight">
                            300 гр.
                        </span>
                        <span class="menu-bar-item-price">
                            ~399
                        </span>
                    </div>    
                </div>
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/osn-menu/home-potato.jpg" data-fancybox="image-zkart-kur-svin" data-caption="Картофель жаренный по-домашнему с курицей / со свининой">
                            <img src="img/menu/osn-menu/home-potato.jpg" class="item-img img-fluid" title="Картофель жаренный по-домашнему с курицей / со свининой" alt="">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>картофель жареный по-домашнему</h3>
                        <span class="menu-bar-item-description">
                            [КАРТОФЕЛЬ, ОБЖАРЕННЫЙ С ЛУКОМ И ШАМПИНЬОНАМИ И СЛИВКАМИ,
                            ПОДАЕТСЯ С КВАШЕНОЙ КАПУСТОЙ И СОЛЕНЫМИ ОГУРЧИКАМИ]
                        </span>
                        <span class="menu-bar-item-weight">
                            400/30/30 гр.
                        </span>
                        <span class="menu-bar-item-price">
                            ~399
                        </span>
                        <span class="menu-item-dop">
                            ДОБАВЬ КУРИЦУ / СВИНИНУ ЗА 49<strong>j</strong>
                        </span>
                    </div>    
                </div>
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/osn-menu/grill-kolbaski.jpg" data-fancybox="image-kolbaskizgar" data-caption="Колбаски-гриль с гарнирами и соусом BBQ">
                            <img src="img/menu/osn-menu/grill-kolbaski.jpg" class="item-img img-fluid" title="Колбаски-гриль с гарнирами и соусом BBQ" alt="">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>колбаски-гриль с гарнирами и соусом BBQ</h3>
                        <span class="menu-bar-item-description">
                            [ГОВЯЖЬИ / КУРИНЫЕ / СВИНЫЕ] [СОЧНЫЕ КОЛБАСКИ,
                            НА ГРИЛЕ]
                            [ПОДАЮТСЯ С ПЮРЕ, ТУШЕНОЙ КАПУСТОЙ С БЕКОНОМ]
                        </span>
                        <span class="menu-bar-item-weight">
                            150/75/75 гр.
                        </span>
                        <span class="menu-bar-item-price">
                            ~399
                        </span>
                        <span class="menu-item-dop">
                            ДОБАВЬ КОЛБАСКУ ЗА 99<strong>j</strong>
                        </span>
                    </div>    
                </div>
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <div class="hit-label"></div>
                        <a href="img/menu/osn-menu/grill-rebra.jpg" data-fancybox="image-rebra-bbq" data-caption="Ребрышки свиные с соусом BBQ">
                            <img src="img/menu/osn-menu/grill-rebra.jpg" class="item-img img-fluid" title="Ребрышки свиные с соусом BBQ" alt="">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>ребрышки свиные с соусом bbq</h3>
                        <span class="menu-bar-item-description">
                            [РЕБРА, ЗАПЕЧЕННЫЕ С СОУСОМ БАРБЕКЮ, ПОДАЮТСЯ С КАРТОФЕЛЕМ ФРИ,
                            ПОМИДОРАМИ ЧЕРРИ]
                        </span>
                        <span class="menu-bar-item-weight">
                            215/90/30 гр.
                        </span>
                        <span class="menu-bar-item-price">
                            ~449
                        </span>
                    </div>    
                </div>
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/osn-menu/indeika-pure.jpg" data-fancybox="image-indeika-gril" data-caption="Индейка с картофельным пюре и овощами гриль">
                            <img src="img/menu/osn-menu/indeika-pure.jpg" class="item-img img-fluid" title="Индейка с картофельным пюре и овощами гриль" alt="">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>индейка с картофельным пюре и овощами гриль</h3>
                        <span class="menu-bar-item-description">
                            [ИНДЕЙКА ГРИЛЬ]
                        </span>
                        <span class="menu-bar-item-weight">
                            280 гр.
                        </span>
                        <span class="menu-bar-item-price">
                            ~449
                        </span>
                    </div>    
                </div>
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <div class="hot-label"></div>
                        <div class="new-label" style="left:67px;top:-9px;"></div>
                        <a href="img/menu/osn-menu/fahitos.jpg" data-fancybox="image-fahitos" data-caption="Фахитос">
                            <img src="img/menu/osn-menu/fahitos.jpg" class="item-img img-fluid" title="Фахитос" alt="">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>фахитос</h3>
                        <span class="menu-bar-item-description">
                            [ГОВЯДИНА, ПЕРЕЦ БОЛГАРСКИЙ, ЛУК КРАСНЫЙ, ФАСОЛЬ ЗЕЛЕНАЯ,
                            ПЕРЕЦ ХАЛАПЕНЬО, ТАБАСКО, КИНЗА, ЛАЙМ, ТОРТИЛЬЯ, СОУС САЛЬСА,
                            СОУС ЧИМИЧУРРИ]
                        </span>
                        <span class="menu-bar-item-weight">
                            100/50/50/50/15/15/20/20 гр.
                        </span>
                        <span class="menu-bar-item-price">
                            ~599
                        </span>
                    </div>    
                </div>
            </div>

            <div class="food-menu-advertisment" id="pasta">
                <span>
                    паста ● от 399<i class="fas fa-ruble-sign"></i>
                </span>
            </div>

            <div class="food-menu-menu grid">
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/osn-menu/carbonara.jpg" data-fancybox="image-karbonara" data-caption="Спагетти карбонара">
                            <img src="img/menu/osn-menu/carbonara.jpg" class="item-img img-fluid" title="Спагетти карбонара" alt="">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>спагетти карбонара</h3>
                        <span class="menu-bar-item-description">
                            [ВЕЛИКОЛЕПНЫЕ ИТАЛЬЯНСКИЕ СПАГЕТТИ, ОБЖАРЕННЫЕ
                            С НЕЖНЕЙШИМ БЕКОНОМ В СЛИВОЧНОМ СОУСЕ]
                        </span>
                        <span class="menu-bar-item-weight">
                            300 гр.
                        </span>
                        <span class="menu-bar-item-price">
                            ~399
                        </span>
                    </div>    
                </div>
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/osn-menu/fettuccini.jpg" data-fancybox="image-fettucini" data-caption="Феттучини с ветчиной и грибами">
                            <img src="img/menu/osn-menu/fettuccini.jpg" class="item-img img-fluid" title="Феттучини с ветчиной и грибами" alt="">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>феттучини с ветчиной и грибами</h3>
                        <span class="menu-bar-item-description">
                            [ФЕТТУЧИНИ С ВЕТЧИНОЙ И ШАМПИНЬОНАМИ
                            В СЛИВОЧНОМ СОУСЕ]
                        </span>
                        <span class="menu-bar-item-weight">
                            285 гр.
                        </span>
                        <span class="menu-bar-item-price">
                            ~399
                        </span>
                    </div>    
                </div>
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/osn-menu/spagetty-shrimps.jpg" data-fancybox="image-spagetti-krev" data-caption="Спагетти с креветками и сёмгой в сливочном соусе">
                            <img src="img/menu/osn-menu/spagetty-shrimps.jpg" class="item-img img-fluid" title="Спагетти с креветками и сёмгой в сливочном соусе" alt="">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>Спагетти с креветками и сёмгой в сливочном соусе</h3>
                        <span class="menu-bar-item-description">
                            [СПАГЕТТИ С КРЕВЕТКАМИ И СЕМГОЙ В СЛИВОЧНОМ СОУСЕ
                            С ДОБАВЛЕНИЕМ ПОМИДОРОВ ЧЕРРИ]
                        </span>
                        <span class="menu-bar-item-weight">
                            285 гр.
                        </span>
                        <span class="menu-bar-item-price">
                            ~399
                        </span>
                    </div>    
                </div>
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <div class="new-label"></div>
                        <a href="img/menu/osn-menu/udon.jpg" data-fancybox="image-udon-gov" data-caption="Удон с говядиной">
                            <img src="img/menu/osn-menu/udon.jpg" class="item-img img-fluid" title="Удон с говядиной" alt="">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>удон с говядиной</h3>
                        <span class="menu-bar-item-description">
                            [ЛАПША УДОН, ГОВЯДИНА, ПЕРЕЦ БОЛГАРСКИЙ, КРАСНЫЙ ЛУК,
                            ЦУККИНИ, СОУС ТЕРИЯКИ]
                        </span>
                        <span class="menu-bar-item-weight">
                            300 гр.
                        </span>
                        <span class="menu-bar-item-price">
                            ~499
                        </span>
                    </div>    
                </div>
            </div>

            <div class="food-menu-advertisment" id="steiks">
                <span>
                    стейки ● от 499<i class="fas fa-ruble-sign"></i>
                </span>
            </div>

            <div class="food-menu-menu grid" >
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <div class="new-label"></div>
                        <a href="img/menu/osn-menu/steik-ribay-big.jpg" data-fancybox="image-steik-ribay" data-caption="Стейк рибай">
                            <img src="img/menu/osn-menu/steik-ribay-big.jpg" class="item-img img-fluid" title="steik-ribay">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>стейк рибай</h3>
                        <span class="menu-bar-item-description">[СТЕЙК ИЗ ГОВЯДИНЫ С КАРТОФЕЛЬНЫМИ ДОЛЬКАМИ]
                        </span>
                        <span class="menu-bar-item-weight">
                            270 гр. в сыром виде
                        </span>
                        <span class="menu-bar-item-price">
                            ~1499
                        </span>
                    </div>    
                </div>
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/osn-menu/steik-new-york-big.jpg" data-fancybox="image-steik-new-york" data-caption="Cтейк «нью-йорк»">
                            <img src="img/menu/osn-menu/steik-new-york-big.jpg" class="item-img img-fluid" title="Стейк «нью-йорк»" alt="Стейк «нью-йорк»">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>стейк «нью-йорк»</h3>
                        <span class="menu-bar-item-description">[СТЕЙК ИЗ ГОВЯДИНЫ С КАРТОФЕЛЬНЫМИ ДОЛЬКАМИ]
                        </span>
                        <span class="menu-bar-item-weight">
                            270 гр. в сыром виде
                        </span>
                        <span class="menu-bar-item-price">
                            ~999
                        </span>
                    </div>    
                </div>
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/osn-menu/beafsteks.jpg" data-fancybox="image-bifsteks" data-caption="Бифштекс">
                            <img src="img/menu/osn-menu/beafsteks.jpg" class="item-img img-fluid" title="Бифштекс" alt="Бифштекс">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>бифштекс</h3>
                        <span class="menu-bar-item-description"> 
                            [КОТЛЕТА ИЗ ГОВЯДИНЫ,ПОДАЕТСЯ С КАРТОФЕЛЬНЫМИ
                            ДОЛЬКАМИ]
                        </span>
                        <span class="menu-bar-item-weight">
                            270 гр. в сыром виде
                        </span>
                        <span class="menu-bar-item-price">
                            ~499
                        </span>
                    </div>    
                </div>
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <div class="hit-label"></div>
                        <a href="img/menu/osn-menu/steik-semga-big.jpg" data-fancybox="image-steik-semga" data-caption="Cтейк из семги">
                            <img src="img/menu/osn-menu/steik-semga-big.jpg" class="item-img img-fluid" title="Cтейк из семги" alt="Cтейк из семги">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>Cтейк из семги</h3>
                        <span class="menu-bar-item-description">[СТЕЙК ИЗ СЕМГИ С ОВОЩАМИ]
                        </span>
                        <span class="menu-bar-item-weight">
                            270 гр. в сыром виде
                        </span>
                        <span class="menu-bar-item-price">
                            ~499
                        </span>
                    </div>    
                </div>
            </div>

            <div class="food-menu-advertisment" id="garniry">
                <span>
                    гарниры ●  149<i class="fas fa-ruble-sign"></i>
                </span>
            </div>

            <div class="food-menu-menu grid" >
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <div class="hit-label"></div>
                        <a href="img/menu/osn-menu/potato-fri-big.jpg" data-fancybox="image-potato-fri" data-caption="Картофель Фри">
                            <img src="img/menu/osn-menu/potato-fri-big.jpg" class="item-img img-fluid" title="potato-fri">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>картофель фри</h3>
                        <span class="menu-bar-item-weight">
                            120/20 гр.
                        </span>
                        <span class="menu-bar-item-price">
                            ~149
                        </span>
                    </div>    
                </div>
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/osn-menu/po-derevenski-big.jpg" data-fancybox="image-po-derevenski" data-caption="Картофель По - Деревенски">
                            <img src="img/menu/osn-menu/po-derevenski-big.jpg" class="item-img img-fluid" title="po-derevenski">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>картофель по-деревенски</h3>
                        <span class="menu-bar-item-weight">
                            150 гр.
                        </span>
                        <span class="menu-bar-item-price">
                            ~149
                        </span>
                    </div>    
                </div>
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/osn-menu/pure-big.jpg" data-fancybox="image-pure" data-caption="Картофельное Пюре">
                            <img src="img/menu/osn-menu/pure-big.jpg" class="item-img img-fluid" title="pure">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>Картофельное Пюре</h3>
                        <span class="menu-bar-item-weight">
                            150 гр.
                        </span>
                        <span class="menu-bar-item-price">
                            ~149
                        </span>
                    </div>    
                </div>
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/osn-menu/brokkoli-big.jpg" data-fancybox="image-brokkoli" data-caption="Брокколи на пару">
                            <img src="img/menu/osn-menu/brokkoli-big.jpg" class="item-img img-fluid" title="brokkoli">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>брокколи на пару</h3>
                        <span class="menu-bar-item-weight">
                            150 гр.
                        </span>
                        <span class="menu-bar-item-price">
                            ~149
                        </span>
                    </div>    
                </div>
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/osn-menu/kapusta-big.jpgg" data-fancybox="image-kapusta" data-caption="Капуста тушеная с беконом">
                            <img src="img/menu/osn-menu/kapusta-big.jpg" class="item-img img-fluid" title="kapusta">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>капуста тушеная с беконом</h3>
                        <span class="menu-bar-item-description">[БЕКОН, КАПУСТА, СПЕЦИИ, ЗЕЛЕНЬ]
                        </span>
                        <span class="menu-bar-item-weight">
                            150 гр.
                        </span>
                        <span class="menu-bar-item-price">
                            ~149
                        </span>
                    </div>    
                </div>
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/osn-menu/vegetables-big.jpg" data-fancybox="image-vegetables" data-caption="Овощи гриль">
                            <img src="img/menu/osn-menu/vegetables-big.jpg" class="item-img img-fluid" title="vegetables">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>овощи гриль</h3>
                        <span class="menu-bar-item-description">[БОЛГАРСКИЙ ПЕРЕЦ, КАБАЧОК, МОРКОВЬ, ЛУК КРАСНЫЙ,ШАМПИНЬОНЫ]
                        </span>
                        <span class="menu-bar-item-weight">
                            150 гр.
                        </span>
                        <span class="menu-bar-item-price">
                            ~149
                        </span>
                    </div>    
                </div>
            </div>

            <div class="food-menu-advertisment" id="burgers">
                <span>
                    бургеры ● от 299<i class="fas fa-ruble-sign"></i>
                </span>
            </div>

            <div class="food-menu-menu grid">
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <div class="hit-label"></div>
                        <a href="img/menu/osn-menu/buffallo-bill-big.jpg" data-fancybox="image-buffallo-bill-big" data-caption="Бургер Буффало Билл">
                            <img src="img/menu/osn-menu/buffallo-bill-big.jpg" class="item-img img-fluid" title="buffallo-bill">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>буффало билл</h3>
                        <span class="menu-bar-item-description">[БУЛОЧКА С КУНЖУТОМ, КОТЛЕТА ИЗ ГОВЯДИНЫ, СОУС БАРБЕКЮ,
                            ПОДЖАРЕНЫЙ БЕКОН, ХРУСТЯЩИЙ ЛИСТ САЛАТА, СВЕЖИЙ ПОМИДОР,
                            СОЛЁНЫЙ ОГУРЕЦ, ЛУК ФРИ]
                            [ПОДАЕТСЯ С КАРТОФЕЛЕМ ФРИ И КЕТЧУПОМ]
                        </span>
                        <span class="menu-bar-item-weight">
                            300/90/20 гр.
                        </span>
                        <span class="menu-bar-item-price">
                            ~349
                        </span>
                    </div>    
                </div>
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/osn-menu/club-sandwich.jpg" data-fancybox="image-club-sandwich" data-caption="Клаб-сэндвич с окороком">
                            <img src="img/menu/osn-menu/club-sandwich.jpg" class="item-img img-fluid" title="Клаб-сэндвич с окороком">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>клаб-сэндвич с окороком</h3>
                        <span class="menu-bar-item-description">
                            [ПОДЖАРЕННЫЙ ТОСТОВЫЙ ХЛЕБ, ОКОРОК, ЛИСТ САЛАТА,
                            СВЕЖИЙ ПОМИДОР И ОГУРЕЦ]
                            [ПОДАЕТСЯ С КАРТОФЕЛЕМ ФРИ И ТОМАТНЫМ СОУСОМ]
                        </span>
                        <span class="menu-bar-item-weight">
                            165/70 гр.
                        </span>
                        <span class="menu-bar-item-price">
                            ~299
                        </span>
                    </div>    
                </div>
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/osn-menu/old-jack-big.jpg" data-fancybox="image-old-jack-big" data-caption="Бургер Старина Джек">
                            <img src="img/menu/osn-menu/old-jack-big.jpg" class="item-img img-fluid" title="old-jack">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>старина джек</h3>
                        <span class="menu-bar-item-description">[КОТЛЕТА ИЗ ГОВЯДИНЫ, СОУС БЛЮ ЧИЗ, СОУС ДЖЕК ДЭНИЕЛС,
                            САЛАТ АЙСБЕРГ, СЫР, БЕКОН, КРАСНЫЙ ЛУК,
                            ПОМИДОР, СОЛЕНЫЙ ОГУРЕЦ, СЫРНЫЙ СОУС]
                            [ПОДАЕТСЯ С КАРТОФЕЛЕМ ФРИ И КЕТЧУПОМ]
                        </span>
                        <span class="menu-bar-item-weight">
                            300/90/20 гр.
                        </span>
                        <span class="menu-bar-item-price">
                            ~399
                        </span>
                    </div>    
                </div>
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <div class="veget-label"></div>
                        <a href="img/menu/osn-menu/lasvegas-big.jpg" data-fancybox="image-lasvegas" data-caption="Бургер Лас Вегас">
                            <img src="img/menu/osn-menu/lasvegas-big.jpg" class="item-img img-fluid" title="lasvegas">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>лас вегас</h3>
                        <span class="menu-bar-item-description">[САЛАТ АЙСБЕРГ, КАБАЧОК ГРИЛЬ, ПЕРЕЦ БОЛГАРСКИЙ ГРИЛЬ,
                            ШАМПИНЬОНЫ ГРИЛЬ, ПОМИДОР, ОГУРЕЦ СВЕЖИЙ,
                            КРАСНЫЙ ЛУК, СОУС ЗЕЛЕНЫЙ]
                            [ПОДАЕТСЯ С КАРТОФЕЛЕМ ФРИ И КЕТЧУПОМ]
                        </span>
                        <span class="menu-bar-item-weight">
                            285/90/20 гр.
                        </span>
                        <span class="menu-bar-item-price">
                            ~349
                        </span>
                    </div>    
                </div>
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/osn-menu/mexican-big.jpg" data-fancybox="image-mexican" data-caption="Бургер Мексиканец">
                            <img src="img/menu/osn-menu/mexican-big.jpg" class="item-img img-fluid" title="mexican">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>мексиканец</h3>
                        <span class="menu-bar-item-description">[БУЛОЧКА ДЛЯ БУРГЕРА С КУНЖУТОМ, МАЙОНЕЗ, ЛИСТЬЯ САЛАТА,
                            КОТЛЕТА ИЗ ГОВЯДИНЫ, СОУС САЛЬСА, СЫР, БЕКОН, СОЛЕНЫЕ ОГУРЦЫ,
                            ХАЛАПЕНЬО, КРАСНЫЙ ЛУК]
                            [ПОДАЕТСЯ С КАРТОФЕЛЕМ ФРИ И КЕТЧУПОМ]
                        </span>
                        <span class="menu-bar-item-weight">
                            290/90/20 гр.
                        </span>
                        <span class="menu-bar-item-price">
                            ~399
                        </span>
                    </div>    
                </div>
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <div class="hot-label"></div>
                        <div class="new-label" style="left:67px;top:-9px;"></div>
                        <a href="img/menu/osn-menu/nitro-burger.jpg" data-fancybox="image-nitro-burger" data-caption="Нитро бургер">
                            <img src="img/menu/osn-menu/nitro-burger.jpg" class="item-img img-fluid" title="Нитро бургер">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>нитро бургер</h3>
                        <span class="menu-bar-item-description">
                            [БУЛОЧКА ДЛЯ БУРГЕРА, КОТЛЕТА ИЗ ГОВЯДИНЫ, САЛАТ АЙСБЕРГ,
                            СОУС СЫРНЫЙ, СЫР ЧЕДДЕР, БЕКОН, СОУС РЕЛИШ, ХАЛАПЕНЬО,
                            СОЛЕНЫЕ ОГУРЦЫ, ЛУК ФРИ, СОУС BBQ]
                            [ПОДАЕТСЯ С КАРТОФЕЛЕМ ФРИ И КЕТЧУПОМ]
                        </span>
                        <span class="menu-bar-item-weight">
                            240/15/20/20/20/15/
                            10/20/15/20/120/20 гр.
                        </span>
                        <span class="menu-bar-item-price">
                            ~499
                        </span>
                    </div>    
                </div>
            </div>



            <div class="food-menu-advertisment" id="hot_dogs">
                <span>
                    бешеные псы ● от 349<i class="fas fa-ruble-sign"></i>
                </span>
            </div>

            <div class="food-menu-menu grid" >
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/osn-menu/good-boy-big.jpg" data-fancybox="image-good-boy" data-caption="Хороший Парень">
                            <img src="img/menu/osn-menu/good-boy-big.jpg" class="item-img img-fluid" title="good-boy">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>Хороший Парень</h3>
                        <span class="menu-bar-item-description">[БУЛОЧКА ДЛЯ ХОТ-ДОГА, КОЛБАСКА КУРИНАЯ,
                            ОГУРЕЦ СОЛЕНЫЙ, ФИРМЕНЫЙ СОУС, ЛУК ФРИ]
                            [ПОДАЕТСЯ С КАРТОФЕЛЕМ
                            ПО-ДЕРЕВЕНСКИ И С СЫРНЫМ И BBQ СОУСАМИ]
                        </span>
                        <span class="menu-bar-item-weight">
                            200/120/10/20/20 гр.
                        </span>
                        <span class="menu-bar-item-price">
                            ~349
                        </span>
                    </div>    
                </div> 
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/osn-menu/mister-orange-big.jpg" data-fancybox="image-mister-orange" data-caption="Мистер Оранжевый">
                            <img src="img/menu/osn-menu/mister-orange-big.jpg" class="item-img img-fluid" title="mister-orange">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>Мистер Оранжевый</h3>
                        <span class="menu-bar-item-description">[БУЛОЧКА ДЛЯ ХОТ-ДОГА, КОЛБАСКА СВИНАЯ,
                            СОЛЕНЫЙ ОГУРЕЦ, ЛУК ФРИ, ЛУКОВЫЙ СОУС,
                            СОЛОМКА ИЗ БЕКОНА, СОУС ОВОЩНОЙ]
                            [ПОДАЕТСЯ С КАРТОФЕЛЕМ
                            ПО-ДЕРЕВЕНСКИ И С СЫРНЫМ И BBQ СОУСАМИ]
                        </span>
                        <span class="menu-bar-item-weight">
                            200/120/10/20/20 гр.
                        </span>
                        <span class="menu-bar-item-price">
                            ~349
                        </span>
                    </div>
                </div> 
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/osn-menu/big-boss-big.jpg" data-fancybox="image-big-boss" data-caption="Большой БОСС">
                            <img src="img/menu/osn-menu/big-boss-big.jpg" class="item-img img-fluid" title="big-boss">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>Большой БОСС</h3>
                        <span class="menu-bar-item-description">[БУЛОЧКА ДЛЯ ХОТ-ДОГА, КОЛБАСКА ГОВЯЖЬЯ,
                            СОУС БЛЮ-ЧИЗ, СОЛЕНЫЙ ОГУРЕЦ, ЛИСТЬЯ САЛАТА,
                            ЛУК ФРИ, СОУС ОВОЩНОЙ, КРАСНЫЙ ЛУК]
                            [ПОДАЕТСЯ С КАРТОФЕЛЕМ
                            ПО-ДЕРЕВЕНСКИ И С СЫРНЫМ И BBQ СОУСАМИ]
                        </span>
                        <span class="menu-bar-item-weight">
                            200/120/10/20/20 гр.
                        </span>
                        <span class="menu-bar-item-price">
                            ~349
                        </span>
                    </div>
                </div> 
            </div>

            <div class="food-menu-advertisment" id="deserts">
                <span>
                    десерты ● одна порция 199<i class="fas fa-ruble-sign"></i> 
                </span>
            </div>

            <div class="food-menu-menu grid">
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/osn-menu/cheese-cake-big.jpg" data-fancybox="image-cheese-cake" data-caption="Классический Чизкейк">
                            <img src="img/menu/osn-menu/cheese-cake-big.jpg" class="item-img img-fluid" title="cheese-cake">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>Классический Чизкейк</h3>
                        <span class="menu-bar-item-description">[КЛАССИЧЕСКИЙ ЧИЗКЕЙК ИЗ СЛИВОЧНОГО СЫРА, С ДОБАВЛЕНИЕМ
                            НАТУРАЛЬНОЙ ВАНИЛИ]
                        </span>
                        <span class="menu-bar-item-weight">
                            110 гр.
                        </span>
                        <span class="menu-bar-item-price">
                            ~199
                        </span>
                    </div>    
                </div>
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/osn-menu/cheesecake-mango-big.jpg" data-fancybox="image-cheesecake-mango" data-caption="Чизкейк «манго-маракуйя»">
                            <img src="img/menu/osn-menu/cheesecake-mango-big.jpg" class="item-img img-fluid" title="cheese-cake-mango">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>чизкейк «манго-маракуйя»</h3>
                        <span class="menu-bar-item-description">[ЛЕГКИЙ ФРУКТОВО-ТВОРОЖНЫЙ ТОРТ НА ОСНОВЕ СЛИВОЧНОГО СЫРА,
                            СЛИВОК И ПЮРЕ ИЗ ТРОПИЧЕСКОГО МАНГО]
                        </span>
                        <span class="menu-bar-item-weight">
                            110 гр.
                        </span>
                        <span class="menu-bar-item-price">
                            ~199
                        </span>
                    </div>    
                </div> 
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/osn-menu/cheesecake-caramel-big.jpg" data-fancybox="image-cheesecake-caramel" data-caption="Чизкейк «карамель»">
                            <img src="img/menu/osn-menu/cheesecake-caramel-big.jpg" class="item-img img-fluid" title="cheesecake-caramel">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>чизкейк «карамель»</h3>
                        <span class="menu-bar-item-description">[КЛАССИЧЕСКИЙ ЧИЗКЕЙК В ШОКОЛАДНО-ПЕСОЧНОЙ КОРЗИНКЕ, С КАРАМЕЛЬНЫМ
                            ГЛАССАЖЕМ И ШОКОЛАДНОЙ КРОШКОЙ]
                        </span>
                        <span class="menu-bar-item-weight">
                            110 гр.
                        </span>
                        <span class="menu-bar-item-price">
                            ~199
                        </span>
                    </div>    
                </div>
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/osn-menu/medovik-big.jpg" data-fancybox="image-medovik" data-caption="Медовик">
                            <img src="img/menu/osn-menu/medovik-big.jpg" class="item-img img-fluid" title="medovik">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>медовик</h3>
                        <span class="menu-bar-item-description">[КЛАССИЧЕСКИЙ МЕДОВЫЙ ТОРТ С ПРОСЛОЙКОЙ ИЗ СЛИВОЧНОГО КРЕМА]
                            [ПОДАЕТСЯ С КАРАМЕЛЬНЫМ СОУСОМ И ГРЕЦКИМИ ОРЕХАМИ]
                        </span>
                        <span class="menu-bar-item-weight">
                            110 гр.
                        </span>
                        <span class="menu-bar-item-price">
                            ~199
                        </span>
                    </div>    
                </div>
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <div class="new-label"></div>
                        <a href="img/menu/osn-menu/banana-split.jpg" data-fancybox="image-banana" data-caption="Банана сплит">
                            <img src="img/menu/osn-menu/banana-split.jpg" class="item-img img-fluid" title="Банана сплит">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>банана сплит</h3>
                        <span class="menu-bar-item-description">
                            [МОРОЖЕНОЕ, БАНАН, ВЗБИТЫЕ СЛИВКИ, ШОКОЛАДНЫЙ СОУС, КЛУБНИЧНЫЙ СОУС,
                            КЕДРОВЫЕ ОРЕХИ]
                        </span>
                        <span class="menu-bar-item-weight">
                            100/55/30/10/10/3 гр.
                        </span>
                        <span class="menu-bar-item-price">
                            ~299
                        </span>
                    </div>    
                </div>
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/osn-menu/tort-morkovny-big.jpg" data-fancybox="image-tort-morkovny" data-caption="Торт «морковный»">
                            <img src="img/menu/osn-menu/tort-morkovny-big.jpg" class="item-img img-fluid" title="tort-morkovny">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>торт «морковный»</h3>
                        <span class="menu-bar-item-description">[ТРАДИЦИОННЫЙ АМЕРИКАНСКИЙ ТОРТ С МОРКОВЬЮ, ГРЕЦКИМ ОРЕХОМ, ИЗЮМОМ
                            И ПРОСЛОЙКОЙ СЛИВОЧНО-ЛИМОННОГО КРЕМ]
                        </span>
                        <span class="menu-bar-item-weight">
                            110 гр.
                        </span>
                        <span class="menu-bar-item-price">
                            ~199
                        </span>
                    </div>    
                </div>
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/osn-menu/tiramisu-big.jpg" data-fancybox="image-tiramisu" data-caption="Тирамису">
                            <img src="img/menu/osn-menu/tiramisu-big.jpg" class="item-img img-fluid" title="tiramisu" alt="Тирамису">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>тирамису</h3>
                        <span class="menu-bar-item-description">[ДОМАШНИЙ ТИРАМИСУ С КРЕМОМ ИЗ МАСКАРПОНЕ]
                        </span>
                        <span class="menu-bar-item-weight">
                            150 гр.
                        </span>
                        <span class="menu-bar-item-price">
                            ~199
                        </span>
                    </div>    
                </div>
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/osn-menu/fruit-assorti-big.jpg" data-fancybox="image-fruit-assorti" data-caption="Фруктовое ассорти">
                            <img src="img/menu/osn-menu/fruit-assorti-big.jpg" class="item-img img-fluid" title="fruit-assorti">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>фруктовое ассорти</h3>
                        <span class="menu-bar-item-description">[АПЕЛЬСИН, ЯБЛОКО, КИВИ, ВИНОГРАД]
                        </span>
                        <span class="menu-bar-item-weight">
                            200 гр.
                        </span>
                        <span class="menu-bar-item-price">
                            ~199
                        </span>
                    </div>    
                </div>
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/osn-menu/ice-cream.jpg" data-fancybox="image-ice-cream" data-caption="Мороженное з шарика">
                            <img src="img/menu/osn-menu/ice-cream.jpg" class="item-img img-fluid" title="Мороженное з шарика">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>мороженное з шарика</h3>
                        <span class="menu-bar-item-description">
                            [ФИСТАШКОВОЕ, ШОКОЛАДНОЕ, МАНГО, МАЛИНА]
                        </span>
                        <span class="menu-bar-item-weight">
                            150 гр.
                        </span>
                        <span class="menu-bar-item-price">
                            ~199
                        </span>
                    </div>    
                </div>
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/osn-menu/blini.jpg" data-fancybox="image-bliny" data-caption="Блины с клубникой и кремом маскарпоне">
                            <img src="img/menu/osn-menu/blini.jpg" class="item-img img-fluid" title="Блины с клубникой и кремом маскарпоне" alt="Блины">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>Блины с клубникой и кремом маскарпоне</h3>
                        <span class="menu-bar-item-description">
                            [БЛИНЫ, КЛУБНИКА, КРЕМ ИЗ МАСКАРПОНЕ, СОУС КЛУБНИЧНЫЙ,
                            МЯТА, САХАРНАЯ ПУДРА]
                        </span>
                        <span class="menu-bar-item-weight">
                            230 гр.
                        </span>
                        <span class="menu-bar-item-price">
                            ~249
                        </span>
                    </div>  
                </div>
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/osn-menu/brauni-big.jpg" data-fancybox="image-brauni" data-caption="Брауни шоколадный с грецким орехом">
                            <img src="img/menu/osn-menu/brauni-big.jpg" class="item-img img-fluid" title="brauni" alt="Брауни">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>брауни шоколадный с грецким орехом</h3>
                        <span class="menu-bar-item-description">[БЛИНЫ, КЛУБНИКА, КРЕМ ИЗ МАСКАРПОНЕ, СОУС КЛУБНИЧНЫЙ,
                            МЯТА, САХАРНАЯ ПУДРА]
                        </span>
                        <span class="menu-bar-item-weight">
                            90 гр.
                        </span>
                        <span class="menu-bar-item-price">
                            ~199
                        </span>
                    </div>    
                </div>
            </div>




            <!--конец основное меню-->  
        </div>


        <!--конец вкладка основное меню-->

        <!--вкладка завтраки-->

        <div class="tabs__content animated fadeIn" id="breakfasts">
            <div class="food-menu-breakfasts">

                <div class="food-menu-breakfasts-advertisment grid">
                    <div class="left-item">
                        <span>
                            ежедневно                      
                        </span>
                        <div class="lunch-time-time"><span>с 08:00 до 12:00</span></div>
                    </div>
                    <div class="right-item">
                        <span>от 149<strong>j</strong> до 179<strong>j</strong> </span>
                    </div>
                </div>    
                <div class="breakfast-content-border grid">
                    <div class="breakfast-horizontal-separator"></div>
                    <div class="breakfast-horizontal-separator-header header-font grid">
                        <span class="center">горячее + напиток</span>
                        <div class="lunch-item-badge">
                            <span>149</span>
                        </div>
                    </div>
                    <div class="breakfast-horizontal-separator"></div>
                </div>
                <div class="breakfast-content ">
                    <div class="breakfast-content-item">
                        <img src="img/menu/breakfast/img1.jpg" alt="Яичница" title="Яичница" class="img-fluid img-hover"> 
                        <p>ЯИЧНИЦА С ТОППИНГАМИ НА ВЫБОР (БЕКОН, ПОМИДОРЫ, ЛУК)</p>
                    </div>
                    <div class="breakfast-content-item-dot"></div>
                    <div class="breakfast-content-item">
                        <img src="img/menu/breakfast/ovsyanka.jpg" alt="Каша" title="Каша" class="img-fluid img-hover">
                        <p>каша</p>
                    </div>
                    <div class="breakfast-content-item-dot"></div>
                    <div class="breakfast-content-item">
                        <img src="img/menu/breakfast/zapechennyj_omlet6.jpg" alt="Омлет" title="Омлет" class="img-fluid img-hover">
                        <p>сырный омлет</p>
                    </div>
                    <div class="breakfast-content-item-plus"></div>
                    <div class="breakfast-content-item">
                        <img src="img/menu/breakfast/tea-black.jpg" alt="Чай" title="Чай" class="img-fluid img-hover">
                        <p>ЧАЙ ЧЕРНЫЙ / ЧАЙ ЗЕЛЕНЫЙ / КОФЕ АМЕРИКАНО / СОК / АМЕРИКАНО</p>
                    </div>
                </div>

                <div class="breakfast-content-border-2 grid">
                    <div class="breakfast-horizontal-separator"></div>
                    <div class="breakfast-horizontal-separator-header header-font grid">
                        <span class="center">горячее + напиток + десерт или сендвич</span>
                        <div class="lunch-item-badge">
                            <span>179</span>
                        </div>
                    </div>
                    <div class="breakfast-horizontal-separator"></div>
                </div>
                <div class="breakfast-content">    
                    <div class="breakfast-content-item">
                        <img src="img/menu/breakfast/img1.jpg" alt="Яичница" title="Яичница" class="img-fluid img-hover"> 
                        <p>ЯИЧНИЦА С ТОППИНГАМИ НА ВЫБОР (БЕКОН, ПОМИДОРЫ, ЛУК)</p>
                    </div>
                    <div class="breakfast-content-item-dot"></div>
                    <div class="breakfast-content-item">
                        <img src="img/menu/breakfast/ovsyanka.jpg" alt="Каша" title="Каша" class="img-fluid img-hover">
                        <p>каша</p>
                    </div>
                    <div class="breakfast-content-item-dot"></div>
                    <div class="breakfast-content-item">
                        <img src="img/menu/breakfast/zapechennyj_omlet6.jpg" alt="Омлет" title="Омлет" class="img-fluid img-hover">
                        <p>сырный омлет</p>
                    </div>
                    <div class="breakfast-content-item-plus"></div>
                    <div class="breakfast-content-item">
                        <img src="img/menu/breakfast/tea-black.jpg" alt="Чай" title="Чай" class="img-fluid img-hover">
                        <p>ЧАЙ ЧЕРНЫЙ / ЧАЙ ЗЕЛЕНЫЙ / КОФЕ АМЕРИКАНО / СОК / АМЕРИКАНО</p>
                    </div>
                </div>
                <div class="breakfast-content breakfast-content-3col">
                    <div class="breakfast-content-item-plus"></div>
                    <div class="breakfast-content-item">
                        <img src="img/menu/breakfast/sandwich.jpg" alt="сендвич" title="сендвич" class="img-fluid img-hover"> 
                        <p>сендвич с курицей / сендвич с семгой</p>
                    </div>
                    <div class="breakfast-content-item-dot"></div>
                    <div class="breakfast-content-item">
                        <img src="img/menu/breakfast/blini_540x540.jpg" alt="блинчики" title="блинчики" class="img-fluid img-hover">
                        <p>БЛИНЧИКИ С ТОППИНГАМИ НА ВЫБОР (СМЕТАНА, МЕД, ДЖЕМ)</p>
                    </div>
                    <div class="breakfast-content-item-dot">

                    </div>
                    <div class="breakfast-content-item">
                        <img src="img/menu/breakfast/syrniki.jpg" alt="сыринки" title="сырники" class="img-fluid img-hover">
                        <p>СЫРНИКИ С ТОППИНГАМИ НА ВЫБОР (СМЕТАНА, МЕД, ДЖЕМ)</p>
                    </div>
                </div>    

            </div>   

        </div>

        <!--конец вкладки завтраки-->



        <!--вкладка бизнес-ланчи -->

        <div class="tabs__content animated fadeIn" id="lunches">


            <div class="food-menu-lunches">
                <?php showLunchTemplate(); ?>    
            </div>

        </div>

        <!-- конец вкладки бизнес-ланчи -->


        <!--вкладка бар-->

        <div class="tabs__content animated fadeIn" id="bar">
            

            
            <div class="food-menu-advertisment" id="f_igristoevino">
                <span>
                    Игристое Вино ● от 149<i class="fas fa-ruble-sign"></i>
                </span>
            </div>
            
            <div class="food-menu-menu grid">
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/bar/IgristoeVino/martini-asti.jpg" data-fancybox="image-martin-asti" data-caption="Мартини Асти">
                            <img src="img/menu/bar/IgristoeVino/martini-asti.jpg" class="item-img img-fluid" title="Мартини Асти" alt="Мартини Асти">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>Мартини Асти</h3>
                        <span class="menu-bar-item-price">
                            0.187 л. ~899
                        </span>
                    </div>    
                </div>
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/bar/IgristoeVino/martini-prosseco.jpg" data-fancybox="image-martin-prosseco" data-caption="Мартини Проссеко">
                            <img src="img/menu/bar/IgristoeVino/martini-prosseco.jpg" class="item-img img-fluid" title="Мартини Проссеко" alt="Мартини Проссеко">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>Мартини Проссеко</h3>
                        <span class="menu-bar-item-price">
                            0.187 л. ~499
                        </span>
                    </div>    
                </div>
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/bar/IgristoeVino/shampagnie-burgua-psl.jpg" data-fancybox="image-shampagnie-burgua" data-caption="Шампанское Буржуа">
                            <img src="img/menu/bar/IgristoeVino/shampagnie-burgua-psl.jpg" class="item-img img-fluid" title="Шампанское Буржуа" alt="Шампанское Буржуа">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>Шампанское Буржуа п/сл</h3>
                        <span class="menu-bar-item-price">
                            150 мл. ~149
                        </span>
                        <span class="menu-bar-item-price">
                            0.75 л. ~499
                        </span>
                    </div>    
                </div>
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/bar/IgristoeVino/shampagnie-burgua-br.jpg" data-fancybox="image-shampagnie-burgua-brut" data-caption="Шампанское Буржуа брют">
                            <img src="img/menu/bar/IgristoeVino/shampagnie-burgua-br.jpg" class="item-img img-fluid" title="Шампанское Буржуа брют" alt="Шампанское Буржуа брют">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>Шампанское Буржуа брют</h3>
                        <span class="menu-bar-item-price">
                            150 мл. ~149
                        </span>
                        <span class="menu-bar-item-price">
                            0.75 л. ~499
                        </span>
                    </div>    
                </div>
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/bar/IgristoeVino/lambrusco-bianko.jpg" data-fancybox="image-lambrusco-bianko" data-caption="Ламбруско Бьянко Фиорино д,ОРО п/сл">
                            <img src="img/menu/bar/IgristoeVino/lambrusco-bianko.jpg" class="item-img img-fluid" title="Ламбруско Бьянко Фиорино д,ОРО п/сл" alt="Ламбруско Бьянко Фиорино д,ОРО п/сл">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>Ламбруско Бьянко Фиорино д,ОРО п/ сл</h3>
                        <span class="menu-bar-item-price">
                            150 мл. ~749
                        </span>
                    </div>    
                </div>
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/bar/IgristoeVino/lambrusco-rosato.jpg" data-fancybox="image-lambrusco-rosato" data-caption="Ламбруско Розато Фиорино д,ОРО п/сл">
                            <img src="img/menu/bar/IgristoeVino/lambrusco-rosato.jpg" class="item-img img-fluid" title="Ламбруско Розато Фиорино д,ОРО п/сл" alt="Ламбруско Розато Фиорино д,ОРО п/сл">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>Ламбруско Розато Фиорино д,ОРО п/ сл</h3>
                        <span class="menu-bar-item-price">
                            150 мл. ~749
                        </span>
                    </div>    
                </div>

            </div>
            
            <div class="food-menu-advertisment" id="f_vine">
                <span>
                    Вино ●  Франция ● от 1199<i class="fas fa-ruble-sign"></i>
                </span>
            </div>
            
            <div class="food-menu-menu grid">
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/bar/Vine/grand-pale-white.jpg" data-fancybox="image-grand-pale-white" data-caption="Гранд пале Бордо белое сухое">
                            <img src="img/menu/bar/Vine/grand-pale-white.jpg" class="item-img img-fluid" title="Гранд пале Бордо белое сухое" alt="Гранд пале Бордо белое сухое">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>Гранд пале Бордо белое сухое</h3>
                        <span class="menu-bar-item-price">
                            0.75 л. ~1199
                        </span>
                    </div>    
                </div>
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/bar/Vine/grand-pale-red.jpg" data-fancybox="image-grand-pale-red" data-caption="Гранд пале Бордо красное сухое">
                            <img src="img/menu/bar/Vine/grand-pale-red.jpg" class="item-img img-fluid" title="Гранд пале Бордо красное сухое" alt="Гранд пале Бордо красное сухое">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>Гранд пале Бордо красное сухое</h3>
                        <span class="menu-bar-item-price">
                            0.75 л. ~1199
                        </span>
                    </div>    
                </div>
            </div>   
                
            <div class="food-menu-advertisment">
                <span>
                    Вино ●  Италия ● от 249<i class="fas fa-ruble-sign"></i>
                </span>
            </div>
            
            <div class="food-menu-menu grid">
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/bar/Vine/chianti-orsola-red.jpg" data-fancybox="image-chianti-orsola-red" data-caption="Вино Кьянти Сант Орсола красное сухое">
                            <img src="img/menu/bar/Vine/chianti-orsola-red.jpg" class="item-img img-fluid" title="Вино Кьянти Сант Орсола красное сухое" alt="Вино Кьянти Сант Орсола красное сухое">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>Вино Кьянти Сант Орсола красное сухое</h3>
                        <span class="menu-bar-item-price">
                            150 мл. ~249
                        </span>
                        <span class="menu-bar-item-price">
                            0.75 л. ~999
                        </span>
                    </div>    
                </div>
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/bar/Vine/gridgio-orsola-white.jpg" data-fancybox="image-gridgio-orsola-white" data-caption="Вино Пино Гриджио Сант Орсола белое сухое">
                            <img src="img/menu/bar/Vine/gridgio-orsola-white.jpg" class="item-img img-fluid" title="Вино Пино Гриджио Сант Орсола белое сухое" alt="Вино Пино Гриджио Сант Орсола белое сухое">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>Вино Пино Гриджио Сант Орсола белое сухое</h3>
                        <span class="menu-bar-item-price">
                            150 мл. ~249
                        </span>
                        <span class="menu-bar-item-price">
                            0.75 л. ~999
                        </span>
                    </div>    
                </div>

            </div>
            
            <div class="food-menu-advertisment">
                <span>
                    Вино ●  Испания ● от 199<i class="fas fa-ruble-sign"></i>
                </span>
            </div>
            
            <div class="food-menu-menu grid">
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/bar/Vine/aniadas-white.jpg" data-fancybox="image-aniadas-white" data-caption="Аньядас д,Оро белое сухое / полусладкое">
                            <img src="img/menu/bar/Vine/aniadas-white.jpg" class="item-img img-fluid" title="Аньядас д,Оро белое сухое / полусладкое" alt="Аньядас д,Оро белое сухое / полусладкое">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>Аньядас д,Оро белое сухое/ полусладкое</h3>
                        <span class="menu-bar-item-price">
                            150 мл. ~199
                        </span>
                        <span class="menu-bar-item-price">
                            0.75 л. ~749
                        </span>
                    </div>    
                </div>
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/bar/Vine/aniadas-red.jpg" data-fancybox="image-aniadas-red" data-caption="Аньядас д,Оро красное сухое / полусладкое">
                            <img src="img/menu/bar/Vine/aniadas-red.jpg" class="item-img img-fluid" title="Аньядас д,Оро красное сухое / полусладкое" alt="Аньядас д,Оро красное сухое / полусладкое">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>Аньядас д,Оро красное сухое/ полусладкое</h3>
                        <span class="menu-bar-item-price">
                            150 мл. ~199
                        </span>
                        <span class="menu-bar-item-price">
                            0.75 л. ~749
                        </span>
                    </div>    
                </div>
            </div>
            
            <div class="food-menu-advertisment">
                <span>
                    Вино ●  ЮАР ● от 1499<i class="fas fa-ruble-sign"></i>
                </span>
            </div>
            
            <div class="food-menu-menu grid">
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/bar/Vine/KVV-red.jpg" data-fancybox="image-KVV-red" data-caption="Вино КВВ Классик Пинотаж красное сухое">
                            <img src="img/menu/bar/Vine/KVV-red.jpg" class="item-img img-fluid" title="Вино КВВ Классик Пинотаж красное сухое" alt="Вино КВВ Классик Пинотаж красное сухое">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>Вино КВВ Классик Пинотаж красное сухое</h3>
                        <span class="menu-bar-item-price">
                            0.75 л. ~1499
                        </span>
                    </div>    
                </div>
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/bar/Vine/KVV-white.jpg" data-fancybox="image-KVV-white" data-caption="Вино КВВ Классик Шардоне белое сухое">
                            <img src="img/menu/bar/Vine/KVV-white.jpg" class="item-img img-fluid" title="Вино КВВ Классик Шардоне белое сухое" alt="Вино КВВ Классик Шардоне белое сухое">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>Вино КВВ Классик Шардоне белое сухое</h3>
                        <span class="menu-bar-item-price">
                            0.75 л. ~1499
                        </span>
                    </div>    
                </div>
            </div>
            
            <div class="food-menu-advertisment" id="f_ling-drinks">
                <span>
                    Лонг Дринки ● от 399<i class="fas fa-ruble-sign"></i>
                </span>
            </div>
            
            <div class="food-menu-menu grid">
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/bar/longDrinks/bakardi-cola.jpg" data-fancybox="image-bakardi-cola" data-caption="Бакарди-кола">
                            <img src="img/menu/bar/longDrinks/bakardi-cola.jpg" class="item-img img-fluid" title="Бакарди-кола" alt="Бакарди-кола">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>Бакарди-кола</h3>
                        <span class="menu-bar-item-description">
                            [ром бакарди оакхард, кола]
                        </span>
                        <span class="menu-bar-item-price">
                            150 мл. ~399
                        </span>
                    </div>    
                </div>
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/bar/longDrinks/lawson-cola.jpg" data-fancybox="image-lawson-cola" data-caption="Лоусон кола">
                            <img src="img/menu/bar/longDrinks/lawson-cola.jpg" class="item-img img-fluid" title="Лоусон кола" alt="Лоусон кола">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>Лоусон кола</h3>
                        <span class="menu-bar-item-description">
                            [виски вильям лоусон, кола, лайм]
                        </span>
                        <span class="menu-bar-item-price">
                            150 мл. ~399
                        </span>
                    </div>    
                </div>
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/bar/longDrinks/martini-tonik.jpg" data-fancybox="image-martini-tonk" data-caption="Мартини Тоник Бьянко">
                            <img src="img/menu/bar/longDrinks/martini-tonik.jpg" class="item-img img-fluid" title="Мартини Тоник Бьянко" alt="Мартини Тоник Бьянко">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>Мартини Тоник Бьянко</h3>
                        <span class="menu-bar-item-description">
                            [мартини бьянко, тоник, лайм]
                        </span>
                        <span class="menu-bar-item-price">
                            200/15 мл. ~399
                        </span>
                    </div>    
                </div>
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/bar/longDrinks/martini-tonik-rosso.jpg" data-fancybox="image-martini-tonik-rosso" data-caption="Мартини Тоник Россо">
                            <img src="img/menu/bar/longDrinks/martini-tonik-rosso.jpg" class="item-img img-fluid" title="Мартини Тоник Россо" alt="Мартини Тоник Россо">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>Мартини Тоник Россо</h3>
                        <span class="menu-bar-item-description">
                            [мартинни россо,тоник, апельсин]
                        </span>
                        <span class="menu-bar-item-price">
                            200/15 мл. ~399
                        </span>
                    </div>    
                </div>
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/bar/longDrinks/d-apple.jpg" data-fancybox="image-d-apple" data-caption="Дерзкое яблоко">
                            <img src="img/menu/bar/longDrinks/d-apple.jpg" class="item-img img-fluid" title="Дерзкое яблоко" alt="Дерзкое яблоко">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>Дерзкое яблоко</h3>
                        <span class="menu-bar-item-description">
                            [виски, яблочный сок, яблоко, сироп ваниль, корица]
                        </span>
                        <span class="menu-bar-item-price">
                            160/30 мл. ~399
                        </span>
                    </div>    
                </div>
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/bar/longDrinks/bakardi-mojito.jpg" data-fancybox="image-bacardi-mojito" data-caption="Бакарди Мохито">
                            <img src="img/menu/bar/longDrinks/bakardi-mojito.jpg" class="item-img img-fluid" title="Бакарди Мохито" alt="Бакарди Мохито">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>Бакарди Мохито</h3>
                        <span class="menu-bar-item-description">
                            [ром бакарди, лайм, мята, сахар, содовая] 
                        </span>
                        <span class="menu-bar-item-price">
                            100/60 мл. ~399
                        </span>
                    </div>    
                </div>
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/bar/longDrinks/malina-mojito.jpg" data-fancybox="image-malina-mojito" data-caption="Малиновый Мохито">
                            <img src="img/menu/bar/longDrinks/malina-mojito.jpg" class="item-img img-fluid" title="Малиновый Мохито" alt="Малиновый Мохито">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>Малиновый Мохито</h3>
                        <span class="menu-bar-item-description">
                            [ром, лайм, мята, малина с/м, сироп малиновый, содовая] 
                        </span>
                        <span class="menu-bar-item-price">
                            150/65 мл. ~399
                        </span>
                    </div>    
                </div>
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/bar/longDrinks/berry-tonik.jpg" data-fancybox="image-berry-tonik" data-caption="Берри Тоник">
                            <img src="img/menu/bar/longDrinks/berry-tonik.jpg" class="item-img img-fluid" title="Берри Тоник" alt="Берри Тоник">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>Берри Тоник</h3>
                        <span class="menu-bar-item-description">
                            [гренадин, джин, тоник, смородина, брусника, лайм] 
                        </span>
                        <span class="menu-bar-item-price">
                            210/20 мл. ~399
                        </span>
                    </div>    
                </div>
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/bar/longDrinks/drunk-dawn.jpg" data-fancybox="image-drunk-dawn" data-caption="Пьяный Рассвет">
                            <img src="img/menu/bar/longDrinks/drunk-dawn.jpg" class="item-img img-fluid" title="Пьяный Рассвет" alt="Пьяный Рассвет">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>Пьяный Рассвет</h3>
                        <span class="menu-bar-item-description">
                            [текила, апельсиновый сок, гренадин, сок лимона, апельсин]
                        </span>
                        <span class="menu-bar-item-price">
                            235/15 мл. ~399
                        </span>
                    </div>    
                </div>
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/bar/longDrinks/bitter-almond.jpg" data-fancybox="image-bitter-almond" data-caption="Биттер Альмонд">
                            <img src="img/menu/bar/longDrinks/bitter-almond.jpg" class="item-img img-fluid" title="Биттер Альмонд" alt="Биттер Альмонд">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>Биттер Альмонд</h3>
                        <span class="menu-bar-item-description">
                            [ сок грейпфрута, аммарето, коньяк]
                        </span>
                        <span class="menu-bar-item-price">
                            160/5 мл. ~399
                        </span>
                    </div>    
                </div>
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/bar/longDrinks/cosmopolitan.jpg" data-fancybox="image-cosmopolitan" data-caption="Космополитен">
                            <img src="img/menu/bar/longDrinks/cosmopolitan.jpg" class="item-img img-fluid" title="Космополитен" alt="Космополитен">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>Космополитен</h3>
                        <span class="menu-bar-item-description">
                            [сок лимона, морс, трипл сек, водка]
                        </span>
                        <span class="menu-bar-item-price">
                            150/15 мл. ~399
                        </span>
                    </div>    
                </div>
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/bar/longDrinks/pr-ananas.jpg" data-fancybox="image-pr-ananas" data-caption="Пряный Ананас">
                            <img src="img/menu/bar/longDrinks/pr-ananas.jpg" class="item-img img-fluid" title="Пряный Ананас" alt="Пряный Ананас">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>Пряный Ананас</h3>
                        <span class="menu-bar-item-description">
                            [текила, ананасовый сок, мед, перец, корица, сок лимона]
                        </span>
                        <span class="menu-bar-item-price">
                            180/5 мл. ~399
                        </span>
                    </div>    
                </div>
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/bar/longDrinks/bloody-mary.jpg" data-fancybox="image-bloody-mary" data-caption="Кровавая Мэри">
                            <img src="img/menu/bar/longDrinks/bloody-mary.jpg" class="item-img img-fluid" title="Кровавая Мэри" alt="Кровавая Мэри">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>Кровавая Мэри</h3>
                        <span class="menu-bar-item-description">
                            [водка, ворчестер, табаско, томатный сок, соль, перец]
                        </span>
                        <span class="menu-bar-item-price">
                            220/10 мл. ~399
                        </span>
                    </div>    
                </div>
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/bar/longDrinks/fintonik.jpg" data-fancybox="image-fintonik" data-caption="ФинТоник">
                            <img src="img/menu/bar/longDrinks/fintonik.jpg" class="item-img img-fluid" title="ФинТоник" alt="ФинТоник">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>ФинТоник</h3>
                        <span class="menu-bar-item-description">
                            [водка финляндия грейпрут, тоник, грейпфрут, розмарин]
                        </span>
                        <span class="menu-bar-item-price">
                            200/15 мл. ~399
                        </span>
                    </div>    
                </div>
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/bar/longDrinks/hellohunny.jpg" data-fancybox="image-hellohunny" data-caption="Хэллоу, Ханни">
                            <img src="img/menu/bar/longDrinks/hellohunny.jpg" class="item-img img-fluid" title="Хэллоу, Ханни" alt="Хэллоу, Ханни">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>Хэллоу, Ханни</h3>
                        <span class="menu-bar-item-description">
                            [Джек дэниелс хани, проссеко, сок лайма, сахарный сироп, лайм]
                        </span>
                        <span class="menu-bar-item-price">
                            160/10 мл. ~399
                        </span>
                    </div>    
                </div>
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/bar/longDrinks/linchburg.jpg" data-fancybox="image-linchburg" data-caption="Линчбургский Лимонад">
                            <img src="img/menu/bar/longDrinks/linchburg.jpg" class="item-img img-fluid" title="Линчбургский Лимонад" alt="Линчбургский Лимонад">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>Линчбургский Лимонад</h3>
                        <span class="menu-bar-item-description">
                            [виски джек дэниелз, трипл сек, спрайт, сок лимона, сахарный сриоп]
                        </span>
                        <span class="menu-bar-item-price">
                            195/15 мл. ~399
                        </span>
                    </div>    
                </div>
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <div class="hit-label"></div>
                        <a href="img/menu/bar/longDrinks/long-island.jpg" data-fancybox="image-long-island" data-caption="Лонг Айленд">
                            <img src="img/menu/bar/longDrinks/long-island.jpg" class="item-img img-fluid" title="Лонг Айленд" alt="Лонг Айленд">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>Лонг Айленд</h3>
                        <span class="menu-bar-item-description">
                            [виски джек дэниелз, трипл сек, спрайт, сок лимона, сахарный сриоп, лимон]
                        </span>
                        <span class="menu-bar-item-price">
                            190/10 мл. ~499
                        </span>
                    </div>    
                </div>
                
            </div>
            
            <div class="food-menu-advertisment" id="f_shots">
                <span>
                    Шоты ● от 299<i class="fas fa-ruble-sign"></i>
                </span>
            </div>
            
            <div class="food-menu-menu grid">
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/bar/shots/hirosima.jpg" data-fancybox="image-hirosima" data-caption="Хиросима">
                            <img src="img/menu/bar/shots/hirosima.jpg" class="item-img img-fluid" title="Хиросима" alt="Хиросима">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>Хиросима</h3>
                        <span class="menu-bar-item-description">
                            [самбука, бейлис, абсент, гренадин]
                        </span>
                        <span class="menu-bar-item-price">
                            50 мл. ~299
                        </span>
                    </div>    
                </div>
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/bar/shots/meduza.jpg" data-fancybox="image-meduza" data-caption="Медуза">
                            <img src="img/menu/bar/shots/meduza.jpg" class="item-img img-fluid" title="Медуза" alt="Медуза">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>Медуза</h3>
                        <span class="menu-bar-item-description">
                            [блю курасао, самбука, текила, бейлис]
                        </span>
                        <span class="menu-bar-item-price">
                            50 мл. ~299
                        </span>
                    </div>    
                </div>
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/bar/shots/kazantip.jpg" data-fancybox="image-kazantip" data-caption="Казантип">
                            <img src="img/menu/bar/shots/kazantip.jpg" class="item-img img-fluid" title="Казантип" alt="Казантип">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>Казантип</h3>
                        <span class="menu-bar-item-description">
                            [мятный сироп, самбука, бейлис, абсент]
                        </span>
                        <span class="menu-bar-item-price">
                            50 мл. ~299
                        </span>
                    </div>    
                </div>
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <div class="hit-label"></div>
                        <a href="img/menu/bar/shots/b-52.jpg" data-fancybox="image-b-52" data-caption="Б-52">
                            <img src="img/menu/bar/shots/b-52.jpg" class="item-img img-fluid" title="Б-52" alt="Б-52">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>Б-52</h3>
                        <span class="menu-bar-item-description">
                            [трипл сек, бейлис, калуа]
                        </span>
                        <span class="menu-bar-item-price">
                            50 мл. ~349
                        </span>
                    </div>    
                </div>
                
            </div>
            
            <div class="food-menu-advertisment" id="f_hot">
                <span>
                    Хот ● от 299<i class="fas fa-ruble-sign"></i>
                </span>
            </div>

            <div class="food-menu-menu grid">
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/bar/hot/white-glintwein.jpg" data-fancybox="image-white-glintwein" data-caption="Белый Глинтвейн">
                            <img src="img/menu/bar/hot/white-glintwein.jpg" class="item-img img-fluid" title="Белый Глинтвейн" alt="Белый Глинтвейн">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>Белый Глинтвейн</h3>
                        <span class="menu-bar-item-description">
                            [Белое вино,мед, корица, гвоздика, бадьян, лимон, апельсин, грейпфрут]
                        </span>
                        <span class="menu-bar-item-price">
                            150 мл. ~299
                        </span>
                    </div>    
                </div>
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/bar/hot/red-glintwein.jpg" data-fancybox="image-red-glintwein" data-caption="Красный Глинтвейн">
                            <img src="img/menu/bar/hot/red-glintwein.jpg" class="item-img img-fluid" title="Красный Глинтвейн" alt="Красный Глинтвейн">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>Красный Глинтвейн</h3>
                        <span class="menu-bar-item-description">
                            [красное вино, корица, мед, гвоздика, бадьян, яблоко, лимон, апельсин]
                        </span>
                        <span class="menu-bar-item-price">
                            150 мл. ~299
                        </span>
                    </div>    
                </div>
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/bar/hot/irish-coffee.jpg" data-fancybox="image-irish-coffee" data-caption="Ирландский Кофе">
                            <img src="img/menu/bar/hot/irish-coffee.jpg" class="item-img img-fluid" title="Ирландский Кофе" alt="Ирландский Кофе">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>Ирландский Кофе</h3>
                        <span class="menu-bar-item-description">
                            [виски джемесон, кофе, взбитые сливки, карамельный сироп]
                        </span>
                        <span class="menu-bar-item-price">
                            150 мл. ~299
                        </span>
                    </div>    
                </div>
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/bar/hot/hot-toddie.jpg" data-fancybox="image-hot-toddie" data-caption="Хот Тодди">
                            <img src="img/menu/bar/hot/hot-toddie.jpg" class="item-img img-fluid" title="Хот Тодди" alt="Хот Тодди">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>Хот Тодди</h3>
                        <span class="menu-bar-item-description">
                            [виски, чай черный, имбирь, мед, корица, бадьян] 
                        </span>
                        <span class="menu-bar-item-price">
                            150 мл. ~299
                        </span>
                    </div>    
                </div>
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <div class="hit-label"></div>
                        <a href="img/menu/bar/hot/malina-grog.jpg" data-fancybox="image-malina-grog" data-caption="Малиновый Грог">
                            <img src="img/menu/bar/hot/malina-grog.jpg" class="item-img img-fluid" title="Малиновый Грог" alt="Малиновый Грог">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>Малиновый Грог</h3>
                        <span class="menu-bar-item-description">
                           [пюре малина, сироп малина, чай, лимон, ром, гвоздика, бадьян] 
                        </span>
                        <span class="menu-bar-item-price">
                            150 мл. ~299
                        </span>
                    </div>    
                </div>
            </div>
            
            <div class="food-menu-advertisment" id="f_bir">
                <span>
                    Бир ● от 299<i class="fas fa-ruble-sign"></i>
                </span>
            </div>

            <div class="food-menu-menu grid">
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/bar/bir/visn_pie.jpg" data-fancybox="image-visn_pie" data-caption="Вишневый Пирог">
                            <img src="img/menu/bar/bir/visn_pie.jpg" class="item-img img-fluid" title="Вишневый Пирог" alt="Вишневый Пирог">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>Вишневый Пирог</h3>
                        <span class="menu-bar-item-description">
                            [вишневый сироп, вишневый сок, бурбон, светлое пиво]
                        </span>
                        <span class="menu-bar-item-price">
                            500 мл. ~299
                        </span>
                    </div>    
                </div>
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/bar/bir/ginger_citrus_ale.jpg" data-fancybox="image-ginger_citrus_ale" data-caption="Имбирно цитрусовый эль">
                            <img src="img/menu/bar/bir/ginger_citrus_ale.jpg" class="item-img img-fluid" title="Имбирно цитрусовый эль" alt="Имбирно цитрусовый эль">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>Имбирно цитрусовый эль</h3>
                        <span class="menu-bar-item-description">
                            [имбирный сироп, свежевыжатый апельсиновый сок, светлое пиво]
                        </span>
                        <span class="menu-bar-item-price">
                            500 мл. ~299
                        </span>
                    </div>    
                </div>
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/bar/bir/honey_julep.jpg" data-fancybox="image-honey_julep" data-caption="Хани джулеп">
                            <img src="img/menu/bar/bir/honey_julep.jpg" class="item-img img-fluid" title="Хани джулеп" alt="Хани джулеп">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>Хани джулеп</h3>
                        <span class="menu-bar-item-description">
                            [бурбон, мед, базилик, эль]
                        </span>
                        <span class="menu-bar-item-price">
                            500 мл. ~299
                        </span>
                    </div>    
                </div>
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/bar/bir/from_paris.jpg" data-fancybox="image-from_paris" data-caption="Из Парижа с любовью">
                            <img src="img/menu/bar/bir/from_paris.jpg" class="item-img img-fluid" title="Из Парижа с любовью" alt="Из Парижа с любовью">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>Из Парижа с любовью</h3>
                        <span class="menu-bar-item-description">
                            [клубника, лимонный сок, малина, светлое пиво]
                        </span>
                        <span class="menu-bar-item-price">
                            500 мл. ~299
                        </span>
                    </div>    
                </div>
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <div class="hit-label"></div>
                        <a href="img/menu/bar/bir/father.jpg" data-fancybox="image-father.jpg" data-caption="Крестный Отец">
                            <img src="img/menu/bar/bir/father.jpg" class="item-img img-fluid" title="Крестный Отец" alt="Крестный Отец">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>Крестный Отец</h3>
                        <span class="menu-bar-item-description">
                            [гинесс, виски, ликер миндальный, эль]
                        </span>
                        <span class="menu-bar-item-price">
                            500 мл. ~499
                        </span>
                    </div>    
                </div>
            </div>
            
            <div class="food-menu-advertisment" id="f_vodka">
                <span>
                    Водка ● от 149<i class="fas fa-ruble-sign"></i>
                </span>
            </div>
            
            <div class="food-menu-menu grid">
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/bar/vodka/rus-standart.jpg" data-fancybox="image-rus-standart" data-caption="Русский Стандарт">
                            <img src="img/menu/bar/vodka/rus-standart.jpg" class="item-img img-fluid" title="Русский Стандарт" alt="Русский Стандарт">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>Русский Стандарт</h3>
                        <span class="menu-bar-item-price">
                            40 мл. ~149
                        </span>
                        <span class="menu-bar-item-price">
                            0.5 л. ~999
                        </span>
                    </div>  
                </div>
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/bar/vodka/parlament.jpg" data-fancybox="image-parlament" data-caption="Парламент">
                            <img src="img/menu/bar/vodka/parlament.jpg" class="item-img img-fluid" title="Парламент" alt="Парламент">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>Парламент</h3>
                        <span class="menu-bar-item-price">
                            40 мл. ~149
                        </span>
                    </div>  
                </div>
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/bar/vodka/finlandia.jpg" data-fancybox="image-finlandia" data-caption="Финляндия">
                            <img src="img/menu/bar/vodka/finlandia.jpg" class="item-img img-fluid" title="Финляндия" alt="Финляндия">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>Финляндия</h3>
                        <span class="menu-bar-item-description">
                            [Классическая, Грейпфрут, Северные ягоды]
                        </span>
                        <span class="menu-bar-item-price">
                            40 мл. ~249
                        </span>
                        <span class="menu-bar-item-price">
                            0.5 л. ~1999
                        </span>
                    </div>  
                </div>
                
            </div>
            <div class="food-menu-advertisment" id="f_samogon">
                <span>
                    Самогон ● от 149<i class="fas fa-ruble-sign"></i>
                </span>
            </div>
            
            <div class="food-menu-menu grid">
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/bar/samogon/kosogorov-2.jpg" data-fancybox="image-kosogorov-2" data-caption="Косогоров Самогон №2">
                            <img src="img/menu/bar/samogon/kosogorov-2.jpg" class="item-img img-fluid" title="Косогоров Самогон №2" alt="Косогоров Самогон №2">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>Косогоров Самогон №2</h3>
                        <span class="menu-bar-item-description">
                            [Пшеничный]
                        </span>
                        <span class="menu-bar-item-price">
                            40 мл. ~149
                        </span>
                    </div>  
                </div>
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/bar/samogon/kosogorov-3.jpg" data-fancybox="image-kosogorov-3" data-caption="Косогоров Самогон №3">
                            <img src="img/menu/bar/samogon/kosogorov-3.jpg" class="item-img img-fluid" title="Косогоров Самогон №3" alt="Косогоров Самогон №3">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>Косогоров Самогон №3</h3>
                        <span class="menu-bar-item-description">
                            [Ржаной]
                        </span>
                        <span class="menu-bar-item-price">
                            40 мл. ~149
                        </span>
                    </div>  
                </div>
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/bar/samogon/kosogorov-4.jpg" data-fancybox="image-kosogorov-4" data-caption="Косогоров Самогон №4">
                            <img src="img/menu/bar/samogon/kosogorov-4.jpg" class="item-img img-fluid" title="Косогоров Самогон №4" alt="Косогоров Самогон №4">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>Косогоров Самогон №4</h3>
                        <span class="menu-bar-item-description">
                            [Ячменный]
                        </span>
                        <span class="menu-bar-item-price">
                            40 мл. ~149
                        </span>
                    </div>  
                </div>
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/bar/samogon/kosogorov-5.jpg" data-fancybox="image-kosogorov-5" data-caption="Косогоров Самогон №5">
                            <img src="img/menu/bar/samogon/kosogorov-5.jpg" class="item-img img-fluid" title="Косогоров Самогон №5" alt="Косогоров Самогон №5">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>Косогоров Самогон №5</h3>
                        <span class="menu-bar-item-description">
                            [Виноградный 40%]
                        </span>
                        <span class="menu-bar-item-price">
                            40 мл. ~199
                        </span>
                        <span class="menu-bar-item-price">
                            0.5 л. ~1499
                        </span>
                    </div>  
                </div>
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/bar/samogon/perchik.jpg" data-fancybox="image-perchik" data-caption="Жгучий перчик">
                            <img src="img/menu/bar/samogon/perchik.jpg" class="item-img img-fluid" title="Жгучий перчик" alt="Жгучий перчик">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>Настойка Жгучий перчик</h3>
                        <span class="menu-bar-item-description">
                            [40%]
                        </span>
                        <span class="menu-bar-item-price">
                            40 мл. ~149
                        </span>
                        <span class="menu-bar-item-price">
                            0.5 л. ~999
                        </span>
                    </div>  
                </div>
            </div>
            
            <div class="food-menu-advertisment" id="f_whisky">
                <span>
                    Виски ● от 149<i class="fas fa-ruble-sign"></i>
                </span>
            </div>
            
            <div class="food-menu-menu grid">
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/bar/whisky/william-lawsons.jpg" data-fancybox="image-william-lawsons" data-caption="Вильям Лоусонс">
                            <img src="img/menu/bar/whisky/william-lawsons.jpg" class="item-img img-fluid" title="Вильям Лоусонс" alt="Вильям Лоусонс">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>Вильям Лоусонс</h3>
                        <span class="menu-bar-item-price">
                            40 мл. ~199
                        </span>
                        <span class="menu-bar-item-price">
                            0.5 л. ~1499
                        </span>
                    </div>  
                </div>
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/bar/whisky/william-lawsons-super.jpg" data-fancybox="image-william-lawsons-super" data-caption="Вильям Лоусонс Супер Спайсд">
                            <img src="img/menu/bar/whisky/william-lawsons-super.jpg" class="item-img img-fluid" title="Вильям Лоусонс Супер Спайсд" alt="Вильям Лоусонс Супер Спайсд">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>Вильям Лоусонс Супер Спайсд</h3>
                        <span class="menu-bar-item-price">
                            40 мл. ~149
                        </span>
                    </div>  
                </div>
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/bar/whisky/dewars-white.jpg" data-fancybox="image-dewars-white" data-caption="Дьюарс белый">
                            <img src="img/menu/bar/whisky/dewars-white.jpg" class="item-img img-fluid" title="Дьюарс белый" alt="Дьюарс белый">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>Дьюарс белый</h3>
                        <span class="menu-bar-item-price">
                            40 мл. ~249
                        </span>
                    </div>  
                </div>
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/bar/whisky/jack.jpg" data-fancybox="image-jack" data-caption="Джек Дэниел`с">
                            <img src="img/menu/bar/whisky/jack.jpg" class="item-img img-fluid" title="Джек Дэниел`с" alt="Джек Дэниел`с">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>Джек Дэниел`с</h3>
                        <span class="menu-bar-item-price">
                            40 мл. ~349
                        </span>
                        <span class="menu-bar-item-price">
                            0.5 л. ~3499
                        </span>
                    </div>  
                </div>
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/bar/whisky/jack-tennesy.jpg" data-fancybox="image-jack-tennesy" data-caption="Хани Ликер Джек Дэниел`с Теннесси">
                            <img src="img/menu/bar/whisky/jack-tennesy.jpg" class="item-img img-fluid" title="Хани Ликер Джек Дэниел`с Теннесси" alt="Хани Ликер Джек Дэниел`с Теннесси">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>Хани Ликер Джек Дэниел`с Теннесси</h3>
                        <span class="menu-bar-item-price">
                            40 мл. ~299
                        </span>
                    </div>  
                </div>
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/bar/whisky/jameson.jpg" data-fancybox="image-jameson" data-caption="Джемесон">
                            <img src="img/menu/bar/whisky/jameson.jpg" class="item-img img-fluid" title="Джемесон" alt="Джемесон">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>Джемесон</h3>
                        <span class="menu-bar-item-price">
                            40 мл. ~299
                        </span>
                        <span class="menu-bar-item-price">
                            0.5 л. ~2999
                        </span>
                    </div>  
                </div>
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/bar/whisky/maccalan.jpg" data-fancybox="image-jameson" data-caption="Макаллан 12 лет">
                            <img src="img/menu/bar/whisky/maccalan.jpg" class="item-img img-fluid" title="Макаллан 12 лет" alt="Макаллан 12 лет">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>Макаллан 12 лет</h3>
                        <span class="menu-bar-item-price">
                            40 мл. ~499
                        </span>
                    </div>  
                </div>
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/bar/whisky/jim.jpg" data-fancybox="image-jim" data-caption="Джим Бим">
                            <img src="img/menu/bar/whisky/jim.jpg" class="item-img img-fluid" title="Джим Бим" alt="Джим Бим">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>Джим Бим</h3>
                        <span class="menu-bar-item-price">
                            40 мл. ~299
                        </span>
                        <span class="menu-bar-item-price">
                            0.5 л. ~2999
                        </span>
                    </div>  
                </div>
                
            </div>
            
            <div class="food-menu-advertisment" id="f_gin">
                <span>
                    Джин ● от 119<i class="fas fa-ruble-sign"></i>
                </span>
            </div>
            
            <div class="food-menu-menu grid">
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/bar/gin/beefeater.jpg" data-fancybox="image-beefeater" data-caption="Бифитер">
                            <img src="img/menu/bar/gin/beefeater.jpg" class="item-img img-fluid" title="Бифитер" alt="Бифитер">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>Бифитер</h3>
                        <span class="menu-bar-item-price">
                            40 мл. ~299
                        </span>
                        <span class="menu-bar-item-price">
                            0.7 л. ~2999
                        </span>
                    </div>  
                </div>
            </div>
            
            <div class="food-menu-advertisment" id="f_rum">
                <span>
                    Ром ● от 249<i class="fas fa-ruble-sign"></i>
                </span>
            </div>
            
            <div class="food-menu-menu grid">
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/bar/rum/bacardi-oro.jpg" data-fancybox="image-bacardi-oro" data-caption="Бакарди карта Оро">
                            <img src="img/menu/bar/rum/bacardi-oro.jpg" class="item-img img-fluid" title="Бакарди карта Оро" alt="Бакарди карта Оро">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>Бакарди карта Оро</h3>
                        <span class="menu-bar-item-price">
                            40 мл. ~249
                        </span>
                        <span class="menu-bar-item-price">
                            0.5 л. ~2499
                        </span>
                    </div>  
                </div>
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/bar/rum/bacardi-negra.jpg" data-fancybox="image-bacardi-negra" data-caption="Бакарди карта Нэгра">
                            <img src="img/menu/bar/rum/bacardi-negra.jpg" class="item-img img-fluid" title="Бакарди карта Нэгра" alt="Бакарди карта Нэгра">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>Бакарди карта Нэгра</h3>
                        <span class="menu-bar-item-price">
                            40 мл. ~249
                        </span>
                        <span class="menu-bar-item-price">
                            0.5 л. ~2499
                        </span>
                    </div>  
                </div>
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/bar/rum/bacardi-ochard.jpg" data-fancybox="image-bacardi-ochard" data-caption="Бакарди карта Оакхарт">
                            <img src="img/menu/bar/rum/bacardi-ochard.jpg" class="item-img img-fluid" title="Бакарди карта Оакхарт" alt="Бакарди карта Оакхарт">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>Бакарди карта Оакхарт</h3>
                        <span class="menu-bar-item-price">
                            40 мл. ~249
                        </span>
                        <span class="menu-bar-item-price">
                            0.5 л. ~2499
                        </span>
                    </div>  
                </div>
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/bar/rum/bacardi-blanco.jpg" data-fancybox="image-bacardi-blanco" data-caption="Бакарди карта Бланко">
                            <img src="img/menu/bar/rum/bacardi-blanco.jpg" class="item-img img-fluid" title="Бакарди карта Бланко" alt="Бакарди карта Бланко">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>Бакарди карта Бланко</h3>
                        <span class="menu-bar-item-price">
                            40 мл. ~249
                        </span>
                        <span class="menu-bar-item-price">
                            0.5 л. ~2499
                        </span>
                    </div>  
                </div>
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/bar/rum/morgan-white.jpg" data-fancybox="image-morgan-white" data-caption="Карибский Капитан Морган Уайт">
                            <img src="img/menu/bar/rum/morgan-white.jpg" class="item-img img-fluid" title="Карибский Капитан Морган Уайт" alt="Карибский Капитан Морган Уайт">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>Карибский Капитан Морган Уайт</h3>
                        <span class="menu-bar-item-price">
                            40 мл. ~249
                        </span>
                    </div>  
                </div>
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/bar/rum/morgan-gold.jpg" data-fancybox="image-morgan-gold" data-caption="Ром Капитан Морган пряный золотой">
                            <img src="img/menu/bar/rum/morgan-gold.jpg" class="item-img img-fluid" title="Ром Капитан Морган пряный золотой" alt="Ром Капитан Морган пряный золотой">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>Ром Капитан Морган пряный золотой</h3>
                        <span class="menu-bar-item-price">
                            40 мл. ~249
                        </span>
                    </div>  
                </div>
            </div>
            
            <div class="food-menu-advertisment" id="f_tequila">
                <span>
                    Текила ● от 249<i class="fas fa-ruble-sign"></i>
                </span>
            </div>
            
            <div class="food-menu-menu grid">
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/bar/tequila/camino-blanco.jpg" data-fancybox="image-camino-blanco" data-caption="Камино Реал Бланко">
                            <img src="img/menu/bar/tequila/camino-blanco.jpg" class="item-img img-fluid" title="Камино Реал Бланко" alt="Камино Реал Бланко">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>Камино Реал Бланко</h3>
                        <span class="menu-bar-item-price">
                            40 мл. ~249
                        </span>
                        <span class="menu-bar-item-price">
                            0.7 л. ~2999
                        </span>
                    </div>  
                </div>
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/bar/tequila/camino-gold.jpg" data-fancybox="image-camino-gold" data-caption="Камино Реал Золотая">
                            <img src="img/menu/bar/tequila/camino-gold.jpg" class="item-img img-fluid" title="Камино Реал Золотая" alt="Камино Реал Золотая">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>Камино Реал Золотая</h3>
                        <span class="menu-bar-item-price">
                            40 мл. ~249
                        </span>
                        <span class="menu-bar-item-price">
                            0.7 л. ~2999
                        </span>
                    </div>  
                </div>
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/bar/tequila/olmeca-white.jpg" data-fancybox="image-olmeca-white" data-caption="Ольмека белая">
                            <img src="img/menu/bar/tequila/olmeca-white.jpg" class="item-img img-fluid" title="Ольмека белая" alt="Ольмека белая">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>Ольмека белая</h3>
                        <span class="menu-bar-item-price">
                            40 мл. ~299
                        </span>
                    </div>  
                </div>
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/bar/tequila/olmeca-gold.jpg" data-fancybox="image-olmeca-gold" data-caption="Ольмека золото">
                            <img src="img/menu/bar/tequila/olmeca-gold.jpg" class="item-img img-fluid" title="Ольмека золото" alt="Ольмека золото">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>Ольмека золото</h3>
                        <span class="menu-bar-item-price">
                            40 мл. ~299
                        </span>
                    </div>  
                </div>
            </div>
            
            <div class="food-menu-advertisment" id="f_cogniac">
                <span>
                    Коньяк ● от 199<i class="fas fa-ruble-sign"></i>
                </span>
            </div>

            <div class="food-menu-menu grid">
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/bar/cogniac/ararat-3.jpg" data-fancybox="image-ararat-3" data-caption="Арарат 3*">
                            <img src="img/menu/bar/cogniac/ararat-3.jpg" class="item-img img-fluid" title="Арарат 3*" alt="Арарат 3*">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>Арарат 3*</h3>
                        <span class="menu-bar-item-price">
                            40 мл. ~199
                        </span>
                        <span class="menu-bar-item-price">
                            0.7 л. ~2499
                        </span>
                    </div>  
                </div>
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/bar/cogniac/ararat-5.jpg" data-fancybox="image-ararat-5" data-caption="Арарат 5*">
                            <img src="img/menu/bar/cogniac/ararat-5.jpg" class="item-img img-fluid" title="Арарат 5*" alt="Арарат 5*">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>Арарат 5*</h3>
                        <span class="menu-bar-item-price">
                            40 мл. ~249
                        </span>
                    </div>  
                </div>
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/bar/cogniac/otard-vs.jpg" data-fancybox="image-otard-vs" data-caption="Барон Отард VS">
                            <img src="img/menu/bar/cogniac/otard-vs.jpg" class="item-img img-fluid" title="Барон Отард VS" alt="Барон Отард VS">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>Барон Отард VS</h3>
                        <span class="menu-bar-item-price">
                            40 мл. ~299
                        </span>
                    </div>  
                </div>
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/bar/cogniac/martel-vs.jpg" data-fancybox="image-martell-vs" data-caption="Мартель VS">
                            <img src="img/menu/bar/cogniac/martel-vs.jpg" class="item-img img-fluid" title="Мартель VS" alt="Мартель VS">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>Мартель VS</h3>
                        <span class="menu-bar-item-price">
                            40 мл. ~349
                        </span>
                        <span class="menu-bar-item-price">
                            0.5 л. ~3499
                        </span>
                    </div>  
                </div>

            </div>
            
            <div class="food-menu-advertisment" id="f_vermut">
                <span>
                    Вермуты ● от 249<i class="fas fa-ruble-sign"></i>
                </span>
            </div>

            <div class="food-menu-menu grid">
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/bar/vermut/martini-bianco.jpg" data-fancybox="image-martini-bianco" data-caption="Мартини Бьянко">
                            <img src="img/menu/bar/vermut/martini-bianco.jpg" class="item-img img-fluid" title="Мартини Бьянко" alt="Мартини Бьянко">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>Мартини Бьянко</h3>
                        <span class="menu-bar-item-price">
                            100 мл. ~249
                        </span>
                        <span class="menu-bar-item-price">
                            0.5 л. ~1499
                        </span>
                    </div>  
                </div>
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/bar/vermut/martini-rosso.jpg" data-fancybox="image-martini-rosso" data-caption="Мартини Россо">
                            <img src="img/menu/bar/vermut/martini-rosso.jpg" class="item-img img-fluid" title="Мартини Россо" alt="Мартини Россо">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>Мартини Россо</h3>
                        <span class="menu-bar-item-price">
                            100 мл. ~249
                        </span>
                        <span class="menu-bar-item-price">
                            0.5 л. ~1499
                        </span>
                    </div>  
                </div>
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/bar/vermut/martini-rosato.jpg" data-fancybox="image-martini-rosato" data-caption="Мартини Розато">
                            <img src="img/menu/bar/vermut/martini-rosato.jpg" class="item-img img-fluid" title="Мартини Розато" alt="Мартини Розато">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>Мартини Розато</h3>
                        <span class="menu-bar-item-price">
                            100 мл. ~249
                        </span>
                        <span class="menu-bar-item-price">
                            0.5 л. ~1499
                        </span>
                    </div>  
                </div>
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/bar/vermut/martini-dry.jpg" data-fancybox="image-martini-dry" data-caption="Мартини Экстра Драй">
                            <img src="img/menu/bar/vermut/martini-dry.jpg" class="item-img img-fluid" title="Мартини Экстра Драй" alt="Мартини Экстра Драй">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>Мартини Экстра Драй</h3>
                        <span class="menu-bar-item-price">
                            100 мл. ~249
                        </span>
                        <span class="menu-bar-item-price">
                            0.5 л. ~1499
                        </span>
                    </div>  
                </div>
            </div>
            
            <div class="food-menu-advertisment" id="f_liquer">
                <span>
                    Ликер ● от 199<i class="fas fa-ruble-sign"></i>
                </span>
            </div>
            
            <div class="food-menu-menu grid">
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/bar/liquer/triplesec.jpg" data-fancybox="image-triplesec" data-caption="Трипл Сек">
                            <img src="img/menu/bar/liquer/triplesec.jpg" class="item-img img-fluid" title="Трипл Сек" alt="Трипл Сек">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>Трипл Сек</h3>
                        <span class="menu-bar-item-price">
                            50 мл. ~199
                        </span>
                    </div>  
                </div>
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/bar/liquer/jager.jpg" data-fancybox="image-jager" data-caption="Ягермайстер">
                            <img src="img/menu/bar/liquer/jager.jpg" class="item-img img-fluid" title="Ягермайстер" alt="Ягермайстер">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>Ягермайстер</h3>
                        <span class="menu-bar-item-price">
                            50 мл. ~249
                        </span>
                        <span class="menu-bar-item-price">
                            0.5 л. ~2999
                        </span>
                    </div>  
                </div>
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/bar/liquer/beher.jpg" data-fancybox="image-beher" data-caption="Бехеровка">
                            <img src="img/menu/bar/liquer/beher.jpg" class="item-img img-fluid" title="Бехеровка" alt="Бехеровка">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>Бехеровка</h3>
                        <span class="menu-bar-item-price">
                            50 мл. ~249
                        </span>
                        <span class="menu-bar-item-price">
                            0.5 л. ~2999
                        </span>
                    </div>  
                </div>
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/bar/liquer/sambuka.jpg" data-fancybox="image-sambuka" data-caption="Самбука">
                            <img src="img/menu/bar/liquer/sambuka.jpg" class="item-img img-fluid" title="Самбука" alt="Самбука">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>Самбука</h3>
                        <span class="menu-bar-item-price">
                            50 мл. ~199
                        </span>
                    </div>  
                </div>
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/bar/liquer/absinth.jpg" data-fancybox="image-sambuka" data-caption="Абсент">
                            <img src="img/menu/bar/liquer/absinth.jpg" class="item-img img-fluid" title="Абсент" alt="Абсент">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>Абсент</h3>
                        <span class="menu-bar-item-price">
                            50 мл. ~199
                        </span>
                    </div>  
                </div>
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/bar/liquer/amaretto.jpg" data-fancybox="image-amaretto" data-caption="Амаретто">
                            <img src="img/menu/bar/liquer/amaretto.jpg" class="item-img img-fluid" title="Амаретто" alt="Амаретто">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>Амаретто</h3>
                        <span class="menu-bar-item-price">
                            50 мл. ~199
                        </span>
                    </div>  
                </div>
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/bar/liquer/baileys.jpg" data-fancybox="image-baileys" data-caption="Бейлис">
                            <img src="img/menu/bar/liquer/baileys.jpg" class="item-img img-fluid" title="Бейлис" alt="Бейлис">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>Бейлис</h3>
                        <span class="menu-bar-item-price">
                            50 мл. ~199
                        </span>
                    </div>  
                </div>
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/bar/liquer/malibu.jpg" data-fancybox="image-malibu" data-caption="Малибу">
                            <img src="img/menu/bar/liquer/malibu.jpg" class="item-img img-fluid" title="Малибу" alt="Малибу">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>Малибу</h3>
                        <span class="menu-bar-item-price">
                            50 мл. ~199
                        </span>
                    </div>  
                </div>

            </div>
            
            <div class="food-menu-advertisment" id="f_firm_beer">
                <span>
                    Фирменное Пиво ● от 119<i class="fas fa-ruble-sign"></i>
                </span>
            </div>

            <div class="food-menu-menu grid">
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/bar/gvozd.jpg" data-fancybox="image-pivo-gvozd" data-caption="Гвоздь">
                            <img src="img/menu/bar/gvozd.jpg" class="item-img img-fluid" title="" alt="Гвоздь">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>Гвоздь светлый/темный/
                            нефильтрованный
                        </h3>
                        <span class="menu-bar-item-description">
                            [плотность 11.6%]
                            [крепость 5.0%]
                        </span>
                        <span class="menu-bar-item-price">
                            300 мл. ~119
                        </span>
                        <span class="menu-bar-item-price">
                            500 мл. ~199
                        </span>
                        <span class="menu-bar-item-price">
                            1000 мл. ~299
                        </span>
                        <span class="menu-bar-item-price">
                            3000 мл. ~699
                        </span>
                        <span class="menu-item-dop">
                            на вынос 1000мл ● 299<strong>j</strong>
                        </span>
                        <span class="menu-item-dop">
                            на вынос 3000мл ● 599<strong>j</strong>
                        </span>
                    </div>    
                </div>

                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/bar/sider.jpg" data-fancybox="image-sider" data-caption="Сидр фирменный грушевый">
                            <img src="img/menu/bar/sider.jpg" class="item-img img-fluid" title="Сидр фирменный грушевый" alt="сидр фирменный грушевый">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>сидр фирменный грушевый</h3>
                        <span class="menu-bar-item-description">
                            [крепость 4.7%]
                        </span>
                        <span class="menu-bar-item-price">
                            300 мл. ~119
                        </span>
                        <span class="menu-bar-item-price">
                            500 мл. ~199
                        </span>
                        <span class="menu-bar-item-price">
                            1000 мл. ~299
                        </span>
                        <span class="menu-bar-item-price">
                            3000 мл. ~699
                        </span>
                        <span class="menu-item-dop">
                            на вынос 1000мл ● 299<strong>j</strong>
                        </span>
                        <span class="menu-item-dop">
                            на вынос 3000мл ● 599<strong>j</strong>
                        </span>
                    </div>    
                </div>
            </div>

            <div class="food-menu-advertisment" id="f_craft_beer">
                <span>
                    Крафтовое Пиво ● от 199<i class="fas fa-ruble-sign"></i>
                </span>
            </div>

            <div class="food-menu-menu grid">
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/bar/craft.jpg" data-fancybox="image-ipa-light" data-caption="ipa светлое">
                            <img src="img/menu/bar/craft.jpg" class="item-img img-fluid" title="ipa светлое" alt="ipa светлое">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>Крафтовое Пиво</h3>
                        <span class="menu-bar-item-description">
                            [плотность 14.0%]
                            [крепость 5.9%]
                        </span>
                        <span class="menu-bar-item-price">
                            300 мл. ~199
                        </span>
                        <span class="menu-bar-item-price">
                            400 мл. ~299
                        </span>
                        <span class="menu-bar-item-price">
                            1000 мл. ~549
                        </span>
                        <span class="menu-bar-item-price">
                            3000 мл. ~1499
                        </span>
                        <span class="menu-item-dop">
                            на вынос 1000мл ● 499<strong>j</strong>
                        </span>
                        <span class="menu-item-dop">
                            на вынос 3000мл ● 1299<strong>j</strong>
                        </span>
                    </div>    
                </div>
            </div>

            <div class="food-menu-advertisment" id="f_import_beer">
                <span>
                    Импортное пиво ● от 299<i class="fas fa-ruble-sign"></i>
                </span>
            </div>

            <div class="food-menu-menu grid">
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/bar/harp.jpg" data-fancybox="image-harp-lager" data-caption="harp lager">
                            <img src="img/menu/bar/harp.jpg" class="item-img img-fluid" title="harp lager" alt="harp lager">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>harp lager</h3>
                        <span class="menu-bar-item-description">
                            [плотность 12.3%]
                            [крепость 5.2%]
                        </span>
                        <span class="menu-bar-item-price">
                            300 мл. ~299
                        </span>
                        <span class="menu-bar-item-price">
                            500 мл. ~399
                        </span>
                        <span class="menu-bar-item-price">
                            1000 мл. ~749
                        </span>
                        <span class="menu-bar-item-price">
                            3000 мл. ~1999
                        </span>
                        <span class="menu-item-dop">
                            на вынос 1000мл ● 699<strong>j</strong>
                        </span>
                        <span class="menu-item-dop">
                            на вынос 3000мл ● 1799<strong>j</strong>
                        </span>
                    </div>    
                </div>
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/bar/krombaher.jpg" data-fancybox="image-krombacher" data-caption="krombacher">
                            <img src="img/menu/bar/krombaher.jpg" class="item-img img-fluid" title="krombacher" alt="krombacher">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>krombacher</h3>
                        <span class="menu-bar-item-description">
                            светлое нефильтрованное [плотность 12.6%] [крепость 5.3%]
                        </span>
                        <span class="menu-bar-item-price">
                            300 мл. ~299
                        </span>
                        <span class="menu-bar-item-price">
                            500 мл. ~399
                        </span>
                        <span class="menu-bar-item-price">
                            1000 мл. ~749
                        </span>
                        <span class="menu-bar-item-price">
                            3000 мл. ~1999
                        </span>
                        <span class="menu-item-dop">
                            на вынос 1000мл ● 699<strong>j</strong>
                        </span>
                        <span class="menu-item-dop">
                            на вынос 3000мл ● 1799<strong>j</strong>
                        </span>
                    </div>    
                </div>
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/bar/guinness.jpg" data-fancybox="image-guinness" data-caption="guinness темное">
                            <img src="img/menu/bar/guinness.jpg" class="item-img img-fluid" title="guinness темное" alt="guinness темное">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>guinness темное</h3>
                        <span class="menu-bar-item-description">
                            [плотность 12.3%]
                            [крепость 5.2%]
                        </span>
                        <span class="menu-bar-item-price">
                            300 мл. ~299
                        </span>
                        <span class="menu-bar-item-price">
                            500 мл. ~399
                        </span>
                        <span class="menu-bar-item-price">
                            1000 мл. ~749
                        </span>
                        <span class="menu-bar-item-price">
                            3000 мл. ~1999
                        </span>
                        <span class="menu-item-dop">
                            на вынос 1000мл ● 699<strong>j</strong>
                        </span>
                        <span class="menu-item-dop">
                            на вынос 3000мл ● 1799<strong>j</strong>
                        </span>
                    </div>    
                </div>
            </div>

            <div class="food-menu-advertisment" id="f_season_beer">
                <span>
                    Сезонное Пиво ● от 199<i class="fas fa-ruble-sign"></i>
                </span>
            </div>

            <div class="food-menu-menu grid">
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/bar/season-beer.jpg" data-fancybox="image-season" data-caption="Сезонное Пиво">
                            <img src="img/menu/bar/season-beer.jpg" class="item-img img-fluid" title="Сезонное Пиво" alt="Сезонное Пиво">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>Сезонное Пиво</h3>
                        <span class="menu-bar-item-description">
                            [Сезонное Пиво]
                        </span>
                        <span class="menu-bar-item-price">
                            300 мл. ~199
                        </span>
                        <span class="menu-bar-item-price">
                            400 мл. ~299
                        </span>
                        <span class="menu-bar-item-price">
                            1000 мл. ~549
                        </span>
                        <span class="menu-bar-item-price">
                            3000 мл. ~1499
                        </span>
                        <span class="menu-item-dop">
                            на вынос 1000мл ● 499<strong>j</strong>
                        </span>
                        <span class="menu-item-dop">
                            на вынос 3000мл ● 1299<strong>j</strong>
                        </span>
                    </div>    
                </div>
            </div>

            <div class="food-menu-advertisment" id="f_tea">
                <span>
                    Чай ● от 199<i class="fas fa-ruble-sign"></i>
                </span>
            </div>

            <div class="food-menu-menu grid">
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/bar/green-tea.jpg" data-fancybox="image-tea" data-caption="Чай зеленый">
                            <img src="img/menu/bar/green-tea.jpg" class="item-img img-fluid" title="Чай зеленый" alt="Чай зеленый">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>чай зеленый</h3>
                        <span class="menu-bar-item-description">
                            [1] ароматный жасмин <br/>
                            [ЗОЛОТИСТЫЙ ЦВЕТ НАСТОЯ / ТОНИЗИРУЮЩЕЕ ДЕЙСТВИЕ]<br/>
                            [2] сенча <br/>
                            [ИЗГОТОВЛЕН ПО ЯПОНСКОЙ ТЕХНОЛОГИИ / НЕЖНО-ЗЕЛЕНЫЙ НАСТОЙ И СВЕЖИЙ АРОМАТ]                       
                        </span>
                        <span class="menu-bar-item-price">
                            500 мл. ~199
                        </span>
                        <span class="menu-bar-item-price">
                            750 мл. ~249
                        </span>

                    </div>    
                </div>
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/bar/tea-black.jpg" data-fancybox="image-tea-black" data-caption="Чай черный">
                            <img src="img/menu/bar/tea-black.jpg" class="item-img img-fluid" title="Чай черный" alt="Чай черный">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>чай черный</h3>
                        <span class="menu-bar-item-description">
                            [1] с чабрецом <br/>
                            [2] ассам<br/>
                            [ЧЕРНЫЙ ИНДИЙСКИЙ ЧАЙ]<br/>
                            [3] эрл грей<br/>
                            [ЧЕРНЫЙ ЦЕЙЛОНСКИЙ ЧАЙ С ДОБАВЛЕНИЕМ МАСЛА БЕРГАМОТА]                      
                        </span>
                        <span class="menu-bar-item-price">
                            500 мл. ~199
                        </span>
                        <span class="menu-bar-item-price">
                            750 мл. ~249
                        </span>
                    </div>    
                </div>
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/bar/tea-fruit.jpg" data-fancybox="image-tea-fruit" data-caption="Чай фруктовый">
                            <img src="img/menu/bar/tea-fruit.jpg" class="item-img img-fluid" title="Чай фруктовый" alt="Чай фруктовый">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>чай фруктовый</h3>
                        <span class="menu-bar-item-description">
                            [1] фруктовый сад <br/>
                            [ФРУКТОВЫЙ ЧАЙ С КУСОЧКАМИ ЯБЛОКА, АНАНАСА, ИЗЮМОМ И ЕЖЕВИКОЙ]                     
                        </span>
                        <span class="menu-bar-item-price">
                            500 мл. ~199
                        </span>
                        <span class="menu-bar-item-price">
                            750 мл. ~249
                        </span>
                    </div>    
                </div>
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/bar/tea-elite.jpg" data-fancybox="image-tea-elite" data-caption="Элитные сорта чая">
                            <img src="img/menu/bar/tea-elite.jpg" class="item-img img-fluid" title="Элитные сорта чая" alt="Элитные сорта чая">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>элитные сорта чая</h3>
                        <span class="menu-bar-item-description">
                            [1] пуэр юннань<br/>
                            [ЮННАНЬСКИЙ ПУЭР С ТРЕХЛЕТНЕЙ ВЫДЕРЖКОЙ]<br/>
                            [2] молочный улун<br/>
                            [ТАЙВАНЬСКИЙ ЧАЙ С ПРИЯТНЫМ МОЛОЧНЫМ АРОМАТОМ]                   
                        </span>
                        <span class="menu-bar-item-price">
                            500 мл. ~199
                        </span>
                        <span class="menu-bar-item-price">
                            750 мл. ~249
                        </span>
                    </div>    
                </div>
            </div>    

            <div class="food-menu-advertisment" id="f_hot_coctails">
                <span>
                    горячие коктейли ● 750 мл ● 349<i class="fas fa-ruble-sign"></i>
                </span>
            </div>
            
            <div class="food-menu-menu grid">
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/bar/tea-yagodniy.jpg" data-fancybox="image-tea-yagod" data-caption="Чай ягодный">
                            <img src="img/menu/bar/tea-yagodniy.jpg" class="item-img img-fluid" title="Чай ягодный" alt="Чай ягодный">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>чай ягодный</h3>
                        <span class="menu-bar-item-description">
                            [чай ягодный]                 
                        </span>
                        <span class="menu-bar-item-price">
                            750 мл. ~349
                        </span>
                    </div>    
                </div>
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/bar/tea-milk-imb.jpg" data-fancybox="image-tea-imb" data-caption="Чай молочный с имбирем">
                            <img src="img/menu/bar/tea-milk-imb.jpg" class="item-img img-fluid" title="Чай молочный с имбирем" alt="Чай молочный с имбирем">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>чай молочный с имбирем</h3>
                        <span class="menu-bar-item-description">
                            [чай молочный с имбирем]                 
                        </span>
                        <span class="menu-bar-item-price">
                            750 мл. ~349
                        </span>
                    </div>    
                </div>
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/bar/tea-smor.jpg" data-fancybox="image-tea-smo" data-caption="Чай со смородиной и мятой">
                            <img src="img/menu/bar/tea-smor.jpg" class="item-img img-fluid" title="Чай со смородиной и мятой" alt="Чай со смородиной и мятой">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>чай со смородиной и мятой</h3>
                        <span class="menu-bar-item-description">
                            [чай со смородиной и мятой]                 
                        </span>
                        <span class="menu-bar-item-price">
                            750 мл. ~349
                        </span>
                    </div>    
                </div>
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/bar/tea-malina.jpg" data-fancybox="image-tea-med" data-caption="Чай с малиной и медом">
                            <img src="img/menu/bar/tea-malina.jpg" class="item-img img-fluid" title="Чай с малиной и медом" alt="Чай с малиной и медом">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>чай с малиной и медом</h3>
                        <span class="menu-bar-item-description">
                            [чай с малиной и медом]                 
                        </span>
                        <span class="menu-bar-item-price">
                            750 мл. ~349
                        </span>
                    </div>    
                </div>
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/bar/tea-apple.jpg" data-fancybox="image-tea-appl" data-caption="Чай травяной с яблоком и специями">
                            <img src="img/menu/bar/tea-apple.jpg" class="item-img img-fluid" title="Чай травяной с яблоком и специями" alt="Чай травяной с яблоком и специями">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>чай травяной с яблоком и специями</h3>
                        <span class="menu-bar-item-description">
                            [чай травяной с яблоком и специями]                 
                        </span>
                        <span class="menu-bar-item-price">
                            750 мл. ~349
                        </span>
                    </div>    
                </div>
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/bar/tea-oblepiha.jpg" data-fancybox="image-tea-oblepiha" data-caption="Чай облепиховый">
                            <img src="img/menu/bar/tea-oblepiha.jpg" class="item-img img-fluid" title="Чай облепиховый" alt="Чай облепиховый">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>чай облепиховый</h3>
                        <span class="menu-bar-item-description">
                            [чай облепиховый]                 
                        </span>
                        <span class="menu-bar-item-price">
                            750 мл. ~349
                        </span>
                    </div>    
                </div>
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/bar/tea-chabrec.jpg" data-fancybox="image-tea-chabr" data-caption="Чай брусничный с чабрецом и мятой">
                            <img src="img/menu/bar/tea-chabrec.jpg" class="item-img img-fluid" title="Чай брусничный с чабрецом и мятой" alt="Чай брусничный с чабрецом и мятой">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>чай брусничный с чабрецом и мятой</h3>
                        <span class="menu-bar-item-description">
                            [чай брусничный с чабрецом и мятой]                 
                        </span>
                        <span class="menu-bar-item-price">
                            750 мл. ~349
                        </span>
                    </div>    
                </div>
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/bar/tea-spicy.jpg" data-fancybox="image-tea-spicy" data-caption="Спайси чай">
                            <img src="img/menu/bar/tea-spicy.jpg" class="item-img img-fluid" title="Спайси чай" alt="Спайси чай">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>спайси чай</h3>
                        <span class="menu-bar-item-description">
                            [спайси чай]                 
                        </span>
                        <span class="menu-bar-item-price">
                            750 мл. ~349
                        </span>
                    </div>    
                </div>
            </div>

            <div class="food-menu-advertisment" id="f_coffee">
                <span>
                    кофе ● от 99<i class="fas fa-ruble-sign"></i>
                </span>
            </div>

            <div class="food-menu-menu grid">
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/bar/espresso.jpg" data-fancybox="image-espresso" data-caption="Эспрессо">
                            <img src="img/menu/bar/espresso.jpg" class="item-img img-fluid" title="Эспрессо" alt="Эспрессо">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>эспрессо</h3>
                        <span class="menu-bar-item-description">
                            [50 мл./5 гр.]                 
                        </span>
                        <span class="menu-bar-item-price">
                            ~99
                        </span>
                    </div>    
                </div>
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/bar/americano.jpg" data-fancybox="image-americano" data-caption="Американо">
                            <img src="img/menu/bar/americano.jpg" class="item-img img-fluid" title="Американо" alt="Американо">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>американо</h3>
                        <span class="menu-bar-item-description">
                            [120 мл./10 гр.]                 
                        </span>
                        <span class="menu-bar-item-price">
                            ~129
                        </span>
                    </div>    
                </div>
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/bar/kappuccino.jpg" data-fancybox="image-cappucino" data-caption="Капуччино">
                            <img src="img/menu/bar/kappuccino.jpg" class="item-img img-fluid" title="Капуччино" alt="Капуччино">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>капуччино</h3>
                        <span class="menu-bar-item-description">
                            [150 мл./10 гр.]                 
                        </span>
                        <span class="menu-bar-item-price">
                            ~149
                        </span>
                    </div>    
                </div>
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/bar/glisse.jpg" data-fancybox="image-glicce" data-caption="Гляссе">
                            <img src="img/menu/bar/glisse.jpg" class="item-img img-fluid" title="Гляссе" alt="Гляссе">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>гляссе</h3>
                        <span class="menu-bar-item-description">
                            [105 мл./10 гр.]                 
                        </span>
                        <span class="menu-bar-item-price">
                            ~149
                        </span>
                    </div>    
                </div>
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/bar/latte.jpg" data-fancybox="image-latte" data-caption="Латте">
                            <img src="img/menu/bar/latte.jpg" class="item-img img-fluid" title="Латте" alt="Латте">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>латте</h3>
                        <span class="menu-bar-item-description">
                            [180 мл./10 гр.]                 
                        </span>
                        <span class="menu-bar-item-price">
                            ~149
                        </span>
                    </div>    
                </div>
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/bar/mocco.jpg" data-fancybox="image-mocco" data-caption="Мокко">
                            <img src="img/menu/bar/mocco.jpg" class="item-img img-fluid" title="Мокко" alt="Мокко">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>мокко</h3>
                        <span class="menu-bar-item-description">
                            [180 мл./10 гр.]                 
                        </span>
                        <span class="menu-bar-item-price">
                            ~199
                        </span>
                    </div>    
                </div>
            </div>

            <div class="food-menu-advertisment" id="f_cold_drinks">
                <span>
                    Холодные напитки ● от 79<i class="fas fa-ruble-sign"></i>
                </span>
            </div>
            
            <div class="food-menu-menu grid">
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/bar/fresh.jpg" data-fancybox="image-fresh" data-caption="Фреш">
                            <img src="img/menu/bar/fresh.jpg" class="item-img img-fluid" title="Фреш" alt="Фреш">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>фреши</h3>
                        <span class="menu-bar-item-description">
                            [апельсин, грейпфрут]                 
                        </span>
                        <span class="menu-bar-item-price">
                            200 мл. ~199
                        </span>
                        <span class="menu-bar-item-price">
                            400 мл. ~299
                        </span>
                    </div>    
                </div>
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/bar/mors.jpg" data-fancybox="image-homemors" data-caption="омашний морс">
                            <img src="img/menu/bar/mors.jpg" class="item-img img-fluid" title="омашний морс" alt="омашний морс">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>Домашний морс</h3>
                        <span class="menu-bar-item-description">
                            [клюква, малина]                 
                        </span>
                        <span class="menu-bar-item-price">
                            200 мл. ~99
                        </span>
                        <span class="menu-bar-item-price">
                            400 мл. ~149
                        </span>
                        <span class="menu-bar-item-price">
                            1000 мл. ~199
                        </span>
                    </div>    
                </div>
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/bar/cola.jpg" data-fancybox="image-coca-cola" data-caption="coca-cola">
                            <img src="img/menu/bar/cola.jpg" class="item-img img-fluid" title="coca-cola" alt="coca-cola">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>coca-cola / fanta / sprite</h3>
                        <span class="menu-bar-item-description">
                            [ж/б]                 
                        </span>
                        <span class="menu-bar-item-price">
                            330 мл. ~99
                        </span>
                    </div>    
                </div>
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/bar/bonaqua.jpg" data-fancybox="image-bonaqua" data-caption="bonaqua">
                            <img src="img/menu/bar/bonaqua.jpg" class="item-img img-fluid" title="bonaqua" alt="bonaqua">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>bonaqua</h3>
                        <span class="menu-bar-item-description">
                            [газ. / негаз.]                 
                        </span>
                        <span class="menu-bar-item-price">
                            500 мл. ~99
                        </span>
                    </div>    
                </div>
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/bar/ever.jpg" data-fancybox="image-evervess" data-caption="evervess">
                            <img src="img/menu/bar/ever.jpg" class="item-img img-fluid" title="evervess" alt="evervess">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>evervess имбирный эль</h3>
                        <span class="menu-bar-item-description">
                            [газированный напиток / ж/б]                 
                        </span>
                        <span class="menu-bar-item-price">
                            250 мл. ~99
                        </span>
                    </div>    
                </div>
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/bar/juice.jpg" data-fancybox="image-juce" data-caption="Соки">
                            <img src="img/menu/bar/juice.jpg" class="item-img img-fluid" title="Соки" alt="Соки">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>соки и нектары</h3>
                        <span class="menu-bar-item-description">
                            [в ассортименте]                 
                        </span>
                        <span class="menu-bar-item-price">
                            200 мл. ~79
                        </span>
                        <span class="menu-bar-item-price">
                            400 мл. ~99
                        </span>
                    </div>    
                </div>
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/bar/aqua-natia.jpg" data-fancybox="image-acqua-natia" data-caption="acqua natia">
                            <img src="img/menu/bar/aqua-natia.jpg" class="item-img img-fluid" title="acqua natia" alt="acqua natia">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>вода acqua natia</h3>
                        <span class="menu-bar-item-description">
                            [негаз. / ст. бут.]                 
                        </span>
                        <span class="menu-bar-item-price">
                            330 мл.  ~149
                        </span>
                    </div>    
                </div>
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/bar/ferrarele.jpg" data-fancybox="image-ferrarelle" data-caption="ferrarelle">
                            <img src="img/menu/bar/ferrarele.jpg" class="item-img img-fluid" title="ferrarelle" alt="ferrarelle">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>вода ferrarelle</h3>
                        <span class="menu-bar-item-description">
                            [газ. / ст. бут.]                 
                        </span>
                        <span class="menu-bar-item-price">
                            330 мл.  ~149
                        </span>
                    </div>    
                </div>
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/bar/red-bull.jpg" data-fancybox="image-ferrarelle" data-caption="ferrarelle">
                            <img src="img/menu/bar/red-bull.jpg" class="item-img img-fluid" title="ferrarelle" alt="ferrarelle">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>ред булл</h3>
                        <span class="menu-bar-item-description">
                            [ж/б]                 
                        </span>
                        <span class="menu-bar-item-price">
                            250 мл.  ~149
                        </span>
                    </div>    
                </div>
            </div>

            <div class="food-menu-advertisment" id="f_non_alco_coctails">
                <span>
                    безалкогольные коктейли ● от 299<i class="fas fa-ruble-sign"></i>
                </span>
            </div>

            <div class="food-menu-menu grid">
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/bar/dreams.jpg" data-fancybox="image-sweat-dreams" data-caption="Сладкие сны">
                            <img src="img/menu/bar/dreams.jpg" class="item-img img-fluid" title="Сладкие сны" alt="Сладкие сны">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>сладкие сны</h3>
                        <span class="menu-bar-item-description">
                            [ СПРАЙТ, BLUE CURASAO, SOUR MIX] <br/>
                            275 мл./ 20 гр.
                        </span>
                        <span class="menu-bar-item-price">
                            ~299
                        </span>
                    </div>    
                </div>  
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/bar/tropical.jpg" data-fancybox="image-tropicmix" data-caption="Тропический микс">
                            <img src="img/menu/bar/tropical.jpg" class="item-img img-fluid" title="Тропический микс" alt="Тропический микс">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>тропический микс</h3>
                        <span class="menu-bar-item-description">
                            [СОДОВАЯ, СИРОП МАРАКУЙЯ, ДЫНЯ И МЯТНЫЙ СИРОП, ЛИМОН] <br/>
                            190 мл./ 20 гр.
                        </span>
                        <span class="menu-bar-item-price">
                            ~299
                        </span>
                    </div>    
                </div>  
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/bar/dream-pink.jpg" data-fancybox="image-pinkdream" data-caption="Розовая мечта">
                            <img src="img/menu/bar/dream-pink.jpg" class="item-img img-fluid" title="Розовая мечта" alt="Розовая мечта">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>розовая мечта</h3>
                        <span class="menu-bar-item-description">
                            [МОЛОКО, МОРОЖЕНОЕ, БАНАН, КЛУБНИЧНЫЙ СИРОП, ЛЕД] <br/>
                            350 мл.
                        </span>
                        <span class="menu-bar-item-price">
                            ~299
                        </span>
                    </div>    
                </div>  
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/bar/bomb-kiwi.jpg" data-fancybox="image-frutobomb" data-caption="Фрутобомба киви">
                            <img src="img/menu/bar/bomb-kiwi.jpg" class="item-img img-fluid" title="Фрутобомба киви" alt="Фрутобомба киви">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>фрутобомба киви</h3>
                        <span class="menu-bar-item-description">
                            [БАНАН, КИВИ, СОК ПЕРСИКОВЫЙ, СИРОП BLUE CURACAO, ЛЕД]<br/>
                            250 мл.
                        </span>
                        <span class="menu-bar-item-price">
                            ~299
                        </span>
                    </div>    
                </div>  
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/bar/bomb-banan.jpg" data-fancybox="image-frutobomb-banana" data-caption="Фрутобомба банан">
                            <img src="img/menu/bar/bomb-banan.jpg" class="item-img img-fluid" title="Фрутобомба банан" alt="Фрутобомба банан">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>фрутобомба банан</h3>
                        <span class="menu-bar-item-description">
                            [БАНАН, СОК ПЕРСИКОВЫЙ, СИРОП GRENADINE, ЛЕД]<br/>
                            250 мл.
                        </span>
                        <span class="menu-bar-item-price">
                            ~299
                        </span>
                    </div>    
                </div>  
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/bar/mojito.jpg" data-fancybox="image-mohito" data-caption="Мохито">
                            <img src="img/menu/bar/mojito.jpg" class="item-img img-fluid" title="Мохито" alt="Мохито">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>мохито</h3>
                        <span class="menu-bar-item-description">
                            [СОДОВАЯ, ЛИСТЬЯ МЯТЫ, ЛАЙМ, ЛЕД]<br/>
                            220 мл.
                        </span>
                        <span class="menu-bar-item-price">
                            ~299
                        </span>
                    </div>    
                </div>  
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/bar/ceh13.jpg" data-fancybox="image-ceh13" data-caption="Цех №13">
                            <img src="img/menu/bar/ceh13.jpg" class="item-img img-fluid" title="Цех №13" alt="Цех №13">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>цех №13</h3>
                        <span class="menu-bar-item-description">
                            [АПЕЛЬСИНОВЫЙ СОК, СОДОВАЯ, СОК ЛИМОНА, 
                            КЛУБНИЧНЫЙ СИРОП, СИРОП GRENADINE, АПЕЛЬСИН, ЛЕД]<br/>
                            290/10 мл.
                        </span>
                        <span class="menu-bar-item-price">
                            ~299
                        </span>
                    </div>    
                </div>  
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/bar/frozen.jpg" data-fancybox="image-frozenv" data-caption="Фроузен вишня">
                            <img src="img/menu/bar/frozen.jpg" class="item-img img-fluid" title="Фроузен вишня" alt="Фроузен вишня">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>фроузен вишня</h3>
                        <span class="menu-bar-item-description">
                            [БАНАН, ВИШНЯ С/М, СОК ПЕРСИКОВЫЙ,
                            СИРОП ВИШНЕВЫЙ, ЛЕД]<br/>
                            340 мл.
                        </span>
                        <span class="menu-bar-item-price">
                            ~299
                        </span>
                    </div>    
                </div>  
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/bar/mojito-imbir.jpg" data-fancybox="image-mohitoimb" data-caption="Имбирный мохито">
                            <img src="img/menu/bar/mojito-imbir.jpg" class="item-img img-fluid" title="Имбирный мохито" alt="Имбирный мохито">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>имбирный мохито</h3>
                        <span class="menu-bar-item-description">
                            [ИМБИРНЫЙ ЭЛЬ, МЯТА, ЛАЙМ, ЛЕД, САХАР]<br/>
                            350 мл.
                        </span>
                        <span class="menu-bar-item-price">
                            ~299
                        </span>
                    </div>    
                </div>  
            </div>

            <div class="food-menu-advertisment" id="f_lemonades">
                <span>
                    Лимонады ● от 349<i class="fas fa-ruble-sign"></i>
                </span>
            </div>

            <div class="food-menu-menu grid">
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/bar/lemonad-exotic.jpg" data-fancybox="image-limondaexotic" data-caption="Лимонад экзотик">
                            <img src="img/menu/bar/lemonad-exotic.jpg" class="item-img img-fluid" title="Лимонад экзотик" alt="Лимонад экзотик">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>лимонад экзотик</h3>
                        <span class="menu-bar-item-description">
                            [СОК АНАНАС, СОК ПЕРСИК, СИРОП МАРАКУЙЯ,
                            СИРОП ГРЕНАДИН, ЛЕД, ГАЗ.ВОДА]<br/>
                            1000 мл.
                        </span>
                        <span class="menu-bar-item-price">
                            ~349
                        </span>
                    </div>    
                </div> 
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/bar/lemonad-citrus.jpg" data-fancybox="image-limonadcitrus" data-caption="Лимонад цитрусовый">
                            <img src="img/menu/bar/lemonad-citrus.jpg" class="item-img img-fluid" title="Лимонад цитрусовый" alt="Лимонад цитрусовый">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>лимонад цитрусовый</h3>
                        <span class="menu-bar-item-description">
                            [АПЕЛЬСИН, ЛИМОН, ЛАЙМ, САУЭРМИКС,
                            ЛЕД, ГАЗ.ВОДА]<br/>
                            1000 мл.
                        </span>
                        <span class="menu-bar-item-price">
                            ~349
                        </span>
                    </div>    
                </div> 
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/bar/lemonad-vishn.jpg" data-fancybox="image-limonadvishn" data-caption="Лимонад вишня-мята">
                            <img src="img/menu/bar/lemonad-vishn.jpg" class="item-img img-fluid" title="Лимонад вишня-мята" alt="Лимонад вишня-мята">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>лимонад вишня-мята</h3>
                        <span class="menu-bar-item-description">
                            [ВИШНЯ С/М, СИРОП ВИШНЯ, МЯТА,СИРОП МЯТА,СОК ЛИМОНА,
                            ВОДА ГАЗИРОВАННАЯ]<br/>
                            1000 мл.
                        </span>
                        <span class="menu-bar-item-price">
                            ~349
                        </span>
                    </div>    
                </div> 
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/bar/lemonad-y.jpg" data-fancybox="image-limonadyagoda" data-caption="Лимонад ягодный">
                            <img src="img/menu/bar/lemonad-y.jpg" class="item-img img-fluid" title="Лимонад ягодный" alt="Лимонад ягодный">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>лимонад ягодный</h3>
                        <span class="menu-bar-item-description">
                            [СИРОП МАЛИНА, СИРОП ЧЕРНАЯ СМОРОДИНА,
                            СИРОП КЛУБНИКА, СИРОП МЯТА,
                            МАЛИНА С/Мб, ЕЖЕВИКА С/М, МЯТА, ЛЕД, ГАЗ.ВОДА]<br/>
                            1000 мл.
                        </span>
                        <span class="menu-bar-item-price">
                            ~349
                        </span>
                    </div>    
                </div> 
            </div>

            <div class="food-menu-advertisment" id="f_milkshakes">
                <span>
                    Милкшейки ● от 299<i class="fas fa-ruble-sign"></i>
                </span>
            </div>
            
            <div class="food-menu-menu grid">
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <div class="new-label"></div>
                        <a href="img/menu/bar/chel.jpg" data-fancybox="image-prman" data-caption="Пряничный человек">
                            <img src="img/menu/bar/chel.jpg" class="item-img img-fluid" title="Пряничный человек" alt="Пряничный человек">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>пряничный человек</h3>
                        <span class="menu-bar-item-description">
                            [ОВСЯНОЕ ПЕЧЕНЬЕ, МОЛОКО, МОРОЖЕНОЕ
                            КОКОСОВЫЙ СИРОП, ТЕРТЫЙ ШОКОЛАД,
                            ШОКОЛАДНЫЕ ТРУБОЧКИ]<br/>
                            350 мл.
                        </span>
                        <span class="menu-bar-item-price">
                            ~299
                        </span>
                    </div>    
                </div>
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <div class="new-label"></div>
                        <a href="img/menu/bar/charlie.jpg" data-fancybox="image-charlie" data-caption="Чарли и шоколадная фабрика">
                            <img src="img/menu/bar/charlie.jpg" class="item-img img-fluid" title="Чарли и шоколадная фабрика" alt="Чарли и шоколадная фабрика">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>чарли и шоколадная фабрика</h3>
                        <span class="menu-bar-item-description">
                            [БАНАН, МОЛОКО, ШОКОЛАДНЫЙ ТОПИНГ, МОРОЖЕНОЕ, ОРЕО,
                            ШОКОЛАДНЫЕ ТРУБОЧКИ, ТЕРТЫЙ ШОКОЛАД]<br/>
                            350 мл.
                        </span>
                        <span class="menu-bar-item-price">
                            ~299
                        </span>
                    </div>    
                </div>
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <div class="new-label"></div>
                        <a href="img/menu/bar/pink-panther.jpg" data-fancybox="image-pinkpanther" data-caption="Розовая пантера">
                            <img src="img/menu/bar/pink-panther.jpg" class="item-img img-fluid" title="Розовая пантера" alt="Розовая пантера">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>розовая пантера</h3>
                        <span class="menu-bar-item-description">
                            [КЛУБНИКА, МОРОЖЕНОЕ, МОЛОКО, СЛИВКИ, КЛУБНИЧНЫЙ СИРОП]<br/>
                            350 мл.
                        </span>
                        <span class="menu-bar-item-price">
                            ~299
                        </span>
                    </div>    
                </div>
            </div>

        </div>

        <!--конец вкладка бар-->


        <!-- вкладка каляьны-->

        <div class="tabs__content animated fadeIn" id="sisha">

            <div class="food-menu-advertisment">
                <span>
                    кальяны ● от 899<i class="fas fa-ruble-sign"></i>
                </span>
            </div>

            <div class="food-menu-menu grid">
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/sisha/sisha.jpg" data-fancybox="image-alladin" data-caption="Алладин">
                            <img src="img/menu/sisha/sisha.jpg" class="item-img img-fluid" title="Алладин">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>алладин</h3>
                        <span class="menu-bar-item-description">
                            [КАЛЬЯН НА ВОДЕ, ТАБАЧНАЯ СМЕСЬ НА ВЫБОР. БЕЗ НИКОТИНА]
                        </span>
                        <span class="menu-bar-item-price">
                            ~899
                        </span>
                        <span class="menu-item-dop">
                            замена обычной чаши 499<strong>j</strong>
                        </span>
                        <span class="menu-item-dop">
                            замена фруктовой чаши 799<strong>j</strong>
                        </span>
                    </div>    
                </div>
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/sisha/sisha-juice.jpg" data-fancybox="image-shaherizada" data-caption="Шахерезада">
                            <img src="img/menu/sisha/sisha-juice.jpg" class="item-img img-fluid" title="Шахерезада">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>шахерезада</h3>
                        <span class="menu-bar-item-description">
                            [КАЛЬЯН НА СОКЕ, ТАБАЧНАЯ СМЕСЬ НА ВЫБОР. БЕЗ НИКОТИНА]
                        </span>
                        <span class="menu-bar-item-price">
                            ~999
                        </span>
                        <span class="menu-item-dop">
                            замена обычной чаши 499<strong>j</strong>
                        </span>
                        <span class="menu-item-dop">
                            замена фруктовой чаши 799<strong>j</strong>
                        </span>
                    </div>    
                </div>
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/sisha/sisha-milk.jpg" data-fancybox="image-garem" data-caption="Мечта гарема">
                            <img src="img/menu/sisha/sisha-milk.jpg" class="item-img img-fluid" title="Мечта гарема">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>мечта гарема</h3>
                        <span class="menu-bar-item-description">
                            [КАЛЬЯН НА МОЛОКЕ, ТАБАЧНАЯ СМЕСЬ НА ВЫБОР. БЕЗ НИКОТИНА]
                        </span>
                        <span class="menu-bar-item-price">
                            ~1199
                        </span>
                        <span class="menu-item-dop">
                            замена обычной чаши 499<strong>j</strong>
                        </span>
                        <span class="menu-item-dop">
                            замена фруктовой чаши 799<strong>j</strong>
                        </span>
                    </div>    
                </div>
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/sisha/sisha-jango.jpg" data-fancybox="image-dgango" data-caption="Джанго">
                            <img src="img/menu/sisha/sisha-jango.jpg" class="item-img img-fluid" title="Джанго">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>джанго</h3>
                        <span class="menu-bar-item-description">
                            [КАЛЬЯН НА ВОДЕ, СОЧЕТАНИЕ ПРЕМИАЛЬНЫХ СМЕСЕЙ:
                            «МЯТА И ВИНОГРАД» ВМЕСТЕ С «ФРЕШ, ЛИМОН И МЕД». БЕЗ НИКОТИНА]
                        </span>
                        <span class="menu-bar-item-price">
                            ~1299
                        </span>
                        <span class="menu-item-dop">
                            замена обычной чаши 499<strong>j</strong>
                        </span>
                        <span class="menu-item-dop">
                            замена фруктовой чаши 799<strong>j</strong>
                        </span>
                    </div>    
                </div>
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/sisha/sisha-dream.jpg" data-fancybox="image-sheih" data-caption="Мечта шейха">
                            <img src="img/menu/sisha/sisha-dream.jpg" class="item-img img-fluid" title="Мечта шейха">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>мечта шейха</h3>
                        <span class="menu-bar-item-description">
                            [КАЛЬЯН НА ВОДЕ, ПРЕМИАЛЬНЫЕ ТАБАЧНЫЕ СМЕСИ НА ВЫБОР:
                            «КАРАМЕЛЬ, ПЕРСИК, ДЫНЯ, КОФЕ, ЯБЛОКО, КОНЬЯК». БЕЗ НИКОТИНА]
                        </span>
                        <span class="menu-bar-item-price">
                            ~1399
                        </span>
                        <span class="menu-item-dop">
                            замена обычной чаши 499<strong>j</strong>
                        </span>
                        <span class="menu-item-dop">
                            замена фруктовой чаши 799<strong>j</strong>
                        </span>
                    </div>    
                </div>
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/sisha/sisha-paradise.jpg" data-fancybox="image-paradise" data-caption="Парадайз">
                            <img src="img/menu/sisha/sisha-paradise.jpg" class="item-img img-fluid" title="Парадайз">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>парадайз</h3>
                        <span class="menu-bar-item-description">
                            [КАЛЬЯН НА ВОДЕ, ЧАША ИЗ ЯБЛОКА, ТАБАЧНАЯ СМЕСЬ НА ВЫБОР.
                            БЕЗ НИКОТИНА]
                        </span>
                        <span class="menu-bar-item-price">
                            ~1499
                        </span>
                        <span class="menu-item-dop">
                            замена обычной чаши 499<strong>j</strong>
                        </span>
                        <span class="menu-item-dop">
                            замена фруктовой чаши 799<strong>j</strong>
                        </span>
                    </div>    
                </div>
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/sisha/sisha-pharaon.jpg" data-fancybox="image-pharaon" data-caption="Фараон">
                            <img src="img/menu/sisha/sisha-pharaon.jpg" class="item-img img-fluid" title="Фараон">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>фараон</h3>
                        <span class="menu-bar-item-description">
                            [КАЛЬЯН НА ВОДЕ. ЧАША ИЗ ГРЕЙПФРУТА. ТАБАЧНАЯ СМЕСЬ НА ВЫБОР.
                            БЕЗ НИКОТИНА]
                        </span>
                        <span class="menu-bar-item-price">
                            ~1499
                        </span>
                        <span class="menu-item-dop">
                            замена обычной чаши 499<strong>j</strong>
                        </span>
                        <span class="menu-item-dop">
                            замена фруктовой чаши 799<strong>j</strong>
                        </span>
                    </div>    
                </div>
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/sisha/sisha-2.jpg" data-fancybox="image-titi-titi" data-caption="Нефертити">
                            <img src="img/menu/sisha/sisha-2.jpg" class="item-img img-fluid" title="Нефертити">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>нефертити</h3>
                        <span class="menu-bar-item-description">
                            [КАЛЬЯН НА ВОДЕ. ЧАША ИЗ АНАНАСА. ТАБАЧНАЯ СМЕСЬ НА ВЫБОР.
                            БЕЗ НИКОТИНА]
                        </span>
                        <span class="menu-bar-item-price">
                            ~1999
                        </span>
                        <span class="menu-item-dop">
                            замена обычной чаши 499<strong>j</strong>
                        </span>
                        <span class="menu-item-dop">
                            замена фруктовой чаши 799<strong>j</strong>
                        </span>
                    </div>    
                </div>
            </div>
        </div>

        <!--конец вкладка каляьны-->


    </div>
</section>

</div>    

<?php require_once __DIR__ . '/template/footer.php'; ?>
