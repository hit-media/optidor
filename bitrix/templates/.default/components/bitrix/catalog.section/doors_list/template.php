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
	<? $img = CFile::ResizeImageGet($product['DETAIL_PICTURE']['ID'], array(
		'width' => 100,
		'height' => 220
	)) ?>
	<div class = "product_spic">
		<div class = "product_img">
			<a class="img_href" href = "<?= $product['DETAIL_PAGE_URL'] ?>">
			<img src = "<?= $img['src'] ?>" alt = "">
				</a>

			<div class = "<?=GetDop($product)?>"></div>
			<div class = "price_product"><?=$product['PROPERTIES']['PRICE']['VALUE']?> ð.</div>
		</div>
		<a href = "<?= $product['DETAIL_PAGE_URL'] ?>"><?=$product['NAME']?></a>
	</div>
<? endforeach ?>

<div class="clear"></div>
<?=$arResult['NAV_STRING']?>