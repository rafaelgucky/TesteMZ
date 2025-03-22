<?php
namespace App\Controllers;
use TM\Controller\Action as ControllerAction;
use App\Models\Contato;
use App\Services\ContatoServices;
use App\Services\PessoaServices;

class ContatosController extends ControllerAction
{
    public function __construct() {
        parent::__construct(new ContatoServices());
    }

    public function index($idPessoa)
    {
        if(!isset($_COOKIE["idPessoa"]))
        {
            if(!empty($idPessoa))
            {
                setcookie("idPessoa", $idPessoa["id"], time() + 10800, "/contatos");
            }
            else{
                $this->redirect("/");
            }
        }
          
        $this->view->dados = $this->service->findByIdPessoa($_COOKIE["idPessoa"]);
        $this->render("index");
    }
    public function create($idPessoa)
    {
        $this->view->dados = $idPessoa;
        $this->render("create");
    }
    public function createSave($cont)
    {
        if(!isset($_COOKIE["idPessoa"]))
        {
            $this->redirect("/");
        }

        $pessoaService = new PessoaServices();

        $contato = new Contato();
        $contato->setTipo((bool)$cont["tipo"]);
        $contato->setDescricao($cont["descricao"]);
        $contato->setPessoa($pessoaService->findById($_COOKIE["idPessoa"]));

        $this->service->create($contato);
        $this->redirect("/contatos");
    }

    public function update($request)
    {
        $this->view->dados = $request;
        $this->render("update");
    }

    public function updateSave($contato)
    {
        $this->service->update($contato["id"], $contato["tipo"], $contato["descricao"]);
        $this->redirect("/contatos");
    }

    public function delete($id)
    {
        $this->service->delete($id);
        $this->redirect("/contatos");
    }
}
?>