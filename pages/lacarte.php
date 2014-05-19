<?php
    require('pizzas.php');
    $this->add('javascript', '<script src="' . $this->path('js/lacarte.js') . '"></script>');
?>
    <div class="input-group margin-bottom-md">
        <span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span>
        <input type="text" class="form-control" placeholder="Rechercher">
    </div>
<?php
    $i = 0;
    foreach ($pizzas as $name => $pizza) {
?>

    <?php if ($i === 0 or $i % 3 === 0) { ?>
        <div class="row">
    <?php } ?>
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <?php echo htmlentities($name); ?>
                    <span class="label label-primary pull-right"><?php echo htmlentities($pizza['price']); ?>&euro;</span>
                </div>
                <div class="panel-body" style='min-height:80px'>
                    <i><?php echo htmlentities($pizza['ingredients']); ?></i>

                </div>
            </div>
        </div>
    <?php if (($i + 1) % 3 === 0) { ?>
        </div>
    <?php } ?>
<?php $i++; } ?>
