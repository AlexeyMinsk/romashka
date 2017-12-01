<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();?>

<footer class="g-footer container-fluid footer_text footer__bg">
	
    <div class="container">
        <div class="row">
            <div class="row__inline-blocks text_center__mid-xs">
                <div class="col-xs-12 col-mid-xs-6 col-sm-3">
                    <div class="footer_title">Информация</div>
                    <ul class="footer_menu list_reset">
                        <li><a href="/">Глвная</a></li>
                        <li><a href="javascript:void(0)">Услуги</a></li>
                        <li><a href="javascript:void(0)">Акции</a></li>
                        <li><a href="javascript:void(0)">Партнеры</a></li>
                        <li><a href="/contacts/">Контакты</a></li>
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
                        <li><a href="javascript:void(0)"><i class="icon _vk"></i></a></li>
                        <li><a href="javascript:void(0)"><i class="icon _fb"></i></a></li>
                        <li><a href="javascript:void(0)"><i class="icon _tw"></i></a></li>
                        <li><a href="javascript:void(0)"><i class="icon _od"></i></a></li>
					</ul>
				</div>
                <div class="clear"></div>
                <hr class="hr_gray">
                <div class="col-xs-12">
                    <div class="fl_left">
                        2016 "Romashka.by" Магазин цветов в г.Молодечно
					</div>
                    <div class="fl_right ">Разработка сайта - <a target="_blank" href="imedia.by">
						<img src="<?=SITE_TEMPLATE_PATH.'/img/im-logo.png'?>" alt="img"></a></div>
				</div>
			</div>
		</div>
	</div>
</footer>
<?
	foreach($includeArr as $path)//подключение скриптов
		if(file_exists($_SERVER['DOCUMENT_ROOT'].$path))
			require_once($_SERVER['DOCUMENT_ROOT'].$path);
		
	foreach($scriptsArr as $path)
		$APPLICATION->AddHeadScript($path);
?>
<?
	if($USER->IsAuthorized()){
		$userId = $USER->GetId();
	}
	else{
		$userId = 0;
	}
?>
<script>
	var userId = <?=$userId?>;

	if(userId == 0){
	
		let romashkaUserId = getCookie('romashka_user');
		
		if(romashkaUserId){
			
			BX.ajax({
				method: 'POST',
				dataType: 'json',
				url: '/ajax/auth.php',
				data: {
					'romashka_user': romashkaUserId,
					'temp_user_auth': 'Y'
				},
				onsuccess: function (data){
					
					userId = data;
					
					if(data == 0)
						deleteCookie('romashka_user');
				}
			});
		}
	}
	//console.log('userId', userId);
</script>
</body>
<script src="<?=SITE_TEMPLATE_PATH?>/js/main.js"></script>
</html>