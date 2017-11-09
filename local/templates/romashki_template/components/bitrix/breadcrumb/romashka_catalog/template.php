<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?php
	
	//$GLOBALS['APPLICATION']->RestartBuffer();
	//echo "<pre>".print_r($arResult[0], true)."</pre>";
	//die();
	
?>
<?
	$count = count($arResult);
?>
<div class="col-xs-12">
	<ol class="breadcrumb mb_0">
		<?for($i = 0; $i < $count; $i++):?>
		<li class="<?if($i+1 == $count) echo "active";?>"><a href="<?=$arResult[$i]["LINK"]?>">
		<?=$arResult[$i]["TITLE"]?></a></li>	
		<?endfor?>
	</ol>
</div>