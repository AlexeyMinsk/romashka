<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?
	$pathToIdexPage = SITE_DIR;
	
	if(
		$_SERVER['SCRIPT_NAME'] == "/index.php"
		|| $_SERVER['SCRIPT_NAME'] == "/index.html"
		|| $_SERVER['SCRIPT_NAME'] == "/index.htm"
	){
		$pathToIdexPage = "javascript:void(0)";
	}
?>
<div class="col-xs-12 col-sm-6 col-md-3">
    <div class="logo mid-xs_text_center mb_1 ">
        <a href="<?=$pathToIdexPage?>">
			<img class="img-responsive logo_img" src="/img/logo.png" alt="romashki.by">
            Romashki<span class="logo_postfix">by</span>
        </a>
    </div>
</div>