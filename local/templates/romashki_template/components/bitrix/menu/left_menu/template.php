<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<nav class="aside_menu-2">
	<ul class="aside_menu-2__list">
		<?for($i = 0; $i < count($arResult); $i++):?>
		<li>
			<a href="<?=$arResult[$i]['LINK']?>"><?=$arResult[$i]['TEXT']?>
				<?if($arResult[$i]['IS_PARENT']):?>
				<i class="arr_submenu-2 icon_menu__caret"></i>
				<?endif?>
			</a>
			<?if($arResult[$i]['IS_PARENT']):
			$i++;	
			$depth = $arResult[$i]['DEPTH_LEVEL'];?>
			<ul class="aside_menu-2__list-2">
				
				<?while($depth == $arResult[$i]['DEPTH_LEVEL']):?>

					<li><a href="<?=$arResult[$i]['LINK']?>">
							<?=$arResult[$i]['TEXT']?>
							<?if($arResult[$i]['IS_PARENT']):?>
							<i class="arr_submenu-2 icon_menu__caret"></i>
							<?endif?>
						</a>
						<?if($arResult[$i]['IS_PARENT']):
							$i++;
							$depth = $arResult[$i]['DEPTH_LEVEL'];?>
							<ul class="aside_menu-2__list-3">	
								<?while($depth == $arResult[$i]['DEPTH_LEVEL']):?>

									<li><a href="<?=$arResult[$i]['LINK']?>">
										<?=$arResult[$i]['TEXT']?>
										<?if($arResult[$i]['IS_PARENT']):?>
											<i class="arr_submenu-2 icon_menu__caret"></i>
										<?endif?>
									</a>
									</li>
									<?$i++;?>
								<?endwhile;?>
							</ul>
							<?$i--;?>
						<?endif;?>
					</li>
					<?$i++;?>
				<?endwhile;?>
			</ul>
			<?$i--;?>
			<?endif;?>
		</li>
		<?endfor;?>
	</ul>
</nav>