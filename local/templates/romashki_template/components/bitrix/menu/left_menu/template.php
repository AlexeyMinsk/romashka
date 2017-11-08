<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<nav class="aside_menu-2">
	<ul class="aside_menu-2__list">
		<?foreach($arResult as $parentList):?>
		<li class="<?//='active'?>">
			<a href="<?=$parentList['LINK']?>"><?=$parentList['TEXT']?>
				<?if(count($parentList['ADDITIONAL_LINKS'])):?>
				<i class="arr_submenu-2 icon_menu__caret"></i>
				<?endif?>
			</a>
			<ul class="aside_menu-2__list-2">
				<?foreach($parentList['ADDITIONAL_LINKS'] as $childKey => $firstChild):?>
				<li><a href="<?=$firstChild['href']?>"><?=$childKey?>
					<?if(is_array($firstChild)):?>
						<i class="icon_menu__caret"></i>
					</a>
				<ul class="aside_menu-2__list-3">
					<?foreach($firstChild as $key => $child):?>
					<?if($key !== "href"):?>
					<li>
						<a href="<?=$child?>"><?=$key?></a>
					</li>
					<?endif?>
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