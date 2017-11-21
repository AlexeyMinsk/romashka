<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<nav class="aside_menu-2">
	<ul class="aside_menu-2__list">
		<?foreach($arResult["MENU"] as $parentList):?>
		<li class="<?//='active'?>">
			<a href="<?=$parentList['DETAIL_URL']?>"><?=$parentList['NAME']?>
				<?if(count($parentList['CHILD'])):?>
				<i class="arr_submenu-2 icon_menu__caret"></i>
				<?endif?>
			</a>
			<ul class="aside_menu-2__list-2">
				<?foreach($parentList['CHILD'] as $firstChild):?>
				<li><a href="#"><?=$firstChild['NAME']?>
					<?if(count($firstChild['CHILD'])):?>
						<i class="icon_menu__caret"></i>
					</a>
				<ul class="aside_menu-2__list-3">
					<?foreach($firstChild['CHILD'] as $child):?>
					<li>
						<a href="#"><?=$child['NAME']?></a>
					</li>
					<?endforeach?>
				</ul>
				<?else:?>
				</a>
				<?endif?>
				</li>
				<?endforeach?>
			</ul>
		</li>
		<?endforeach?>
	</ul>
</nav>