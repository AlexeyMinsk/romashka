<?require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php");
	
	if(checkRequest($_POST)){

		$arFields = Array(
			"EMAIL"             => $_POST['mail'],
			"LOGIN"             => $_POST['login'],
			"PASSWORD"          => $_POST['pass'],
			"CONFIRM_PASSWORD"  => $_POST['passpod'],
			"LID"               => "ru",
			"ACTIVE"            => "Y"
		);
	
		if(isset($_POST['name']))
			$arFields['NAME'] = $_POST['name'];
		if(isset($_POST['name']))
			$arFields['LAST_NAME'] = $_POST['fam'];

		$user = new CUser;
		$userId = $user->Add($arFields);
		$user->Authorize($userId);
	}
	else{
		echo "error";
	}
	
	function checkRequest($req){
		
		$flag = false;
		
		if(isset($req) && isset($req['login']) && isset($req['pass'])
			&& isset($req['passpod']) && isset($req['mail'])){
				
			$flag = true;
		}
		
			return $flag;
	}	