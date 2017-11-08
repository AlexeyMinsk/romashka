<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
	
	$arComponentParameters = array(
		
		"GROUPS" => array(
		),
		"PARAMETERS" => array(
			"FOLDER_PATH" => array(
			"PARENT" => "BASE",
			"NAME" => GetMessage("FOLDER_PATH"),
			"TYPE" => "STRING"
			),	
			"FILE_PRE_NAME" => array(
			"PARENT" => "BASE",
			"NAME" => GetMessage("FILE_PRE_NAME"),
			"TYPE" => "STRING"
			),
			"COUNT_IMG" => array(
			"PARENT" => "BASE",
			"NAME" => GetMessage("COUNT_IMG"),
			"TYPE" => "STRING"
			),
			"IMG_LIST" => array(
			"PARENT" => "BASE",
			"NAME" => GetMessage("IMG_LIST"),
			"TYPE" => "FILE",
			"MULTIPLE" => "Y",
			"ADDITIONAL_VALUES" => "Y"
			),
		)
	);
?>
