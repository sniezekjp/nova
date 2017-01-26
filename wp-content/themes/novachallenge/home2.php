<?php //Template Name: Home 2?>
<?php get_header(); remove_filter( 'the_content', 'wpautop' ); ?>

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
                        <p class="text-muted">43460 Loudoun Reserve Dr, Ashburn VA 20148</p>

                        <div class="row text-center">
                            <img class="logo" src="<?php echo get_template_directory_uri(). '/img/logo-white.png'; ?>" alt="" width="auto" height="250px" />
                        </div>

                    </div>
                    <!-- <div class="countdown styled"></div> -->
                </div>
            </header>
        </div>
    </section>

    <!--BEGIN-INTRO-BOX-->
    <section id="intro" class="page-block">
        <div class="container">
            <div class="section" id="about">
                <article>
                    <div class="row text-center">
                        <div class="countdown styled" style="display:none;"></div>
                    </div>

                    <?php while(have_posts()) : the_post(); the_content(); endwhile;?>

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
                        <a href="#exec-presence" data-toggle="tab"><i class="fa fa-star"></i>
                            <h5>Player Rosters<small>Invited Players</small></h5>
                        </a>
                    </li>

                    <li>
                        <a href="#promo" data-toggle="tab"><i class="fa fa-play-circle"></i>
                            <h5>Media <small>Gameday Magazine</small></h5>
                        </a>
                    </li>
                    <li>
                        <a href="#event-gallery" data-toggle="tab"><i class="fa fa-picture-o"></i>
                            <h5>Event Gallery<small>Pics From Our Past Events</small></h5>
                        </a>
                    </li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane active" id="event-schedule">
                        <h3><i class="fa fa-clock-o"></i> Event <span>Schedule</span></h3>
                        <div class="row clearfix">

                            <div class="col-md-3 col-sm-12 schedule-box">
                                <h6 class="section-head">9-1 PM</h6>
                                <ul class="activities">
                                    <li>
                                        <h6>Underclassman Clinic</h6>
                                        <p></p>
                                    </li>
                                </ul>
                            </div>

                            <div class="col-md-3 col-sm-12 schedule-box">
                                <h6 class="section-head">2:30 PM</h6>
                                <ul class="activities">
                                    <li>
                                        <h6>3pt Contest</h6>
                                        <p></p>
                                    </li>
                                </ul>
                            </div>

                            <div class="col-md-3 col-sm-12 schedule-box">
                                <h6 class="section-head">3:15 PM</h6>
                                <ul class="activities">
                                    <li>
                                        <h6>Dunk Contest</h6>
                                        <p></p>
                                    </li>
                                </ul>
                            </div>

                            <div class="col-md-3 col-sm-12 schedule-box">
                                <h6 class="section-head">4:00 PM</h6>
                                <ul class="activities">
                                    <li>
                                        <h6>Senior All Star Game</h6>
                                        <p></p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!--end-of-row-->
                    </div>
                    <!--end-event-schedule-content-->

                    <div class="tab-pane" id="exec-presence">
                        <h3><i class="fa fa-star"></i> Player <span>Rosters</span></h3>
                        <h4>Loundon County Team</h4>
                        <ul class="li-blocks" style=";">
                            <li style="width:50%;"><strong>Jason Jolly</strong> - Stone Bridge</li>
                            <li><strong>Connor Gaines</strong> - Briar Woods</li>
                            <li><strong>Tyriek King</strong> - Broad Run</li>
                            <li><strong>Julian Albizo</strong> - Stone Bridge</li>
                            <li><strong>Wanya Allen</strong> - Potomac Falls <br/>(Committed to Shepherd University for Football)</li>
                            <li><strong>Quad Borup</strong> - Loudoun County</li>
                            <li><strong>Matt Gilson</strong> - Woodgrove</li>
                            <li><strong>Ethan Walker</strong> - Loudoun County</li>
                            <li><strong>Jamison Copeland</strong> - Woodgrove</li>
                            <li><strong>Davie Wick</strong> - Woodgrove</li>
                            <li><strong>Austin Volpi</strong> - Dominion</li>
                            <li><strong>Morris Robinson</strong> - Heritage</li>
                        </ul>

                        <h4>Fairfax County Team</h4>
                        <ul class="li-blocks" style="">
                            <li style="width:50%;"><strong>Tyler Barton</strong> - Fairfax</li>
                            <li><strong>Tyler Hodge</strong> - Hayfield</li>
                            <li><strong>Eliet Donley</strong> - Hayfield</li>
                            <li><strong>Sekai Walker</strong> - Madison</li>
                            <li><strong>Nate Roberts</strong> - Fairfax</li>
                            <li><strong>Eric Bowles</strong> - Woodson <br/>(Committed to Central Connecticut State University)</li>
                            <li><strong>Tyvez Monroe</strong> - Edison</li>
                            <li><strong>John Ukpaiama</strong> - Edison</li>
                            <li><strong>Brandon Kamga</strong> - South Lakes <br/>(Committed to Northeastern)</li>
                            <li><strong>Chris Kucik</strong> - Herndon</li>
                            <li><strong>Joey Powell</strong> - Robinson</li>
                            <li><strong>Josiah Walker</strong> - Oakton</li>
                            <li><strong>Austin Hall</strong> - Annandale</li>
                            <li><strong>Jack Ferguson</strong> - McLean</li>
                            <li><strong>John Cronin</strong> - West Springfield</li>
                        </ul>
                    </div>


                    <div class="tab-pane" id="promo">
                        <h3><i class="fa fa-star"></i> Gameday <span>Magazine</span></h3>
                        <p>Please check out <a target="_blank" href="http://mvp.gamedaymagazine.com">Gameday Magazine</a>. They will be covering the Nova Challenge Allstar Game this year.</p>
                        <h3>Articles</h3>
                        <p><a target="_blank" href="http://www.loudountimes.com/sports/article/loudoun_all_stars_outshine_fairfax_in_nova_challenge273">Loudon Times - Nova Challenge</a> <br />
                            <a target="_blank" href="http://www.fairfaxtimes.com/article/20140324/SPORTS/140329712/1061/seniors-shine-at-inaugural-nova-challenge&template=fairfaxTimes">Fairfax Times - Nova Challenge</a></p>
                    </div>
                    <!--end-event-promo-->


                    <?php
                    $event_pics = array(
                        'Fairfax All-Stars'=>'fairfax-all-stars',
                        'Loundon All-Stars'=>'loudon-all-stars',
                        'Fairfax= Demornay Pierson-El (West Potomac HS), Loudoun= Travis Fulgham (Broad Run HS)'=>'mvps',
                        'Dunk Champion - Jordan Roach (Tuscarora HS)' =>'dunk-champ',
                        '3 pt. Champion - Joseph Richards (West Potomac HS)'=>'3pt-champ2',
                        'Joseph Richards (West Potomac HS) - 3pt. Champion'=>'3pt-champ'
                    );
                    ?>

                    <div class="tab-pane" id="event-gallery">
                        <h3><i class="fa fa-picture-o"></i> Event <span>Gallery</span></h3>
                        <p>For more pictures goto: <a href="http://www.novasportsphoto.com/" target="_blank">http://www.novasportsphoto.com/</a></p>
                        <div class="img-grid clearfix">
                            <ul id="eg-thumbs" class="eg-thumbs clearfix">
                                <?php foreach($event_pics as $caption => $img) : ?>
                                    <li>
                                        <a href="<?php echo get_template_directory_uri(); ?>/img/event/<?php echo $img; ?>.jpg" title="Event PhotoGallery" rel="prettyPhoto[gallery]"> <img src="<?php echo get_template_directory_uri(); ?>/img/event/<?php echo $img; ?>.jpg" alt="<?php echo $caption; ?>" class="img-responsive <?php echo $img; ?>">
                                            <div class="img-caption"><span><?php echo $caption; ?></span></div></a>
                                    </li>

                                <?php endforeach; ?>
                            </ul>
                        </div>
                        <!--end-img-grid-->

                    </div>
                    <!--end-event-galler-->

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
                </article>
                <div class="partner clearfix">

                    <a target="_blank" href="http://evolutionbasketball.com" title="Evolution Basketball Training"> <img class="img-responsive evolution" src="<?php echo get_template_directory_uri(); ?>/img/partners/evolution.jpg" alt="Partner Brand" /> </a>

                    <a target="_blank" href="http://novacavaliers.com" title="NOVA Cavaliers"> <img class="img-responsive cavs" src="<?php echo get_template_directory_uri(); ?>/img/partners/novacavs.png" alt="Partner Brand" /> </a>

                    <a target="_blank" href="http://marlowsports.com" title="Marlow Sports"> <img class="img-responsive marlow" src="<?php echo get_template_directory_uri(); ?>/img/partners/marlow.png" alt="Partner Brand" /> </a>

                    <a target="_blank" href="http://www.vagroundcovers.com/" title="Virginia Ground Covers"> <img class="img-responsive ground-covers" src="<?php echo get_template_directory_uri(); ?>/img/partners/va-ground-covers.png" alt="Partner Brand" /> </a>

                    <a target="_blank" href="http://bltshirtprinters.com/"><img src="http://bltshirtprinters.com/sites/all/themes/blt/img/logo.png" class="img-responsive" style="padding-left: 50px;margin-top: 60px;"></a>

                    <!-- <a target="_blank" href="http://www.legitstats.com/index.html"><img src="http://www.legitstats.com/uploads/3/3/3/9/3339794/header_images/1382910941.jpg" class="img-responsive" style="padding: 0px 50px;margin-top: 20px;"></a> -->

                    <!-- <a target="_blank" href="http://www.cboa.org/"><img src="http://www.cboa.org/images/websitelogo.png" class="img-responsive" style="padding: 0px 50px;margin-top: 20px;"></a> -->

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
                    <p class="text-muted">Rock Ridge HS</p>
                </header>
                <article>

                    <div class="row clearfix" style="padding-bottom: 25px;">
                        <div class="col-md-3 col-sm-12 columnss">
                            <div class="column-content">
                                <h5>Event <span>Location</span></h5>
                                <ul class="address">
                                    <li> <i class="fa fa-map-marker"></i> <strong>Rock Ridge High School</strong><br>
                                        43460 Loudoun Reserve<br>
                                        Ashburn, VA 20148</li>
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
