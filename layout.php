<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $this->get('title', 'Pizzeria Fabrizio'); ?></title>
    <link rel="icon" href="<?php echo $this->path('img/favicon.ico'); ?>" />
    <link href="<?php echo $this->path('css/bootstrap.css'); ?>" rel="stylesheet">
    <link href="<?php echo $this->path('css/font-awesome.min.css'); ?>" rel="stylesheet" >
    <?php echo $this->get('stylesheet'); ?>
    <?php echo $this->get('javascript-header'); ?>
</head>
<body>
    <div class="container wrap">
        <div class="navbar navbar-default" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#header">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="header">
                <ul class="nav navbar-nav">
                    <li><a href="<?php echo $this->path(); ?>"><i class="glyphicon glyphicon-home"></i> Accueil</a></li>
                    <li><a href="<?php echo $this->path('lacarte'); ?>"><i class="glyphicon glyphicon-book"></i> &Agrave; la carte</a></li>
                    <li><a href="<?php echo $this->path('leresto'); ?>"><i class="glyphicon glyphicon-cutlery"></i> Le restaurant</a></li>
                    <li><a href="<?php echo $this->path('contact'); ?>"><i class="glyphicon glyphicon-earphone"></i> Contactez-Nous</a></li>
                </ul>
            </div>
        </div>

        <img src="<?php echo $this->path('img/logowhite.png'); ?>" class="logo" alt="Pizzeria fabrizio">

        <?php echo $this->get('content'); ?>

    </div>
    <div class="footer">
        <div class="container">
        <div class="row hidden-xs hidden-sm">
            <div class="col-md-4">
                <i class="glyphicon glyphicon-time"></i></span> Ouvert tous les jours de 18h &agrave; 22h
            </div>
            <div class="col-md-4">
                <i class="glyphicon glyphicon-earphone"></i>  010/65.60.78 - 0497/39.33.97
            </div>
            <div class="col-md-4 text-right">
                <i class="glyphicon glyphicon-map-marker"></i> Route Provinciale 15 - 1450 Chastre
            </div>
        </div>
        <div class="row visible-sm">
            <div class="col-sm-6">
                <i class="glyphicon glyphicon-earphone"></i>  010/65.60.78 - 0497/39.33.97
            </div>
            <div class="col-sm-6 text-right">
                <i class="glyphicon glyphicon-map-marker"></i> Route Provinciale 15 - 1450 Chastre
            </div>
        </div>
        <div class="visible-xs">
            <div class="margin-bottom-md">
                <i class="glyphicon glyphicon-time"></i></span> Ouvert tous les jours de 18h &agrave; 22h
            </div>
            <div class="margin-bottom-md">
                <i class="glyphicon glyphicon-earphone"></i>  010/65.60.78 - 0497/39.33.97
            </div>
            <div>
                <i class="glyphicon glyphicon-map-marker"></i> Route Provinciale 15 - 1450 Chastre
            </div>
        </div>
        </div>
    </div>

    <script src="<?php echo $this->path('js/jquery-2.1.1.min.js'); ?>"></script>
    <script src="<?php echo $this->path('js/bootstrap.min.js'); ?>"></script>
    <script src="<?php echo $this->path('js/scripts.js'); ?>"></script>
    <?php echo $this->get('javascript'); ?>
</body>
</html>

