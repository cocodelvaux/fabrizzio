<?php
    $this->set('title', 'Pizzeria Fabrizio - Page non trouv&eacute;e');
    $this->add(
        'javascript-header',
        '<!--[if lt IE 8]>
            <script>
                document.location.href = "' . $this->path('lacarte') . '"
            </script>
        <![endif]-->'
    );
?>
<div class="alert alert-danger">
    <i class="glyphicon glyphicon-warning-sign"></i> Page non trouv&eacute;e!
</div>
