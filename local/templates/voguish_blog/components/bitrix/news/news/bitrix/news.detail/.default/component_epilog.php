<div class="respon">
    <h2>Responses so far</h2>

<?php $APPLICATION->IncludeComponent("bitrix:catalog.comments", "comments", Array(
        "AJAX_POST" => "Y",
	"BLOG_USE" => "Y",	// Использовать комментарии
		"CACHE_TIME" => "0",	// Время кеширования (сек.)
		"CACHE_TYPE" => "A",	// Тип кеширования
		"CHECK_DATES" => "Y",	// Показывать коментарии только для активных на данный момент элементов
		"COMMENTS_COUNT" => "5",	// Количество показываемых комментариев
		"ELEMENT_CODE" => "",	// Код товара
		"ELEMENT_ID" => $arResult["ID"],	// Идентификатор товара
		"FB_USE" => "N",	// Использовать Facebook
		"IBLOCK_ID" => "3",	// Идентификатор инфоблока
		"IBLOCK_TYPE" => "content",	// Тип инфоблока
		"SHOW_DEACTIVATED" => "Y",	// Показывать комментарии к деактивированным товарам
		"TEMPLATE_THEME" => "blue",	// Цветовая тема
		"URL_TO_COMMENT" => "",	// Путь к комментируемому товару
		"VK_USE" => "N",	// Использовать Вконтакте
		"WIDTH" => "",	// Ширина
		"COMPONENT_TEMPLATE" => ".default",
		"BLOG_TITLE" => "",	// Надпись на вкладке
		"BLOG_URL" => "news",	// Название блога латинскими буквами
		"PATH_TO_SMILE" => "/bitrix/images/blog/smile/",	// Путь к улыбкам
		"EMAIL_NOTIFY" => "N",	// Уведомление по электронной почте
		"SHOW_SPAM" => "Y",	// Показывать администраторам ссылку на все комментарии пользователя
		"SHOW_RATING" => "N",	// Включить рейтинг
		"VK_TITLE" => "Вконтакте",
		"VK_API_ID" => "API_ID"
	),
	false
);?>

</div>
