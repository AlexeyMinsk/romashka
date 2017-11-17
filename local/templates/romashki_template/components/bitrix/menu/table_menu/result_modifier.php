<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
	use	Bitrix\Main\Loader;
	
	if(!Loader::IncludeModule("iblock")){
		//обработка ошибок
	}
	
	$filter = array(
	"ID" => $itemsId,
	"IBLOCK_ID" => $iBlockId,
	"ACTIVE" => "Y"
	);
	$select = array(
	"DETAIL_PICTURE",
	"PROPERTY_*",
	"DETAIL_PAGE_URL",
	"NAME",
	);
	$DBres = CIBlockElement::GetList(array("SORT"=>"ASC"), $filter, false, false, $select);
	$items = array();
	while($item = $DBres->fetch()){
		
		$item['DETAIL_PICTURE'] = CFile::GetPath($item['DETAIL_PICTURE']);
		$item['PRICE_ARR'] = CPrice::GetBasePrice($item['ID']);
		$items[] = $item;	
	}
	unset($DBres);
	
	$DBres = CIBlockSection::GetList(array("SORT"=>"ASC"), array("IBLOCK_ID" => $iBlockId), false);
	while($item = $DBres->fetch()){
		$sections[] = $item;	
	}
	unset($DBres);
	filterSectionParams($sections);
	$arResult['MENU'] = buildStruct($sections, 1, $items);
	addElements($arResult['MENU'], $items);
	
	
	function buildStruct($sections, $level_depth, $items, $structMenu = array()){//построение структуры
		
		if($level_depth == 4) return $structMenu;
		
		foreach($sections as $menuItem){
			$Id = $menuItem['ID'];
			if($menuItem['DEPTH_LEVEL'] ==  $level_depth){
				if(empty($structMenu[$Id]))
				$structMenu[$Id] = $menuItem;
				$structMenu[$Id]['CHILD'] = getChildArr($sections, $Id);
				if(count($structMenu[$Id]['CHILD']))
				$structMenu[$Id]['CHILD'] = buildStruct($sections, $level_depth+1, $items, $structMenu[$Id]['CHILD']);
			}
		}
		return $structMenu;
	}
	
	function filterSectionParams(&$sections){
		
		foreach($sections as &$item){
			
			$newSectArr[$item['ID']] = array(
			
			"ID" => $item['ID'],
			"IBLOCK_ID" => $item['IBLOCK_ID'],
			"NAME" => $item['NAME'],
			"IBLOCK_SECTION_ID" => $item['IBLOCK_SECTION_ID'],
			"SORT" => $item['SORT'],
			"DEPTH_LEVEL" => $item['DEPTH_LEVEL'],
			"SECTION_PAGE_URL" => $item['SECTION_PAGE_URL'],
			"CHILD" => array(),
			);
			$item = $newSectArr[$item['ID']];
		}
	}
	
	
	function getChildArr($sections, $ID){
		
		$tmpArr = array();
		
		foreach($sections as $item){
			if($item['IBLOCK_SECTION_ID'] == $ID)
			$tmpArr[$item['ID']] = $item;
		}

		return $tmpArr;
	}
	
/*
		function getItemsArr($elements, $ID){
		
		$tmpArr = array();
		
		foreach($elements as $item){
			if($item['IBLOCK_SECTION_ID'] == $ID)
			$tmpArr[$item['NAME']] = $item;
		}
		
		return $tmpArr;
	}
*/	
	
	function addElements(array &$arr, $items){
		
		foreach($arr as &$menuList){
			
			$flag = false;
			
			if(isset($menuList["CHILD"]) && count($menuList["CHILD"])){
				$flag = true;
			}
			
			foreach($items as $item){
				if($item['IBLOCK_SECTION_ID'] == $menuList['ID']){
					$menuList["CHILD"][$item['NAME']] = $item;
				}
			}
			if($flag){
				addElements($menuList["CHILD"], $items);
			}
		}
	}				