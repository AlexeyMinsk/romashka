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
							<?$APPLICATION->IncludeComponent("lat:popular", "", array(
								"IBLOCK_ID" => 1,
								"COUNTER" => 4,
								"COMPONENT_TITLE" => array("Хиты продаж", "Популярные товары")	
							));?>							
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
                                        <a class="_underline" href="javascript:void(0)">Подробнее</a>
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