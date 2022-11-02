<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);

//debug($arResult);
?>
<?=$arResult['ID']?>
<img src="<?=$arResult['DETAIL_PICTURE']['SRC']?>" class="img-responsive" alt="">
<h1><?=$arResult['NAME']?></h1>
<p><?=$arResult['DETAIL_TEXT']?></p>

<div class="artical-links">
    <ul>
        <li><small> </small><span><?=$arResult['ACTIVE_FROM']?></span></li>
        <li><a href="#"><small class="admin"> </small><span><?=$arResult['PROPERTIES']['AUTHOR']['VALUE']?></span></a></li>
        <li><a href="#"><small class="no"> </small><span>No comments</span></a></li>
        <li><a href="#"><small class="posts"> </small><span>Просмотры: <?=$arResult['SHOW_COUNTER'] ? $arItem['SHOW_COUNTER'] : 0?></span></a></li>
        <li><a href="#"><small class="link"> </small><span>permalink</span></a></li>
    </ul>
</div>

