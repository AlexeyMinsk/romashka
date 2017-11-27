<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<section class="row__inline-blocks mt_3">
	
	<?foreach($arParams['COMPONENT_TITLE'] as $title):?>
	<div class="h2 text_center _upper title_line_horizontal">
		<span><?=$title;?></span>
	</div>
		<?foreach($arResult["ITEMS"] as $item):?>
		<div class="col-xs-12 col-mid-xs-6 col-sm-4 col-md-3 ">
			<div class="card_preview" data-card-id="<?=$item['ID']?>">
				<div class="card_preview__wrap_hidden">
					<a class="card_preview__lnk_pic" href="<?=$item["DETAIL_PAGE_URL"]?>">
						<img class="card_preview__pic" src="<?=$item["DETAIL_PICTURE"]?>" title="img" alt="img"/>
					</a>
					<div class="card_preview__info">
						<div class="raiting text_center">
							<img src="/img/raiting.png" alt="img">
						</div>
						<div class="card_preview__prod_name">
							<a class="card_preview__lnk lnk_brd" href="javascript:void(0)"   title="<?=$item["NAME"]?>">
							<?=$item["NAME"]?></a>
						</div>
						<div class="card_preview__price">
							<?=$item["PRICE_ARR"]["PRICE"]?>
							<span class="card_preview__price_old"><?=$item["PRICE_ARR"]["PRICE"]?></span>
						</div>
						<a href="#in_wish" class="wish open-popup-inline" data-effect="mfp-zoom-in"><i class="icon i_star"></i>
						Добавить в избранное</a>
					</div>
					<a class="btn btn-primary full_width _upper open-popup-inline" data-effect="mfp-zoom-in" href="#card_in_basket">
					В корзину</a>
				</div>
			</div>
		</div>
		<?endforeach;?>
	<?endforeach;?>
</section>
<?
	$itemsForJs = array();
	$imgSrcArr = array();
	
	foreach($arResult["ITEMS"] as $item){
		
		$itemsForJs[$item['ID']] = array(
		"PRODUCT_ID" => $item['ID'],
		"PRICE" => $item['PRICE_ARR']['PRICE'],
		"CURRENCY" => "RUB",
		"LID" => "s1",
		"NAME" => $item['NAME']
		);
		
		$imgSrcArr[$item['ID']] = $item["DETAIL_PICTURE"];
	}
	/*
	if($USER->IsAuthorized()){
		$userId = $USER->GetId();
	}
	else{
		$userId = 0;
	}
*/
?>
<script>
	var items = <?=CUtil::PhpToJSObject($itemsForJs)?>;
	var imagesSrc = <?=CUtil::PhpToJSObject($imgSrcArr)?>;
	//var userId = <?=$userId?>;
</script>