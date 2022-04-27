<?php if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
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
//debug($arResult["ITEMS"]);
?>
<div class="news-list">
    <?php if($arParams["DISPLAY_TOP_PAGER"]):?>
        <?=$arResult["NAV_STRING"]?><br />
    <?php endif;?>

    <?php foreach($arResult["ITEMS"] as $arItem):?>

        <div class="post_box">
            <h2><a href="<?=$arItem["DETAIL_PAGE_URL"]?>"><?= $arItem["NAME"]?></a></h2>
            <div class="news_meta">
                Posted on <a href="<?=$arItem["DETAIL_PAGE_URL"]?>"><?=$arItem["PROPERTIES"]['AUTHOR']['VALUE']?></a>,
                <?= $arItem["DATE_CREATE"]?>
                <p>
                    Tags:
                    <?php foreach(explode(',', $arItem["TAGS"]) as $tag):?>
                        <a href="#"><?= $tag ?></a>,
                    <?php endforeach;?>
                </p>
            </div>
            <div class="image_wrapper">
                <a href="<?=$arItem["DETAIL_PAGE_URL"]?>" target="_parent">
                    <img
                            class="preview_picture"
                            border="0"
                            src="<?= $arItem["PREVIEW_PICTURE"]["SRC"]?>"
                            width="<?= $arItem["PREVIEW_PICTURE"]["WIDTH"]?>"
                            height="<?= $arItem["PREVIEW_PICTURE"]["HEIGHT"]?>"
                            alt="<?= $arItem["PREVIEW_PICTURE"]["ALT"]?>"
                            title="<?= $arItem["PREVIEW_PICTURE"]["TITLE"]?>"
                            style="float:left"
                    />
                </a>
            </div>
            <p align="justify">
                <?=$arItem["PREVIEW_TEXT"]?>
                <a href="<?=$arItem["DETAIL_PAGE_URL"]?>" class="continue">Continue ...</a>
            </p>
            <div class="cleaner"></div>
            <div class="news_meta">
                <p>
                    Show count: <?=$arItem["SHOW_COUNTER"] ? : 0?>
                </p>
            </div>
        </div>
    <?php endforeach;?>

    <?php if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
        <br /><?=$arResult["NAV_STRING"]?>
    <?php endif;?>
</div>
