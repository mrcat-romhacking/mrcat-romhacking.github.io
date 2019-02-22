<?php require_once("res/x5engine.php"); ?>
<!DOCTYPE html><!-- HTML5 -->
<html prefix="og: http://ogp.me/ns#" lang="ru-RU" dir="ltr">
	<head>
		<title>Поиск - Mrcat-pixel</title>
		<meta charset="utf-8" />
		<!--[if IE]><meta http-equiv="ImageToolbar" content="False" /><![endif]-->
		<meta name="generator" content="Incomedia WebSite X5 Professional 14.0.6.2 - www.websitex5.com" />
		<meta property="og:locale" content="ru" />
		<meta property="og:type" content="website" />
		<meta property="og:url" content="http://mrcat-pixel.xyz/imsearch.php" />
		<meta property="og:title" content="Поиск" />
		<meta property="og:site_name" content="Mrcat-pixel" />
		<meta property="og:image" content="http://mrcat-pixel.xyz/favImage.png" />
		<meta property="og:image:type" content="image/png">
		<meta property="og:image:width" content="32">
		<meta property="og:image:height" content="32">
		<meta name="viewport" content="width=1150" />
		
		<link rel="stylesheet" type="text/css" href="style/reset.css?14-0-6-2" media="screen,print" />
		<link rel="stylesheet" type="text/css" href="style/print.css?14-0-6-2" media="print" />
		<link rel="stylesheet" type="text/css" href="style/style.css?14-0-6-2" media="screen,print" />
		<link rel="stylesheet" type="text/css" href="style/template.css?14-0-6-2" media="screen" />
		<link rel="stylesheet" type="text/css" href="pcss/imsearch.css?14-0-6-2-636864564533167954" media="screen,print" />
		<script type="text/javascript" src="res/jquery.js?14-0-6-2"></script>
		<script type="text/javascript" src="res/x5engine.js?14-0-6-2" data-files-version="14-0-6-2"></script>
		<script type="text/javascript">
			window.onload = function(){ checkBrowserCompatibility('Ваш браузер не поддерживает функции, требуемые для визуализации этого Сайта.','Возможно, Ваш браузер не поддерживает функции, требуемые для визуализации этого Сайта.','[1]Обновите Ваш браузер[/1] или [2]продолжите процедуру [/2].','http://outdatedbrowser.com/'); };
			x5engine.utils.currentPagePath = 'imsearch.php';
		</script>
		<link rel="icon" href="favicon.png?14-0-6-2-636864564533157956" type="image/png" />
	</head>
	<body>
		<div id="imPageExtContainer">
			<div id="imPageIntContainer">
				<div id="imHeaderBg"></div>
				<div id="imFooterBg"></div>
				<div id="imPage">
					<div id="imHeader">
						<h1 class="imHidden">Поиск - Mrcat-pixel</h1>
						<div id="imHeaderObjects"><div id="imHeader_imObjectImage_01_wrapper" class="template-object-wrapper"><div id="imHeader_imCell_1" class="" > <div id="imHeader_imCellStyleGraphics_1"></div><div id="imHeader_imCellStyle_1" ><img id="imHeader_imObjectImage_01" src="images/----------.png" title="" alt="" /></div></div></div><div id="imHeader_imObjectImage_02_wrapper" class="template-object-wrapper"><div id="imHeader_imCell_2" class="" > <div id="imHeader_imCellStyleGraphics_2"></div><div id="imHeader_imCellStyle_2" ><a href="about.html" onclick="return x5engine.utils.location('about.html', null, false)"><img id="imHeader_imObjectImage_02" src="images/info.png" title="" alt="" /></a>
<script type="text/javascript">
	x5engine.boot.push(function () {
		 x5engine.imagefx.opacityIn('#imHeader_imObjectImage_02', 0.5); 
	});
</script>
</div></div></div><div id="imHeader_imObjectImage_03_wrapper" class="template-object-wrapper"><div id="imHeader_imCell_3" class="" > <div id="imHeader_imCellStyleGraphics_3"></div><div id="imHeader_imCellStyle_3" ><a href="contact.html" onclick="return x5engine.utils.location('contact.html', null, false)"><img id="imHeader_imObjectImage_03" src="images/cont.png" title="" alt="" /></a>
<script type="text/javascript">
	x5engine.boot.push(function () {
		 x5engine.imagefx.opacityIn('#imHeader_imObjectImage_03', 0.5); 
	});
</script>
</div></div></div></div>
					</div>
					<div id="imStickyBarContainer">
						<div id="imStickyBarGraphics"></div>
						<div id="imStickyBar">
							<div id="imStickyBarObjects"><div id="imStickyBar_imObjectImage_01_wrapper" class="template-object-wrapper"><div id="imStickyBar_imCell_1" class="" > <div id="imStickyBar_imCellStyleGraphics_1"></div><div id="imStickyBar_imCellStyle_1" ><img id="imStickyBar_imObjectImage_01" src="images/info.png" title="" alt="" /></div></div></div><div id="imStickyBar_imObjectImage_02_wrapper" class="template-object-wrapper"><div id="imStickyBar_imCell_2" class="" > <div id="imStickyBar_imCellStyleGraphics_2"></div><div id="imStickyBar_imCellStyle_2" ><img id="imStickyBar_imObjectImage_02" src="images/cont.png" title="" alt="" /></div></div></div></div>
						</div>
					</div>
					<a class="imHidden" href="#imGoToCont" title="Заголовок главного меню">Перейти к контенту</a>
					<div id="imSideBarContainer">
						<div id="imSideBarGraphics"></div>
						<div id="imSideBar">
							<div id="imSideBarObjects"><div id="imSideBar_imObjectImage_01_wrapper" class="template-object-wrapper"><div id="imSideBar_imCell_1" class="" > <div id="imSideBar_imCellStyleGraphics_1"></div><div id="imSideBar_imCellStyle_1" ><img id="imSideBar_imObjectImage_01" src="images/empty-GT_imagea-1-.png" title="" alt="" /></div></div></div></div>
						</div>
					</div>
					<div id="imContentContainer">
						<div id="imContentGraphics"></div>
						<div id="imContent">
							<a id="imGoToCont"></a>
				<div id="imSearchPage">
				<h2 id="imPgTitle">Результаты поиска</h2>
				<?php
				$search = new imSearch();
				$keys = isset($_GET['search']) ? @htmlspecialchars($_GET['search']) : "";
				$page = isset($_GET['page']) ? @htmlspecialchars($_GET['page']) : 0;
				$type = isset($_GET['type']) ? @htmlspecialchars($_GET['type']) : "pages"; ?>
				<div class="searchPageContainer">
				<?php echo $search->search($keys, $page, $type); ?>
				</div>
				</div>
				
							<div class="imClear"></div>
						</div>
					</div>
					<div id="imFooter">
						<div id="imFooterObjects"><div id="imFooter_imTextObject_01_wrapper" class="template-object-wrapper"><div id="imFooter_imCell_1" class="" > <div id="imFooter_imCellStyleGraphics_1"></div><div id="imFooter_imCellStyle_1" ><div id="imFooter_imTextObject_01">
	<div class="text-tab-content"  id="imFooter_imTextObject_01_tab0" style="">
		<div class="text-inner">
			<div style="text-align: center;"><span class="fs11 cf1 ff1">2019, mrcat-pixel.com</span></div>
		</div>
	</div>

</div>
</div></div></div></div>
					</div>
				</div>
				<span class="imHidden"><a href="#imGoToCont" title="Прочесть эту страницу заново">Назад к содержимому</a></span>
			</div>
		</div>
		
		<noscript class="imNoScript"><div class="alert alert-red">Для использования этого сайта необходимо включить JavaScript.</div></noscript>
	</body>
</html>
