<?php
    $this->set('title', 'Pizzeria Fabrizio - Le restaurant');
?>
<div class="panel panel-default">
    <div class="panel-heading">
        Découvrez quelques photos de notre pizzeria!
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-sm-12">
            <div id="carousel-example-generic" class="carousel slide margin-bottom-md" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <?php for($i = 0; $i < 20; $i++) { ?>
                            <li data-target="#carousel-example-generic" data-slide-to="<?php echo $i; ?>"<?php echo $i === 0 ? ' class="active"' : ''; ?>></li>
                        <?php } ?>
                    </ol>
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <?php for($i = 1; $i <= 20; $i++) { ?>
                            <div class="item<?php echo $i === 1 ? ' active' : '' ; ?>">
                                <img src="<?php echo $this->path('img/resto/'. $i .'.jpg'); ?>" alt="photo restaurant">
                                <div class="carousel-caption"></div>
                            </div>
                        <?php } ?>
                    </div>
                    <!-- Controls -->
                    <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                    </a>
                </div>


            </div>

        </div>

    </div>
    <div class="panel-footer">

    </div>
</div>
