<?
	foreach($arResult['ITEMS'] as &$item){
		$item['DETAIL_PAGE_URL'] = '/catalog/'.$item['IBLOCK_SECTION_ID'].'/'.$item['ID'].'/';
		//$item['DETAIL_PAGE_URL'] = str_replace("#SITE_DIR#", "", $item['DETAIL_PAGE_URL']);
		//$item['DETAIL_PAGE_URL'] = str_replace("#ELEMENT_ID#", $item['ID'], $item['DETAIL_PAGE_URL']);
	}
	if(empty($arParams['COMPONENT_TITLE'])){
		$arParams['COMPONENT_TITLE'] = array("Популярные товары");
	}
	else{
		if(!is_array($arParams['COMPONENT_TITLE']))
			$arParams['COMPONENT_TITLE'] = array($arParams['COMPONENT_TITLE']);
	}
?>	