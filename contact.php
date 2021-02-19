<?php
include('init.php');
include("includes/functions.php"); 
$cp = 'contact.php';
$at = 'contact';


$submit_from = 'enquiry@primetubeimpex.com';
$submit_to = 'sales@primetubeimpex.com';   

$error = '';
$alert = '';
$success = 0;

// SITE KEY:  6LeqN9gZAAAAAG5ijKcczoapkZn_C7TDNeaU3Kj8
// SERVER KEY: 6LeqN9gZAAAAAKTD0LGLREmHtdN4eAMk3rJ029C5

if(isset($_POST['company_name']))
{
    $process = 1;
    
    if ( validate($_POST['company_name'], 'chars')==0 ) {
        $process=0; $error.="* Please enter your company name <br />";  
    } 
    if ( validate($_POST['name'], 'chars')==0 ) {
        $process=0; $error.="* Please enter your name <br />";  
    }   
    if ( validate($_POST['email'], 'email')==0 ) {
        $process=0; $error.="* Please enter a valid email <br />";  
    }
   
    
   $captcha=$_POST['g-recaptcha-response'];
   $ip = $_SERVER['REMOTE_ADDR'];
   $secretkey = "6LeqN9gZAAAAAKTD0LGLREmHtdN4eAMk3rJ029C5";         
   $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$secretkey."&response=".$captcha."&remoteip=".$ip);
   $responseKeys = json_decode($response,true);      
   
   

    if(intval($responseKeys["success"]) !== 1) {
        $process = 0;$error.="* Invalid Captcha. <br>";
    }  
       
   
    
    if($process)
    {
        
            
        $body = '<div style="width:100%; margin:0 auto;">
<table border="0" align="center" cellspacing="0" cellpadding="5" style="width:600px; background:#FFFFFF; border:1px solid #CCCCCC;">
  <tbody>
    <tr>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td style="font: 11px/1.35em Verdana, Arial, Helvetica, sans-serif; text-align: left;">
        <p>A new enquiry/message has been submitted by <strong>'.$_POST['name'].'</strong> from enquiry page on website. The details are as below:</p>
        <div style="border: 1px solid #BEBCB7; padding: 13px 18px; background: #F8F7F5; margin:auto 10px;">
          <table width="100%" border="0" cellspacing="5" cellpadding="1">
            <tr>
              <td width="24%"><div align="right"><strong>Company:</strong></div></td>
              <td width="76%">'.$_POST['company_name'].'</td>
            </tr>
            <tr>
              <td><div align="right"><strong>Name:</strong></div></td>
              <td>'.$_POST['name'].'</td>
            </tr>           
            <tr>
              <td><div align="right"><strong>Email:</strong></div></td>
              <td>'.$_POST['email'].'</td>
            </tr>
            <tr>
              <td><div align="right"><strong>Phone:</strong></div></td>
              <td>'.$_POST['phone'].'</td>
            </tr>
            <tr>
              <td><div align="right"><strong>Message:</strong></div></td>
              <td>'.nl2br($_POST['message']).'</td>
            </tr>
          </table>
        </div>
      </td>
    </tr>
    <tr>
      <td style="font: 11px/1.35em Verdana, Arial, Helvetica, sans-serif; text-align: left;"><div style="font: 11px/1.35em Verdana, Arial, Helvetica, sans-serif; text-align: center; font-style:italic;">The form is submitted from IP Address: '.$_SERVER['REMOTE_ADDR'].'  
      </div></td>
    </tr>
  </tbody>
</table>
</div>';

            
        
        require_once('includes/phpmail/class.phpmailer.php');
        $mail = new PHPMailer();        
        $mail->SetFrom($submit_from, 'primetubeimpex.com - Enquiry');
        $mail->AddReplyTo($_POST['email'], $_POST['name']);

            
        $mail->AddAddress($submit_to, "primetubeimpex.com");       
        $mail->AddBcc("vinod@iws.bz", "primetubeimpex.com");

        $mail->Subject    = "New Enquiry/Message from primetubeimpex.com user - ".$_POST['name']." ";
        $mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; 

        $mail->MsgHTML($body);

        
        if(!$mail->Send()) 
        {
          $error = "Technical Error: Unable to send";
                    
        } else 
        {
           $success =1; 
        }

    }
}


/* SEO RELATED DATA */
$meta['title'] = 'Contact Prime Tube Impex';
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
                    <h1 class="text-white">Contact Us</h1>
					<!-- Breadcrumb row -->
					<div class="breadcrumb-row">
						<ul class="list-inline">
							<li><a href="index.php">Home</a></li>
							<li>Contact Us</li>
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
                <div class="row">
					<!-- right part start -->
                    <div class="col-lg-4 col-md-6 d-flex m-b30">
                        <div class="p-a30 border contact-area border-1 align-self-stretch radius-sm">
							<h3 class="m-b5">Our Offices</h3>
							<p> </p>
                            <ul class="no-margin">
                                <li class="icon-bx-wraper left m-b30">
                                    <div class="icon-bx-xs border-1"> <a href="javascript:void(0);" class="icon-cell"><i class="ti-location-pin"></i></a> </div>
                                    <div class="icon-content">
                                        <h6 class="text-uppercase m-tb0 dlab-tilte">Head Office:</h6>
                                        <p>Prime Tube Impex<br>35/43, Sonarika Building, Chandawadi, Opp.2nd Carpenter Street, Nanubhai Desai Road, Mumbai- 400 004 (India)</p>
                                    </div>
								</li>
								
								<li class="icon-bx-wraper left m-b30">
                                    <div class="icon-bx-xs border-1"> <a href="javascript:void(0);" class="icon-cell"><i class="ti-location-pin"></i></a> </div>
                                    <div class="icon-content">
                                        <h6 class="text-uppercase m-tb0 dlab-tilte">Key Contact:</h6>
                                        <p>Mr. Dilip Jain  <br>+91-9819514108</p>
                                    </div>
                                </li>                                
                            </ul>
							
                        </div>
                    </div>
					<!-- right part END -->
					
					<!-- right part start -->
                    <div class="col-lg-4 col-md-6 d-flex m-b30">
                        <div class="p-a30 border contact-area border-1 align-self-stretch radius-sm">
							<h3 class="m-b5">Quick Contact</h3>
							<p>If you have any questions simply use the following contact details.</p>
                            <ul class="no-margin">                               


                                <li class="icon-bx-wraper left  m-b30">
                                    <div class="icon-bx-xs border-1"> <a href="javascript:void(0);" class="icon-cell"><i class="ti-email"></i></a> </div>
                                    <div class="icon-content">
                                        <h6 class="text-uppercase m-tb0 dlab-tilte">Email:</h6>
                                        <p>	sales@primetubeimpex.com<br>info@primetubeimpex.com</p>
                                    </div>
                                </li>
                                <li class="icon-bx-wraper left m-b30">
                                    <div class="icon-bx-xs border-1"> <a href="javascript:void(0);" class="icon-cell"><i class="ti-mobile"></i></a> </div>
                                    <div class="icon-content">
                                        <h6 class="text-uppercase m-tb0 dlab-tilte">PHONE</h6>
										<p>+91 22 66151931<br>
										+91 22 66151932
									</p>
                                    </div>
                                </li>
                                <li class="icon-bx-wraper left">
                                    <div class="icon-bx-xs border-1"> <a href="javascript:void(0);" class="icon-cell"><i class="ti-comment"></i></a> </div>
                                    <div class="icon-content">
                                        <h6 class="text-uppercase m-tb0 dlab-tilte">WHATSAPP</h6>
										<p>+91-9819514108</p>
                                    </div>
                                </li>
                            </ul>
							<div class="m-t20">
								<ul class="dlab-social-icon border dlab-social-icon-lg">
                                <li><a href="javascript:void(0);" class="site-button facebook circle"><i class="fa fa-facebook"></i></a></li>
								<li><a href="https://api.whatsapp.com/send?phone=919819514108&text=Hi%20Prime%20Tubes%20Impex%2C%20I%20want%20to%20inquire%20about%20%0A" class="site-button whatsapp circle"><i class="fa fa-whatsapp"></i></a></li>
								<li><a href="javascript:void(0);" class="site-button linkedin circle"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="javascript:void(0);" class="site-button instagram circle"><i class="fa fa-instagram"></i></a></li>
								<li><a href="javascript:void(0);" class="site-button twitter circle"><i class="fa fa-twitter"></i></a></li>
								</ul>
							</div>
                        </div>
                    </div>
                    <!-- right part END -->	

                    <!-- Left part start -->
                    <div class="col-lg-4 col-md-6  mb-4 m-b30 mb-md-0">
                        <div class="p-a30 bg-gray clearfix radius-sm">
							<h3 class="m-b10">Send Your Enquiry</h3>

                            <?php if($error != '') { ?>
								<div class="alert-danger alert alert-dismissible fade show" role="alert">
									  <?php echo $error; ?>									
									  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
									    <span aria-hidden="true">&times;</span>
									  </button>
								</div>
                            <?php } ?>


                            <?php if($success) {  ?>
                                    <div class="alert alert-success" role="alert">
                                    <h4>Thank you for your enquiry!</h4>
                                    <p>We have received your message and would like to thank you for writing to us. We will get back to you soon!</p>
                                    </div>
                            <?php } ?>

							
							<form method="post" class="dzForm3" action="">							
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <input name="name" type="text" required class="form-control" placeholder="Your Name">
                                            </div>
                                        </div>
									</div>
									<div class="col-lg-12">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <input name="company_name" type="text" required class="form-control" placeholder="Your Company Name">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <div class="input-group"> 
											    <input name="email" type="email" class="form-control" required  placeholder="Your Email Id" >
                                            </div>
                                        </div>
									</div>
									<div class="col-lg-12">
                                        <div class="form-group">
                                            <div class="input-group"> 
											    <input name="phone" type="text" class="form-control" required  placeholder="Your Phone Number" >
                                            </div>
                                        </div>
                                    </div>
                                     <div class="col-lg-12">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <textarea name="message" rows="4" class="form-control" required placeholder="Enter your Requirement"></textarea>
                                            </div>
                                        </div>
                                    </div>
									
                                    <div class="col-lg-12 col-md-12">
									<div class="form-group">
										<div class="input-group">
											<div class="g-recaptcha" data-sitekey="6LeqN9gZAAAAAG5ijKcczoapkZn_C7TDNeaU3Kj8"></div>
										</div>
									</div>
								</div>
                                    <div class="col-lg-12">
                                        <button name="submit" type="submit" value="Submit" class="site-button "> <span>Submit</span> </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- Left part END -->
                    <?php /* ?>
					<div class="col-lg-12 d-flex m-b30">
						<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15093.762597434355!2d72.8264731!3d18.9561371!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xf5c783396c9a6129!2sD.M.%20Metalloys%20Pvt.%20Ltd.!5e0!3m2!1sen!2sin!4v1598860049034!5m2!1sen!2sin" class="align-self-stretch radius-sm" style="border:0; width:100%; height:400px;" allowfullscreen></iframe>
                    </div>
                    <?php */ ?>
                    
                </div>
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
