<?php
class Categorias {
    private $codigoDaCategoria;
    private $nomeDaCategoria;
    private $descricao;
    private $figura;

    // metodos
    public function __construct($nomeDaCategoria, $descricao, $figura){
        $this->nomeDaCategoria = $nomeDaCategoria;
        $this->descricao = $descricao;
        $this->$figura = $figura;
    }
        private function set_informacoes(){
            $this->nomeDaCategoria = $nomeDaCategoria;
            $this->descricao = $descricao;
            $this->$figura = $figura;
        }
            private function get_informacoes(){
                $this->nomeDaCategoria = $nomeDaCategoria;
                $this->descricao = $descricao;
                $this->$figura = $figura; 
            }
}
?>