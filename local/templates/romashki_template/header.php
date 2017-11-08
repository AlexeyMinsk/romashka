<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
	IncludeTemplateLangFile(__FILE__);
	//CJSCore::Init(array("fx"));
	//$curPage = $APPLICATION->GetCurPage(true);
	//$theme = COption::GetOptionString("main", "romashki_template", "yelow", SITE_ID);
?>
<!DOCTYPE html>
<html lang="ru-RU">
	<head>
		<?
			$APPLICATION->ShowHead();
			$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/app.min.css", true);
		?>
		<title><?$APPLICATION->ShowTitle()?></title>
		<meta name="format-detection" content="telephone=no">
		<meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE">
		<!--<meta name="viewport" content="width=device-width, initial-scale=1">-->
	</head>
	<body class="<?$APPLICATION->ShowProperty('bodyClass');?>" id="_pr">
		<div id="panel"><?$APPLICATION->ShowPanel();?></div>
		<?$APPLICATION->ShowProperty('uniqueDataHeader');?>
		
		<header class="container-fluid header_3">
			<div class="header_content">
				<div class="header_top">
				    <div class="container">
						<div class="row">
							<?$APPLICATION->IncludeComponent("bitrix:menu", "main_menu", array(
								"ROOT_MENU_TYPE" => "top", 
								"MAX_LEVEL" => "1"
								), false);?>
							<div class="col-xs-12 col-mid-xs-12 col-sm-4 col-md-4 header_phone text-center">
								<?$APPLICATION->IncludeComponent("bitrix:main.include", "", array(
									"AREA_FILE_SHOW" => "file",
									"PATH" => SITE_DIR."include/company_tel.php")
									,false
								);?>
							</div>
							<div class="col-xs-12 col-sm-3 col-mid-xs-12 col-md-3 text-right mid-xs_text_center">
								<a class="Lora-BoldItalic open-popup-inline" data-effect="mfp-zoom-in" href="#popup-enter">Войти</a> /
								<a class="Lora-BoldItalic open-popup-inline" data-effect="mfp-zoom-in" href="#popup-registration">Регистрация</a>
							</div>
						</div>
					</div>
					
				</div>
				<div class="row">
					<div class="container">
						<div class="row">
							<div class="row__inline-blocks">
								<?$APPLICATION->IncludeComponent("bitrix:main.include", "", array(
									"AREA_FILE_SHOW" => "file",
									"PATH" => SITE_DIR."include/company_logo.php")
									,false
								);?>
								<div class="col-xs-12 col-sm-6 col-md-4">
									<div class="header_search mb_1 ">
										<form action="/" method="get">
											<input class="header_search__input" type="text" placeholder="Поиск по сайту" name="q" maxlength="50">
											<span class="header_search__submit icon icon-search">
												<input class="btn-search" name="btn-search" type="submit" value="">
											</span>
										</form>
									</div>
								</div>
								<div class="col-xs-6 col-mid-xs-6 col-sm-6 col-md-2 text_right text_center__sm">
									<a href="#" class="wish"><i class="icon i_star"></i>Избранное <span>(4)</span></a>
								</div>
								<div class="col-xs-6 col-mid-xs-6 text_center__sm  col-sm-6 col-md-3">
									<div class="basket">
										<span class="basket_icon active"></span>
										<div class="basket_text">
											<a class="basket__lnk lnk_brd" href="<?=SITE_DIR."basket/basket.php"?>">Ваша корзина <span class="">(5)</span></a>
											<div class="basket_sum"><strong>25 145 560</strong> руб.</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>        
				<?$APPLICATION->IncludeComponent("bitrix:menu", "table_menu", array(), false);?>
			</div>
		</header>
	<?$APPLICATION->ShowNavChain();?>		