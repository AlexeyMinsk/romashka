<?
	require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
	$APPLICATION->SetTitle("Главная");
	$APPLICATION->SetPageProperty('bodyClass', $APPLICATION->GetCurPage(true));
	$APPLICATION->SetPageProperty("NOT_SHOW_NAV_CHAIN", "Y");
	$includeArr = array_merge($includeArr, array(//массив возможных включаемых областей
		SITE_TEMPLATE_PATH."/include/card_in_basket.php",
		SITE_TEMPLATE_PATH."/include/in_wish.php"
	));
?><?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"slider",
	Array(
		"ACTIVE_DATE_FORMAT" => "",
		"ADD_SECTIONS_CHAIN" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "N",
		"CACHE_NOTES" => "",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array("SLIDER_LINK"),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "2",
		"IBLOCK_TYPE" => "news",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"NEWS_COUNT" => "20",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => "",
		"PAGER_TITLE" => "Слайдер",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array("SLIDER_LINK"),
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC"
	)
);?>
<div class="container-fluid main_label_bg hidden-mid-xs">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-4">
				<div class="main_label">
					<div class="main_label__pic _1">
					</div>
					<div class="main_label__text">
						 Зачем куда-то ходить? Доставим бесплатно!
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-4">
				<div class="main_label">
					<div class="main_label__pic _1">
					</div>
					<div class="main_label__text">
						 Всегда только свежие цветы!
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-sm-4">
				<div class="main_label">
					<div class="main_label__pic _1">
					</div>
					<div class="main_label__text">
						 Пришлем фото Вашего букета!
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="g-wrapper">
 <main> <section class="g-main">
	<div class="g-main_i ">
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					 <?$APPLICATION->IncludeComponent(
	"lat:popular",
	"",
	Array(
		"COMPONENT_TITLE" => array("Хиты продаж","Популярные товары"),
		"COUNTER" => 4,
		"IBLOCK_ID" => 1
	)
);?>
				</div>
			</div>
		</div>
		<div class="container-fluid bg_about">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 main_about">
						<div class="row">
							<div class="col-xs-12 col-sm-4">
 <img alt="img" src="/local/templates/romashki_template/img/about.jpg" class="img-responsive img_about">
							</div>
							<div class="col-xs-12 col-sm-8">
								<div class=" h3 mt_0">
									 О магазине цветов Romashki.by
								</div>
								<p>
									 Заказывайте доставку цветов в Молодечно. На нашем сайте Вы можете заказать цветы с доставкой в Молодечно. В каталоге Вы найдете букет на любой вкус и случай жизни. И не важно какое сейчас время года. Ведь любовь, ласка и доброта это те чувства, которые всегда помогают преодолеть любые преграды, будь то длительная командировка или разлука. Мы занимаем лидирующую позицию в доставке цветов по Молодечно и уже более 30 довольных получателей радуются нашим
								</p>
 <a class="_underline" href="javascript:void(0)">Подробнее</a><br>
 <br>
 <br>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
 </section> </main>
</div>
 <?$APPLICATION->IncludeComponent(
	"bitrix:sale.bestsellers",
	"",
Array()
);?><br><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>