<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
	die();
} ?>
<?
$first_properties = array(
	'Производитель' => 'MANUF',
	'Модель' => 'MODEL',
	'Розничная цена' => 'PRICE',
);
CModule::IncludeModule('iblock');
$section = CIBlockSection::GetByID($arResult['IBLOCK_SECTION_ID'])
		->Fetch();
?>
<? $img = Cfile::ResizeImageGet($arResult['DETAIL_PICTURE']['ID'], array(
	'width' => 230,
	'height' => 2000
)) ?>
<div class = "sidebar_L">
	<div class = "left_cont">
		<div class = "big_picture">
			<img src = "<?= $img['src'] ?>" alt = "">
		</div>
	</div>

	<div class = "right_cont">
		<h4><?=$section['NAME']?></h4>
		<table class = "sett">
			<tbody>
			<?foreach ($first_properties as $key => $f): ?>
				<? if ($arResult['PROPERTIES'][$f]['VALUE']): ?>
					<? if ($key == 'Розничная цена'): ?>
						<tr>
							<td><span><?=$key?>:</span></td>
							<td>
								<div class = "price">
									<i>
										<?=preg_replace("/(.*)([0-9]{3})/isU","$1 $2",$arResult['PROPERTIES'][$f]['VALUE'])?>
									</i>
								</div>
							</td>
						</tr>
					<? else: ?>
						<tr>
							<td><span><?=$key?>:</span></td>
							<td><?=$arResult['PROPERTIES'][$f]['VALUE']?></td>
						</tr>
					<?endif ?>
				<? endif ?>
			<? endforeach?>

			</tbody>
		</table>

		<p><?=$arResult['DETAIL_TEXT']?></p>

		<p><b>Основные технические характеристики:</b></p>

		<ul class = "setting">
			<?foreach ($arResult['PROPERTIES'] as $key => $vol): ?>
				<? if ($vol['VALUE']): ?>
					<li>— <?=$vol['NAME']?> <?=$vol['VALUE']?></li>
				<? endif ?>
			<? endforeach?>

		</ul>

	</div>


</div>
