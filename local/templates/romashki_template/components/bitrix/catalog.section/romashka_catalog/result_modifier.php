<?
	$arResult['RAITING'] = '/img/raiting.png';

	foreach($arResult['ITEMS'] as &$item){
		$item['DETAIL_PAGE_URL'] = '/catalog/'.$item['IBLOCK_SECTION_ID'].'/'.$item['ID'].'/';
	}	
	
