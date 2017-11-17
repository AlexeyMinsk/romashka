<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
	$APPLICATION->SetPageProperty('bodyClass', $APPLICATION->GetCurPage(true));
	$APPLICATION->SetPageProperty('uniqueDataHeader', '<div class="g-wrapper">');
	$APPLICATION->SetPageProperty('uniqueDataFooter', '</div>');
	$APPLICATION->SetPageProperty("NOT_SHOW_NAV_CHAIN", "N");
	$scriptsArr = array_merge($scriptsArr, array("/js/vendor/tab.min.js", "/js/vendor/menu_collapse.min.js"));
	$includeArr = array_merge($includeArr, array(//массив возможных включаемых областей
	"/include/card_in_basket.php",
	"/include/in_wish.php",
	"/include/popup-rduction.php"
	));
?>

<section class="row__inline-blocks mt_3">
	<?if(count($arResult['ITEMS'])):?>
	<?foreach($arResult['ITEMS'] as $key => $item):?>
	<div class="col-xs-12 col-mid-xs-6 col-sm-4 ">
		<div class="card_preview" data-card-id=<?=$item['ID']?>>
			<div class="card_preview__wrap_hidden">
				<a class="card_preview__lnk_pic" href="<?=$item['DETAIL_PAGE_URL']?>">
					<img alt="img" src="<?=$item['DETAIL_PICTURE']?>" class="card_preview__pic" title="img">
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
						<a class="card_preview__lnk lnk_brd" href="<?=$item['DETAIL_PAGE_URL']?>"
						title="Нижнее белье Ночь наступает"><?=$item["NAME"]?></a>
					</div>
					<div class="card_preview__price">
						<?=$item['PRICE_ARR']['PRICE'].' руб.'?>
						<span class="card_preview__price_old"><?=$item['PRICE_ARR']['PRICE'].' руб.'?></span>
					</div>
					<a href="#in_wish" class="wish open-popup-inline" data-effect="mfp-zoom-in"><i class="icon i_star"></i>Добавить в избранное</a>
				</div>
				<a class="btn btn-primary full_width _upper open-popup-inline" data-effect="mfp-zoom-in" href="#card_in_basket">В корзину</a>
			</div>
		</div>
	</div>
	<?endforeach;?>
	<?else:?>
	<h1>Раздел не содержит активных товаров, выберите другой раздел</h1>
	<?endif;?>
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
		"NAME" => $item['NAME'],
		);
		$imgSrcArr[$item['ID']] = $item["DETAIL_PICTURE"];
	}
	if($USER->IsAuthorized())
	$userId = $USER->GetId();
	else
	$userId = false;
?>
<script>
	var items = <?=CUtil::PhpToJSObject($itemsForJs)?>;
	var imagesSrc = <?=CUtil::PhpToJSObject($imgSrcArr)?>;
	var userId = <?=$userId?>;
</script>