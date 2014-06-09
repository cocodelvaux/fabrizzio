<?php
    $this->set('title', 'Pizzeria Fabrizio - Accueil');
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
                <p><strong>Notre pizzeria de Chastre,</strong> situ&eacute;e dans un cadre verdoyant, &agrave; <strong>5 minutes de Louvain-la neuve</strong> vous accueille dans une ambiance familiale et chaleureuse tous les soirs de la semaine.</p>
                <p>Venez d&eacute;couvrir le go&ucirc;t de nos pizzas pr&eacute;par&eacute;es avec des <strong>ingr&eacute;dients de qualit&eacute;</strong> qui font l'authenticit&eacute; de la pizzeria Fabrizio.</p>
                <p><strong>Mangez sur place</strong> et laissez vous emporter par les photos qui ornent notre restaurant et voyagez &agrave; travers les diff&eacute;rentes villes comme Rome, Venise ou encore Naples.</p>
                <p>Profitez &eacute;galement de <strong>notre terrasse</strong> qui se situe au calme dans le joli jardin de notre pizzeria.</p>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-sm-4 margin-bottom-md">
                <img src="<?php echo $this->path('img/pizza.jpg'); ?>" class="img-responsive img-thumbnail margin-bottom-sm" alt="photo du restaurant">
                <p>Notre carte propose un large panel de pizzas, il y a en pour tous les goûts!</p>
                <div class="visible-xs"><a href="<?php echo $this->path('lacarte'); ?>" class="btn btn-primary">Découvrez notre carte</a></div>
            </div>
            <div class="col-sm-4 margin-bottom-md">
                <img src="<?php echo $this->path('img/fabrizio.jpg'); ?>" class="img-responsive img-thumbnail margin-bottom-sm" alt="photo du restaurant">
                <p>Pour suivre nos actualités venez visiter notre page Facebook! vous pourrez également y laisser vos commentaires</p>
                <div class="visible-xs"><a href="https://www.facebook.com/pages/Pizzeria-Fabrizio/304604589650586?fref=ts" class="btn btn-primary">Rejoignez notre page facebook</a></div>
            </div>
            <div class="col-sm-4 margin-bottom-md">
                <img src="<?php echo $this->path('img/resto1.png'); ?>" class="img-responsive img-thumbnail margin-bottom-sm" alt="photo du restaurant">
                <p>Venez découvrir notre restaurant à travers nos photos</p>
                <div class="visible-xs"><a href="<?php echo $this->path('leresto'); ?>" class="btn btn-primary">Voir la galerie de photos</a></div>
            </div>
        </div>
        <div class="row margin-bottom-md hidden-xs">
            <div class="col-sm-4">
                <a href="<?php echo $this->path('lacarte'); ?>" class="btn btn-primary">Découvrez notre carte</a>
            </div>
            <div class="col-sm-4">
                <a href="https://www.facebook.com/pages/Pizzeria-Fabrizio/304604589650586?fref=ts" class="btn btn-primary">Rejoignez notre page facebook</a>
            </div>
            <div class="col-sm-4">
                <a href="<?php echo $this->path('leresto'); ?>" class="btn btn-primary">Voir la galerie de photos</a>
            </div>
        </div>
        <hr>
        <div class="row margin-top-md">
            <div class="col-sm-12">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d5062.63092294148!2d4.646408!3d50.62125629999991!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c17f18859dd615%3A0xe3638981695c830a!2sRoute+Provinciale+15!5e0!3m2!1sfr!2s!4v1402305731432" width="100%" height="300" frameborder="0" style="border:0"></iframe>

            </div>
        </div>
    </div>
    <div class="panel-footer">
        Les pizzas sont aussi &agrave; <strong>emporter</strong> mais nous ne disposons pas d'un syst&eacute;me de livraison.
    </div>
</div>
