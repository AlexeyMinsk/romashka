<?
	require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
	$APPLICATION->SetTitle("Корзина");
	$APPLICATION->SetPageProperty('bodyClass', $APPLICATION->GetCurPage(true));
	$APPLICATION->SetPageProperty('uniqueDataHeader', '<div class="g-wrapper">');
	$APPLICATION->SetPageProperty("NOT_SHOW_NAV_CHAIN", "N");
	$scriptsArr = array_merge($scriptsArr, array("/js/vendor/tab.min.js"));
	$includeArr = array_merge($includeArr, array(//массив возможных включаемых областей
	"/include/popup-rduction.php"
	));
?>
<main>
	<div class="g-main">
		<div class="g-main_i container">
			<div class="row">
				<div class="col-xs-12">
					<div class=" mt_2">
						<h1 class=""><?=$APPLICATION->GetTitle(/*'not_title'*/)?></h1>
					</div>	
					<?$APPLICATION->IncludeComponent(
						"bitrix:sale.basket.basket",
						"romashki_basket",
						Array()
					);?>
				</div>
			</div>
		</div>
	</div>
</main>
</div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>