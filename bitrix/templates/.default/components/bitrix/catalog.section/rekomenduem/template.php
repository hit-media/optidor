<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
	die();
} ?>
<div class = "gallery_wrap">
	<div class = "gallery_scroll_wrap">
		<div class = "gallery_scroll">
			<ul class = "gallery">
				<?foreach($arResult['ITEMS'] as $item):?>
						<?$img = CFile::ResizeImageGet($item['DETAIL_PICTURE']['ID'],array('width' => 55,'height' => 120))?>
				<li>
					<a href = "/katalog/<?=$item['CODE']?>/<?=$item['CODE']?>/"><img src = "<?=$img['src'] ?>" alt = ""></a>
				</li>
				<?endforeach?>
			</ul>
		</div>
	</div>


	<a href = "#" class = "mv_l">
		<div id = "carouselLeft" class = "g_arrow ga_l"></div>
	</a>
	<a href = "#" class = "mv_r">
		<div id = "carouselRight" class = "g_arrow ga_r"></div>
	</a>
</div>
