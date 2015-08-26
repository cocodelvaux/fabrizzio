<?php
    $this->set('title', 'Pizzeria Fabrizio - Le restaurant');
    $this->add(
        'javascript-header',
        '<!--[if lt IE 8]>
            <script>
                document.location.href = "' . $this->path('lacarte') . '"
            </script>
        <![endif]-->'
    );
    $this->add(
        'stylesheet',
        '<style>
            body {
                background: #fff url("' .  $this->path('img/leresto.jpg') . '") no-repeat center center fixed;
                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover;
            }
        </style>'
    );
    $this->add('javascript-header', '<script src="' . $this->path('js/fullscreen.js') . '"></script>');
?>
<div class="panel panel-default">
    <div class="panel-heading">
        D&eacute;couvrez quelques photos de notre pizzeria!
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-8">
                <div id="carousel" class="carousel slide margin-bottom-md" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators hidden-xs">
                        <?php for($i = 0; $i < 15; $i++) { ?>
                            <li data-target="#carousel" data-slide-to="<?php echo $i; ?>"<?php echo $i === 0 ? ' class="active"' : ''; ?>></li>
                        <?php } ?>
                    </ol>
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <?php for($i = 1; $i <= 15; $i++) { ?>
                            <div class="item<?php echo $i === 1 ? ' active' : '' ; ?>">
                                <img src="<?php echo $this->path('img/resto/'. $i .'.jpg'); ?>" alt="photo restaurant">
                                <div class="carousel-caption"></div>
                            </div>
                        <?php } ?>
                    </div>
                    <!-- Controls -->
                    <a class="left carousel-control" href="#carousel" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                    </a>
                    <a class="right carousel-control" href="#carousel" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                    </a>
                </div>
            </div>
            <div class="col-md-4">
                <button class="btn btn-primary col-md-12" onClick="javascript:enterFullscreen('carousel')">
                    Voir les photos en plein écran  <i class="fa fa-expand"></i>
                </button>
            </div>
        </div>
    </div>
</div>
