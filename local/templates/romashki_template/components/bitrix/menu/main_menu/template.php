<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<nav class="header_menu menu_collapse collapse" id="collapsMenu">
	<ul class="list_inline lnk_white">
		<?for($i = 0; $i < count($arResult);$i++):?>
		<?if($i == 1):?>
			<li class="active"><a class="lnk_style lnk_brd_bottom" href="<?=$arResult[$i]['LINK']?>"><?=$arResult[$i]['TEXT']?></a></li>
		<?else:?>
			<li><a class="lnk_style lnk_brd_bottom" href="<?=$arResult[$i]['LINK']?>"><?=$arResult[$i]['TEXT']?></a></li>
		<?endif;?>
		<?endfor;?>
	</ul>
</nav>

