<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();?>

<footer class="g-footer container-fluid footer_text footer__bg">
	
    <div class="container">
        <div class="row">
            <div class="row__inline-blocks text_center__mid-xs">
                <div class="col-xs-12 col-mid-xs-6 col-sm-3">
                    <div class="footer_title">Информация</div>
                    <ul class="footer_menu list_reset">
                        <li><a href="#">Глвная</a></li>
                        <li><a href="#">Услуги</a></li>
                        <li><a href="#">Акции</a></li>
                        <li><a href="#">Партнеры</a></li>
                        <li><a href="#">Контакты</a></li>
					</ul>
				</div>
                <div class="col-xs-12 col-mid-xs-6 col-sm-3">
                    <div class="footer_title">Контакты</div>
                    <div>г.Молодечно, ул.Волынца, д.4</div>
                    <div class="Lora-BoldItalic phone_footer"><a href="tel:555-555-5555" > 8(029) 555-55-55</a></div>
                    <div class="Lora-BoldItalic phone_footer"><a href="tel:555-555-5555" > 8(029) 555-55-55</a></div>
                    <div class="fz_16 mt_1">Работаем без выходных</div>
                    <div class="Lora-BoldItalic">
                        9.00 - 22.00
					</div>
				</div>
                <div class="col-xs-12 col-mid-xs-6 col-sm-3">
                    <div class="footer_title">Время работы</div>
                    <ul class="list_inline mb_1 footer_social">
                        <li>Пн-Вс: 9.00 - 22.00</li>
					</ul>
				</div>
                <div class="col-xs-12 col-mid-xs-6 col-sm-3 text_center">
                    <div class="footer_title">Мы в соц.сетях</div>
                    <ul class="list_inline mt_2 mb_2 footer_social">
                        <li><a href="#"><i class="icon _vk"></i></a></li>
                        <li><a href="#"><i class="icon _fb"></i></a></li>
                        <li><a href="#"><i class="icon _tw"></i></a></li>
                        <li><a href="#"><i class="icon _od"></i></a></li>
					</ul>
				</div>
                <div class="clear"></div>
                <hr class="hr_gray">
                <div class="col-xs-12">
                    <div class="fl_left">
                        2016 "Romashka.by" Магазин цветов в г.Молодечно
					</div>
                    <div class="fl_right ">Разработка сайта - <a target="_blank" href="imedia.by"><img src="<?=SITE_DIR.'img/im-logo.png'?>" alt="img"></a></div>
				</div>
			</div>
		</div>
	</div>
</footer>

<div id="popup-enter" data-effect="mfp-zoom-in" class="mfp-with-anim white-popup mfp-hide clearfix">
    <div class="popup_header">
        <div class="title_line_horizontal title_line_decor">
            <span>Войти</span>
		</div>
	</div>
    <div class="col-xs-offset-1 col-xs-10 popup_wrap">
        <form class="clearfix" action="">
            <div class="form-group">
                <label for="login">Логин</label>
                <input type="text" class="form-control" id="login" placeholder="">
			</div>
            <div class="form-group">
                <label for="pass">Пароль</label>
                <input type="text" class="form-control" id="pass" placeholder="">
			</div>
			
            <input id="check" type="checkbox"/>
            <label class="font_normal" for="check">Запомнить меня на этом компьютере</label>
			
            <div class= "col-xs-offset-2 col-xs-8 text_center mt_2 mb_2">
                <input class="btn btn-primary full_width _upper" value="Войти" type="submit"/>
			</div>
		</form>
        <div class="text-center">
            <a class="fz_12 open-popup-inline" href="#popup-rduction">Забыли пароль?</a>
            <a class=" fz_12" href="#">Зарегистрироваться</a>
		</div>
	</div>
</div>
<div id="popup-registration" data-effect="mfp-zoom-in" class=" white-popup mfp-with-anim mfp-hide clearfix">
    <div class="popup_header">
        <div class="title_line_horizontal title_line_decor">
            <span>Регистрация</span>
		</div>
	</div>
	
    <div class="col-xs-offset-1 col-xs-10 popup_wrap">
        <form class="clearfix" action="">
            <div class="form-group">
                <label for="name">Имя</label>
                <input type="text" class="form-control" id="name" placeholder="">
			</div>
            <div class="form-group">
                <label for="fam">Фамилия</label>
                <input type="text" class="form-control" id="fam" placeholder="">
			</div>
            <div class="form-group has-error">
                <label for="login"> Логин (минимум 3 символа)<span class="color_danger">*</span></label>
                <input type="text" class="form-control" id="login" placeholder="">
			</div>
			
            <div class="form-group has-error">
                <label for="pass"> Пароль<span class="color_danger">*</span></label>
                <input type="text" class="form-control" id="pass" placeholder="">
			</div>
			
            <div class="form-group">
                <label for="passpod">Подтверждение пароля<span class="color_danger">*</span></label>
                <input type="text" class="form-control" id="passpod" placeholder="">
			</div>
			
            <div class="form-group">
                <label for="mail">Ваша почта<span class="color_danger">*</span></label>
                <input type="text" class="form-control" id="mail" placeholder="">
			</div>
			
            <div class="form-group">
                <label for="captcha">Введите символы на картинке<span class="color_danger">*</span></label>
                <div class="bx-captcha"><img src="" width="180" height="40" alt="CAPTCHA"></div>
                <input type="text" class="form-control" id="captcha" placeholder="">
			</div>
			
            <div class= "col-xs-offset-2 col-xs-8 text_center mt_2 mb_1">
                <input class="btn btn-primary full_width _upper" value="Регистрация" type="submit"/>
			</div>
			
		</form>
        <hr/>
        <div class="text-center fz_12">
            Пароль не должен быть менее 6 символов. <br/>
            <span class="color_danger">*</span> Поля, обязательные для заполнения.<br/>
            <a class="" href="#">Авторизация</a>
		</div>
		
	</div>
	
</div>
<div id="popup-rduction" data-effect="mfp-zoom-in" class="mfp-with-anim white-popup mfp-hide clearfix">
    <div class="popup_header">
        <div class="title_line_horizontal title_line_decor">
            <span>Восстановить пароль</span>
		</div>
	</div>
    <div class="col-xs-offset-1 col-xs-10 popup_wrap">
        <form class="clearfix" action="">
            <div class="form-group">
                <label for="login">Введите Ваше имя</label>
                <input type="text" class="form-control" id="login" placeholder="">
			</div>
            <div class="form-group">
                <label for="pass">Введите Ваш e-mail</label>
                <input type="text" class="form-control" id="pass" placeholder="">
			</div>
			
            <div class= "col-xs-offset-2 col-xs-8 text_center mt_2 mb_2">
                <input class="btn btn-primary full_width _upper" value="Отправить" type="submit"/>
			</div>
		</form>
	</div>
</div>

<script src="<?=SITE_DIR.'js/vendor/jquery.2.1.4.min.js'?>"></script>
<script src="<?=SITE_DIR.'js/vendor/collapse.min.js'?>"></script>
<script src="<?=SITE_DIR.'js/vendor/dropdown.min.js'?>"></script>
<script src="<?=SITE_DIR.'js/vendor/pushy.min.js'?>"></script>
<script src="<?=SITE_DIR.'js/vendor/transition.min.js'?>"></script>
<script src="<?=SITE_DIR.'js/vendor/jquery.magnific-popup.min.js'?>"></script>
<script src="<?=SITE_DIR.'js/vendor/owl.carousel.min.js'?>"></script>
<?$APPLICATION->ShowProperty('uniqueFooterScript');?>
<script src="<?=SITE_DIR.'js/main.js'?>"></script>
</body>
</html>