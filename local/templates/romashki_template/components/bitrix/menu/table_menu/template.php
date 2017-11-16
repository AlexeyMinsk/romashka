<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<div class="bg_menu container-fluid">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<nav class="menu_table pushy pushy-left">
					<ul class="menu_table__list">
						
						<?foreach($arResult["MENU"] as $parentLevel):?>
						<li class="menu_table__item">
							<a href="<?=$parentLevel['SECTION_PAGE_URL']?>"><?=$parentLevel["NAME"]?></a>
							<ul class="menu_table__list-2">
								<?foreach($parentLevel['CHILD'] as $level2):?>
								<li class="menu_table__item-2">
									<a href="<?=$level2["DETAIL_PAGE_URL"]?>"><?=$level2["NAME"]?></a>
									<?if(count($level2['CHILD'])):?>
									<li class="menu_table__item-2"><a href="javascript:void(0)"><??></a>
										<ul class="menu_table__list-3">
											<?foreach($level2['CHILD'] as $level3):?>
											<li class="menu_table__item-2"><a href="javascript:void(0)"><??></a></li>
											<?endforeach;?>
										</ul>
									</li>
									<?endif;?>
								</li>
								<?endforeach;?>	
							</ul>
						</li>
						<?endforeach;?>
					</ul>
				</nav>
				<div class="site-overlay"></div>
			</div>
		</div>
	</div>
</div>   																	