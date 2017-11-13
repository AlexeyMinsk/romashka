<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<div class="basket_tabs">
	<!-- Nav tabs -->
	<ul class="basket_tabs__navigation" role="tablist">
		<li role="presentation" class="active"><a href="#basket" aria-controls="basket" role="tab" data-toggle="tab">Корзина</a></li>
		<li role="presentation" ><a href="#delivery" aria-controls="delivery" role="tab" data-toggle="tab">Доставка</a></li>
		<li role="presentation" ><a href="#order" aria-controls="order" role="tab" data-toggle="tab">Заказ</a></li>
	</ul>
	<!-- Tab panes -->
	<div class="tab-content">
		<div role="tabpanel" class="tab-pane active" id="basket">
			<div class="table-responsive">
				<table class="vertical_align">
					<tr>
						<th>Мои товары</th>
						<th>Описание</th>
						<th>Цена</th>
						<th>Количество</th>
						<th></th>
					</tr>
					<?foreach($arResult["ITEMS"]["AnDelCanBuy"] as $item):?>
					<tr data-elem-id="<?=$item['ID']?>">
						<td>
							<div class="basket_table_picture">
								<img src="<?=$item["DETAIL_PICTURE_SRC"]?>" alt="img"/>
							</div>
						</td>
						<td>
							<a class="mt_1 i_block" href="#"> <strong><?=$item["NAME"]?></strong></a>
							<div class="card_preview__linking">Оформлнение: джут</div>
						</td>
						<td>
							<span class="item-price"><?=str_replace(" ", "", $item["PRICE_FORMATED"])?></span>
							<div class="card_preview__linking item-sum"><?=str_replace(" ", "", $item["SUM"])?></div>
						</td>
						<td>
							<div class="counter _min">
								<a class="counter__minus" href="javascript:void(0)">—</a>
								<input class="counter__inp" type="text">
								<a class="counter__plus" href="javascript:void(0)">+</a>
							</div>
						</td>
						<td>
							<a class="fz_22" title="Удалить" href="javascript:void(0)"><i class="icon icon-trash"></i></a>
							<a class="fz_22" title="Отложить" href="javascript:void(0)"><i class="icon icon-bag"></i></a>
							<div class="btn_bask_dop">
								<a class="deleteX" title="Удалить" href="javascript:void(0)">&times;</a>
							</div>
						</td>
					</tr>
					<?endforeach;?>
				</table>
			</div>
			<div class="row">
				<div class="col-xs-12 ">
					<div class="fl_right">
						<dl class="dl-horizontal">
							<dt>Товаров :</dt>
							<dd class='item-quantity'></dd>
							<dt class="">Итого:</dt>
							<dd class="font_bold fz_18 sum-result"></dd>
						</dl>
					</div>
				</div>
				<div class="col-xs-12 mt_2">
					<div class="text_center"><a href="#delivery" aria-controls="delivery" role="tab" data-toggle="tab" class="btn btn-primary btn-lg js_next">Далее</a></div>
				</div>
			</div>						
		</div>
		<div role="tabpanel" class="tab-pane " id="delivery">
			<div class=" label_reverse">
				Выберите удобный для Вас способ <span class="_upper Lora-BoldItalic">ОПЛАТЫ И ДОСТАВКИ</span>
			</div>
			<div class="col-sm-offset-1 col-sm-7 col-xs-12 mb_1 mt_2" class="">
			<form name="payment">
				<input id="rad-1" name="pay" type="radio" value="1"><label for="rad-1">Наличные/пластиковая карта курьеру при доставке по г. Молодечно</label>
				<input id="rad-2" name="pay" type="radio" value="2"><label for="rad-2">Наличные/пластиоквая карта в нашем магазине.</label>
				<input id="rad-3" name="pay" type="radio" value="3"><label for="rad-3">Наличные/пластиковая карта курьеру при доставке по молодеченскому району.</label>
			</form>
			</div>
			<div class="col-sm-4 col-xs-12 ">
				<div class="label_reverse label_brown">
					При заказе от 1000 руб. <br>
					доставка по городу <br>
					БЕСПЛАТНО!
				</div>
				<div class="label_reverse label_brown">
					Стоимость доставки: 300 руб
				</div>
			</div>
			<div class="clear"></div>
			<div class=" label_reverse">
				Введите Ваши данные
			</div>
			<form action="" name="order">
				<div class="col-xs-12 col-sm-5 text_right_sm">Имя, отчество</div>
				<div class="col-xs-12 col-sm-4">
					<input class="form-control" type="text" name="name_secondname">
				</div>
				<div class="col-xs-12 col-sm-5 text_right_sm">Телефон *</div>
				<div class="col-xs-12 col-sm-4">
					<input class="form-control" type="text" name="tel">
				</div>
				<div class="col-xs-12 col-sm-5 text_right_sm">E-mail</div>
				<div class="col-xs-12 col-sm-4">
					<input class="form-control" type="text" name="email">
				</div>
				<div class="col-xs-12 col-sm-5 text_right_sm">Город доставки</div>
				<div class="col-xs-12 col-sm-4">
					<input id="ch-1" name="city" type="checkbox"><label for="ch-1">Молодечно</label>
				</div>
				<div class="col-xs-12 col-sm-5 text_right_sm">Адрес доставки</div>
				<div class="col-xs-12 col-sm-4">
					<textarea class="form-control" cols="10" rows="3" name="addr"></textarea>
				</div>
				<div class="col-xs-12 col-sm-5 text_right_sm" >Дата/время доставки</div>
				<div class="col-xs-12 col-sm-2">
					<input class="form-control" type="text" name="date">
				</div>
				<div class="col-xs-12 col-sm-2">
					<input class="form-control" type="text" name="time">
				</div>
				<div class="col-xs-12 col-sm-5 text_right_sm">Комментарий к заказу</div>
				<div class="col-xs-12 col-sm-4">
					<textarea class="form-control" cols="10" rows="3" name="comments"></textarea>
				</div>
			</form>
			
			<div class="col-xs-12 mt_2">
				<div class="text_center"><a href="#order" aria-controls="delivery" role="tab" data-toggle="tab" class="btn btn-primary btn-lg js_next">Далее</a></div>
			</div>	
		</div>
		<div role="tabpanel" class="tab-pane" id="order">
			<div class="big_label">
				Ваш заказ сформирован, пожалуйста проверьте все данные перед подтверждением заказа
			</div>
			
			<div class="col-xs-12 col-sm-8">
				<div class="table-responsive">
					<table class="vertical_align">
						<tr>
							<th>Товар</th>
							<th>Описание</th>
							<th>Количество</th>
							<th>Цена</th>
						</tr>
						<?foreach($arResult["ITEMS"]["AnDelCanBuy"] as $item):?>
						<tr>
							<td>
								<div class="basket_table_picture">
									<img src="<?=$item["DETAIL_PICTURE_SRC"]?>" alt="img"/>
								</div>
							</td>
							<td>
								<a class="mt_1 i_block" href="#"> <strong><?=$item["NAME"]?></strong></a> <br/>
							</td>
							<td class="text_center" data-counter-td="<?=$item['ID']?>"><?=$item['QUANTITY']?></td>
							<td data-sum-td="<?=$item['ID']?>"><?=str_replace(" ", "", $item["SUM"])?></td>
						</tr>
						<?endforeach;?>
					</table>
				</div>
			</div>
			<div class="col-xs-12 col-sm-4">
				<div class="label_reverse label-danger mt_2 mb_2">
					Стоимость доставки: <span class="cargo-cost">0</span> руб. <br>
					Итого: <span class="result-order-sum">0</span> руб.
				</div>
				<dl class="dl-horizontal" name="illustration-order">
					<dt>Форма доставки</dt>
					<dd name="delivery-method"></dd>
					<dt>Адрес доставки</dt>
					<dd name="full-addr"></dd>
					<dt>Форма оплаты</dt>
					<dd name="payment-method"></dd>
					<dt>Срок доставки</dt>
					<dd name="illustration-date"></dd>
				</dl>
			</div>
			<div class="col-xs-12 mt_2">
				<div class="text_center"><a href="#" class="btn btn-primary btn-lg">Подтвердить заказ</a></div>
			</div>
		</div>
	</div>
</div>
<?
	$itemsForJs = array();
	
	foreach($arResult["ITEMS"]["AnDelCanBuy"] as $item){
		
		$itemsForJs[] = array(
		"QUANTITY" => $item['QUANTITY'],
		);
	}
	
?>
<script>
	var items = <?=CUtil::PhpToJSObject($itemsForJs)?>;
</script>