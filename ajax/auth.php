<?require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php");

	use \Bitrix\Main\Security\Random;
	
	global $USER;	
	
	if($USER->IsAuthorized()){
		echo $USER->GetId();
	}
	else{
		if(checkRequest($_POST)){
			
			$USER->Login($req['login'], $req['pass'], "Y");
			echo "Вы вошли";
		}
		elseif($_POST["create_user"] == "Y"){
			
			$randString = 'abcdefghijklnmopqrstuvwxyzABCDEFGHIJKLNMOPQRSTUVWXYZ0123456789';
			$passwordLenght = rand(7, 10);
			$newPassword = Random::getStringByCharsets($passwordLenght, $randString);
			
			$randString = 'abcdefghijklnmopqrstuvwxyzABCDEFGHIJKLNMOPQRSTUVWXYZ';
			$tempUserLogin = Random::getStringByCharsets(13, $randString);
			$USER->Register($tempUserLogin, "", "", $newPassword, $newPassword, "tempusers@mysite.ru");
			echo $USER->GetID();
		}
		else{
			echo "error";
		}
	}
	function checkRequest($req){
		
		$flag = false;
		
		if(isset($req) && isset($req['login']) && isset($req['pass'])){
			
			$flag = true;
		}
		
		return $flag;
	}					