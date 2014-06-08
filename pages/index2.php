<?php
    $this->set('title', 'Pizzeria Fabrizio - Accueil');
    $this->add('stylesheet', '<style>body {background: #fff url("' .  $this->path('img/flou3.jpg') . '") no-repeat center center fixed;}</style>');

?>
<div class="panel panel-default">
    <div class="panel-heading">
        Bienvenue dans notre pizzeria de Chastre
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-sm-6">
                <img src="<?php echo $this->path('img/table.jpg'); ?>" class="img-responsive img-thumbnail margin-bottom-sm" alt="photo du restaurant">
            </div>
            <div class="col-sm-6">
                <h4><strong>Notre pizzeria de Chastre,</strong> situ&eacute;e dans un cadre verdoyant, &agrave; <strong>5 minutes de Louvain-la neuve</strong> vous accueille dans un cadre familial et chaleureux tous les soirs de la semaine.</h4>
                <br>
                <center><a href="<?php echo $this->path('contact'); ?>" class="btn btn-primary btn-lg"><i class="fa fa-map-marker"></i> Voir la carte d'acc&egrave;s</a></center>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <h4>Venez d&eacute;couvrir le go&ucirc;t de nos pizzas pr&eacute;par&eacute;es avec des <strong>ingr&eacute;dients de qualit&eacute;</strong> qui font l'authenticit&eacute; de la pizzeria Fabrizio.</h4>
                <br>
                <center><a href="<?php echo $this->path('lacarte'); ?>" class="btn btn-primary btn-lg"><i class="fa fa-book"></i> Decouvrez nos pizzas</a></center>
            </div>
            <div class="col-sm-6">
                <img src="<?php echo $this->path('img/pizza.png'); ?>" class="img-responsive img-thumbnail margin-bottom-sm" alt="photo du restaurant">
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <img src="<?php echo $this->path('img/resto.png'); ?>" class="img-responsive img-thumbnail margin-bottom-sm" alt="photo du restaurant">
            </div>
            <div class="col-sm-6">
                <h4><strong>Mangez sur place</strong> et laissez vous emporter par les photos qui ornent notre restaurant et voyagez &agrave; travers les diff&eacute;rentes villes comme Rome, Venise ou encore Naples.
                    Profitez &eacute;galement de <strong>notre terrasse</strong> qui se situe au calme dans le joli jardin de notre pizzeria.
                </h4>
                <br>
                <center><a href="<?php echo $this->path('leresto'); ?>" class="btn btn-primary btn-lg"><i class="fa fa-picture-o"></i> Explorez photos de notre restaurant</a></center>
            </div>
        </div>
    </div>
    <div class="panel-footer">
        Les pizzas sont aussi &agrave; <strong>emporter</strong> mais nous ne disposons pas d'un syst&eacute;me de livraison.
    </div>
</div>
