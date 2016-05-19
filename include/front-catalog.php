

<style>
    .front-catalog_h3{
        font-weight: 500;
        text-align: center;
    }
    .advantages__item{
        margin-top:25px;
        margin-bottom: 45px;
    }
    .advantages__item-number{
        color: #00569C;
        font-size: 25px;
        font-weight: bold;
    }
    .advantages__item-p{
        color:  #00569C;
        font-size:15px;
        margin-bottom:15px;
        margin-top:15px;
        display: inline-block;
        text-transform: uppercase;
    }

    .blue-head{
        border-bottom: 1px dotted  #00569C;
        color:  #00569C;
        font-size: 25px;
    }

    .grey-head{
        border-bottom: 1px dotted  grey;
        font-size: 25px;
    }

    .form-control{
        height: 28px;
    }

    .text-left-40{
        margin-left: -40px;
    }

    .round-logistic{
        width: 80px;
        height: 80px;
        border-radius: 50%;
        border: 1px solid #ddd;
        position: relative;
        margin-left: 80px;
        margin-bottom: 30px;
        margin-top: 40px;
    }



    .long-line{
        width: 130px;
        border-bottom: 1px solid #ddd;
        display: inline-block;
        margin-left: 30px;
        margin-right: 30px;
        position: absolute;
        top: 74px;
        left: 184px;
    }

    .icon-user-md, .icon-suitcase{
        position: absolute;
        top: 21px;
        left: 25px;
        font-size: 30px;
    }

    .icon-road-logistic, .icon-truck-logistic{
        position: absolute;
        top: 21px;
        left: 25px;
        font-size: 30px;
    }

    .btn-more-logistic{
        margin-top:40px;
    }



    /*Вертикальные табы, доставка*/


    /*  bhoechie tab */
    div.bhoechie-tab-container{
        display: inline-block;
        background-color: #ffffff;
        padding-top:20px;
        padding-bottom:40px;
        border-radius: 4px;
        -moz-border-radius: 4px;
        border:none;
        margin-top: 20px;
        margin-left: 50px;
        -webkit-box-shadow: 0 6px 12px rgba(0,0,0,.175);
        -moz-box-shadow: 0 6px 12px rgba(0,0,0,.175);
        background-clip: padding-box;
        opacity: 0.97;
        filter: alpha(opacity=97);
        z-index: 1000;

        box-shadow: 0 2px 14px rgba(0,0,0,.175);
    }
    div.bhoechie-tab-menu{
        padding-right: 0;
        padding-left: 0;
        padding-bottom: 0;
    }
    div.bhoechie-tab-menu div.list-group{
        margin-bottom: 0;
        left:65px;
        position: relative;
        background: none;
        border: none;
    }
    div.bhoechie-tab-menu div.list-group>a{
        margin-bottom: 0;
    }
    div.bhoechie-tab-menu div.list-group>a .glyphicon,
    div.bhoechie-tab-menu div.list-group>a .fa {
        color: #5A55A3;
    }
    div.bhoechie-tab-menu div.list-group>a:first-child{
        border-top-right-radius: 0;
        -moz-border-top-right-radius: 0;
    }
    div.bhoechie-tab-menu div.list-group>a:last-child{
        border-bottom-right-radius: 0;
        -moz-border-bottom-right-radius: 0;
    }


    div.bhoechie-tab-menu div.list-group>a.active, div.bhoechie-tab-menu div.list-group>a.active , div.bhoechie-tab-menu div.list-group>a.active {
        background-color: transparent;

        color:#000;
        border:none;
    }
    div.bhoechie-tab-menu div.list-group>a.active:after{
        content: '';
        position: absolute;
        left: 100%;
        top: 50%;
        margin-top: -13px;
        border-left: 0;
        border-bottom: 13px solid transparent;
        border-top: 13px solid transparent;
        /*border-left: 10px solid #5A55A3;*/

    }

    div.bhoechie-tab-content{
        background-color: #ffffff;
        /* border: 1px solid #eeeeee; */
        padding-left: 20px;
        padding-top: 10px;
    }

    div.bhoechie-tab div.bhoechie-tab-content:not(.active){
        display: none;
    }


    .list-group-item{
        text-decoration: none;
        font-size: 18px;
        font-weight: bold;
        text-align: left;
    }
    .transfer-head__name{
       margin-bottom: 60px;
        margin-top: 40px;
    }
    .transfer-list{
        list-style: none;
        display: inline-block;
    }
    
    .transfer-list li{
        float: left;

        margin-right: 50px;
        margin-bottom: 30px;
        margin-top: 20px;
        display: inline-block;
    }

    .transfer-list li span{
        padding-left: 15px;
    }

    .icon-truck-transfer{
        font-size:40px;
    }

    .icon-road-transfer{
        font-size: 35px;
        display: inline-block;
    }

    .transfer-fieldset-wrap{
        border:1px solid #ddd;
    }

    .transfer-list__2{

    }

    .contacts-on-page__main td{
        vertical-align: middle;

    }
    .contacts-on-page__main td span{
        font-size: 20px;
        font-weight: bold;
    }

    .slick-prev:before, .slick-next:before{
        color: darkorange;
        font-size: 25px;
    }

    .multiple-slide{
        margin-top:40px;
        margin-bottom: 40px;
    }

    .multiple-slide div{
        margin-left:30px;
        height:165px;

    }
    .multiple-slide div img{

    }

    .multiple-slide div p{
        font-size: 18px;
        text-align: center;
        color: #ddd;
        top: -110px;
        position: relative;
        font-weight: bold;
        line-height: 1.3;
        text-transform: uppercase;
        text-shadow: 0 0 6px #000, 0 0 12px #000;
    }

    .transfer-head-tab{
        display: inline-block;
        margin-left: 20px;
        font-weight: 600;
        color: cornflowerblue;
        border-bottom: 1px solid;
        vertical-align: middle;

        margin-bottom: 15px;
    }

    .list-group-item{
        background: none;
        border:none;
    }
    .legend-all{
        max-width: 125px;
        font-size: 17px;
        font-weight: 600;
    }



</style>
<!--<div class="flexslider" data-plugin-options="{&quot;animation&quot;:&quot;slide&quot;, &quot;animationLoop&quot;: true, &quot;maxItems&quot;: 4}">-->
<!--    <ul class="slides">-->
<!--        <li> <img src="/local/templates/aspro-allcorp/images/custom_img/slide-1.jpg" alt="" class="img-responsive" width="275px" height="175px">-->
<!--            <p class="flex-caption">Заголовки и надписи. Для лучшего восприятия изображений.</p>-->
<!--        </li>-->
<!---->
<!--        <li> <img src="/local/templates/aspro-allcorp/images/custom_img/slide-2.jpg" alt="" class="img-responsive">-->
<!--            <p class="flex-caption">Заголовки и надписи. Для лучшего восприятия изображений.</p>-->
<!--        </li>-->
<!--<!--        <li> <img src="/local/templates/aspro-allcorp/images/custom_img/slide-4.jpg" alt="" class="img-responsive"> </li>-->
<!--    </ul>-->
<!--</div>-->


<div class="container">

    <div class="multiple-slide">
        <div>
            <img src="/local/templates/aspro-allcorp/images/test-click.jpg "  style="-webkit-filter: opacity(80%);"  alt="" class="img-responsive">
            <p>Весь спектр услуг по поставкам</p>
        </div>
        <div>
            <img src="/local/templates/aspro-allcorp/images/test-click.jpg" alt="" class="img-responsive">
            <p>Прямые поставки от производителей</p>
        </div>
        <div>
            <img src="/local/templates/aspro-allcorp/images/test-click.jpg" alt="" class="img-responsive">
            <p>ПРОДУКЦИЯ В НАЛИЧИИ НА СОБСТВЕННЫХ СКЛАДАХ</p>
        </div>
        <div>
            <img src="/local/templates/aspro-allcorp/images/test-click.jpg" alt="" class="img-responsive">
            <p>ПОДВИЖНОЙ ПАРК</p>
        </div>
        <div>
            <img src="/local/templates/aspro-allcorp/images/test-click.jpg" alt="" class="img-responsive">
            <p>ЭКСПЕДИРОВАНИЕ ГРУЗОВ</p>
        </div>
        <div>
            <img src="/local/templates/aspro-allcorp/images/test-click.jpg" alt="" class="img-responsive">
            <p>СОБСТВЕННЫЕ БАЗЫ РАЗГРУЗКИ И ВРЕМЕННОГО ХРАНЕНИЯ</p>
        </div>
    </div>
</div>
<script type="text/javascript">
    $('.multiple-slide ').slick({
        infinite: true,
        slidesToShow: 4,
        //количество слайдов, которые выводятся на экране
        slidesToScroll: 2
        //количество слайдов, которые перелистываются за один раз
    });

</script>
<h3 class="front-catalog_h3">«Минерал Плюс» — один из крупнейших поставщиков природного сырья и минералов в УРФО</h3>

<p class="text-center">Компания «Минерал Плюс» образовалась в 2007 году как торгово-производственное предприятие. В настоящее время «Минерал Плюс» является одним из крупнейших поставщиков природных наполнителей, природного камня, химических реагентов.,  а так же производителем декоративной крошки, использующейся преимущественно в ландшафтном дизайне.</p>


<!--СЛАЙДЕР-->
<!---->
<div class="container">
    <div class="advantager">
        <h5 class="text-center">За 9 лет существования нашей компании</h5>
        <div class="col-md-4">

            <div class="advantages__item text-center">
                <div class="advantages__item-number"> 1340</div>
                <p class="advantages__item-p">Постоянных клиентов</p>
                <p>«Минерал Плюс» в 90% случаев становится постоянным поставщиком для новых клиентов.</p>
            </div>

        </div>
        <div class="col-md-4">

            <div class="advantages__item text-center">
                <div class="advantages__item-number"> 11 598 ТН.</div>
                <p class="advantages__item-p">Продукции доставлено</p>
                <p>За 9 лет мы осуществили поставки в 10 стран, <br/> 456 городов.</p>
            </div>

        </div>
        <div class="col-md-4">

            <div class="advantages__item text-center">
                <div class="advantages__item-number"> 12 763 КМ</div>
                <p class="advantages__item-p">ЛОГИСТИЧЕСИХ МАРШРУТОВ</p>
                <p>"Минерал Плюс" имеет наработанную базу провернных перевозчиков и отлаженных логистических маршрутов.</p>
            </div>

        </div>
        <div class="text-center">
            <a href="http://alfa.maxkondaurov.ru/company/"> <button type="button" class="btn btn-default">ПОДРОБНЕЕ О КОМПАНИИ &#8250;</button></a>
        </div>

    </div>

    <hr/>
    <!--    -->
    <!--    Тут вывод продукции переверстанный-->
    <!--    -->
    <!--    2222-->

    <!--    Расчет стоимости заказа или получить образцы-->




</div>
<!--    форма калькулятор-->
<div class="container">
    <h3 class="text-center"><span class="blue-head">Рассчитать стоимость заказа </span>
        или    <span class="grey-head">Получить образцы</span> </h3>
    <div class="row">
        <div class="col-md-4">

            <p class="select-head-p">1.Выберите категорию продукции</p>
            <select>
                <option>Микрокальцит</option>
                <option>Мраморная крошка,песок</option>
                <option>Щебень</option>
                <option>Минеральный порошок</option>
                <option>Каолин</option>
                <option>Химические реагенты</option>
            </select>

        </div>
        <div class="col-md-4">

            <p class="select-head-p">2.Выберите категорию продукции</p>
            <select>
                <option>Микрокальцит стандарт, фракция 2мкм.</option>
                <option>Микрокальцит стандарт, фракция 3мкм</option>
                <option>Микрокальцит стандарт, фракция 60мкм</option>
                <option>Микрокальцит стандарт, фракция 80мкм</option>
                <option>Микрокальцит стандарт, фракция 150мкм</option>
                <option>Микрокальцит стандарт, фракция 120мкм</option>
                <option>Микрокальцит стандарт, фракция 10мкм</option>
                <option>Микрокальцит стандарт, фракция 50мкм</option>
                <option>Микрокальцит стандарт, фракция 3мкм</option>
            </select>


        </div>
        <div class="col-md-4">

            <p class="select-head-p">3.Ваши контакты</p>
            <form class="form-horizontal" role="form">
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-0 control-label hidden"></label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control input-sm" id="inputText" placeholder="Имя">
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-0 hidden control-label hidden"></label>
                    <div class="col-sm-8">
                        <input type="email" class="form-control input-sm" id="inputEmail3" placeholder="Email">
                    </div>
                </div>

                <div class="form-group">
                    <label for="inputPassword3" class="col-sm-0 hidden control-label"></label>
                    <div class="col-sm-8">
                        <input type="tel" class="form-control input-sm" id="#" placeholder="Телефон">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-8">
                        <button type="button" class="btn btn-primary btn-sm text-left-40">УЗНАТЬ СТОИМОСТЬ ЗАКАЗА</button>
                    </div>
                </div>
            </form>

        </div>
    </div>
</div>

<hr>
<!--Логистика-->


<script type="text/javascript">

    $(document).ready(function() {
        $("div.bhoechie-tab-menu>div.list-group>a").click(function(e) {
            e.preventDefault();
            $(this).siblings('a.active').removeClass("active");
            $(this).addClass("active");
            var index = $(this).index();
            $("div.bhoechie-tab>div.bhoechie-tab-content").removeClass("active");
            $("div.bhoechie-tab>div.bhoechie-tab-content").eq(index).addClass("active");
        });
    });

</script>
<!--Доставка-->
<div class="container" style="box-shadow: 0 2px 14px rgba(0,0,0,.175);">
    <div class="">
        <h3 class="text-center transfer-head__name">Способы доставки</h3>
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bhoechie-tab-container">
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 bhoechie-tab-menu">
            <div class="list-group">
                <a href="#" class="list-group-item active text-center">
                    <h4 class=" icon icon-truck icon-truck-transfer"></h4><p href="#" class="transfer-head-tab">Автотранспорт</p>
                </a>
                <a href="#" class="list-group-item text-center">
                    <h4 class="icon icon-road icon-road-transfer"></h4><p href ="#" class="transfer-head-tab">Железная дорога</p>
                </a>

            </div>
        </div>
        <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 bhoechie-tab">

            <!--truck section -->
            <div class="bhoechie-tab-content active text-left">

<!--                <h5 class="text-left">Грузим в :</h5>-->

                <ul class="transfer-list  ">
                    <p class="text-left"><b>Доставка автотранспортом пользуется большим спросом из-за удобства</b></p>
                    <li>
                        <img class="img-circle" alt="80x80" style="width: 65px; height: 65px;" src="../local/templates/aspro-allcorp/images/transfer/fura_tent1.png">
                        <span>Тентованные фуры</span>
                    </li>
                    <li>
                        <img class="img-circle" alt="80x80" style="width: 65px; height: 65px;" src="../local/templates/aspro-allcorp/images/transfer/samosval.png">
                        <span>Самосвалы</span>
                    </li>
                    <li>
                        <img class="img-circle" alt="80x80" style="width: 65px; height: 65px;" src="../local/templates/aspro-allcorp/images/transfer/termobudki.png">
                        <span>Термобудки</span>
                    </li>
                    <li>
                        <img class="img-circle" alt="80x80" style="width: 65px; height: 65px;" src="../local/templates/aspro-allcorp/images/transfer/open-bort.png">
                        <span>Открытый борт</span>
                    </li>
                    <li><img class="img-circle" alt="80x80" style="width: 65px; height: 65px;" src="../local/templates/aspro-allcorp/images/transfer/cementovoz.png">
                        <span>Цементовозы</span></li>
                </ul>

                <fieldset><legend class="legend-all">Упаковываем </legend>

                    <ul class="transfer-list transfer-list__2  text-left">
                        <li>
                            <img class="img-circle" alt="80x80" style="width: 65px; height: 65px;" src="../local/templates/aspro-allcorp/images/transfer/navalom.png">
                            <span>Навалом, без упаковки</span>
                        </li>
                        <li>
                            <img class="img-circle" alt="80x80" style="width: 65px; height: 65px;" src="../local/templates/aspro-allcorp/images/transfer/meshok.png">
                            <span>В мешки</span>
                        </li>


                        <li><img class="img-circle" alt="80x80" style="width: 65px; height: 65px;" src="../local/templates/aspro-allcorp/images/transfer/mkr.png">
                            <span>В МКР</span></li>
                    </ul>


                </fieldset>

<!--                -->




            </div>
            <!-- road section -->
            <div class="bhoechie-tab-content  text-left">

                <h5 class="text-left">Грузим в :</h5>

                <ul class="transfer-list styled-block ">
                    <p class="text-left"><b>Продукцию выгоднее всего перевозить по железной дороге. Доставка автомобилем обойдется дороже, но займет меньше времени.</b></p>
                    <li>
                        <img class="img-circle" alt="80x80" style="width: 65px; height: 65px;" src="../local/templates/aspro-allcorp/images/transfer/vagon.png">
                        <span>В вагоны</span>
                    </li>
                    <li>
                        <img class="img-circle" alt="80x80" style="width: 65px; height: 65px;" src="../local/templates/aspro-allcorp/images/transfer/poluvagon.png">
                        <span>Полувагон</span>
                    </li>
                    <li>
                        <img class="img-circle" alt="80x80" style="width: 65px; height: 65px;" src="../local/templates/aspro-allcorp/images/transfer/hoper.png">
                        <span>Хопер</span>
                    </li>
                    <li>
                        <img class="img-circle" alt="80x80" style="width: 65px; height: 65px;" src="../local/templates/aspro-allcorp/images/transfer/open-bort.png">
                        <span>Открытый борт</span>
                    </li>
                    <li><img class="img-circle" alt="80x80" style="width: 65px; height: 65px;" src="../local/templates/aspro-allcorp/images/transfer/cementovoz.png">
                        <span>Цементовозы</span></li>
                </ul>

                <h5 class="text-left">Упаковываем в :</h5>

                <ul class="transfer-list transfer-list__2 styled-block text-left">
                    <li>
                        <img class="img-circle" alt="80x80" style="width: 65px; height: 65px;" src="../local/templates/aspro-allcorp/images/transfer/navalom.png">
                        <span>Навалом, без упаковки</span>
                    </li>
                    <li>
                        <img class="img-circle" alt="80x80" style="width: 65px; height: 65px;" src="../local/templates/aspro-allcorp/images/transfer/meshok.png">
                        <span>В мешки</span>
                    </li>


                    <li><img class="img-circle" alt="80x80" style="width: 65px; height: 65px;" src="../local/templates/aspro-allcorp/images/transfer/mkr.png">
                        <span>В МКР</span></li>
                </ul>


            </div>
        </div>


        </div></div>

    <div>
        <h3 class="text-center">Логистика</h3>
        <p class="text-center col-md-12">Поставки осуществляются по всей РФ и СНГ со складов в Москве и Магнитогорске. Нами заключены договоры по выполнению погрузочно-разгрузочных работ с крупнейшими транспортными компаниями. Мы гарантируем своим клиентам оптимальные условия доставки по низким ценам. Мы строго соблюдаем созданные договоренности и доступны для нашего клиента 24 часа 7 дней в неделю.</p>


        <div class="col-md-3">

            <div class="round-logistic"><i class="icon icon-user-md"></i></div>
            <p class="text-center">Экспедируем грузы</p>
            <div class="long-line"></div>
        </div>
        <div class="col-md-3">
            <div class="round-logistic"><i class="icon icon-truck icon-truck-logistic"></i></div>
            <p class="text-center">Собственные базы <br/>перевозчиков</p>
            <div class="long-line"></div>
        </div>
        <div class="col-md-3">

            <div class="round-logistic"><i class="icon  icon-suitcase"></i></div>
            <p class="text-center">Базы разгрузки и временного <br/>хранения на Урале,<br/> Нижнем-Новгороде, Москве</p>
            <div class="long-line"></div>

        </div>
        <div class="col-md-3">

            <div class="round-logistic"><i class="icon icon-road icon-road-logistic"></i></div>
            <p class="text-center">Отслеживание отправлений<br/> службой ATI.SU и системой<br/> ЭТРАН</p>


        </div>

        <div class="text-center">
            <a href="http://alfa.maxkondaurov.ru/dostavka/"  class="text-center">
                <button type="button" class="btn btn-default btn-more-logistic">
                    ПОДРОБНЕЕ О ЛОГИСТИКЕ   <span class="icon icon-location-arrow"></span></button> </a>
        </div>
    </div>
    </div>
<!--Контактная информация-->
<div class="container">
    <h2>Контактная информация</h2>
    <div class="tabs">
        <ul class="nav nav-tabs">
            <li class="active"><a href="#popularPosts" data-toggle="tab"><i class="icon icon-star"></i> Магнитогорск</a></li>
            <li class=""><a href="#recentPosts" data-toggle="tab">Москва</a></li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane active" id="popularPosts">
                <div class="row">
                    <div class="col-md-5">

                        <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=pZ-M92-_Ry-8-Wf96bY6W3u_7IaF4gLs&width=400&height=720&lang=ru_RU&sourceType=constructor&scroll=true"></script>

                    </div>

                    <div class="col-md-7">

                        <h4>Головной офис в Магнитогорске</h4>
                        <table cellpadding="0" cellspasing="0" class="contacts-on-page__main">
                            <tbody>
                            <tr>
                                <td align="left" valign="top">
                                    <i class="icon colored icon-envelope"></i>
                                </td>
                                <td align="left" valign="top">

                                    <p>
                                        <span class="grey_dark"><a href="mailto:info@plusmontage.ru">info@mineralplus.ru</a></span>
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td align="left" valign="top">
                                    <i class="icon colored icon-phone"></i>
                                </td>
                                <td align="left" valign="top">

                                    <p>
                                        <span class="grey_dark"><b>+7(351) 277-82-37</b></span><br>

                                    </p>
                                </td>
                            </tr>
<!--                            СКАААЙП-->
                            <tr>
                                <td align="left" valign="top">
                                    <i class="icon colored icon-skype"></i>
                                </td>
                                <td align="left" valign="top">

                                    <p>
                                        <span class="grey_dark"><b>mineralplus</b></span><br>

                                    </p>
                                </td>
                            </tr>

                            <tr>
                                <td align="left" valign="top">
                                    <i class="icon colored icon-map-marker"></i>
                                </td>
                                <td align="left" valign="top">
                                    <p>
                                        <span class="grey_dark">г.&nbsp;Магнитогорск, пр.Ленина, 85,<br>
					4 этаж, офис 416</span>
                                    </p>
                                </td>



                            </tr>



                            </tbody>
                        </table>



                        <hr>

                            <p><b>Обратная связь</b></p>
                            <form action="" type="post">
                                <div class="row">
                                    <div class="form-group">
                                        <div class="col-md-6">
                                            <label>Ваше Имя*</label>
                                            <input type="text" value="" maxlength="100" class="form-control" name="name" id="name">
                                        </div>
                                        <div class="col-md-6">
                                            <label>Ваш email *</label>
                                            <input type="email" value="" maxlength="100" class="form-control" name="email" id="email">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <label>Cообщение *</label>
                                            <textarea maxlength="5000" rows="10" class="form-control" name="comment" id="comment" style="height: 138px;"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <input type="submit" value="Отправить" class="btn btn-primary btn-lg" data-loading-text="Loading...">
                                    </div>
                                </div>
                            </form>



                    </div>
                </div>
            </div>

            <div class="tab-pane" id="recentPosts">

                <div class="row">
                    <div class="col-md-5">

                        <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=pZ-M92-_Ry-8-Wf96bY6W3u_7IaF4gLs&width=400&height=720&lang=ru_RU&sourceType=constructor&scroll=true"></script>

                    </div>

                    <div class="col-md-7">

                        <h4>Головной офис в Москве</h4>
                        <table cellpadding="0" cellspasing="0" class="contacts-on-page__main">
                            <tbody>
                            <tr>
                                <td align="left" valign="top">
                                    <i class="icon colored icon-envelope"></i>
                                </td>
                                <td align="left" valign="top">

                                    <p>
                                        <span class="grey_dark"><a href="mailto:info@plusmontage.ru">info@mineralplus.ru</a></span>
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td align="left" valign="top">
                                    <i class="icon colored icon-phone"></i>
                                </td>
                                <td align="left" valign="top">

                                    <p>
                                        <span class="grey_dark"><b>+7(351) 277-82-37</b></span><br>

                                    </p>
                                </td>
                            </tr>
                            <!--                            СКАААЙП-->
                            <tr>
                                <td align="left" valign="top">
                                    <i class="icon colored icon-skype"></i>
                                </td>
                                <td align="left" valign="top">

                                    <p>
                                        <span class="grey_dark"><b>mineralplus</b></span><br>

                                    </p>
                                </td>
                            </tr>

                            <tr>
                                <td align="left" valign="top">
                                    <i class="icon colored icon-map-marker"></i>
                                </td>
                                <td align="left" valign="top">
                                    <p>
                                        <span class="grey_dark">г.&nbsp;Магнитогорск, пр.Ленина, 85,<br>
					4 этаж, офис 416</span>
                                    </p>
                                </td>



                            </tr>



                            </tbody>
                        </table>



                        <hr>

                        <p><b>Обратная связь</b></p>
                        <form action="" type="post">
                            <div class="row">
                                <div class="form-group">
                                    <div class="col-md-6">
                                        <label>Ваше Имя*</label>
                                        <input type="text" value="" maxlength="100" class="form-control" name="name" id="name">
                                    </div>
                                    <div class="col-md-6">
                                        <label>Ваш email *</label>
                                        <input type="email" value="" maxlength="100" class="form-control" name="email" id="email">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <label>Cообщение *</label>
                                        <textarea maxlength="5000" rows="10" class="form-control" name="comment" id="comment" style="height: 138px;"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <input type="submit" value="Отправить" class="btn btn-primary btn-lg" data-loading-text="Loading...">
                                </div>
                            </div>
                        </form>



                    </div>
                </div>

            </div>
        </div>
    </div>


</div>

</div>


<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
<br/>
