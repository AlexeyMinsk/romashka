<?
	require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
	$APPLICATION->SetTitle("Каталог");
	$APPLICATION->SetPageProperty('bodyClass', $APPLICATION->GetCurPage(true));
	$APPLICATION->SetPageProperty('uniqueDataHeader', '<div class="g-wrapper">');
	//$APPLICATION->SetPageProperty('uniqueDataFooter', '</div>');
	$APPLICATION->SetPageProperty("NOT_SHOW_NAV_CHAIN", "N");
?>
<div class="container">
	<div class="row">
		<div class="col-xs-12">
			<ol class="breadcrumb mb_0">
				<li><a href="#">Главная страница</a></li>
				<li><a href="#">Каталог</a></li>
				<li class="active">Розы</li>
			</ol>
		</div>	
		
	</div>
</div>	
<main>
	<section class="g-main">
		<div class="container">
			<div class="row">
				<aside class="col-md-3 hidden-sm hidden-mid-xs hidden-xs">
					
					<nav class="aside_menu-2">
						<ul class="aside_menu-2__list">
							<li class="active">
								<a href="#">Цветы <i class="arr_submenu-2 icon_menu__caret"></i></a>
								<ul class="aside_menu-2__list-2">
									<li><a href="#">Срезанные <i class="icon_menu__caret"></i></a>
										<ul class="aside_menu-2__list-3">
											<li><a href="#">Альстромерии</a></li>
											<li><a href="#">Розы</a></li>
											<li><a href="#">Хризантемы</a></li>
											<li><a href="#">Тюльпаны</a></li>
											<li><a href="#">Ирисы</a></li>
											<li><a href="#">Герберы</a></li>
											<li><a href="#">Каллы</a></li>
											<li><a href="#">Лилии</a></li>
										</ul>
									</li>
									<li><a href="#">Комнатные <i class="icon_menu__caret"></i></a>
										<ul class="aside_menu-2__list-3">
											<li><a href="#">Орхидеи</a></li>
											<li><a href="#">Цветущие</a></li>
											<li><a href="#">Кактусовые</a></li>
											<li><a href="#">Хвойные</a></li>
											<li><a href="#">Литвенные</a></li>
										</ul>
									</li>
								</ul>
							</li>
							<li><a href="#">Букеты <i class="icon_menu__caret"></i></a>
								<ul class="aside_menu-2__list-2">
									<li><a href="#">Альстромериями</a></li>
									<li><a href="#">Розами</a></li>
									<li><a href="#">Хризантемами</a></li>
									<li><a href="#">Тюльпанами</a></li>
									<li><a href="#">Ирисами</a></li>
									<li><a href="#">Герберами</a></li>
									<li><a href="#">Лилиями</a></li>
									<li><a href="#">Гвоздиками</a></li>
									<li><a href="#">Орхидеями</a></li>
									<li><a href="#">Подсолнухами</a></li>
								</ul>
							</li>
							<li><a href="#">Композиции <i class="icon_menu__caret"></i></a>
								<ul class="aside_menu-2__list-2">
									<li><a href="#">Корзины</a></li>
									<li><a href="#">Фигуры</a></li>
									<li><a href="#">Сердца</a></li>
									<li><a href="#">Мини компазиции</a></li>
									<li><a href="#">К 8 марта и дн.Св.Валентина</a></li>
									<li><a href="#">Ко дню Матери</a></li>
									<li><a href="#">Новогодние</a></li>
									<li><a href="#">С искусственными цветами</a></li>
								</ul>
							</li>
							<li><a href="#">Подарки <i class="icon_menu__caret"></i></a>
								<ul class="aside_menu-2__list-2">
									<li><a href="#">Мягкая игрушка</a></li>
									<li><a href="#">Конфеты</a></li>
									<li><a href="#">Открытки</a></li>
									<li><a href="#">Конверты для денег</a></li>
									<li><a href="#"> Шары с гелием</a></li>
									<li><a href="#">Шары с воздухом</a></li>
									<li><a href="#">Игрушки из шаров</a></li>
									<li><a href="#">Свечи</a></li>
									<li><a href="#">Кашпо &amp; Горшки</a></li>
								</ul>
							</li>
							<li><a href="#">Свадебная флористика</a></li>
						</ul>
					</nav>
					
					
					
					
				</aside>
				<?$APPLICATION->IncludeComponent(
					"bitrix:catalog", 
					"romashka_catalog", 
					array(
					"COMPONENT_TEMPLATE" => "romashka_catalog",
					"IBLOCK_TYPE" => "products",
					"IBLOCK_ID" => "2",
					"HIDE_NOT_AVAILABLE" => "N",
					"HIDE_NOT_AVAILABLE_OFFERS" => "N",
					"SEF_MODE" => "N",
					"AJAX_MODE" => "N",
					"AJAX_OPTION_JUMP" => "N",
					"AJAX_OPTION_STYLE" => "Y",
					"AJAX_OPTION_HISTORY" => "N",
					"AJAX_OPTION_ADDITIONAL" => "",
					"CACHE_TYPE" => "A",
					"CACHE_TIME" => "36000000",
					"CACHE_FILTER" => "N",
					"CACHE_GROUPS" => "Y",
					"USE_MAIN_ELEMENT_SECTION" => "N",
					"DETAIL_STRICT_SECTION_CHECK" => "N",
					"SET_LAST_MODIFIED" => "N",
					"SET_TITLE" => "Y",
					"ADD_SECTIONS_CHAIN" => "Y",
					"ADD_ELEMENT_CHAIN" => "N",
					"SECTION_SHOW_PARENT_NAME" => "N",
					"USE_FILTER" => "N",
					"USE_REVIEW" => "N",
					"ACTION_VARIABLE" => "action",
					"PRODUCT_ID_VARIABLE" => "id",
					"USE_COMPARE" => "N",
					"PRICE_CODE" => array(
					),
					"USE_PRICE_COUNT" => "N",
					"SHOW_PRICE_COUNT" => "1",
					"PRICE_VAT_INCLUDE" => "Y",
					"PRICE_VAT_SHOW_VALUE" => "N",
					"CONVERT_CURRENCY" => "N",
					"BASKET_URL" => "/personal/basket.php",
					"USE_PRODUCT_QUANTITY" => "N",
					"PRODUCT_QUANTITY_VARIABLE" => "quantity",
					"ADD_PROPERTIES_TO_BASKET" => "Y",
					"PRODUCT_PROPS_VARIABLE" => "prop",
					"PARTIAL_PRODUCT_PROPERTIES" => "N",
					"PRODUCT_PROPERTIES" => array(
					),
					"SHOW_TOP_ELEMENTS" => "Y",
					"TOP_ELEMENT_COUNT" => "9",
					"TOP_LINE_ELEMENT_COUNT" => "3",
					"TOP_ELEMENT_SORT_FIELD" => "sort",
					"TOP_ELEMENT_SORT_ORDER" => "asc",
					"TOP_ELEMENT_SORT_FIELD2" => "id",
					"TOP_ELEMENT_SORT_ORDER2" => "desc",
					"TOP_PROPERTY_CODE" => array(
					0 => "",
					1 => "",
					),
					"SECTION_COUNT_ELEMENTS" => "Y",
					"SECTION_TOP_DEPTH" => "2",
					"PAGE_ELEMENT_COUNT" => "30",
					"LINE_ELEMENT_COUNT" => "3",
					"ELEMENT_SORT_FIELD" => "sort",
					"ELEMENT_SORT_ORDER" => "asc",
					"ELEMENT_SORT_FIELD2" => "id",
					"ELEMENT_SORT_ORDER2" => "desc",
					"LIST_PROPERTY_CODE" => array(
					0 => "",
					1 => "",
					),
					"INCLUDE_SUBSECTIONS" => "Y",
					"LIST_META_KEYWORDS" => "-",
					"LIST_META_DESCRIPTION" => "-",
					"LIST_BROWSER_TITLE" => "-",
					"SECTION_BACKGROUND_IMAGE" => "-",
					"DETAIL_PROPERTY_CODE" => array(
					0 => "",
					1 => "",
					),
					"DETAIL_META_KEYWORDS" => "-",
					"DETAIL_META_DESCRIPTION" => "-",
					"DETAIL_BROWSER_TITLE" => "-",
					"DETAIL_SET_CANONICAL_URL" => "N",
					"SECTION_ID_VARIABLE" => "SECTION_ID",
					"DETAIL_CHECK_SECTION_ID_VARIABLE" => "N",
					"DETAIL_BACKGROUND_IMAGE" => "-",
					"SHOW_DEACTIVATED" => "N",
					"DETAIL_SHOW_PICTURE" => "Y",
					"LINK_IBLOCK_TYPE" => "",
					"LINK_IBLOCK_ID" => "",
					"LINK_PROPERTY_SID" => "",
					"LINK_ELEMENTS_URL" => "link.php?PARENT_ELEMENT_ID=#ELEMENT_ID#",
					"USE_ALSO_BUY" => "N",
					"USE_GIFTS_DETAIL" => "Y",
					"USE_GIFTS_SECTION" => "Y",
					"USE_GIFTS_MAIN_PR_SECTION_LIST" => "Y",
					"GIFTS_DETAIL_PAGE_ELEMENT_COUNT" => "4",
					"GIFTS_DETAIL_HIDE_BLOCK_TITLE" => "N",
					"GIFTS_DETAIL_BLOCK_TITLE" => "Выберите один из подарков",
					"GIFTS_DETAIL_TEXT_LABEL_GIFT" => "Подарок",
					"GIFTS_SECTION_LIST_PAGE_ELEMENT_COUNT" => "4",
					"GIFTS_SECTION_LIST_HIDE_BLOCK_TITLE" => "N",
					"GIFTS_SECTION_LIST_BLOCK_TITLE" => "Подарки к товарам этого раздела",
					"GIFTS_SECTION_LIST_TEXT_LABEL_GIFT" => "Подарок",
					"GIFTS_SHOW_DISCOUNT_PERCENT" => "Y",
					"GIFTS_SHOW_OLD_PRICE" => "Y",
					"GIFTS_SHOW_NAME" => "Y",
					"GIFTS_SHOW_IMAGE" => "Y",
					"GIFTS_MESS_BTN_BUY" => "Выбрать",
					"GIFTS_MAIN_PRODUCT_DETAIL_PAGE_ELEMENT_COUNT" => "4",
					"GIFTS_MAIN_PRODUCT_DETAIL_HIDE_BLOCK_TITLE" => "N",
					"GIFTS_MAIN_PRODUCT_DETAIL_BLOCK_TITLE" => "Выберите один из товаров, чтобы получить подарок",
					"USE_STORE" => "N",
					"PAGER_TEMPLATE" => ".default",
					"DISPLAY_TOP_PAGER" => "N",
					"DISPLAY_BOTTOM_PAGER" => "Y",
					"PAGER_TITLE" => "Товары",
					"PAGER_SHOW_ALWAYS" => "N",
					"PAGER_DESC_NUMBERING" => "N",
					"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
					"PAGER_SHOW_ALL" => "N",
					"PAGER_BASE_LINK_ENABLE" => "N",
					"SET_STATUS_404" => "N",
					"SHOW_404" => "N",
					"MESSAGE_404" => "",
					"COMPATIBLE_MODE" => "Y",
					"USE_ELEMENT_COUNTER" => "Y",
					"DISABLE_INIT_JS_IN_COMPONENT" => "N",
					"DETAIL_SET_VIEWED_IN_COMPONENT" => "N",
					"VARIABLE_ALIASES" => array(
					"ELEMENT_ID" => "ELEMENT_ID",
					"SECTION_ID" => "SECTION_ID",
					)
					),
					false
				);?>
			</div> 
		</div>
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<div class="text_center mb_2">
						<div class="h2 text_center _upper title_line_horizontal mb_3">
							Букеты с хризантемой
						</div>
					</div>
					<div class="row__inline-blocks">
						<?
							$items = array(
							array(
							"IMG_SRC" => SITE_DIR."img/cat-2.jpg",
							"RATING" => SITE_DIR.'img/raiting.png'
							),
							array(
							"IMG_SRC" => SITE_DIR."img/cat-5.jpg",
							"RATING" => SITE_DIR.'img/raiting.png'
							),
							array(
							"IMG_SRC" => SITE_DIR."img/cat-3.jpg",
							"RATING" => SITE_DIR.'img/raiting.png'
							),
							array(
							"IMG_SRC" => SITE_DIR."img/cat-2.jpg",
							"RATING" => SITE_DIR.'img/raiting.png'
							),
							);
							foreach($items as $item){?>
							<div class="col-xs-12 col-mid-xs-6 col-sm-4 col-md-3">
								<div class="card_preview">
									<div class="card_preview__wrap_hidden">
										<a class="card_preview__lnk_pic" href="#">
											<img alt="img" src="<?=$item['IMG_SRC']?>" class="card_preview__pic" title="img">
											<span class="label_card">
												<span class="label_info _new">
												</span> <br>
												<span class="label_info _hit">
												</span>
											</span>
											<span class="label_card label_right">
												<span class="label_info _discount">
												</span><br>
											</span>
										</a>
										<div class="card_preview__info ">
											<div class="raiting text_center">
												<img alt="img" src="<?=$item["RATING"]?>">
											</div>
											<div class="card_preview__prod_name">
												<a class="card_preview__lnk lnk_brd" href="#" title="Нижнее белье Ночь наступает">Односторонний букет</a>
											</div>
											<div class="card_preview__price">
												45 568 450 руб.
												<span class="card_preview__price_old">86 454 000 руб.</span>
											</div>
											<a href="#in_wish" class="wish open-popup-inline" data-effect="mfp-zoom-in"><i class="icon i_star"></i>Добавить в избранное</a>
										</div>
										<a class="btn btn-primary full_width _upper open-popup-inline" data-effect="mfp-zoom-in" href="#card_in_basket">В корзину</a>
									</div>
								</div>
							</div>
						<?}?>
					</div>
					
					<p>
						Текст категории, для сео. Текст категории, для сео. Текст категории, для сео. Текст категории, для сео.
					Текст категории, для сео. Текст категории, для сео. Текст категории, для сео. Текст категории, для сео. Текст категории, для сео. Текст категории, для сео. Текст категории, для сео. Текст категории, для сео. Текст категории, для сео. Текст категории, для сео. Текст категории, для сео. Текст категории, для сео.</p>
				</div>
			</div>
		</div>
	</section>
</main>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>