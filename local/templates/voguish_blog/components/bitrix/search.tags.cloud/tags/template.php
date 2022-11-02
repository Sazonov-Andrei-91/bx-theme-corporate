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

if($arParams["SHOW_CHAIN"] != "N" && !empty($arResult["TAGS_CHAIN"])):
?>


    <!--    <div class="b-tag-weight">-->
    <!--        <h3>Tags Weight</h3>-->
    <!--        <ul>-->
    <!--            <li><a href="#">Lorem</a></li>-->
    <!--            <li><a href="#">consectetur</a></li>-->
    <!--            <li><a href="#">dolore</a></li>-->
    <!--            <li><a href="#">aliqua</a></li>-->
    <!--            <li><a href="#">sit amet</a></li>-->
    <!--            <li><a href="#">ipsum</a></li>-->
    <!--            <li><a href="#">Lorem</a></li>-->
    <!--            <li><a href="#">consectetur</a></li>-->
    <!--            <li><a href="#">dolore</a></li>-->
    <!--            <li><a href="#">aliqua</a></li>-->
    <!--            <li><a href="#">sit amet</a></li>-->
    <!--            <li><a href="#">ipsum</a></li>-->
    <!--        </ul>-->
    <!--    </div>-->



<noindex>
    <div class="b-tag-weight">
        <h3>Tags Weight</h3>
        <ul><?
            foreach ($arResult["TAGS_CHAIN"] as $tags):
                ?><li><a href="<?=$tags["TAG_PATH"]?>" rel="nofollow"><?=$tags["TAG_NAME"]?></a></li> <?
                ?><li>[<a href="<?=$tags["TAG_WITHOUT"]?>" rel="nofollow">x</a>]</li><?
            endforeach;?>
        </ul>
	</div>
</noindex>
<?
endif;

if(is_array($arResult["SEARCH"]) && !empty($arResult["SEARCH"])):
?>
<noindex>
    <div class="b-tag-weight">
        <h3>Tags Weight</h3>
        <ul><?
		foreach ($arResult["SEARCH"] as $key => $res)
		{
		?><li><a href="<?=$res["URL"]?>" rel="nofollow"><?=$res["NAME"]?></a></li><?
		}
	?></ul>
    </div>
</noindex>
<?
endif;
?>