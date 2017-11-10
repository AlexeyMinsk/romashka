<?
	require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
	$APPLICATION->SetTitle("Страница не найдена");
	$APPLICATION->SetPageProperty("NOT_SHOW_NAV_CHAIN", "Y");
	$includeArr = array_merge($includeArr, array(//массив возможных включаемых областей
		"/include/card_in_basket.php",
		"/include/in_wish.php",
		"/include/popup-rduction.php"
	));
?>
<div class="g-wrapper">
    <main>
        <section class="g-main">
            <div class="g-main_i ">
				<div class="container">
					<div class="row ">
						<div class="section_center mt_8">
							<div class="logo text_center mb_6 ">
								<a href="#">
									<img class="img-responsive logo_img" src="/img/logo.png" alt="romashki.by">
									Romashki<span class="logo_postfix">by</span>
								</a>
							</div>
							<div class="title_404">
								<img src="/img/404.jpg" alt="img">
							</div>
							<div class="text_404 text_center">
								Документ не найден 404. <br>
								Извининте, но запрашиваемая вами страница недоступна. <br>
								Проверьте правильность адреса, возможно вы ввели неправильные символы.
							</div>
						</div>
						
						
						
					</div>
				</div>
			</div>
		</section>
	</main>
</div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>