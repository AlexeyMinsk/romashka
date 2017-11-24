<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<div class="card_carousel owl-carousel">
	<div class="item"><div class="spritespin"></div></div>
	<?foreach($arParams['IMG_LIST'] as $src):?>
		<div class="item"><img src=<?=$src?> alt="img"></div>
	<?endforeach;?>
</div>	
<div class="dotsContentCard ">
	<div class="btn_secondary _rotate">
		<img src=<?=$arParams["IMG_MIN_ROTATE_SRC"]?> alt="img">
	</div>
	<?foreach($arParams['IMG_LIST_MIN']  as $src):?>
	<div class="btn_secondary">
		<img src=<?=$src?> alt="img">
	</div>
	<?endforeach;?>	
</div>
