<?php
class ItensPedidos {
    private $numeroDoPedido;
    private $codigoDoProduto;
    private $PrecoUnitario;
    private $quantidade;
    private $desconto;

    // metodos
    public function __construct($numeroDoPedido, $codigoDoProduto, $PrecoUnitario, $quantidade,
    $desconto){
        $this->numeroDoPedido = $numeroDoPedido;
        $this->codigoDoProduto = $codigoDoProduto;
        $this->PrecoUnitario = $PrecoUnitario;
        $this->quantidade = $quantidade;
        $this->desconto = $desconto;
    }
        function set_preco($PrecoUnitario){
            $this->PrecoUnitario = $PrecoUnitario;
        }
        
}
?>