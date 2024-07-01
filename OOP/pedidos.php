<?php
class Pedidos {
    private $numeroPedido;
    private $codigoCliente;
    private $codigoFuncionario;
    public $dataDoPedido;
    public $dataDeEntrega;
    public $dataDeEnvio;
    private $frete;
    public $nomeDestinatario;
    private $EnderecoDestinatario;
    public $cidadeDeDestino;
    private $cepDeDestino;
    public $paisDeDestino;

    // metodos
    public function __construct($numeroPedido, $codigoCliente, $codigoFuncionario, $dataDoPedido, $dataDeEntrega,
    $dataDeEnvio, $frete, $nomeDestinatario, $EnderecoDestinatario, $cidadeDeDestino, $cepDeDestino,
    $paisDeDestino){
        $this->numeroPedido = $numeroPedido;
        $this->codigoCliente = $codigoCliente;
        $this->codigoFuncionario = $codigoFuncionario;
        $this->dataDoPedido = $dataDoPedido;
        $this->dataDeEntrega = $dataDeEntrega;
        $this->dataDeEnvio = $dataDeEnvio;
        $this->frete = $frete;
        $this->nomeDestinatario = $nomeDestinatario;
        $this->EnderecoDestinatario = $EnderecoDestinatario;
        $this->cidadeDeDestino = $cidadeDeDestino;
        $this->cepDeDestino = $cepDeDestino;
        $this->paisDeDestino = $paisDeDestino;
    }
}
?>