<?
	require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
	$APPLICATION->SetTitle("Главная");
	$APPLICATION->SetPageProperty('bodyClass', $APPLICATION->GetCurPage(true));
	$APPLICATION->SetPageProperty("NOT_SHOW_NAV_CHAIN", "Y");
	$includeArr = array_merge($includeArr, array(//массив возможных включаемых областей
		SITE_TEMPLATE_PATH."/include/card_in_basket.php",
		SITE_TEMPLATE_PATH."/include/in_wish.php"
	));
?>

<?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"slider",
	Array(
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"AJAX_MODE" => "N",
		"IBLOCK_TYPE" => "news",
		"IBLOCK_ID" => "2",
		"NEWS_COUNT" => "20",
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
		"AJAX_OPTION_ADDITIONAL" => ""
	)
);?>

<div class="container-fluid main_label_bg hidden-mid-xs">
	<div class="container">
		<div class="row">
			<?
				$main_label_arr = array(
					"Зачем куда-то ходить? Доставим бесплатно!",
					"Всегда только свежие цветы!",
					"Пришлем фото Вашего букета!"
				);
			?> 
			<?foreach($main_label_arr as $text):?>
				<div class="col-xs-12 col-sm-4">
					<div class="main_label">
						<div class="main_label__pic _1">
						</div>
						<div class="main_label__text">
							<?=$text?>
						</div>
					</div>
				</div>
			<?endforeach;?>
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
									<img alt="img" src="<?=SITE_TEMPLATE_PATH?>/img/about.jpg" class="img-responsive img_about">
								</div>
								<div class="col-xs-12 col-sm-8">
									<div class=" h3 mt_0">
										О магазине цветов Romashki.by
									</div>
									<p>
										Заказывайте доставку цветов в Молодечно. На нашем сайте Вы можете заказать цветы с доставкой в Молодечно. В каталоге Вы найдете букет на любой вкус и случай жизни. И не важно какое сейчас время года. Ведь любовь, ласка и доброта это те чувства, которые всегда помогают преодолеть любые преграды, будь то длительная командировка или разлука. Мы занимаем лидирующую позицию в доставке цветов по Молодечно и уже более 30 довольных получателей радуются нашим
									</p>
									<a class="_underline" href="javascript:void(0)">Подробнее</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	</main>
	</div><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>	