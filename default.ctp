<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="<?php echo $dir;?>">
<head>
	<?php echo $html->charset(); ?>
	<title>
		<?php echo $title_for_layout; ?> | <?php echo $appConfigurations['name']; ?></title>
	<link rel="alternate" type="application/rss+xml" href="/auctions/index.rss" title="<?php __('Live Auctions');?>">
	<link rel="shortcut icon" type="image/x-icon" href="/img/fav-icon2.png" />
 <meta name="viewport" content="width=device-width,initial-scale=1">    
	<?php
		if(!empty($meta_description)) :
			echo $html->meta('description', $meta_description);
		endif;
		if(!empty($meta_keywords)) :
			echo $html->meta('keywords', $meta_keywords);
		endif;
		echo $html->css('style11');	 


		echo $javascript->link('jquery/jquery');
		echo $javascript->link('jquery/ui');
	?>
	<script type="text/javascript" src="<?php echo $this->webroot ?>auctionjs.php"></script>

	<?php

		echo $scripts_for_layout;
	?>
	 
<!--Set page name and Username-->
<script type="text/javascript">
	var page_name = 'home'; 
	var uname = ''; 
	var uid = ''; 
	</script> 

	<script type="text/javascript">
	<!--
	// page_top_scroll
	$(function () {
        $('#link_to_top').click(function () {
            $(this).blur();

            $('html,body').animate({ scrollTop: 0 }, 'normal');
            return false;
        });
	});
	-->
	</script>

	<?php eval(AddonManager::hook('views_layouts_headbottom')); ?>
    
    

   
<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
document,'script','https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '1084730418308666');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=1084730418308666&ev=PageView&noscript=1"
/></noscript>
<!-- DO NOT MODIFY -->
<!-- End Facebook Pixel Code -->


</head>
<body style="overflow-x:hidden;">
<!--[if lte IE 6]>
<?= $javascript->link('ie6/warning'); ?><script>window.onload=function(){e("<?= $this->webroot ?>/js/ie6/")}</script>
<![endif]-->
<div class="clock_poup">
<?php #echo $this->element('promotional_popup');?>
</div>


<script type="text/javascript">
$("body").click(function(){
        $(".clock_poup").fadeOut().removeClass('popubg');
    
});
</script>

<!-- Header and Navigation Info -->
<div class="fix_header">
<div id="header">
<div class="doc_width">
<div class="logo"><a href="<?php echo $this->webroot; ?>"><img src="<?php echo $this->webroot;?>img/logo/logo.png"/></a></div> 
<div class="header_right"> 	
<div class="login_menu">


	<?php echo $this->element('menu_top');?>

<?php if($session->check('Auth.User')):
 echo $this->element('status');
   endif;?>

</div>

 </div>
 
</div> 
</div>
<div class="main_menu">
<div class="doc_width">
<?php echo $this->element('header_menu');?>
</div>
</div>
</div>

<?php if($this->params['action'] == 'home'){  
   echo $this->element('home_banner'); 
} ?>

<!-- Highlights Section -->

<br style="clear:both;" />

<?php 
if($this->params['action'] == 'home'){  
	echo $this->element('step');  
} 
?>
<br style="clear:both;" />
<!--Pricing Section-->




<?php 
if($this->params['action'] == 'home'){  
	echo $this->element('pricing');  
} 
?>




<div id="container">
<div id="maincontent">


		<?php
			if($session->check('Message.flash')){
				$session->flash();
			} elseif(isset($_COOKIE['reg_complete']) && $_COOKIE['reg_complete']) {
                echo "<div id=\"flashMessage\" class=\"success\">Thank you for registering. An email has been sent with a link to complete your registration. Please check your email inbox and click the confirmation link inside. Please check your SPAM folders if the email does not arrive within five minutes.</div>";
                setcookie ("reg_complete", "", time() - 3600);
            }

			if($session->check('Message.auth')){
				$session->flash('auth');
			}
		?>
		<?php echo $content_for_layout; ?>
	</div>
    
</div>


	



<br style="clear:both;" /> 

<!-- Footer Menu -->

<div class="footer_logo" style="display:none;">
<div class="doc_width">

<p><img src="<?php echo $this->webroot; ?>img/payment_logo.jpg" alt="" width="auto" height="100%" /></p>
</div>
</div>

<div class="footerbg"><?php   echo $this->element('footer');?></div>
<?php echo $cakeDebug; ?>

 
</body>
</html>