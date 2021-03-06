<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Wetlands</title>

    <!-- Bootstrap Core CSS - Uses Bootswatch Flatly Theme: http://bootswatch.com/flatly/ -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="http://js.arcgis.com/3.13/esri/css/esri.css">


    <!-- Custom CSS -->
    <link href="css/freelancer.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet"
          type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" class="index">

<!-- Navigation -->
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#page-top">Wetlands</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li class="hidden">
                    <a href="#page-top"></a>
                </li>
                <li class="page-scroll">
                    <a href="#portfolio">Map</a>
                </li>
                <li class="page-scroll">
                    <a href="#howitworks">
                        How It Works
                    </a>
                </li>
                <li class="page-scroll">
                    <a href="#why">
                        Why the Wetlands?
                    </a>
                </li>
                <li class="page-scroll">
                    <a href="/signin-registration">Sign-in / Registration</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>

<!-- Header -->
<header>
    <div class="container">
        <div class="row">
            <h1>Feature Lot</h1>
        </div>
        <div class="row">
            <div class="col-lg-4 col-lg-offset-1">
                <img src="img/pic1.jpg">

            </div>
            <div class="col-lg-7 text-left">
                <h2>
                    Lot Name
                </h2>

                <p>
                    Help save this Wetlands. Information about the lot.
                </p>
                <a href="#" class="btn btn-info">Donate Now</a>
            </div>
        </div>
    </div>
</header>

<section id="map-display">

    <div class="row">
        <div class="container">
            <div class="row">
                <div class="col-lg-12" style="height: 500px;" id="map"></div>
            </div>
            <br>

            <div class="row">
                <div class="col-lg-6 col-lg-offset-1">
                    <p>
                        You can find more information around your area. Wetlands in your local community that you can
                        help save.
                    </p>
                    <a href="map.html" class="btn btn-info">MAP</a>
                </div>

                <div class="col-lg-5 ">
                    <img src="img/profile.png">

                </div>
            </div>
        </div>
    </div>
</section>

<!-- How does it works Section -->
<?php include("sections/howitworks.php")?>

<!-- Why Section -->
<section id="why">
    <div class="container text-center">
        <h1>Why save the Wetlands?</h1>

        <div class="col-lg-12">

        </div>
    </div>
</section>

<?php include("sections/footer.php")?>

<!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
<div class="scroll-top page-scroll visible-xs visible-sm">
    <a class="btn btn-primary" href="#page-top">
        <i class="fa fa-chevron-up"></i>
    </a>
</div>


<?php include("sections/scripts.php") ?>

<script>
    require(["esri/map", "dojo/domReady!"], function (Map) {
        var map = new Map("map", {
            center: [-95.148727, 29.547025],
            zoom: 12,
            basemap: "topo"
        });
    });
</script>

</body>

</html>
