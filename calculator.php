<!DOCTYPE html>
<!--[if IE 8]><html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]>
<!--><html class="no-js" lang="en"><!--<![endif]-->
<head>

	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>Zen Home Cleaning</title>
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	
	<!-- CSS
  ================================================== -->
	<link rel="stylesheet" href="css/base.css"/>
	<link rel="stylesheet" href="css/skeleton.css"/>
	<link rel="stylesheet" href="css/layout.css"/>
	<link rel="stylesheet" href="css/font-awesome.css" />
	<link rel="stylesheet" href="css/colorbox.css"/>
	<link rel="stylesheet" href="css/retina.css"/>
    <link rel="stylesheet" type="text/css" href="css/colors/color-gold.css">
	<link rel="stylesheet" type="text/css" href="css/flaticon/flaticon.css">
		
	<!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="favicon.png">
	<link rel="apple-touch-icon" href="apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="apple-touch-icon-114x114.png">
	
</head>
<!-- <body class="royal_loader">	 -->
<body>	
	<section id="price-calculator">
		<div class="price-calculator-section" level='0'>
			<h4>Tipul construcției</h4>
			<label>
				<input type="radio" name="construction_type" value="house" data-ref-id="house-options"/>
				<span class="radio-label">Apartament / casă</span>
			</label>
			<label>
				<input type="radio" name="construction_type" value="office" data-ref-id="office-options"/>
				<span class="radio-label">Spațiu comercial / birou</span>
			</label>
			<label>
				<input type="radio" name="construction_type" value="stairs" data-ref-id="stairs-options"/>
				<span class="radio-label">Scări de bloc</span>
			</label>
		</div>

		<div id="house-options" class="price-calculator-section hideable" level='1'>
			<h4 class="subsection">Tipul curățeniei</h4>
			<p>Apartament / casă</p>
			<label>
				<input type="radio" name="house_cleaning_type"/>
				<span class="radio-label">Generală</span>
			</label>
			<label>
				<input type="radio" name="house_cleaning_type"/>
				<span class="radio-label">Întreținere</span>
			</label>
			<label>
				<input type="radio" name="house_cleaning_type"/>
				<span class="radio-label">După constructor</span>
			</label>
		</div>
		<div id="office-options" class="price-calculator-section hideable" level='1'>
			<h4 class="subsection">Tipul curățeniei</h4>
			<p>Spațiu comercial / birou</p>
			<label>
				<input type="radio" name="office_cleaning_type"/>
				<span class="radio-label">Generală</span>
			</label>
			<label>
				<input type="radio" name="office_cleaning_type"/>
				<span class="radio-label">Întreținere</span>
			</label>
			<label>
				<input type="radio" name="office_cleaning_type"/>
				<span class="radio-label">După constructor</span>
			</label>
		</div>
		<div id="stairs-options" class="price-calculator-section hideable" level='1'>
			<h4>Numărul de scări</h4>
			<p id="stair-price-per-mp"></p>
			<input type="range" id="number-of-stairs" min='0' max='100' step='1' value='0'
				oninput="handle_stairs();"/>
			<output id="number-of-stairs-value">0</output>
		</div>

		<div id="price-info" class="price-calculator-section" level='1'>
			<h4>Sumar</h4>
			<div id="summary-lines"></div>
			<div id="summary-total">
				<span class="summary-line-title">Total</span>
				<span class="summary-line-price" id="total-price">0</span>
			</div>
		</div>
	</div>

	<!-- JAVASCRIPT
    ================================================== -->
<script type="text/javascript" src="js/jquery.js"></script>	
<script type="text/javascript" src="js/modernizr.custom.js"></script> 
<!--<script type="text/javascript" src="js/royal_preloader.min.js"></script>
 <script type="text/javascript">
            Royal_Preloader.config({
                mode:           'text', // 'number', "text" or "logo"
                text:           'ZEN HOME CLEANING',
				timeout:        0,
                showInfo:       true,
                opacity:        1,
                background:     ['#000000']
            });
</script>	 -->
<script type="text/javascript" src="js/classie.js"></script>
<script type="text/javascript" src="js/cbpAnimatedHeader.min.js"></script>
<script type="text/javascript" src="js/styleswitcher.js"></script>
<script type="text/javascript" src="js/retina-1.1.0.min.js"></script>
<script type="text/javascript" src="js/flippy.js"></script>
<script type="text/javascript" src="js/jquery.easing.js"></script>
<script type="text/javascript" src="js/svganimations.js"></script>
<script type="text/javascript" src="js/jquery.bxslider.min.js"></script>
<script type="text/javascript" src="js/jquery.colorbox.js"></script> 
<script type="text/javascript" src="js/contact.js"></script>
<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
<script type="text/javascript" src="js/plugins.js"></script>
<script type="text/javascript" src="js/price-calculator.js"></script>
<script type="text/javascript" src="js/template.js"></script>
<!-- End Document
================================================== -->

</body>
</html>