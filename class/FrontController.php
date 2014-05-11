<?php

/**
 * @brief This file contents all of basic functions
 * @author Jorge Solis Pauwels <jorgeluissolis@gmail.com>
 */
class FrontController
{
    public function __construct()
    {
        $content = $this->getPageContent($this->getUrl());
        require("layout.php");
    }

    public function getPageContent($page = 'index')
    {
        $url = __DIR__ . '/../pages/' . $page . '.php';

        if (file_exists($url)) {
            ob_start();

            require($url);

            return ob_get_clean();
        } elseif($page != 'error') {
            return $this->getPageContent('error');
        }

        return "";
    }

    public function getUrl()
    {
        if (isset($_GET['url'])) {
            return $_GET['url'];
        }

        return "index";
    }

    public function path($path = "")
    {
        echo str_replace('/index.php', '', $_SERVER['PHP_SELF']) . "/" . $path;
    }
}
