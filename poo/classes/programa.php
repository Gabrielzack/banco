<?php

    require 'Conta.php';

    $minhaConta = new Conta();

    $minhaConta -> dono = "Zackerson";
    $minhaConta -> cpf = "05777252974";
    $minhaConta -> deposita(12500);

    $minhaConta -> saca(500);

    $contaMae = new Conta();
    $contaMae -> dono = "ICarly";

    $minhaConta -> transferePara($contaMae, 3000);

    print "O cliente {$minhaConta->dono} tem {$minhaConta->getSaldo()} de saldo, e o cliente {$contaMae->dono} tem {$contaMae->getSaldo()}";

