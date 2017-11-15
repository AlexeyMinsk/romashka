<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<div class="table-responsive">
	<table class="vertical_align">
	<?foreach($arResult["ITEMS"] as $item):?>
		<tr data-wishlist-id="<?=$item['ID']?>">
			<td>
				<div class="basket_table_picture">
					<img src="<?=$item['DETAIL_PICTURE']?>" alt="img"/>
				</div>
			</td>
			<td>
			<?
			$tempStr = str_replace('#SITE_DIR#', '', $item['DETAIL_PAGE_URL']);
			$tempStr = str_replace('#ELEMENT_ID#', $item["ID"], $tempStr);
			?>
				<a class="mt_1 i_block" href="<?=$tempStr?>">
					<strong><?=$item['NAME']?></strong></a><br/>
			</td>
			<td class="text_center">
				<?=$item['PRICE_ARR']['PRICE']?> руб.
			</td>
			<td>
				<a class="fz_22" title="Удалить" href="javascript:void(0)"><i class="icon icon-trash"></i></a>
				<a class="fz_22" title="В корзину" href="#"><i class="icon icon-basket"></i></a>
			</td>
		</tr>
	<?endforeach;?>
	</table>
</div>
<?
	$itemsForJs = array();
	$imgSrcArr = array();
	
	foreach($arResult["ITEMS"] as $item){

		$itemsForJs[$item['ID']] = array(
			"PRODUCT_ID" => $item['ID'],
			"PRICE" => $item['PRICE_ARR']['PRICE'],
			"CURRENCY" => "RUB",
			"LID" => "s1",
			"NAME" => $item['NAME'],
		);
	}
?>
<script>
	var items = <?=CUtil::PhpToJSObject($itemsForJs)?>;
	var userId = <?=$USER->GetId()?>;
</script>