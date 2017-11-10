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
<?$APPLICATION->IncludeComponent(
    "bitrix:sale.basket.basket",
    "romashki_basket",
    Array(
    )
);?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>