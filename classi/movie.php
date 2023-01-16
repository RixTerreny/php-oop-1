<?php
class film{
    private $nome;
    private $generi;
    private $uscita;
    private $lingua;

    public function __construct($_nome,$_generi,$_uscita,$_lingua){
        $this->nome = $_nome;
        $this->generi = $_generi;
        $this->uscita = $_uscita;
        $this->lingua =$_lingua;

    }

    public function showdata(){
        var_dump($this);
    }
}