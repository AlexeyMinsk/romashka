<?	
	require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php");
	
	if(isset($_POST) && $_POST["ID"] && $_POST["VALUE"]){
		if (CModule::IncludeModule("sale")){
			if($_POST["VALUE"] == "DELETE"){
				CSaleBasket::Delete($_POST["ID"]);
			}
			elseif($_POST["VALUE"] == "DELAY"){
				$arFields = array(
					"DELAY" => 'Y',
				);
				CSaleBasket::Update($_POST["ID"], $arFields);
			}
			else{
				$arFields = array(
					"QUANTITY" => $_POST["VALUE"],
				);
				CSaleBasket::Update($_POST["ID"], $arFields);
			}
		}
	}			