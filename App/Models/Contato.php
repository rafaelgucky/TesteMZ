<?php

namespace App\Models;

use Doctrine\ORM\Mapping as ORM;

// #[ORM\Table(name: "contato")]
// #[ORM\Entity]

/**
 * @Entity
 * @Table(name="contatos")
 */
class Contato
{
    /**
     * @Id @Column(type="integer") @GeneratedValue
     * @var int
     */
    private int $id;

    /**
     * @Column(type="boolean")
     * @var bool
     */
    private bool $tipo;

    /**
     * @Column(type="string")
     * @var string
     */
    private string $descricao;

    /**
     * @ManyToOne(targetEntity="Pessoa")
     * @var int
     */
    //, inversedBy="stocks"
    private int $idPessoa;


    public function getId()
    {
        return $this->id;
    }

    public function getTipo()
    {
        return $this->tipo;
    }

    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
    }

    public function getDescricao()
    {
        return $this->descricao;
    }

    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;
    }

    public function getPerson()
    {
        return $this->idPessoa;
    }
}
