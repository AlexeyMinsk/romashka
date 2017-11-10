<?
	require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
	$APPLICATION->SetTitle("Каталог");
	$APPLICATION->SetPageProperty('bodyClass', $APPLICATION->GetCurPage(true));
	$APPLICATION->SetPageProperty('uniqueDataHeader', '<div class="g-wrapper">');
	$APPLICATION->SetPageProperty('uniqueDataFooter', '</div>');
	$APPLICATION->SetPageProperty("NOT_SHOW_NAV_CHAIN", "N");
	$scriptsArr = array_merge($scriptsArr, array("/js/vendor/tab.min.js", "/js/vendor/menu_collapse.min.js"));
	$includeArr = array_merge($includeArr, array(//массив возможных включаемых областей
	"/include/card_in_basket.php",
	"/include/in_wish.php",
	"/include/popup-rduction.php"
	));
?>	
<main>
	<section class="g-main">
		<div class="container">
			<div class="row">
				<aside class="col-md-3 hidden-sm hidden-mid-xs hidden-xs">
					<?$APPLICATION->IncludeComponent("bitrix:menu", "left_menu", array(
						"ROOT_MENU_TYPE" => "product", 
						"MAX_LEVEL" => "3"
					), false);?>
				</aside>
				<div class="col-md-9 col-sm-12">
					<div class="col-xs-12">
						<h1 class="mt_1"><?=$APPLICATION->GetTitle(/*'not_title'*/)?></h1>
					</div>
					<div class="filter _horizontal filter_horizontal_bg clearfix mb_1">
						<div class="filter_title mb_2">Подбор параметров</div>
						<form action="">
							<div class="col-xs-12 col-sm-4">
								<div class="lnk_brd filter_lnk_collapse">
									Розничная цена
								</div>
								<div class="row">
									<div class="col-xs-6">
										<div class="form-group count_price">
											<label for="ot">От</label>
											<input type="text" class="form-control" id="ot">
										</div>
									</div>
									<div class="col-xs-6">
										<div class="form-group count_price">
											<label for="do">До</label>
											<input type="text" class="form-control" id="do">
										</div>
									</div>
								</div>
								<div class="clear"></div>
							</div>
							<div class="col-xs-12 col-sm-4">
								<div class="lnk_brd filter_lnk_collapse"> Какой повод
								</div>
								<div class="option_style">
									<select name="" id="">
										<option value="">8 марта</option>
										<option value="">День Св.Валентина</option>
										<option value="">День учителя</option>
										<option value="">На свадьбу</option>
										<option value="">Юбилей</option>
										<option value="">Просто так</option>
										<option value="">Рождение ребенка</option>
									</select>
								</div>
							</div>
							<div class="col-xs-12 col-sm-4">
								<div class="mt_2">
									<input class="btn btn-primary" type="submit" value="Показать">
									<input class="btn btn-primary btn_reverse" type="submit" value="Сбросить">
								</div>
							</div>
							<div class="clear"></div>
						</form>
					</div>
					<a href="#" class="label_filter ">Кустовая хризантема</a>
					<a href="#" class="label_filter">Одноголовая хризантема</a>
					<a href="#" class="label_filter active">Одноголовая хризантема</a>
					
					
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
				<div class="text_center">
					<nav>
						<ul class="pagination">
							<li>
								<a href="#" aria-label="Previous">
									<span aria-hidden="true">«</span>
								</a>
							</li>
							<li><a href="#">1</a></li>
							<li class="active"><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">4</a></li>
							<li><a href="#">5</a></li>
							<li>
								<a href="#" aria-label="Next">
									<span aria-hidden="true">»</span>
								</a>
							</li>
						</ul>
					</nav>
				</div>
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
<?
	/*if (CModule::IncludeModule("sale"))
	{
		$arFields = array(
		"PRODUCT_ID" => 2,
		"PRICE" => 138.54,
		"CURRENCY" => "RUB",
		"LID" => "s1",
		"NAME" => "Розы",
		"PREVIEW_PICTURE_SRC" => "/img/cat-5.jpg"
		);
		CSaleBasket::Add($arFields);
	}*/
	
	/** int $productId ID товара */
/** int $quantity количество */
$quantity = 1;
$productId = 2;
if ($item = $basket->getExistsItem('catalog', $productId)) {
    $item->setField('QUANTITY', $item->getQuantity() + $quantity);
}
else {
    $item = $basket->createItem('catalog', $productId);
    $item->setFields(array(
        'QUANTITY' => $quantity,
        'CURRENCY' => Bitrix\Currency\CurrencyManager::getBaseCurrency(),
        'LID' => Bitrix\Main\Context::getCurrent()->getSite(),
        'PRODUCT_PROVIDER_CLASS' => 'CCatalogProductProvider',
    ));
    /* 
    Если вы хотите добавить товар с произвольной ценой, нужно сделать так:
    $item->setFields(array(
        'QUANTITY' => $quantity,
        'CURRENCY' => Bitrix\Currency\CurrencyManager::getBaseCurrency(),
        'LID' => Bitrix\Main\Context::getCurrent()->getSite(),
        'PRICE' => $customPrice,
        'CUSTOM_PRICE' => 'Y',
   ));
   */
}
$basket->save();
	
?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>