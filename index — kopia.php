<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> Strona internetowa </title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" media="screen" href="https://fontlibrary.org/face/now" type="text/css"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="apple-touch-icon" sizes="57x57" href="icon/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="icon/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="icon/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="icon/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="icon/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="icon/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="icon/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="icon/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="icon/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="icon/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="icon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="icon/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="icon/favicon-16x16.png">
	<link rel="manifest" href="icon/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="icon/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">
</head>
<body>
	<div class="menu"> 
		<img src="images/logo_menu.png" alt="Logo firmy w menu">
		<div class="menu-right" id="myTopnav">
					<a href="#kimjestesmy-tlo"  class="menu-content">Kim jesteśmy?</a>
					<a href="#oferta-tlo"  class="menu-content">Oferta</a>
					<a href="#formularz-tlo"  class="menu-content">Kontakt</a>
					<a href="javascript:void(0);" class="icon">
						<i class="fa fa-bars"></i>
					</a>
			</div>
		</div>
	<div id="baner-tlo">
		<img src="images/logo.png" alt="Logo firmy jakiejś tam">

		<div class="baner-tekst"> 
		<span>Nulla vehicula tempus <br> arcu eget laoreet</span>
		</div> 
	</div>
	<div id="kimjestesmy-tlo">
		<div class="kimjestesmy-tekst">
			<h1>Kim jesteśmy? </h1>  <span>Etiam egestas in orci efficitur ultricies. Aliquam nec est sit amet turpis finibus sagittis. Morbi efficitur et justo id consequat. Nullam in neque hendrerit nisl lacinia tristique quis ut dolor.</span> 
		</div>
	</div>
	<div id="oferta-tlo">
		<div class="oferta"> 
			<div class="oferta-tekst-lewo">
				<div class="oferta-tekst-tekst">
				Integer euismod 
				pellentesque massa. 
				Aliquam et ante est. 
				Integer euismod 
				pellentesque massa.  
				Aliquam et ante est. 
			</div>
			</div>
			<div class="oferta-tekst-prawo">
				<ul>
				<li>auris sed diam et nisi efficitur venenatis.</li>
				<li>molestie lorem. Integer at arcu dolor </li>
				<li>gestas la vehicula tempus arcu eget laoreet. <br>    	  
				Fusce blandi</li>
				</ul>
			</div>
		</div>
	</div>
	<div id="formularz-tlo">
			<div class="formularz-tekst">
				
				<p>Lorem ipsum dolor sit amet, consectetur?</p>
				
				<span>Morbi eget luctus felis. <br>
				Praesent non laoreet tortor.</span>
				
			</div>
			<div class="formularz">
				<form  action="#" method="POST" >
					<div class="row">
						<div class="col-25">
							
						</div>
						<div class="col-75">
								<div class="error" id="error1">Pole poniżej jest wymagane.</div>
							<input type="text" id="form_imie" name="imie" placeholder="Wpisz imię i nazwisko" >
						</div>
					</div>
					<div class="row">
						<div class="col-25">
							
						</div>
						<div class="col-75">
								<div class="error" id="error2">Pole poniżej jest wymagane.</div>
							<input type="text" id="form_email" name="email" placeholder="Wpisz swój e-mail">
						</div>
					</div>
					<div class="row">
						<input type="submit" value="WYŚLIJ">
					</div>
					</form>
					<div class="row">
						<div class="col-25">
						</div>
						<div class="col-75">
							<span>* klikając WYŚLIJ zgadzam się z notą prawną </span>
						</div>
					</div>
		</div>
	</div>
	<script src="jquery.js"></script>
	<script src="js.js"></script>
</body>
</html>