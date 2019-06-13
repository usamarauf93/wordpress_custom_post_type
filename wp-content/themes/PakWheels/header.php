<!DOCTYPE html>
<html lang="en">
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <title>PakWheels</title>
	  <?php wp_head(); ?>
   </head>
   <body class=" bodyclass">
      <div class="header clearfix header--fixed animated headroom--not-bottom slideDown headroom--top" id="header">
         <div class="mini-nav clearfix">
            <a href="#" class="pull-left btn-mini-app" data-target="#download_apps" data-toggle="modal" onclick="trackEvents(&#39;User&#39;, &#39;FromHeader - AppInstallClicked&#39;, &#39;New Car - Version Specifications&#39;);"><i class="fa fa-mobile generic-red"></i> Download App via SMS</a>
            <ul class="list-unstyled pull-right signin mt5" style="margin-right: -5px;">
               <li><a href="#" rel="nofollow">Sign Up</a></li>
               <li><a href="#" rel="nofollow">Sign In</a></li>
            </ul>
         </div>
         <div class="main-nav clearfix">
            <div class="navbar-header">
               <a href="#" class="navbar-brand logo-white">
               <img alt="PakWheels.com" src="https://wsa3.pakwheels.com/assets/pw-logo-blue-045bd7916964149feb6a64a2cb13ea62.svg"
               </a>
               <a href="#" class="navbar-brand logo-blue">
               <img alt="PakWheels.com" src="https://wsa3.pakwheels.com/assets/pw-logo-blue-045bd7916964149feb6a64a2cb13ea62.svg"
               </a>
            </div>
            <ul class="nav navbar-nav navbar-right">
			
               <li class="dropdown">
                  <a href="#">
                  Used Cars <i class="fa fa-caret-down"></i>
                  </a>
                  <ul class="dropdown-menu mega-navbar columns-1">
                     <li class="clearfix">
                        <div class="col-md-12">
                           <ul class="list-unstyled">
                              <li>
                                 <a href="#" title="Used Cars Search">
                                    <i class="fa fa-search"></i>
                                    <strong>Find Used Cars</strong>
                                    <p>Find your dream car</p>
                                 </a>
                              </li>
                              <li>
                                 <a href="#" title="Cars Certified by PakWheels">
                                    <i class="fa fa-check-square-o"></i>
                                    <strong>PakWheels Certified Cars</strong>
                                    <p>Cars Certified by PakWheels</p>
                                 </a>
                              </li>
                              <li>
                                 <a href="#" onclick="trackEvents(&#39;CarSearch&#39;, &#39;From - SubTabs&#39;,&#39;Featured&#39;);" title="Featured Used Cars" rel="nofollow">
                                    <i class="fa fa-star"></i>
                                    <strong>Featured Used Cars</strong>
                                    <p>Browse all our featured cars</p>
                                 </a>
                              </li>
                              <li>
                                 <a href="#" title="Get Your Car Inspected by PakWheels Experts | PakWheels" onclick="trackEvents(&#39;CarSure&#39;, &#39;From - NavigationMenu&#39;,&#39;&#39;);">
                                    <i class="fa fa-thumbs-o-up"></i>
                                    <strong>PakWheels Car Inspection</strong>
                                    <p>Car Inspection by PakWheels </p>
                                 </a>
                              </li>
                              <li>
                                 <a href="#" title="Find suzuki certified cars">
                                    <i class="fa fa-certificate"></i>
                                    <strong>Suzuki Certified</strong>
                                    <p>Find suzuki certified cars</p>
                                 </a>
                              </li>
                              <li>
                                 <a href="#" title="Car Price Valuation" rel="nofollow">
                                    <i class="fa fa-bullseye"></i>
                                    <strong>Price Calculator</strong>
                                    <p>Find best price of a used car</p>
                                 </a>
                              </li>
                              <li>
                                 <a href="#" title="Sell Cars in Pakistan" onclick="trackEvents(&#39;Navigation&#39;, &#39;SubTabs - SellYourCar&#39;,&#39;Used Cars&#39;);">
                                    <i class="fa fa-tag"></i>
                                    <strong>Sell Your Car</strong>
                                    <p>Post a free ad and sell your car quickly</p>
                                 </a>
                              </li>
                              <li>
                                 <a href="#" title="Used Cars Dealers in Pakistan" onclick="trackEvents(&#39;Dealers&#39;, &#39;From - Navigation&#39;);">
                                    <i class="fa fa-book"></i>
                                    <strong>Used Car Dealers</strong>
                                    <p>Find used car dealers</p>
                                 </a>
                              </li>
                           </ul>
                        </div>
                     </li>
                  </ul>
               </li>
               <li class="active dropdown">
                  <a href="#" title="Research New Cars in Pakistan, Car Prices, Reviews and Comparisons">
                  New Cars <i class="fa fa-caret-down"></i>
                  </a>
                  <ul class="dropdown-menu mega-navbar columns-1">
                     <li class="clearfix">
                        <div class="col-md-12">
                           <ul class="list-unstyled">
                              <li>
                                 <a href="#" title="Research New Cars in Pakistan, Car Prices, Reviews and Comparisons">
                                    <i class="fa fa-search"></i>
                                    <strong>Find New Cars</strong>
                                    <p>See new cars in Pakistan</p>
                                 </a>
                              </li>
                              <li>
                                 <a href="#" title="Car Comparisons">
                                    <i class="fa fa-columns"></i>
                                    <strong>Car Comparisons</strong>
                                    <p>Compare cars and find their differences</p>
                                 </a>
                              </li>
                              <li>
                                 <a href="#" title="Reviews">
                                    <i class="fa fa-comments"></i>
                                    <strong>Reviews</strong>
                                    <p>Read reviews of all cars in Pakistan </p>
                                 </a>
                              </li>
                              <li>
                                 <a href="#" title="Car Prices in Pakistan">
                                    <i class="fa fa-tags"></i>
                                    <strong>Prices</strong>
                                    <p>See prices of new cars</p>
                                 </a>
                              </li>
                              <li>
                                 <a href="#" title="Get Instant On Road Price" onclick="trackEvents(&#39;OnRoadPrice&#39;, &#39;From - Navigation&#39;,&#39;&#39;);">
                                    <i class="fa fa-road"></i>
                                    <strong>On Road Price</strong>
                                    <p>Calculate the total cost of new car</p>
                                 </a>
                              </li>
                              <li>
                                 <a href="#" title="New Cars Dealers in Pakistan" onclick="trackEvents(&#39;Dealers&#39;, &#39;From - Navigation&#39;,&#39;new cars&#39;);">
                                    <i class="fa fa-book"></i>
                                    <strong>New Car Dealers</strong>
                                    <p>Find new car dealers</p>
                                 </a>
                              </li>
                           </ul>
                        </div>
                     </li>
                  </ul>
               </li>
               <li class="dropdown">
                  <a href="#" title="Bikes for sale in Pakistan">
                  Bikes <i class="fa fa-caret-down"></i>
                  </a>            
                  <ul class="dropdown-menu mega-navbar columns-2">
                     <li class="clearfix">
                        <div class="col-md-6">
                           <ul class="list-unstyled">
                              <li>
                                 <a href="#" title="Motorcycles for sale in Pakistan">
                                    <i class="fa fa-search"></i>
                                    <strong>Find Used Bikes</strong>
                                    <p>Find your dream bike</p>
                                 </a>
                              </li>
                              <li>
                                 <a href="#" title="Featured Used Bikes" rel="nofollow">
                                    <i class="fa fa-star"></i>
                                    <strong>Featured Used Bikes</strong>
                                    <p>Browse our featured bikes</p>
                                 </a>
                              </li>
                              <li>
                                 <a href="#" title="Sell Bikes in Pakistan" onclick="trackEvents(&#39;Navigation&#39;, &#39;Tabs - SellYourBike&#39;,&#39;&#39;);">
                                    <i class="fa fa-tag"></i>
                                    <strong>Sell Your Bike</strong>
                                    <p>Post a free ad and sell your bike quickly</p>
                                 </a>
                              </li>
                           </ul>
                        </div>
                        <div class="col-md-6">
                           <ul class="list-unstyled">
                              <li>
                                 <a href="#" title="Research New Bikes in Pakistan, Bike Prices, Reviews and Comparisons">
                                    <i class="fa fa-search"></i>
                                    <strong>Find New Bikes</strong>
                                    <p>See new bikes in Pakistan</p>
                                 </a>
                              </li>
                              <li>
                                 <a href="#" title="Bike Comparisons">
                                    <i class="fa fa-columns"></i>
                                    <strong>Bike Comparisons</strong>
                                    <p>Compare bikes and find their differences</p>
                                 </a>
                              </li>
                              <li>
                                 <a href="#" title="Bike Reviews">
                                    <i class="fa fa-comments"></i>
                                    <strong>Bike Reviews</strong>
                                    <p>Read reviews of all bikes in Pakistan</p>
                                 </a>
                              </li>
                              <li>
                                 <a href="#" title="Bike Prices in Pakistan">
                                    <i class="fa fa-tags"></i>
                                    <strong>New Bikes Prices</strong>
                                    <p>See prices of new bikes </p>
                                 </a>
                              </li>
                           </ul>
                        </div>
                     </li>
                  </ul>
               </li>
               <li class="dropdown">
                  <a href="#" title="Parts &amp; Accessories">
                  Auto Parts <i class="fa fa-caret-down"></i>
                  </a>          
                  <ul class="dropdown-menu mega-navbar columns-1">
                     <li class="clearfix">
                        <div class="col-md-12">
                           <ul class="list-unstyled">
                              <li>
                                 <a href="#" title="Buy Car Parts in Pakistan" onclick="trackEvents(&#39;AccessorySearch&#39;, &#39;From - NavigationShopNow&#39;,&#39;&#39;);">
                                    <i class="fa fa-shopping-cart"></i>
                                    <strong>Buy Now</strong>
                                    <p>Buy directly from PakWheels store</p>
                                 </a>
                              </li>
                              <li>
                                 <a href="#" title="Search Accessories">
                                    <i class="fa fa-search"></i>
                                    <strong>Find Auto Parts</strong>
                                    <p>Find new and used car parts</p>
                                 </a>
                              </li>
                              <li>
                                 <a href="#" title="Sell Your Accessory" onclick="trackEvents(&#39;Navigation&#39;, &#39;SubTabs - SellYourAccessory&#39;,&#39;Accessories&#39;);">
                                    <i class="fa fa-tag"></i>
                                    <strong>Sell Car Parts</strong>
                                    <p>Post a free ad and sell your car parts quickly</p>
                                 </a>
                              </li>
                           </ul>
                        </div>
                     </li>
                  </ul>
               </li>
               <li><a href="#" title="Discuss Automobiles in Pakistan">Forums</a></li>
               <li><a href="#" target="_blank" title="Read Pakistan Automotive News &amp; Blog">Blog</a></li>
               <li class="dropdown">
                  <a href="javascript:void">
                  More <i class="fa fa-caret-down"></i>
                  </a>
                  <ul class="dropdown-menu mega-navbar columns-1">
                     <li class="clearfix">
                        <div class="col-md-12">
                           <ul class="list-unstyled">
                              <li>
                                 <a href="#" title="Member Rides Cars &amp; Bikes">
                                    <i class="fa fa-thumbs-o-up"></i>
                                    <strong>Cool Rides</strong>
                                    <p>Member Rides Cars &amp; Bikes</p>
                                 </a>
                              </li>
                              <li>
                                 <a href="#" title="Get Authentic Auction Sheet">
                                    <i class="fa fa-file-text"></i>
                                    <strong>Auction Sheet Verification</strong>
                                    <p>Get Authentic Auction Sheet</p>
                                 </a>
                              </li>
                              <li>
                                 <a href="#" title="Car Import in Pakistan">
                                    <i class="fa fa-level-down"></i>
                                    <strong>Car Import</strong>
                                    <p>Import your favourite Car</p>
                                 </a>
                              </li>
                              <li>
                                 <a href="#" title="Car Insurance in Pakistan">
                                    <i class="fa fa-umbrella"></i>
                                    <strong>Insurance</strong>
                                    <p>Get car insurance quote</p>
                                 </a>
                              </li>
                              <li>
                                 <a href="#" title="Car Financing in Pakistan">
                                    <i class="fa fa-money"></i>
                                    <strong>Finance</strong>
                                    <p>Compare plans and apply for car loan</p>
                                 </a>
                              </li>
                              <li>
                                 <a href="#" title="Online Vehicle Verification">
                                    <i class="fa fa-check-circle-o"></i>
                                    <strong>MTMIS Pakistan</strong>
                                    <p>Online Vehicle Verification</p>
                                 </a>
                              </li>
                              <li>
                                 <a href="#" title="DLIMS - Driving License Verification Pakistan">
                                    <i class="fa fa-check-circle-o"></i>
                                    <strong>DLIMS Pakistan</strong>
                                    <p>Driving License Verification System</p>
                                 </a>
                              </li>
                           </ul>
                        </div>
                     </li>
                  </ul>
               </li>
               <li class="post-an-ads dropdown">
                  <a href="#" title="Post an Ad">
                  Post an Ad <i class="fa fa-caret-down"></i>
                  </a>            
                  <ul class="dropdown-menu">
                     <li>
                        <a href="#" title="Sell Cars in Pakistan" onclick="trackEvents(&#39;Navigation&#39;, &#39;Tabs - SellYourCar&#39;,&#39;&#39;);">
                        <strong>Sell Car</strong>
                        </a>
                     </li>
                     <li>
                        <a href="#" title="Sell Bikes in Pakistan" onclick="trackEvents(&#39;Navigation&#39;, &#39;Tabs - SellYourBike&#39;,&#39;&#39;);">
                        <strong>Sell Bike</strong>
                        </a>
                     </li>
                     <li>
                        <a href="#" title="Sell Your Accessory" onclick="trackEvents(&#39;Navigation&#39;, &#39;SubTabs - SellYourAccessory&#39;,&#39;Accessories&#39;);">
                        <strong>Sell Accessory</strong>
                        </a>
                     </li>
                  </ul>
               </li>
            </ul>
         </div>
      </div>
    <div class="header-space"></div>
	  
	 