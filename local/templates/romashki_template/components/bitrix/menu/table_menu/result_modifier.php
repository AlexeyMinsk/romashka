<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
	/*
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
		
		$item['DETAIL_URL'] = menuItement($item['DETAIL_PAGE_URL'], $item['IBLOCK_SECTION_ID'], $item['ID']);
		$items[] = $item;	
	}
	unset($DBres);
	
	$DBres = CIBlockSection::GetList(array("SORT"=>"ASC"), array("IBLOCK_ID" => $iBlockId), false);
	while($item = $DBres->fetch()){
		$sections[] = $item;	
	}
	unset($DBres);
	filterParams($sections);
	$arResult['MENU'] = buildLeftMenu($sections, 1, $items);
	addElementsLeftMenu($arResult['MENU'], $items);
	
	
	function buildLeftMenu($sections, $level_depth, $items, $structMenu = array()){//построение структуры
		
		if($level_depth == 4) return $structMenu;
		
		foreach($sections as $menuItem){
			$Id = $menuItem['ID'];
			if($menuItem['DEPTH_LEVEL'] ==  $level_depth){
				if(empty($structMenu[$Id]))
				$structMenu[$Id] = $menuItem;
				$structMenu[$Id]['CHILD'] = getChildArray($sections, $Id);
				if(count($structMenu[$Id]['CHILD']))
				$structMenu[$Id]['CHILD'] = buildLeftMenu($sections, $level_depth+1, $items, $structMenu[$Id]['CHILD']);
			}
		}
		return $structMenu;
	}
	
	function filterParams(&$sections){
		
		foreach($sections as &$item){
			
			$newSectArr[$item['ID']] = array(
			
			"ID" => $item['ID'],
			"IBLOCK_ID" => $item['IBLOCK_ID'],
			"NAME" => $item['NAME'],
			"IBLOCK_SECTION_ID" => $item['IBLOCK_SECTION_ID'],
			"SORT" => $item['SORT'],
			"DEPTH_LEVEL" => $item['DEPTH_LEVEL'],
			"DETAIL_URL" => menuItemion($item['SECTION_PAGE_URL'], $item['ID']),
			"CHILD" => array(),
			);
			$item = $newSectArr[$item['ID']];
		}
	}
	
	
	function getChildArray($sections, $ID){
		
		$tmpArr = array();
		
		foreach($sections as $item){
			if($item['IBLOCK_SECTION_ID'] == $ID)
			$tmpArr[$item['ID']] = $item;
		}

		return $tmpArr;
	}
	
	function addElementsLeftMenu(array &$arr, $items){
		
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
				addElementsLeftMenu($menuList["CHILD"], $items);
			}
		}
	}
	
	function menuItement($templateUrl, $sectionId, $id){
		
		$match = '';
		preg_match('/\/\w+\//', $templateUrl, $match);
		return $match[0].$sectionId."/".$id."/";
	}
	
	function menuItemion($templateUrl, $sectionId){

		$match = '';
		preg_match('/\/\w+\//', $templateUrl, $match);
		return $match[0].$sectionId."/";
	}
*/