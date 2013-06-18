<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
	die();
} ?>
<?
if ($_POST) {
	//	print_r($_FILES);
	$file = $_SERVER['DOCUMENT_ROOT'] . "/from_old_site/" . "upload.php";
	if (move_uploaded_file($_FILES['array']['tmp_name'], $file)) {
		$datas = unserialize(file_get_contents($file));
	}
	foreach ($datas as $product) {
		preg_match_all("/\/([a-zA-Z0-9-]*)\./isU", $product['url'], $code);
		$fields = array(
			'CODE' => $code[1][0],
			'NAME' => $product['name'],
			'IBLOCK_ID' => 5,
			'IBLOCK_SECTION_ID' => $_REQUEST['section_id'],
		);
	}

	//	unlink($file);
}

function selected($id)
{
	echo $_REQUEST['section_id'] == $id ? "selected='selected'" : "";
}
$dote = array(
	'.',
	'..',
	'...',
	'....',
);
?>
<!--<pre>--><?//print_r($datas)?><!--</pre>-->
<!--<pre>--><?//print_r($arResult)?><!--</pre>-->
<form method = "post" enctype = "multipart/form-data">
	Раздел<br>
	<select name = "section_id">
		<?foreach ($arResult['SECTIONS'] as $item): ?>
			<option <?selected($item['ID'])?> value = "<?= $item['ID'] ?>"><?=$dote[$item['DEPTH_LEVEL'] - 1]?><?=$item['NAME']?></option>
		<? endforeach?>
	</select><br>
	Файл для загрузки <br>
	<input type = "file" name = "array">
	<br>
	<input type = "submit" value = "Загрузить">
</form>