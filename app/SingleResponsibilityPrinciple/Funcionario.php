<?php

namespace App\SingleResponsibilityPrinciple;

class Funcionario
{
    private $id;
    private $nome;
    private $cargo;
    private $dataAdmisao;
    private $salario;

    /**
     * Funcionario constructor.
     * @param Cargo $cargo
     * @param $salario
     */
    public function __construct(Cargo $cargo, float $salario)
    {
        $this->cargo = $cargo;
        $this->salario = $salario;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return String
     */
    public function getNome(): String
    {
        return $this->nome;
    }

    /**
     * @return Cargo
     */
    public function getCargo(): Cargo
    {
        return $this->cargo;
    }

    /**
     * @return \DateTime
     */
    public function getDataAdmisao(): \DateTime
    {
        return $this->dataAdmisao;
    }

    /**
     * @return float
     */
    public function getSalario(): float
    {
        return $this->salario;
    }

    /**
     * @param int $id
     */
    public function setId(int $id)
    {
        $this->id = $id;
    }

    /**
     * @param String $novoNome
     */
    public function setNome(String $novoNome)
    {
        $this->nome = $novoNome;
    }

    /**
     * @param \DateTime $data
     */
    public function setDataAdmisao(\DateTime $data)
    {
        $this->dataAdmisao = $data;
    }

    /**
     * @return float
     */
    public function calculaSalario(): float
    {
        return $this->getCargo()->getRegra()->calcula($this);
    }
}
