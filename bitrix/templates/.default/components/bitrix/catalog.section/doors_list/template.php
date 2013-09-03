<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
	die();
} ?>
<!--		<pre>--><?//print_r($arResult)?><!--</pre>-->
<?$dop = array(
	'AKCIYA' => 'stock3',
	'HIT' => 'xit',
	'NEW' => 'new',
	'RECOMNEND' => 'recommend_img',
);
function GetDop($array)
{
	$class = '';
	global $dop;
	foreach ($dop as $key => $vol) {
		if ($array['PROPERTIES'][$vol]['VALUE']) {
			$class = $vol;
		}
	}
	return $class;
}

?>
<? foreach ($arResult['ITEMS'] as $product): ?>
	<?
	$this->AddEditAction($product['ID'], $product['EDIT_LINK'], CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($product['ID'], $product['DELETE_LINK'], CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BCS_ELEMENT_DELETE_CONFIRM')));
	?>

	<? $img = CFile::ResizeImageGet($product['DETAIL_PICTURE']['ID'], array(
		'width' => 100,
		'height' => 220
	)) ?>
		<?
	if(!$product['PROPERTIES']['CHECK']['VALUE']){
		$string = "width = '100' height='218'";
	}else{
		$string = '';
	}
	?>
	<div class = "product_spic" id = "<?= $this->GetEditAreaId($product['ID']); ?>">
		<div class = "product_img">
			<a class = "img_href" href = "<?= $product['DETAIL_PAGE_URL'] ?>">
				<img <?=$string?> src = "<?= $img['src'] ?>" alt = "">
			</a>

			<div class = "<?= GetDop($product) ?>"></div>
			<div class = "price_product"><?=$product['PROPERTIES']['PRICE']['VALUE']?> р.</div>
		</div>
		<a href = "<?= $product['DETAIL_PAGE_URL'] ?>"><?=$product['NAME']?></a>
	</div>
<? endforeach ?>

<div class = "clear"></div>
<?= $arResult['NAV_STRING'] ?>

