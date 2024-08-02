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
    public function __construct($dataDoPedido, $dataDeEntrega,
    $dataDeEnvio, $frete, $nomeDestinatario, $EnderecoDestinatario, $cidadeDeDestino, $cepDeDestino,
    $paisDeDestino){
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
        private function set_datas(){
            $this->dataDoPedido = $dataDoPedido;
            $this->dataDeEntrega = $dataDeEntrega;
            $this->dataDeEnvio = $dataDeEnvio;
            $this->frete = $frete;
        }
            private function get_datas(){
                $this->dataDoPedido = $dataDoPedido;
                $this->dataDeEntrega = $dataDeEntrega;
                $this->dataDeEnvio = $dataDeEnvio;
                $this->frete = $frete;
            }
        private function set_enderecos(){
            $this->EnderecoDestinatario = $EnderecoDestinatario;
            $this->cidadeDeDestino = $cidadeDeDestino;
            $this->cepDeDestino = $cepDeDestino;
            $this->paisDeDestino = $paisDeDestino;
        }
            private function get_enderecos(){
                $this->EnderecoDestinatario = $EnderecoDestinatario;
                $this->cidadeDeDestino = $cidadeDeDestino;
                $this->cepDeDestino = $cepDeDestino;
                $this->paisDeDestino = $paisDeDestino;
            }
        private function set_nomes(){
            $this->nomeDestinatario = $nomeDestinatario;
        }
            private function get_nomes(){
                $this->nomeDestinatario = $nomeDestinatario;
            }
}
?>