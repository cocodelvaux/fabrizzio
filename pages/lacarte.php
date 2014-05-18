<?php
    $pizzas = array(
        'Margherita' => array('ingredients' => 'Tomate, Mozzarella', 'price' => '7,00'),
        'Puglia' => array('ingredients' => 'Tomate, ail', 'price' => '7,00'),
        'Primavera ' => array('ingredients' => 'Tomate, mozzarella, jambon', 'price' => '8,00'),
        'Salame' => array('ingredients' => 'Tomate, mozzarella, salami', 'price' => '8,00'),
        'Veneziana ' => array('ingredients' => 'Tomate, mozzarella, oignons, parmesan', 'price' => '8,00'),
        'Al tonno' => array('ingredients' => 'Tomate, mozzarella, thon, oignons', 'price' => '8,50'),
        'Funhgi' => array('ingredients' => 'Tomate, mozzarella, jambon, champignons', 'price' => '8,50'),
        'Chorizo' => array('ingredients' => 'Tomate, mozzarella, chorizo', 'price' => '8,50'),
        'Napoletana' => array('ingredients' => 'Tomate, mozzarella, anchois, câpres, olives', 'price' => '8,50'),
        'Hawaï' => array('ingredients' => 'Tomate, mozzarella, jambon, ananas', 'price' => '8,50'),
        'Paolo' => array('ingredients' => 'Tomate, mozzarella, lardons, oignons', 'price' => '9,00'),
        'Antonio' => array('ingredients' => 'Tomate, mozzarella, chèvre, miel', 'price' => '9,00'),
        'Capriciosa' => array('ingredients' => 'Tomate, mozzarella, jambon, champignons, artichauts, poivrons', 'price' => '10,00'),
        '4 Stagioni' => array('ingredients' => 'Tomate, mozzarella, jambon, champignons, artichauts, olives', 'price' => '10,00'),
        '4 Formaggi' => array('ingredients' => 'Tomate, mozzarella, parmesan, taleggio, gorgonzola', 'price' => '10,00'),
        'Parme' => array('ingredients' => 'Tomate, mozzarella, jambon de parme', 'price' => '10,00'),
        'Parmigiana' => array('ingredients' => 'Tomate, mozzarella, aubergines, parmesan', 'price' => '12,00'),
        'Scampi' => array('ingredients' => 'Tomate, mozzarella, scampi, ail', 'price' => '13,00'),
        'Fruitti di mare' => array('ingredients' => 'Tomate, mozzarella, fruit de mer, ail', 'price' => '13,00'),
        'Parme et rucola' => array('ingredients' => 'Tomate, mozzarella, jambon de parme, roquette, cp de parmesan, tomates cerises', 'price' => '13,00'),
        'Fabrizio' => array('ingredients' => 'Tomate, mozzarella, asperges, cp de parmesan, roquette, huile de trufle', 'price' => '13,00'),
        'Salsiccia' => array('ingredients' => 'Tomate, mozzarella, saucisses italiennes, piments frais', 'price' => '13,00'),
        'Nutella' => array('ingredients' => 'Nutella', 'price' => '10,00'),
        'Nutella bannanes' => array('ingredients' => 'Nutella, Bannanes', 'price' => '11,00'),
    );
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
                    <?php $this->html($name); ?><span class="label label-primary pull-right"><?php $this->html($pizza['price']); ?>&euro;</span>
                </div>
                <div class="panel-body" style='min-height:80px'>
                    <i><?php $this->html($pizza['ingredients']); ?></i>

                </div>
                <!--<div class="panel-footer text-right">

                </div>-->
            </div>
        </div>
    <?php if (($i + 1) % 3 === 0) { ?>
        </div>
    <?php } ?>
<?php $i++; } ?>
