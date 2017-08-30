<?php


class Conta
{
    public $numero;     //public-> publico, qualquer um pode ter acesso;
    private $saldo;      //parece variavel, mas não é. É um atributo, que representa o que uma classe tem;
    public $dono;       //se não colocar o "public" automaticamente ela já vira publica;
    public $senha;


    function getSaldo(){
        return $this->saldo;

    }


    function setSaldo(){
            //se o saldo é positivo..
           $this->saldo=$saldo;
    }



    public function sacar(float $valor){

        if($valor<= $this -> saldo ){                       //só posso sacar se o valor for menor ou igual ao saldo;
            $this->saldo = $this -> saldo -$valor;         //não é variavel normal, a gente ta se referindo a um atributo;
            return true;

        }else{
            return false;
        }
    }


    public function deposita(float $valor){           //float = especificação, de que terá que ser decimal... ele converte um inteiro para decimal (2 = 2,0);
        $this->saldo += $valor;                       //simplificar...
    }

    public function transferePara(Conta $contaDestino, $valor){     //Conta é um tipo, como o booleno, string, int e etc, porque ela tem uma especificação.

        $deuCerto = $this -> sacar($valor);

        if($deuCerto){
            $contaDestino -> deposita($valor);
        }

    }

}


