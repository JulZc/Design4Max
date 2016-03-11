<!Doctype html>
<html>
	<head>
		<title>JS Tutorials</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		
       <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		
		<!--[if IE]>
			<link href="./stylesheets/ie.css" media="screen, projection" rel="stylesheet" type="text/css" />
		<![endif]-->

		<link href="./stylesheets/screen.css" media="screen, projection" rel="stylesheet" type="text/css" />
		<link href="./stylesheets/print.css" media="print" rel="stylesheet" type="text/css" />		
		
		<link href="./img/favico.ico" rel="icon" type="image/png">
		
		<script src="./js/main.js"></script>
		<script src="./js/eventHandler.js"></script>
	</head>


	<body><div class="wrapper">
		<header>
			<div id="header">
				Max Development
			</div>
		</header>
		
		<div id="nav" class="footer-header">
			<div id="fadeinMenue" onClick="fadeinMenue()"><div id="menue-icon"></div></div>
		</div>
		
		<aside class="aside aside-1">		
			 <!--div class="uebersicht"-->
				<?PHP	include("./include/navs/navJS.txt")?>
			<!--/div-->
		</aside>		
		

		
		<article class="main">
			<div class="tutorial"><a id="tutorial-1"></a>
				<div class="description">
					<?PHP	include("./include/description/des1.txt");  ?>
				</div>
				
				<div class="flexparent">
					<div class="solvation">
						<?PHP include "./include/solvation/solv1.txt";	?>
					</div>
					
					
					<div class="sourcecode">
						<?PHP	include "./include/sourcecode/sc1.txt";  ?>
					</div> 						
				</div>
			</div>			
		</article>	
		
		<footer class="footer footer-header">Footer</footer>
		
		<script>
			window.addEventListener( 'resize', onWindowResize, false );
		</script>
	</div></body>
</html>