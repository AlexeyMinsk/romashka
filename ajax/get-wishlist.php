<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php");

if(isset($_POST) && $_POST["add_wish"] == "Y"){

	$rsUsers = CUser::GetList(($by="personal_country"), ($order="desc"), array(
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
	
	echo json_encode($rsUsers->fetch()["UF_WISH_LIST"]);
}