<?php
session_start();

require("config.php");
require("/class/FrontController.php");

new FrontController($config);

?>
