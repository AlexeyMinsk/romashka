<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
	global $APPLICATION;
	
	$aMenuLinks = Array(
	);

$aMenuLinksExt = $APPLICATION->IncludeComponent(
    "bitrix:menu.sections",
    "",
    Array(
        "ID" => $_REQUEST["ELEMENT_ID"], 
        "IBLOCK_TYPE" => "catalog", 
        "IBLOCK_ID" => "1", 
        "SECTION_URL" => "/catalog/#SECTION_ID#/#ELEMENT_ID#/", 
		"DEPTH_LEVEL" => 3,
        "CACHE_TIME" => "3600" 
    )
);

$aMenuLinks = array_merge($aMenuLinks, $aMenuLinksExt);

?>