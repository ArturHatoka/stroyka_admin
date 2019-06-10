<footer class="footer">
    <div class="footer__wrap">
        <div class="footer__logo">
            <img src="/<?=$additional[5]?>" alt="" class="footer__logo--img">
            <span class="footer__logo--copyright">
			<?=str_replace("\r\n","<br/>",$additional[12])?></span>
            <a href="#top-header" class="footer__logo--link">В начало</a>
        </div>
        <div class="footer__address">
            <a class="footer__address--home">Санкт-Петербург,
                пр. Обуховской Обороны, д. 271. Лит. А, оф. 607</a>
<!--            <a class="footer__address--mail">info@dom-navek.com</a>-->
        </div>
        <div class="footer__phone">
            <span>Контакты:</span>
            <?php foreach($tel_cnt AS $tel_cnti){ ?>
                <a><b><?=$tel_cnti?></b></a>
            <?php } ?>
        </div>
<!--        <div class="footer__links">-->
<!--            <div class="footer__links--icons"></div>-->
<!--            <span> Разработка сайта:</span>-->
<!--            <a class="footer__links--development">-->
<!--                <img src="/src/img/tatlogo.png" alt="">-->
<!--                "Тат-сайт"-->
<!--            </a>-->
<!--        </div>-->
        <!--noindex-->
        <?=$additional[14]?>
        <!--/noindex-->
    </div>
</footer>

<div id="callback" class="modalDialog">
    <div class="callbody">
        <div class="backcall">
            <a href="#close" title="Закрыть" class="close">X</a>
            <h2 class="call-modal-h2">Оставьте заявку и мы свяжемся с Вами в течение нескольких минут!</h2>
            <div class="tour-inputs">
                <div class="inputs_block">
                    <form id="tour--make_order" method="post" name="drop-box" action="/src/app/mail/send-mail.php">
                        <span class="inp-req">
                        <input id="rqname" name="name" type="text" required="" placeholder="Ваше имя" autocomplete="off" class="suggestions-input">
                        </span>
                        <span class="inp-req inp-req-marg">
                        <input id="rqtelephone" name="tel" type="text" required="" placeholder="Номер телефона" autocomplete="off" class="suggestions-input">
                        </span>
                        <span class="inp-req">
                        <input type="submit" class="search-button" value="Оставить заявку">
                        </span>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="endthx" class="modalDialog">
    <div class="callbody">
        <div class="backcall">
            <a href="#close" title="Закрыть" class="close">X</a>
            <div class="tour-inputs">
                <div id="result">
                    <p class="res_p">Ваша заявка принята, спасибо за обращение</p>
                    <h2><a href="#close">ЗАКРЫТЬ</a></h2>
                </div>
            </div>
        </div>
    </div>
</div>


<script src="/src/js/scripts.js"></script>