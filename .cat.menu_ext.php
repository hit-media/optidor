<?
	$aMenuLinksExt = $APPLICATION->IncludeComponent(
		"bitrix:menu.sections",
		"",
		Array(
			"IS_SEF" => "N",
			"ID" => $_REQUEST["ID"],
			"IBLOCK_TYPE" => "products",
			"IBLOCK_ID" => "5",
			"SECTION_URL" => "",
			"DEPTH_LEVEL" => "3",
			"CACHE_TYPE" => "N",
			"CACHE_TIME" => "36000000"
		)
	);
	$aMenuLinks = array_merge($aMenuLinks, $aMenuLinksExt);