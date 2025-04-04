<?php

namespace App\Models;


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
     * @Column(type="boolean", options={"default": false})
     * @var bool
     */
    private bool $tipo = false;

    /**
     * @Column(type="string")
     * @var string
     */
    private string $descricao;

    /** @ManyToOne(targetEntity="Pessoa", inversedBy="contatos")*/
    private Pessoa $pessoa;


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

    public function getPessoa()
    {
        return $this->pessoa;
    }
    public function setPessoa($Pessoa)
    {
        $this->pessoa = $Pessoa;
    }
}
