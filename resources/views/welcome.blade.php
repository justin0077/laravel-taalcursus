<!DOCTYPE html>
<html lang="en">
<head>
    <title>Taalcursus</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="css/style.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">

    <!--[if lt IE 9]>
    <script src="../../js/ie8-responsive-file-warning.js"></script><![endif]-->

    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>

    <script src="js/jquery.js"></script>

    <script src="js/jquery.easing.min.js"></script>

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

<!-- Fixed navbar -->
<div class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand page-scroll" href="#page-top">TAALCURSUS.NL</a>
        </div>
        <div class="navbar-collapse collapse navbar-right page-scroll">
            <ul class="nav navbar-nav">
                <li class="active page-scroll"><a href="#page-top">HOME</a></li>
                <li><a href="#cursus">CURSUSSEN!</a></li>
                <li><a href="#overons">OVER ONS</a></li>
                <li><a href="#cwrap">CONTACT</a></li>
            </ul>

        </div><!--/.nav-collapse -->
        @if (Route::has('login'))
            <div class="top-right links">
                <a href="{{ url('/login') }}">Login</a>
                <a href="{{ url('/register') }}">Register</a>
            </div>
        @endif
    </div>
</div>

<!-- *****************************************************************************************************************
 HEADERWRAP
 ***************************************************************************************************************** -->
<div id="headerwrap" style="height: 45px;background-image:url('{{ asset('img/background.jpg') }}'); ">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h1>Taalcursus.nl</h1>
                <h3>Welkom op onze website!</h3>
                <h1>Hier kunt u elke cursus bestellen die u wilt.</h1>
            </div>
        </div>
    </div><!-- /row -->
</div> <!-- /container -->
</div><!-- /headerwrap -->

<!-- *****************************************************************************************************************
 SERVICE LOGOS
 ***************************************************************************************************************** -->
<div id="cursus">
    <div class="container">
        <div class="row centered">
            <h1>Cursussen</h1>
            <div class="col-md-4">
                <img src="img/amazigh.jpg" alt="">
                <h4>Amazigh</h4>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                    and scrambled it to make a type specimen book.</p>
                <p><br/><a href="#" class="btn btn-theme">Meer Info</a></p>
            </div>
            <div class="col-md-4">
                <img src="img/fries.jpg" alt="">
                <h4>Fries</h4>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                    and scrambled it to make a type specimen book.</p>
                <p><br/><a href="#" class="btn btn-theme">Meer Info</a></p>
            </div>
            <div class="col-md-4">
                <img src="img/baskisch.jpg" alt="">
                <h4>Baskisch</h4>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                    and scrambled it to make a type specimen book.</p>
                <p><br/><a href="#" class="btn btn-theme">Meer Info</a></p>
            </div>
            <div class="col-md-6">
                <img src="img/catalaans.jpg" alt="">
                <h4>Catalaans</h4>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                    and scrambled it to make a type specimen book.</p>
                <p><br/><a href="#" class="btn btn-theme">Meer Info</a></p>
            </div>
            <div class="col-md-6">
                <img src="img/koerdisch.jpg" alt="">
                <h4>Koerdisch</h4>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                    and scrambled it to make a type specimen book.</p>
                <p><br/><a href="#" class="btn btn-theme">Meer Info</a></p>
            </div>
        </div>
    </div>
    <! --/container -->
</div>
<! --/cursus -->

<!-- *****************************************************************************************************************
 PORTFOLIO SECTION
 ***************************************************************************************************************** -->
<div id="overons">
    <h1>Over Ons</h1>

    <div class="container mtb">
        <div class="row">
            <div class="col-lg-6">
                <img class="img-responsive" src="img/agency.jpg" alt="">
            </div>

            <div class="col-lg-6">
                <h4>Meer over ons bedrijf.</h4>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>
                <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                <p>Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source.</p>
                <p><br/><a href="contact.html" class="btn btn-theme">Contact Us</a></p>
            </div>
        </div><! --/row -->
    </div><! --/container -->


<div id="cwrap">
    <div class="container">
        <div class="col-lg-8">
            <h1>Contact</h1>
            <div class="hline"></div>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                industry's standard dummy text ever since the 1500s.</p>
            <form role="form">
                <div class="form-group">
                    <label for="InputName1">Naam</label>
                    <input type="email" class="form-control" id="exampleInputEmail1">
                </div>
                <div class="form-group">
                    <label for="InputEmail1">Email</label>
                    <input type="email" class="form-control" id="exampleInputEmail1">
                </div>
                <div class="form-group">
                    <label for="InputSubject1">Onderwerp</label>
                    <input type="email" class="form-control" id="exampleInputEmail1">
                </div>
                <div class="form-group">
                    <label for="message1">Bericht</label>
                    <textarea class="form-control" id="message1" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-theme">Verstuur</button>
            </form>
        </div>
        <! --/col-lg-8 -->
        <div class="col-lg-4">
        <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false">
        </script>
        <div style="overflow:hidden;height:500px;width:600px; margin-top:60px;">
            <div id="gmap_canvas" style="height:300px;width:400px;">
                <style>#gmap_canvas img {
                        max-width: none !important;
                        background: none !important
                    }</style>
                <a class="google-map-code" href="http://wordpress-themes.org" id="get-map-data">wordpress-themes.org</a>
            </div>
        </div>
        <script type="text/javascript"> function init_map() {
                var myOptions = {
                    zoom: 14,
                    center: new google.maps.LatLng(40.805478, -73.96522499999998),
                    mapTypeId: google.maps.MapTypeId.ROADMAP
                };
                map = new google.maps.Map(document.getElementById("gmap_canvas"), myOptions);
                marker = new google.maps.Marker({
                    map: map,
                    position: new google.maps.LatLng(40.805478, -73.96522499999998)
                });
                infowindow = new google.maps.InfoWindow({content: "<b>The Circle</b><br/>2880 Broadway<br/> New York"});
                google.maps.event.addListener(marker, "click", function () {
                    infowindow.open(map, marker);
                });
                infowindow.open(map, marker);
            }
            google.maps.event.addDomListener(window, 'load', init_map);</script>
        </div>
    </div>
    <! --/container -->
</div>
<! --/cwrap -->

<!-- *****************************************************************************************************************
 FOOTER
 ***************************************************************************************************************** -->
<div id="footerwrap">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <h4>Cursussen</h4>
                <div class="hline-w"></div>
                <h4><a href="#"><i>Amazigh</i></a></h4><br>
                <h4><a href="#"><i>Fries</i></a></h4><br>
                <h4><a href="#"><i>Baskisch</i></a></h4><br>
                <h4><a href="#"><i>Catalaans</i></a></h4><br>
                <h4><a href="#"><i>Koerdisch</i></a></h4>
            </div>
            <div class="col-lg-4">
                <h4>Social Media</h4>
                <div class="hline-w"></div>
                <p>
                    <a href="#"><i class="fa fa-dribbble"></i></a>
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-instagram"></i></a>
                    <a href="#"><i class="fa fa-tumblr"></i></a>
                </p>
            </div>
            <div class="col-lg-4">
                <h4>Adres</h4>
                <div class="hline-w"></div>
                <p>
                    Some Ave, 987,<br/>
                    23890, New York,<br/>
                    United States.<br/>
                </p>
            </div>

        </div>
        <! --/row -->
    </div>
    <! --/container -->
</div>
<! --/footerwrap -->

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/retina-1.1.0.js"></script>
<script src="js/jquery.hoverdir.js"></script>
<script src="js/jquery.hoverex.min.js"></script>
<script src="js/jquery.prettyPhoto.js"></script>
<script src="js/jquery.isotope.min.js"></script>
<script src="js/custom.js"></script>


<script>
    // Portfolio
    (function ($) {
        "use strict";
        var $container = $('.portfolio'),
                $items = $container.find('.portfolio-item'),
                portfolioLayout = 'fitRows';

        if ($container.hasClass('portfolio-centered')) {
            portfolioLayout = 'masonry';
        }

        $container.isotope({
            filter: '*',
            animationEngine: 'best-available',
            layoutMode: portfolioLayout,
            animationOptions: {
                duration: 750,
                easing: 'linear',
                queue: false
            },
            masonry: {}
        }, refreshWaypoints());

        function refreshWaypoints() {
            setTimeout(function () {
            }, 1000);
        }

        $('nav.portfolio-filter ul a').on('click', function () {
            var selector = $(this).attr('data-filter');
            $container.isotope({filter: selector}, refreshWaypoints());
            $('nav.portfolio-filter ul a').removeClass('active');
            $(this).addClass('active');
            return false;
        });

        function getColumnNumber() {
            var winWidth = $(window).width(),
                    columnNumber = 1;

            if (winWidth > 1200) {
                columnNumber = 5;
            } else if (winWidth > 950) {
                columnNumber = 4;
            } else if (winWidth > 600) {
                columnNumber = 3;
            } else if (winWidth > 400) {
                columnNumber = 2;
            } else if (winWidth > 250) {
                columnNumber = 1;
            }
            return columnNumber;
        }

        function setColumns() {
            var winWidth = $(window).width(),
                    columnNumber = getColumnNumber(),
                    itemWidth = Math.floor(winWidth / columnNumber);

            $container.find('.portfolio-item').each(function () {
                $(this).css({
                    width: itemWidth + 'px'
                });
            });
        }

        function setPortfolio() {
            setColumns();
            $container.isotope('reLayout');
        }

        $container.imagesLoaded(function () {
            setPortfolio();
        });

        $(window).on('resize', function () {
            setPortfolio();
        });
    })(jQuery);
</script>
</body>
</html>
