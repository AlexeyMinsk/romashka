<?
	use	Bitrix\Main\Loader;
	
	class WishlistClass extends CBitrixComponent{
		
	
		public function executeComponent(){
			
			$this->init($this);
			
			if($this->StartResultCache()){
				$this->IncludeComponentTemplate();
			}
		}
		
		private function init($context){

		    if(!Loader::IncludeModule("iblock")){
			//обработка ошибок
			}
			$wishlist = $this->getUserWishlist($this->arParams['userId']);

			if($context->validateWishlistParams($wishlist))
				$context->arResult["ITEMS"] = $this->getItems($wishlist["iBlockId"], $wishlist["ITEMS"]);
			else
				$context->arResult["ITEMS"] = array();
		}
		
		private function validateWishlistParams($wishlist){
			
			if(isset($wishlist) && isset($wishlist["iBlockId"]) && count($wishlist["ITEMS"]))
				return true;
			return false;
		}
		
		private function getUserWishlist($userId){
			
			$rsUsers = CUser::GetList(($by="personal_country"), ($order="desc"), array(
					"ID" => $userId
				),
				array(
					"SELECT" => array(
						"UF_WISH_LIST"
					),
					"FIELDS" => array(
						"ID",
						"LOGIN"
					)
				)
			);
			$iBlockId = $rsUsers->arUserFields['UF_WISH_LIST']['SETTINGS']['IBLOCK_ID'];
			if($userFields = $rsUsers->fetch()){

				return array_merge(
					array(
						"ITEMS" => $userFields['UF_WISH_LIST']
					),
					array(
						'iBlockId' => $iBlockId
					)
				);
			}
		}
		
		private function getItems($iBlockId, $itemsId){
		
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
			return $items;
		}
	};
?>