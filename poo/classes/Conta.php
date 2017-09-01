<?php

class Conta
{

    public  $cpf;
    public  $dono;
    private $saldo = 0;
    public $limite;

    public function mostra(): float{
        return $this->saldo;
    }


    public  function deposita(float $valor){
        if ($valor > 0){
        $this-> saldo += $valor;
        return true;

        }else{
        return false;
        }
    }


    public function saca(float $valor): bool {
        if ($valor < $this->saldo){
            $this-> saldo -= $valor;
            return true;
        }else{
            return false;
        }

    }
    public function transferePara(Conta $contaDestino, float $valor){

        $deuCerto = $this-> saca ($valor);

        if ($deuCerto){
            $contaDestino -> deposita($valor);
        }
    }
}
