<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<div class="bg_menu container-fluid">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<nav class="menu_table pushy pushy-left">
					<ul class="menu_table__list">
						<?foreach($arResult["MENU"] as $parentLevel):?>
						<li class="menu_table__item">
							<a href="<?=$parentLevel['SECTION_PAGE_URL']?>"><?=$parentLevel['NAME']?></a>
							<?if(count($parentLevel['CHILD'])):?>
							<ul class="menu_table__list-2">
								<?foreach($parentLevel['CHILD'] as $level2):?>
								<li class="menu_table__item-2"><a href="<?=$parentLevel['NAME']?>">
								<?=$level2['NAME']?></a>
								<?if(count($level2['CHILD'])):?>
									<ul class="menu_table__list-3">
										<?foreach($level2['CHILD'] as $level3):?>
										<li class="menu_table__item-2"><a href="#"><?=$level3['NAME']?></a></li>
										<?endforeach;?>
									</ul>
									<?endif;?>
								<?endforeach;?>
							</ul>
							<?endif;?>
							</li>
						</li>
						<?endforeach;?>
					</ul>
				</nav>
				<div class="site-overlay"></div>
			</div>
		</div>
	</div>
</div>   																	