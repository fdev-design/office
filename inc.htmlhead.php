    <title><?php echo $meta['title']; ?></title>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="<?php echo $meta['description']; ?>" />
	<meta name="keywords" content="<?php echo $meta['keywords']; ?>" />
	<meta name="author" content="Prime Tube Impex" />
	<meta name="robots" content="index,follow" />
	
	<meta property="og:title" content="<?php echo $meta['title']; ?>" />
	<meta property="og:description" content="<?php echo $meta['description']; ?>" />
	<meta property="og:image" content="<?php echo $meta['image']; ?>" />
	<meta name="format-detection" content="telephone=no">

	<?php if($meta['canonical'] !='') { ?>
	<link rel="canonical" href="<?php echo $meta['canonical']; ?>" />
	<?php } ?>
	
	<!-- FAVICONS ICON -->
	<link rel="icon" href="images/favicon.ico" type="image/x-icon" />
	<link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />
	
	
	<!-- MOBILE SPECIFIC -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!--[if lt IE 9]>
	<script src="js/html5shiv.min.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
	
	<!-- STYLESHEETS -->
	<link rel="stylesheet" type="text/css" href="css/plugins.css">
	<link rel="stylesheet" type="text/css" href="css/style.css?v=25">
	<link class="skin" rel="stylesheet" type="text/css" href="css/skin/skin-2.min.css">
	<link rel="stylesheet" type="text/css" href="css/templete.css">
	<link rel="stylesheet" type="text/css" href="css/cus.css">

	<!-- Google Font -->
	<style>
	@import url('https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i|Playfair+Display:400,400i,700,700i,900,900i|Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i|Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap');
	</style>
	
	<!-- REVOLUTION SLIDER CSS -->
    <script src="js/jquery.min.js"></script><!-- JQUERY.MIN JS -->

	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-ZKNG27CYMG"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-ZKNG27CYMG');
</script>
