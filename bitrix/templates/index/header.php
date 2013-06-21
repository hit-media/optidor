<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
		"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns = "http://www.w3.org/1999/xhtml">
<head>
	<?$APPLICATION->ShowHead()?>
	<meta http-equiv = "Content-Type" content = "text/html; charset=utf-8"/>
	<title><?$APPLICATION->ShowTitle()?></title>

	<link href = "/bitrix/templates/index/css/style.css" type = "text/css" rel = "stylesheet"/>
	<script type = "text/javascript" src = "/bitrix/templates/index/js/jquery-1.7.1.min.js"></script>
	<script type = "text/javascript" src = "/bitrix/templates/index/js/script.js"></script>
	<script type = "text/javascript" src = "/bitrix/templates/index/js/jquery.jcarousel.js"></script>
	<script type = "text/javascript" src = "/bitrix/templates/index/js/mootools-core-1.js"></script>
	<script type = "text/javascript" src = "/bitrix/templates/index/js/doors.js"></script>

	<script type = "text/javascript">
		$(function () {
			$('ul.menu_top li').each(function () {
				var li = $(this);
				var children = li.children();
				if (children.length > 1) {
					children.first().addClass('active');
				}
			});
			$('.d-carousel .carousel').jcarousel({
				scroll: 1
			});
		});
	</script>
	<script type = "text/javascript" src = "/bitrix/templates/index/js/jquery.min.1.4.js"></script>
	<script type = "text/javascript" src = "/bitrix/templates/index/js/jquery-ui.min.js"></script>
	<script type = "text/javascript" src = "/bitrix/templates/index/js/ppgallery.js"></script>
	<script type = "text/javascript">
		$(function () {
			$('#gallery').ppGallery();
		});
	</script>

</head>
<body>
<?$APPLICATION->ShowPanel()?>

<div id = "header">
	<h1>
		<a href = "/">
			<img src = "/bitrix/templates/index/image/logo.png" alt = ""/>
		</a>
	</h1>

	<div class = "contact">
		<i>звонок бесплатный</i>

		<h3><span>8 800</span> 450-02-80</h3>

		<p>г. Курск, ул. Магистральная, 44 а</p>
	</div>

	<div class = "clear"></div>

	<div class = "menu">
		<!--		<ul class = "menu_top">-->
		<!--			<li><a href = "#">О компании</a>-->
		<!--				<ul class = "sub_menu">-->
		<!--					<li><a href = "#">Двери входные</a></li>-->
		<!--					<li><a href = "#">Двери межкомнатные</a></li>-->
		<!--					<li><a href = "#">Противопожарная продукция</a>-->
		<!--						<ul class = "vip_spisok">-->
		<!--							<li><a href = "#">Рентгенозащитные двери</a></li>-->
		<!--							<li><a href = "#">Дариано Порте</a></li>-->
		<!--							<li><a href = "#">Оникс</a></li>-->
		<!--							<li><a href = "#">Виво Порте</a></li>-->
		<!--							<li><a href = "#">Ламинированные</a></li>-->
		<!--							<li><a href = "#">Облицованные пвх</a></li>-->
		<!--							<li><a href = "#">Шпонированные</a></li>-->
		<!--						</ul>-->
		<!--					</li>-->
		<!--					<li><a href = "#">Стелажи</a>-->
		<!--						<ul class = "vip_spisok">-->
		<!--							<li><a href = "#">Рентгенозащитные двери</a></li>-->
		<!--							<li><a href = "#">Дариано Порте</a></li>-->
		<!--							<li><a href = "#">Оникс</a></li>-->
		<!--							<li><a href = "#">Виво Порте</a></li>-->
		<!--							<li><a href = "#">Ламинированные</a></li>-->
		<!--							<li><a href = "#">Облицованные пвх</a></li>-->
		<!--							<li><a href = "#">Шпонированные</a></li>-->
		<!--						</ul>-->
		<!--					</li>-->
		<!--				</ul>-->
		<!--			</li>-->
		<!--			<li><a href = "#">Каталог</a>-->
		<!--				<ul class = "sub_menu">-->
		<!--					<li><a href = "#">Двери входные</a></li>-->
		<!--					<li><a href = "#">Двери межкомнатные</a></li>-->
		<!--					<li><a href = "#">Противопожарная продукция</a>-->
		<!--						<ul class = "vip_spisok">-->
		<!--							<li><a href = "#">Рентгенозащитные двери</a></li>-->
		<!--							<li><a href = "#">Дариано Порте</a></li>-->
		<!--							<li><a href = "#">Оникс</a></li>-->
		<!--							<li><a href = "#">Виво Порте</a></li>-->
		<!--							<li><a href = "#">Ламинированные</a></li>-->
		<!--							<li><a href = "#">Облицованные пвх</a></li>-->
		<!--							<li><a href = "#">Шпонированные</a></li>-->
		<!--						</ul>-->
		<!--					</li>-->
		<!--					<li><a href = "#">Стелажи</a>-->
		<!--						<ul class = "vip_spisok">-->
		<!--							<li><a href = "#">Рентгенозащитные двери</a></li>-->
		<!--							<li><a href = "#">Дариано Порте</a></li>-->
		<!--							<li><a href = "#">Оникс</a></li>-->
		<!--							<li><a href = "#">Виво Порте</a></li>-->
		<!--							<li><a href = "#">Ламинированные</a></li>-->
		<!--							<li><a href = "#">Облицованные пвх</a></li>-->
		<!--							<li><a href = "#">Шпонированные</a></li>-->
		<!--						</ul>-->
		<!--					</li>-->
		<!--				</ul>-->
		<!--			</li>-->
		<!--			<li><a href = "#">Акции</a></li>-->
		<!--			<li><a href = "#">Услуги</a></li>-->
		<!--			<li><a href = "#">Информация</a></li>-->
		<!--			<li><a href = "#">Контакты</a></li>-->
		<!--		</ul>-->
		<?$APPLICATION->IncludeComponent("bitrix:menu", "horizontal_multilevel_my", array(
			"ROOT_MENU_TYPE" => "top",
			"MENU_CACHE_TYPE" => "N",
			"MENU_CACHE_TIME" => "3600",
			"MENU_CACHE_USE_GROUPS" => "Y",
			"MENU_CACHE_GET_VARS" => array(),
			"MAX_LEVEL" => "3",
			"CHILD_MENU_TYPE" => "left",
			"USE_EXT" => "Y",
			"DELAY" => "N",
			"ALLOW_MULTI_SELECT" => "N"
		), false);?>
	</div>

</div>

<div class = "clear"></div>

<div id = "content_top">
	<div class = "range">
		<div class = "content_top_center">
			<div class = "slaider">
				<div class = "sliderbutton" id = "slideleft" onclick = "slideshow.move(-1)"></div>
				<div id = "slider">
					<ul>
						<li><img src = "/bitrix/templates/index/image/slide1.jpg" alt = ""/>

							<div class = "info">
								<h2>«Оптидор»: лучший в Курске</h2>

								<p>
									Оптовая сеть “Оптидор” – динамично развивающаяся компания, сотрудничающая только с
									ведущими производителями и импортёрами, поставляющими двери в Курск. Широкий
									ассортимент и гибкая ценовая политика нашей компании позволяют нам предлагать двери.
								</p>

								<a href = "#">Подробнее</a>
							</div>
						</li>
						<li><img src = "/bitrix/templates/index/image/slide1.jpg" alt = ""/>

							<div class = "info">
								<h2>«Оптидор»: лучший в Курске</h2>

								<p>
									Оптовая сеть “Оптидор” – динамично развивающаяся компания, сотрудничающая только с
									ведущими производителями и импортёрами, поставляющими двери в Курск. Широкий
									ассортимент и гибкая ценовая политика нашей компании позволяют нам предлагать двери.
								</p>

								<a href = "#">Подробнее</a>
							</div>
						</li>
						<li><img src = "/bitrix/templates/index/image/slide1.jpg" alt = ""/>

							<div class = "info">
								<h2>«Оптидор»: лучший в Курске</h2>

								<p>
									Оптовая сеть “Оптидор” – динамично развивающаяся компания, сотрудничающая только с
									ведущими производителями и импортёрами, поставляющими двери в Курск. Широкий
									ассортимент и гибкая ценовая политика нашей компании позволяют нам предлагать двери.
								</p>

								<a href = "#">Подробнее</a>
							</div>
						</li>
					</ul>
				</div>
				<div class = "sliderbutton" id = "slideright" onclick = "slideshow.move(1)"></div>
				<ul id = "pagination" class = "pagination">
					<li onclick = "slideshow.pos(0)"></li>
					<li onclick = "slideshow.pos(1)"></li>
					<li onclick = "slideshow.pos(2)"></li>
					<li onclick = "slideshow.pos(3)"></li>
				</ul>
				<div class = "bg_bott"></div>

			</div>
			<?if ($_SERVER['REQUEST_URI'] == "/"): ?>
				<div class = "row_tovar">
					<div class = "tovar">
						<div class = "center">
							<a href = "#">
								<img src = "/bitrix/templates/index/image/pic1.png" alt = ""/>
							</a>
						</div>
						<a href = "#">Двери межкомнатные</a>
					</div>
					<div class = "tovar">
						<div class = "center">
							<a href = "#">
								<img src = "/bitrix/templates/index/image/pic2.png" alt = ""/>
							</a>
						</div>
						<a href = "#">Двери межкомнатные</a>
					</div>
					<div class = "tovar">
						<div class = "center">
							<a href = "#">
								<img src = "/bitrix/templates/index/image/pic3.png" alt = ""/>
							</a>
						</div>
						<a href = "#">Двери межкомнатные</a>
					</div>
					<div class = "tovar">
						<div class = "center">
							<a href = "#">
								<img src = "/bitrix/templates/index/image/pic4.png" alt = ""/>
							</a>
						</div>
						<a href = "#">Двери межкомнатные</a>
					</div>
					<div class = "tovar">
						<div class = "center">
							<a href = "#">
								<img src = "/bitrix/templates/index/image/pic5.png" alt = ""/>
							</a>
						</div>
						<a href = "#">Двери межкомнатные</a>
					</div>
				</div>
			<? endif?>

		</div>
	</div>
</div>
<div id = "content">
	<div class = "content_center">
