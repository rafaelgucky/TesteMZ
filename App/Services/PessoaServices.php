<?php
namespace App\Services;
use App\Models\Pessoa;

class PessoaServices
{
    private $entityManager;

    public function __construct() {
        $this->entityManager = require "../bootstrap.php";
    }

    public function create($pessoa)
    {
        $this->entityManager->persist($pessoa);
        $this->entityManager->flush();
    }

    public function readAll()
    {
        $pessoaRepository = $this->entityManager->getRepository(Pessoa::class);
        return $pessoaRepository->findAll();
    }

    public function findById($id)
    {
        return $this->entityManager->getRepository(Pessoa::class)->find($id);
    }

    public function findByNome($nome)
    {
        return $this->entityManager->getRepository(Pessoa::class)->findBy(["nome" => $nome]);
    }


    public function update($id, $nome, $cpf)
    {
        $pessoa = $this->entityManager->getRepository(Pessoa::class)->find($id);

        if ($pessoa != null) {
            $pessoa->setNome($nome);
            $pessoa->setCpf($cpf);
            $this->entityManager->persist($pessoa);
            $this->entityManager->flush();
        }
    }

    public function delete($id)
    {
        $pessoa = $this->entityManager->getRepository(Pessoa::class)->find($id);
        if($pessoa != null)
        {
            $this->entityManager->remove($pessoa);
            $this->entityManager->flush();
        }   
    }
}
?>