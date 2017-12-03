<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
	$APPLICATION->SetPageProperty('bodyClass', $APPLICATION->GetCurPage(true));
	$APPLICATION->AddViewContent('uniqueDataHeader', '<div class="g-wrapper">');
	$APPLICATION->SetPageProperty("NOT_SHOW_NAV_CHAIN", "N");
	$scriptsArr = array_merge($scriptsArr, array("/js/vendor/tab.min.js", "/js/vendor/menu_collapse.min.js"));
	$includeArr = array_merge($includeArr, array(//массив возможных включаемых областей
		"/include/card_in_basket.php",
		"/include/in_wish.php",
		"/include/popup-rduction.php"
	));
?>
<?if(count($arResult['ITEMS'])):?>
<section class="g-main">
	<div class="container">
		<div class="row">
			<aside class="col-md-3 hidden-sm hidden-mid-xs hidden-xs">
				<?$APPLICATION->IncludeComponent("bitrix:menu", "left_menu", array(
					"ROOT_MENU_TYPE" => "product", 
					"MAX_LEVEL" => "3"
				), false);?>
			</aside>
			<div class="col-md-9 col-sm-12">
				<div class="col-xs-12">
					<h1 class="mt_1"><?=$APPLICATION->GetTitle(/*'not_title'*/)?></h1>
				</div>
				<div class="filter _horizontal filter_horizontal_bg clearfix mb_1">
					<div class="filter_title mb_2">Подбор параметров</div>
					<form action="">
						<div class="col-xs-12 col-sm-4">
							<div class="lnk_brd filter_lnk_collapse">
								Розничная цена
							</div>
							<div class="row">
								<div class="col-xs-6">
									<div class="form-group count_price">
										<label for="ot">От</label>
										<input type="text" class="form-control" id="ot">
									</div>
								</div>
								<div class="col-xs-6">
									<div class="form-group count_price">
										<label for="do">До</label>
										<input type="text" class="form-control" id="do">
									</div>
								</div>
							</div>
							<div class="clear"></div>
						</div>
						<div class="col-xs-12 col-sm-4">
							<div class="lnk_brd filter_lnk_collapse"> Какой повод
							</div>
							<div class="option_style">
								<select name="" id="">
									<option value="">8 марта</option>
									<option value="">День Св.Валентина</option>
									<option value="">День учителя</option>
									<option value="">На свадьбу</option>
									<option value="">Юбилей</option>
									<option value="">Просто так</option>
									<option value="">Рождение ребенка</option>
								</select>
							</div>
						</div>
						<div class="col-xs-12 col-sm-4">
							<div class="mt_2">
								<input class="btn btn-primary" type="submit" value="Показать">
								<input class="btn btn-primary btn_reverse" type="submit" value="Сбросить">
							</div>
						</div>
						<div class="clear"></div>
					</form>
				</div>
				<a href="javascript:void(0)" class="label_filter ">Кустовая хризантема</a>
				<a href="javascript:void(0)" class="label_filter">Одноголовая хризантема</a>
				<a href="javascript:void(0)" class="label_filter active">Одноголовая хризантема</a>
				<section class="row__inline-blocks mt_3">
					<?foreach($arResult['ITEMS'] as $key => $item):

						if(isset($item['DETAIL_PICTURE']) && is_array($item['DETAIL_PICTURE']) )
								$DETAIL_PICTURE = $item['DETAIL_PICTURE']['SRC'];
							
							if(isset($item['PREVIEW_PICTURE']) && is_array($item['PREVIEW_PICTURE']) )
								$PREVIEW_PICTURE = $item['PREVIEW_PICTURE']['SRC'];
							
							$PICTURE = $PREVIEW_PICTURE ? $PREVIEW_PICTURE : $DETAIL_PICTURE;
							
							if(empty($PICTURE))
								$PICTURE = array('SRC' => '/img/no-foto.jpg');	
					?>
					<div class="col-xs-12 col-mid-xs-6 col-sm-4 ">
						<div class="card_preview" data-card-id=<?=$item['ID']?>>
							<div class="card_preview__wrap_hidden">
								<a class="card_preview__lnk_pic" href="<?=$item['DETAIL_PAGE_URL']?>">
									<img alt="img" src="<?=$PICTURE?>" class="card_preview__pic" title="img">
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
										<?=$item['CATALOG_PURCHASING_PRICE'].' руб.'?>
										<span class="card_preview__price_old"><?=$item['CATALOG_PURCHASING_PRICE'].' руб.'?></span>
									</div>
									<a href="#in_wish" class="wish open-popup-inline" data-effect="mfp-zoom-in"><i class="icon i_star"></i>Добавить в избранное</a>
								</div>
								<a class="btn btn-primary full_width _upper open-popup-inline" data-effect="mfp-zoom-in" href="#card_in_basket">В корзину</a>
							</div>
						</div>
					</div>
					<?endforeach;?>
				</section>
			</div>
			<div class="text_center">
				<nav>
				<?if($arResult['NAV_RESULT']->NavPageCount > 0)://для теста 0
					$previus = $arResult['NAV_RESULT']->NavPageNomer - 1;
					$previus = $previus < 1 ? 1 : $previus;
					$next = $arResult['NAV_RESULT']->NavPageNomer + 1;
					$next = $next > $arResult['NAV_RESULT']->NavPageCount ?
						$arResult['NAV_RESULT']->NavPageCount : $next;
				?>
					<ul class="pagination">
						<li>
							<a href="/catalog/?PAGEN_1=<?=$previus?>" aria-label="Previous">
								<span aria-hidden="true">«</span>
							</a>
						</li>
						<?for($i = 1; $i <= $arResult['NAV_RESULT']->NavPageCount; $i++):
							if($arResult['NAV_RESULT']->NavPageNomer == $i):?>
								<li class="active"><a href="/catalog/?PAGEN_1=<?=$i?>"><?=$i?></a></li>
							<?else:?>
								<li><a href="/catalog/?PAGEN_1=<?=$i?>"><?=$i?></a></li>
							<?endif;
						endfor;?>
						<li>
							<a href="/catalog/?PAGEN_1=<?=$next?>" aria-label="Next">
								<span aria-hidden="true">»</span>
							</a>
						</li>
					</ul>
					<?endif;?>
				</nav>
			</div>
		</div> 
	</div>
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<div class="text_center mb_2">
					<div class="h2 text_center _upper title_line_horizontal mb_3">
						Букеты с хризантемой
					</div>
				</div>
				
				<div class="row__inline-blocks">
					<?
						foreach($arResult['ITEMS'] as $key => $item):
						
							if($key == 4)
								break;
							
							if(isset($item['DETAIL_PICTURE']) && is_array($item['DETAIL_PICTURE']) )
								$DETAIL_PICTURE = $item['DETAIL_PICTURE'];
							
							if(isset($item['PREVIEW_PICTURE']) && is_array($item['PREVIEW_PICTURE']) )
								$PREVIEW_PICTURE = $item['PREVIEW_PICTURE'];
							
							$PICTURE = $PREVIEW_PICTURE ? $PREVIEW_PICTURE : $DETAIL_PICTURE;
							
							if(empty($PICTURE))
								$PICTURE = array('SRC' => '/img/no-foto.jpg');	
					?>
						<div class="col-xs-12 col-mid-xs-6 col-sm-4 col-md-3">
							<div class="card_preview">
								<div class="card_preview__wrap_hidden">
									<a class="card_preview__lnk_pic" href="#">
										<img alt="img" src="<?=$PICTURE['SRC']?>" class="card_preview__pic" title="img">
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
									</a>
									<div class="card_preview__info ">
										<div class="raiting text_center">
											<img alt="img" src="<?=$arResult['RAITING']?>">
										</div>
										<div class="card_preview__prod_name">
											<a class="card_preview__lnk lnk_brd" href="#" title="Нижнее белье Ночь наступает"><?=$item["NAME"]?></a>
										</div>
										<div class="card_preview__price">
											<?=$item['CATALOG_PURCHASING_PRICE']?> руб.
											<span class="card_preview__price_old">
												<?=$item['CATALOG_PURCHASING_PRICE']?> руб.
												</span>
										</div>
										<a href="#in_wish" class="wish open-popup-inline" data-effect="mfp-zoom-in"><i class="icon i_star"></i>Добавить в избранное</a>
									</div>
									<a class="btn btn-primary full_width _upper open-popup-inline" data-effect="mfp-zoom-in" href="#card_in_basket">В корзину</a>
								</div>
							</div>
						</div>
					<?endforeach;?>
				</div>
				
				<p><?=$arResult['DESCRIPTION']?></p>
			</div>
		</div>
	</div>
</section>
<?else:?>
<div class="container">
	<div class="row">
		<h1>Раздел не содержит активных элементов, выберите другой <a href="/catalog">раздел!</a></h1>
		<img src="" alt="">
	</div>
	<p><?=$arResult['DESCRIPTION']?></p>
</div>


<?endif;?>
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
</script>