<?php
namespace TM\Controller;
use stdClass;
abstract class Action
{
    protected $service;
    protected $view;
    public function __construct($service) {
        $this->view = new stdClass();
        $this->service = $service;
    }

    protected function render($view)
    {
        $this->view->page = $view;
        require_once "../App/Views/layout.php";
    }

    protected function content()
    {
        $class = get_class($this);
        $class = str_replace("App\\Controllers\\", "", $class);
        $class = strtolower(str_replace("Controller", "", $class));
        include_once "../App/Views/" . $class . "/" . $this->view->page . ".php";
    }

    protected function redirect($url)
    {
        header("Location: " . $url);
        exit();
    }

}
?>