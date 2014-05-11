<?php
session_start();

require("config.php");
require($config['path']."class/FrontController.php");

new FrontController($config);

?>
