<?php //Template Name: Home Sections ?>
<?php get_header(); ?>

<?php
    $_sections = get_posts(
        array(
            'post_type' => 'section',
            'numberposts' => -1
        )
    );
    $sections = array();
    foreach($_sections as $value) {
        $sections[$value->post_title] = $value->post_content;
    }
?>

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

                        <?php echo $sections['Header']; ?>

                        <div class="row text-center" style="display:none;">
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
                    <?php echo do_shortcode($sections['About Event']); ?>
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
                            <h5>Media <small>Articles</small></h5>
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
                        <?php echo $sections['Event Schedule']; ?>
                    </div>
                    <!--end-event-schedule-content-->

                    <div class="tab-pane" id="exec-presence">
                        <?php echo $sections['Player Rosters']; ?>
                    </div>


                    <div class="tab-pane" id="promo">
                        <?php echo $sections['Media']; ?>
                    </div>
                    <!--end-event-promo-->

                    <div class="tab-pane" id="event-gallery">
                        <h3><i class="fa fa-picture-o"></i> Event <span>Gallery</span></h3>
                        <p>For more pictures goto: <a href="http://www.novasportsphoto.com/" target="_blank">http://www.novasportsphoto.com/</a></p>
                        <div class="img-grid clearfix">
                            <ul id="eg-thumbs" class="eg-thumbs clearfix">
                                <?php echo do_shortcode($sections['Event Gallery']); ?>
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
                <?php echo $sections['Sponsors']; ?>
            </div>
        </div>
    </section>
    <!--END-PARTNERS-->



    <!--BEGIN-VENUE-->
    <section id="venue" class="page-block">
        <div class="container">
            <div class="section clearfix bottom-margin">
                <?php echo $sections['Venue']; ?>
            </div>
        </div>
    </section>
    <!--END-VENUE-->

    <?php get_footer(); ?>
