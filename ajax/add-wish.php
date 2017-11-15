<?
	require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php");
	
	if(isset($_POST) && $_POST["add_wish"] == "Y" && !empty($_POST["user_id"]) && isset($_POST['item_id'])){
		
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
			)
		);
		if($userFields = $rsUsers->fetch()){
		
			if($userFields['UF_WISH_LIST'] === false)
				$userFields['UF_WISH_LIST'] = array();
			if(!in_array($_POST['item_id'], $userFields['UF_WISH_LIST']))
				array_push($userFields['UF_WISH_LIST'], $_POST['item_id']);
			
			$fields = array(
				"UF_WISH_LIST" => $userFields['UF_WISH_LIST']
			);
		
			$user = new CUser;
			$user->Update($_POST["user_id"], $fields);
			$counter = count($fields["UF_WISH_LIST"]);

			echo $counter > 99 ? '99+' : $counter;
		}
		
	}elseif(isset($_POST) && $_POST["get_wish"] == "Y" && !empty($_POST["user_id"])){
			
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
			)
		);
		if($userFields = $rsUsers->fetch()){

			$counter = count($userFields["UF_WISH_LIST"]);
			echo $counter > 99 ? '99+' : $counter;
		}
		
	}elseif(isset($_POST) && $_POST["delete_item"] == "Y" && isset($_POST["item_id"]) && !empty($_POST["user_id"])){

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
			)
		);
		if($userFields = $rsUsers->fetch()){

			if(in_array($_POST['item_id'], $userFields['UF_WISH_LIST'])){
				
				$fields = array("UF_WISH_LIST" => array());
				
				foreach($userFields['UF_WISH_LIST'] as $item){
					if($item != $_POST['item_id'])
						$fields["UF_WISH_LIST"][] = $item;
				}
				$user = new CUser;
				$user->Update($_POST["user_id"], $fields);
			}
		}
	}