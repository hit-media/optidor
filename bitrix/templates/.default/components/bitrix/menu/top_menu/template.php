<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
	die();
} ?>
	<!--	<pre style = "z-index: 1000">--><?//print_r($arResult)?><!--</pre>-->
<? if (!empty($arResult)): ?>
	<ul class = "menu_top">
		<?$cur_level = 1;?>
		<? foreach ($arResult as $key  => $arItem): ?>
		<?if ($arItem['DEPTH_LEVEL'] == 2) {
			$class = "sub_menu";
		}
		elseif ($arItem['DEPTH_LEVEL'] == 3) {
			$class = "vip_spisok";
		}?>


		<?if ($arItem['DEPTH_LEVEL'] > $cur_level) {
			$cur_level = $arItem['DEPTH_LEVEL'];
			$before    = "<ul class = '{$class}'>";
		}
		elseif ($arItem['DEPTH_LEVEL'] == $cur_level) {
			$before = '</li>';

		}
		else {
			$cur_level = $arItem['DEPTH_LEVEL'];
			$before    = '</li></ul>';

		}?>
		<?
		if ($arItem["SELECTED"]): ?>
		<?= $key == 0 ? "": $before ?>

		<li><a href = "<?= $arItem["LINK"] ?>" class = "selected"><?=$arItem["TEXT"]?></a>

			<? else: ?>
			<?= $key == 0 ? "": $before ?>

		<li><a href = "<?= $arItem["LINK"] ?>"><?=$arItem["TEXT"]?></a>
			<?endif ?>

			<? endforeach?>
		</li>
	</ul>
<? endif ?>