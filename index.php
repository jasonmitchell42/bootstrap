<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
</head>

<body>
<div class="container">
    <div class="row">
        <div id="logo" class="col-11 col-sm-12 col-md-12 col-lg-6 blue-box">
            <div class="row example-alignSelf">
                <div class="col-6 align-self-start">
                    <img id="logo" src="./imgs/logo.png" alt="Property Brokers">

                </div>
                <div class="col-6 header-text align-self-center">
                    <span>Agent Name&nbsp;&nbsp;|&nbsp;&nbsp;(xx) xxx xxx</span>
                    <span>Agent Name&nbsp;&nbsp;|&nbsp;&nbsp;(xx) xxx xxx</span>
                </div>
            </div>
        </div>
        <div class="col-1 d-sm-none">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="align-self-center fa fa-bars"></span>
            </button>
        </div>
        <div class="col-12 col-md-6">
            <nav class="navbar navbar-expand-sm bg-transparent">
                <div class="collapse navbar-collapse" id="main-menu">
                    <div class="social-media d-md-none col-12 col-sm-4">
                        <i class="fa fa-facebook" aria-hidden="true"></i>
                        <i class="fa fa-twitter" aria-hidden="true"></i>
                        <i class="fa fa-instagram" aria-hidden="true"></i>
                    </div>
                    <ul class="navbar-nav col-12 col-sm-8">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Search Properties</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Listings</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Solds</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Testimonials</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">blog</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="homepage-agent-image">
                <img src="./imgs/agent.png">
                <div class="overlay"></div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row align-start">
        <div class="col-12 col-md-6">
            <div class="blue-box view-properties">View My Properties</div>
            <?php include 'bin/testimonials.php' ?>
        </div>
        <div class="col-12 col-md-6">
            <div class=""

        </div>
    </div>
</div>


<div class="container">
    <div class="row example-alignSelf">
        <?php
        $c = 9;
        $cols = 3;
        for ($q = 1; $q <= $c; $q++) {
            ?>
            <div class='col-6 col-sm-6 col-md-4 col-lg-3 align-self-start'>
                <div class="card agent-card">
                    <img src="./imgs/house.jpg" alt="Card Image" class="card-img-top img-fluid">
                    <div class="card-body">
                        <div class="pull-right interactions">
                            <i class="fa fa-video-camera" aria-hidden="true"></i>
                            <i class="fa fa-share-alt" aria-hidden="true"></i>
                            <i class="fa fa-print" aria-hidden="true"></i>
                            <i class="fa fa-envelope-o" aria-hidden="true"></i>
                        </div>
                        <h4 class="card-title">Headline</h4>

                        <p class="card-text">Pommy ipsum flabbergasted spam fritters gosh bit of a Jack the lad a total jessie crisps made a pig's ear of it, copper and we all like figgy pudding toad in the whole chav done up like a kipper a bit miffed proper, her Majesty's pleasure absolute twoddle chin up unhand me sir Bob's your uncle what a load of guff proper.</p>
                        <div class="row icons">
                            <div class="col"><p class="icon">4 Bedrooms</p></div>
                            <div class="col"><p class="icon">2 Bathrooms</p></div>
                            <div class="col"><p class="icon">2 Cars</p></div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
        }
        ?>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
<script>
    $(function(){
        $('#testimonials').carousel({
            interval: false
        });
    });
</script>
</body>

</html>
