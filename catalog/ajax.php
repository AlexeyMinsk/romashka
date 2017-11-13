<?	
	require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php");

	if(isset($_POST) && $_POST["ajax_basket"] === 'Y'){
		if (CModule::IncludeModule("sale"))
			CSaleBasket::Add($_POST["item"]);
	}