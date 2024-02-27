<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body><pre>
   <?php
    require_once 'ContaBanco.php';
    $conta1 = new ContaBanco();
    $conta1->abrirConta("CC");
    $conta1->setDono("Maria");

    $conta2 = new ContaBanco();
    $conta2->abrirConta("CC");
    $conta2->setDono("Lucas");
    $conta2->setNumConta("11221212");
    $conta2->depositar(100);
    $conta2->sacar(50);

    print_r($conta1);
    print_r($conta2);
   ?>
   <pre>
</body>
</html>
