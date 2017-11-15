<?	
	require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php");

	if(isset($_POST) && $_POST["ajax_basket"] === 'Y'){
		if (CModule::IncludeModule("sale")) 
			CSaleBasket::Add($_POST["item"]);
	}
	
	if(isset($_POST) && isset($_POST["refresh_mini_bask"])){
		if (CModule::IncludeModule("sale")){
			$arResult = CSaleBasket::GetList(array(), array(
					"FUSER_ID" => CSaleBasket::GetBasketUserID()
				),
				false,
				false,
				array(
					"PRICE",
					"QUANTITY"
				)
			);
			$quantity = 0;
			$goods = 0;
			$totalPrice = 0;
			while($fields = $arResult->fetch()){
				$goods++;
				if(isset($fields["QUANTITY"]) && isset($fields["PRICE"])){
					$quantity += intval($fields["QUANTITY"]);
					$totalPrice = $totalPrice + (intval($fields["PRICE"]) * intval($fields["QUANTITY"]));
				}	
			}
			$quantity = $quantity > 99 ? '99+' : $quantity;
			$totalPrice = $totalPrice > 1000000 ? "1000000+" : $totalPrice;
			echo json_encode(array("quantity" => $goods, "totalPrice" => $totalPrice, 'refresh' => 'Y'));
		}
	}	