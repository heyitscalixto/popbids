<style>
ul.categories li{border:1px solid #ccc;border-radius:6px;box-shadow:0px 0px 5px #ccc;padding:20px 10px;width:250px;background:#fff;}
.title h3 a{color:#000;}
ul.horizontal-bid-list li{margin-right:19px;}
.bnrbg {
	background-color: #fff;
}
li.on_lang a{ color:#7c7c7c;}
.howit_step .step .label{left:0px;}


</style>

<?php

$ca = $this->params['action'];
$cc = $this->params['controller'];


if($cc == 'auctions' && $ca == 'home'){
	$class1 = 'act';
}
if($cc == 'auctions' && $ca == 'index'){
	$class1 = 'act';
}

if($cc == 'auctions' && $ca == 'winners'){
	$class2 = 'act';
}
if($cc == 'auctions' && $ca == 'closed'){
	$class2 = 'act';
}
if($this->params['url']['url'] == 'page/how-it-works'){
	$class3 = 'act';
	
}
if($this->params['url']['url'] == 'page/how-it-works'){
	$class7 = 'act';
	
}

if($this->params['url']['url'] == 'page/shirts'){
	$class10 = 'act';
	
}
if($this->params['url']['url'] == 'page/shirts'){
	$class11 = 'act';
	
}


if($cc == 'packages' && $ca == 'index'){
	$class4 = 'act';
}

if($cc == 'categories' && $ca == 'index'){
	$class5 = 'act';
}
if($this->params['url']['url'] == 'pages/wheel'){
	$class6 = 'act';
}

?>

<div class="tasktop_non top_lang" style="display:none!important;">
 

<li class="<?php if($_COOKIE['lang'] == 'eng'){ echo 'on_lang'; } ?>"><a  href="<?php echo $this->webroot; ?>?lang=eng">EN</a></li>
<li class="<?php if($_COOKIE['lang'] == 'spa'){ echo 'on_lang'; } ?>"><a  href="<?php echo $this->webroot; ?>?lang=spa">ES</a></li>

</div>




<a  onclick="document.getElementById('navigation').classList.toggle('closed');" class="nav-btn" href="javascript:void(0)">&nbsp;</a>
<ul id="navigation" class="slide_login closed">


<?php if($session->check('Auth.User')):?>
<li class="tasktop_non"><a style="font-family:'robotoslabregularcursor';" href="javascript:void:0px"><?php __('Lets get to Bidness') ?>, <?php echo $session->read('Auth.User.username'); ?></a></li>
<li class="tasktop_non" style="font-family:'robotoslabregular';color:#fff;font-size:20px;"><?php __('you have');?> <?php echo sprintf(__('%s bids left', true), '<strong class="bid-balance" style="color:#ff9100;">'.$bidBalance.'</strong>');?></li>  


<li class="tasktop_non"><a  href="<?php echo $this->webroot; ?>auctions/logout"><?php __('Logout');?></a></li>

<?php else:?>
<li class="tasktop_non"><a  href="<?php echo $this->webroot; ?>users/login"><?php __('Login');?></a></li>      
<li class="tasktop_non"><a  href="<?php echo $this->webroot; ?>users/register"><?php __('Register');?></a></li>  
<?php endif;?>


   
<li><a  href="<?php echo $this->webroot; ?>auctions" class="<?php echo $class1?>"><?php __('Live Auctions');?></a></li>      
<li><a  href="<?php echo $this->webroot; ?>auctions/closed" class="<?php echo $class2?>"><?php __('Closed Auctions');?></a></li>      
<li class="tasktop_non"><a href="<?php echo $this->webroot; ?>contact"><?php __('Contact Us');?></a></li>

<li class="dasktop_none"><a  href="<?php echo $this->webroot; ?>page/how-it-works" class="<?php echo $class3?>"><?php __('How It Works');?></a></li>  
<li class="mobile_none"><a  href="<?php echo $this->webroot; ?>page/how-it-works" class="<?php echo $class7?>"><?php __('How It Works');?></a></li>          

<li><a  href="<?php echo $this->webroot; ?>packages" class="<?php echo $class4?>"><?php __('Buy Bids');?></a></li>  
<li><a  href="<?php echo $this->webroot; ?>categories" class="<?php echo $class5?>"><?php __('Categories');?></a></li>  
<li style="display:none!important;"><a  href="<?php echo $this->webroot; ?>products"><?php __('Store');?></a></li>  
<li style="display:none;"><a  href="<?php echo $this->webroot; ?>pages/wheel" class="<?php echo $class6?>"><?php __('Wheel');?></a></li>  


<li class="dasktop_none"><a  href="<?php echo $this->webroot; ?>page/shirts" class="<?php echo $class10?>"><?php __('Shirts');?></a></li>  
<li class="mobile_none"><a  href="<?php echo $this->webroot; ?>page/shirts" class="<?php echo $class11?>"><?php __('Shirts');?></a></li>

<li class="dasktop_none"><a  href="<?php echo $this->webroot; ?>page/contact" class="<?php echo $class10?>"><?php __('Contact Us');?></a></li>  
<li class="mobile_none"><a  href="<?php echo $this->webroot; ?>page/contact" class="<?php echo $class11?>"><?php __('Contact Us');?></a></li>


 

     
</ul>



<script type="text/javascript">
$('.contact_slide').hover(function(){
	$('.slide_contact').slideToggle();
	
})

</script>

<script type="text/javascript">
$('.contact_slide').click(function(){
	$('.slide_contact').slideToggle();
	
})

</script>

<style>
.contactslide{
  position:absolute;
  top:168px;
  border:none;border-top:1px solid #fff;background:#294f8f;width:257px;margin:0;padding:13px;box-sizing:border-box;border-radius:0;font-size:20px;	
  border: 1px solid rgba(0,0,0,0.15);
  box-shadow: 0 6px 12px rgba(0,0,0,0.175);
	

	
	}  
}
</style>


