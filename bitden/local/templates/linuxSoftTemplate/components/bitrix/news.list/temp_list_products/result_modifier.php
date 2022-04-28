<?php
foreach($arResult["ITEMS"] as &$arItem) {
    $arItem['LOGOTYPE_SRC'] = CFile::GetFileArray($arItem["PROPERTIES"]["LOGOTYPE"]["VALUE"])['SRC'];
}
