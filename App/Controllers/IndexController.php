<?php
namespace App\Controllers;
use App\Controllers\Action;
use TM\Controller\Action as ControllerAction;

class IndexController extends ControllerAction
{
    public function index()
    {
        $this->view->dados = ["Notebook", "Computer", "Book"];
        $this->render("index");
    }
}
?>