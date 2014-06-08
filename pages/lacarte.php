<?php
    require('pizzas.php');
    $this->add('javascript', '<script src="' . $this->path('js/lacarte.js') . '"></script>');
    $this->set('title', 'Pizzeria Fabrizio - La carte');
?>
<div class="row">
    <div class="col-md-6">
        <div class="btn-group margin-bottom-md" data-toggle="buttons" style="width:100%">
            <label class="btn btn-default active" style="width:30%">
                <input type="radio" name="options" id="option1"> <i class="glyphicon glyphicon-align-justify"></i> Pizzas
            </label>
            <label class="btn btn-default" style="width:40%">
                <input type="radio" name="options" id="option2"> <i class="glyphicon glyphicon-plus"></i> Suppl&eacute;ments
            </label>
            <label class="btn btn-default" style="width:30%">
                <input type="radio" name="options" id="option3"> <i class="glyphicon glyphicon-glass"></i> Boissons
            </label>
        </div>
    </div>
    <div class="col-md-6">
        <div class="input-group margin-bottom-md">
            <input type="text" class="form-control" placeholder="Rechercher">
            <div class="input-group-btn">
            <button class="btn btn-default"><i class="glyphicon glyphicon-search"></i></button>
        </div>
    </div>
</div>

</div>
<?php
    $i = 0;
    foreach ($pizzas as $name => $pizza) {
?>
    <?php if ($i === 0 or $i % 3 === 0) { ?>
        <div class="row" id="pizzas">
    <?php } ?>
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <?php echo htmlentities($name); ?>

                </div>
                <div class="panel-body" style='min-height:90px'>
                    <i><?php echo htmlentities($pizza['ingredients']); ?></i>

                </div>
                <div class="panel-footer text-right">
                    <span class="label label-success"><?php echo htmlentities($pizza['price']); ?> &euro;</span>
                    <span class="label label-primary"><?php echo htmlentities($pizza['price']); ?> &euro;</span>
                </div>
            </div>
        </div>
    <?php if (($i + 1) % 3 === 0) { ?>
        </div>
    <?php } ?>
<?php $i++; } ?>

<div class="panel penel-default">
    <div class="panel-body text-center">
        <span class="label label-success">Prix &agrave; emporter</span>
        <span class="label label-primary">Prix &agrave; manger sur place</span>
    </div>
</div>
