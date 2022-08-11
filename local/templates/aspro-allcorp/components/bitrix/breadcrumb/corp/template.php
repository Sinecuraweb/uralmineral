<?
if( !defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true ) die();

if( empty( $arResult ) )
	return "";

$arItemLast = array();	
foreach($arResult as $index => $arItem){
	if($index && $arItem["LINK"] == $arItemLast["LINK"]){
		unset($arResult[$index]);
	}
	else{
		$arItemLast = $arItem;
	}
}

$strReturn = '<ul class="breadcrumb">';
foreach($arResult as $arItem){
	$title = htmlspecialcharsex($arItem["TITLE"]);
	if( $arItem["LINK"] <> "" && $arItem['LINK'] != GetPagePath() && $arItem['LINK']."index.php" != GetPagePath())
		$strReturn .= '<li><a href="'.$arItem["LINK"].'" title="'.$title.'">'.$title.'</a></li>';
	else{
		$strReturn .= '<li class="active">'.$title.'</li>';
		break;
	}
}

$strReturn .= '</ul>';
return $strReturn;
?>