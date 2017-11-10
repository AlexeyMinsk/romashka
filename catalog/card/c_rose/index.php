<?
	require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
	$APPLICATION->SetTitle("Карточка роза");
	$APPLICATION->SetPageProperty('bodyId', $APPLICATION->GetCurPage(true));
	$APPLICATION->SetPageProperty("NOT_SHOW_NAV_CHAIN", "N");
	$APPLICATION->SetPageProperty('uniqueDataHeader', "
	<script>
    document.getElementsByTagName('body')[0].classList.add('load_opacity');
    document.addEventListener('DOMContentLoaded', function(){
		document.getElementsByTagName('body')[0].classList.remove('load_opacity');
    });
	</script>
	<div class='g-wrapper'>
	"
	);
	$scriptsArr = array_merge($scriptsArr, array("/js/vendor/tab.min.js", "/js/vendor/spritespin.min.js"));
	$includeArr = array_merge($includeArr, array(//массив возможных включаемых областей
		"/include/card_in_basket.php",
		"/include/in_wish.php",
		"/include/popup-rduction.php",
		"/include/popup-click.php"
	));
?>
<main>
	<div class="g-main">
		<div class="g-main_i container">
			<div class="row">
				<div class="col-xs-12">
					<div class="row text_center__mid-xs">
						<div class="col-xs-12 col-sm-8 col-sm-offset-4">
							<h1 class="mt_0 card_title">Букет 21 роза (микс)</h1>
						</div>
                        
						<div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-0 text_center">
						<?$APPLICATION->IncludeComponent("lat:carousel", "", array(
							"IMG_LIST" => array(
								SITE_DIR."img/slider_card-2.jpg",
								SITE_DIR."img/slider_card-1.jpg",
								SITE_DIR."img/slider_card-2.jpg",
								SITE_DIR."img/slider_card-1.jpg"
								),
							"IMG_LIST_MIN" => array(
								SITE_DIR."img/slider_card-2-min.jpg",
								SITE_DIR."img/slider_card-1-min.jpg",
								SITE_DIR."img/slider_card-2-min.jpg",
								SITE_DIR."img/slider_card-1-min.jpg"
								),
							"IMG_MIN_ROTATE_SRC" => SITE_DIR."img/slider_card-3-min.jpg"
						), false);?>	
						</div>
                        
						<div class="col-xs-12 col-sm-12 col-md-8">
							<div class="row mb_2 clearfix">
								<div class="col-xs-12 col-sm-8">
									<div class="card_price mb_1 float_none__mid-xs">
										<div class="card_price__current">1 540 000 руб.</div>
										<div class="card_price__old">2 040 000 руб.</div>
									</div>
									
									<div class="counter ">
										<a class="counter__minus" href="#">—</a>
										<input class="counter__inp" type="text">
										<a class="counter__plus" href="#">+</a>
									</div>
									<div class="clear"></div>
									<p class="color_gray mb_2">Цена 22 540 000 руб. за 1 шт</p>
									
									<div class="label_composition">
										<div class="Lora-BoldItalic ">Состав букета</div>
										<ul class="list_reset list_composition">
											<li><i class="icon icon-ok"></i>Гербера</li>
											<li><i class="icon icon-ok"></i>Аспидистра</li>
											<li><i class="icon icon-ok"></i>Хризантема 2 шт</li>
											<li><i class="icon icon-ok"></i>Сизаль</li>
											<li><i class="icon icon-ok"></i>Альстромерия 2 шт</li>
											<li><i class="icon icon-ok"></i>Лента</li>
											<li><i class="icon icon-ok"></i>Берграсс</li>
										</ul>
										<div class="Lora-BoldItalic ">Описание</div>
										<ul class="list_reset list-inline">
											<li><i class="icon icon_lengtn"></i>45см</li>
											<li><i class="icon icon_radius"></i>35см</li>
											<li><i class="icon icon_weight"></i>1кг</li>
										</ul>
									</div>
									
									<div class="btn_group_three">
										<a class="btn btn-primary btn-lg open-popup-inline" data-effect="mfp-zoom-in" href="#in_basket">
											<i class="icon icon-cart-plus"></i> В корзину
										</a>
										<a class="btn btn-primary btn-lg btn_reverse open-popup-inline" data-effect="mfp-zoom-in" href="#popup-click">
											Купить в 1 клик
										</a>
										<a class="btn btn-primary btn-lg btn_reverse open-popup-inline" data-effect="mfp-zoom-in" href="#in_wish">
											В wishlist
										</a>
									</div>
								</div>
								<div class="col-xs-12 col-sm-4 text-right hidden-mid-xs">
									<div class="raiting ">
										<img src="/img/raiting.png" alt="img"/>
									</div>
									<div class="clear"></div>
									<div class="b-information i_block text-left">
										<div class="b-information__item b-information__item--bdr">
											<div class="Lora-BoldItalic fz_16 mb_1 lh_1"><i class="icon icon-bus"></i>Доставка:</div>
											<ul class="list_reset b-information__item__list">
												<li>Доставим курьером</li>
												<li>Самовывоз</li>
											</ul>
										</div>
										<div class="b-information__item b-information__item--bdr">
											<div class="Lora-BoldItalic fz_16 mb_1 lh_1"><i class="icon icon-dollar"></i>Оплата:</div>
											<ul class="list_reset">
												<li>Пластиковой картой</li>
												<li>Наличными</li>
											</ul>
										</div>
										<div class="b-information__item">
											<div class="Lora-BoldItalic fz_16 mb_1 lh_1"><i class="icon icon-clock"></i>Время работы и контакты:</div>
											<ul class="list_reset">
												<li class="">9:00 - 21:00</li>
												<li class="">г.Молодечно, ул. Буйло 3</li>
												<li class="">г.Молодечно, ул. Волынца 3</li>
												<li class="">+375 29 000 00 00</li>
												<li class="">+375 29 000 00 00</li>
											</ul>
										</div>
									</div>
									
									<div class="label_action label-danger text-center">
										При покупке свыше <br> 500 000 руб. дисконтная карта на 5% в подарок!
									</div>
								</div>
								
							</div>
						</div>
                        
						<div class="col-xs-12 mb_1">
							<div class="h2 text_center _upper title_line_horizontal mb_3">
								<span>Выбрать оформление букета</span>
							</div>
							<div class="row__inline-blocks text_center">
								<a href="#" class="add_product">
									<div class="add_product__pic">
										<img src="/img/cat-3.jpg" alt="img">
									</div>
									<div class="card_preview__lnk">Джут</div>
									<div class="card_preview__price">+ 45 000 руб.</div>
								</a>
								<a href="#" class="add_product">
									<div class="add_product__pic">
										<img src="/img/cat-2.jpg" alt="img">
									</div>
									<div class="card_preview__lnk">Джут</div>
									<div class="card_preview__price">+ 45 000 руб.</div>
								</a>
								<a href="#" class="add_product">
									<div class="add_product__pic">
										<img src="/img/cat-5.jpg" alt="img">
									</div>
									<div class="card_preview__lnk">Джут</div>
									<div class="card_preview__price">+ 45 000 руб.</div>
								</a>
								<a href="#" class="add_product">
									<div class="add_product__pic">
										<img src="/img/cat-1.jpg" alt="img">
									</div>
									<div class="card_preview__lnk">Джут</div>
									<div class="card_preview__price">+ 45 000 руб.</div>
								</a>
								<a href="#" class="add_product">
									<div class="add_product__pic">
										<img src="/img/cat-5.jpg" alt="img">
									</div>
									<div class="card_preview__lnk">Джут</div>
									<div class="card_preview__price">+ 45 000 руб.</div>
								</a>
							</div>
						</div>
                        
						<div class="clear"></div>
						<div class="h2 text_center _upper title_line_horizontal mb_3">
							<span>Добавим подарок?</span>
						</div>
						<div class="row__inline-blocks text_center">
							<a href="#" class="add_product _min">
								<div class="add_product__pic">
									<img src="/img/cat-3.jpg" alt="img">
								</div>
								<div class="card_preview__lnk">Мягкая игрушка</div>
							</a>
							<a href="#" class="add_product _min">
								<div class="add_product__pic">
									<img src="/img/cat-2.jpg" alt="img">
								</div>
								<div class="card_preview__lnk">Конфеты</div>
							</a>
							<a href="#" class="add_product _min">
								<div class="add_product__pic">
									<img src="/img/cat-1.jpg" alt="img">
								</div>
								<div class="card_preview__lnk">Открытки</div>
							</a>
							<a href="#" class="add_product _min">
								<div class="add_product__pic">
									<img src="/img/cat-5.jpg" alt="img">
								</div>
								<div class="card_preview__lnk">Конверты для денег</div>
							</a>
							<a href="#" class="add_product _min">
								<div class="add_product__pic">
									<img src="/img/cat-1.jpg" alt="img">
								</div>
								<div class="card_preview__lnk">Шары с гелием</div>
							</a>
							<a href="#" class="add_product _min">
								<div class="add_product__pic">
									<img src="/img/cat-5.jpg" alt="img">
								</div>
								<div class="card_preview__lnk">Шары с воздухом</div>
							</a>
						</div>
					</div>	
				</div>
			</div>
		</div>
	</div>
</main>
</div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>