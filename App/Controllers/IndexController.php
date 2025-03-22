<?php
namespace App\Controllers;
use TM\Controller\Action as ControllerAction;
use App\Services\PessoaServices;
use App\Models\Pessoa;

class IndexController extends ControllerAction
{
    public function __construct() {
        parent::__construct(new PessoaServices());
    }
    public function index($request)
    {
        if($request == [])
        {
            $this->view->dados = $this->service->readAll();
        }
        else
        {
            if(empty($request["searchByNome"]))
            {
                $this->view->dados = $this->service->readAll();
            }
            else{
                $this->view->dados = $this->service->findByNome($request["searchByNome"]);
            }
        }
        $this->render("index");
    }

    public function create($request)
    {
        if($request != [])
        {
            if(empty($request["nome"]) || empty($request["cpf"]))
            {
                return $this->render('create');
            }
            $pessoa = new Pessoa();
            $pessoa->setNome($request["nome"]);
            $pessoa->setCpf($request["cpf"]);
            
            $this->service->create($pessoa);
            $this->redirect("/");
        }
        return $this->render('create');
    }

    public function update($request)
    {
        $this->view->dados = $request;
        $this->render("update");
    }

    public function updateSave($request)
    {
        echo $request["id"];
        if(empty($request["nome"]) || empty($request["cpf"])){
            $this->redirect("/");
        }
        $this->service->update($request["id"], $request["nome"], $request["cpf"]);
        $this->redirect("/");
    }

    public function delete($id)
    {
        $this->service->delete($id);
        $this->redirect("/");
    }
}
?>