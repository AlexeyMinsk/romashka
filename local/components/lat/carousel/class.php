<?
	class CarouselClass extends CBitrixComponent{
		
		public function executeComponent(){

			if($this->StartResultCache()){
				$this->IncludeComponentTemplate();
			}
		}
		
	};
?>