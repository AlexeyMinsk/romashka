<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

if($ITEM_INDEX == 0){
	$sChainProlog = '<div class="container"><div class="row">';
	$sChainBody = '<ol class="breadcrumb mb_0">';
}
if($ITEM_INDEX+1 == $ITEM_COUNT){
	$sChainEpilog = '</div></div>';
	$sChainBody .= '<li class="active"><a href="'.$LINK.'">'.$TITLE.'</a></li></ol>';
}else
	$sChainBody .= '<li><a href="'.$LINK.'">'.$TITLE.'</a></li>';
?>
