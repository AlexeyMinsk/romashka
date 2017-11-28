<?require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php");
	
	global $USER;
	
	if($_POST['logout'] == 'Y'){

		$userGroupId = $USER->GetUserGroup();
		if(in_array(6, $userGroupId)){
		
			$id = $USER->GetId();
			$USER->Logout();
			if(CUser::Delete($id))
				echo "пользователь " .$id." удалён";
		}
		else{
			$USER->Logout();
			echo json_encode($userGroupId);
		}
	}