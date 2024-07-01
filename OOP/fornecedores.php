<?php
class Fornecedores {
    private $codigoDoFornecedor;
    public $nomeDaEmpresa;
    private $nomeDoContato;
    private $cargoDoContato;
    private $endereco;
    public $cidade;
    public $uf;
    private $cep;
    public $pais;
    private $telefone;
    private $fax;

    // metodos
    public function __construct($codigoDoFornecedor, $nomeDaEmpresa, $nomeDoContato, $cargoDoContato,
    $cidade, $uf, $cep, $pais, $telefone, $fax) {
        $this->nomeCliente = $nomeCliente;
        $this->endereco = $endereco;
        $this->cidade = $cidade;
        $this->cep = $cep
        $this->uf = $uf;
        $this->pais = $pais;
        $this->telefone = $telefone;
        $this->fax = $fax;
    }
}
?>