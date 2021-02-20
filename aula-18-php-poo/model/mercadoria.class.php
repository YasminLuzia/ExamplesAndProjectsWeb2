<?php
class Mercadoria
{
    private $nome;
    private $valor;
    private $tipoPagamento;

    public function calcularTotal()
    {
        if ($this->tipoPagamento == 1) {
            return $this->valor * 0.95;
        } else {
            return $this->valor * 1.18;
        }
    }


    /**
     * Get the value of nome
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     *
     * @return  self
     */
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get the value of valor
     */
    public function getValor()
    {
        return $this->valor;
    }

    /**
     * Set the value of valor
     *
     * @return  self
     */
    public function setValor($valor)
    {
        $this->valor = $valor;

        return $this;
    }

    /**
     * Get the value of tipoPagamento
     */
    public function getTipoPagamento()
    {
        return $this->tipoPagamento;
    }

    /**
     * Set the value of tipoPagamento
     *
     * @return  self
     */
    public function setTipoPagamento($tipoPagamento)
    {
        $this->tipoPagamento = $tipoPagamento;

        return $this;
    }

    public function toString()
    {
        return "Nome: " . $this->nome . "</p><p>
        Valor: R$ " . $this->valor . "</p><p>
        Tipo de Pagamento: " . $this->tipoPagamento . "</p><p>";
    }
}
