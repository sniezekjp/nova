<?php
    //Template Name: Test
?>
<?php get_header(); ?>

<body onLoad="initialize()">
    <div id="texture">
        <!-- start HEADER -->
        <section id="top" class="page-block">
          <header id="home">
            <div class="container clearfix">
              <div class="navigation">
                <div class="row">
                  <div class="col-md-2 col-sm-3">
                   <!--  <h1 class="logo"><a href="index.html" title="Primo">NOVA Challenge</a></h1> -->
                  </div>
                  <div class="col-md-10 col-sm-9"> 
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar navbar-default navbar-header" role="navigation">
                      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#Navigation"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                    </div>
                    <nav>
                      <ul id="Navigation" class="list-inline collapse navbar-collapse">
                        <li><a href="#intro" title="About">About</a></li>
                        <li><a href="#schedule" title="Details">Details</a></li>
                        <li><a href="#partners" title="Partners">Sponsors</a></li>
                        <li><a href="#venue" title="Venue">Venue</a></li>
                      </ul>
                    </nav>
                  </div>
                  <!-- end col-md-10 --> 
                </div>
                <!--end-row--> 
              </div>
              <!-- end navigation --> 
            </div>
            <!-- end container --> 
          </header>
          
        </section>
        <!-- end HEADER -->
         
        <!--BEGIN-INTRO-BOX-->
        <section id="main" class="page-block">
          <div class="container">
            	<header class="clearfix">
                  		<div class="text-center">
                            <div class="venue">
                            	
                              <h1>NOVA Challenge<br><small>On March 23, 2014</small></h1>
                              
                              <h2>Centreville High School</h2>
                              	<p class="text-muted">6001 Union Mill Rd, Clifton, VA 20124</p>
        
                              <div class="row text-center">
                                 <img class="logo" src="<?php echo get_template_directory_uri(). '/img/logo-white.png'; ?>" alt="" width="auto" height="250px" />
                              </div> 
                            
                            </div>
                            <!-- <div class="countdown styled"></div> -->
                    	</div>
              </header>
           </div>
        </section>

    
<?php 
    if( have_posts() ): while( have_posts() ) : the_post(); 
        the_content();
    endwhile; endif;     
?>


<!--BEGIN-PARTNERS-->
<section id="partners" class="page-block">
  <div class="container">
    <div class="section">
      <header class="page-head">
        <h2>Sponsors</h2>
        <p class="text-muted">A big thanks to all our Sponsors!</p>
      </header>
      <article>
      </article>
      <div class="partner clearfix"> 
        
        <a href="http://evolutionbasketball.com" title="Evolution Basketball Training"> <img class="img-responsive evolution" src="<?php echo get_template_directory_uri(); ?>/img/partners/evolution.jpg" alt="Partner Brand" /> </a>        
      
      	<a href="http://novacavaliers.com" title="NOVA Cavaliers"> <img class="img-responsive cavs" src="<?php echo get_template_directory_uri(); ?>/img/partners/novacavs.png" alt="Partner Brand" /> </a> 
       
        <a href="http://blueridgebasketballcamp.com" title="Blue Ridge Basketball Camp"> <img class="img-responsive blue-ridge" src="<?php echo get_template_directory_uri(); ?>/img/partners/blueridge.png" alt="Partner Brand" /> </a>  
       
        <a href="http://marlowsports.com" title="Marlow Sports"> <img class="img-responsive marlow" src="<?php echo get_template_directory_uri(); ?>/img/partners/marlow.png" alt="Partner Brand" /> </a>               
     </div>
    </div>
  </div>
</section>
<!--END-PARTNERS--> 



<!--BEGIN-VENUE-->
<section id="venue" class="page-block">
  <div class="container">
    <div class="section clearfix bottom-margin">
      <header class="page-head colored clearfix">
        <h2>Venue</h2>
        <p class="text-muted">Centreville High School</p>
      </header>
      <article>
        
        <div class="row clearfix" style="padding-bottom: 25px;">
          <div class="col-md-3 col-sm-12 columnss">
            <div class="column-content">
              <h5>Event <span>Location</span></h5>
              <ul class="address">
                <li> <i class="fa fa-map-marker"></i> <strong>Centreville High School</strong><br>
                  6001 Union Mill Rd,<br>
                  Clifton, VA 20124</li>
              </ul>
              <br />
              <h5>Event <span>Contacts</span></h5>
              <ul class="contacts">
                <li>
                    <strong>Kevin Weeren</strong><br />
                    703-509-3598 <br />
                  <a href="mailto:kevinweeren@hotmail.com">kevinweeren@hotmail.com</a>
                </li>
                <li>
                    <strong>Brian Doyle</strong><br />
                    703-853-7525 <br />
                  <a href="mailto:BfDoyle@fcps.edu">BfDoyle@fcps.edu</a>
                </li>
                <li>
                    <strong>Jerry Lin</strong><br />
                    703-943-6991<br />
                  <a href="mailto:Clin@fcps.edu">Clin@fcps.edu</a>
                </li>                
              </ul>
            </div>
          </div>
        
          <div class="col-md-9 col-sm-12">            
            <div id="map_canvas" style=""></div>        
            <div class="col-md-6 col-sm-12 column directions-input">
                <div class="column-content">
                  <h3>Get <span>Directions</span></h3>
                  <form action="/routebeschrijving" onSubmit="calcRoute();return false;" id="routeForm">
                    <label for="routeStart"><strong>Destination From:</strong></label>
                    <input type="text" id="routeStart" value="">
                    <!-- <label for="travelMode"><strong>Via(Optional):</strong></label> -->
                    <input type="text" id="routeVia" value="" style="display: none;">
                    <label>Travel mode:</label>
                    <div class="clearfix">
                      <label class="radio-option">
                        <input type="radio" name="travelMode" value="DRIVING" checked />
                        Driving</label>
                      <label class="radio-option">
                        <input type="radio" name="travelMode" value="BICYCLING" />
                        Bicylcing</label>
                      <label class="radio-option">
                        <input type="radio" name="travelMode" value="TRANSIT" />
                        Public transport</label>
                      <label class="radio-option last">
                        <input type="radio" name="travelMode" value="WALKING" />
                        Walking</label>
                    </div>
                    <input type="submit" value="Get Directions" class="btn btn-block">
                  </form>
                </div>
              </div>
              <div class="col-md-6 col-sm-12 column directions-results">
                <div class="column-content">
                  <h3>Directions</h3>
                  <div id="directionsPanel"> Enter <strong>Destination From</strong> under <strong>Get Directions</strong> and Click on Get Directions Button. </div>
                </div>
              </div>
            </div>        
        </div>
        
      </article>
    </div>
  </div>
</section>
<!--END-VENUE--> 



<?php get_footer(); ?>