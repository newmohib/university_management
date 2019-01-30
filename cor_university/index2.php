<!DOCTYPE html>
<html lang="en">
    
                                            <!--    #03 - Start Coding      -->
    
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge"> <!-- Meta For Internet Explorer Comptability -->
        <meta name="viewport" content="width=device-width, initial-scale=1"><!-- First Mobile Meta{https://www.w3schools.com/css/css_rwd_viewport.asp} -->
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="Hi BootStrap">
        <title>Main</title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="bootstrap/css/font-awesome.min.css">
        <link rel="stylesheet" href="bootstrap/css/hover-min.css"> <!-- hover css plugin (we should see her video to learn how to use)-->
        <link rel="stylesheet" href="bootstrap/css/style.css">
        <link rel="stylesheet" href="bootstrap/css/animate.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,700"> <!-- using google font -->
        
        <!-- HTML5 shiv and Respond.js for IE8 support of HTML5 elements and media queries -->
        
        <!--[if lt IE 9]>
          <script src="js/html5shiv.min.js"></script>
          <script src="js/respond.min.js"></script>
        <![endif]-->
        
        <style></style>
    </head>
    <body>
        
<!-- 
    Notes:-
    1- site to analyze the performance of your website (the webserver should be on server) Gtmetrix.com see video #45 

-->

        
        
                                        <!--        #11 - Navbar Part 1       -->
        
<!--        .navbar-inverse => change the color of the navbar to black      -->
<!--        .navbar-fixed-top => keep the navbar fixed in the top , and there is .navbar-fixed-bottom to fix it in the bottom ,, we should make for the             body padding-top to avoid makking the content under the navbar           -->
        
<!--        .navbar-default => is the default color(background-color, color) to the navbar which is white , or we can use .navbar-inverse -->
        
        
<!--        when we want to make modify in any of the classes of the bootstrap we shouldn't do that in the bootstrap.css file
            but we should do it in our style.css, so we keep our boostrap file as it was and if we want to update our bootstrap file with newer version our modfies will stay and not lost        -->
    
        
        
<!--        https://getbootstrap.com/docs/3.3/components/#navbar    -->
    
        
<!--        Start nav       -->
        
        <nav class="navbar navbar-inverse navbar-fixed-top" style="margin-bottom: 500px">

            <div class="container-fluid">

                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">

                    <!-- that button appears in the xs and sm screens and when we click it , it displays the div#bs-example-navbar-collapse-1 in that data-target  -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <!-- we can remove the four spans and replace them with text or other span -->
                      </button>

                    <a class="navbar-brand" href="#">admin</a>

                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->

                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                    <ul class="nav navbar-nav">

                        <li class="active"><a href="Main.html">Home<span class="sr-only"></span></a></li>
                        <li><a href="about.html">About</a></li>
                        <li><a href="faq.html">FAQ</a></li>
                        <!-- added by us -->

                        <li class="dropdown">
                            <!-- dropdown list -->

                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Services <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Web Designing</a></li>
                                <li><a href="#">Web Developping</a></li>
                                <li><a href="#">Graphics</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#">Supporting</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#">Testing</a></li>
                            </ul>

                        </li>

                    </ul>

                    <form class="navbar-form navbar-right">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Search">
                        </div>
                        <button type="submit" class="btn btn-default">Submit</button>
                    </form>
                    
                    <!-- our option box -->
                    
                    <ul class="nav navbar-nav navbar-right myoption">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle mygear" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-gear fa-2x"></i><span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li>
                                    <h5>Color Option:</h5>
                                    <span class="gold"></span>
                                    <span class="red"></span>
                                </li>
                                <li role="separator" class="divider"></li>
                                <li>
                                    <h5>This is color option box </h5>
                                </li>
                            </ul>
                        </li>
                    </ul>

                </div>
                <!-- /.navbar-collapse -->

            </div>
            <!-- /.container-fluid -->

        </nav>

<!--        End nav        -->
        
        
        
<!--        Start Carousel      -->
        
<!--        https://getbootstrap.com/docs/3.3/javascript/#carousel      -->
        
<!--
        The Carousel:
        1- as it is div it take the full width, but it haven't specified height, it take the height of the images.
        2- the carousel don't specify a specific width or height for the images.
        3- the images take it's dimensions , so if we have different heights the carousel will take the height of each image
        4- also the images will not take the width of the carousel 
        
        5- so to solve that we should specify a specific width and height for the images if needed
-->
        
        
        <!-- when we have multiple carousels we should specify different id for them so the controls work good here we select id {myslide} -->
        <div id="myslide" class="carousel slide" data-ride="carousel" data-interval="false"> <!-- data-interval="false" it stop the automatic cycling-->
            <!-- Indicators -->
            <ol class="carousel-indicators hidden-xs hidden-sm"> <!-- we hide the indicators in the xs sc -->
                <li data-target="#myslide" data-slide-to="0" class="active"></li>
                <li data-target="#myslide" data-slide-to="1"></li>
                <li data-target="#myslide" data-slide-to="2"></li>
                <li data-target="#myslide" data-slide-to="3"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                
                <div class="item active">
                    <img src="imgs/01.jpg" alt="1" style="width: 100%"> <!-- {width: 100%} important to fix the image when the screen is so big (zoom out) see the width & max-width (img).txt in css folder -->
                    <div class="carousel-caption hidden-xs hidden-sm"> <!-- we hide the caption div in the xs sc -->
                        <h3>Hello Pic 1</h3>
                        <p>Bootstrap exclusively uses CSS3 for its animations, but Internet Explorer 8 & 9 don't support the necessary CSS properties. Thus, there are no slide transition animations when using these browsers. We have intentionally decided not to include jQuery-based fallbacks for the transitions.</p>
                        <button class="btn btn-primary">Read More</button>
                        <button class="btn btn-danger">Request</button>
                    </div>
                </div>
                
                <div class="item">
                    <img src="imgs/02.jpeg" alt="2" style="width: 100%"> <!-- {width: 100%} important to fix the image when the screen is so big (zoom out) see the width & max-width (img).txt in css folder -->
                    <div class="carousel-caption hidden-xs hidden-sm"> <!-- we hide the caption div in the xs sc -->
                        <h3>Hello Pic 2</h3>
                        <p>Bootstrap exclusively uses CSS3 for its animations, but Internet Explorer 8 & 9 don't support the necessary CSS properties. Thus, there are no slide transition animations when using these browsers. We have intentionally decided not to include jQuery-based fallbacks for the transitions.</p>
                        <button class="btn btn-primary">Read More</button>
                        <button class="btn btn-danger">Request</button>
                    </div>
                </div>
                
                <div class="item">
                    <img src="imgs/03.jpeg" alt="3" style="width: 100%"> <!-- {width: 100%} important to fix the image when the screen is so big (zoom out) see the width & max-width (img).txt in css folder -->
                    <div class="carousel-caption hidden-xs hidden-sm"> <!-- we hide the caption div in the xs sc -->
                        <h3>Hello Pic 3</h3>
                        <p>Bootstrap exclusively uses CSS3 for its animations, but Internet Explorer 8 & 9 don't support the necessary CSS properties. Thus, there are no slide transition animations when using these browsers. We have intentionally decided not to include jQuery-based fallbacks for the transitions.</p>
                        <button class="btn btn-primary">Read More</button>
                        <button class="btn btn-danger">Request</button>
                    </div>
                </div>
                
                <div class="item">
                    <img src="imgs/03.jpeg" alt="4" style="width: 100%"> <!-- {width: 100%} important to fix the image when the screen is so big (zoom out) see the width & max-width (img).txt in css folder -->
                    <div class="carousel-caption hidden-xs hidden-sm"> <!-- we hide the caption div in the xs sc -->
                        <h3>Hello Pic 4</h3>
                        <p>Bootstrap exclusively uses CSS3 for its animations, but Internet Explorer 8 & 9 don't support the necessary CSS properties. Thus, there are no slide transition animations when using these browsers. We have intentionally decided not to include jQuery-based fallbacks for the transitions.</p>
                        <button class="btn btn-primary">Read More</button>
                        <button class="btn btn-danger">Request</button>
                    </div>
                </div>
            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#myslide" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> <!-- glyphicon is like fonticon  https://getbootstrap.com/docs/3.3/components/#glyphicons -->
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myslide" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div><br><br><br><br>
        
                
<!--        End Carousel        -->
        
<!--        Start Section About       -->
        
        
        <section class="myabout text-center">
            <div class="container wow bounceIn" data-wow-duration="2s" data-wow-offset="300">
                <h2>Meet Our New Template <span>Troy</span></h2>
                <p class="lead">Hello let me introduce our template Asd Created by the coporation of the <strong>Bootstrap 3.3.0</strong></p>
            </div>
        </section>
        
        
<!--        End Section About       -->

        
        
<!--        Start Section Features       -->
        
        
        <section class="myfeatures text-center">
            <div class="myoverlay">
                <div class="container">
                    <h3><span class="mymark">Our</span> Features</h3>
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-6">
                            <div class="myfeat hvr-bounce-in wow bounceInLeft" data-wow-duration="1.5s" data-wow-offset="300">
                                <span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span>
                                <h3>Reailbility</h3>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-3 col-sm-6">
                            <div class="myfeat hvr-wobble-vertical wow bounceInUp" data-wow-duration="1.5s" data-wow-offset="300">
                                <span class="glyphicon glyphicon-wrench" aria-hidden="true"></span>
                                <h3>Maintenance</h3>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-3 col-sm-6">
                            <div class="myfeat hvr-buzz-out wow bounceInDown" data-wow-duration="1.5s" data-wow-offset="300">
                                <span class="glyphicon glyphicon-gift" aria-hidden="true"></span>
                                <h3>Discounts</h3>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-3 col-sm-6">
                            <div class="myfeat hvr-wobble-skew wow bounceInRight" data-wow-duration="1.5s" data-wow-offset="300">
                                <span class="glyphicon glyphicon-fire" aria-hidden="true"></span>
                                <h3>Rapid Development</h3>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        
        
<!--        End Section Features       -->
        

<!--        Start Section Testimonials       -->
        
        
        <section class="mytesti text-center">
            <div class="myoverlay wow flipInY" data-wow-duration="1.5s" data-wow-offset="300">
                <div class="container">
                <h3><span class="mymark">What</span> Our Clients Say ?</h3>
                
                <!--        Start Carousel      -->

                <!-- when we have multiple carousels we should specify different id for them so the controls work good here we select id {myslide} -->
                <div id="testislide" class="carousel slide" data-ride="carousel"> <!-- data-interval="false" it stop the automatic cycling-->

                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#testislide" data-slide-to="0" class="active"></li>
                        <li data-target="#testislide" data-slide-to="1"></li>
                        <li data-target="#testislide" data-slide-to="2"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">

                        <div class="item active">
                            <img src="imgs/testi/1.png" alt="1" class="center-block img-circle">
                            <div class="carousel-caption hidden-xs"> <!-- we hide the caption div in the xs sc -->
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                <span>'Assad'</span>
                            </div>
                        </div>

                        <div class="item">
                            <img src="imgs/testi/2.jpg" alt="2" class="center-block img-circle">
                            <div class="carousel-caption hidden-xs"> <!-- we hide the caption div in the xs sc -->
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                <span>'Engineer.Hossny'</span>
                            </div>
                        </div>

                        <div class="item">
                            <img src="imgs/testi/3.jpg" alt="3" class="center-block img-circle">
                            <div class="carousel-caption hidden-xs"> <!-- we hide the caption div in the xs sc -->
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                <span>'Dr.Ziad'</span>
                            </div>
                        </div>

                    </div>

                </div>
        
                
        <!--        End Carousel        -->                
                
                </div>
            </div>    
        </section>
        
        
<!--        End Section Testimonials       -->
        
        
<!--        Start Section Price Table       -->
        
        
        <section class="myplans text-center">
            
            <div class="container">
                <h3><span class="mymark">Our</span> Plans</h3>
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <div class="myprice wow fadeInLeft" data-wow-duration="1.5s" data-wow-offset="300">
                            <h3 class="text-primary">Hosting</h3>
                            <p class="lead">$40</p>
                            <ul class="list-unstyled">
                                <li>Space: 30GB</li>
                                <li>Emails: 20</li>
                                <li>Ips: 2 IP</li>
                                <li>Databases: 10</li>
                                <li>Ftp Accounts: 5</li>
                            </ul>
                            <a href="#" class="btn btn-primary">Buy Now</a>
                        </div>
                    </div>
                    
                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <div class="myprice wow fadeInUp" data-wow-duration="1.5s" data-wow-offset="300">
                            <h3 class="text-info">Vps</h3>
                            <p class="lead">$50</p>
                            <ul class="list-unstyled">
                                <li>Space: 50GB</li>
                                <li>Emails: 40</li>
                                <li>Ips: 5 IP</li>
                                <li>Databases: 20</li>
                                <li>Ftp Accounts: 10</li>
                            </ul>
                            <a href="#" class="btn btn-info">Buy Now</a>
                        </div>
                    </div>
                    
                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <div class="myprice wow fadeInDown" data-wow-duration="1.5s" data-wow-offset="300">
                            <h3 class="text-success">Dedicated</h3>
                            <p class="lead">$70</p>
                            <ul class="list-unstyled">
                                <li>Space: 80GB</li>
                                <li>Emails: 40</li>
                                <li>Ips: 8 IP</li>
                                <li>Databases: 30</li>
                                <li>Ftp Accounts: 20</li>
                            </ul>
                            <a href="#" class="btn btn-success">Buy Now</a>
                        </div>
                    </div>
                    
                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <div class="myprice wow fadeInRight" data-wow-duration="1.5s" data-wow-offset="300">
                            <h3 class="text-default">Cloud</h3>
                            <p class="lead">$90</p>
                            <ul class="list-unstyled">
                                <li>Space: 90GB</li>
                                <li>Emails: 50</li>
                                <li>Ips: 10 IP</li>
                                <li>Databases: 50</li>
                                <li>Ftp Accounts: 50</li>
                            </ul>
                            <a href="#" class="btn btn-default">Buy Now</a>
                        </div>
                    </div>
                    
                </div>
            </div>
        
        </section>
        
        
<!--        End Section Price Table       -->
        
        
<!--        Start Section Our Team        -->
        
        
        <section class="myteam text-center">
            <div class="overlay wow rotateInDownLeft" data-wow-duration="1.5s" data-wow-offset="300">
                <div class="container">
                    <h3><span class="mymark">Our</span> Team</h3>
                    <div class="row">

                        <div class="col-md-3 col-sm-6">
                            <div class="mymember">
                                <img src="imgs/team/t1.png" alt="Reiner" class="img-responsive img-circle">
                                <h3>Reiner Braun</h3>
                                <q>don't know what's right anymore. But the only choice for me now...is to face the consequences of my actions...and as a Warrior...fulfill my duty to the bitter end!</q>
                                <div class="mylinks">
                                    <i class="fa fa-facebook-f fa-lg"></i>
                                    <i class="fa fa-twitter fa-lg"></i>
                                    <i class="fa fa-google-plus fa-lg"></i>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6">
                            <div class="mymember">
                                <img src="imgs/team/t2.png" alt="Mikasa" class="img-responsive img-circle">
                                <h3>Mikasa Ackermann</h3>
                                <q>There's only so many lives that I actually care about. My enemies made deciding that easy six years ago. So...you're mistaken to seek any compassion from me. Because right now, I'm all out of time and room in my heart to care.</q>
                                <div class="mylinks">
                                    <i class="fa fa-facebook-f fa-lg"></i>
                                    <i class="fa fa-twitter fa-lg"></i>
                                    <i class="fa fa-google-plus fa-lg"></i>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6">
                            <div class="mymember">
                                <img src="imgs/team/t3.png" alt="Annie" class="img-responsive img-circle">
                                <h3>Annie Leonhart</h3>
                                <q>Even if it means being a weakling swept up in the flow, being seen as person is all I want.</q>
                                <div class="mylinks">
                                    <i class="fa fa-facebook-f fa-lg"></i>
                                    <i class="fa fa-twitter fa-lg"></i>
                                    <i class="fa fa-google-plus fa-lg"></i>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6">
                            <div class="mymember">
                                <img src="imgs/team/t4.png" alt="Bertholdt" class="img-responsive img-circle">
                                <h3>Bertholdt Hoover</h3>
                                <q>That's not a lie! Conny! Jean! It's true we may have deceived everyone, but it's not all a lie! We really considered you comrades!</q><br>
                                <div class="mylinks">
                                    <i class="fa fa-facebook-f fa-lg"></i>
                                    <i class="fa fa-twitter fa-lg"></i>
                                    <i class="fa fa-google-plus fa-lg"></i>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        
        
<!--        End Section Our Team        -->
        
        
<!--        Start Section Subscribe        -->
        
        <section class="mysubscribe text-center">
            <div class="container wow pulse" data-wow-duration="1.5s" data-wow-offset="300">
                <h3><span class="mymark">Keep</span> In Touch</h3>
                <p class="lead">Sign up for Newsletter Don't Worry about spam.</p>
                <form class="form-inline">
                    <input class="form-control" type="text" placeholder="Write Your Email">
                    <button class="btn btn-success"><i class="fa fa-edit fa-spin"></i> Subscribe</button><!-- fa-spin make the icon spins -->
                </form>
            </div>
        </section>
        
        
<!--        End Section Subscribe        -->
        
        
<!--        Start Section Statstics        -->
        
        <section class="mystatic text-center">
            <div class="myoverlay">
                <div class="container wow pulse" data-wow-duration="2s" data-wow-offset="300">
                    <h3><span class="mymark">Our</span> Statistics</h3>
                    <div class="row">

                        <div class="col-md-3 col-sm-6">
                            <div class="mybox">
                                <i class="fa fa-users fa-4x"></i>
                                <p class="lead">9,450</p>
                                <span>Statisfied Users</span>
                            </div>
                        </div>
                        
                        <div class="col-md-3 col-sm-6">
                            <div class="mybox">
                                <i class="fa fa-comments fa-4x"></i>
                                <p class="lead">22,300</p>
                                <span>Posted Comments</span>
                            </div>
                        </div>
                        
                        <div class="col-md-3 col-sm-6">
                            <div class="mybox">
                                <i class="fa fa-suitcase fa-4x"></i>
                                <p class="lead">3,450</p>
                                <span>Projects Done</span>
                            </div>
                        </div>
                        
                        <div class="col-md-3 col-sm-6">
                            <div class="mybox">
                                <i class="fa fa-support fa-4x"></i>
                                <p class="lead">58.632</p>
                                <span>Tickets Reserved</span>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        
<!--        End Section Statstics        -->
        
        
<!--        Start Section Skills        -->
        
        <section class="myskills text-center">
            <div class="container">
                
                <h3><span class="mymark">Our</span> Skills</h3>
                <div class="row">    
                    <div class="col-md-5">
                        <div class="myprogress wow bounceInLeft" data-wow-duration="2s" data-wow-offset="300">
                            
                            <div class="progress">
                                <div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%">
                                    Html5/Css3
                                </div>
                            </div>
                            
                            <div class="progress">
                                <div class="progress-bar progress-bar-danger progress-bar-striped" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 30%">
                                    Javascript/jQuery
                                </div>
                            </div>
                            
                            <div class="progress">
                                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                    Php/MySql
                                </div>
                            </div>
                            
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                                    WordPress
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    
                    <div class="col-md-6 col-md-offset-1">
                        <div class="myinfo wow bounceInRight" data-wow-duration="2s" data-wow-offset="300">
                            <h3><span class="mymark">About</span> The Team</h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                            <button type="button" class="btn btn-primary">Talk with a professional</button>
                        </div>
                    </div> 
                </div>
            </div>
        </section>
        
        
<!--        End Section Skills        -->
        
        
<!--        Start Section Contact Us        -->
        
        <section class="mycontact text-center">
            <div class="myoverlay">
                <div class="container">
                    
                    <i class="fa fa-headphones fa-5x"></i>
                    <h3>Tell Us What you feel</h3>
                    <p>Feel free to contact us anytime</p>
                    
                    <div class="row">
                        <form role="form">
                            <div class="col-md-6 wow fadeInLeft" data-wow-duration="2s" data-wow-offset="300">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="User Name">
                                </div>
                                
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Email">
                                </div>
                                
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Cell Phone">
                                </div>
                            </div>
                            
                            <div class="col-md-6 wow fadeInRight" data-wow-duration="2s" data-wow-offset="300">
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Your Message"></textarea>
                                </div>
                                
                                <button type="button" class="btn btn-danger btn-block">Contact Us</button>
                            </div>
                        </form>
                    </div>
                    
                </div>
            </div>
        </section>    

<!--        End Section Contact Us        -->
        
        
<!--        Start Section Clients        -->
        
        <section class="myclients text-center">
            <div class="container">
                <h3><span class="mymark">Our</span> Clients</h3>
                
                <div class="row">
                    <ul class="list-unstyled">
                        <li class="col-md-2 col-xs-6">
                            <img src="imgs/clients/bbc.png" alt="bbc" class="img-responsive center-block wow bounceIn" data-wow-duration=".5s" data-wow-offset="300">
                        </li>
                        
                        <li class="col-md-2 col-xs-6">
                            <img src="imgs/clients/cnn.png" alt="cnn" class="img-responsive center-block wow bounceIn" data-wow-duration=".5s" data-wow-offset="300" data-wow-delay=".5s">
                        </li>
                        
                        <li class="col-md-2 col-xs-6">
                            <img src="imgs/clients/forbes.jpg" alt="forbes" class="img-responsive center-block wow bounceIn" data-wow-duration=".5s" data-wow-offset="300" data-wow-delay="1s">
                        </li>
                        
                        <li class="col-md-2 col-xs-6">
                            <img src="imgs/clients/wsj.jpg" alt="wsj" class="img-responsive center-block wow bounceIn" data-wow-duration=".5s" data-wow-offset="300" data-wow-delay="1.5s">
                        </li>
                        
                        <li class="col-md-2 col-xs-6">
                            <img src="imgs/clients/wired.png" alt="wired" class="img-responsive center-block wow bounceIn" data-wow-duration=".5s" data-wow-offset="300" data-wow-delay="2s">
                        </li>
                        
                        <li class="col-md-2 col-xs-6">
                            <img src="imgs/clients/tech.png" alt="tech" class="img-responsive center-block wow bounceIn" data-wow-duration=".5s" data-wow-offset="300" data-wow-delay="2.5s">
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        
        
        
<!--        End Section Clients        -->
        
        
<!--        Start Footer        -->
        
        
        <section class="myfooter">
            <div class="container">
                <div class="row">
                    
                    <div class="col-lg-4 col-md-6">
                        <h3>SiteMap</h3>
                        <ul class="list-unstyled">
                            <li><a>Home</a></li>
                            <li><a>About</a></li>
                            <li><a>Company</a></li>
                            <li><a>Code</a></li>
                            <li><a>Design</a></li>
                            <li><a>Host</a></li>
                            <li><a>Solutions</a></li>
                            <li><a>Sitemap</a></li>
                            <li><a>Contact</a></li>
                        </ul>
                        <ul class="list-unstyled">
                            <li><img src="imgs/links/face.png" alt="face"></li>
                            <li><img src="imgs/links/twitter.png" alt="twitter"></li>
                            <li><img src="imgs/links/instagram.png" alt="instagram"></li>
                            <li><img src="imgs/links/google-plus.png" alt="googleplus"></li>
                        </ul>
                    </div>
                    
                    <!-- Done Using Media Object Component { https://getbootstrap.com/docs/3.3/components/#media } --> 
                    <div class="col-lg-4 col-md-6">
                        <h3>Latest Articles</h3>
                        
                        <div class="media">
                          <div class="media-left">
                            <a href="#">
                              <img class="media-object" src="imgs/articles/1.png" alt="1">
                            </a>
                          </div>
                            
                          <div class="media-body">
                            <h4 class="media-heading">Programming Future</h4>
                            <p>This is some text about programming future with bootstrap 3.3 Media object components</p>
                          </div>
                        </div>
                        
                        <div class="media">
                          <div class="media-left">
                            <a href="#">
                              <img class="media-object" src="imgs/articles/2.png" alt="1">
                            </a>
                          </div>
                            
                          <div class="media-body">
                            <h4 class="media-heading">Reading Future</h4>
                            <p>This is some text about Reading future with bootstrap 3.3 Media object components</p>
                          </div>
                        </div>
                        
                        <div class="media">
                          <div class="media-left">
                            <a href="#">
                              <img class="media-object" src="imgs/articles/3.png" alt="1">
                            </a>
                          </div>
                            
                          <div class="media-body">
                            <h4 class="media-heading">Green Energy Future</h4>
                            <p>This is some text about Green Energy future with bootstrap 3.3 Media object components</p>
                          </div>
                        </div>
                        
                    </div>
                    
                    <div class="col-lg-4 col-md-12">
                        <div class="mywork">
                            <h3>Our Awesome Work</h3>
                            <img src="imgs/work/w1.png" alt="work1" style="width: 150px">
                            <img src="imgs/work/w2.jpg" alt="work2" style="width: 150px">
                            <img src="imgs/work/w3.jpg" alt="work3" style="width: 150px">
                            <img src="imgs/work/w4.png" alt="work4" style="width: 150px">
                        </div>     
                    </div>
                    
                </div>
            </div>
            
            <div class="myfoot">
                Copyright &copy; 2018 <span>Troy</span> By Asd
            </div>
            
        </section> 
        
        
<!--        End Footer        -->
        
        
        

<!--        Start Screen Loading        -->
        
        <!-- we search for css3 spinners in google like that site { https://loading.io/css/ } -->
<!--
        <section class="myscreen">
            <div class="lds-dual-ring"></div>
        </section>
-->
        
<!--        End Screen Loading        -->
        
        
<!--        Start Scroll Top      -->
        
        <!-- we search for css3 spinners in google like that site { https://loading.io/css/ } -->
        <section class="myscrolltop">
            <span class="glyphicon glyphicon-arrow-up" aria-hidden="true"></span>
        </section>
        
<!--        End Scroll Top        -->        
        
        

        <script src="bootstrap/js/jquery-3.1.1.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="bootstrap/js/jquery.nicescroll.min.js"></script>
        <script src="bootstrap/js/plugin.js"></script>
        <script src="bootstrap/js/wow.min.js"></script>
         <script>new WOW().init();</script>
    </body>
</html>