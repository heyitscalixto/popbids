<title>CSS Price Table</title>
  
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  
      <style>
      /* NOTE: The styles were added inline because Prefixfree needs access to your styles and they must be inlined if they are on local disk! */
      @import url(http://fonts.googleapis.com/css?family=Open+Sans:400,600);
*,
*:before,
*:after {
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  -moz-transition: color 0.3s ease-in-out, background 0.3s ease-in-out;
  -o-transition: color 0.3s ease-in-out, background 0.3s ease-in-out;
  -webkit-transition: color 0.3s ease-in-out, background 0.3s ease-in-out;
  transition: color 0.3s ease-in-out, background 0.3s ease-in-out;
}

h4 {
    margin: .25em 0 0;
  font-size: 170%;
  font-weight: normal;
}

/*Bootstrap CSS*/
#pbcontainer {
    float:left;
  padding-right: 15px;
  padding-left: 15px;
  margin-right: auto;
  margin-left: auto;
}
@media (min-width: 768px) {
  .container {
    width: 750px;
  }
}
@media (min-width: 992px) {
  .container {
    width: 970px;
  }
}
@media (min-width: 1200px) {
  .container {
    width: 1170px;
  }
}

#pbcontainer-fluid {
  padding-right: 15px;
  padding-left: 15px;
  margin-right: auto;
  margin-left: auto;
}

.pbfrontpageicons {
    transition: all .2s ease-in-out;
    height:150px;
    width:150px;
}
.pbfrontpageicons:hover {
    height:150px;
    width:150px;
    background: #fff;
    -webkit-transform: scale(1.1);
    -ms-transform: scale(1.1);
    transform: scale(1.1);

}

.promos {
  max-width: 1140px;
  margin-top:15px;
  margin-bottom: 15px;
  padding-bottom: 20px;
}

.promo {
  margin: 1em .5em 1.625em;
  padding: .25em 0 2em;
  background: #fff;
  font-family: 'Open Sans', sans-serif;
  font-weight: 400;
  line-height: 1.625;
  color: #ff9100;
  padding-bottom: 15px;
  text-align: center;
}
@media (min-width: 40em) {
  .promo {
    display: inline;
    float: left;
    width: 33.333%;
    margin: 1em 0 0;
  }
  .promo.first {
    border-right: none;
  }
  .promo.second {
    float: right;
    border-left: none;
  }
}
.promo h4 {
  margin: .25em 0 0;
  font-size: 200%;
  font-weight: normal;
}
.promo .features {
  margin: 0;
  padding: 0;
  list-style-type: none;
  color: #999999;
}
.promo li {
  padding: .25em 0;
}
.promo .brief {
  color: #ff9100;
}
.promo .price {
  margin: .5em 0;
  padding: .25em 0;
  background: #292b2e;
  font-size: 250%;
  color: #f9f9f9;
}
.promo .buy {
  margin: 1em 0 0;
}
.promo button {
  padding: 1em 3.25em;
  border: none;
  border-radius: 40px;
  background: #292b2e;
  color: #f9f9f9;
  cursor: pointer;
}
.promo button:hover {
  background: #27282b;
}

.scale button {
  background: #ff9100;
}
.scale button:hover {
  background: #4e8d88;
}
@media (min-width: 40em) {
  .scale {
    transform: scale(1.2);
    box-shadow: 0 0 4px 1px rgba(20, 20, 20, 0.8);
  }
  .scale .price {
    color: #ff9100;
  }
}

    </style>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>

</head>

<div class="step_titel step_titel_step">
<div class="doc_width">
<h1 style="padding:5%; margin: .25em 0 0;font-size: 200%; font-weight: normal;">Pricing</h1>

        <div class="promos"> 
                
                <div class="promo first">
                    <h4>Basic</h4>
                    <ul class="features">
                        <li class="brief">For Starters</li>
                        <li class="price">$15</span></li>
                        <li>15 Bids</li>
                        <li class="buy"><button>Buy Bids</button></li>   
                    </ul>
                </div>
                    
                <div class="promo second">
                    <h4>The Bidness</h4>
                    <ul class="features">
                        <li class="brief">For Collectors</li>
                        <li class="price">$40</li>
                        <li>50 Bids!</li>

                        <li class="buy"><button>Buy Bids</button></li>  
                    </ul>
                </div>

                <div class="promo third scale">
                    <h4>Pro</h4>
                    <ul class="features">
                        <li class="brief">The best value</li>
                        <li class="price">$25</li>
                        <li>30 bids</li> 
                        <li class="buy"><button>Buy Bids</button></li> 
                    </ul>
                </div>  
        </div>
</div>
</div>  
  
    <script src="js/index.js"></script>

</div>
</div>
