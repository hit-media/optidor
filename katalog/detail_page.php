<?
	require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
	$APPLICATION->SetTitle("Детальная страница товара");
?>
	<div class = "sidebar_R left_sid">
		<?if ($_SERVER['REAL_FILE_PATH'] != '/katalog/detail_page.php'): ?>
			<div class = "part"><span class = "">По цене</span></div>

			<ul class = "sub_slide_menu" style = "display: none;">
				<li><a href = "#">Оплата и доставка</a></li>

				<li><a href = "#">Новости</a></li>

				<li><a href = "#">Статьи</a></li>

				<li><a href = "#">Дилерам</a></li>
			</ul>

			<div class = "part"><span class = "">По виду отделки</span></div>

			<ul class = "sub_slide_menu" style = "display: none;">
				<li><a href = "#">Оплата и доставка</a></li>

				<li><a href = "#">Новости</a></li>

				<li><a href = "#">Статьи</a></li>

				<li><a href = "#">Дилерам</a></li>
			</ul>

		<? else: ?>
			<?

			CModule::IncludeModule('iblock');
			$filter = array(
				'CODE' => $_REQUEST['ELEMENT_ID']
			);
			$t = CIBlockElement::GetList(null,$filter)->Fetch();
			$t = CIBlockSection::GetByID($t['IBLOCK_SECTION_ID'])->Fetch();
			?>
<!--				<pre>--><?//print_r($razdels_array)?><!--</pre>-->
			<? /**/ ?>
			<?$APPLICATION->IncludeComponent("bitrix:catalog.section.list", "left_menu_razdels", array(
				"IBLOCK_TYPE" => "products",
				"IBLOCK_ID" => "5",
				"SECTION_ID" => $t['IBLOCK_SECTION_ID'],
				"SECTION_CODE" => "",
				"COUNT_ELEMENTS" => "Y",
				"TOP_DEPTH" => "2",
				"SECTION_FIELDS" => array(
					0 => "",
					1 => "",
				),
				"SECTION_USER_FIELDS" => array(
					0 => "",
					1 => "",
				),
				"SECTION_URL" => "",
				"CACHE_TYPE" => "N",
				"CACHE_TIME" => "36000000",
				"CACHE_GROUPS" => "Y",
				"ADD_SECTIONS_CHAIN" => "Y"
			), false);?>
		<?endif?>
		<div class = "download"><a href = "#">Скачать прайс-лист</a></div>

		<div class = "baner"><a href = "#"> <img src = "/bitrix/templates/index/image/baner1.jpg"/> </a></div>

		<div class = "baner"><a href = "#"> <img src = "/bitrix/templates/index/image/baner2.jpg"/> </a></div>

		<div class = "baner"><a href = "#"> <img src = "/bitrix/templates/index/image/baner3.jpg"/> </a></div>
	</div>
<?$APPLICATION->IncludeComponent("bitrix:breadcrumb", "", Array(
	"START_FROM" => "0",
	"PATH" => "",
	"SITE_ID" => "-"
));?>
	<br/>

	<br/>
<?$APPLICATION->IncludeComponent("bitrix:catalog.element", "door_detail", Array(
	"IBLOCK_TYPE" => "products",
	"IBLOCK_ID" => "5",
	"ELEMENT_ID" => "",
	"ELEMENT_CODE" => $_REQUEST["ELEMENT_ID"],
	"SECTION_ID" => "",
	"SECTION_CODE" => $_REQUEST["SECTION_ID"],
	"PROPERTY_CODE" => array(
		0 => "DOP_POLE",
		1 => "DOP_LOCK",
		2 => "MODEL",
		3 => "FOR",
		4 => "NAPOLNITEL",
		5 => "NEW",
		6 => "BASE_LOCK",
		7 => "PETLI",
		8 => "POROG",
		9 => "MANUF",
		10 => "SIZE",
		11 => "WIDTH",
		12 => "HIT",
		13 => "PRICE",
		14 => "",
	),
	"OFFERS_LIMIT" => "0",
	"SECTION_URL" => "",
	"DETAIL_URL" => "",
	"BASKET_URL" => "/personal/basket.php",
	"ACTION_VARIABLE" => "action",
	"PRODUCT_ID_VARIABLE" => "id",
	"PRODUCT_QUANTITY_VARIABLE" => "quantity",
	"PRODUCT_PROPS_VARIABLE" => "prop",
	"SECTION_ID_VARIABLE" => "SECTION_ID",
	"CACHE_TYPE" => "A",
	"CACHE_TIME" => "36000000",
	"CACHE_GROUPS" => "Y",
	"META_KEYWORDS" => "-",
	"META_DESCRIPTION" => "-",
	"BROWSER_TITLE" => "-",
	"SET_TITLE" => "Y",
	"SET_STATUS_404" => "N",
	"ADD_SECTIONS_CHAIN" => "Y",
	"USE_ELEMENT_COUNTER" => "Y",
	"PRICE_CODE" => array(),
	"USE_PRICE_COUNT" => "N",
	"SHOW_PRICE_COUNT" => "1",
	"PRICE_VAT_INCLUDE" => "Y",
	"PRICE_VAT_SHOW_VALUE" => "N",
	"PRODUCT_PROPERTIES" => array(),
	"USE_PRODUCT_QUANTITY" => "N",
	"LINK_IBLOCK_TYPE" => "",
	"LINK_IBLOCK_ID" => "",
	"LINK_PROPERTY_SID" => "",
	"LINK_ELEMENTS_URL" => "link.php?PARENT_ELEMENT_ID=#ELEMENT_ID#"
));?>
	<br>
	<br>
	<div class = "clear"></div>
	<div class = "clear"></div>
	<div class = "recommend">
		<h3>Мы рекомендуем</h3>
		<?$APPLICATION->IncludeComponent("bitrix:catalog.section", "rekomenduem", Array(
			"AJAX_MODE" => "N",
			"IBLOCK_TYPE" => "products",
			"IBLOCK_ID" => "5",
			"SECTION_ID" => $_REQUEST["SECTION_ID"],
			"SECTION_CODE" => "",
			"SECTION_USER_FIELDS" => array(),
			"ELEMENT_SORT_FIELD" => "sort",
			"ELEMENT_SORT_ORDER" => "asc",
			"FILTER_NAME" => "arrFilter",
			"INCLUDE_SUBSECTIONS" => "Y",
			"SHOW_ALL_WO_SECTION" => "Y",
			"SECTION_URL" => "",
			"DETAIL_URL" => "",
			"BASKET_URL" => "/personal/basket.php",
			"ACTION_VARIABLE" => "action",
			"PRODUCT_ID_VARIABLE" => "id",
			"PRODUCT_QUANTITY_VARIABLE" => "quantity",
			"PRODUCT_PROPS_VARIABLE" => "prop",
			"SECTION_ID_VARIABLE" => "SECTION_ID",
			"META_KEYWORDS" => "-",
			"META_DESCRIPTION" => "-",
			"BROWSER_TITLE" => "-",
			"ADD_SECTIONS_CHAIN" => "N",
			"DISPLAY_COMPARE" => "N",
			"SET_TITLE" => "Y",
			"SET_STATUS_404" => "N",
			"PAGE_ELEMENT_COUNT" => "30",
			"LINE_ELEMENT_COUNT" => "3",
			"PROPERTY_CODE" => array(
				"AKCIYA",
				"BREND",
				"OTDELKA_IN",
				"OTDELKA_OUT",
				"DOP_POLE",
				"DOP_LOCK",
				"MODEL",
				"FOR",
				"NAPOLNITEL",
				"NEW",
				"BASE_LOCK",
				"PETLI",
				"POROG",
				"MANUF",
				"SIZE",
				"REKOMENDUEM",
				"WIDTH",
				"HIT",
				"PRICE",
				"PRICE_OPT"
			),
			"OFFERS_LIMIT" => "5",
			"PRICE_CODE" => array(),
			"USE_PRICE_COUNT" => "N",
			"SHOW_PRICE_COUNT" => "1",
			"PRICE_VAT_INCLUDE" => "Y",
			"PRODUCT_PROPERTIES" => array(),
			"USE_PRODUCT_QUANTITY" => "N",
			"CACHE_TYPE" => "N",
			"CACHE_TIME" => "36000000",
			"CACHE_FILTER" => "N",
			"CACHE_GROUPS" => "Y",
			"DISPLAY_TOP_PAGER" => "N",
			"DISPLAY_BOTTOM_PAGER" => "Y",
			"PAGER_TITLE" => "Товары",
			"PAGER_SHOW_ALWAYS" => "Y",
			"PAGER_TEMPLATE" => "",
			"PAGER_DESC_NUMBERING" => "N",
			"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
			"PAGER_SHOW_ALL" => "Y",
			"AJAX_OPTION_JUMP" => "N",
			"AJAX_OPTION_STYLE" => "Y",
			"AJAX_OPTION_HISTORY" => "N"
		), false);?>
	</div>
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>