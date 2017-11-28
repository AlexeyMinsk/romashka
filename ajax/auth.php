<?require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php");

	use \Bitrix\Main\Security\Random;
	
	global $USER;	
	
	if($USER->IsAuthorized()){
		echo $USER->GetId();
	}
	else{
		if(checkRequest($_POST)){
			
			$USER->Login($_POST['login'], $_POST['pass'], "Y");
			echo $USER->GetId();
		}
		elseif($_POST["create_user"] == "Y"){
			
			$randString = 'abcdefghijklnmopqrstuvwxyzABCDEFGHIJKLNMOPQRSTUVWXYZ0123456789';
			$passwordLenght = rand(7, 10);
			$newPassword = Random::getStringByCharsets($passwordLenght, $randString);
			
			$randString = 'abcdefghijklnmopqrstuvwxyzABCDEFGHIJKLNMOPQRSTUVWXYZ';
			$tempUserLogin = Random::getStringByCharsets(13, $randString);
			$USER->Register($tempUserLogin, "", "", $newPassword, $newPassword, "tempusers@mysite.ru");
			
			$userId = $USER->GetID();
			$arGroups = CUser::GetUserGroup($userId);
			$arGroups[] = 6;
			CUser::SetUserGroup($userId, $arGroups);
			echo $userId;
		}
		elseif($_POST["temp_user_auth"] == "Y"){
			if($USER->Authorize($_POST["romashka_user"]))
				echo $_POST["romashka_user"];
			else
				echo 0;
		}
		else{
			echo 0;
		}
	}
	
	function checkRequest($req){
		
		$flag = false;
		
		if(isset($req) && isset($req['login']) && isset($req['pass'])){
			
			$flag = true;
		}
		
		return $flag;
	}					