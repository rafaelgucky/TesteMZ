<?php

namespace App\Models;

use Doctrine\ORM\Mapping as ORM;

/**
 * @Entity
 * @Table(name="pessoas")
 */
class Pessoa 
{
    /**
     * @Id @Column(type="integer") @GeneratedValue
     * @var int
     */
    private $id;

    /**
     * @Column(type="string")
     * @var string
     */
    private $nome;

    /**
     * @Column(type="string")
     * @var string
     */
    private $cpf;

    /**
     * @OneToMany(targetEntity="Contato", mappedBy="pessoa", indexBy="contato", cascade={"remove"})
     */
    //, cascade={"persist"}
    private $contatos;

    public function getId() {
        return $this->id;
    }

    public function getNome(){
        return $this->nome;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getCpf(){
        return $this->cpf;
    }

    public function setCpf($cpf){
        $this->cpf = $cpf;
    }
}
?>