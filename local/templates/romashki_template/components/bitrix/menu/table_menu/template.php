<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<div class="bg_menu container-fluid">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<nav class="menu_table pushy pushy-left">
					<ul class="menu_table__list">
						<?foreach($arResult as $parentList):?>
						<li class="menu_table__item">
							<a href="<?=$parentList['LINK']?>"><?=str_replace(" ", "<br>", $parentList['TEXT']);?></a>
							<ul class="menu_table__list-2">
							
							<?foreach($parentList['ADDITIONAL_LINKS'] as $childKey => $firstChild):?>
							<li class="menu_table__item-2"><a href="<?=$firstChild['href']?>"><?=$childKey?>
									<?if(is_array($firstChild)):?>
								</a>
								<ul class="menu_table__list-3">
									<?foreach($firstChild as $key => $child):?>
									<?if($key !== "href"):?>
									<li class="menu_table__item-2">
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
			<div class="site-overlay"></div>
		</div>
	</div>
</div>
</div>   	