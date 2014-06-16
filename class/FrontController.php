<?php

/**
 * @brief This file contents all of basic methods
 * @author Jorge Solis Pauwels <jorgeluissolis@gmail.com>
 */
class FrontController
{
    private $config;
    private $email;
    private $variables;

    public function __construct($config)
    {
        $this->config = $config;
        $this->email = new Email();
        $this->set('content', $this->getPageContent($this->getUrl()));
        require("layout.php");
    }

    public function getPageContent($page = 'index')
    {
        $url = __DIR__ . '/../pages/' . $page . '.php';

        if (file_exists($url)) {
            ob_start();

            require($url);

            return ob_get_clean();
        } elseif($page !== 'error') {
            return $this->getPageContent('error');
        }

        return '';
    }

    public function getUrl()
    {
        if (isset($_GET['url'])) {
            return $_GET['url'];
        }

        return 'index';
    }

    public function path($path = '')
    {
        return str_replace('/index.php', '', $_SERVER['PHP_SELF']) . '/' . $path;
    }

    public function set($key, $value)
    {
        $this->variables[$key] = $value;
    }

    public function add($key, $value)
    {
        $this->variables[$key] = $this->get($key) . $value;
    }

    public function get($key, $default = null)
    {
        if (isset($this->variables[$key])) {
            return $this->variables[$key];
        } else if ($default) {
            return $default;
        }

        return '';
    }
}
