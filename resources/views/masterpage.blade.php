<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

    <!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>Go special</title>
	<meta name="description" content="Free Responsive Html5 Css3 Templates | zerotheme.com">
	<meta name="author" content="www.zerotheme.com">

    <!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- CSS
  ================================================== -->
  <link rel="stylesheet" href="css/zerogrid.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/menu.css">
	<link rel="stylesheet" href="css/lightbox.css">
	<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">


	<script src="js/jquery1111.min.js" type="text/javascript"></script>
	<script src="js/script.js"></script>

	<!--[if lt IE 8]>
       <div style=' clear: both; text-align:center; position: relative;'>
         <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
           <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
        </a>
      </div>
    <![endif]-->
    <!--[if lt IE 9]>
		<script src="js/html5.js"></script>
		<script src="js/css3-mediaqueries.js"></script>
	<![endif]-->

</head>
<body>
<div class="wrap-body">

<!--////////////////////////////////////Header-->
<header >
	<div class="zerogrid">
		<div class="wrap-header">
			<div class="logo t-center"><a href="index.html"><img src="images/logo.png" style="width: 35%; height: 35%"/></a></div>
			<div id='cssmenu' class="align-center">
				<ul>
				   <li class="active"><a href='/'><span>INICIO</span></a></li>
				   <li class='has-sub'><a href='#'><span>ARTE</span></a>
					  <ul>
						 <li><a href='/arte-handmade'><span>Handmade</span></a></li>
					  </ul>
				   </li>
           <li class='has-sub'><a href='#'><span>MUJER</span></a>
					  <ul>
						 <li><a href='#'><span>Accesorios</span></a></li>
             <li><a href='#'><span>Joyeria</span></a></li>
             <li><a href='#'><span>Zapatos</span></a></li>
					  </ul>
				   </li>
           <li class='has-sub'><a href='#'><span>HOMBRE</span></a>
					  <ul>
						 <li><a href='#'><span>Accesorios</span></a></li>
             <li><a href='#'><span>Herramientas</span></a></li>
             <li><a href='#'><span>Zapatos</span></a></li>
					  </ul>
				   </li>
           <li><a href='#'><span>TECNOLOGIA</span></a></li>
           <li class='has-sub'><a href='#'><span>EVENTOS</span></a>
					  <ul>
						 <li><a href='#'><span>Boda</span></a></li>
             <li><a href='#'><span>Cumpleaños</span></a></li>
             <li><a href='#'><span>Día de la madre</span></a></li>
             <li><a href='#'><span>Día del padre</span></a></li>
             <li><a href='#'><span>Día del niño</span></a></li>
             <li><a href='#'><span>Día del amor</span></a></li>
             <li><a href='#'><span>Navidad</span></a></li>
					  </ul>
				   </li>
				   <li><a href='#'><span>FAQ</span></a></li>
          @if(Session::get('actuales')!==null)
            <li class='last'><a href='/carrito'><span>Carrito ({{Session::get('actuales')}})</span></a></li>
          @else
            <li class='last'><a href='/carrito'><span>Carrito (0)</span></a></li>
          @endif
				</ul>
			</div>
		</div>
		<div style="margin-bottom: 30px;" >
			<img src="images/2.jpg" alt="banner">
		</div>
	</div>
</header>

<section id="container">
	<div class="wrap-container">
		@yield('area-carrito')
		<section class="content-box box-3 box-style-1"><!--Start Box-->
			<div class="zerogrid">
				<div class="row">
					<h2 class="header t-center">@yield('titulo-seccion')</h2>
					<div class="row">
						@yield('productos')
					</div>
				</div>
			</div>
		</section>

		<section class="content-box box-4 box-style-3"><!--Start Box-->
			<div class="zerogrid">
				<div class="row">
					<div class="col-1-2">
						<div class="wrap-col item">
							<h2 class="header">​​​​​​​​​Contáctanos</h2>
							<p>Universidad Rafael Landivar</p>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>
</section>
<footer>
	<div class="zerogrid">
		<div class="wrap-footer">
			<div class="row">
				<div class="col-1-2">
					<div class="wrap-col">
						<div class="copy-right">

						</div>
					</div>
				</div>
				<div class="col-1-2">
					<div class="wrap-col">
						<ul class="bottom-social f-right">
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
							<li><a href="#"><i class="fa fa-instagram"></i></a></li>
						</ul>
						<div class="clear"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>

<script src="js/lightbox-plus-jquery.min.js"></script>

<script type="text/javascript">
    $(function() {
		if ($.browser.msie && $.browser.version.substr(0,1)<7)
		{
		$('li').has('ul').mouseover(function(){
			$(this).children('ul').css('visibility','visible');
			}).mouseout(function(){
			$(this).children('ul').css('visibility','hidden');
			})
		}

		/* Mobile */
		$("#menu-trigger").on("click", function(){
			$("#menu").slideToggle();
		});

		// iPad
		var isiPad = navigator.userAgent.match(/iPad/i) != null;
		if (isiPad) $('#menu ul').addClass('no-transition');
    });
</script>


</div>
</body></html>
