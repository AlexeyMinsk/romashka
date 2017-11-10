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
					<div class="table-responsive">
						<table class="vertical_align">
							<tr>
								<td>
									<div class="basket_table_picture">
										<img src="/img/cat-5.jpg" alt="img"/>
									</div>
								</td>
								<td>
									<a class="mt_1 i_block" href="#"> <strong>Цветы #1</strong></a> <br/>
								</td>
								<td class="text_center">
									1 000 000 руб.
								</td>
								<td>
									<a class="fz_22" title="Удалить" href="#"><i class="icon icon-trash"></i></a>
									<a class="fz_22" title="В корзину" href="#"><i class="icon icon-basket"></i></a>
								</td>
							</tr>
							<tr>
								<td>
									<div class="basket_table_picture">
										<img src="/img/cat-5.jpg" alt="img"/>
									</div>
								</td>
								<td>
									<a class="mt_1 i_block" href="#"> <strong>Цветы #1</strong></a> <br/>
								</td>
								<td class="text_center">
									1 000 000 руб.
								</td>
								<td>
									<a class="fz_22" title="Удалить" href="#"><i class="icon icon-trash"></i></a>
									<a class="fz_22" title="В корзину" href="#"><i class="icon icon-basket"></i></a>
								</td>
							</tr>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</main>
</div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>