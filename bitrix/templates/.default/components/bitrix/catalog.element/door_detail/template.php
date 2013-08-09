<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
	die();
} ?>
<?
$first_properties = array(
	'Производитель' => 'MANUF',
	'Модель' => 'MODEL',
	'Розничная цена' => 'PRICE',
	'Оптовая цена' => 'PRICE_OPT',
);
CModule::IncludeModule('iblock');
$section = CIBlockSection::GetByID($arResult['IBLOCK_SECTION_ID'])
		->Fetch();
?>
<? $img = Cfile::ResizeImageGet($arResult['DETAIL_PICTURE']['ID'], array(
	'width' => 230,
	'height' => 2000
)) ?>
<script type = "text/javascript">
	$(document).ready(function () {
		$('.small_picture a').click(function () {
			$('.big_picture img').fadeOut(200);
			$('.big_picture img').attr('src', $(this).attr('rel'));
			$('.big_picture img').fadeIn(200);
			return false;
		});
	});

</script>
<div class = "sidebar_L">
	<div class = "left_cont">
		<div class = "big_picture">
			<a href = "<?= $img['src'] ?>" class = "fancy"><img id = "img_conteiner" src = "<?= $img['src'] ?>" alt = ""></a>
		</div>
		<?if (count($arResult['PROPERTIES']['PHOTOS']['VALUE']) > 0): ?>
			<? foreach ($arResult['PROPERTIES']['PHOTOS']['VALUE'] as $photo): ?>
				<? $img = CFile::ResizeImageGet($photo, array(
					'width' => 40,
					'height' => 50
				));
				$for_conteyner = CFile::ResizeImageGet($photo, array(
					'width' => 230,
					'height' => 2000
				))
				?>
				<div class = "small_picture">
					<a href = "" rel = "<?= $for_conteyner['src'] ?>">
						<img src = "<?= $img['src'] ?>" alt = "">
					</a>
				</div>
			<? endforeach ?>
		<? endif?>
	</div>


	<div class = "right_cont">

		<div class = "clear"></div>
		<h4><?=$section['NAME']?></h4>

		<table class = "sett">
			<tbody>
			<?foreach ($first_properties as $key => $f): ?>
				<? if ($arResult['PROPERTIES'][$f]['VALUE']): ?>
					<? if ($key == 'Розничная цена' | $key == 'Оптовая цена'): ?>
						<tr>
							<td><span><?=$key?>:</span></td>
							<td>
								<div class = "price">
									<i <?=$key == 'Оптовая цена' ? "class='red'" : ""?>>
										<?=preg_replace("/(.*)([0-9]{3})/isU", "$1 $2", $arResult['PROPERTIES'][$f]['VALUE'])?> р.
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
