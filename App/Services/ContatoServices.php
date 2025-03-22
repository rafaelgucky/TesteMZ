<?php
namespace App\Services;

use App\Models\Contato;

class ContatoServices
{
    private $entityManager;

    public function __construct() {
        $this->entityManager = require "../bootstrap.php";
    }

    public function create($contato)
    {
        $this->entityManager->merge($contato);
        $this->entityManager->flush();
    }

    public function findAll()
    {
        return $this->entityManager->getRepository(Contato::class)->findAll();
    }

    public function findByIdPessoa($idPessoa)
    {
        return $this->entityManager->getRepository(Contato::class)->findBy(array("pessoa" => $idPessoa));
    }
    public function update($id, $tipo, $descricao)
    {
        $contato = $this->entityManager->getRepository(Contato::class)->find($id);
        if($contato != null)
        {
            $contato->setTipo($tipo);
            $contato->setDescricao($descricao);
            $this->entityManager->Persist($contato);
            $this->entityManager->flush();
        }
    }
    public function delete($id)
    {
        $contato = $this->entityManager->getRepository(Contato::class)->find($id);
        if($contato != null)
        {
            $this->entityManager->remove($contato);
            $this->entityManager->flush();
        }
    }
}
?>