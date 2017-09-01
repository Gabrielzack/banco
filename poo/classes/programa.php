<?php

    require 'Conta.php';

    $minhaConta = new Conta();

    $minhaConta -> dono = "Zackerson";
    $minhaConta -> cpf = "05777252974";
    $minhaConta -> deposita(3000);

    $conta2 = new Conta();
    $conta2 -> dono = "ICarly";
    $conta2 -> deposita(999999999);

    $minhaConta -> transferePara($conta2, 1);  //SET-Info, GET - SABER

    print "O cliente {$minhaConta->dono} tem {$minhaConta->mostra()} de saldo, e o cliente {$conta2->dono} tem {$conta2->mostra()}";
