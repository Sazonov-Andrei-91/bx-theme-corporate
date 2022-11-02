<?php
//debug($arResult);
foreach($arResult['ITEMS'] as &$item){
    $item['PREVIEW_TEXT'] = mb_strimwidth($item['PREVIEW_TEXT'], 0, 45, '...');
}
unset($item);