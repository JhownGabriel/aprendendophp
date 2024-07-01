<?php
class Cliente {
    // propriedades
    private $codigoDoCliente;
    private $nomeCliente;
    private $endereco;
    private $cidade;
    private $cep;
    private $uf;
    private $pais;
    private $telefone;
    private $fax;

    // metodos
    public function __construct($nomeCliente, $endereco, $cidade, $cep, $uf, $pais, $telefone, $fax){
        $this->nomeCliente = $nomeCliente;
        $this->endereco = $endereco;
        $this->cidade = $cidade;
        $this->cep = $cep
        $this->uf = $uf;
        $this->pais = $pais;
        $this->telefone = $telefone;
        $this->fax = $fax;
    }
        // setar informaçoes do endereco
        function set_endereco($endereco, $cidade, $cep, $uf, $pais){
            $this->endereco = $endereco;
            $this->cidade = $cidade;
            $this->cep = $cep;
            $this->uf = $uf;
            $this->pais = $pais;
        }
            // pegar informaçoes do endereço
            function get_endereco(){
                $this->endereco;
                $this->cidade;
                $this->cep;
                $this->uf;
                $this->pais;
            }
        function set_telefoneEfax($telefone, $fax){
            $this->telefone = $telefone;
            $this->fax = $fax;
        }
            function get_telefoneEfax(){
                $this->telefone = $telefone;
                $this->fax = $fax;
            }
        function set_nome($nomeCliente){
            $this->nomeCliente = $nomeCliente;
        } 
            function get_nome(){
                $this->nomeCliente = $nomeCliente;
            }    
}       
?>