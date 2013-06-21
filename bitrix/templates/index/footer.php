<? if ($_SERVER['REQUEST_URI'] == "/"): ?>
	<div class = "slaider_cont">
		<div id = "wrapper">
			<div class = "d-carousel">
				<ul class = "carousel">
					<li>
						<div class = "border">
							<a href = "#"><img src = "/bitrix/templates/index/image/pic2.jpg" alt = ""/></a>
						</div>
						<a href = "#" class = "carous_a">Противопожарные люки</a>
					</li>
					<li>
						<div class = "border">
							<a href = "#"><img src = "/bitrix/templates/index/image/pic3.jpg" alt = ""/></a>
						</div>
						<a href = "#" class = "carous_a">Противопожарные люки</a>
					</li>
					<li>
						<div class = "border">
							<a href = "#"><img src = "/bitrix/templates/index/image/pic4.jpg" alt = ""/></a>
						</div>
						<a href = "#" class = "carous_a">Рентгенозащитные двери</a>
					</li>
					<li>
						<div class = "border">
							<a href = "#"><img src = "/bitrix/templates/index/image/pic5.jpg" alt = ""/></a>
						</div>
						<a href = "#" class = "carous_a">Почтовые ящики</a>
					</li>
					<li>
						<div class = "border">
							<a href = "#"><img src = "/bitrix/templates/index/image/pic2.jpg" alt = ""/></a>
						</div>
						<a href = "#" class = "carous_a">Противопожарные люки</a>
					</li>
					<li>
						<div class = "border">
							<a href = "#"><img src = "/bitrix/templates/index/image/pic3.jpg" alt = ""/></a>
						</div>
						<a href = "#" class = "carous_a">Противопожарные люки</a>
					</li>
					<li>
						<div class = "border">
							<a href = "#"><img src = "/bitrix/templates/index/image/pic4.jpg" alt = ""/></a>
						</div>
						<a href = "#" class = "carous_a">Рентгенозащитные двери</a>
					</li>
					<li>
						<div class = "border">
							<a href = "#"><img src = "/bitrix/templates/index/image/pic5.jpg" alt = ""/></a>
						</div>
						<a href = "#" class = "carous_a">Почтовые ящики</a>
					</li>
					<li>
						<div class = "border">
							<a href = "#"><img src = "/bitrix/templates/index/image/pic2.jpg" alt = ""/></a>
						</div>
						<a href = "#" class = "carous_a">Противопожарные люки</a>
					</li>
					<li>
						<div class = "border">
							<a href = "#"><img src = "/bitrix/templates/index/image/pic3.jpg" alt = ""/></a>
						</div>
						<a href = "#" class = "carous_a">Противопожарные люки</a>
					</li>
					<li>
						<div class = "border">
							<a href = "#"><img src = "/bitrix/templates/index/image/pic4.jpg" alt = ""/></a>
						</div>
						<a href = "#" class = "carous_a">Рентгенозащитные двери</a>
					</li>
					<li>
						<div class = "border">
							<a href = "#"><img src = "/bitrix/templates/index/image/pic5.jpg" alt = ""/></a>
						</div>
						<a href = "#" class = "carous_a">Почтовые ящики</a>
					</li>
					<li>
						<div class = "border">
							<a href = "#"><img src = "/bitrix/templates/index/image/pic5.jpg" alt = ""/></a>
						</div>
						<a href = "#" class = "carous_a">Почтовые ящики</a>
					</li>
				</ul>
			</div>
			<div class = "clear"></div>
		</div>
	</div>
<? endif ?>


<? if ($_SERVER['REQUEST_URI'] == "/"): ?>
	<div class = "recommend">
		<h3>Мы рекомендуем</h3>
		<?$GLOBALS['arrFilter'] = array("PROPERTY_REKOMENDUEM_VALUE" => 'да')?>
		<?$APPLICATION->IncludeComponent("bitrix:catalog.section", "rekomenduem", array(
	"IBLOCK_TYPE" => "products",
	"IBLOCK_ID" => "5",
	"SECTION_ID" => $_REQUEST["SECTION_ID"],
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
		0 => "REKOMENDUEM",
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
	"PRICE_CODE" => array(
	),
	"USE_PRICE_COUNT" => "N",
	"SHOW_PRICE_COUNT" => "1",
	"PRICE_VAT_INCLUDE" => "Y",
	"PRODUCT_PROPERTIES" => array(
	),
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
	),
	false
);?>


	</div>
<? endif ?>
</div>
</div>

<div class = "clear"></div>

<div id = "footer">
	<div class = "range_fot">
		<div class = "footer_center">
			<div class = "logo">
				<a href = "/">
					<img src = "/bitrix/templates/index/image/logo_footer.png" alt = ""/>
				</a>
			</div>

			<div class = "phone">
				<i>многоканальный телефон</i>

				<h3><span>(4712)</span> 77-02-80</h3>

				<p>г. Курск, ул. Магистральная, 44 А</p>
			</div>
			<div class = "clear"></div>

			<div class = "fot_cent">
				разработка сайта <a href = "#">High-Tech Media</a>
			</div>
		</div>
	</div>
</div>

<script type = "text/javascript">
	var slideshow = new TINY.slider.slide('slideshow', {
		id: 'slider',
		auto: 6,
		resume: false,
		vertical: false,
		navid: 'pagination',
		activeclass: 'current',
		position: 0,
		rewind: false,
		elastic: false,
		left: 'slideleft',
		right: 'slideright'
	});
</script>

</body>
</html>