<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
	die();
} ?>
<!--<pre>--><?//print_r($arResult)?><!--</pre>-->
<ul class = "menu_left">
	<?foreach($arResult['SECTIONS'] as $vol):?>
	<li><a href = "/katalog/<?=$vol['ID']?>/"><?=$vol['NAME']?></a></li>
	<?endforeach?>
</ul>
