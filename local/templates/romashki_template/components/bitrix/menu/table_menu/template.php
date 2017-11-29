<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<div class="bg_menu container-fluid">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<nav class="menu_table pushy pushy-left">
					<ul class="menu_table__list">
						<?for($i = 0; $i < count($arResult); $i++):?>
						
						<li class="menu_table__item">
							<a href="<?=$arResult[$i]['LINK']?>"><?=$arResult[$i]['TEXT']?></a>
							<?if($arResult[$i]['IS_PARENT']):
								$i++;
							$depth = $arResult[$i]['DEPTH_LEVEL'];?>
							<ul class="menu_table__list-2">
								
								<?while($depth == $arResult[$i]['DEPTH_LEVEL']):?>
								
								<li class="menu_table__item-2">
									<a href="<?=$arResult[$i]['LINK']?>">
										<?=$arResult[$i]['TEXT']?>
									</a>
									<?if($arResult[$i]['IS_PARENT']):
									$i++;	
									$depth = $arResult[$i]['DEPTH_LEVEL'];?>
									<ul class="menu_table__list-3">
										
										<?while($depth == $arResult[$i]['DEPTH_LEVEL']):?>
										
										<li class="menu_table__item-3"><a href="<?=$arResult[$i]['LINK']?>">
										<?=$arResult[$i]['TEXT']?></a>
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
					</nav>
					<div class="site-overlay"></div>
				</div>
			</div>
		</div>
	</div>   																																				