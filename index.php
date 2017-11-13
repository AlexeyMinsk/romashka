<?
	require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
	$APPLICATION->SetTitle("Главная");
	$APPLICATION->SetPageProperty('bodyClass', $APPLICATION->GetCurPage(true));
	$APPLICATION->SetPageProperty("NOT_SHOW_NAV_CHAIN", "Y");
	$includeArr = array_merge($includeArr, array(//массив возможных включаемых областей
		"/include/card_in_basket.php",
		"/include/in_wish.php"
	));
?>
<div class="owl-carousel main_carousel">
<?
	$carouselArr = array(
		array(
			"IMG" => "/img/sl-1.jpg",
			"HREF" => "#",
			"TEXT" => "Свадебная флористика",
			"HREF_TEXT" => "Подробнее"
		),
		array(
			"IMG" => "/img/sl-1.jpg",
			"HREF" => "#",
			"TEXT" => "Свадебная флористика",
			"HREF_TEXT" => "Подробнее"
		),
		array(
			"IMG" => "/img/sl-1.jpg",
			"HREF" => "#",
			"TEXT" => "Свадебная флористика",
			"HREF_TEXT" => "Подробнее"
		)
	);	
	
	foreach($carouselArr as $item):
?>
    <div class="item">
        <img src="<?=$item['IMG']?>" alt="img">
        <div class="main_carousel__info_wrap">
            <div class="main_carousel__text"><?=$item['TEXT']?></div>
            <a href="<?=$item['HREF']?>" class="btn btn-primary btn-lg"><?=$item['HREF_TEXT']?></a>
		</div>
	</div>
	<?endforeach;?>
</div>
<div class="container-fluid main_label_bg hidden-mid-xs">
    <div class="container">
        <div class="row">
		<?
			$main_label_arr = array(
				"Зачем куда-то ходить? Доставим бесплатно!",
				"Всегда только свежие цветы!",
				"Пришлем фото Вашего букета!"
			);
		?>
			<?foreach($main_label_arr as $text):?>
            <div class="col-xs-12 col-sm-4">
                <div class="main_label">
                    <div class="main_label__pic _1"></div>
                    <div class="main_label__text">
                        <?=$text?>
					</div>
				</div>
			</div>
			<?endforeach;?>
		</div>
	</div>
</div>
<div class="g-wrapper">
    <main>
        <section class="g-main">
            <div class="g-main_i ">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            
                            <div class="h2 text_center _upper title_line_horizontal">
                                <span>Хиты продаж</span>
							</div>
                            
                            
                            <section class="row__inline-blocks mt_3">
								
							<?
								$cardArr = array(
									array(
										"CARD_HREF" => "#",
										"IMG_SRC" => "/img/cat-2.jpg",
										"RAITING" => "/img/raiting.png",
										"CARD_PREW_TITLE" => "Нижнее белье Ночь наступает",
										"CARD_PREW_TEXT" => "Односторонний букет",
										"CARD_PREW_PRICE" => "45 568 450 руб.",
										"CARD_PREW_OLD_PRICE" => "86 454 000 руб.",
										"WISH_TEXT" => "Добавить в избранное",
										"IN_BASKET" => "В корзину"
									),
									array(
										"CARD_HREF" => "#",
										"IMG_SRC" => "/img/cat-5.jpg",
										"RAITING" => "/img/raiting.png",
										"CARD_PREW_TITLE" => "Нижнее белье Ночь наступает",
										"CARD_PREW_TEXT" => "Круглые букеты. Круглые букеты. Круглые букеты",
										"CARD_PREW_PRICE" => "45 568 450 руб.",
										"CARD_PREW_OLD_PRICE" => "86 454 000 руб.",
										"WISH_TEXT" => "Добавить в избранное",
										"IN_BASKET" => "В корзину"
									),
									array(
										"CARD_HREF" => "#",
										"IMG_SRC" => "/img/cat-2.jpg",
										"RAITING" => "/img/raiting.png",
										"CARD_PREW_TITLE" => "Нижнее белье Ночь наступает",
										"CARD_PREW_TEXT" => "Односторонний букет",
										"CARD_PREW_PRICE" => "45 568 450 руб.",
										"CARD_PREW_OLD_PRICE" => "86 454 000 руб.",
										"WISH_TEXT" => "Добавить в избранное",
										"IN_BASKET" => "В корзину"
									),
									array(
										"CARD_HREF" => "#",
										"IMG_SRC" => "/img/cat-5.jpg",
										"RAITING" => "/img/raiting.png",
										"CARD_PREW_TITLE" => "Нижнее белье Ночь наступает",
										"CARD_PREW_TEXT" => "Круглые букеты. Круглые букеты. Круглые букеты",
										"CARD_PREW_PRICE" => "45 568 450 руб.",
										"CARD_PREW_OLD_PRICE" => "86 454 000 руб.",
										"WISH_TEXT" => "Добавить в избранное",
										"IN_BASKET" => "В корзину"
									),
									array(
										"CARD_HREF" => "#",
										"IMG_SRC" => "/img/cat-5.jpg",
										"RAITING" => "/img/raiting.png",
										"CARD_PREW_TITLE" => "Нижнее белье Ночь наступает",
										"CARD_PREW_TEXT" => "Круглые букеты. Круглые букеты. Круглые букеты",
										"CARD_PREW_PRICE" => "45 568 450 руб.",
										"CARD_PREW_OLD_PRICE" => "86 454 000 руб.",
										"WISH_TEXT" => "Добавить в избранное",
										"IN_BASKET" => "В корзину"
									),
									array(
										"CARD_HREF" => "#",
										"IMG_SRC" => "/img/cat-3.jpg",
										"RAITING" => "/img/raiting.png",
										"CARD_PREW_TITLE" => "Нижнее белье Ночь наступает",
										"CARD_PREW_TEXT" => "Нижнее белье Ночь наступает",
										"CARD_PREW_PRICE" => "45 568 450 руб.",
										"CARD_PREW_OLD_PRICE" => "86 454 000 руб.",
										"WISH_TEXT" => "Добавить в избранное",
										"IN_BASKET" => "В корзину"
									),
									array(
										"CARD_HREF" => "#",
										"IMG_SRC" => "/img/cat-2.jpg",
										"RAITING" => "/img/raiting.png",
										"CARD_PREW_TITLE" => "Нижнее белье Ночь наступает",
										"CARD_PREW_TEXT" => "Односторонний букет",
										"CARD_PREW_PRICE" => "45 568 450 руб.",
										"CARD_PREW_OLD_PRICE" => "86 454 000 руб.",
										"WISH_TEXT" => "Добавить в избранное",
										"IN_BASKET" => "В корзину"
									),
									array(
										"CARD_HREF" => "#",
										"IMG_SRC" => "/img/cat-5.jpg",
										"RAITING" => "/img/raiting.png",
										"CARD_PREW_TITLE" => "Нижнее белье Ночь наступает",
										"CARD_PREW_TEXT" => "Круглые букеты. Круглые букеты. Круглые букеты",
										"CARD_PREW_PRICE" => "45 568 450 руб.",
										"CARD_PREW_OLD_PRICE" => "86 454 000 руб.",
										"WISH_TEXT" => "Добавить в избранное",
										"IN_BASKET" => "В корзину"
									)
								);	
							?>
							
							<?for($i = 0; $i < count($cardArr); $i++):
							if($i == 4):?>
                                <div class="h2 text_center _upper title_line_horizontal mb_3">
                                    <span>Популярные товары</span>
								</div>
							<?endif?>	

								<div class="col-xs-12 col-mid-xs-6 col-sm-4 col-md-3 ">
									<div class="card_preview">
										<div class="card_preview__wrap_hidden">
											<a class="card_preview__lnk_pic" href="<?=$cardArr[$i]["CARD_HREF"]?>">
												<img class="card_preview__pic" src="<?=$cardArr[$i]["IMG_SRC"]?>" title="img" alt="img"/>
											</a>
											<div class="card_preview__info">
												<div class="raiting text_center">
													<img src="<?=$cardArr[$i]["RAITING"]?>" alt="img">
												</div>
												<div class="card_preview__prod_name">
													<a class="card_preview__lnk lnk_brd" href="#" title="<?=$cardArr[$i]["CARD_PREW_TITLE"]?>"><?=$cardArr[$i]["CARD_PREW_TEXT"]?></a>
												</div>
												<div class="card_preview__price">
													<?=$cardArr[$i]["CARD_PREW_PRICE"]?>
													<span class="card_preview__price_old"><?=$cardArr[$i]["CARD_PREW_OLD_PRICE"]?></span>
												</div>
												<a href="#in_wish" class="wish open-popup-inline" data-effect="mfp-zoom-in"><i class="icon i_star"></i><?=$cardArr[$i]["WISH_TEXT"]?></a>
											</div>
											<a class="btn btn-primary full_width _upper open-popup-inline" data-effect="mfp-zoom-in" href="#card_in_basket"><?=$cardArr[$i]["IN_BASKET"]?></a>
										</div>
									</div>
								</div>
							<?endfor?>
							</section>
						</div>
					</div>
				</div>
                <div class="container-fluid bg_about">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 main_about">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-4">
                                        <img class="img-responsive img_about"  src="/img/about.jpg" alt="img">
									</div>
                                    <div class="col-xs-12 col-sm-8">
                                        <div class=" h3 mt_0">
                                            О магазине цветов Romashki.by
										</div>
                                        <p>Заказывайте доставку цветов в Молодечно. На нашем сайте Вы можете заказать цветы с доставкой в Молодечно. В каталоге Вы найдете букет на любой вкус и случай жизни. И не важно какое сейчас время года. Ведь любовь, ласка и доброта это те чувства, которые всегда помогают преодолеть любые преграды, будь то длительная командировка или разлука. Мы занимаем лидирующую позицию в доставке цветов по Молодечно и уже более 30 довольных получателей радуются нашим</p>
                                        <a class="_underline" href="#">Подробнее</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</main>
</div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>