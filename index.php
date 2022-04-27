<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
//$APPLICATION->SetPageProperty("title", "Демонстрационная версия продукта «1С-Битрикс: Управление сайтом»");
//$APPLICATION->SetPageProperty("NOT_SHOW_NAV_CHAIN", "Y");
$APPLICATION->SetTitle("Наша основная страница и первая и тралялял");
?>

<div>
    <?$APPLICATION->IncludeComponent("bitrix:news.list", "list_posts", Array(
	"ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
		"ADD_SECTIONS_CHAIN" => "N",	// Включать раздел в цепочку навигации
		"AJAX_MODE" => "N",	// Включить режим AJAX
		"AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
		"AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
		"AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
		"AJAX_OPTION_STYLE" => "Y",	// Включить подгрузку стилей
		"CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
		"CACHE_GROUPS" => "Y",	// Учитывать права доступа
		"CACHE_TIME" => "36000000",	// Время кеширования (сек.)
		"CACHE_TYPE" => "A",	// Тип кеширования
		"CHECK_DATES" => "Y",	// Показывать только активные на данный момент элементы
		"DETAIL_URL" => "",	// URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
		"DISPLAY_BOTTOM_PAGER" => "Y",	// Выводить под списком
		"DISPLAY_DATE" => "Y",	// Выводить дату элемента
		"DISPLAY_NAME" => "Y",	// Выводить название элемента
		"DISPLAY_PICTURE" => "Y",	// Выводить изображение для анонса
		"DISPLAY_PREVIEW_TEXT" => "Y",	// Выводить текст анонса
		"DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
		"FIELD_CODE" => array(	// Поля
			0 => "TAGS",
			1 => "DETAIL_PICTURE",
			2 => "SHOW_COUNTER",
			3 => "DATE_CREATE",
			4 => "",
		),
		"FILTER_NAME" => "",	// Фильтр
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",	// Скрывать ссылку, если нет детального описания
		"IBLOCK_ID" => "12",	// Код информационного блока
		"IBLOCK_TYPE" => "BlogId",	// Тип информационного блока (используется только для проверки)
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",	// Включать инфоблок в цепочку навигации
		"INCLUDE_SUBSECTIONS" => "Y",	// Показывать элементы подразделов раздела
		"MESSAGE_404" => "",	// Сообщение для показа (по умолчанию из компонента)
		"NEWS_COUNT" => "3",	// Количество новостей на странице
		"PAGER_BASE_LINK_ENABLE" => "N",	// Включить обработку ссылок
		"PAGER_DESC_NUMBERING" => "N",	// Использовать обратную навигацию
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// Время кеширования страниц для обратной навигации
		"PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
		"PAGER_SHOW_ALWAYS" => "N",	// Выводить всегда
		"PAGER_TEMPLATE" => ".default",	// Шаблон постраничной навигации
		"PAGER_TITLE" => "Новости",	// Название категорий
		"PARENT_SECTION" => "",	// ID раздела
		"PARENT_SECTION_CODE" => "",	// Код раздела
		"PREVIEW_TRUNCATE_LEN" => "",	// Максимальная длина анонса для вывода (только для типа текст)
		"PROPERTY_CODE" => array(	// Свойства
			0 => "AUTHOR",
			1 => "",
		),
		"SET_BROWSER_TITLE" => "N",	// Устанавливать заголовок окна браузера
		"SET_LAST_MODIFIED" => "N",	// Устанавливать в заголовках ответа время модификации страницы
		"SET_META_DESCRIPTION" => "N",	// Устанавливать описание страницы
		"SET_META_KEYWORDS" => "N",	// Устанавливать ключевые слова страницы
		"SET_STATUS_404" => "Y",	// Устанавливать статус 404
		"SET_TITLE" => "N",	// Устанавливать заголовок страницы
		"SHOW_404" => "N",	// Показ специальной страницы
		"SORT_BY1" => "ACTIVE_FROM",	// Поле для первой сортировки новостей
		"SORT_BY2" => "SORT",	// Поле для второй сортировки новостей
		"SORT_ORDER1" => "DESC",	// Направление для первой сортировки новостей
		"SORT_ORDER2" => "ASC",	// Направление для второй сортировки новостей
		"STRICT_SECTION_CHECK" => "N",	// Строгая проверка раздела для показа списка
	),
	false
);?><br>
</div>

<!--    <div class="post_box">-->
<!---->
<!--        <h2><a href="#">Free Blog Design Templates</a></h2>-->
<!--        <div class="news_meta">Posted on <a href="#">Web Templates</a>, 14th January 2048 | Tags: <a href="#">Blog</a>, <a href="#">Templates</a>, <a href="#">Design</a>, <a href="#">Free</a></div>-->
<!--        <div class="image_wrapper"><a href="http://www.templatemo.com/page/1" target="_parent"><img src="--><?//= DEFAULT_TEMPLATE_PATH  ?><!--/images/templatemo_image_01.jpg" alt="image 1" /></a></div>-->
<!--        <p align="justify">Design Blog is a <a href="http://www.templatemo.com" target="_parent">free CSS layout</a> by <a href="http://www.templatemo.com" target="_parent">templatemo.com</a> website. Feel free to adapt or edit or cutomize this template for any kind of content management system. Validate <a href="http://validator.w3.org/check?uri=referer" rel="nofollow">XHTML</a> &amp; <a href="http://jigsaw.w3.org/css-validator/check/referer" rel="nofollow">CSS</a>. Praesent at libero diam. Vivamus venenatis eros lorem, in euismod tortor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Curabitur dictum risus ac eros lacinia sit amet egestas turpis luctus.  <a href="#" class="continue">Continue ...</a></p>-->
<!--        <div class="cleaner"></div>-->
<!--    </div>-->

<!--    <div class="post_box">-->
<!---->
<!--        <h2><a href="#">Web Design Trends</a></h2>-->
<!--        <div class="news_meta">Posted on <a href="#">Web Design</a>, 28th July 2048 | Tags: <a href="#">CSS</a>, <a href="#">XHTML</a>, <a href="#">Standards</a></div>-->
<!--        <div class="image_wrapper"><a href="http://www.templatemo.com/page/2" target="_parent"><img src="--><?//= DEFAULT_TEMPLATE_PATH  ?><!--/images/templatemo_image_02.jpg" alt="image 2" /></a></div>-->
<!--        <p align="justify">Donec magna risus, mollis eget ullamcorper a, fringilla ut ligula. Fusce eu lectus non tortor dictum semper et eget eros. Integer enim eros, bibendum sed rhoncus et, congue vel odio. Sed quis augue turpis, quis vehicula nibh. Quisque hendrerit accumsan tellus, non lobortis lacus tincidunt vel. Pellentesque odio urna, convallis non ultrices quis, cursus id lectus. <a href="#" class="continue">Continue ...</a></p>-->
<!--        <div class="cleaner"></div>-->
<!--    </div>-->
<!---->
<!--    <div class="post_box pb_last">-->
<!---->
<!--        <h2><a href="#">Best Collection of Freebies</a></h2>-->
<!--        <div class="news_meta">Posted on <a href="#">Collection</a>, 26th June 2048 | Tags: <a href="#">Photos</a>, <a href="#">Photography</a>, <a href="#">Free Stuff</a></div>-->
<!--        <div class="image_wrapper"><a href="http://www.templatemo.com/page/3" target="_parent"><img src="--><?//= DEFAULT_TEMPLATE_PATH  ?><!--/images/templatemo_image_03.jpg" alt="image 3" /></a></div>-->
<!--        <p align="justify">Quisque in diam a justo condimentum molestie. Vivamus a velit. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Curabitur quis velit quis tortor tincidunt aliquet. Vivamus leo velit, convallis id, ultrices sit amet, tempor a, libero. Donec diam metus, semper eu elementum at, volutpat vel risus. Curabitur condimentum porttitor libero nec hendrerit. Nullam venenatis laoreet nibh eget iaculis. Ut vel nulla vitae magna aliquam luctus. <a href="#" class="continue">Continue ...</a></p>-->
<!--        <div class="cleaner"></div>-->
<!--    </div>-->


<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
