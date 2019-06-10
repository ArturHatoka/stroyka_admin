
    <section class="main__first">
        <div class="main__first--wrap">
            <div class="main__first--request">
                <h2>Строительство загородных домов</h2>
                <span>Узнать подробную смету 3-х самых популярных проектов 2019 года</span>
                <form method="post" action="/src/app/mail/send-mail.php">
                    <input type="hidden" name="name" value="Быстрый звонок">
                    <input class="request__phone" required="" name="tel" type="tel" placeholder="+7 (___) ___-__-__">
                    <button type="submit">Позвоните мне</button>
                </form>
            </div>
            <div class="main__first--action">
                <?=$additional[13]?>
                </div>
        </div>
    </section>
    <section class="main__types">
        <h2 class="main__types--title"><?=$additional[37]?></h2>
        <div class="main__types--wrap">
            <?=$additional[8]?>
        </div>
    </section>
    <section class="main__privilege">
        <div class="main__privilege--wrap">
            <div class="main__privilege--item">
                <img src="/src/img/priv1.png" alt="">
                <span>Гарантия 5 лет</span>
            </div>
            <div class="main__privilege--item">
                <img src="/src/img/priv2.png" alt="">
                <span>Сдача в срок</span>
            </div>
            <div class="main__privilege--item">
                <img src="/src/img/priv3.png" alt="">
                <span>Фиксированная стоимость</span>
            </div>
            <div class="main__privilege--item">
                <img src="/src/img/priv4.png" alt="">
                <span>Предоплата 0%</span>
            </div>
            <div class="main__privilege--item">
                <img src="/src/img/priv5.png" alt="">
                <span>Полный цикл инженерных работ</span>
            </div>
            <div class="main__privilege--item">
                <img src="/src/img/priv6.png" alt="">
                <span>Поэтапная оплата</span>
            </div>
            <div class="main__privilege--item">
                <img src="/src/img/priv7.png" alt="">
                <span>Гарантия качества строительных работ</span>
            </div>
        </div>
    </section>
    <?php if($additional[45]==0){ ?>
        <section class="main__project">
            <div class="main__project--title">
                <h2>Типовые проекты домов</h2>
            </div>
            <div  class="main__project--blocks goods">
                <?php
                $result = mysql_query("SELECT logo, id, name, price FROM ".MySQLprefix."_goods WHERE onmain=1 AND status=1 ORDER BY sort_id DESC");
                if($result)
                    if(mysql_num_rows($result)>0)
                        while($good = mysql_fetch_assoc($result)){
                            ?>
                            <div class="main__project--item">
                                <?php
                                $pic = 'admin/uploads/nophoto.png';
                                $pics = explode('|', $good['logo']);
                                if(is_array($pics) && count($pics)>0)
                                    foreach($pics AS $picc)
                                        if(strlen($picc)>0 && $pic == 'admin/uploads/nophoto.png')
                                            $pic = $picc;
                                ?>
                                <a class="main__project--item__link good-a" href="/goods/<?=$good['id']?>/"><img alt="" src="/<?=$pic?>" /></a>
                                <a href="/goods/<?=$good['id']?>/"><span class="main__project--item__title"><?=$good['name']?></span></a>
                                <div class="main__project--item__wrap">
                                    <?php if($additional[46]==0){ ?><a href="/goods/<?=$good['id']?>/" rel="<?=$good['id']?>" class="main__project--item__more"><?php if($additional[50]==0){ ?>В корзину<em></em><?php }else{ ?>Подробнее<?php } ?></a><?php } ?>
                                </div>
                            </div>
                            <?php
                        }
                ?>
            </div>
            <script>
                <!--
                $(document).ready(function(){
                    var s = 0;
                    $('.goods div').each(function(){
                        s++;
                        if(s/<?=($additional[29]==0?'4':'5')?>-Math.floor(s/<?=($additional[29]==0?'4':'5')?>)==0)
                            $(this).after('<br style="clear:both" />');
                    });
                });
                //-->
            </script>
            <div class="main__project--more">
                <a href="/<?=$katalog_a['url']?>/">Смотреть все</a>
            </div>
        </section>
    <?php } ?>

    <section class="main__request">
        <div class="main__request--wrap">
            <h2 class="main__request--title">Получите готовое решение</h2>
            <span class="main__request--subtitle">
                От расчета и проектирования до поставки и монтажа <br>
                Оставьте заявку и наш специалист перезвонит вам
            </span>
            <form method="post" action="/src/app/mail/send-mail.php" class="main__request--form">
                <input class="main__request--form__field name" name="name" type="text" placeholder="Ваше имя">
                <input class="main__request--form__field phone request__phone" name="tel" type="tel" placeholder="+7 (___) ___-__-__">
                <button class="main__request--form__field button" type="submit">Оставить заявку</button>
            </form>
            <span class="main__request--form__desc">
                Отправляя заявку, я принимаю условия <b>Пользовательского соглашения</b> и даю <b>Согласие на обработку персональных данных</b>.
            </span>
            <hr>
            <span class="main__request--desc">
                Что произойдет, когда вы оставите заявку
            </span>
            <div class="main__request--privilege">
                <div class="main__request--privilege__item">
                    <img src="/src/img/call.png" alt="">
                    <span>Консультация</span>
                </div>
                <div class="main__request--privilege__item">
                    <img src="/src/img/calculator.png" alt="">
                    <span>Расчёт</span>
                </div>
                <div class="main__request--privilege__item">
                    <img src="/src/img/management.png" alt="">
                    <span>Проектирование</span>
                </div>
                <div class="main__request--privilege__item">
                    <img src="/src/img/hammer.png" alt="">
                    <span>Монтаж</span>
                </div>
            </div>
        </div>
    </section>


    <section class="main__preview">
        <div class="main__preview--video">
            <?=$additional[56]?>
        </div>
        <span class="main__preview--txt">
            <?=$additional[57]?>
        </span>
    </section>
    <section class="main__slider">
        <h2 class="main__slider--title">Выполненые объекты</h2>
        <div class="main__slider--wrap">
            <div class="main__slider--box">

                <?php
                $img_ = mysql_query("SELECT * FROM ".MySQLprefix."_photoalb WHERE p_id=0 ORDER BY sort_id 43");
                if($img_ && mysql_num_rows($img_)>0)
                    while($img = mysql_fetch_assoc($img_)){
                        ?>

                        <div class="main__slider--box__item">
                            <a class="main__slider--box__item--photo" target="_blank" href="/photos/<?=$img['id']?>/">
                                <img alt="" src="/<?=$img['logo']?>" class="main__slider--box__item--photo__img" />
                            </a><? if(strlen($img['name'])>0){ ?>
                                <div class="main__slider--box__item--photo__info">
                                <a href="/photos/<?=$img['id']?>/" class="main__slider--box__item--photo__name pull-left"><?=$img['name']?></a>
                                <div class="clearfix"></div>
                                </div><? } ?>
                        </div>

                        <?php
                    }
                $img_ = mysql_query("SELECT * FROM ".MySQLprefix."_photogal WHERE p_id=43 ORDER BY sort_id ASC");
                if($img_ && mysql_num_rows($img_)>0)
                    while($img = mysql_fetch_assoc($img_)){
                        ?>

                        <div class="main__slider--box__item">
                            <a class="main__slider--box__item--photo" target="_blank" rel="lightbox" href="/galery">
                                <img alt="" src="/<?=$img['logo']?>" class="main__slider--box__item--photo__img" />
                            </a><? if(strlen($img['name'])>0){ ?>
                                <div class="main__slider--box__item--photo__info">
                                <div class="main__slider--box__item--photo__name pull-left"><?=$img['name']?></div>
                                <div class="clearfix"></div>
                                </div><? } ?>
                        </div>

                        <?php
                    }
                ?>
            </div>
            <div class="main__slider--shadow_left"></div>
            <div class="main__slider--shadow_right"></div>
        </div>
    </section>

    <section class="main__review">
        <h2 class="main__review--title">
            Отзывы о нас
        </h2>
        <div class="main__review--wrap">
            <?
            $result = mysql_query("SELECT * FROM ".MySQLprefix."_faq ORDER BY id ASC LIMIT 0, 3");
            if ($result)
                while ($row = mysql_fetch_assoc($result)){
                    ?>
                    <div class="main__review--box">
                        <img src="/<?=$row['logo']?>" alt="">
                        <span><?=$row['name']?></span>
                        <?=$row['text']?>
                    </div>
                    <?
                }
            ?>
        </div>
    </section>

    <section class="main__know">
        <div class="main__know--wrap">
            <h2 class="main__know--title">Мы знаем, как нужно строить дома!</h2>
            <span class="main__know--subtitle">Если хотите, чтобы результат строительства был отличным, следуйте правилам:</span>
            <div class="main__know--boxes">
                <div class="main__know--boxes__item">
                    <img src="/src/img/project1.jpg" alt="">
                    <h3>Проектируй</h3>
                    <span>Продуманный проект дома избавит вас от лишних сюрпризов и непредвиденных трат на этапе строительства.</span>
                </div>
                <div class="main__know--boxes__item">
                    <img src="/src/img/project1.jpg" alt="">
                    <h3>Работа с производителем</h3>
                    <span>На нашем производстве используем материаты напрямую от поставщиков, без постредников</span>
                </div>
                <div class="main__know--boxes__item">
                    <img src="/src/img/project1.jpg" alt="">
                    <h3>Стройка под контролем</h3>
                    <span>Точная смета и договор на строительство. Контроль этапов стройки ответственным мастером,</span>
                </div>
            </div>
        </div>
    </section>

    <?php if($additional[58]==0){ ?>
        <section class="main__articles">
            <div class="main__articles--title">
                <h2>Полезные статьи</h2></div>
            <div class="main__articles--wrap">
            <?php
            $anons = mysql_query("SELECT ".MySQLprefix."_news.pic, ".MySQLprefix."_news.h1, ".MySQLprefix."_news.date_create, ".MySQLprefix."_news.comment, ".MySQLprefix."_urls.url FROM ".MySQLprefix."_news, ".MySQLprefix."_urls WHERE ".MySQLprefix."_news.id=".MySQLprefix."_urls.target_id AND ".MySQLprefix."_urls.target_type='news' ORDER BY ".MySQLprefix."_news.id DESC LIMIT 0, 3");
            if($anons && mysql_num_rows($anons)>0)
                while($anon = mysql_fetch_assoc($anons)){
                    ?>
                    <div class="main__articles--box">
                        <h3 class="main__articles--box__title">
                            <a href="/<?=$anon['url']?>/"><?=$anon['h1']?></a>
                        </h3>
                        <b><?=date('d.m.Y',strtotime($anon['date_create']))?></b>
                        <?php
                        $pic = '';
                        $pics = explode('|', $anon['pic']);
                        if(is_array($pics) && count($pics)>0)
                            foreach($pics AS $picc)
                                if(strlen($picc)>0 && $pic == '')
                                    $pic = $picc;
                        if($pic != ''){
                            ?>
                            <div class="main__articles--box__img">
                                <img alt="" src="/<?=str_replace(".","_small.",$pic)?>" />
                            </div>
                            <?php
                        }
                        ?>
                        <span class="main__articles--box__txt">
                                        <?=textTrimm($anon['comment'],500)?>
                                    </span>
                        <a  class="main__articles--box__link" href="/<?=$anon['url']?>/">
                            Подробнее
                        </a>
                    </div>
                    <?php
                }
            ?>
            </div>
            <a class="main__articles--box__all" href="/news/">Смотреть все статьи</a>
        </section>
    <?php } ?>

    <section class="main__sale">
        <div class="main__sale--title">
            <h2>Дома на продажу</h2>
        </div>
        <div  class="main__sale--blocks goods">
            <?php
            $result = mysql_query("SELECT logo, id, name, price FROM ".MySQLprefix."_goods WHERE onmain=2 AND status=1 ORDER BY sort_id DESC");
            if($result)
                if(mysql_num_rows($result)>0)
                    while($good = mysql_fetch_assoc($result)){
                        ?>
                        <div class="main__sale--item">
                            <?php
                            $pic = 'admin/uploads/nophoto.png';
                            $pics = explode('|', $good['logo']);
                            if(is_array($pics) && count($pics)>0)
                                foreach($pics AS $picc)
                                    if(strlen($picc)>0 && $pic == 'admin/uploads/nophoto.png')
                                        $pic = $picc;
                            ?>
                            <a class="main__sale--item__link good-a" href="/goods/<?=$good['id']?>/"><img alt="" src="/<?=$pic?>" /></a>
                            <a href="/goods/<?=$good['id']?>/"><span class="main__project--item__title"><?=$good['name']?></span></a>
                            <div class="main__sale--item__about">

                                    <?php
                                    $good_chars = mysql_query("SELECT id, name, ed, text FROM ".MySQLprefix."_good_chars ORDER BY sort_id DESC");
                                    if($good_chars)
                                        if(mysql_num_rows($good_chars)>0)
                                            while($char = mysql_fetch_assoc($good_chars)){

                                                $good_chars_val = mysql_query("SELECT id, char_id, good_id, char_val FROM ".MySQLprefix."_good_chars_val ORDER BY id DESC");
//                                                $good_chars_val = mysql_query("SELECT ".MySQLprefix."_good_chars_val.id, ".MySQLprefix."_good_chars_val.char_id, ".MySQLprefix."_good_chars_val.good_id, ".MySQLprefix."_good_chars_val.char_val FROM ".MySQLprefix."_good_chars_val WHERE ".MySQLprefix."_good_chars_val.char_id=".MySQLprefix."_good_chars.id ORDER BY ".MySQLprefix."_good_chars_val.id DESC");
                                                if($good_chars_val)
                                                    if(mysql_num_rows($good_chars_val)>0)
                                                        while($char_val = mysql_fetch_assoc($good_chars_val)){
                                                        if ($char_val['good_id']==$good['id']){
                                                            if ($char_val['char_id']==$char['id']){
                                                            ?>

                                                            <span class="main__sale--item__about--plo">
                                                                <?=$char_val['char_val'] ?>
                                                                <?=$char['ed']?>
                                                            </span>

                                                        <?php }
                                                        }
                                                    }

                                            } ?>

                            </div>
                            <div class="main__sale--item__wrap">
                                <?php if($good['price']>0){ ?><span  class="main__sale--item__price"><?=$good['price']?> руб.</span><?php } ?>
                                <?php if($additional[46]==0){ ?><a href="/goods/<?=$good['id']?>/" rel="<?=$good['id']?>" class="main__sale--item__more"><?php if($additional[50]==0){ ?>В корзину<em></em><?php }else{ ?>Подробнее<?php } ?></a><?php } ?>
                            </div>
                        </div>
                        <?php
                    }
            ?>
        </div>


        <script>
            <!--
            $(document).ready(function(){
                var s = 0;
                $('.goods div').each(function(){
                    s++;
                    if(s/<?=($additional[29]==0?'4':'5')?>-Math.floor(s/<?=($additional[29]==0?'4':'5')?>)==0)
                        $(this).after('<br style="clear:both" />');
                });
            });
            //-->
        </script>
        <div class="main__sale--more">
            <a href="/<?=$katalog_a['url']?>/">Смотреть все</a>
        </div>
    </section>

    <section class="main__text pagetext">
        <h1><?=$seo["h1"]?></h1>
        <?=str_replace($ar_rf,$ar_to,$seo["text"])?>
    </section>

    <section class="main__map">
        <div class="main__map--title">
            <h2>Более 232 построенных объектов</h2>
        </div>
        <div class="main__map--box">
            <?=$additional[2]?>
        </div>
    </section>
    <script src="/src/js/jquery.min.js"></script>
    <script src="/src/js/jquery.maskedinput.min.js"></script>
    <script src="/src/app/slick/slick.min.js"></script>