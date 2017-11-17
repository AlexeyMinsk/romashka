<?
	use	Bitrix\Main\Loader;
	
	$arResult['RAITING'] = '/img/raiting.png';
	
	if(!Loader::IncludeModule("iblock")){
		//обработка ошибок
	}
	
	$arResult["ITEMS"] = getElement($arResult['SECTION']['ID'], $arResult['SECTION']['IBLOCK_ID']);
	
	function getElement($sectionId, $iBlockId){
		
		$filter = array(
		"IBLOCK_ID" => $iBlockId,
		"ACTIVE" => "Y",
		"SECTION_ID" => $sectionId
		);
		$select = array(
		"DETAIL_PICTURE",
		//"PROPERTY_*",
		"DETAIL_PAGE_URL",
		"NAME",
		"SHOW_COUNTER"
		);
		
		$DBres = CIBlockElement::GetList(Array("SORT"=>"ASC"), $filter, false, false);
		
		$items = array();
		
		while($item = $DBres->fetch()){
			$item['DETAIL_URL'] = replaseUrl($item['DETAIL_PAGE_URL'], $sectionId, $item['ID']);
			$item['DETAIL_PICTURE'] = CFile::GetPath($item['DETAIL_PICTURE']);
			$item['PRICE_ARR'] = CPrice::GetBasePrice($item['ID']);
			$items[] = $item;
		}
		
		return $items;
	}
	
	function replaseUrl($templateUrl, $sectionId, $id){

		$match = '';
		preg_match('/\/\w+\//', $templateUrl, $match);
		return $match[0].$sectionId."/".$id."/";
	}
