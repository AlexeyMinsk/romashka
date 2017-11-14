<?
	require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php");
	
	if(isset($_POST) && $_POST["add_wish"] == "Y"){
		
		$rsUsers = CUser::GetList(($by="personal_country"), ($order="desc"), 
			array(
				"ID" => $_POST["user_id"]
			), 
			array(
				"SELECT" => array(
				"UF_WISH_LIST"
			),
			"FIELDS" => array(
				"ID",
				"LOGIN"
			)
		));
		if($userFields = $rsUsers->fetch()){
		
			if($userFields['UF_WISH_LIST'] === false)
				$userFields['UF_WISH_LIST'] = array();
			
			$fields = array(
				"UF_WISH_LIST" => array_merge($userFields['UF_WISH_LIST'], array($_POST['ID']) )
			);
		
			$user = new CUser;
			$user->Update($_POST["user_id"], $fields);
		}
	}	