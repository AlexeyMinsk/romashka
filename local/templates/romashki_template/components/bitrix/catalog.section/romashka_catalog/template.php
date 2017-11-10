<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<section class="row__inline-blocks mt_3">
	<?foreach($arResult['ITEMS'] as $key => $item){?>
		<div class="col-xs-12 col-mid-xs-6 col-sm-4 ">
			<div class="card_preview">
				<div class="card_preview__wrap_hidden">
					<a class="card_preview__lnk_pic" href="#">
						<img alt="img" src="<?=$item?>" class="card_preview__pic" title="img">
						<?if($key%3 == 0){?>
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
						<?}?>
					</a>
					<div class="card_preview__info ">
						<div class="raiting text_center">
							<img alt="img" src="<?=$arResult['RAITING']?>">
						</div>
						<div class="card_preview__prod_name">
							<a class="card_preview__lnk lnk_brd" href="#" title="Нижнее белье Ночь наступает">Односторонний букет</a>
						</div>
						<div class="card_preview__price">
							45 568 450 руб.
							<span class="card_preview__price_old">86 454 000 руб.</span>
						</div>
						<a href="#in_wish" class="wish open-popup-inline" data-effect="mfp-zoom-in"><i class="icon i_star"></i>Добавить в избранное</a>
					</div>
					<a class="btn btn-primary full_width _upper open-popup-inline" data-effect="mfp-zoom-in" href="#card_in_basket">В корзину</a>
				</div>
			</div>
		</div>
	<?}?>
</section>