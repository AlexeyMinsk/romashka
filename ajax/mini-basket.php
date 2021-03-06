<?	
	require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php");
	
	if(isset($_POST)){
		if (CModule::IncludeModule("sale")){
			$arResult = CSaleBasket::GetList(array(), array(), false, false, array("PRICE", "QUANTITY"));
			$quantity = 0;
			$totalPrice = 0;
			while($fields = $arResult->fetch()){
				
				if(isset($fields["QUANTITY"]) && isset($fields["PRICE"])){
					$quantity += intval($fields["QUANTITY"]);
					$totalPrice = $totalPrice + (intval($fields["PRICE"]) * intval($fields["QUANTITY"]));
				}	
			}
			$quantity = $quantity > 99 ? '99+' : $quantity;
			$totalPrice = $totalPrice > 1000000 ? "1000000+" : $totalPrice;
			echo json_encode(array("quantity" => $quantity, "totalPrice" => $totalPrice));
		}
	}		