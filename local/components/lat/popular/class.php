<?
	use	Bitrix\Main\Loader;
	
	class PopularClass extends CBitrixComponent{
		
		public function executeComponent(){

			$this->init();
			
			if($this->StartResultCache()){
				$this->IncludeComponentTemplate();
			}
		}
		
		private function init(){

		    if(!Loader::IncludeModule("iblock")){
			//обработка ошибок
			}

			if($this->validateParams($this->arParams["IBLOCK_ID"]))
				$this->arResult["ITEMS"] = $this->getItems($this->arParams["IBLOCK_ID"], $this->arParams["COUNTER"]);
			else
				$this->arResult["ITEMS"] = array();
		}
		
		private function validateParams($param1){

			if(isset($param1))
				return true;
			return false;
		}
		
		private function getItems($iBlockId, $counter){

			$filter = array(
				"IBLOCK_ID" => $iBlockId,
				"ACTIVE" => "Y"
			);
			$select = array(
				"DETAIL_PICTURE",
				"DETAIL_PAGE_URL",
				"NAME",
				"SHOW_COUNTER"
			);
			$DBres = CIBlockElement::GetList(array("show_counter" => "desc"), $filter, false, false, $select);

			$items = array();
			
			while($item = $DBres->fetch()){

				$item['DETAIL_PICTURE'] = CFile::GetPath($item['DETAIL_PICTURE']);
				$item['PRICE_ARR'] = CPrice::GetBasePrice($item['ID']);
				$items[] = $item;
				$counter--;
				if(!$counter)
					break;
			}
			return $items;
		}
	};
?>