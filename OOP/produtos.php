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
    public function __construct($nomeDoProduto, $quantidadePorUnidade, $precoUnitario,
    $unidadesEmEstoque, $unidadesPedidas, $nivelDeEstoque, $descontinuado){
        $this->nomeDoProduto = $nomeDoProduto;
        $this->quantidadePorUnidade = $quantidadePorUnidade;
        $this->precoUnitario = $precoUnitario;
        $this->unidadesEmEstoque = $unidadesEmEstoque;
        $this->unidadesPedidas = $unidadesPedidas;
        $this->nivelDeEstoque = $nivelDeEstoque;
        $this->descontinuado = $descontinuado;
    }
        private function set_produto(){
            $this->nomeDoProduto = $nomeDoProduto;
            $this->quantidadePorUnidade = $quantidadePorUnidade;
            $this->precoUnitario = $precoUnitario;
            $this->descontinuado = $descontinuado;
        }
            private function get_produto(){
                $this->nomeDoProduto = $nomeDoProduto;
                $this->quantidadePorUnidade = $quantidadePorUnidade;
                $this->precoUnitario = $precoUnitario;
                $this->descontinuado = $descontinuado;
            }
            private function get_estoque(){
                $this->unidadesEmEstoque = $unidadesEmEstoque;
                $this->unidadesPedidas = $unidadesPedidas;
                $this->nivelDeEstoque = $nivelDeEstoque;
            }
}
?>