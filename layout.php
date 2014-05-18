<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Accueil / Pizzeria Fabrizzio</title>
    <link href="<?php $this->path('css/bootstrap.css'); ?>" rel="stylesheet">
</head>
<body>
    <div class="container wrap">
        <div class="navbar navbar-default" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><a href="<?php $this->path(); ?>"><i class="glyphicon glyphicon-home"></i> Accueil</a></li>
                    <li><a href="<?php $this->path('leresto'); ?>"><i class="glyphicon glyphicon-cutlery"></i> Le restaurant</a></li>
                    <li><a href="<?php $this->path('lacarta'); ?>"><i class="glyphicon glyphicon-book"></i> &Agrave; la carte</a></li>
                    <li><a href="<?php $this->path('contact'); ?>"><i class="glyphicon glyphicon-earphone"></i> Contactez-Nous</a></li>
                </ul>
            </div>
        </div>

        <img src="<?php $this->path('img/logowhite.png'); ?>" class="logo" alt="logo fabrizzio">

        <?php echo $content; ?>

    </div>
    <div  class="footer text-center">
        <div class="container">
            <i class="glyphicon glyphicon-time"></i> Ouvert tous les jours de 18h &agrave; 22h &nbsp;&nbsp;&mdash;&nbsp;&nbsp;
            <i class="glyphicon glyphicon-earphone"></i> 010 / 65 60 78 &nbsp;&nbsp;&mdash;&nbsp;&nbsp;
            <i class="glyphicon glyphicon-map-marker"></i> Route Provinciale 15 - 1450 Blanmont
        </div>
    </div>

    <script src="js/jquery-2.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/fabrizio.js"></script>
</body>
</html>

