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
                    <span class="price">от 599<i class="fas fa-ruble-sign"></i></span>
                </div>
                <div class="item">
                    <a href="#hol_zakuski"><img src="img/menu/menu-categories/hol_zakuski.jpg" alt="Холодные Закуски"/></a>
                    <div class="title">Холодные Закуски</div>
                    <span class="price">от 299<i class="fas fa-ruble-sign"></i></span>
                </div>
                <div class="item">
                    <a href="#piv_zakuski"><img src="img/menu/menu-categories/piv_zakuski.jpg" alt="Пивные Закуски"/></a>
                    <div class="title">Пивные Закуски</div>
                    <span class="price">от 299<i class="fas fa-ruble-sign"></i></span>
                </div>
                <div class="item">
                    <a href="#salads"><img src="img/menu/menu-categories/salads.jpg" alt="Салаты"/></a>
                    <div class="title">Салаты</div>
                    <span class="price">от 399<i class="fas fa-ruble-sign"></i></span>
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
<!--                <div class="item">
                    <a href="#steiks"><img src="img/menu/menu-categories/steiks.jpg" alt="Стейки"/></a>
                    <div class="title">Стейки</div>
                    <span class="price">от 499<i class="fas fa-ruble-sign"></i></span>
                </div>-->
                <div class="item">
                    <a href="#garniry"><img src="img/menu/menu-categories/garniry.jpg" alt="Гарниры"/></a>
                    <div class="title">Гарниры</div>
                    <span class="price">от 149<i class="fas fa-ruble-sign"></i></span>
                </div>
                <div class="item">
                    <a href="#burgers"><img src="img/menu/menu-categories/burgers.jpg" alt="Бургеры"/></a>
                    <div class="title">Бургеры и сендвичи</div>
                    <span class="price">от 399<i class="fas fa-ruble-sign"></i></span>
                </div>
<!--                <div class="item">
                    <a href="#hot_dogs"><img src="img/menu/menu-categories/hot_dogs.jpg" alt="Бешенные Псы"/></a>
                    <div class="title">Бешенные Псы</div>
                    <span class="price">от 349<i class="fas fa-ruble-sign"></i></span>
                </div>-->
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
                    <span class="price">от 199<i class="fas fa-ruble-sign"></i></span>
                </div>
                <div class="item">
                    <a href="#f_vine"><img src="img/menu/menu-categories/vine.jpg" alt="Вино"/></a>
                    <div class="title">Вино</div>
                    <span class="price">от 249<i class="fas fa-ruble-sign"></i></span>
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
                    <span class="price">от 129<i class="fas fa-ruble-sign"></i></span>
                </div>
                <div class="item">
                    <a href="#f_samogon"><img src="img/menu/menu-categories/samogon.jpg" alt="Самогон"/></a>
                    <div class="title">Самогон</div>
                    <span class="price">от 149<i class="fas fa-ruble-sign"></i></span>
                </div>
                <div class="item">
                    <a href="#f_whisky"><img src="img/menu/menu-categories/whisky.jpg" alt="Виски"/></a>
                    <div class="title">Виски</div>
                    <span class="price">от 199<i class="fas fa-ruble-sign"></i></span>
                </div>
                <div class="item">
                    <a href="#f_jin"><img src="img/menu/menu-categories/jin.jpg" alt="Джин"/></a>
                    <div class="title">Джин</div>
                    <span class="price">от 299<i class="fas fa-ruble-sign"></i></span>
                </div>
                <div class="item">
                    <a href="#f_rum"><img src="img/menu/menu-categories/rum.jpg" alt="Ром"/></a>
                    <div class="title">Ром</div>
                    <span class="price">от 299<i class="fas fa-ruble-sign"></i></span>
                </div>
                <div class="item">
                    <a href="#f_tequila"><img src="img/menu/menu-categories/tequila.jpg" alt="Текила"/></a>
                    <div class="title">Текила</div>
                    <span class="price">от 299<i class="fas fa-ruble-sign"></i></span>
                </div>
                <div class="item">
                    <a href="#f_cogniac"><img src="img/menu/menu-categories/cogniac.jpg" alt="Коньяк"/></a>
                    <div class="title">Коньяк</div>
                    <span class="price">от 199<i class="fas fa-ruble-sign"></i></span>
                </div>
                <div class="item">
                    <a href="#f_vermut"><img src="img/menu/menu-categories/vermut.jpg" alt="Вермут"/></a>
                    <div class="title">Вермут</div>
                    <span class="price">от 299<i class="fas fa-ruble-sign"></i></span>
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
                    <span class="price">от 299<i class="fas fa-ruble-sign"></i></span>
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
                    блюда на компанию ● от 599<i class="fas fa-ruble-sign"></i>
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
                        <span class="menu-bar-item-description">
                            [Куриные колбаски, крылышки и наггетсы,
                            картофельные крокеты, картофель фри и соуса]
                        </span>
<!--                        <span class="menu-bar-item-weight">
                            150/100/90/80/20/20 гр.
                        </span>-->
                        <span class="menu-bar-item-price">
                            ~999
                        </span>
                    </div>    
                </div>
<!--                <div class="food-menu-item grid">
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
                </div>-->
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/osn-menu/beer-set-big.jpg" data-fancybox="image-beer-set" data-caption="Пивной сет">
                            <img src="img/menu/osn-menu/beer-set-big.jpg" class="item-img img-fluid" title="Пивной Сет">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>пивной сет</h3>
                        <span class="menu-bar-item-description">
                            [ Сырные палочки, луковые кольца, 
                            картофельные крокеты, картофель фри и соуса ]
                        </span>
<!--                        <span class="menu-bar-item-weight">
                            80/100/110/90/20/20 гр.
                        </span>-->
                        <span class="menu-bar-item-price">
                            ~599
                        </span>
                    </div>    
                </div>
<!--                <div class="food-menu-item grid">
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
                </div>-->
<!--                <div class="food-menu-item grid">
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
                </div>-->
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/osn-menu/jackpot.jpg" data-fancybox="image-jack-pot" data-caption="Джек Пот">
                            <img src="img/menu/osn-menu/jackpot.jpg" class="item-img img-fluid" title="джек пот" alt="">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>джек пот</h3>
                        <span class="menu-bar-item-description">
                            [Колбаски куриные и свиные, 
                            колбаски-улитки, куриные крылышки, 
                            свиные ребрышки, сырные палочки, луковые
                            кольца, куриные наггетсы , картофельные 
                            крокеты, картофель фри, помидоры черри
                            и соуса]
                        </span>
<!--                        <span class="menu-bar-item-weight">
                            600/350/250/140/150/120/
                            200/240/20/20/20/20/20 гр.
                        </span>-->
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
<!--                <div class="food-menu-item grid">
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
                </div>-->
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/osn-menu/seledka-kart.jpg" data-fancybox="image-seld-kartofel" data-caption="Cеледочка с картофелем">
                            <img src="img/menu/osn-menu/seledka-kart.jpg" class="item-img img-fluid" title="Cеледочка с картофелем" alt="">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>селедочка с картофелем</h3>
                        <span class="menu-bar-item-description">
                            [ Селедочка с картофелем и красным луком ]
                        </span>
<!--                        <span class="menu-bar-item-weight">
                            100/120/20 гр.
                        </span>-->
                        <span class="menu-bar-item-price">
                            ~299
                        </span>
                    </div>    
                </div>
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/osn-menu/chezze-plate.jpg" data-fancybox="image-cheese-assort" data-caption="Сырное тарелка">
                            <img src="img/menu/osn-menu/chezze-plate.jpg" class="item-img img-fluid" title="Сырное тарелка" alt="">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>сырная тарелка</h3>
                        <span class="menu-bar-item-description">
                            [ Ассорти из четырех сыров с виноградом,
                            орехами, медом и грушей ]
                        </span>
<!--                        <span class="menu-bar-item-weight">
                            210 гр.
                        </span>-->
                        <span class="menu-bar-item-price">
                            ~499
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
                            [ Ассорти из свежих овощей с листьми салата ]
                        </span>
<!--                        <span class="menu-bar-item-weight">
                            300 гр.
                        </span>-->
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
                            [ Джерки из индейки, сырокопченые колбаски,
                            копченый сыр, гренки, сушеные анчоусы и соус BBQ ]
                        </span>
<!--                        <span class="menu-bar-item-weight">
                            130/20 гр.
                        </span>-->
                        <span class="menu-bar-item-price">
                            ~599
                        </span>
                    </div>    
                </div>
<!--                <div class="food-menu-item grid">
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
                </div>-->
            </div>                

            <div class="food-menu-advertisment" id="piv_zakuski">
                <span>
                    пивные закуски ● от 299<i class="fas fa-ruble-sign"></i>
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
                            [Куриные крылышки и соус BBQ] 
                        </span>
<!--                        <span class="menu-bar-item-weight">
                            265/20 гр.
                        </span>-->
                        <span class="menu-bar-item-price">
                            ~499
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
                            [Сыр, панировка, лесные ягоды и мята]
                        </span>
<!--                        <span class="menu-bar-item-weight">
                            120/80/20/20 гр.
                        </span>-->
                        <span class="menu-bar-item-price">
                            ~599
                        </span>
                    </div>    
                </div>
<!--                <div class="food-menu-item grid">
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
                </div>-->
<!--                <div class="food-menu-item grid">
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
                </div>-->
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/osn-menu/gedza.jpg" data-fancybox="image-gedza" data-caption="Гедза со свининой">
                            <img src="img/menu/osn-menu/gedza.jpg" class="item-img img-fluid" title="Гедза со свининой" alt="">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>гедза со свининой</h3>
                        <span class="menu-bar-item-description">
                            [Гедза с говядиной и соус]
                        </span>
<!--                        <span class="menu-bar-item-weight">
                            120/20 гр.
                        </span>-->
                        <span class="menu-bar-item-price">
                            ~299
                        </span>
                    </div>    
                </div>
<!--                <div class="food-menu-item grid">
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
                </div>-->
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <!--<div class="hot-label"></div>-->
                        <a href="img/menu/osn-menu/kessadillia-chiken.jpg" data-fancybox="image-kesadilia" data-caption="Кесадилья с курицей">
                            <img src="img/menu/osn-menu/kessadillia-chiken.jpg" class="item-img img-fluid" title="Кесадилья с курицей" alt="">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>кесадилья с курицей</h3>
                        <span class="menu-bar-item-description">
                            [Тортилья, сыр, овощи, куриная грудка и соуса]
                        </span>
<!--                        <span class="menu-bar-item-weight">
                            230/20/20 гр.
                        </span>-->
                        <span class="menu-bar-item-price">
                            ~399
                        </span>
                    </div>    
                </div>
            </div>

            <div class="food-menu-advertisment" id="salads">
                <span>
                    салаты ● от 399<i class="fas fa-ruble-sign"></i>
                </span>
            </div>

            <div class="food-menu-menu grid">
<!--                <div class="food-menu-item grid">
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
                </div>-->
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/osn-menu/ceazar-chiken.jpg" data-fancybox="image-caesar-salad" data-caption="Цезарь с курицей">
                            <img src="img/menu/osn-menu/ceazar-chiken.jpg" class="item-img img-fluid" title="Цезарь с курицей" alt="">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>цезарь с курицей</h3>
                        <span class="menu-bar-item-description">
                            [Куриная грудка, листья салата, сыр, перепелиные 
                            яйца, помидоры черри, соус  и гренки]
                        </span>
<!--                        <span class="menu-bar-item-weight">
                            180 гр.
                        </span>-->
                        <span class="menu-bar-item-price">
                            ~399
                        </span>
                    </div>    
                </div>
<!--                <div class="food-menu-item grid">
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
                </div>-->
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/osn-menu/gril-salad.jpg" data-fancybox="image-grille-salad" data-caption="Гриль салат">
                            <img src="img/menu/osn-menu/gril-salad.jpg" class="item-img img-fluid" title="Гриль салат" alt="">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>гриль салат</h3>
                        <span class="menu-bar-item-description">
                            [Овощи гриль с куриной грудкой, 
                            листьями салата и соусом]
                        </span>
<!--                        <span class="menu-bar-item-weight">
                            170 гр.
                        </span>-->
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
                            [Креветки, листья салата, сыр, перепелиные яйца, 
                            помидоры черри, соус  и гренки]
                        </span>
<!--                        <span class="menu-bar-item-weight">
                            170 гр.
                        </span>-->
                        <span class="menu-bar-item-price">
                            ~499
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
                            [Борщ с салом, горчицей и сметаной]
                        </span>
<!--                        <span class="menu-bar-item-weight">
                            250/20/15/20 гр.
                        </span>-->
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
<!--                        <span class="menu-bar-item-description" style="color:#f2c946">
                            [ЛУЧШЕЕ СРЕДСТВО ПРИЙТИ В СЕБЯ ПОСЛЕ
                            «ТРУДНОГО» ВЕЧЕРА / МГНОВЕННО ВЕРНЕТ
                            ВАС К ЖИЗНИ]
                        </span>-->
                        <span class="menu-bar-item-description">
                            [Солянка со сметаной]
                        </span>
<!--                        <span class="menu-bar-item-weight">
                            250/15/20 гр.
                        </span>-->
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
                            [Сливочный суп с семгой и чесночным багетом]
                        </span>
<!--                        <span class="menu-bar-item-weight">
                            250 гр.
                        </span>-->
                        <span class="menu-bar-item-price">
                            ~299
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
                            [Креветки, шампиньоны, помидоры черри, 
                            пшеничная лапша и бульон Том Ям]
                        </span>
<!--                        <span class="menu-bar-item-weight">
                            250 гр.
                        </span>-->
                        <span class="menu-bar-item-price">
                            ~399
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
                        <div class="hit-label"></div>
                        <a href="img/menu/osn-menu/grill-rebra.jpg" data-fancybox="image-rebra-bbq" data-caption="Ребрышки свиные с соусом BBQ">
                            <img src="img/menu/osn-menu/grill-rebra.jpg" class="item-img img-fluid" title="Ребрышки свиные с соусом BBQ" alt="">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>Свиные ребрышки в глазури <strong style="color:red"> от Шефа</strong></h3>
                        <span class="menu-bar-item-description">
                            [Свиные ребрышки в апельсиновой глазури 
                            с соусом BBQ, картофельными дольками, микс салатом 
                            и помидорами черри]
                        </span>
<!--                        <span class="menu-bar-item-weight">
                            215/90/30/20 гр.
                        </span>-->
                        <span class="menu-bar-item-price">
                            ~799
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
                            [Жареный по-домашнему картофель с куриной грудкой,
                            шампиньонами, луком, сливочным соусом и солеными огурцами]
                        </span>
<!--                        <span class="menu-bar-item-weight">
                            350/30 гр.
                        </span>-->
                        <span class="menu-bar-item-price">
                            ~399
                        </span>
                        <span class="menu-item-dop">
                            ДОБАВЬ КУРИЦУ 99<strong>j</strong>
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
                        <span class="menu-bar-item-description">
                            [СТЕЙК ИЗ СЕМГИ С КАРТОФЕЛЕМ]
                        </span>
<!--                        <span class="menu-bar-item-weight">
                            250 гр.
                        </span>-->
                        <span class="menu-bar-item-price">
                            ~699
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
                            [КОТЛЕТА ИЗ ГОВЯДИНЫ, ЯЙЦО, СЫР ЧЕДДЕР]
                            [ПОДАЕТСЯ С КАРТОФЕЛЬНЫМИ ДОЛЬКАМИ]
                        </span>
<!--                        <span class="menu-bar-item-weight">
                            270 гр. в сыром виде
                        </span>-->
                        <span class="menu-bar-item-price">
                            ~599
                        </span>
                    </div>    
                </div>
<!--                <div class="food-menu-item grid">
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
                            280 гр.
                        </span>
                        <span class="menu-bar-item-price">
                            ~499
                        </span>
                    </div>    
                </div>-->
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/osn-menu/grill-kolbaski.jpg" data-fancybox="image-kolbaskizgar" data-caption="Колбаски-гриль с гарнирами и соусом BBQ">
                            <img src="img/menu/osn-menu/grill-kolbaski.jpg" class="item-img img-fluid" title="Колбаски-гриль с гарнирами и соусом BBQ" alt="">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>колбаски-гриль с гарнирами и соусом BBQ</h3>
                        <span class="menu-bar-item-description">
                            [<span style="color:#ffc800;display: inline">КУРИНЫЕ</span> / <span style="color:#59AA47;display: inline">СВИНЫЕ</span>]
                            [Колбаски с картофельными дольками, микс салатом и помидорами черри]
                        </span>
<!--                        <span class="menu-bar-item-weight">
                            150/90/75 гр.
                        </span>-->
                        <span class="menu-bar-item-price">
                            ~499
                        </span>
                        <span class="menu-item-dop">
                            ДОБАВЬ КОЛБАСКУ ЗА 99<strong>j</strong>
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
                        <h3>Индейка с картофельными дольками и овощами гриль</h3>
                        <span class="menu-bar-item-description">
                            [Стейк из грудки индейки с овощами гриль и
                            картофельными дольками]
                        </span>
<!--                        <span class="menu-bar-item-weight">
                            280 гр.
                        </span>-->
                        <span class="menu-bar-item-price">
                            ~599
                        </span>
                    </div>    
                </div>
<!--                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <div class="new-label"></div>
                        <a href="img/menu/osn-menu/shashliki-assorti.jpg" data-fancybox="image-shashliki-assorti" data-caption="Ассорти из шашлычков">
                            <img src="img/menu/osn-menu/shashliki-assorti.jpg" class="item-img img-fluid" title="Ассорти из шашлычков" alt="Ассорти из шашлычков">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>Ассорти из шашлычков</h3>
                        <span class="menu-bar-item-description">
                            [ШАШЛЫЧКИ ИЗ КРЕВЕТОК, ИНДЕЙКИ, ЧЕРРИ В БЕКОНЕ, ОВОЩИ-ГРИЛЬ]
                        </span>
                        <span class="menu-bar-item-weight">
                            200 гр.
                        </span>
                        <span class="menu-bar-item-price">
                            ~599
                        </span>
                    </div>    
                </div>-->
            </div>

            <div class="food-menu-advertisment" id="pasta">
                <span>
                    паста  ● от 399<i class="fas fa-ruble-sign"></i>
                </span>
            </div>

            <div class="food-menu-menu grid">
<!--                <div class="food-menu-item grid">
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
                            280 гр.
                        </span>
                        <span class="menu-bar-item-price">
                            ~499
                        </span>
                    </div>    
                </div>-->
<!--                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/osn-menu/fettuccini.jpg" data-fancybox="image-fettucini" data-caption="Феттучини с индейкой">
                            <img src="img/menu/osn-menu/fettuccini.jpg" class="item-img img-fluid" title="Феттучини с индейкой" alt="Феттучини с индейкой">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>феттучини с индейкой</h3>
                        <span class="menu-bar-item-description">
                            [ИНДЕЙКА, ЛУК, ГРИБЫ ШАМПИНЬОНЫ, СОУС ПЕСТО,
                            БУЛЬОН КУРИНЫЙ, ЧЕРРИ, ФЕТТУЧИНИ СО ШПИНАТОМ]
                        </span>
                        <span class="menu-bar-item-weight">
                            280 гр.
                        </span>
                        <span class="menu-bar-item-price">
                            ~399
                        </span>
                    </div>    
                </div>-->
<!--                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/osn-menu/spaggett-vetchina.jpg" data-fancybox="image-spaggett-vetchina" data-caption="Спагетти с ветчиной и грибами">
                            <img src="img/menu/osn-menu/spaggett-vetchina.jpg" class="item-img img-fluid" title="Спагетти с ветчиной и грибами" alt="Спагетти с ветчиной и грибами">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>Спагетти с ветчиной и грибами</h3>
                        <span class="menu-bar-item-description">
                            [СПАГЕТТИ С ВЕТЧИНОЙ И ШАМПИНЬОНАМИ В СЛИВОЧНОМ СОУСЕ]
                        </span>
                        <span class="menu-bar-item-weight">
                            280 гр.
                        </span>
                        <span class="menu-bar-item-price">
                            ~399
                        </span>
                    </div>    
                </div>-->
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/no-image.gif" data-fancybox="image-karbonara" data-caption="Спагетти карбонара">
                            <img src="img/no-image.gif" class="item-img img-fluid" title="Спагетти карбонара" alt="">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>Спагетти Нери с креветками и семгой </h3>
                        <span class="menu-bar-item-description">
                            [Семга, креветки, спагетти Нери, вяленые помидоры, черри и сливочный соус]
                        </span>
<!--                        <span class="menu-bar-item-weight">
                            280 гр.
                        </span>-->
                        <span class="menu-bar-item-price">
                            ~599
                        </span>
                    </div>    
                </div>
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
                            С НЕЖНЕЙШИМ БЕКОНОМ В СЛИВОЧНОМ
                            СОУСЕ С КУРИНЫМ ЯЙЦОМ]
                        </span>
<!--                        <span class="menu-bar-item-weight">
                            280 гр.
                        </span>-->
                        <span class="menu-bar-item-price">
                            ~399
                        </span>
                    </div>    
                </div>
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/osn-menu/lazania-boloneze.jpg" data-fancybox="image-lazania-boloneze" data-caption="Лазанья Болоньезе">
                            <img src="img/menu/osn-menu/lazania-boloneze.jpg" class="item-img img-fluid" title="Лазанья Болоньезе" alt="">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>лазанья болоньезе</h3>
                        <span class="menu-bar-item-description">
                            [Мясная лазанья с сыром моцарелла]
                        </span>
<!--                        <span class="menu-bar-item-weight">
                            30 гр.
                        </span>-->
                        <span class="menu-bar-item-price">
                            ~499
                        </span>
                    </div>    
                </div>
<!--                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <div class="new-label"></div>
                        <a href="img/menu/osn-menu/pepperoni.jpg" data-fancybox="image-pepperoni" data-caption="Пицца пепперони">
                            <img src="img/menu/osn-menu/pepperoni.jpg" class="item-img img-fluid" title="Пицца пепперони" alt="Пицца пепперони">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>Пицца пепперони</h3>
                        <span class="menu-bar-item-description">
                            [СОУС ТОМАТНЫЙ, СЫР МОЦАРЕЛЛА, ПЕППЕРОНИ, ПЕРЕЦ ЧЕРНЫЙ]
                        </span>
                        <span class="menu-bar-item-weight">
                            380 гр.
                        </span>
                        <span class="menu-bar-item-price">
                            ~399
                        </span>
                    </div>    
                </div>-->
<!--                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <div class="new-label"></div>
                        <a href="img/menu/osn-menu/pizza-cow.jpg" data-fancybox="image-pizza-cow" data-caption="Пицца с говядиной и беконом">
                            <img src="img/menu/osn-menu/pizza-cow.jpg" class="item-img img-fluid" title="Пицца с говядиной и беконом" alt="Пицца с говядиной и беконом">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>Пицца с говядиной и беконом</h3>
                        <span class="menu-bar-item-description">
                            [СОУС 1000 ОСТРОВОВ, СЫР МОЦАРЕЛЛА, СЫР ЧЕДДЕР,
                            ГОВЯДИНА, ПОМИДОРЫ, ОГУРЦЫ СОЛЕНЫЕ, БЕКОН,
                            ХАЛАПЕНЬО, КРАСНЫЙ ЛУК, ПЕРЕЦ ЧЕРНЫЙ]
                        </span>
                        <span class="menu-bar-item-weight">
                            380 гр.
                        </span>
                        <span class="menu-bar-item-price">
                            ~499
                        </span>
                    </div>    
                </div>-->
<!--                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <div class="new-label"></div>
                        <a href="img/menu/osn-menu/pizza-4-cheeze.jpg" data-fancybox="image-pizza-4-cheeze" data-caption="Пицца 4 сыра">
                            <img src="img/menu/osn-menu/pizza-4-cheeze.jpg" class="item-img img-fluid" title="Пицца 4 сыра" alt="Пицца 4 сыра">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>Пицца 4 сыра</h3>
                        <span class="menu-bar-item-description">
                            [СЛИВКИ, СЫР МОЦАРЕЛЛА, СЫР ЭДАМ, СЫР ЧЕДДЕР,
                            СЫР ДОРБЛЮ, ПЕРЕЦ ЧЕРНЫЙ]
                        </span>
                        <span class="menu-bar-item-weight">
                            380 гр.
                        </span>
                        <span class="menu-bar-item-price">
                            ~449
                        </span>
                    </div>    
                </div>-->
<!--                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <div class="new-label"></div>
                        <a href="img/menu/osn-menu/pizza-veget.jpg" data-fancybox="image-pizza-veget" data-caption="Пицца вегетарианская">
                            <img src="img/menu/osn-menu/pizza-veget.jpg" class="item-img img-fluid" title="Пицца вегетарианская" alt="Пицца вегетарианская">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>Пицца вегетарианская</h3>
                        <span class="menu-bar-item-description">
                            [ТОМАТНЫЙ СОУС, ПЕРЕЦ БОЛГАРСКИЙ, ШАМПИНЬОНЫ, КАБАЧКИ,
                            ЛУК КРАСНЫЙ, МАСЛИНЫ, ОЛИВКОВОЕ МАСЛО, СОЛЬ, ПЕРЕЦ]
                        </span>
                        <span class="menu-bar-item-weight">
                            380 гр.
                        </span>
                        <span class="menu-bar-item-price">
                            ~399
                        </span>
                    </div>    
                </div>-->
            </div>

<!--            <div class="food-menu-advertisment" id="steiks">
                <span>
                    стейки ● от 499<i class="fas fa-ruble-sign"></i>
                </span>
            </div>-->

<!--            <div class="food-menu-menu grid" >
                
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/osn-menu/steik-new-york-big.jpg" data-fancybox="image-steik-new-york" data-caption="Cтейк «нью-йорк»">
                            <img src="img/menu/osn-menu/steik-new-york-big.jpg" class="item-img img-fluid" title="Стейк «нью-йорк»" alt="Стейк «нью-йорк»">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>стейк стриплойн</h3>
                        <span class="menu-bar-item-description">
                            [НЕЖНЕЙШИЙ СТЕЙК ИЗ ГОВЯДИНЫ
                            ДЛЯ НАСТОЯЩИХ ЦЕНИТЕЛЕЙ МЯСА]
                        </span>
                        <span class="menu-bar-item-weight">
                            250 гр. в сыром виде
                        </span>
                        <span class="menu-bar-item-price">
                            ~1199
                        </span>
                    </div>    
                </div>
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <div class="new-label"></div>
                        <a href="img/menu/osn-menu/steik-ribay-big.jpg" data-fancybox="image-steik-ribay" data-caption="Стейк рибай">
                            <img src="img/menu/osn-menu/steik-ribay-big.jpg" class="item-img img-fluid" title="steik-ribay">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>стейк рибай</h3>
                        <span class="menu-bar-item-description">
                            [СТЕЙК ИЗ ГОВЯДИНЫ С КАРТОФЕЛЬНЫМИ ДОЛЬКАМИ]
                        </span>
                        <span class="menu-bar-item-weight">
                            250 гр. в сыром виде
                        </span>
                        <span class="menu-bar-item-price">
                            ~1599
                        </span>
                    </div>    
                </div>
               
            </div>-->

            <div class="food-menu-advertisment" id="garniry">
                <span>
                    гарниры ●  199<i class="fas fa-ruble-sign"></i>
                </span>
            </div>

            <div class="food-menu-menu grid" >
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/osn-menu/vegetables-big.jpg" data-fancybox="image-vegetables" data-caption="Овощи гриль">
                            <img src="img/menu/osn-menu/vegetables-big.jpg" class="item-img img-fluid" alt="vegetables">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>овощи гриль</h3>
                        <span class="menu-bar-item-description">
                            [Болгарский перец, баклажаны, грибы шампиньоны
                            и кабачки обжареные на гриле]
                        </span>
<!--                        <span class="menu-bar-item-weight">
                            130 гр.
                        </span>-->
                        <span class="menu-bar-item-price">
                            ~299
                        </span>
                    </div>    
                </div>
<!--                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/osn-menu/potato-mini.jpg" data-fancybox="image-potato-mini" data-caption="Мини - картофель">
                            <img src="img/menu/osn-menu/potato-mini.jpg" class="item-img img-fluid" alt="potato-mini">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>Мини - картофель</h3>
                        <span class="menu-bar-item-weight">
                            150 гр.
                        </span>
                        <span class="menu-bar-item-price">
                            ~149
                        </span>
                    </div>    
                </div>-->
<!--                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/osn-menu/brokkoli-big.jpg" data-fancybox="image-brokkoli" data-caption="Брокколи на пару">
                            <img src="img/menu/osn-menu/brokkoli-big.jpg" class="item-img img-fluid" alt="brokkoli">
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
                </div>-->
<!--                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/osn-menu/po-derevenski.jpg" data-fancybox="image-po-derevenski" data-caption="Картофель По - Деревенски">
                            <img src="img/menu/osn-menu/po-derevenski.jpg" class="item-img img-fluid" alt="po-derevenski">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>Картофель По - Деревенски</h3>
                        <span class="menu-bar-item-weight">
                            150 гр.
                        </span>
                        <span class="menu-bar-item-price">
                            ~149
                        </span>
                    </div>    
                </div>-->
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <div class="hit-label"></div>
                        <a href="img/menu/osn-menu/potato-fri-big.jpg" data-fancybox="image-potato-fri" data-caption="Картофель Фри">
                            <img src="img/menu/osn-menu/potato-fri-big.jpg" class="item-img img-fluid" alt="potato-fri">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>картофель фри</h3>
                        <span class="menu-bar-item-description">
                            [картофель фри]
                        </span>
<!--                        <span class="menu-bar-item-weight">
                            120/20 гр.
                        </span>-->
                        <span class="menu-bar-item-price">
                            ~199
                        </span>
                    </div>    
                </div>
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/osn-menu/fri-becon.jpg" data-fancybox="image-pure" data-caption="Картофель фри с беконом">
                            <img src="img/menu/osn-menu/fri-becon.jpg" class="item-img img-fluid" alt="fri-becon">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>Картофель фри с беконом</h3>
                        <span class="menu-bar-item-description">
                            [Бекон, картофель фри и сыр]
                        </span>
<!--                        <span class="menu-bar-item-weight">
                            150 гр.
                        </span>-->
                        <span class="menu-bar-item-price">
                            ~299
                        </span>
                    </div>    
                </div>

            </div>

            <div class="food-menu-advertisment" id="burgers">
                <span>
                    бургеры и сендвичи ● от 399<i class="fas fa-ruble-sign"></i>
                </span>
            </div>

            <div class="food-menu-menu grid">
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <div class="hit-label"></div>
                        <a href="img/menu/osn-menu/buffallo-bill-big.jpg" data-fancybox="image-buffallo-bill-big" data-caption="Бургер Буффало Билл">
                            <img src="img/menu/osn-menu/buffallo-bill-big.jpg" class="item-img img-fluid" alt="buffallo-bill">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>Гвоздатый бургер</h3>
                        <span class="menu-bar-item-description">
                            [Булочка для бургера, котлета из говядины, листья 
                            салата, соленые огурцы, свежие помидоры, красный лук, бекон, картофель фри и соуса]
                        </span>
                        <span class="menu-bar-item-weight">
                            280/90/20 гр.
                        </span>
                        <span class="menu-bar-item-price">
                            ~699
                        </span>
                    </div>    
                </div>
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/osn-menu/burrito.jpg" data-fancybox="image-burrito" data-caption="Буррито">
                            <img src="img/menu/osn-menu/burrito.jpg" class="item-img img-fluid" alt="Буррито">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>Буррито блэк с курицей</h3>
                        <span class="menu-bar-item-description">
                            [КУРИНАЯ ГРУДКА, ЛУК КРАСНЫЙ, ПЕРЕЦ БОЛГАРСКИЙ,
                            ПЕРЕЦ ЧИПОТЛЕ, СОУС САЛЬСА, ЛУК ЖАРЕНЫЙ, ЧЕДДЕР,
                            ТОРТИЛЬЯ, КАРТОФЕЛЬНЫЕ ДОЛЬКИ, СОУС СЫРНЫЙ ]
                        </span>
                        <span class="menu-bar-item-weight">
                            270/90/20 гр.
                        </span>
                        <span class="menu-bar-item-price">
                            ~499
                        </span>
                    </div>
                </div>
<!--                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/osn-menu/old-jack-big.jpg" data-fancybox="image-old-jack-big" data-caption="Бургер Старина Джек">
                            <img src="img/menu/osn-menu/old-jack-big.jpg" class="item-img img-fluid" alt="old-jack">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>старина джек</h3>
                        <span class="menu-bar-item-description">
                            [КОТЛЕТА ИЗ ГОВЯДИНЫ, СОУС БЛЮ ЧИЗ, СОУС ДЖЕК ДЭНИЕЛС,
                            САЛАТ АЙСБЕРГ, СЫР, БЕКОН, КРАСНЫЙ ЛУК,
                            ПОМИДОР, СОЛЕНЫЙ ОГУРЕЦ, СЫРНЫЙ СОУС]
                            [ПОДАЕТСЯ С КАРТОФЕЛЕМ ФРИ И КЕТЧУПОМ]
                        </span>
                        <span class="menu-bar-item-weight">
                            280/90/20 гр.
                        </span>
                        <span class="menu-bar-item-price">
                            ~449
                        </span>
                    </div>    
                </div>-->
<!--                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <div class="veget-label"></div>
                        <a href="img/menu/osn-menu/lasvegas-big.jpg" data-fancybox="image-lasvegas" data-caption="Бургер Лас Вегас">
                            <img src="img/menu/osn-menu/lasvegas-big.jpg" class="item-img img-fluid" alt="lasvegas">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>Бургер лас вегас</h3>
                        <span class="menu-bar-item-description">[САЛАТ АЙСБЕРГ, КАБАЧОК ГРИЛЬ, ПЕРЕЦ БОЛГАРСКИЙ ГРИЛЬ,
                            ШАМПИНЬОНЫ ГРИЛЬ, ПОМИДОР, ОГУРЕЦ СВЕЖИЙ,
                            КРАСНЫЙ ЛУК, СОУС ЗЕЛЕНЫЙ]
                            [ПОДАЕТСЯ С КАРТОФЕЛЕМ ФРИ И КЕТЧУПОМ]
                        </span>
                        <span class="menu-bar-item-weight">
                            280/90/20 гр.
                        </span>
                        <span class="menu-bar-item-price">
                            ~399
                        </span>
                    </div>    
                </div>-->
<!--                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/osn-menu/tarantino.jpg" data-fancybox="image-tarantino" data-caption="Бургер Тарантино">
                            <img src="img/menu/osn-menu/tarantino.jpg" class="item-img img-fluid" alt="Бургер Тарантино">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>Бургер Тарантино</h3>
                        <span class="menu-bar-item-description">
                            [БУЛОЧКА ДЛЯ БУРГЕРА, КОТЛЕТА ИЗ ГОВЯДИНЫ, САЛАТ АЙСБЕРГ,
                            СОУС СЫРНЫЙ, СЫР ЧЕДДЕР, БЕКОН, СОУС РЕЛИШ, ХАЛАПЕНЬО,
                            СОЛЕНЫЕ ОГУРЦЫ, ЛУК ФРИ, СОУС BBQ]
                            [ПОДАЕТСЯ С КАРТОФЕЛЕМ ФРИ И КЕТЧУПОМ]
                        </span>
                        <span class="menu-bar-item-weight">
                            280/90/20 гр.
                        </span>
                        <span class="menu-bar-item-price">
                            ~549
                        </span>
                    </div>    
                </div>-->
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/osn-menu/club-sandwich.jpg" data-fancybox="image-club-sandwich" data-caption="Сэндвич с копченой курицей">
                            <img src="img/menu/osn-menu/club-sandwich.jpg" class="item-img img-fluid" alt="Сэндвич с копченой курицей">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>Сэндвич с копченой курицей</h3>
                        <span class="menu-bar-item-description">
                            [Чиабатта, листья салата, свежие огурцы и помидоры,
                            копченая курица, картофель фри и соуса]
                        </span>
                        <span class="menu-bar-item-weight">
                            190/90/20 гр.
                        </span>
                        <span class="menu-bar-item-price">
                            ~399
                        </span>
                    </div>    
                </div>
            </div>



<!--            <div class="food-menu-advertisment" id="hot_dogs">
                <span>
                    бешеные псы ● от 349<i class="fas fa-ruble-sign"></i>
                </span>
            </div>-->

<!--            <div class="food-menu-menu grid" >
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/osn-menu/good-boy-big.jpg" data-fancybox="image-good-boy" data-caption="Хороший Парень">
                            <img src="img/menu/osn-menu/good-boy-big.jpg" class="item-img img-fluid" title="good-boy">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>Хороший Парень</h3>
                        <span class="menu-bar-item-description">
                            [БУЛОЧКА ДЛЯ ХОТ-ДОГА, КОЛБАСКА КУРИНАЯ,
                            ОГУРЕЦ СОЛЕНЫЙ, ФИРМЕНЫЙ СОУС, ЛУК ФРИ, СОУС BBQ]
                            [ПОДАЕТСЯ С КАРТОФЕЛЕМ
                            ПО-ДЕРЕВЕНСКИ И С СЫРНЫМ И BBQ СОУСАМИ]
                        </span>
                        <span class="menu-bar-item-weight">
                            200/90/20/20 гр.
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
                        <span class="menu-bar-item-description">
                            [БУЛОЧКА ДЛЯ ХОТ-ДОГА, КОЛБАСКА СВИНАЯ,
                            СОЛЕНЫЙ ОГУРЕЦ, ЛУК ФРИ, ЛУКОВЫЙ СОУС,
                            СОЛОМКА ИЗ БЕКОНА, СОУС ОВОЩНОЙ]
                            [ПОДАЕТСЯ С КАРТОФЕЛЕМ
                            ПО-ДЕРЕВЕНСКИ И С СЫРНЫМ И BBQ СОУСАМИ]
                        </span>
                        <span class="menu-bar-item-weight">
                            200/90/20/20 гр.
                        </span>
                        <span class="menu-bar-item-price">
                            ~349
                        </span>
                    </div>
                </div> 
                 
            </div>-->

            <div class="food-menu-advertisment" id="deserts">
                <span>
                    десерты ● от 99<i class="fas fa-ruble-sign"></i> 
                </span>
            </div>

            <div class="food-menu-menu grid">
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/osn-menu/ice-cream.jpg" data-fancybox="image-ice-cream" data-caption="Мороженное з шарика">
                            <img src="img/menu/osn-menu/ice-cream.jpg" class="item-img img-fluid" title="Мороженное з шарика">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>Мороженое</h3>
                        <span class="menu-bar-item-description">
                            <span>♣Ванильное</span>
                            <span>♣Шоколадное</span>
                            <span>♣Фисташковое</span>
                        </span>
                        <span class="menu-item-dop">
                            1 шарик ~ 99<strong>j</strong>
                        </span>
<!--                        <span class="menu-item-dop">
                            3 шарика ~ 299<strong>j</strong>
                        </span>-->
                    </div>    
                </div>
<!--                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/osn-menu/ice-cream.jpg" data-fancybox="image-ice-cream-alko" data-caption="Мороженное з шарика">
                            <img src="img/menu/osn-menu/ice-cream.jpg" class="item-img img-fluid" title="Мороженное з шарика">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>Алкогольное мороженое</h3>
                        <span class="menu-bar-item-description">
                            <span>♥Б-52 ♥Ром айс</span>
                            <span>♥Голубые Гавайи ♥Пина колада</span>
                            <span>♥Секс на пляже</span>
                        </span>
                        <span class="menu-item-dop">
                            1 шарик ~ 149<strong>j</strong>
                        </span>
                        <span class="menu-item-dop">
                            3 шарика ~ 349<strong>j</strong>
                        </span>
                    </div>    
                </div>-->
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/osn-menu/cheese-cake-big.jpg" data-fancybox="image-cheese-cake" data-caption="Классический Чизкейк">
                            <img src="img/menu/osn-menu/cheese-cake-big.jpg" class="item-img img-fluid" title="cheese-cake">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>Классический Чизкейк</h3>
                        <span class="menu-bar-item-description">
                            [Чизкейк классический с клубничным соусом и мятой]
                        </span>
<!--                        <span class="menu-bar-item-weight">
                            110 гр.
                        </span>-->
                        <span class="menu-bar-item-price">
                            ~299
                        </span>
                    </div>    
                </div>
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/osn-menu/cheesecake-mango-big.jpg" data-fancybox="image-cheesecake-mango" data-caption="Чизкейк «тропические фрукты»">
                            <img src="img/menu/osn-menu/cheesecake-mango-big.jpg" class="item-img img-fluid" title="cheese-cake-mango">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>чизкейк «тропические фрукты»</h3>
                        <span class="menu-bar-item-description">
                            [Чизкей манго-маракуйя с физалисом и клубничным соусом]
                        </span>
<!--                        <span class="menu-bar-item-weight">
                            110 гр.
                        </span>-->
                        <span class="menu-bar-item-price">
                            ~299
                        </span>
                    </div>    
                </div> 
<!--                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/osn-menu/cheesecake-caramel-big.jpg" data-fancybox="image-cheesecake-caramel" data-caption="Чизкейк «карамель»">
                            <img src="img/menu/osn-menu/cheesecake-caramel-big.jpg" class="item-img img-fluid" title="cheesecake-caramel">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>чизкейк «карамель»</h3>
                        <span class="menu-bar-item-description">
                            [КЛАССИЧЕСКИЙ ЧИЗКЕЙК В ШОКОЛАДНО-ПЕСОЧНОЙ
                            КОРЗИНКЕ, С КАРАМЕЛЬНОЙ
                            ГЛАЗУРЬЮ И ШОКОЛАДНОЙ КРОШКОЙ]
                        </span>
                        <span class="menu-bar-item-weight">
                            110 гр.
                        </span>
                        <span class="menu-bar-item-price">
                            ~299
                        </span>
                    </div>    
                </div>-->
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/osn-menu/blini.jpg" data-fancybox="image-bliny" data-caption="Блины с клубникой и кремом маскарпоне">
                            <img src="img/menu/osn-menu/blini.jpg" class="item-img img-fluid" title="Блины с клубникой и кремом маскарпоне" alt="Блины">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>Блинчики с маскарпоне</h3>
                        <span class="menu-bar-item-description">
                            [Блинчики с кремом из маскарпоне, клубникой,
                            мятой и клубничным соусом]
                        </span>
<!--                        <span class="menu-bar-item-weight">
                            230 гр.
                        </span>-->
                        <span class="menu-bar-item-price">
                            ~299
                        </span>
                    </div>  
                </div>
<!--                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/osn-menu/fruit-assorti-big.jpg" data-fancybox="image-fruit-assorti" data-caption="Фруктовое ассорти">
                            <img src="img/menu/osn-menu/fruit-assorti-big.jpg" class="item-img img-fluid" title="fruit-assorti">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>фруктовое ассорти</h3>
                        <span class="menu-bar-item-description">
                            [АПЕЛЬСИН, ЯБЛОКО, КИВИ, ВИНОГРАД]
                        </span>
                        <span class="menu-bar-item-weight">
                            200 гр.
                        </span>
                        <span class="menu-bar-item-price">
                            ~199
                        </span>
                    </div>    
                </div>-->
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/osn-menu/brauni-big.jpg" data-fancybox="image-brauni" data-caption="Брауни шоколадный с грецким орехом">
                            <img src="img/menu/osn-menu/brauni-big.jpg" class="item-img img-fluid" title="brauni" alt="Брауни">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>брауни</h3>
                        <span class="menu-bar-item-description">
                            [Шоколадный брауни с соусом]
                        </span>
<!--                        <span class="menu-bar-item-weight">
                            90 гр.
                        </span>-->
                        <span class="menu-bar-item-price">
                            ~299
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
                        <span class="menu-bar-item-description">
                            [Классический слоеный торт медовик с карамельным соусом]
                        </span>
<!--                        <span class="menu-bar-item-weight">
                            110 гр.
                        </span>-->
                        <span class="menu-bar-item-price">
                            ~299
                        </span>
                    </div>    
                </div>
<!--                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/osn-menu/rafaello.jpg" data-fancybox="image-rafaello" data-caption="Рафаэлло">
                            <img src="img/menu/osn-menu/rafaello.jpg" class="item-img img-fluid" title="Рафаэлло">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>Рафаэлло</h3>
                        <span class="menu-bar-item-weight">
                            90 гр.
                        </span>
                        <span class="menu-bar-item-price">
                            ~299
                        </span>
                    </div>    
                </div>-->
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
                            [Ванильное мороженое, взбитые сливки, банан,
                            кедровые орешки, шоколадный и клубничный соуса]
                        </span>
<!--                        <span class="menu-bar-item-weight">
                            100/55/30/10/10/3/10 гр.
                        </span>-->
                        <span class="menu-bar-item-price">
                            ~299
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
                        <span class="menu-bar-item-description">
                            [Домашнее тирамису с кремом из маскарпоне, бисквитом и клубникой]
                        </span>
<!--                        <span class="menu-bar-item-weight">
                            150 гр.
                        </span>-->
                        <span class="menu-bar-item-price">
                            ~299
                        </span>
                    </div>    
                </div>
e
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
                        <div class="lunch-time-time"><span>с 08:00 до 11:00</span></div>
                    </div>
<!--                    <div class="right-item">
                        <span>от 149<strong>j</strong> до 179<strong>j</strong> </span>
                    </div>-->
                </div>
                
                
                
                
                <div class="food-menu-menu grid">
                    <div class="food-menu-item grid">
                        <div class="food-menu-item-img">
                            <a href="img/menu/breakfast/syr.jpg" data-fancybox="image-br-1" data-caption="Сырники с клубничным соусом">
                                <img src="img/menu/breakfast/syr.jpg" class="item-img img-fluid" alt="Сырники с клубничным соусом">
                            </a>
                        </div>
                        <div class="food-menu-item-content">
                            <h3>Сырники с клубничным соусом</h3>
                            <span class="menu-bar-item-description">
                                [Творожные сырники, мята и клубничный соус]
                            </span>
<!--                            <span class="menu-bar-item-weight">
                                280/90/20 гр.
                            </span>-->
                            <span class="menu-bar-item-price">
                                ~149
                            </span>
                        </div>    
                    </div>
                    <div class="food-menu-item grid">
                        <div class="food-menu-item-img">
                            <a href="img/menu/breakfast/oml.jpg" data-fancybox="image-br-2" data-caption="Омлет с беконом и помидорами">
                                <img src="img/menu/breakfast/oml.jpg" class="item-img img-fluid" alt="Омлет с беконом и помидорами">
                            </a>
                        </div>
                        <div class="food-menu-item-content">
                            <h3>Омлет с беконом и помидорами</h3>
                            <span class="menu-bar-item-description">
                                [Омлет с беконом, помидорами и сыром]
                            </span>
                            <span class="menu-bar-item-price">
                                ~149
                            </span>
                        </div>    
                    </div>
                    <div class="food-menu-item grid">
                        <div class="food-menu-item-img">
                            <a href="img/menu/breakfast/sand.jpg" data-fancybox="image-br-3" data-caption="Яичница с тостами">
                                <img src="img/menu/breakfast/sand.jpg" class="item-img img-fluid" alt="Яичница с тостами">
                            </a>
                        </div>
                        <div class="food-menu-item-content">
                            <h3>Яичница с тостами</h3>
                            <span class="menu-bar-item-description">
                                [Яичница с тостами]
                            </span>
                            <span class="menu-bar-item-price">
                                ~99
                            </span>
                        </div>    
                    </div>
                    <div class="food-menu-item grid">
                        <div class="food-menu-item-img">
                            <a href="img/menu/breakfast/blinchiki.jpg" data-fancybox="image-br-4" data-caption="Блины с топпингами">
                                <img src="img/menu/breakfast/blinchiki.jpg" class="item-img img-fluid" alt="Блины с топпингами">
                            </a>
                        </div>
                        <div class="food-menu-item-content">
                            <h3>Блины с топпингами</h3>
                            <span class="menu-bar-item-description">
                                [Блинчики со сметаной и медом]
                            </span>
                            <span class="menu-bar-item-price">
                                ~99
                            </span>
                        </div>    
                    </div>
                    <div class="food-menu-item grid">
                        <div class="food-menu-item-img">
                            <a href="img/menu/breakfast/ovs.jpg" data-fancybox="image-br-5" data-caption="Каша овсяная">
                                <img src="img/menu/breakfast/ovs.jpg" class="item-img img-fluid" alt="Каша овсяная">
                            </a>
                        </div>
                        <div class="food-menu-item-content">
                            <h3>Каша овсяная</h3>
                            <span class="menu-bar-item-description">
                                [Традиционная овсяная каша на молоке]
                            </span>
                            <span class="menu-bar-item-price">
                                ~99
                            </span>
                        </div>    
                    </div>
                    <div class="food-menu-item grid">
                        <div class="food-menu-item-img">
                            <a href="img/menu/bar/americano.jpg" data-fancybox="image-br-6" data-caption="Кофе американо">
                                <img src="img/menu/bar/americano.jpg" class="item-img img-fluid" alt="Кофе американо">
                            </a>
                        </div>
                        <div class="food-menu-item-content">
                            <h3>Кофе американо</h3>
                            <span class="menu-bar-item-description">
                                [Кофе американо]
                            </span>
                            <span class="menu-bar-item-price">
                                ~49
                            </span>
                        </div>    
                    </div>
                    <div class="food-menu-item grid">
                        <div class="food-menu-item-img">
                            <a href="img/menu/bar/tea-black.jpg" data-fancybox="image-br-7" data-caption="Чай">
                                <img src="img/menu/bar/tea-black.jpg" class="item-img img-fluid" alt="Чай">
                            </a>
                        </div>
                        <div class="food-menu-item-content">
                            <h3>Чай</h3>
                            <span class="menu-bar-item-description">
                                [Чай]
                            </span>
                            <span class="menu-bar-item-price">
                                ~49
                            </span>
                        </div>    
                    </div>
                </div>
                
                <!--<img style="margin-bottom: 40px;" src="img/menu/breakfast/breakfast.jpg" alt="" class="img-fluid">-->
                
                
<!--                <div class="breakfast-content-border grid">
                    <div class="breakfast-horizontal-separator"></div>
                    <div class="breakfast-horizontal-separator-header header-font grid">
                        <span class="center">горячее + напиток</span>
                        <div class="lunch-item-badge">
                            <span>149</span>
                        </div>
                    </div>
                    <div class="breakfast-horizontal-separator"></div>
                </div>-->
<!--                <div class="breakfast-content ">
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
                </div>-->

<!--                <div class="breakfast-content-border-2 grid">
                    <div class="breakfast-horizontal-separator"></div>
                    <div class="breakfast-horizontal-separator-header header-font grid">
                        <span class="center">горячее + напиток + десерт или сендвич</span>
                        <div class="lunch-item-badge">
                            <span>179</span>
                        </div>
                    </div>
                    <div class="breakfast-horizontal-separator"></div>
                </div>-->
<!--                <div class="breakfast-content">    
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
                </div>-->
<!--                <div class="breakfast-content breakfast-content-3col">
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
                </div>    -->

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
                    Игристое Вино ● от 199<i class="fas fa-ruble-sign"></i>
                </span>
            </div>

            <div class="food-menu-menu grid">
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/bar/IgristoeVino/martini-asti.jpg" data-fancybox="image-martin-asti" data-caption="Martini Asti">
                            <img src="img/menu/bar/IgristoeVino/martini-asti.jpg" class="item-img img-fluid" title="Martini Asti" alt="Martini Asti">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>Martini Asti</h3>
                        <span class="menu-bar-item-price">
                            0.187 л. ~999
                        </span>
                    </div>    
                </div>
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/bar/IgristoeVino/martini-prosseco.jpg" data-fancybox="image-martin-prosseco" data-caption="Martini Prosecco">
                            <img src="img/menu/bar/IgristoeVino/martini-prosseco.jpg" class="item-img img-fluid" title="Martini Prosecco" alt="Martini Prosecco">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>Martini Prosecco</h3>
                        <span class="menu-bar-item-price">
                            0.187 л. ~549
                        </span>
                    </div>    
                </div>
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/bar/IgristoeVino/rossiyskoe_psl.jpg" data-fancybox="image-shampagnie-ross" data-caption="Шампанское Российское">
                            <img src="img/menu/bar/IgristoeVino/rossiyskoe_psl.jpg" class="item-img img-fluid" title="Шампанское Российское" alt="Шампанское Российское">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>Шампанское Российское п/сл</h3>
                        <span class="menu-bar-item-price">
                            150 мл. ~199
                        </span>
                        <span class="menu-bar-item-price">
                            0.75 л. ~599
                        </span>
                    </div>    
                </div>
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/bar/IgristoeVino/rossiyskoe_brut.jpg" data-fancybox="image-shampagnie-ross-brut" data-caption="Шампанское Российское брют">
                            <img src="img/menu/bar/IgristoeVino/rossiyskoe_brut.jpg" class="item-img img-fluid" title="Шампанское Российское брют" alt="Шампанское Российское брют">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>Шампанское Российское брют</h3>
                        <span class="menu-bar-item-price">
                            150 мл. ~199
                        </span>
                        <span class="menu-bar-item-price">
                            0.75 л. ~599
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
                        <h3>Lambrusco Bianco</h3>
                        <span class="menu-bar-item-price">
                            0.75 л. ~999
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
                        <h3>Lambrusco Rosato</h3>
                        <span class="menu-bar-item-price">
                            0.75 л. ~999
                        </span>
                    </div>    
                </div>

            </div>

            <div class="food-menu-advertisment" id="f_vine">
                <span>
                    Вино ●  Франция ● от 1399<i class="fas fa-ruble-sign"></i>
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
                        <h3>Grand Palas Sauvignon белое сухое</h3>
                        <span class="menu-bar-item-price">
                            0.75 л. ~1399
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
                        <h3>Grand Palas Bordeaux красное сухое</h3>
                        <span class="menu-bar-item-price">
                            0.75 л. ~1399
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
                        <h3>Chianti casa Sant Orsola красное сухое</h3>
                        <span class="menu-bar-item-price">
                            150 мл. ~299
                        </span>
                        <span class="menu-bar-item-price">
                            0.75 л. ~1199
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
                        <h3>Pino Grigio casa Sant Orsola белое сухое</h3>
                        <span class="menu-bar-item-price">
                            150 мл. ~299
                        </span>
                        <span class="menu-bar-item-price">
                            0.75 л. ~1199
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
                        <h3>Anadas de Oro белое сухое / полусладкое</h3>
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
                        <a href="img/menu/bar/Vine/aniadas-red.jpg" data-fancybox="image-aniadas-red" data-caption="Аньядас д,Оро красное сухое / полусладкое">
                            <img src="img/menu/bar/Vine/aniadas-red.jpg" class="item-img img-fluid" title="Аньядас д,Оро красное сухое / полусладкое" alt="Аньядас д,Оро красное сухое / полусладкое">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>Anadas de Oro красное сухое / полусладкое</h3>
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
                        <h3>KWV Pinotage красное сухое</h3>
                        <span class="menu-bar-item-price">
                            0.75 л. ~1599
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
                        <h3>KWV Chardonnay белое сухое</h3>
                        <span class="menu-bar-item-price">
                            0.75 л. ~1599
                        </span>
                    </div>    
                </div>
            </div>
            
            <div class="food-menu-advertisment">
                <span>
                    Вино ●  Грузия ● от 299<i class="fas fa-ruble-sign"></i>
                </span>
            </div>
            
            <div class="food-menu-menu grid">
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/bar/Vine/saperavi2.jpg" data-fancybox="image-saperavi" data-caption="Cаперави красное сухое">
                            <img src="img/menu/bar/Vine/saperavi2.jpg" class="item-img img-fluid" title="Cаперави красное сухое" alt="Cаперави красное сухое">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>Cаперави красное сухое</h3>
                        <span class="menu-bar-item-price">
                            150 мл. ~299
                        </span>
                        <span class="menu-bar-item-price">
                            0.75 л. ~1499
                        </span>
                    </div>    
                </div>
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/bar/Vine/cinandali.jpg" data-fancybox="image-cinandani" data-caption="Цинандали белое сухое">
                            <img src="img/menu/bar/Vine/cinandali.jpg" class="item-img img-fluid" title="Цинандали белое сухое" alt="Цинандали белое сухое">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>Цинандали белое сухое</h3>
                        <span class="menu-bar-item-price">
                            150 мл. ~299
                        </span>
                        <span class="menu-bar-item-price">
                            0.75 л. ~1499
                        </span>
                    </div>    
                </div>
<!--                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/no-image.gif" data-fancybox="image-mukuzani" data-caption="Мукузани красное сухое">
                            <img src="img/no-image.gif" class="item-img img-fluid" title="Мукузани красное сухое" alt="Мукузани красное сухое">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>Мукузани красное сухое</h3>
                        <span class="menu-bar-item-price">
                            150 мл. ~299
                        </span>
                        <span class="menu-bar-item-price">
                            0.75 л. ~1799
                        </span>
                    </div>    
                </div>-->
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/bar/Vine/kindzmaraulli.jpg" data-fancybox="image-kindzmarauli" data-caption="Киндзмараули красное п / сладкое">
                            <img src="img/menu/bar/Vine/kindzmaraulli.jpg" class="item-img img-fluid" title="Киндзмараули красное п / сладкое" alt="Киндзмараули красное п / сладкое">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>Киндзмараули красное п / сладкое</h3>
                        <span class="menu-bar-item-price">
                            150 мл. ~349
                        </span>
                        <span class="menu-bar-item-price">
                            0.75 л. ~1799
                        </span>
                    </div>    
                </div>
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/bar/Vine/saperavi.jpg" data-fancybox="image-saperavi-m" data-caption="Саперави мускат красное п / сладкое">
                            <img src="img/menu/bar/Vine/saperavi.jpg" class="item-img img-fluid" title="Саперави мускат красное п / сладкое" alt="Саперави мускат красное п / сладкое">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>Саперави мускат красное п / сладкое</h3>
                        <span class="menu-bar-item-price">
                            150 мл. ~349
                        </span>
                        <span class="menu-bar-item-price">
                            0.75 л. ~1799
                        </span>
                    </div>    
                </div>
            </div>

            <div class="food-menu-advertisment" >
                <span>
                    Вино ● Армения ● от 249<i class="fas fa-ruble-sign"></i>
                </span>
            </div>
            
            <div class="food-menu-menu grid">
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/no-image.gif" data-fancybox="image-sharan-granat" data-caption="Вино Шаран Гранат кр.п/сл. ">
                            <img src="img/no-image.gif" class="item-img img-fluid" title="Вино Шаран Гранат кр.п/сл. " alt="Вино Шаран Гранат кр.п/сл. ">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>Вино Шаран Гранат кр.п/сл. </h3>
                        <span class="menu-bar-item-price">
                            75 мл. ~249
                        </span>
                        <span class="menu-bar-item-price">
                            0.75 л. ~999
                        </span>
                    </div>    
                </div>
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/bar/portwain/DOW.jpg" data-fancybox="image-sharan-egevika" data-caption="Вино Шаран Ежевика кр.п/сл. ">
                            <img src="img/menu/bar/portwain/DOW.jpg" class="item-img img-fluid" title="Вино Шаран Ежевика кр.п/сл.  " alt="Вино Шаран Ежевика кр.п/сл. ">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>Вино Шаран Ежевика кр.п/сл. </h3>
                        <span class="menu-bar-item-price">
                            75 мл. ~249
                        </span>
                        <span class="menu-bar-item-price">
                            0.75 л. ~999
                        </span>
                    </div>    
                </div>
            </div>
            
            <div class="food-menu-advertisment" >
                <span>
                    Портвейн ● от 249<i class="fas fa-ruble-sign"></i>
                </span>
            </div>
            
            <div class="food-menu-menu grid">
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/bar/portwain/DOW.jpg" data-fancybox="image-Dow-s" data-caption="Dow’s Fine Ruby Port">
                            <img src="img/menu/bar/portwain/DOW.jpg" class="item-img img-fluid" title="Dow’s Fine Ruby Port" alt="Dow’s Fine Ruby Port">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>Dow’s Fine Ruby Port</h3>
                        <span class="menu-bar-item-price">
                            75 мл. ~249
                        </span>
                        <span class="menu-bar-item-price">
                            0.75 л. ~2299
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
                            [Ром бакарди Оакхард, Кола]
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
                            [Виски Вильям Лоусон, Кола]
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
                            [Мартини бьянко, Тоник, Лайм]
                        </span>
                        <span class="menu-bar-item-price">
                            200/15 мл. ~449
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
                            [Мартинни Россо,Тоник, Апельсин]
                        </span>
                        <span class="menu-bar-item-price">
                            200/15 мл. ~449
                        </span>
                    </div>    
                </div>
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/no-image.gif" data-fancybox="image-martini-tonik-fierro" data-caption="Мартини Тоник Фиерро">
                            <img src="img/no-image.gif" class="item-img img-fluid" title="Мартини Тоник Фиерро" alt="Мартини Тоник Фиерро">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>Мартини Тоник Фиерро</h3>
                        <span class="menu-bar-item-description">
                            [Мартинни Фиеро,Тоник, Апельсин]
                        </span>
                        <span class="menu-bar-item-price">
                            200/15 мл. ~449
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
                            [виски, яблочный  сок, яблоко, сироп ваниль, корица]
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
                            [Ром бакарди, лайм, мята, сахар, содовая] 
                        </span>
                        <span class="menu-bar-item-price">
                            100/60 мл. ~449
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
                            [Ром, лайм, мята, малина с/м, сироп малиновый, содовая] 
                        </span>
                        <span class="menu-bar-item-price">
                            150/65 мл. ~449
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
                            180/5 мл. ~449
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
                            [Водка, ворчестер, табаско, томатный сок, соль, перец]
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
                            160/10 мл. ~499
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
                            [виски Джек Дэниелз, Трипл сек, спрайт, сок лимона, сахарный сироп, лимон]
                        </span>
                        <span class="menu-bar-item-price">
                            195/15 мл. ~499
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
                            [водка, ром, джин, текила, трипл сек, сок лимона, сахар, кола]
                        </span>
                        <span class="menu-bar-item-price">
                            190/10 мл. ~499
                        </span>
                    </div>    
                </div>
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/bar/longDrinks/aperol_blitz.jpg" data-fancybox="image-aperol" data-caption="Апероль Шпритц">
                            <img src="img/menu/bar/longDrinks/aperol_blitz.jpg" class="item-img img-fluid" title="Апероль Шпритц" alt="Апероль Шпритц">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>Апероль Шпритц</h3>
                        <span class="menu-bar-item-description">
                            [апероль, вино игристое, вода газированная, апельсин]
                        </span>
                        <span class="menu-bar-item-price">
                            260/30 мл. ~449
                        </span>
                    </div>    
                </div>
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <div class="hit-label"></div>
                        <a href="img/menu/bar/longDrinks/pinacoladad.jpg" data-fancybox="image-pinocolada" data-caption="Пина Колада">
                            <img src="img/menu/bar/longDrinks/pinacoladad.jpg" class="item-img img-fluid" title="Пина Колада" alt="Пина Колада">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>Пина Колада</h3>
                        <span class="menu-bar-item-description">
                            [Малибу, ром светлый, сливки, сок ананасовый, взбитые сливки]
                        </span>
                        <span class="menu-bar-item-price">
                            270/10 мл. ~449
                        </span>
                    </div>    
                </div>
<!--                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/bar/longDrinks/white_witch.jpg" data-fancybox="image-whitewitch" data-caption="Белая Ведьма">
                            <img src="img/menu/bar/longDrinks/white_witch.jpg" class="item-img img-fluid" title="Белая Ведьма" alt="Белая Ведьма">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>Белая Ведьма</h3>
                        <span class="menu-bar-item-description">
                            [Baileys, ром светлый, сироп ореховый, сливки]
                        </span>
                        <span class="menu-bar-item-price"> 
                            100 мл. ~499
                        </span>
                    </div>    
                </div>-->
<!--                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/bar/longDrinks/tiramisu.jpg" data-fancybox="image-tiramissu" data-caption="Тирамису">
                            <img src="img/menu/bar/longDrinks/tiramisu.jpg" class="item-img img-fluid" title="Тирамису" alt="Тирамису">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>Тирамису</h3>
                        <span class="menu-bar-item-description">
                            [Kahlua, Baileys, сливки, коньяк]
                        </span>
                        <span class="menu-bar-item-price">
                            110 мл. ~499
                        </span>
                    </div>    
                </div>-->
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/bar/longDrinks/negroni.jpg" data-fancybox="image-negroni" data-caption="Негрони">
                            <img src="img/menu/bar/longDrinks/negroni.jpg" class="item-img img-fluid" title="Негрони" alt="Негрони">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>Негрони</h3>
                        <span class="menu-bar-item-description">
                            [Джин,Campari, Martini rosato, Angostura bitter]
                        </span>
                        <span class="menu-bar-item-price">
                            90/30 мл. ~399
                        </span>
                    </div>    
                </div>
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/bar/longDrinks/old_fashion.jpg" data-fancybox="image-old-facion" data-caption="Олд Фэшн">
                            <img src="img/menu/bar/longDrinks/old_fashion.jpg" class="item-img img-fluid" title="Олд Фэшн" alt="Олд Фэшн">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>Олд Фэшн</h3>
                        <span class="menu-bar-item-description">
                            [бурбон, тростниковый сахар, содовая, Angostura bitter, цедра апельсина]
                        </span>
                        <span class="menu-bar-item-price">
                            100/10 мл. ~399
                        </span>
                    </div>    
                </div>

            </div>

            <div class="food-menu-advertisment" id="f_shots">
                <span>
                    Шоты ● от 349<i class="fas fa-ruble-sign"></i>
                </span>
            </div>

            <div class="food-menu-menu grid">
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
                            [Трипл сек, бейлис, калуа]
                        </span>
                        <span class="menu-bar-item-price">
                            50 мл. ~349
                        </span>
                    </div>    
                </div>
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
                            50 мл. ~349
                        </span>
                    </div>    
                </div>
<!--                <div class="food-menu-item grid">
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
                </div>-->
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/bar/shots/banderas.jpg" data-fancybox="image-banderass" data-caption="Бандерас">
                            <img src="img/menu/bar/shots/banderas.jpg" class="item-img img-fluid" title="Бандерас" alt="Бандерас">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>Бандерас</h3>
                        <span class="menu-bar-item-description">
                            [Текила, томатный сок, сок лайма]
                        </span>
                        <span class="menu-bar-item-price">
                            50 мл. ~349
                        </span>
                    </div>    
                </div>
<!--                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/bar/shots/vdovi_uzel.jpg" data-fancybox="image-vdvuzel" data-caption="Вдовий Узел">
                            <img src="img/menu/bar/shots/vdovi_uzel.jpg" class="item-img img-fluid" title="Вдовий Узел" alt="Вдовий Узел">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>Вдовий Узел</h3>
                        <span class="menu-bar-item-description">
                            [водка, Jagermeister, Kahlua, гренадин]
                        </span>
                        <span class="menu-bar-item-price">
                            50 мл. ~349
                        </span>
                    </div>    
                </div>-->
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/bar/shots/alm.jpg" data-fancybox="image-almaz-glazz" data-caption="Алмазный резец">
                            <img src="img/menu/bar/shots/alm.jpg" class="item-img img-fluid" title="Алмазный резец" alt="Алмазный резец">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>Алмазный резец</h3>
                        <span class="menu-bar-item-description">
                            [Абсент, Бакарди окхард, Гренадин]
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
                            [Белое вино,мед,  корица, гвоздика, бадьян, лимон, апельсин, грейпфрут]
                        </span>
                        <span class="menu-bar-item-price">
                            150 мл. ~299
                        </span>
                    </div>    
                </div>
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <div class="hit-label"></div>
                        <a href="img/menu/bar/hot/red-glintwein.jpg" data-fancybox="image-red-glintwein" data-caption="Красный Глинтвейн">
                            <img src="img/menu/bar/hot/red-glintwein.jpg" class="item-img img-fluid" title="Красный Глинтвейн" alt="Красный Глинтвейн">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>Красный Глинтвейн</h3>
                        <span class="menu-bar-item-description">
                            [Красное вино, корица, мед, гвоздика, бадьян, яблоко, лимон, апельсин]
                        </span>
                        <span class="menu-bar-item-price">
                            150 мл. ~299
                        </span>
                    </div>    
                </div>
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
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
                            150 мл. ~349
                        </span>
                    </div>    
                </div>
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <div class="hit-label"></div>
                        <a href="img/menu/bar/hot/irish-coffee.jpg" data-fancybox="image-irish-coffee" data-caption="Ирладнский Кофе">
                            <img src="img/menu/bar/hot/irish-coffee.jpg" class="item-img img-fluid" title="Ирладнский Кофе" alt="Ирладнский Кофе">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>Ирладнский Кофе</h3>
                        <span class="menu-bar-item-description">
                            [Виски Джемесон, кофе, взбитые сливки, карамельный сироп] 
                        </span>
                        <span class="menu-bar-item-price">
                            150 мл. ~349
                        </span>
                    </div>    
                </div>
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/bar/hot/hot-toddie.jpg" data-fancybox="image-hot-toddy" data-caption="Хот тодди">
                            <img src="img/menu/bar/hot/hot-toddie.jpg" class="item-img img-fluid" title="Хот тодди" alt="Хот тодди">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>Хот тодди</h3>
                        <span class="menu-bar-item-description">
                            [Виски, чай черный, имбирь, мед, корица, бадьян] 
                        </span>
                        <span class="menu-bar-item-price">
                            150 мл. ~349
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
                            400 мл. ~349
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
                            [имбирный сироп, свежевыжатый апельсиновый сок, ИПА]
                        </span>
                        <span class="menu-bar-item-price">
                            400 мл. ~349
                        </span>
                    </div>    
                </div>
<!--                <div class="food-menu-item grid">
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
                            400 мл. ~299
                        </span>
                    </div>    
                </div>-->
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
                            400 мл. ~349
                        </span>
                    </div>    
                </div>
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <div class="hit-label"></div>
                        <a href="img/menu/bar/bir/slivki-beer.jpg" data-fancybox="image-slivki-beer" data-caption="Сливочное Пиво">
                            <img src="img/menu/bar/bir/slivki-beer.jpg" class="item-img img-fluid" title="Сливочное Пиво" alt="Сливочное Пиво">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>Сливочное Пиво</h3>
                        <span class="menu-bar-item-description">
                            [пиво нефильтрованное, сливочный сироп, взбитые сливки]
                        </span>
                        <span class="menu-bar-item-price">
                            400 мл. ~299
                        </span>
                    </div>    
                </div>
            </div>

            <div class="food-menu-advertisment" id="f_vodka">
                <span>
                    Водка ● от 129<i class="fas fa-ruble-sign"></i>
                </span>
            </div>

            <div class="food-menu-menu grid">
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/no-image.gif" data-fancybox="image-haski" data-caption="Хаски">
                            <img src="img/no-image.gif" class="item-img img-fluid" title="Хаски" alt="Хаски">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>Хаски</h3>
                        <span class="menu-bar-item-price">
                            40 мл. ~129
                        </span>
                        <span class="menu-bar-item-price">
                            0.5 л. ~999
                        </span>
                    </div>  
                </div>
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
                            0.5 л. ~1499
                        </span>
                    </div>  
                </div>
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/no-image.gif" data-fancybox="image-belber" data-caption="Белая березка">
                            <img src="img/no-image.gif" class="item-img img-fluid" title="Белая березка" alt="Белая березка">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>Белая березка</h3>
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
                        <span class="menu-bar-item-price">
                            0.5 л. ~999
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
                        <span class="menu-bar-item-price">
                            0.5 л. ~999
                        </span>
                    </div>  
                </div>
<!--                <div class="food-menu-item grid">
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
                </div>-->
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
<!--                <div class="food-menu-item grid">
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
                </div>-->
            </div>

            <div class="food-menu-advertisment">
                <span>
                    Настойка ● от 149<i class="fas fa-ruble-sign"></i>
                </span>
            </div>
            
            <div class="food-menu-menu grid">
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
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/no-image.gif" data-fancybox="image-na-trave" data-caption="Драники на зубровой траве">
                            <img src="img/no-image.gif" class="item-img img-fluid" title="Драники на зубровой траве" alt="Драники на зубровой траве">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>Настойка "Драники на зубровой траве"</h3>
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
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/no-image.gif" data-fancybox="image-draniki" data-caption="Настойка Драники на липе с медом">
                            <img src="img/no-image.gif" class="item-img img-fluid" title="Настойка Драники на липе с медом" alt="Настойка Драники на липе с медом">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>Настойка "Драники на липе с медом"</h3>
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
                
<!--                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/bar/vodka/rakia_aiva.jpg" data-fancybox="image-rak-aiva" data-caption="Ракия Айвовая">
                            <img src="img/menu/bar/vodka/rakia_aiva.jpg" class="item-img img-fluid" title="Ракия Айвовая" alt="Ракия Айвовая">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>Ракия Айвовая</h3>
                        <span class="menu-bar-item-description">
                            [40%]
                        </span>
                        <span class="menu-bar-item-price">
                            40 мл. ~199
                        </span>
                        <span class="menu-bar-item-price">
                            0.7 л. ~2999
                        </span>
                    </div>  
                </div>-->
<!--                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/bar/vodka/rakia_grusha.jpg" data-fancybox="image-rak-grusha" data-caption="Ракия Грушевая">
                            <img src="img/menu/bar/vodka/rakia_grusha.jpg" class="item-img img-fluid" title="Ракия Грушевая" alt="Ракия Грушевая">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>Ракия Грушевая</h3>
                        <span class="menu-bar-item-description">
                            [40%]
                        </span>
                        <span class="menu-bar-item-price">
                            40 мл. ~199
                        </span>
                        <span class="menu-bar-item-price">
                            0.7 л. ~2999
                        </span>
                    </div>  
                </div>-->
            </div>
            
            <div class="food-menu-advertisment" id="f_whisky">
                <span>
                    Виски ● от 149<i class="fas fa-ruble-sign"></i>
                </span>
            </div>

            <div class="food-menu-menu grid">
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/bar/whisky/william-lawsons.jpg" data-fancybox="image-william-lawsons" data-caption="William Lawson`s">
                            <img src="img/menu/bar/whisky/william-lawsons.jpg" class="item-img img-fluid" title="William Lawson`s" alt="William Lawson`s">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>William Lawson`s</h3>
                        <span class="menu-bar-item-price">
                            40 мл. ~199
                        </span>
                        <span class="menu-bar-item-price">
                            0.5 л. ~1999
                        </span>
                    </div>  
                </div>
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/bar/whisky/william-lawsons-super.jpg" data-fancybox="image-william-lawsons-super" data-caption="William Lawson`s Super Spiced">
                            <img src="img/menu/bar/whisky/william-lawsons-super.jpg" class="item-img img-fluid" title="William Lawson`s Super Spiced" alt="William Lawson`s Super Spiced">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>William Lawson`s Super Spiced</h3>
                        <span class="menu-bar-item-price">
                            40 мл. ~199
                        </span>
                    </div>  
                </div>
<!--                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/bar/whisky/dewars-white.jpg" data-fancybox="image-dewars-white" data-caption="Dewar`s White Label">
                            <img src="img/menu/bar/whisky/dewars-white.jpg" class="item-img img-fluid" title="Dewar`s White Label" alt="Dewar`s White Label">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>Dewar`s White Label</h3>
                        <span class="menu-bar-item-price">
                            40 мл. ~249
                        </span>
                    </div>  
                </div>-->
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/no-image.gif" data-fancybox="image-Proper" data-caption="Proper twelve">
                            <img src="img/no-image.gif" class="item-img img-fluid" title="Proper twelve" alt="Proper twelve">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>Proper twelve</h3>
                        <span class="menu-bar-item-price">
                            40 мл. ~349
                        </span>
                    </div>  
                </div>
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/bar/whisky/jack.jpg" data-fancybox="image-jack" data-caption="Jack Daniel`s old №7">
                            <img src="img/menu/bar/whisky/jack.jpg" class="item-img img-fluid" title="Jack Daniel`s old №7" alt="Jack Daniel`s old №7">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>Jack Daniel`s old №7</h3>
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
                        <a href="img/menu/bar/whisky/jack-tennesy.jpg" data-fancybox="image-jack-tennesy" data-caption="Jack Daniel`s Honey">
                            <img src="img/menu/bar/whisky/jack-tennesy.jpg" class="item-img img-fluid" title="Jack Daniel`s Honey" alt="Jack Daniel`s Honey">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>Jack Daniel`s Honey</h3>
                        <span class="menu-bar-item-price">
                            40 мл. ~349
                        </span>
                    </div>  
                </div>
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/bar/whisky/jameson.jpg" data-fancybox="image-jameson" data-caption="Jameson">
                            <img src="img/menu/bar/whisky/jameson.jpg" class="item-img img-fluid" title="Jameson" alt="Jameson">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>Jameson</h3>
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
                        <a href="img/menu/bar/whisky/maccalan.jpg" data-fancybox="image-Macallan" data-caption="the Macallan 12 y.o.">
                            <img src="img/menu/bar/whisky/maccalan.jpg" class="item-img img-fluid" title="the Macallan 12 y.o." alt="the Macallan 12 y.o.">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>the Macallan 12 y.o.</h3>
                        <span class="menu-bar-item-price">
                            40 мл. ~599
                        </span>
                    </div>  
                </div>
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/bar/whisky/whisky_laphroaig_10_years_old.jpg" data-fancybox="image-Laphroag" data-caption="Laphroag 10 y.o.">
                            <img src="img/menu/bar/whisky/whisky_laphroaig_10_years_old.jpg" class="item-img img-fluid" title="Laphroag 10 y.o." alt="Laphroag 10 y.o.">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>Laphroag 10 y.o.</h3>
                        <span class="menu-bar-item-price">
                            40 мл. ~599
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
<!--                        <span class="menu-bar-item-price">
                            0.5 л. ~2999
                        </span>-->
                    </div>  
                </div>

            </div>

            <div class="food-menu-advertisment" id="f_gin">
                <span>
                    Джин ● от 299<i class="fas fa-ruble-sign"></i>
                </span>
            </div>

            <div class="food-menu-menu grid">
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/bar/gin/beefeater.jpg" data-fancybox="image-beefeater" data-caption="Beefeater">
                            <img src="img/menu/bar/gin/beefeater.jpg" class="item-img img-fluid" title="Beefeater" alt="Beefeater">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>Beefeater</h3>
                        <span class="menu-bar-item-price">
                            40 мл. ~299
                        </span>
<!--                        <span class="menu-bar-item-price">
                            0.7 л. ~2999
                        </span>-->
                    </div>  
                </div>
            </div>

            <div class="food-menu-advertisment" id="f_rum">
                <span>
                    Ром ● от 299<i class="fas fa-ruble-sign"></i>
                </span>
            </div>

            <div class="food-menu-menu grid">
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/bar/rum/bacardi-oro.jpg" data-fancybox="image-bacardi-oro" data-caption="Bacardi Carta Oro">
                            <img src="img/menu/bar/rum/bacardi-oro.jpg" class="item-img img-fluid" title="Bacardi Carta Oro" alt="Bacardi Carta Oro">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>Bacardi Carta Oro</h3>
                        <span class="menu-bar-item-price">
                            40 мл. ~299
                        </span>
<!--                        <span class="menu-bar-item-price">
                            0.5 л. ~2999
                        </span>-->
                    </div>  
                </div>
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/bar/rum/bacardi-negra.jpg" data-fancybox="image-bacardi-negra" data-caption="Bacardi Carta Negra">
                            <img src="img/menu/bar/rum/bacardi-negra.jpg" class="item-img img-fluid" title="Bacardi Carta Negra" alt="Bacardi Carta Negra">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>Bacardi Carta Negra</h3>
                        <span class="menu-bar-item-price">
                            40 мл. ~299
                        </span>
<!--                        <span class="menu-bar-item-price">
                            0.5 л. ~2999
                        </span>-->
                    </div>  
                </div>
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/bar/rum/bacardi-ochard.jpg" data-fancybox="image-bacardi-ochard" data-caption="Bacardi Oakheart">
                            <img src="img/menu/bar/rum/bacardi-ochard.jpg" class="item-img img-fluid" title="Bacardi Oakheart" alt="Bacardi Oakheart">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>Bacardi Oakheart</h3>
                        <span class="menu-bar-item-price">
                            40 мл. ~299
                        </span>
<!--                        <span class="menu-bar-item-price">
                            0.5 л. ~2999
                        </span>-->
                    </div>  
                </div>
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/bar/rum/bacardi-blanco.jpg" data-fancybox="image-bacardi-blanco" data-caption="Bacardi Carta Blanca">
                            <img src="img/menu/bar/rum/bacardi-blanco.jpg" class="item-img img-fluid" title="Bacardi Carta Blanca" alt="Bacardi Carta Blanca">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>Bacardi Carta Blanca</h3>
                        <span class="menu-bar-item-price">
                            40 мл. ~299
                        </span>
<!--                        <span class="menu-bar-item-price">
                            0.5 л. ~2999
                        </span>-->
                    </div>  
                </div>
<!--                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/bar/rum/morgan-white.jpg" data-fancybox="image-morgan-white" data-caption="Captain Morgan White">
                            <img src="img/menu/bar/rum/morgan-white.jpg" class="item-img img-fluid" title="Captain Morgan White" alt="Captain Morgan White">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>Captain Morgan White</h3>
                        <span class="menu-bar-item-price">
                            40 мл. ~249
                        </span>
                    </div>  
                </div>-->
<!--                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/bar/rum/morgan-gold.jpg" data-fancybox="image-morgan-gold" data-caption="Captain Morgan Spiced Gold">
                            <img src="img/menu/bar/rum/morgan-gold.jpg" class="item-img img-fluid" title="Captain Morgan Spiced Gold" alt="Captain Morgan Spiced Gold">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>Captain Morgan Spiced Gold</h3>
                        <span class="menu-bar-item-price">
                            40 мл. ~249
                        </span>
                    </div>  
                </div>-->
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/no-image.gif" data-fancybox="image-BotucalMantuano" data-caption="Ром Botucal (Diplomatico) Mantuano">
                            <img src="img/no-image.gif" class="item-img img-fluid" title="Captain Morgan Spiced Gold" alt="Ром Botucal (Diplomatico) Mantuano">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>Ром Botucal (Diplomatico) Mantuano</h3>
                        <span class="menu-bar-item-price">
                            40 мл. ~349
                        </span>
                    </div>  
                </div>
            </div>

            <div class="food-menu-advertisment" id="f_tequila">
                <span>
                    Текила ● от 299<i class="fas fa-ruble-sign"></i>
                </span>
            </div>

            <div class="food-menu-menu grid">
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/bar/tequila/camino-blanco.jpg" data-fancybox="image-camino-blanco" data-caption="Camino Real Blanco">
                            <img src="img/menu/bar/tequila/camino-blanco.jpg" class="item-img img-fluid" title="Camino Real Blanco" alt="Camino Real Blanco">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>Camino Real Blanco</h3>
                        <span class="menu-bar-item-price">
                            40 мл. ~299
                        </span>
                        <span class="menu-bar-item-price">
                            0.7 л. ~2999
                        </span>
                    </div>  
                </div>
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/bar/tequila/camino-gold.jpg" data-fancybox="image-camino-gold" data-caption="Camino Real Gold">
                            <img src="img/menu/bar/tequila/camino-gold.jpg" class="item-img img-fluid" title="Camino Real Gold" alt="Camino Real Gold">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>Camino Real Gold</h3>
                        <span class="menu-bar-item-price">
                            40 мл. ~299
                        </span>
                        <span class="menu-bar-item-price">
                            0.7 л. ~2999
                        </span>
                    </div>  
                </div>
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/bar/tequila/olmeca-white.jpg" data-fancybox="image-olmeca-white" data-caption="Olmeca Blanco">
                            <img src="img/menu/bar/tequila/olmeca-white.jpg" class="item-img img-fluid" title="Olmeca Blanco" alt="Olmeca Blanco">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>Olmeca Blanco</h3>
                        <span class="menu-bar-item-price">
                            40 мл. ~299
                        </span>
                    </div>  
                </div>
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/bar/tequila/olmeca-gold.jpg" data-fancybox="image-olmeca-gold" data-caption="Olmeca Gold">
                            <img src="img/menu/bar/tequila/olmeca-gold.jpg" class="item-img img-fluid" title="Olmeca Gold" alt="Olmeca Gold">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>Olmeca Gold</h3>
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
                        <a href="img/menu/bar/cogniac/otard-vs.jpg" data-fancybox="image-otard-vs" data-caption="Baron Otard V.S.">
                            <img src="img/menu/bar/cogniac/otard-vs.jpg" class="item-img img-fluid" title="Baron Otard V.S." alt="Baron Otard V.S.">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>Baron Otard V.S.</h3>
                        <span class="menu-bar-item-price">
                            40 мл. ~349
                        </span>
                    </div>  
                </div>
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/bar/cogniac/martel-vs.jpg" data-fancybox="image-martell-vs" data-caption="Martell VS">
                            <img src="img/menu/bar/cogniac/martel-vs.jpg" class="item-img img-fluid" title="Martell VS" alt="Martell VS">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>Martell VS</h3>
                        <span class="menu-bar-item-price">
                            40 мл. ~399
                        </span>
<!--                        <span class="menu-bar-item-price">
                            0.5 л. ~3999
                        </span>-->
                    </div>  
                </div>

            </div>

            <div class="food-menu-advertisment" id="f_vermut">
                <span>
                    Вермуты ● от 299<i class="fas fa-ruble-sign"></i>
                </span>
            </div>

            <div class="food-menu-menu grid">
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/bar/vermut/martini-bianco.jpg" data-fancybox="image-martini-bianco" data-caption="Martini Bianco">
                            <img src="img/menu/bar/vermut/martini-bianco.jpg" class="item-img img-fluid" title="Martini Bianco" alt="Martini Bianco">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>Martini Bianco</h3>
                        <span class="menu-bar-item-price">
                            100 мл. ~299
                        </span>
<!--                        <span class="menu-bar-item-price">
                            0.5 л. ~1999
                        </span>-->
                    </div>  
                </div>
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/bar/vermut/martini-rosso.jpg" data-fancybox="image-martini-rosso" data-caption="Martini Rosso">
                            <img src="img/menu/bar/vermut/martini-rosso.jpg" class="item-img img-fluid" title="Martini Rosso" alt="Martini Rosso">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>Martini Rosso</h3>
                        <span class="menu-bar-item-price">
                            100 мл. ~299
                        </span>
<!--                        <span class="menu-bar-item-price">
                            0.5 л. ~1999
                        </span>-->
                    </div>  
                </div>
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/bar/vermut/martini-rosato.jpg" data-fancybox="image-martini-rosato" data-caption="Martini Rosato">
                            <img src="img/menu/bar/vermut/martini-rosato.jpg" class="item-img img-fluid" title="Martini Rosato" alt="Martini Rosato">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>Martini Rosato</h3>
                        <span class="menu-bar-item-price">
                            100 мл. ~299
                        </span>
<!--                        <span class="menu-bar-item-price">
                            0.5 л. ~1999
                        </span>-->
                    </div>  
                </div>
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/bar/vermut/martini-dry.jpg" data-fancybox="image-martini-dry" data-caption="Martini Extra Dry">
                            <img src="img/menu/bar/vermut/martini-dry.jpg" class="item-img img-fluid" title="Martini Extra Dry" alt="Martini Extra Dry">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>Martini Extra Dry</h3>
                        <span class="menu-bar-item-price">
                            100 мл. ~299
                        </span>
<!--                        <span class="menu-bar-item-price">
                            0.5 л. ~1999
                        </span>-->
                    </div>  
                </div>
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/no-image.gif" data-fancybox="image-Fiero" data-caption="Martini Fiero">
                            <img src="img/no-image.gif" class="item-img img-fluid" title="Martini Fiero" alt="Martini Fiero">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>Martini Fiero</h3>
                        <span class="menu-bar-item-price">
                            100 мл. ~299
                        </span>
<!--                        <span class="menu-bar-item-price">
                            0.5 л. ~1999
                        </span>-->
                    </div>  
                </div>
            </div>

            <div class="food-menu-advertisment" id="f_liquer">
                <span>
                    Ликер ● от 249<i class="fas fa-ruble-sign"></i>
                </span>
            </div>

            <div class="food-menu-menu grid">
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/bar/liquer/triplesec.jpg" data-fancybox="image-triplesec" data-caption="Triple Sec">
                            <img src="img/menu/bar/liquer/triplesec.jpg" class="item-img img-fluid" title="Triple Sec" alt="Triple Sec">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>Triple Sec</h3>
                        <span class="menu-bar-item-price">
                            50 мл. ~249
                        </span>
                    </div>  
                </div>
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/bar/liquer/jager.jpg" data-fancybox="image-jager" data-caption="Jagermeister">
                            <img src="img/menu/bar/liquer/jager.jpg" class="item-img img-fluid" title="Jagermeister" alt="Jagermeister">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>Jagermeister</h3>
                        <span class="menu-bar-item-price">
                            50 мл. ~249
                        </span>
<!--                        <span class="menu-bar-item-price">
                            0.5 л. ~2999
                        </span>-->
                    </div>  
                </div>
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/bar/liquer/beher.jpg" data-fancybox="image-beher" data-caption="Becherovka">
                            <img src="img/menu/bar/liquer/beher.jpg" class="item-img img-fluid" title="Becherovka" alt="Becherovka">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>Becherovka</h3>
                        <span class="menu-bar-item-price">
                            50 мл. ~249
                        </span>
<!--                        <span class="menu-bar-item-price">
                            0.5 л. ~2999
                        </span>-->
                    </div>  
                </div>
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/bar/liquer/sambuka.jpg" data-fancybox="image-sambuka" data-caption="Sambuca">
                            <img src="img/menu/bar/liquer/sambuka.jpg" class="item-img img-fluid" title="Sambuca" alt="Sambuca">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>Sambuca</h3>
                        <span class="menu-bar-item-price">
                            50 мл. ~249
                        </span>
                    </div>  
                </div>
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/bar/liquer/absinth.jpg" data-fancybox="image-sambuka" data-caption="Absinth">
                            <img src="img/menu/bar/liquer/absinth.jpg" class="item-img img-fluid" title="Absinth" alt="Absinth">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>Absinth</h3>
                        <span class="menu-bar-item-price">
                            50 мл. ~249
                        </span>
                    </div>  
                </div>
<!--                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/bar/liquer/amaretto.jpg" data-fancybox="image-amaretto" data-caption="Amaretto">
                            <img src="img/menu/bar/liquer/amaretto.jpg" class="item-img img-fluid" title="Amaretto" alt="Amaretto">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>Amaretto</h3>
                        <span class="menu-bar-item-price">
                            50 мл. ~199
                        </span>
                    </div>  
                </div>-->
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/bar/liquer/baileys.jpg" data-fancybox="image-baileys" data-caption="Baileys">
                            <img src="img/menu/bar/liquer/baileys.jpg" class="item-img img-fluid" title="Baileys" alt="Baileys">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>Baileys</h3>
                        <span class="menu-bar-item-price">
                            50 мл. ~249
                        </span>
                    </div>  
                </div>
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/bar/liquer/malibu.jpg" data-fancybox="image-malibu" data-caption="Malibu">
                            <img src="img/menu/bar/liquer/malibu.jpg" class="item-img img-fluid" title="Malibu" alt="Malibu">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>Malibu</h3>
                        <span class="menu-bar-item-price">
                            50 мл. ~249
                        </span>
                    </div>  
                </div>
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/no-image.gif" data-fancybox="image-Aperol" data-caption="Aperol">
                            <img src="img/no-image.gif" class="item-img img-fluid" title="Aperol" alt="Aperol">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>Aperol</h3>
                        <span class="menu-bar-item-price">
                            50 мл. ~249
                        </span>
                    </div>  
                </div>

            </div>

            <div class="food-menu-advertisment" id="f_firm_beer">
                <span>
                    Наше Пиво ● от 119<i class="fas fa-ruble-sign"></i>
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
                        <h3>жигули барное /
                            жигули бархатное / 
                            Оттингер нефильтрованное
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
                            на вынос 1000мл ● 249<strong>j</strong>
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
                        <a href="img/menu/bar/craft-beer/ipa.jpg" data-fancybox="image-ipa-light" data-caption="ipa светлое">
                            <img src="img/menu/bar/craft-beer/ipa.jpg" class="item-img img-fluid" title="ipa светлое" alt="ipa светлое">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>ipa светлое</h3>
<!--                        <span class="menu-bar-item-description">
                            [плотность 14.0%]
                            [крепость 5.9%]
                        </span>-->
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
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/bar/craft-beer/ipa-misha.jpg" data-fancybox="image-ipa-light1" data-caption="Мишенька под вишенкой">
                            <img src="img/menu/bar/craft-beer/ipa-misha.jpg" class="item-img img-fluid" title="Мишенька под вишенкой" alt="Мишенька под вишенкой">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>Мишенька под вишенкой</h3>
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
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/bar/craft-beer/ipa-med.jpg" data-fancybox="image-ipa-light2" data-caption="Неправильный мёд">
                            <img src="img/menu/bar/craft-beer/ipa-med.jpg" class="item-img img-fluid" title="Неправильный мёд" alt="Неправильный мёд">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>Неправильный мёд</h3>
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
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/bar/craft-beer/ipa-blansh.jpg" data-fancybox="image-ipa-light3" data-caption="Бланш де Мазай">
                            <img src="img/menu/bar/craft-beer/ipa-blansh.jpg" class="item-img img-fluid" title="Бланш де Мазай" alt="Бланш де Мазай">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>Бланш де Мазай</h3>
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
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/bar/craft-beer/poet.jpg" data-fancybox="image-ipa-light4" data-caption="poet APA Декаданс">
                            <img src="img/menu/bar/craft-beer/poet.jpg" class="item-img img-fluid" title="poet APA Декаданс" alt="poet APA Декаданс">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>poet APA Декаданс</h3>
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
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/bar/craft-beer/koza.jpg" data-fancybox="image-ipa-light5" data-caption="Сидрова Коза">
                            <img src="img/menu/bar/craft-beer/koza.jpg" class="item-img img-fluid" title="Cидрова Коза" alt="Сидрова Коза">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>Сидрова Коза</h3>
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
                            500 мл. ~449
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
                            500 мл. ~449
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
                            500 мл. ~449
                        </span>
                    </div>    
                </div>
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/bar/import-beer/hobgoblin.jpg" data-fancybox="image-Hopgoblin" data-caption=" Hopgoblin IPA">
                            <img src="img/menu/bar/import-beer/hobgoblin.jpg" class="item-img img-fluid" title=" Hopgoblin IPA" alt=" Hopgoblin IPA">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>Hopgoblin IPA</h3>
                        <span class="menu-bar-item-price">
                            300 мл. ~299
                        </span>
                        <span class="menu-bar-item-price">
                            500 мл. ~449
                        </span>
                    </div>    
                </div>
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/bar/import-beer/affligem.jpg" data-fancybox="image-Hopgoblin" data-caption="Affligem">
                            <img src="img/menu/bar/import-beer/affligem.jpg" class="item-img img-fluid" title="Affligem" alt="Affligem">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>Affligem</h3>
                        <span class="menu-bar-item-price">
                            300 мл. ~299
                        </span>
                        <span class="menu-bar-item-price">
                            500 мл. ~449
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
                        <a href="img/menu/bar/season-beer/kru.jpg" data-fancybox="image-season" data-caption="Крушовице">
                            <img src="img/menu/bar/season-beer/kru.jpg" class="item-img img-fluid" title="Крушовице" alt="Крушовице">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>Крушовице</h3>
<!--                        <span class="menu-bar-item-description">
                            [Сезонное Пиво]
                        </span>-->
                        <span class="menu-bar-item-price">
                            300 мл. ~199
                        </span>
                        <span class="menu-bar-item-price">
                            500 мл. ~299
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
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/bar/season-beer/hei.jpg" data-fancybox="image-season1" data-caption="Хайникен светлое">
                            <img src="img/menu/bar/season-beer/hei.jpg" class="item-img img-fluid" title="Хайникен светлое" alt="Хайникен светлое">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>Хайникен светлое</h3>
                        <span class="menu-bar-item-description">
                            [Сезонное Пиво]
                        </span>
                        <span class="menu-bar-item-price">
                            300 мл. ~199
                        </span>
                        <span class="menu-bar-item-price">
                            500 мл. ~299
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
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/bar/season-beer/hei-ba.jpg" data-fancybox="image-season2" data-caption="Хайникен б/а">
                            <img src="img/menu/bar/season-beer/hei-ba.jpg" class="item-img img-fluid" title="Хайникен б/а" alt="Хайникен б/а">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>Хайникен б/а</h3>
                        <span class="menu-bar-item-description">
                            [Сезонное Пиво]
                        </span>
                        <span class="menu-bar-item-price">
                            300 мл. ~199
                        </span>
                        <span class="menu-bar-item-price">
                            500 мл. ~299
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
                            750 мл. ~299
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
                        <a href="img/menu/bar/kappuccino.jpg" data-fancybox="image-cappucino" data-caption="Капучино">
                            <img src="img/menu/bar/kappuccino.jpg" class="item-img img-fluid" title="Капучино" alt="Капучино">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>капучино</h3>
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
                        <a href="img/menu/bar/coffee_halva.jpg" data-fancybox="image-cappucino-khalva" data-caption="Капучино с халвой">
                            <img src="img/menu/bar/coffee_halva.jpg" class="item-img img-fluid" title="Капучино" alt="Капучино с халвой">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>капучино с халвой</h3>
                        <span class="menu-bar-item-description">
                            [150 мл./10 гр.]                 
                        </span>
                        <span class="menu-bar-item-price">
                            ~199
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
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/bar/raf_mosc.jpg" data-fancybox="image-raf-mos" data-caption="Раф Московский">
                            <img src="img/menu/bar/raf_mosc.jpg" class="item-img img-fluid" title="Раф Московский" alt="Раф Московский">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>Раф Московский</h3>
                        <span class="menu-bar-item-description">
                            [230мл]                 
                        </span>
                        <span class="menu-bar-item-price">
                            ~299
                        </span>
                    </div>    
                </div>
<!--                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/bar/raf_alaska.jpg" data-fancybox="image-raf-alaska" data-caption="Раф Аляска">
                            <img src="img/menu/bar/raf_alaska.jpg" class="item-img img-fluid" title="Раф Аляска" alt="Раф Аляска">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>Раф Аляска</h3>
                        <span class="menu-bar-item-description">
                            [230мл]                 
                        </span>
                        <span class="menu-bar-item-price">
                            ~299
                        </span>
                    </div>    
                </div>-->
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/bar/raf_taiga.jpg" data-fancybox="image-taiga" data-caption="Раф Таежный сбор">
                            <img src="img/menu/bar/raf_taiga.jpg" class="item-img img-fluid" title="Раф Таежный сбор" alt="Раф Таежный сбор">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>Раф Таежный сбор</h3>
                        <span class="menu-bar-item-description">
                            [230мл]                 
                        </span>
                        <span class="menu-bar-item-price">
                            ~299
                        </span>
                    </div>    
                </div>
<!--                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/bar/raf_limon.jpg" data-fancybox="image-lemon" data-caption="Раф Лимонно-имбирный">
                            <img src="img/menu/bar/raf_limon.jpg" class="item-img img-fluid" title="Раф Лимонно-имбирный" alt="Раф Лимонно-имбирный">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>Раф Лимонно-имбирный</h3>
                        <span class="menu-bar-item-description">
                            [230мл]                 
                        </span>
                        <span class="menu-bar-item-price">
                            ~299
                        </span>
                    </div>    
                </div>-->
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
                        <a href="img/menu/bar/mors.jpg" data-fancybox="image-homemors" data-caption="Домашний морс">
                            <img src="img/menu/bar/mors.jpg" class="item-img img-fluid" title="Домашний морс" alt="Домашний морс">
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
                            1000 мл. ~249
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
                            330 мл. ~149
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
                            500 мл. ~149
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
                            250 мл. ~149
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
                            330 мл.  ~249
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
                            330 мл.  ~249
                        </span>
                    </div>    
                </div>
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/bar/red-bull.jpg" data-fancybox="image-redbull" data-caption="ред бул">
                            <img src="img/menu/bar/red-bull.jpg" class="item-img img-fluid" title="ред бул" alt="ред бул">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>ред булл</h3>
                        <span class="menu-bar-item-description">
                            [ж/б]                 
                        </span>
                        <span class="menu-bar-item-price">
                            250 мл.  ~249
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
            </div>

            <div class="food-menu-advertisment" id="f_lemonades">
                <span>
                    Лимонады ● от 399<i class="fas fa-ruble-sign"></i>
                </span>
            </div>

            <div class="food-menu-menu grid">
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
                            ~399
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
                            ~399
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
                            ~399
                        </span>
                    </div>    
                </div> 
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/bar/lemonad-tarhun.jpg" data-fancybox="image-limonad-tarhun" data-caption="Лимонад тархун">
                            <img src="img/menu/bar/lemonad-tarhun.jpg" class="item-img img-fluid" title="Лимонад тархун" alt="Лимонад тархун">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>Лимонад тархун</h3>
                        <span class="menu-bar-item-description">
                            [СИРОП МАЛИНА, СИРОП ЧЕРНАЯ СМОРОДИНА,
                            СИРОП КЛУБНИКА, СИРОП МЯТА,
                            МАЛИНА С/Мб, ЕЖЕВИКА С/М, МЯТА, ЛЕД, ГАЗ.ВОДА]<br/>
                            1000 мл.
                        </span>
                        <span class="menu-bar-item-price">
                            ~399
                        </span>
                    </div>    
                </div>
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/bar/lemodad-malina-imbir.jpg" data-fancybox="image-limonad-malinaimbir" data-caption="Лимонад малина имбирь">
                            <img src="img/menu/bar/lemodad-malina-imbir.jpg" class="item-img img-fluid" title="Лимонад малина имбирь" alt="Лимонад малина имбирь">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>Лимонад малина имбирь</h3>
                        <span class="menu-bar-item-description">
                            [ИМБИРЬ, МАЛИНА С/М, СИРОП МАЛИНА,
                            ГАЗ.ВОДА]<br/>
                            1000 мл.
                        </span>
                        <span class="menu-bar-item-price">
                            ~399
                        </span>
                    </div>    
                </div>
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/bar/lemonad-oblepikha.jpg" data-fancybox="image-limonad-oblepikha" data-caption="Лимонад облепиха">
                            <img src="img/menu/bar/lemonad-oblepikha.jpg" class="item-img img-fluid" title="Лимонад облепиха" alt="Лимонад облепиха">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>Лимонад облепиха</h3>
                        <span class="menu-bar-item-description">
                            [ОБЛЕПИХА С/М АПЕЛЬСИН, СИРОП АПЕЛЬСИНОВЫЙ,
                            САУЭРМИКС, ГАЗ.ВОДА]<br/>
                            1000 мл.
                        </span>
                        <span class="menu-bar-item-price">
                            ~399
                        </span>
                    </div>    
                </div>
                <div class="food-menu-item grid">
                    <div class="food-menu-item-img">
                        <a href="img/menu/bar/lemonad-ogurec.jpg" data-fancybox="image-limonad-ogurec" data-caption="Лимонад огуречный">
                            <img src="img/menu/bar/lemonad-ogurec.jpg" class="item-img img-fluid" title="Лимонад огуречный" alt="Лимонад огуречный">
                        </a>
                    </div>
                    <div class="food-menu-item-content">
                        <h3>Лимонад огуречный</h3>
                        <span class="menu-bar-item-description">
                            [АПЕЛЬСИН, ОГУРЕЦ, СИРОП ОГУРЕЧНЫЙ,
                            СОК ЯБЛОЧНЫЙ, САУЭРМИКС,
                            ГАЗ.ВОДА]<br/>
                            1000 мл.
                        </span>
                        <span class="menu-bar-item-price">
                            ~399
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
