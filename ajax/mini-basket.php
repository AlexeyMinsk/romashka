<?	
	require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php");
	
		if(isset($_POST) && $_POST["ID"]){
		if (CModule::IncludeModule("sale")){
			echo CSaleBasket::GetByID($_POST["ID"]);
		}
	}	