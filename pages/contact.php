<?php
    $this->set('title', 'Pizzeria Fabrizio - Contactez-Nous');
    $this->add(
        'stylesheet',
        '<style>
            body {
                background: #fff url("' .  $this->path('img/contact.jpg') . '") no-repeat center center fixed;
                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: cover;
            }
        </style>'
    );
    $this->add('javascript', '<script src="' . $this->path('js/modal.js') . '"></script>');
    $this->add('javascript', '<script src="' . $this->path('js/contact.js') . '"></script>');
?>
<div class="row">
    <div class="col-sm-6">
        <div class="panel panel-default">
            <div class="panel-heading">
                Contactez-Nous
            </div>
            <div class="panel-body">
                <a href="<?php echo $this->path('leresto'); ?>">
                    <img src="<?php echo $this->path('img/resto/2.jpg'); ?>" width="250" class="img-responsive center-block" alt="Pizzeira fabrizio">
                </a>
            </div>
                <ul class="list-group">
                    <li class="list-group-item">
                        <span class="label label-default"><i class="glyphicon glyphicon-time"></i></span> Ouvert tous les jours de 18h &agrave; 22h
                    </li>
                    <li class="list-group-item">
                        <span class="label label-default"><i class="glyphicon glyphicon-earphone"></i></span> 010/65.60.78 &nbsp;&nbsp;-&nbsp;&nbsp; 0497/39.33.97
                    </li>
                    <li class="list-group-item">
                        <span class="label label-default"><i class="glyphicon glyphicon-map-marker"></i></span> Route Provinciale 15 - 1450 Chastre
                    </li>
                    <li class="list-group-item">
                        <span class="label label-default"><i class="glyphicon glyphicon-envelope"></i></span> info@chastrepizza.be
                    </li>
                </ul>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="panel panel-default">
            <div class="panel-heading">
               Carte d'acc&egrave;s
            </div>
            <div class="panel-body">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d10125.203395128014!2d4.645868741784458!3d50.62152777930204!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c17f18859dd615%3A0xe3638981695c830a!2sRoute+Provinciale+15!5e0!3m2!1sfr!2sbe!4v1400442790303" width="100%" height="300" frameborder="0" style="border:0"></iframe>
            </div>
        </div>
    </div>
</div>
<div class="panel panel-default">
    <div class="panel-heading">
       Envoyez-nous un mail
    </div>
    <form method="post" action="http://www.chastrepizza.be/cgi-bin/FormMail.pl" accept-charset="ISO-8859-1">
        <div class="panel-body">
            <div class="input-group margin-bottom-md">
                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                <input name="realname" type="text" class="form-control" placeholder="Votre nom">
            </div>
            <div class="input-group margin-bottom-md">
                <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                <input name="email" type="text" class="form-control" placeholder="Votre email">
            </div>
            <div>
                <textarea name="message" class="form-control" rows="5" placeholder="Message"></textarea>
            </div>
            <input type="hidden" name="recipient" value="info@chastrepizza.be">
            <input type="hidden" name="subject" value="Email de chastrepizza.be">
            <input type="hidden" name="redirect" value="http://chastrepizza.be/email">
            <input type="hidden" name="missing_fields_redirect" value="http://chastrepizza.be/email-error">
            <input type="hidden" name="required" value="realname,email,message">

        </div>
        <div class="panel-footer text-right">
            <button type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-ok"></i> Envoyer</button>
        </div>
    </form>
</div>
