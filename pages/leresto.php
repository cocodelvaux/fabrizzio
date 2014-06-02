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
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="4"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="5"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="6"></li>
                    </ol>
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item active">
                        <img src="<?php echo $this->path('img/resto/1.jpg'); ?>" alt="photo restaurant">
                            <div class="carousel-caption"></div>

                        </div>
                        <div class="item">
                            <img src="<?php echo $this->path('img/resto/2.jpg'); ?>" alt="photo restaurant">
                            <div class="carousel-caption"></div>
                        </div>
                        <div class="item">
                            <img src="<?php echo $this->path('img/resto/3.jpg'); ?>" alt="photo restaurant">
                            <div class="carousel-caption"></div>
                        </div>
                        <div class="item">
                            <img src="<?php echo $this->path('img/resto/4.jpg'); ?>" alt="photo restaurant">
                            <div class="carousel-caption"></div>
                        </div>
                        <div class="item">
                            <img src="<?php echo $this->path('img/resto/5.jpg'); ?>" alt="photo restaurant">
                            <div class="carousel-caption"></div>
                        </div>
                        <div class="item">
                            <img src="<?php echo $this->path('img/resto/6.jpg'); ?>" alt="photo restaurant">
                            <div class="carousel-caption"></div>
                        </div>
                        <div class="item">
                            <img src="<?php echo $this->path('img/resto/7.jpg'); ?>" alt="photo restaurant">
                            <div class="carousel-caption"></div>
                        </div>

                        </div>
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
