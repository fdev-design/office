<?php
include('init.php');
$cp = 'contact.php';
$at = 'contact';



/* SEO RELATED DATA */
$meta['title'] = 'Oop! Page Not Found';
$meta['description'] = '';
$meta['keywords'] = '';
$meta['canonical'] = '';
$meta['image'] = '';

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php include("inc.htmlhead.php"); ?>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<body id="bg">
<div class="page-wraper">

    <!-- header -->
    <?php include("inc.header.php"); ?>
	<!-- header END -->
	
    <!-- Content -->
    <div class="page-content bg-white">
		
	<!-- inner page banner -->
        <div class="dlab-bnr-inr overlay-black-middle bg-pt" style="background-image:url(images/banners/contact.jpg);">
            <div class="container">
                <div class="dlab-bnr-inr-entry">
                    <h1 class="text-white">Page Not Found</h1>
					<!-- Breadcrumb row -->
					<div class="breadcrumb-row">
						<ul class="list-inline">
							<li><a href="index.php">Home</a></li>
							<li>404 Page Not Found</li>
						</ul>
					</div>
					<!-- Breadcrumb row END -->
                </div>
            </div>
        </div>
		<!-- inner page banner END -->
		
        <!-- contact area -->
        <div class="section-full content-inner bg-white contact-style-1">
			<div class="container">

            <h1>Oop! The page you are looking for doesn't exist. <br>Please click on the contact us tab to reach us!</h1>

               
            </div>
        </div>
        <!-- contact area  END -->
    </div>
	<!-- Content END-->
	
    <!-- Footer -->
    <?php include("inc.footer.php"); ?>
	<!-- Footer End -->
	
</div>
<?php include("inc.footerscripts.php"); ?>
 
</body>
</html>
