<?php

class Conta
{

    public  $cpf;
    public  $dono;
    private $saldo = 0;
    public $limite;

    public function getSaldo(): float{
        return $this->saldo;
    }



    public  function deposita(float $valor){
        $this-> saldo += $valor;
    }

    public function saca(float $valor){
        if ($valor <= $this->saldo){
            $this-> saldo -= $valor;
            return true;
        }else{
            return false;
        }

    }
    public function transferePara(Conta $contaDestino, float $valor){
        //sacar o money da minha conta
        $deuCerto = $this-> saca ($valor);

        if ($deuCerto){
            $contaDestino -> deposita($valor);
        }
    }
}
