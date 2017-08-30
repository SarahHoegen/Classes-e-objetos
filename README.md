# Classes-e-objetos<?php


require_once "classes/Conta.php";

    $minhaConta = new Conta();              //new = pega e reserva um espaço na memoria criando um objeto, lá vai ter todos os atributos..$minhaconta = new Conta();...por enquanto todos os atributos são nullos.
$minhaConta ->dono = "Sarah";           //Se eu não colocar o valor, vai ser dado null...;
$minhaConta ->setSaldo(7000);
$minhaConta ->deposita(10000);

$conseguiSacar = $minhaConta -> sacar (160000);

    if ($conseguiSacar){         //posso tirar o "==true" porque a variavel já traz esse valor. ($conseguiSacar ==true), agora é ($conseguiSacar);
        print 'consegui sacar';
    }else{
        print 'não foi possível sacar';
    }

//

    $contaFriend = new Conta();
$contaFriend -> dono= "Ninguém";
$contaFriend ->setSaldo(0);



//    $myDream = new Conta();
//
//$myDream -> dono="Dreaming Sarah";
//$myDream -> saldo=10000000.55;




//Testar;
var_dump($minhaConta);
var_dump($contaFriend)
//Var_dump($myDream);
