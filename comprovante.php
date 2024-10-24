<?php

$lanche1 = $_POST["lanche1"];// X-Salada
$lanche2 = $_POST["lanche2"];// X-Burger
$lanche3 = $_POST["lanche3"];// X-Tudo
$bebida1 = $_POST["bebida1"];//Coca-Cola lata
$bebida2 = $_POST["bebida2"];//Tubaina 2 litros
$bebida3 = $_POST["bebida3"];//Coca-cola 2 litros
$porcao1 = $_POST["porcao1"];//Batata Frita
$porcao2 = $_POST["porcao2"];//Costela
$porcao3 = $_POST["porcao3"];//Mandioca
$doce1 = $_POST["doce1"];//Sorvete
$doce2 = $_POST["doce2"];//Bolo de Pote
$doce3 = $_POST["doce3"];//Petit gâteau


$obs = $_POST["obs"];//obs
$ValorTotal = 0.00;

if (isset($_POST["X-Salada"])){
    $ValorTotal += 18.50 * $lanche1;
}

if (isset($_POST["X-Burger"])){
    $ValorTotal += 14.00 * $lanche2;
}

if (isset($_POST["X-Tudo"])){
    $ValorTotal += 32.50 * $lanche3;
}

if (isset($_POST["Coca-Colalata"])){
    $ValorTotal += 6.50 * $bebida1;
}

if (isset($_POST["Tubaina2litros"])){
    $ValorTotal += 10.00 * $bebida2;
}

if (isset($_POST["Coca-cola2litros"])){
    $ValorTotal += 15.50 * $bebida3;
}

if (isset($_POST["BatataFrita"])){
    $ValorTotal += 38.00 * $porcao1;
}

if (isset($_POST["Costela"])){
    $ValorTotal += 75.80 * $porcao2;
}

if (isset($_POST["Mandioca"])){
    $ValorTotal += 45.50 * $porcao3;
}

if (isset($_POST["Sorvete"])){
    $ValorTotal += 8.00 * $doce1;
}

if (isset($_POST["BolodePote"])){
    $ValorTotal += 15.00 * $doce2;
}

if (isset($_POST["Petitgateau"])){
    $ValorTotal += 25.90 * $doce3;
}

//exibindo o valor total
echo "Pedido realizado com sucesso!!<br>";
echo "Seu pedido ficou em R$ ", $ValorTotal;
echo "<br>Observação: ", $obs;
echo "<br><a href = 'index.html'>Voltar</a> ";
?>