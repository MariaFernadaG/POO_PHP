<?php

class ContaBanco{
    public $numConta;
    protected $tipo;
    private $dono;
    private $saldo;
    private $status;

    public function abrirConta($t)
    {
        $this->setTipo($t);
        $this->setStatus(true);

        if ($t == "CC") {
            $this->setSaldo(50);
        } elseif ($t == "CP") {
            $this->saldo = 150;
        }
    }
    public function  fecharConta()
    {
    if($this->getSaldo() > 0 ){
     echo "Conta ainda tem dinheiro, nao posso fecha-la";
    }else if($this->getSaldo()<0){
        echo "Conta esta em debito. Impossivel encerrar";
    }else{
        $this->setStatus(false);
    }
  }

    public function depositar($v)
    {
     if($this->getStatus()){
        $this->setSaldo($this->getSaldo()+$v);
        //$this->saldo = $this-> saldo + $v;

     }else{
        echo"conta fechada";
     }
    }
    public function sacar($v)
    {
    if($this->getStatus()){
        if($this->getSaldo()>$v){
           //$this->saldo = $this->saldo - $v;
            $this->setSaldo($this->getSaldo() - $v);
            echo"<p>Sacou  $v da conta   "    .$this-> getDono();
        }else{
            echo"Saldo insuficiente para saque";
        }
      }else{
        echo"nao pode sacar conta fechada";
      }
    }
    public function pagarMensal()
    {
     if($this->getTipo() =="CC"){
        $v = 12;
     }else if($this->getTipo=="CP"){
        $v=20;
     }if($this->getStatus()){
        $this->setSaldo($this->getSaldo()- $v);
        

     }else{
        echo"Problemas com a conta";
     }
    }
    //construtor
    public function __construct()
    {
        $this->setSaldo(0);
        $this->setStatus(false);
        echo"<p>conta realizada com sucesso </p>  ";
    }
    public function getNumConta()
    {
    return $this->numConta;
    }
    function getTipo(){
        return $this->tipo;
    }
    public function setNumConta($n)
    {
      $this->numConta = $n;  
    }
    public function getSaldo()
    {
        return $this->saldo;
    }
    function getDono(){
        return $this->dono;
    }
    function getStatus(){
        return $this->status;
    }
    function setDono($dono){
        $this->dono = $dono;
    }
    function setStatus($status){
        $this->status = $status;
    }
    function setTipo($tipo){
        $this->tipo = $tipo;
    }
    function setSaldo($saldo){
        $this->saldo = $saldo;
    }
}