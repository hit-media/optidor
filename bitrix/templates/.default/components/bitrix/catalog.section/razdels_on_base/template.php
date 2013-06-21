<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
	die();
} ?>
<!--<pre>--><?//print_r($arResult)?><!--</pre>-->
<div class = "row_tovar">
	<?foreach ($arResult['ITEMS'] as $razdel): ?>
		<div class = "tovar">
			<div class = "center">
				<a href = "/katalog/<?=$razdel['PROPERTIES']['RAZDEL']['VALUE']?>/">
					<img src = "<?= CFile::GetPath($razdel['PROPERTIES']['PICTURE']['VALUE']) ?>" alt = ""/>
				</a>
			</div>
			<a href = "/katalog/<?=$razdel['PROPERTIES']['RAZDEL']['VALUE']?>/"><?=$razdel['NAME']?></a>
		</div>
	<? endforeach?>
</div>
