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





<!--    --><?php //foreach($arResult["ITEMS"] as $arItem):?>
<!--	--><?php //
//	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
//	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
//	?>
<!--	<p class="news-item" id="--><?php //=$this->GetEditAreaId($arItem['ID']);?><!--">-->
<!--		--><?php //if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arItem["PREVIEW_PICTURE"])):?>
<!--			--><?php //if(!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])):?>
<!--				<a href="--><?php //=$arItem["DETAIL_PAGE_URL"]?><!--"><img-->
<!--						class="preview_picture"-->
<!--						border="0"-->
<!--						src="--><?php //=$arItem["PREVIEW_PICTURE"]["SRC"]?><!--"-->
<!--						width="--><?php //=$arItem["PREVIEW_PICTURE"]["WIDTH"]?><!--"-->
<!--						height="--><?php //=$arItem["PREVIEW_PICTURE"]["HEIGHT"]?><!--"-->
<!--						alt="--><?php //=$arItem["PREVIEW_PICTURE"]["ALT"]?><!--"-->
<!--						title="--><?php //=$arItem["PREVIEW_PICTURE"]["TITLE"]?><!--"-->
<!--						style="float:left"-->
<!--						/></a>-->
<!--			--><?php //else:?>
<!--				<img-->
<!--					class="preview_picture"-->
<!--					border="0"-->
<!--					src="--><?php //=$arItem["PREVIEW_PICTURE"]["SRC"]?><!--"-->
<!--					width="--><?php //=$arItem["PREVIEW_PICTURE"]["WIDTH"]?><!--"-->
<!--					height="--><?php //=$arItem["PREVIEW_PICTURE"]["HEIGHT"]?><!--"-->
<!--					alt="--><?php //=$arItem["PREVIEW_PICTURE"]["ALT"]?><!--"-->
<!--					title="--><?php //=$arItem["PREVIEW_PICTURE"]["TITLE"]?><!--"-->
<!--					style="float:left"-->
<!--					/>-->
<!--			--><?php //endif;?>
<!--		--><?php //endif?>
<!--		--><?php //if($arParams["DISPLAY_DATE"]!="N" && $arItem["DISPLAY_ACTIVE_FROM"]):?>
<!--			<span class="news-date-time">--><?php //echo $arItem["DISPLAY_ACTIVE_FROM"]?><!--</span>-->
<!--		--><?php //endif?>
<!--		--><?php //if($arParams["DISPLAY_NAME"]!="N" && $arItem["NAME"]):?>
<!--			--><?php //if(!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])):?>
<!--				<a href="--><?php //echo $arItem["DETAIL_PAGE_URL"]?><!--"><b>--><?php //echo $arItem["NAME"]?><!--</b></a><br />-->
<!--			--><?php //else:?>
<!--				<b>--><?php //echo $arItem["NAME"]?><!--</b><br />-->
<!--			--><?php //endif;?>
<!--		--><?php //endif;?>
<!--		--><?php //if($arParams["DISPLAY_PREVIEW_TEXT"]!="N" && $arItem["PREVIEW_TEXT"]):?>
<!--			--><?php //echo $arItem["PREVIEW_TEXT"];?>
<!--		--><?php //endif;?>
<!--		--><?php //if($arParams["DISPLAY_PICTURE"]!="N" && is_array($arItem["PREVIEW_PICTURE"])):?>
<!--			<div style="clear:both"></div>-->
<!--		--><?php //endif?>
<!--		--><?php //foreach($arItem["FIELDS"] as $code=>$value):?>
<!--			<small>-->
<!--			--><?php //=GetMessage("IBLOCK_FIELD_".$code)?><!--:&nbsp;--><?php //=$value;?>
<!--			</small><br />-->
<!--		--><?php //endforeach;?>
<!--		--><?php //foreach($arItem["DISPLAY_PROPERTIES"] as $pid=>$arProperty):?>
<!--			<small>-->
<!--			--><?php //=$arProperty["NAME"]?><!--:&nbsp;-->
<!--			--><?php //if(is_array($arProperty["DISPLAY_VALUE"])):?>
<!--				--><?php //=implode("&nbsp;/&nbsp;", $arProperty["DISPLAY_VALUE"]);?>
<!--			--><?php //else:?>
<!--				--><?php //=$arProperty["DISPLAY_VALUE"];?>
<!--			--><?php //endif?>
<!--			</small><br />-->
<!--		--><?php //endforeach;?>
<!--	</p>-->
<!--    --><?php //endforeach;?>
    <?php if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
	<br /><?=$arResult["NAV_STRING"]?>
    <?php endif;?>
</div>
