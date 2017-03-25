<?php echo $javascript->link('slider_js/jquery.flow.1.0'); ?>
<script type="text/javascript">
$(document).ready(function(){

	$("#myController").jFlow({
		slides: "#mySlides",
		max-width: 100%,
    max-height:100%
		margin:0 auto,
    duration: 400,
	});
});


</script>

<div class="bnrbg">
     <div id="header_lower">
        <div class="slider-wrap">
          <div class="slider">
            <div id="mySlides">
				
				<div><img style="border-radius:15px" src="<?php echo $this->webroot; ?>img/slide2.png" alt="" /></div>
				<div><img style="border-radius:15px" src="<?php echo $this->webroot; ?>img/slide3.png" alt="" /></div>
           </div>
          </div>
        </div>
        <div class="slider_nav">
          <div class="slider_nav_left">
            <div id="myController"> 
            
            <span class="jFlowControl">&nbsp;</span> 
            <span class="jFlowControl">&nbsp;</span> 
            </div>
          </div>
        </div>
      </div>
  </div>

