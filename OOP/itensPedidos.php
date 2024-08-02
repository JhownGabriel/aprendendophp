<?php
class ItensPedidos {
    private $numeroDoPedido;
    private $codigoDoProduto;
    private $PrecoUnitario;
    private $quantidade;
    private $desconto;

    // metodos
    private function __construct($numeroDoPedido, $codigoDoProduto, $PrecoUnitario, $quantidade,
    $desconto){
        $this->numeroDoPedido = $numeroDoPedido;
        $this->codigoDoProduto = $codigoDoProduto;
        $this->PrecoUnitario = $PrecoUnitario;
        $this->quantidade = $quantidade;
        $this->desconto = $desconto;
    }
        private function set_precoequantidade(){
            $this->PrecoUnitario = $PrecoUnitario;
            $this->quantidade = $quantidade;
            $this->desconto = $desconto;
        }
            private function get_precoequantidade(){
                $this->PrecoUnitario = $PrecoUnitario;
                $this->quantidade = $quantidade;
                $this->desconto = $desconto;
            }
}
?>