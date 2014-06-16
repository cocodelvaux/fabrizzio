<?php
session_start();

require("config.php");
require("./class/FrontController.php");
require("./class/Email.php");

new FrontController($config);

?>
