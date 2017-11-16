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
	
	$tmpStruct = buildStruct($sections, 1);
	$tmpStruct = buildMenu($tmpStruct, 1, $items);
	
	$GLOBALS['APPLICATION']->RestartBuffer();
	echo "<pre>".print_r($tmpStruct, true)."</pre>";
	die();
	//$arResult['ITEMS'] = $items;
	//$arResult['SECTION'] = $sections;
	
	function buildStruct($sections, $level_depth, $structMenu = array()){//построение структуры
		
		foreach($sections as $menuItem){
			if($menuItem['DEPTH_LEVEL'] == $level_depth){
				$structMenu[$menuItem['DEPTH_LEVEL']][] = $menuItem;
			}
		}
		if( count($structMenu[$level_depth]) )
		return buildStruct($sections, $level_depth+1, $structMenu);
		else
		return $structMenu;
	}	
	
	function buildMenu($tmpStruct, $level, $element, $menu = array()){//построение меню

		foreach($tmpStruct[$level] as $item){
			if($level == 1)
				$menu[$item['ID']] = $item;
			else
				$menu[$item['IBLOCK_SECTION_ID']]['CHILD'][] = $item;
		}
		
		if($level < count($tmpStruct))
			return buildMenu($tmpStruct, $level+1, $element, $menu);
		else
			return $menu;
	}	