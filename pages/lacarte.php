<?php
    require('data.php');
    $this->add(
        'stylesheet',
        '<style>
            body {
                background: #fff url("' .  $this->path('img/lacarte.jpg') . '") no-repeat center center fixed;
                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover;
            }
        </style>'
    );
    $this->add('javascript', '<script src="' . $this->path('js/lacarte.js') . '"></script>');
    $this->set('title', 'Pizzeria Fabrizio - La carte');
?>
<!--[if lt IE 8]>
<div class="alert alert-danger" role="alert">
    Vous utilisez une ancienne version d'<b>Internet Explorer</b>, pour visualiser notre site internet correctement veuillez mettre &agrave; jour votre navigateur.
</div>
<![endif]-->
<div class="row" id='controls'>
    <div class="col-md-8">
        <div class="btn-group margin-bottom-md" data-toggle="buttons" style="width:100%">
            <label class="btn btn-default active" style="width:25%" data-id="pizzas">
                <input type="radio" name="options" id="option1"> <i class="fa fa-cutlery"></i> Pizzas
            </label>
            <label class="btn btn-default" style="width:25%" data-id="supplements">
                <input type="radio" name="options" id="option2"> <i class="fa fa-plus"></i> Suppl&eacute;ments
            </label>
            <label class="btn btn-default" style="width:25%" data-id="boissons">
                <input type="radio" name="options" id="option3"> <i class="fa fa-glass"></i> Boissons
            </label>
            <label class="btn btn-default" style="width:25%" data-id="desserts">
                <input type="radio" name="options" id="option2"> <i class="fa fa-spoon"></i> Desserts
            </label>
        </div>
    </div>
    <div class="col-md-4">
        <div class="search input-group margin-bottom-md">
            <input type="text" class="form-control" placeholder="Rechercher une pizza">
            <div class="input-group-btn">
                <button class="btn btn-default"><i class="fa fa-search"></i></button>
            </div>
        </div>
    </div>
</div>
<div class="lacarte">
    <div id="pizzas">
        <?php
            $i = 0;
            foreach ($pizzas as $pizza) {
        ?>
            <?php if ($i === 0 or $i % 3 === 0) { ?>
                <div class="row">
            <?php } ?>
                <div class="col-md-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <?php echo htmlentities($pizza['title']); ?>
                        </div>
                        <div class="panel-body" style='min-height:90px'>
                            <i><?php echo htmlentities($pizza['content']); ?></i>
                        </div>
                        <div class="panel-footer text-right">
                            <span class="label label-success">
                                <?php echo number_format(($pizza['price'] - 1), 2, ',', ''); ?> &euro;
                            </span>
                            &nbsp;
                            <span class="label label-primary"><?php echo number_format($pizza['price'], 2, ',', ''); ?> &euro;</span>
                        </div>
                    </div>
                </div>
            <?php if (($i + 1) % 3 === 0 or ($i + 1) >= count($pizzas)) { ?>
                </div>
            <?php } ?>
        <?php $i++; } ?>
        <div class="panel panel-default">
            <div class="panel-body text-center">
                <span class="label label-success">Prix &agrave; emporter</span>
                <span class="label label-primary">Prix &agrave; manger sur place</span>
            </div>
        </div>
    </div>
    <div id="pizzas-search" class="hide">
        <?php
            $i = 0;
            foreach ($pizzas as $pizza) {
        ?>
            <div class="panel panel-default pizza">
                <div class="panel-heading">
                    <?php echo htmlentities($pizza['title']); ?>
                </div>
                <div class="panel-body" style='min-height:70px'>
                    <i><?php echo htmlentities($pizza['content']); ?></i>
                </div>
                <div class="panel-footer text-right">
                    <span class="label label-success">
                        <?php echo number_format(($pizza['price'] - 1), 2, ',', ''); ?> &euro;
                    </span>
                    &nbsp;
                    <span class="label label-primary"><?php echo number_format($pizza['price'], 2, ',', ''); ?> &euro;</span>
                </div>
            </div>
        <?php $i++; } ?>
        <div class="panel panel-default">
            <div class="panel-body">
                <button class="show-all btn btn-primary">Afficher tout les pizzas</button>
                <div class="pull-right">
                    <span class="label label-success">Prix &agrave; emporter</span>
                    &nbsp;
                    <span class="label label-primary">Prix &agrave; manger sur place</span>
                </div>
            </div>
        </div>
    </div>
    <div id="supplements" class="hide">
        <?php
            $i = 0;
            foreach ($supplements as $suplement) {
        ?>
            <?php if ($i === 0 or $i % 3 === 0) { ?>
                <div class="row">
            <?php } ?>
                <div class="col-md-4">
                    <div class="panel panel-default">
                        <div class="panel-body" style='min-height:135px'>
                            <i><?php echo htmlentities($suplement['content']); ?></i>
                        </div>
                        <div class="panel-footer text-right">
                            <span class="label label-primary"><?php echo number_format($suplement['price'], 2, ',', ''); ?> &euro;</span>
                        </div>
                    </div>
                </div>
            <?php if (($i + 1) % 3 === 0 or ($i + 1) >= count($supplements)) { ?>
                </div>
            <?php } ?>
        <?php $i++; } ?>
    </div>
    <div id="boissons" class="hide">
        <?php
            $i = 0;
            foreach ($boissons as $boisson) {
        ?>
            <?php if ($i === 0 or $i % 2 === 0) { ?>
                <div class="row">
            <?php } ?>
                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-body" style='min-height:80px'>
                            <i><?php echo htmlentities($boisson['content']); ?></i>
                        </div>
                        <div class="panel-footer text-right">
                            <span class="label label-primary"><?php echo number_format($boisson['price'], 2, ',', ''); ?> &euro;</span>
                        </div>
                    </div>
                </div>
            <?php if (($i + 1) % 2 === 0 or ($i + 1) >= count($boissons)) { ?>
                </div>
            <?php } ?>
        <?php $i++; } ?>
    </div>
    <div id="desserts" class="hide">
        <?php
            $i = 0;
            foreach ($desserts as $dessert) {
        ?>
            <?php if ($i === 0 or $i % 3 === 0) { ?>
                <div class="row">
            <?php } ?>
                <div class="col-md-4">
                    <div class="panel panel-default">
                        <div class="panel-body" style='min-height:80px'>
                            <i><?php echo htmlentities($dessert['content']); ?></i>
                        </div>
                        <div class="panel-footer text-right">
                            <span class="label label-primary"><?php echo number_format($dessert['price'], 2, ',', ''); ?> &euro;</span>
                        </div>
                    </div>
                </div>
            <?php if (($i + 1) % 3 === 0 or ($i + 1) >= count($boissons)) { ?>
                </div>
            <?php } ?>
        <?php $i++; } ?>
    </div>
</div>
<!--[if lt IE 8]>
<script>
    function removeElement(node) {
        if (node !== undefined) {
            node.parentNode.removeChild(node);
        }
    }

    removeElement(document.getElementById('navbar'));
    removeElement(document.getElementById('controls'));
</script>
<![endif]-->
