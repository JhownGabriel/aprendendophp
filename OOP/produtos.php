<?php
class Produtos {
    private $codigoProduto;
    public $nomeDoProduto;
    private $codigoFornecedor;
    private $codigoCategoria;
    private $quantidadePorUnidade;
    public $precoUnitario;
    private $unidadesEmEstoque;
    private $unidadesPedidas;
    private $nivelDeEstoque;
    public $descontinuado;

    // metodos
    public function __construct($nomeDoProduto, $codigoFornecedor, $codigoCategoria,
    $quantidadePorUnidade, $precoUnitario, $unidadesEmEstoque, $unidadesPedidas, $nivelDeEstoque,
    $descontinuado){
        $this->nomeDoProduto = $nomeDoProduto;
        $this->codigoFornecedor = $codigoFornecedor;
        $this->codigoCategoria = $codigoCategoria;
        $this->quantidadePorUnidade = $quantidadePorUnidade;
        $this->precoUnitario = $precoUnitario;
        $this->unidadesEmEstoque = $unidadesEmEstoque;
        $this->unidadesPedidas = $unidadesPedidas;
        $this->nivelDeEstoque = $nivelDeEstoque;
        $this->descontinuado = $descontinuado;
    }
}
?>