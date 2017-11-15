<?
foreach($arResult['ITEMS'] as &$item){
	
	$item['DETAIL_PAGE_URL'] = str_replace("#SITE_DIR#", "", $item['DETAIL_PAGE_URL']);
	$item['DETAIL_PAGE_URL'] = str_replace("#ELEMENT_ID#", $item['ID'], $item['DETAIL_PAGE_URL']);
}