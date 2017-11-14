<?
	require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
	$APPLICATION->SetTitle("Избранное");
	$APPLICATION->SetPageProperty('bodyClass', $APPLICATION->GetCurPage(true));
	$APPLICATION->SetPageProperty('uniqueDataHeader', '<div class="g-wrapper">');
	$APPLICATION->SetPageProperty("NOT_SHOW_NAV_CHAIN", "N");
?>
<main>
	<div class="g-main">
		<div class="g-main_i container">
			<div class="row">
				<div class="col-xs-12">
					<div class=" mt_2">
						<h1 class=""><?=$APPLICATION->GetTitle(/*'not_title'*/)?></h1>
					</div>
					<?
					$APPLICATION->IncludeComponent("lat:wishlist", "", array(
						"userId" => $USER->GetID(),
					));
					?>
				</div>
			</div>
		</div>
	</div>
</main>
</div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>