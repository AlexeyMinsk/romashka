<?
	function resizeImage($id, $width, $height, $type = 3, $jpgQuality = 100) {
		$arReturn = array();
		if (is_array($id)) {
			$arReturn["ALT"] = $id["ALT"];
			$arReturn["TITLE"] = $id["TITLE"];
		}
		$type = $type >= 1 && $type <= 3 ? $type : 3;
		$arTypeResize = array(
		1 => BX_RESIZE_IMAGE_EXACT,
		2 => BX_RESIZE_IMAGE_PROPORTIONAL,
		3 => BX_RESIZE_IMAGE_PROPORTIONAL_ALT,
		);
		return array_merge(
		$arReturn,
		array_change_key_case(CFile::ResizeImageGet(
		$id,
		array("width" => $width, "height" => $height),
		$arTypeResize[$type],
		true,
		false,
		false,
		$jpgQuality
		),
		CASE_UPPER
		)
		);
	}
	
	class OpenGraph{
		
		private $resultStr = '';
		
		/*
			function __construct(){
			
			
			}
		*/
		
		function setOG($url, array $otions = array()){
			
			if(!empty($url) && strlen($url)){
				$this->resultStr = '<meta property="og:url" content='.$url.' />';
			}
			else{
				$this->resultStr = '<meta property="og:url" content='.$_SERVER["HTTP_HOST"]
					.$_SERVER["SCRIPT_NAME"].' />';
			}
			
			if(isset($otions) && is_array($otions) && count($otions)){
				
				foreach($otions as $property => $content){
					
					$this->resultStr += '<meta property="og:'.$property.'" content='.$content.' />';;
				}
			}
		}
		
		function showOG(){
			
			echo $this->resultStr;
		}
	}						