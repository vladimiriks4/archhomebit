<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

    <?php $APPLICATION->ShowHead(); ?>
<!--    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />-->
    <title><?php $APPLICATION->ShowTitle(); ?></title>
    <?php
        \Bitrix\Main\Page\Asset::getInstance()->addCss(DEFAULT_TEMPLATE_PATH . '/css/templatemo_style.css');
    ?>

<!--    <meta name="keywords" content="free css templates, blog design, 2-column, web design, CSS, HTML" />-->
<!--    <meta name="description" content="Design Blog - free css template, 2-column blog layout" />-->
<!--    <link href="css/templatemo_style.css" rel="stylesheet" type="text/css" />-->
    <script language="javascript" type="text/javascript">
        function clearText(field)
        {
            if (field.defaultValue == field.value) field.value = '';
            else if (field.value == '') field.value = field.defaultValue;
        }
    </script>
</head>
<body>

<div id="panel"><?php $APPLICATION->ShowPanel(); ?></div>

<div id="templatemo_body_wrapper">
    <div id="templatemo_wrapper">

        <div id="templatemo_header">

            <div id="site_title">
                <a href="/" target="_parent">Design
                    <span>Blog</span>
                    <span class="tagline">Designed by Free CSS Templates</span>
                </a>
            </div> <!-- end of site_title -->

            <div id="search_box">
                <form action="#" method="get">
                    <input type="text" value="Enter keyword here..." name="q" size="10" id="searchfield" title="searchfield" onfocus="clearText(this)" onblur="clearText(this)" />
                    <input type="submit" name="Search" value="Search" id="searchbutton" title="Search" />
                </form>
            </div>


            <div class="cleaner"></div>

        </div> <!-- end of header -->

        <div id="templatemo_menu">
            <?$APPLICATION->IncludeComponent("bitrix:menu", "template_my_menu", Array(
	"ALLOW_MULTI_SELECT" => "N",	// Разрешить несколько активных пунктов одновременно
		"CHILD_MENU_TYPE" => "left",	// Тип меню для остальных уровней
		"DELAY" => "N",	// Откладывать выполнение шаблона меню
		"MAX_LEVEL" => "1",	// Уровень вложенности меню
		"MENU_CACHE_GET_VARS" => array(	// Значимые переменные запроса
			0 => "",
		),
		"MENU_CACHE_TIME" => "3600",	// Время кеширования (сек.)
		"MENU_CACHE_TYPE" => "N",	// Тип кеширования
		"MENU_CACHE_USE_GROUPS" => "Y",	// Учитывать права доступа
		"ROOT_MENU_TYPE" => "main",	// Тип меню для первого уровня
		"USE_EXT" => "N",	// Подключать файлы с именами вида .тип_меню.menu_ext.php
	),
	false
);?>
<!--            <ul>-->
<!--                <li><a href="#" class="current"><span></span>Home</a></li>-->
<!--                <li><a href="#"><span></span>Web 2.0</a></li>-->
<!--                <li><a href="#"><span></span>Wordpress</a></li>-->
<!--                <li><a href="#"><span></span>Graphics</a></li>-->
<!--                <li><a href="#"><span></span>Inspirations</a></li>-->
<!--                <li><a href="#"><span></span>Freebies</a></li>-->
<!--            </ul>-->

            <div id="register_box">
                Already Registered? Click <a href="#" class="signup">Here</a> | <a href="#" class="new_reg">Register</a>
            </div>
        </div> <!-- end of templatemo_menu -->

        <div id="templatemo_main">

            <div id="templatemo_content">
