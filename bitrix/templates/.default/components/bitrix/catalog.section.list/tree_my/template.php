<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
	die();
} ?>
<?
if ($_POST['load']) {
	CModule::IncludeModule('iblock');
	$el = new CIblockElement();
	//	print_r($_FILES);
	$file = $_SERVER['DOCUMENT_ROOT'] . "/from_old_site/" . "upload.php";
	if (move_uploaded_file($_FILES['array']['tmp_name'], $file)) {
		$datas = unserialize(file_get_contents($file));
	}

	$props_codes = array(
		'Производитель' => 9,
		'Бренд' => 10,
		'Назначение' => 11,
		'Толщина стали листа двери' => 12,
		'Вид отделки снаружи' => 13,
		'Вид отделки внутри' => 14,
		'Модель' => 15,
		'Размер' => 16,
		'Порог' => 17,
		'Дополнительный замок' => 18,
		'Дополнительное поле' => 19,
		'Основной замок' => 20,
		'Петли' => 21,
		'Наполнитель' => 22,
	);

	foreach ($datas as $product) {
		preg_match_all("/\/([a-zA-Z0-9-]*)\./isU", $product['url'], $code);

		foreach ($product['props'] as $key => $prop) {
			$property[$props_codes[$key]] = $prop;
		}
		;
		$property['PRICE'] = $product['prices']['simple'];

		$fields = array(
			'PROPERTY_VALUES' => $property,
			'CODE' => $code[1][0],
			'NAME' => $product['name'],
			'IBLOCK_ID' => 5,
			'DETAIL_PICTURE' => CFile::MakeFileArray("http://optidoor.tmweb.ru/" . $product['img']),
			'IBLOCK_SECTION_ID' => $_REQUEST['section_id'],
		);
		$el->Add($fields);
	}

	unlink($file);
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

function CheckBrend($name)
{
	global $DB;
	$q = "
	SELECT el.NAME FROM
	b_iblock_element as el
	WHERE el.NAME = '{$name}' AND
			el.IBLOCK_ID = '10'
	";
	$t = $DB->Query($q);
	while ($res = $t->Fetch()) {
		$brands[] = $res;
	}
	if (count($brands) > 0) {
		return true;
	}
	else {
		return false;
	}
}
if ($_POST['GET_BRENDS']) {
	$q = "SELECT brand.VALUE
	FROM
	b_iblock_element_property as brand
	where brand.IBLOCK_PROPERTY_ID = 10
	group by brand.VALUE
	";
	global $DB;
	$t      = $DB->Query($q);
	$brands = array();

	CModule::IncludeModule('iblock');
	$el = new CIblockElement();
	while ($res = $t->Fetch()) {
		if (!CheckBrend($res['VALUE'])) {
			$fields = array(
				'NAME' => $res['VALUE'],
				'IBLOCK_ID' => 10
			);
			$el->Add($fields);
			$brands[] = $res;
		}
	}
}
?>

<pre><?print_r($fields)?></pre>

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
	<input type = "submit" name = "load" value = "Загрузить">
</form>
<form method = "post" enctype = "multipart/form-data" action = "">
	<input type = "submit" value = "Получить уникальные занчения брендов">
	<input type = "hidden" name = "GET_BRENDS" value = "123">
</form>
<pre><?print_r($brands)?></pre>