<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<div class="col-md-9 col-sm-12">
	<div class="col-xs-12">
		<h1 class="mt_1">Каталог</h1>
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
	<a href="#" class="label_filter ">Кустовая хризантема</a>
	<a href="#" class="label_filter">Одноголовая хризантема</a>
	<a href="#" class="label_filter active">Одноголовая хризантема</a>
	
	
	<section class="row__inline-blocks mt_3">
		<?foreach($arResult['ITEMS'] as $key => $item){?>
		<div class="col-xs-12 col-mid-xs-6 col-sm-4 ">
			<div class="card_preview">
				<div class="card_preview__wrap_hidden">
					<a class="card_preview__lnk_pic" href="#">
						<img alt="img" src="<?=SITE_DIR.$item?>" class="card_preview__pic" title="img">
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
	<div class="text_center">
		<nav>
			<ul class="pagination">
				<li>
					<a href="#" aria-label="Previous">
						<span aria-hidden="true">«</span>
					</a>
				</li>
				<li><a href="#">1</a></li>
				<li class="active"><a href="#">2</a></li>
				<li><a href="#">3</a></li>
				<li><a href="#">4</a></li>
				<li><a href="#">5</a></li>
				<li>
					<a href="#" aria-label="Next">
						<span aria-hidden="true">»</span>
					</a>
				</li>
			</ul>
		</nav>
	</div>
</div>