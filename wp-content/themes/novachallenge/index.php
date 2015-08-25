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
                    	<h1>NOVA Challenge<br><small>On March 22, 2015</small></h1>
                      	<h2>Rock Ridge High School</h2>
                      	<p class="text-muted">6001 Union Mill Rd, Clifton, VA 20124</p>
                    </div>
                    <div class="countdown styled"></div>
            	</div>
      </header>
   </div>
</section>

<!--BEGIN-INTRO-BOX-->
<section id="intro" class="page-block">
  <div class="container">
    <div class="section" id="about">
      <article>
        <h3>About <span>Event</span></h3>
        <p>Description about the event. Wounded Warriors Link will go here. Maybe have a photo gallery?</p>
      </article>
    </div>
    <!--end-section--> 
  </div>
</section>
<!--END-INTRO-BOX--> 

<!--BEGIN-SCHEDULE-->
<section id="schedule" class="page-block">
  <div class="container">
    <div class="section no-padding clearfix"> 
      
      <!-- Nav tabs -->
      <ul class="nav nav-tabs clearfix">
        <li class="active">
        	<a href="#event-schedule" data-toggle="tab"><i class="fa fa-clock-o"></i>
          	<h5>Event Schedule<small>Activities</small></h5>
          	</a>
        </li>
        <li>
        	<a href="#promo" data-toggle="tab"><i class="fa fa-play-circle"></i>
          	<h5>Highlights <small>Watch videos</small></h5>
          	</a>
        </li>
        <li>
        	<a href="#event-gallery" data-toggle="tab"><i class="fa fa-picture-o"></i>
          	<h5>Event Gallery<small>Pics From Our Past Events</small></h5>
          	</a>
        </li>
        <li>
        	<a href="#exec-presence" data-toggle="tab"><i class="fa fa-star"></i>
          	<h5>Player Rosters<small>Invited Players</small></h5>
          	</a>
        </li>
      </ul>
      
      <!-- Tab panes -->
      <div class="tab-content">
        <div class="tab-pane active" id="event-schedule">
          <h3><i class="fa fa-clock-o"></i> Event <span>Schedule</span></h3>
          <p>Event Description..</p>
          <div class="row clearfix">
          
            <div class="col-md-4 col-sm-12 schedule-box">
              <h6 class="section-head">12:30 PM</h6>
              <ul class="activities">
                <li>
                  <h6>3pt Contest</h6>
                  <p>Description about 3pt contest.</p>
                </li>
              </ul>
            </div>
            
            <div class="col-md-4 col-sm-12 schedule-box">
              <h6 class="section-head">1:15 PM</h6>
              <ul class="activities">
                <li>
                  <h6>Dunk Contest</h6>
                  <p>Description about dunk contest.</p>
                </li>
              </ul>
            </div>
            
            <div class="col-md-4 col-sm-12 schedule-box">
              <h6 class="section-head">2:00 PM</h6>
              <ul class="activities">
                <li>
                  <h6>All Star Game</h6>
                  <p>Description about the all star game.</p>
                </li>               
              </ul>
            </div>
          </div>
          <!--end-of-row--> 
        </div>
        <!--end-event-schedule-content-->
        
        <div class="tab-pane" id="promo">
          <h3><i class="fa fa-play-circle"></i> Highlight <span>Videos</span></h3>
          <p>Maybe we can put videos of player highlights??</p>
          <div class="img-grid clearfix">
            <ul id="eg-thumbs" class="eg-thumbs clearfix">
              <li> 
                <a href="<?php echo get_template_directory_uri(); ?>/img/gallery/large/01.jpg" title="Event PhotoGallery" rel="prettyPhoto[gallery]"> <img src="<?php echo get_template_directory_uri(); ?>/img/gallery/thumb/01.jpg" alt="Event Photo" class="img-responsive">
                <div class="img-caption"><span>Video Caption 1</span></div></a> 
              </li>
              <li> 
                <a href="<?php echo get_template_directory_uri(); ?>/img/gallery/large/02.jpg" title="Event PhotoGallery" rel="prettyPhoto[gallery]"> <img src="<?php echo get_template_directory_uri(); ?>/img/gallery/thumb/02.jpg" alt="Event Photo" class="img-responsive">
                <div class="img-caption"><span>Video Caption 2</span></div></a> 
              </li>
              <li> 
                <a href="<?php echo get_template_directory_uri(); ?>/img/gallery/large/03.jpg" title="Event PhotoGallery" rel="prettyPhoto[gallery]"> <img src="<?php echo get_template_directory_uri(); ?>/img/gallery/thumb/03.jpg" alt="Event Photo" class="img-responsive">
                <div class="img-caption"><span>Video Caption 3</span></div></a> 
              </li>
              <li> 
                <a href="<?php echo get_template_directory_uri(); ?>/img/gallery/large/04.jpg" title="Event PhotoGallery" rel="prettyPhoto[gallery]"> <img src="<?php echo get_template_directory_uri(); ?>/img/gallery/thumb/04.jpg" alt="Event Photo" class="img-responsive">
                <div class="img-caption"><span>Video Caption 4</span></div></a> 
              </li>             
            </ul>
          </div>          
        </div>
        <!--end-event-schedule-content-->
        
        <div class="tab-pane" id="event-gallery">
          <h3><i class="fa fa-picture-o"></i> Event <span>Gallery</span></h3>
          <p>Description about past events..</p>
          <div class="img-grid clearfix">
            <ul id="eg-thumbs" class="eg-thumbs clearfix">
              <li> 
              	<a href="<?php echo get_template_directory_uri(); ?>/img/gallery/large/01.jpg" title="Event PhotoGallery" rel="prettyPhoto[gallery]"> <img src="<?php echo get_template_directory_uri(); ?>/img/gallery/thumb/01.jpg" alt="Event Photo" class="img-responsive">
                <div class="img-caption"><span>Image Caption 1</span></div></a> 
              </li>
              <li> 
              	<a href="<?php echo get_template_directory_uri(); ?>/img/gallery/large/02.jpg" title="Event PhotoGallery" rel="prettyPhoto[gallery]"> <img src="<?php echo get_template_directory_uri(); ?>/img/gallery/thumb/02.jpg" alt="Event Photo" class="img-responsive">
                <div class="img-caption"><span>Image Caption 2</span></div></a> 
              </li>
              <li> 
              	<a href="<?php echo get_template_directory_uri(); ?>/img/gallery/large/03.jpg" title="Event PhotoGallery" rel="prettyPhoto[gallery]"> <img src="<?php echo get_template_directory_uri(); ?>/img/gallery/thumb/03.jpg" alt="Event Photo" class="img-responsive">
                <div class="img-caption"><span>Image Caption 3</span></div></a> 
              </li>
              <li> 
              	<a href="<?php echo get_template_directory_uri(); ?>/img/gallery/large/04.jpg" title="Event PhotoGallery" rel="prettyPhoto[gallery]"> <img src="<?php echo get_template_directory_uri(); ?>/img/gallery/thumb/04.jpg" alt="Event Photo" class="img-responsive">
                <div class="img-caption"><span>Image Caption 4</span></div></a> 
              </li>
              <li> 
              	<a href="<?php echo get_template_directory_uri(); ?>/img/gallery/large/05.jpg" title="Event PhotoGallery" rel="prettyPhoto[gallery]"> <img src="<?php echo get_template_directory_uri(); ?>/img/gallery/thumb/05.jpg" alt="Event Photo" class="img-responsive">
                <div class="img-caption"><span>Image Caption 5</span></div></a> 
              </li>
              <li> 
              	<a href="<?php echo get_template_directory_uri(); ?>/img/gallery/large/06.jpg" title="Event PhotoGallery" rel="prettyPhoto[gallery]"> <img src="<?php echo get_template_directory_uri(); ?>/img/gallery/thumb/06.jpg" alt="Event Photo" class="img-responsive">
                <div class="img-caption"><span>Image Caption 6</span></div></a> 
              </li>
              <li> 
              	<a href="<?php echo get_template_directory_uri(); ?>/img/gallery/large/07.jpg" title="Event PhotoGallery" rel="prettyPhoto[gallery]"> <img src="<?php echo get_template_directory_uri(); ?>/img/gallery/thumb/07.jpg" alt="Event Photo" class="img-responsive">
                <div class="img-caption"><span>Image Caption 7</span></div></a> 
              </li>
              <li> 
              	<a href="<?php echo get_template_directory_uri(); ?>/img/gallery/large/08.jpg" title="Event PhotoGallery" rel="prettyPhoto[gallery]"> <img src="<?php echo get_template_directory_uri(); ?>/img/gallery/thumb/08.jpg" alt="Event Photo" class="img-responsive">
                <div class="img-caption"><span>Image Caption 8</span></div></a> 
              </li>
            </ul>
          </div>
          <!--end-img-grid--> 
          
        </div>
        <!--end-event-schedule-content-->
        
        <div class="tab-pane" id="exec-presence">
          <h3><i class="fa fa-star"></i> Player <span>Rosters</span></h3>
          <p>Description about players.</p>
          <ul class="li-blocks">
            <li><strong>Player Name</strong> - High School</li>
            <li><strong>Player Name</strong> - High School</li>
            <li><strong>Player Name</strong> - High School</li>
            <li><strong>Player Name</strong> - High School</li>
            <li><strong>Player Name</strong> - High School</li>
            <li><strong>Player Name</strong> - High School</li>
            <li><strong>Player Name</strong> - High School</li>
            <li><strong>Player Name</strong> - High School</li>
            <li><strong>Player Name</strong> - High School</li>
            <li><strong>Player Name</strong> - High School</li>
          </ul>
        </div>
        <!--end-event-schedule-content--> 
      </div>
    </div>
  </div>
</section>
<!--END-SCHEDULE--> 







<!--BEGIN-PARTNERS-->
<section id="partners" class="page-block">
  <div class="container">
    <div class="section">
      <header class="page-head">
        <h2>Sponsors</h2>
        <p class="text-muted">A big thanks to all our Sponsors!</p>
      </header>
      <article>
        <p>Some description about our sponsors...</p>
      </article>
      <div class="partner clearfix"> 
        <a href="#" title="Evolution Basketball Training"> <img class="img-responsive evolution" src="<?php echo get_template_directory_uri(); ?>/img/partners/evolution.jpg" alt="Partner Brand" /> </a>        
      	<a href="#" title="NOVA Cavaliers"> <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/partners/novacavs.png" alt="Partner Brand" /> </a> 
        <a href="#" title="Blue Ridge Basketball Camp"> <img class="img-responsive blue-ridge" src="<?php echo get_template_directory_uri(); ?>/img/partners/blueridge.png" alt="Partner Brand" /> </a>               
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
        <div id="map_canvas"></div>
        <div class="row clearfix">
          <div class="col-md-3 col-sm-12 column">
            <div class="column-content">
              <h3>Event <span>Location</span></h3>
              <ul class="address">
                <li> <i class="fa fa-map-marker"></i> <strong>Centreville High School</strong><br>
                  6001 Union Mill Rd,<br>
                  Clifton, VA 20124</li>
                <li> <i class="fa fa-phone"></i> <strong>Call Us</strong><br>
                  123.456.7890 </li>
                <li> <i class="fa fa-envelope"></i> <strong>Email Us</strong><br>
                  <a href="mailto:kevinweeren@hotmail.com">kevinweeren@hotmail.com</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-md-4 col-sm-12 column directions-input">
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
          <div class="col-md-5 col-sm-12 column directions-results">
            <div class="column-content">
              <h3>Directions</h3>
              <div id="directionsPanel"> Enter <strong>Destination From</strong> under <strong>Get Directions</strong> and Click on Get Directions Button. </div>
            </div>
          </div>
        </div>
        <!--end-of-row--> 
      </article>
    </div>
  </div>
</section>
<!--END-VENUE--> 

<?php get_footer(); ?>
