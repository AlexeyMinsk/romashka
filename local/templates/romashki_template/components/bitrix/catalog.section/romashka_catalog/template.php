<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<section class="row__inline-blocks mt_3">
	<?foreach($arResult['ITEMS'] as $key => $item){
		if(isset($item['DETAIL_PICTURE']) && is_array($item['DETAIL_PICTURE']) )
			$DETAIL_PICTURE = $item['DETAIL_PICTURE'];
		if(isset($item['PREVIEW_PICTURE']) && is_array($item['PREVIEW_PICTURE']) )
			$PREVIEW_PICTURE = $item['PREVIEW_PICTURE'];
		$PICTURE = $PREVIEW_PICTURE ? $PREVIEW_PICTURE : $DETAIL_PICTURE;
		if(empty($PICTURE))
			$PICTURE = array('SRC' => '/img/no-foto.jpg');	
	?>
	<div class="col-xs-12 col-mid-xs-6 col-sm-4 ">
		<div class="card_preview" data-card-id=<?=$item['ID']?>>
			<div class="card_preview__wrap_hidden">
				<a class="card_preview__lnk_pic" href="#">
					<img alt="img" src="<?=$PICTURE['SRC']?>" class="card_preview__pic" title="img">
					<?if($key%3 == 0):?>
						<span class="label_card">
							<span class="label_info _new">
							</span> <br>
							<span class="label_info _hit">
							</span>
						</span>
						<span class="label_card label_right">
							<span class="label_info _discount">
							</span><br>
						</span>
					<?endif;?>
				</a>
				<div class="card_preview__info ">
					<div class="raiting text_center">
						<img alt="img" src="<?=$arResult['RAITING']?>">
					</div>
					<div class="card_preview__prod_name">
						<a class="card_preview__lnk lnk_brd" href="#" title="Нижнее белье Ночь наступает"><?=$item["NAME"]?></a>
					</div>
					<div class="card_preview__price">
						<?=$item['ITEM_PRICES'][0]['RATIO_PRICE'].' руб.'?>
						<span class="card_preview__price_old"><?=$item['ITEM_PRICES'][0]['BASE_PRICE'].' руб.'?></span>
					</div>
					<a href="#in_wish" class="wish open-popup-inline" data-effect="mfp-zoom-in"><i class="icon i_star"></i>Добавить в избранное</a>
				</div>
				<a class="btn btn-primary full_width _upper open-popup-inline" data-effect="mfp-zoom-in" href="#card_in_basket">В корзину</a>
			</div>
		</div>
	</div>
	<?}?>
</section>
<?
	$itemsForJs = array();
	$imgSrcArr = array();
	
	foreach($arResult["ITEMS"] as $item){

		$itemsForJs[$item['ID']] = array(
			"PRODUCT_ID" => $item['ID'],
			"PRICE" => $item['ITEM_PRICES'][0]['BASE_PRICE'],
			"CURRENCY" => "RUB",
			"LID" => "s1",
			"NAME" => $item['NAME'],
		);
		$imgSrcArr[$item['ID']] = $item["PREVIEW_PICTURE"]["SRC"] ?
			$item["PREVIEW_PICTURE"]["SRC"] : $item["DETAIL_PICTURE"]["SRC"];
	}
?>
<script>
	var items = <?=CUtil::PhpToJSObject($itemsForJs)?>;
	var imagesSrc = <?=CUtil::PhpToJSObject($imgSrcArr)?>;
	var userId = <?=$USER->GetId()?>;
</script>