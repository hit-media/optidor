<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
	die();
} ?>
<h4>Новости</h4>
<?foreach($arResult['ITEMS']as $news):?>
<div class = "article"><span>23-11-2013</span> <a href = "<?=$news['DETAIL_PAGE_URL']?>"><?=$news['NAME']?></a>

	<p><?=$news['DETAIL_TEXT']?></p>
</div>
<?endforeach?>

<? if ($arParams["DISPLAY_BOTTOM_PAGER"]): ?>
	<br/><?= $arResult["NAV_STRING"] ?>
<? endif; ?>


