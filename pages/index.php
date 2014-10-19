<?php
    $this->set('title', 'Pizzeria Fabrizio - Accueil');
    $this->add(
        'javascript-header',
        '<!--[if lt IE 8]>
            <script>
                document.location.href = "' . $this->path('lacarte') . '"
            </script>
        <![endif]-->'
    );
?>
<div class="panel panel-default">
    <div class="panel-heading">
        Bienvenue dans notre pizzeria de Chastre
    </div>
    <div class="panel-body homepage">
        <div class="row">
            <div class="col-sm-6">
                <img src="<?php echo $this->path('img/table.jpg'); ?>" class="img-responsive img-thumbnail margin-bottom-sm" alt="photo du restaurant">
            </div>
            <div class="col-sm-6">
                <p><strong>Notre pizzeria de Chastre,</strong> situ&eacute;e dans un cadre verdoyant, &agrave; <strong>5 minutes de Louvain-la neuve</strong> vous accueille dans une ambiance familiale et chaleureuse tous les soirs de la semaine.</p>
                <p>Venez d&eacute;couvrir le go&ucirc;t de nos pizzas pr&eacute;par&eacute;es avec des <strong>ingr&eacute;dients de qualit&eacute;</strong> qui font l'authenticit&eacute; de la pizzeria Fabrizio.</p>
                <p><strong>Mangez sur place</strong> et laissez vous emporter par les photos qui ornent notre restaurant et voyagez &agrave; travers les diff&eacute;rentes villes comme Rome, Venise ou encore Naples.</p>
                <p>Profitez &eacute;galement de <strong>notre terrasse</strong> qui se situe au calme dans le joli jardin de notre pizzeria.</p>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-sm-4 margin-bottom-md">
                <a href="<?php echo $this->path('lacarte'); ?>">
                    <img src="<?php echo $this->path('img/pizza.jpg'); ?>" class="img-responsive img-thumbnail margin-bottom-sm" alt="D&eacute;couvrez notre carte">
                </a>
                <p>Notre carte propose un large panel de pizzas, il y a en pour tous les go&ucirc;ts!</p>
                <div class="visible-xs clearfix margin-bottom-lg margin-top-lg">
                    <a href="<?php echo $this->path('lacarte'); ?>" class="btn btn-primary margin-bottom-lg col-xs-12">
                        <i class="glyphicon glyphicon-cutlery"></i> D&eacute;couvrez notre carte
                    </a>
                </div>
                <hr class="visible-xs">
            </div>
            <div class="col-sm-4 margin-bottom-md">
                <a href="https://www.facebook.com/pages/Pizzeria-Fabrizio/304604589650586" target="_blank">
                    <img src="<?php echo $this->path('img/fabrizio.jpg'); ?>" class="img-responsive img-thumbnail margin-bottom-sm" alt="Pizzeria fabrizio facebook">
                </a>
                <p>Pour suivre nos actualit&eacute;s venez visiter notre page Facebook! vous pourrez &eacute;galement y laisser vos commentaires</p>
                <div class="visible-xs clearfix margin-bottom-lg margin-top-lg">
                    <a href="https://www.facebook.com/pages/Pizzeria-Fabrizio/304604589650586" target="_blank" class="btn btn-primary margin-bottom-lg col-xs-12">
                        <i class="fa fa-facebook-square"></i> Rejoignez-nous sur facebook
                    </a>
                </div>
                <hr class="visible-xs">
            </div>
            <div class="col-sm-4 margin-bottom-md">
                <a href="<?php echo $this->path('leresto'); ?>">
                    <img src="<?php echo $this->path('img/resto.jpg'); ?>" class="img-responsive img-thumbnail margin-bottom-sm" alt="D&eacute;couvrir notre restaurant">
                </a>
                <p>Venez d&eacute;couvrir notre restaurant &agrave; travers nos photos</p>
                <div class="visible-xs clearfixmargin-top-lg">
                    <a href="<?php echo $this->path('leresto'); ?>" class="btn btn-primary margin-bottom-lg col-xs-12">
                        <i class="fa fa-picture-o"></i> Voir la galerie de photos
                    </a>
                </div>
                <hr class="visible-xs">
            </div>
        </div>
        <div class="row hidden-xs clearfix padding-bottom-lg">
            <div class="col-sm-4 text-center">
                <a href="<?php echo $this->path('lacarte'); ?>" class="btn btn-primary margin-top-lg margin-bottom-lg col-md-12">
                    <i class="glyphicon glyphicon-cutlery"></i> D&eacute;couvrez notre carte
                </a>
            </div>
            <div class="col-sm-4 text-center">
                <a href="https://www.facebook.com/pages/Pizzeria-Fabrizio/304604589650586" target="_blank" class="btn btn-primary margin-top-lg margin-bottom-lg col-md-12">
                    <i class="fa fa-facebook-square"></i> Rejoignez-nous sur facebook
                </a>
            </div>
            <div class="col-sm-4 text-center">
                 <a href="<?php echo $this->path('leresto'); ?>" class="btn btn-primary margin-top-lg margin-bottom-lg col-md-12">
                    <i class="fa fa-picture-o"></i> Voir la galerie de photos
                </a>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-sm-4 text-right">
                <img src="<?php echo $this->path('img/bancontact.jpg'); ?>" width="150" class="img-responsive img-thumbnail margin-bottom-sm" alt="Bancontact et Mister Cash">
            </div>
            <div class="col-sm-8">
                <h4>Paiement disponible avec Bancontact et Mister Cash</h4>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-sm-12">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d5062.63092294148!2d4.646408!3d50.62125629999991!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c17f18859dd615%3A0xe3638981695c830a!2sRoute+Provinciale+15!5e0!3m2!1sfr!2s!4v1402305731432" width="100%" height="300" frameborder="0" style="border:0"></iframe>
            </div>
        </div>
    </div>
    <div class="panel-footer">
        Les pizzas sont aussi &agrave; <strong>emporter</strong> mais nous ne disposons pas d'un syst&eacute;me de livraison.
    </div>
</div>
