<?
	require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
	$APPLICATION->SetTitle("Каталог");
?>
	<div class = "sidebar_R left_sid">
		<ul class = "tab">
			<li><a href = "#tab1" class = "active">По цене</a></li>

			<li><a href = "#tab2">По производителю</a></li>
		</ul>

		<div class = "download"><a href = "#">Скачать прайс-лист</a></div>

		<div class = "baner"><a href = "#"> <img src = "/bitrix/templates/index/image/baner1.jpg"/> </a></div>

		<div class = "baner"><a href = "#"> <img src = "/bitrix/templates/index/image/baner2.jpg"/> </a></div>

		<div class = "baner"><a href = "#"> <img src = "/bitrix/templates/index/image/baner3.jpg"/> </a></div>

		<?$APPLICATION->IncludeComponent("bitrix:catalog.section", "articles_list", array(
			"IBLOCK_TYPE" => "news",
			"IBLOCK_ID" => "7",
			"SECTION_ID" => "",
			"SECTION_CODE" => "",
			"SECTION_USER_FIELDS" => array(
				0 => "",
				1 => "",
			),
			"ELEMENT_SORT_FIELD" => "sort",
			"ELEMENT_SORT_ORDER" => "asc",
			"FILTER_NAME" => "arrFilter",
			"INCLUDE_SUBSECTIONS" => "Y",
			"SHOW_ALL_WO_SECTION" => "Y",
			"PAGE_ELEMENT_COUNT" => "30",
			"LINE_ELEMENT_COUNT" => "3",
			"PROPERTY_CODE" => array(
				0 => "",
				1 => "",
			),
			"OFFERS_LIMIT" => "5",
			"SECTION_URL" => "",
			"DETAIL_URL" => "",
			"BASKET_URL" => "/personal/basket.php",
			"ACTION_VARIABLE" => "action",
			"PRODUCT_ID_VARIABLE" => "id",
			"PRODUCT_QUANTITY_VARIABLE" => "quantity",
			"PRODUCT_PROPS_VARIABLE" => "prop",
			"SECTION_ID_VARIABLE" => "SECTION_ID",
			"AJAX_MODE" => "N",
			"AJAX_OPTION_JUMP" => "N",
			"AJAX_OPTION_STYLE" => "Y",
			"AJAX_OPTION_HISTORY" => "N",
			"CACHE_TYPE" => "N",
			"CACHE_TIME" => "36000000",
			"CACHE_GROUPS" => "Y",
			"META_KEYWORDS" => "-",
			"META_DESCRIPTION" => "-",
			"BROWSER_TITLE" => "-",
			"ADD_SECTIONS_CHAIN" => "N",
			"DISPLAY_COMPARE" => "N",
			"SET_TITLE" => "Y",
			"SET_STATUS_404" => "N",
			"CACHE_FILTER" => "N",
			"PRICE_CODE" => array(),
			"USE_PRICE_COUNT" => "N",
			"SHOW_PRICE_COUNT" => "1",
			"PRICE_VAT_INCLUDE" => "Y",
			"PRODUCT_PROPERTIES" => array(),
			"USE_PRODUCT_QUANTITY" => "N",
			"DISPLAY_TOP_PAGER" => "N",
			"DISPLAY_BOTTOM_PAGER" => "N",
			"PAGER_TITLE" => "Товары",
			"PAGER_SHOW_ALWAYS" => "Y",
			"PAGER_TEMPLATE" => "",
			"PAGER_DESC_NUMBERING" => "N",
			"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
			"PAGER_SHOW_ALL" => "Y",
			"AJAX_OPTION_ADDITIONAL" => ""
		), false);?>
	</div>

	<div class = "sidebar_L">
	<?include_once($_SERVER['DOCUMENT_ROOT'] . "/my_class.php");?>
	<h4><?=my_class::GetRazdelName($_REQUEST['SECTION_ID'])?></h4>

	<div class = "filter">

		<ul class = "filter_in" id = "tab1" style = "display: block;">
			<li><a href = "?PRICE_DIAPOZON=1"> <span> <img src = "/bitrix/templates/index/image/price1.png"/> </span> <b> до 4 999 р
			                                                                                                              .</b> </a>
			</li>

			<li><a href = "?PRICE_DIAPOZON=2"> <span> <img src = "/bitrix/templates/index/image/price2.png"/> </span> <b>от 5 000 р.
			                                                                                                             до 9 999 р.</b>
				</a></li>

			<li><a href = "?PRICE_DIAPOZON=3"> <span> <img src = "/bitrix/templates/index/image/price3.png"/> </span> <b> от 10 000 р
			                                                                                                              . до 14 999
			                                                                                                              р.</b>
				</a></li>

			<li><a href = "?PRICE_DIAPOZON=4"> <span> <img src = "/bitrix/templates/index/image/price4.png"/> </span> <b> от 15 000 р
			                                                                                                              .</b> </a>
			</li>
		</ul>

		<?$brends = my_class::GetBrends();?>
		<ul class = "filter_in" id = "tab2" style = "display: none;">
			<?foreach ($brends as $brand): ?>
				<li><a href = "?PROPERTY_BREND=<?= $brand['NAME'] ?>">
						<span> <img src = "<?= CFile::GetPath($brand['DETAIL_PICTURE']) ?>"/> </span>
						<b><?=$brand['NAME']?></b>
					</a>
				</li>
			<? endforeach?>
		</ul>
	</div>

	<div class = "clear"></div>

	<div class = "sort">
		<form action = "#"><span>Сортировать по:</span> <select class = "sell">
				<option>названию (A &rarr; Я)</option>
				<option>названию (A ? Я)</option>
				<option>названию (A ? Я)</option>
				<option>названию (A ? Я)</option>
				<option>названию (A ? Я)</option>
			</select> <span>Товара на странице:</span> <select class = "sell1">
				<option>32</option>
				<option>32</option>
				<option>32</option>
				<option>32</option>
				<option>32</option>
				<option>32</option>
			</select></form>
		<ul class = "nav_top">
			<li><a href = "#" class = "default">&lt;&lt;</a></li>

			<li><a href = "#" class = "default">&lt;</a></li>

			<li><a href = "#">1</a></li>

			<li><a href = "#">2</a></li>

			<li><a href = "#">3</a></li>

			<li><a href = "#">4</a></li>

			<li><a href = "#">5</a></li>

			<li><a href = "#">&gt;</a></li>

			<li><a href = "#">&gt;&gt;</a></li>
		</ul>
	</div>
	<? if ($_GET) {
		$prices = array(
			'1' => array(
				'min' => 0,
				'max' => 4999,
			),
			'2' => array(
				'min' => 5000,
				'max' => 9999,
			),
			'3' => array(
				'min' => 10000,
				'max' => 14999,
			),
			'4' => array(
				'min' => 15000,
				'max' => 50000,
			),
		);
		foreach ($_GET as $key => $fields) {
			if ($key != 'PRICE_DIAPOZON') {
				$GLOBALS['arrFilter'][$key] = $fields;
			}
			else {
				$GLOBALS['arrFilter'][] = array(
					'LOGIC' => 'AND',
					array(
						'<PROPERTY_PRICE' => $prices[$_GET['PRICE_DIAPOZON']]['max']
					),
					array(
						'>PROPERTY_PRICE' => $prices[$_GET['PRICE_DIAPOZON']]['min']
					)

				);
			}
		}


	}
	?>

	<div class="clear"></div>
	<?$APPLICATION->IncludeComponent("bitrix:catalog.section", "doors_list", array(
		"IBLOCK_TYPE" => "products",
		"IBLOCK_ID" => "5",
		"SECTION_ID" => $_REQUEST["SECTION_ID"],
		"SECTION_CODE" => "",
		"SECTION_USER_FIELDS" => array(
			0 => "",
			1 => "",
		),
		"ELEMENT_SORT_FIELD" => "PROPERTY_PRICE",
		"ELEMENT_SORT_ORDER" => "asc",
		"FILTER_NAME" => "arrFilter",
		"INCLUDE_SUBSECTIONS" => "Y",
		"SHOW_ALL_WO_SECTION" => "N",
		"PAGE_ELEMENT_COUNT" => "30",
		"LINE_ELEMENT_COUNT" => "3",
		"PROPERTY_CODE" => array(
			0 => "AKCIYA",
			1 => "BREND",
			2 => "OTDELKA_IN",
			3 => "OTDELKA_OUT",
			4 => "DOP_POLE",
			5 => "DOP_LOCK",
			6 => "MODEL",
			7 => "FOR",
			8 => "NAPOLNITEL",
			9 => "NEW",
			10 => "BASE_LOCK",
			11 => "PETLI",
			12 => "POROG",
			13 => "MANUF",
			14 => "SIZE",
			15 => "WIDTH",
			16 => "HIT",
			17 => "PRICE",
			18 => "",
		),
		"OFFERS_LIMIT" => "5",
		"SECTION_URL" => "",
		"DETAIL_URL" => "",
		"BASKET_URL" => "/personal/basket.php",
		"ACTION_VARIABLE" => "action",
		"PRODUCT_ID_VARIABLE" => "id",
		"PRODUCT_QUANTITY_VARIABLE" => "quantity",
		"PRODUCT_PROPS_VARIABLE" => "prop",
		"SECTION_ID_VARIABLE" => "SECTION_ID",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"CACHE_TYPE" => "N",
		"CACHE_TIME" => "36000000",
		"CACHE_GROUPS" => "Y",
		"META_KEYWORDS" => "-",
		"META_DESCRIPTION" => "-",
		"BROWSER_TITLE" => "-",
		"ADD_SECTIONS_CHAIN" => "N",
		"DISPLAY_COMPARE" => "N",
		"SET_TITLE" => "Y",
		"SET_STATUS_404" => "N",
		"CACHE_FILTER" => "N",
		"PRICE_CODE" => array(),
		"USE_PRICE_COUNT" => "N",
		"SHOW_PRICE_COUNT" => "1",
		"PRICE_VAT_INCLUDE" => "Y",
		"PRODUCT_PROPERTIES" => array(),
		"USE_PRODUCT_QUANTITY" => "N",
		"DISPLAY_TOP_PAGER" => "N",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"PAGER_TITLE" => "Товары",
		"PAGER_SHOW_ALWAYS" => "Y",
		"PAGER_TEMPLATE" => "",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "Y",
		"AJAX_OPTION_ADDITIONAL" => ""
	), false);?>
	<ul class = "nav">
		<li><a href = "#" class = "default">&lt;&lt;</a></li>

		<li><a href = "#" class = "default">&lt;</a></li>

		<li><a href = "#">1</a></li>

		<li><a href = "#">2</a></li>

		<li><a href = "#">3</a></li>

		<li><a href = "#">4</a></li>

		<li><a href = "#">5</a></li>

		<li><a href = "#">&gt;</a></li>

		<li><a href = "#">&gt;&gt;</a></li>
	</ul>
	</div>
<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>