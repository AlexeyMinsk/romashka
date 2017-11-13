<?
	require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
	$APPLICATION->SetTitle("Каталог");
	$APPLICATION->SetPageProperty('bodyClass', $APPLICATION->GetCurPage(true));
	$APPLICATION->SetPageProperty('uniqueDataHeader', '<div class="g-wrapper">');
	$APPLICATION->SetPageProperty('uniqueFooterScript', '
	<script src="/js/vendor/tab.min.js"></script>
	');
	$APPLICATION->SetPageProperty("NOT_SHOW_NAV_CHAIN", "N");
?>
<div class="container">
	<div class="row">
		<div class="col-xs-12">
			<?$APPLICATION->ShowNavChain();?>
		</div>
	</div>
</div>
<main>
	<div class="g-main">
		<div class="g-main_i container">
			<div class="row">
				<div class="col-xs-12">
					<div class=" mt_2">
						<h1 class="">Корзина</h1>
					</div>
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
									<?$APPLICATION->IncludeComponent(
										"bitrix:sale.basket.basket",
										"romashki_basket",
										Array()
									);?>
								</div>
								<div class="row">
									<div class="col-xs-12 ">
										<div class="fl_right">
											<dl class="dl-horizontal">
												<dt>Товаров :</dt>
												<dd>2</dd>
												<dt class="">Итого:</dt>
												<dd class="font_bold fz_18">28 090 000 руб.</dd>
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
								<div class="col-sm-offset-1 col-sm-7 col-xs-12 mb_1 mt_2">
									<input id="rad-1" name="rad" type="radio"><label for="rad-1">Наличные/пластиковая карта курьеру при доставке по г. Молодечно</label>
									<input id="rad-2" name="rad" type="radio"><label for="rad-2">Наличные/пластиоквая карта в нашем магазине.</label>
									<input id="rad-3" name="rad" type="radio"><label for="rad-3">Наличные/пластиковая карта курьеру при доставке по молодеченскому району.</label>
								</div>
								<div class="col-sm-4 col-xs-12 ">
									<div class="label_reverse label_brown">
										При заказе от 150 000 руб. <br>
										доставка по городу <br>
										БЕСПЛАТНО!
									</div>
									<div class="label_reverse label_brown">
										Доставка по району: 3 000 руб/км
									</div>
								</div>
								<div class="clear"></div>
								<div class=" label_reverse">
									Введите Ваши данные
								</div>
								<form action="">
									<div class="col-xs-12 col-sm-5 text_right_sm">Имя, отчество</div>
									<div class="col-xs-12 col-sm-4">
										<input class="form-control" type="text">
									</div>
									<div class="col-xs-12 col-sm-5 text_right_sm">Телефон *</div>
									<div class="col-xs-12 col-sm-4">
										<input class="form-control" type="text">
									</div>
									<div class="col-xs-12 col-sm-5 text_right_sm">E-mail</div>
									<div class="col-xs-12 col-sm-4">
										<input class="form-control" type="text">
									</div>
									<div class="col-xs-12 col-sm-5 text_right_sm">Город доставки</div>
									<div class="col-xs-12 col-sm-4">
										<input id="ch-1" name="rad" type="checkbox"><label for="ch-1">Молодечно</label>
									</div>
									<div class="col-xs-12 col-sm-5 text_right_sm">Адрес доставки</div>
									<div class="col-xs-12 col-sm-4">
										<textarea class="form-control" cols="10" rows="3"></textarea>
									</div>
									<div class="col-xs-12 col-sm-5 text_right_sm">Дата/время доставки</div>
									<div class="col-xs-12 col-sm-2">
										<input class="form-control" type="text">
									</div>
									<div class="col-xs-12 col-sm-2">
										<input class="form-control" type="text">
									</div>
									<div class="col-xs-12 col-sm-5 text_right_sm">Комментарий к заказу</div>
									<div class="col-xs-12 col-sm-4">
										<textarea class="form-control" cols="10" rows="3"></textarea>
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
											<tr>
												<td>
													<div class="basket_table_picture">
														<img src="img/cat-5.jpg" alt="img"/>
													</div>
												</td>
												<td>
													<a class="mt_1 i_block" href="#"> <strong>Цветы #1</strong></a> <br/>
												</td>
												<td class="text_center">
													1
												</td>
												<td>15 000 руб.</td>
											</tr>
											<tr>
												<td>
													<div class="basket_table_picture">
														<img src="img/cat-5.jpg" alt="img"/>
													</div>
												</td>
												<td>
													<a class="mt_1 i_block" href="#"> <strong>Цветы #1</strong></a> <br/>
												</td>
												<td class="text_center">
													1
												</td>
												<td>15 000 руб.</td>
											</tr>
										</table>
									</div>
								</div>
								<div class="col-xs-12 col-sm-4">
									<div class="label_reverse label-danger mt_2 mb_2">
										Стоимость доставки: 0 руб. <br>
										Итого: 1 600 000 руб.
									</div>
									<dl class="dl-horizontal">
										<dt>Форма доставки</dt>
										<dd>Курьером</dd>
										<dt>Адрес доставки</dt>
										<dd>г.Минск, ул.Казимировская, д.5</dd>
										<dt>Форма оплаты</dt>
										<dd>Наличными курьером</dd>
										<dt>Срок доставки</dt>
										<dd>17.04.2016</dd>
									</dl>
								</div>
								<div class="col-xs-12 mt_2">
									<div class="text_center"><a href="#" class="btn btn-primary btn-lg">Подтвердить заказ</a></div>
								</div>
								
							</div>
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</div>
</main>
</div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>