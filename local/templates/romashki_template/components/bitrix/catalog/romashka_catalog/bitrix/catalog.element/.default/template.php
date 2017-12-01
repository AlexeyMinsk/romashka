<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
	$APPLICATION->SetTitle($arResult['NAME']);
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
	");
?>
<main>
	<div class="g-main">
		<div class="g-main_i container">
			<div class="row">
				<div class="col-xs-12">
					<div class="row text_center__mid-xs">
						<div class="col-xs-12 col-sm-8 col-sm-offset-4">
							<h1 class="mt_0 card_title"><?=$APPLICATION->GetTitle();?></h1>
						</div>
                        
						<div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-0 text_center">
							<?
								$arImage = array(
									"IMG_LIST" => array(
										SITE_TEMPLATE_PATH."/img/slider_card-2.jpg",
										SITE_TEMPLATE_PATH."/img/slider_card-1.jpg",
										SITE_TEMPLATE_PATH."/img/slider_card-2.jpg",
										SITE_TEMPLATE_PATH."/img/slider_card-1.jpg"
									),
									"IMG_LIST_MIN" => array(
										SITE_TEMPLATE_PATH."/img/slider_card-2-min.jpg",
										SITE_TEMPLATE_PATH."/img/slider_card-1-min.jpg",
										SITE_TEMPLATE_PATH."/img/slider_card-2-min.jpg",
										SITE_TEMPLATE_PATH."/img/slider_card-1-min.jpg"
									),
									"IMG_MIN_ROTATE_SRC" => SITE_TEMPLATE_PATH."/img/slider_card-3-min.jpg"
								);
							?>
							<div class="card_carousel owl-carousel">
								<div class="item"><div class="spritespin"></div></div>
								<?foreach($arImage['IMG_LIST'] as $src):?>
									<div class="item"><img src=<?=$src?> alt="img"></div>
								<?endforeach;?>
							</div>	
							<div class="dotsContentCard ">
								<div class="btn_secondary _rotate">
									<img src=<?=$arImage["IMG_MIN_ROTATE_SRC"]?> alt="img">
								</div>
								<?foreach($arImage['IMG_LIST_MIN']  as $src):?>
									<div class="btn_secondary">
										<img src=<?=$src?> alt="img">
									</div>
								<?endforeach;?>	
							</div>
						</div>
                        
						<div class="col-xs-12 col-sm-12 col-md-8">
							<div class="row mb_2 clearfix">
								<div class="col-xs-12 col-sm-8">
									<div class="card_price mb_1 float_none__mid-xs">
										<div class="card_price__current">
											<?=$arResult["PRICES"]['BASE_PRICE']['DISCOUNT_VALUE']?> руб.
										</div>
										<div class="card_price__old"><?=$arResult["PRICES"]['BASE_PRICE']['VALUE']?> руб.</div>
									</div>
									
									<div class="counter">
										<a class="counter__minus" href="javascript:void(0)">—</a>
										<input class="counter__inp" type="text">
										<a class="counter__plus" href="javascript:void(0)">+</a>
									</div>
									<div class="clear"></div>
									<p class="color_gray mb_2">
										<?=$arResult["PRICES"]['BASE_PRICE']['DISCOUNT_VALUE']?> руб.
										за <span>1</span> шт
									</p>
									
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
									
									<div class="btn_group_three" data-card-id=<?=$arResult['ORIGINAL_PARAMETERS']['ELEMENT_ID']?>>
										<a class="btn btn-primary btn-lg open-popup-inline" data-effect="mfp-zoom-in" href="#card_in_basket">
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
										<img src="<?=SITE_TEMPLATE_PATH?>/img/raiting.png" alt="img"/>
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
										При покупке свыше <br> 500 руб. дисконтная карта на 5% в подарок!
									</div>
								</div>
								
							</div>
						</div>
						<?$APPLICATION->IncludeComponent(
							"bitrix:news.list",
							"decor",
							Array(
								"DISPLAY_DATE" => "Y",
								"DISPLAY_NAME" => "Y",
								"DISPLAY_PICTURE" => "Y",
								"DISPLAY_PREVIEW_TEXT" => "Y",
								"AJAX_MODE" => "N",
								"IBLOCK_TYPE" => "news",
								"IBLOCK_ID" => $arParams['DECOR_IBLOCK_ID'],
								"NEWS_COUNT" => "5",
								"SORT_BY1" => "ACTIVE_FROM",
								"SORT_ORDER1" => "DESC",
								"SORT_BY2" => "SORT",
								"SORT_ORDER2" => "ASC",
								"FILTER_NAME" => "",
								"FIELD_CODE" => array("SLIDER_LINK"),
								"PROPERTY_CODE" => array("SLIDER_LINK"),
								"CHECK_DATES" => "Y",
								"DETAIL_URL" => "",
								"PREVIEW_TRUNCATE_LEN" => "",
								"ACTIVE_DATE_FORMAT" => "",
								"SET_TITLE" => "N",
								"SET_STATUS_404" => "N",
								"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
								"ADD_SECTIONS_CHAIN" => "N",
								"HIDE_LINK_WHEN_NO_DETAIL" => "N",
								"PARENT_SECTION" => "",
								"PARENT_SECTION_CODE" => "",
								"CACHE_TYPE" => "A",
								"CACHE_TIME" => "36000000",
								"CACHE_NOTES" => "",
								"CACHE_FILTER" => "N",
								"CACHE_GROUPS" => "N",
								"DISPLAY_TOP_PAGER" => "N",
								"DISPLAY_BOTTOM_PAGER" => "N",
								"PAGER_TITLE" => "Слайдер",
								"PAGER_SHOW_ALWAYS" => "N",
								"PAGER_TEMPLATE" => "",
								"PAGER_DESC_NUMBERING" => "N",
								"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
								"PAGER_SHOW_ALL" => "N",
								"AJAX_OPTION_JUMP" => "N",
								"AJAX_OPTION_STYLE" => "Y",
								"AJAX_OPTION_HISTORY" => "N",
								"AJAX_OPTION_ADDITIONAL" => "",
							)
						);?>
						
						<div class="clear"></div>
						<div class="h2 text_center _upper title_line_horizontal mb_3">
							<span>Добавим подарок?</span>
						</div>
						<div class="row__inline-blocks text_center">
							<?
								$arItems = array(
								array(
								"src" => SITE_TEMPLATE_PATH."/img/cat-3.jpg",
								"present" => "Мягкая игрушка",
								),
								array(
								"src" => SITE_TEMPLATE_PATH."/img/cat-2.jpg",
								"present" => "Конфеты",
								),
								array(
								"src" => SITE_TEMPLATE_PATH."/img/cat-5.jpg",
								"present" => "Открытки",
								),
								array(
								"src" => SITE_TEMPLATE_PATH."/img/cat-1.jpg",
								"present" => "Коверты для денег",
								),
								array(
								"src" => SITE_TEMPLATE_PATH."/img/cat-5.jpg",
								"present" => "Щары с гелием",
								),
								array(
								"src" => SITE_TEMPLATE_PATH."/img/cat-5.jpg",
								"present" => "Щары с воздухом",
								)
								);
							foreach($arItems as $item):?>
							<a href="#" class="add_product _min">
								<div class="add_product__pic">
									<img src="<?=$item['src']?>" alt="img">
								</div>
								<div class="card_preview__lnk"><?=$item['present']?></div>
							</a>
							<?endforeach;?>
						</div>
					</div>	
				</div>
			</div>
		</div>
	</div>
</main>
</div>
<?	
	$itemsForJs = array(
		"PRODUCT_ID" => $arResult['ORIGINAL_PARAMETERS']['ELEMENT_ID'],
		"PRICE" => $arResult['PRICES']['BASE_PRICE']['DISCOUNT_VALUE'],
		"CURRENCY" => "RUB",
		"LID" => "s1",
		"NAME" => $arResult['NAME']
	);
	
	$imageSrc = $arResult['DETAIL_PICTURE']['SRC'];
?>
<script>
	var item = <?=CUtil::PhpToJSObject($itemsForJs)?>;
	var imageSrc = '<?=$imageSrc?>';
</script>			