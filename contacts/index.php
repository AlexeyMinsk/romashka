<?
	require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
	$APPLICATION->SetTitle("Контакты");
	$APPLICATION->SetPageProperty('bodyClass', $APPLICATION->GetCurPage(true));
	$APPLICATION->SetPageProperty('uniqueDataHeader', '<div class="g-wrapper">');
	$APPLICATION->SetPageProperty("NOT_SHOW_NAV_CHAIN", "Y");
?>
<main>
	<section class="g-main">
		<div class="g-main_i ">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<h1 class="text_center mb_2"><?=$APPLICATION->GetTitle(/*'not_title'*/)?></h1>
						<div class="col-xs-12 col-sm-4 mb_1">
							<div class="Lora-BoldItalic mb_1">АДРЕС МАГАЗИНА / Пункт самовывоза</div>
							<ul class="list_reset">
								<li>г.Молодечно, ул.Волынца 1</li>
								<li>г.Молодечно, ул.Волынца 2</li>
							</ul>
						</div>
						<div class="col-xs-12 col-sm-8">
							<div class="row">
								<div class="col-xs-12 col-sm-4 mb_1">
									<div class="Lora-BoldItalic mb_1">Телефоны:</div>
									<ul class="list_reset">
										<li>(017) 239-23-50</li>
										<li>(017) 239-23-50</li>
										<li>(017) 239-23-50</li>
									</ul>
								</div>
								<div class="col-xs-12 col-sm-4 mb_1">
									<div class="Lora-BoldItalic mb_1">Телефоны:</div>
									<ul class="list_reset">
										<li>rose@gmail.com</li>
									</ul>
								</div>
								<div class="col-xs-12 col-sm-4 mb_1">
									<div class="Lora-BoldItalic mb_1">Время работы:</div>
									<ul class="list_reset">
										<li>Пн.-Вс.: 9.00 - 30.00</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-xs-12 mb_2">
							<!--<img src="/img/map.jpg" alt="map">-->
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2327.733159870148!2d26.84752071560748!3d54.30866898019192!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46dc7469f0d38597%3A0xc6b5d2179445f7ed!2z0YPQu9C40YbQsCDQktC-0LvRi9C90YbQsCAxLCDQnNC-0LvQvtC00LXRh9C90L4!5e0!3m2!1sru!2sby!4v1510298066816" width="1000" height="302" frameborder="0" style="border:0" allowfullscreen></iframe>
						</div>
						
						<div class="h3 col-xs-12 ">Свяжитесь с нами</div>
						<form action="">
							<div class="col-xs-12 ">
								<input class="form-control" placeholder="Ваше имя" type="text">
							</div>
							<div class="col-xs-12 ">
								<input class="form-control" placeholder="Ваш контактный телефон/e-mail" type="text">
							</div>
							<div class="col-xs-12">
								<textarea class="form-control" placeholder="Введите текст" cols="10" rows="3"></textarea>
							</div>
                            
							<div class="clear"></div>
							<div class="text_center mt_2">
								<a href="#" class="btn btn-lg btn-primary">Отправить</a>
								
							</div>
						</form>
						
					</div>
				</div>
			</div>
		</div>
	</section>
</main>
</div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>