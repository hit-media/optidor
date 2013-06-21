<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
	die();
} ?>
<? foreach ($arResult['ITEMS'] as $key =>$share): ?>
	<div class = "stock">
		<div class = "stock_img">
			<img src = "<?=$share['DETAIL_PICTURE']['SRC']?>" alt = "">
		</div>
		<div class = "stock_text">
			<?if($key == 0):?>
			<h4>Акции</h4>
		<?endif?>

			<h3><?=$share['NAME']?></h3>

			<?=$share['DETAIL_TEXT']?>
		</div>
	</div>
<? endforeach ?>
