<?
	require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
	$APPLICATION->SetTitle("Личный кабинет");
	$APPLICATION->SetPageProperty('bodyClass', $APPLICATION->GetCurPage(true));
	$APPLICATION->SetPageProperty('uniqueDataHeader', "
	<script>
    document.getElementsByTagName('body')[0].classList.add('load_opacity');
    document.addEventListener('DOMContentLoaded', function(){
	document.getElementsByTagName('body')[0].classList.remove('load_opacity');
    });
	</script>
	<div class='g-wrapper'>");
	$scriptsArr = array_merge($scriptsArr, array("/js/vendor/tab.min.js"));
	$APPLICATION->SetPageProperty("NOT_SHOW_NAV_CHAIN", "N");
?>
<main>
	<div class="g-main">
		<div class="g-main_i container">
			<div class="row">
				<div class="col-xs-12 col-sm-3">
					<ul class=" private_tabs__navigation mt_2" role="tablist">
						<li role="presentation" class="active"><a href="#orders" aria-controls="orders" role="tab" data-toggle="tab">Мои заказы</a></li>
						<li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Мои настройки</a></li>
					</ul>
				</div>
				<div class="col-xs-12 col-sm-9">
					<div class="tab-content">
						<div role="tabpanel" class="tab-pane active" id="orders">
							<div class="h2 mt_0 mb_2">Мои заказы</div>
							<a class="btn btn_reverse" href="#">Посмотреть все заказы</a>
							<a class="btn btn_reverse" href="#">Посмотреть историю заказов</a>
							
							<div class="h3">Заказы в статусе "Принят, ожидаетя оплата"</div>
							<p>Заказ принят, но пока не обрабатывается
							(например, заказ только что создан или ожидается оплата заказа)</p>
							<div class="table-responsive">
								<table>
									<tr>
										<th>Заказ №4	от 09.10.2015</th>
										<th class="text-right"><a href="#">Подробнее о заказе</a></th>
									</tr>
									<tr>
										<td>
											<ul class="list_reset list_orders">
												<li>Сумма к оплате:<span class="font_normal"> 1 255 000 руб.</span></li>
												<li>Статус: <span class="font_normal">не оплачен</span></li>
												<li>Способ оплаты: <span class="font_normal">наличные курьеру</span></li>
												<li>Состав заказа: <br/>
													<a href="#">1. Розы</a>
												</li>
											</ul>
										</td>
										<td>
											<ul class="list_reset list_orders">
												<li>12.10.2015</li>
												<li><span class="label_refresh label-success">Принят, ожидается оплата</span></li>
												<li><a class="" href="#">Отменить заказ</a></li>
												<li><a class="" href="#">Повторить заказ</a></li>
											</ul>
										</td>
									</tr>
								</table>
							</div>
							
							<div class="h3">Заказы в статусе "Оплачен, формируется к отправке"</div>
							<p>Заказ оплачен, формируется к отправке клиенту.</p>
							<div class="table-responsive">
								<table>
									<tr>
										<th>
										Заказ №3 от 09.10.2015	</th>
										<th class="text-right"><a href="#">Подробнее о заказе</a></th>
									</tr>
									<tr>
										<td>
											<ul class="list_reset list_orders">
												<li>Сумма к оплате:<span class="font_normal"> 1 255 000 руб.</span></li>
												<li>Статус: <span class="font_normal">не оплачен</span></li>
												<li>Способ оплаты: <span class="font_normal">наличные курьеру</span></li>
												<li>Состав заказа: <br/>
													<a href="#">1. Хризантемы</a>
												</li>
											</ul>
										</td>
										<td>
											<ul class="list_reset list_orders">
												<li>12.10.2015</li>
												<li><span class="label_refresh label-warning">Оплачен, формируется к отправке</span></li>
												<li><a class="" href="#">Отменить заказ</a></li>
												<li><a class="" href="#">Повторить заказ</a></li>
											</ul>
										</td>
									</tr>
								</table>
							</div>
						</div>
						<div role="tabpanel" class="tab-pane" id="profile">
							<div class="h2 mt_0 mb_2">Мои настройки</div>
							<form action="">
								<div class="col-xs-12 col-sm-4 text_right_sm">Имя, отчество</div>
								<div class="col-xs-12 col-sm-5">
									<input class="form-control" placeholder="Иван" type="text">
								</div>
								<div class="col-xs-12 col-sm-4 text_right_sm">E-mail</div>
								<div class="col-xs-12 col-sm-5">
									<input class="form-control" placeholder="rose@gmail.com" type="text">
								</div>
								<div class="col-xs-12 col-sm-4 text_right_sm">Телефон *</div>
								<div class="col-xs-12 col-sm-5">
									<input class="form-control" placeholder="123321" type="text">
								</div>
								<div class="col-xs-12 col-sm-4 text_right_sm">Город доставки</div>
								<div class="col-xs-12 col-sm-5">
									<input class="form-control"placeholder="Молодечно" type="text">
								</div>
								<div class="col-xs-12 col-sm-4 text_right_sm">Адрес доставок</div>
								<div class="col-xs-12 col-sm-5">
									<textarea class="form-control" placeholder="Молодечно, ул.Волынца" cols="10" rows="3"></textarea>
								</div>
								<div class="col-xs-12 col-sm-4 text_right_sm">Ваш День рождения</div>
								<div class="col-xs-12 col-sm-5">
									<input class="form-control" placeholder="22.02.2016" type="text">
								</div>
								<div class="col-xs-12 col-sm-4 text_right_sm">Логин</div>
								<div class="col-xs-12 col-sm-5">
									<input class="form-control" placeholder="***" type="text">
								</div>
								<div class="col-xs-12 col-sm-4 text_right_sm">Пароль</div>
								<div class="col-xs-12 col-sm-5">
									<input class="form-control" placeholder="***" type="text">
								</div>
								<div class="clear"></div>
								<div class="text_center mt_2">
									<a href="#" class="btn btn-primary">Изменить</a>
									<a href="#" class="btn btn-primary">Сохранить</a>
								</div>
							</form>
							
							<div class="label_reverse label_brown mt_2">
								<p>Предоставленная информация используется исключительно при обработке
								заказа в Интернет-магазине или для предоставления посетителю доступа к специальной информации.</p>
								<p>Магазин POMASHKI.BY гарантирует, что никакая полученная от Вас информация никогда не будет предоставлена третьим лицам</p>
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