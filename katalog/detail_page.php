<?
	require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
	$APPLICATION->SetTitle("Детальная страница товара");
?>
	<div class = "sidebar_R left_sid">

		<div class = "part">
			<span class = "">По цене</span>
		</div>
		<ul class = "sub_slide_menu" style = "display: none;">
			<li><a href = "#">Оплата и доставка</a></li>
			<li><a href = "#">Новости</a></li>
			<li><a href = "#">Статьи</a></li>
			<li><a href = "#">Дилерам</a></li>
		</ul>

		<div class = "part">
			<span class = "">По виду отделки</span>
		</div>
		<ul class = "sub_slide_menu" style = "display: none;">
			<li><a href = "#">Оплата и доставка</a></li>
			<li><a href = "#">Новости</a></li>
			<li><a href = "#">Статьи</a></li>
			<li><a href = "#">Дилерам</a></li>
		</ul>

		<div class = "download">
			<a href = "#">Скачать прайс-лист</a>
		</div>

		<div class = "baner">
			<a href = "#">
				<img src = "/bitrix/templates/index/image/baner1.jpg" alt = "">
			</a>
		</div>

		<div class = "baner">
			<a href = "#">
				<img src = "/bitrix/templates/index/image/baner2.jpg" alt = "">
			</a>
		</div>

		<div class = "baner">
			<a href = "#">
				<img src = "/bitrix/templates/index/image/baner3.jpg" alt = "">
			</a>
		</div>


	</div>
<?$APPLICATION->IncludeComponent(
	"bitrix:breadcrumb",
	"",
	Array(
		"START_FROM" => "0",
		"PATH" => "",
		"SITE_ID" => "-"
	),
false
);?>

	<br><br>
<?$APPLICATION->IncludeComponent("bitrix:catalog.element", "door_detail", array(
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
	"PRICE_CODE" => array(
	),
	"USE_PRICE_COUNT" => "N",
	"SHOW_PRICE_COUNT" => "1",
	"PRICE_VAT_INCLUDE" => "Y",
	"PRICE_VAT_SHOW_VALUE" => "N",
	"PRODUCT_PROPERTIES" => array(
	),
	"USE_PRODUCT_QUANTITY" => "N",
	"LINK_IBLOCK_TYPE" => "",
	"LINK_IBLOCK_ID" => "",
	"LINK_PROPERTY_SID" => "",
	"LINK_ELEMENTS_URL" => "link.php?PARENT_ELEMENT_ID=#ELEMENT_ID#"
	),
	false
);?><?require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php");?>