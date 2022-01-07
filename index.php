<?php

// Matriz com todos os numeros
$numerosSorteados = array("1", "2", "3", "4", "5", "6", "7", "8", "9", "10");

$quantidadeNumero = sizeof($numerosSorteados);


$sorteado[1] = $numerosSorteados[rand(0,$quantidadeNumero - 1)];

for ($i = 1; $i < 2; $i++) {
    $sorteado[2] = $numerosSorteados[rand(0,$quantidadeNumero - 1)];
}
for ($i = 1; $i < 2; $i++) {
    $sorteado[3] = $numerosSorteados[rand(0,$quantidadeNumero - 1)];
    }


for ($i = 1; $i < 2; $i++) {
    $sorteado[4] = $numerosSorteados[rand(0,$quantidadeNumero - 1)];
}
for ($i = 1; $i < 2; $i++) {
    $sorteado[5] = $numerosSorteados[rand(0,$quantidadeNumero - 1)];
}    
for ($i = 1; $i < 2; $i++) {
    $sorteado[6] = $numerosSorteados[rand(0,$quantidadeNumero - 1)];
}    
for ($i = 1; $i < 2; $i++) {
    $sorteado[7] = $numerosSorteados[rand(0,$quantidadeNumero - 1)];
}   
for ($i = 1; $i < 2; $i++) {
    $sorteado[8] = $numerosSorteados[rand(0,$quantidadeNumero - 1)];
}    
for ($i = 1; $i < 2; $i++) {
    $sorteado[9] = $numerosSorteados[rand(0,$quantidadeNumero - 1)];
}    
for ($i = 1; $i < 2; $i++) {
    $sorteado[10] = $numerosSorteados[rand(0,$quantidadeNumero - 1)];
    }

for ($i = 1; $i < 2; $i++) {
    $sorteado[11] = $numerosSorteados[rand(0,$quantidadeNumero - 1)];
    }

for ($i = 1; $i < 2; $i++) {
    $sorteado[12] = $numerosSorteados[rand(0,$quantidadeNumero - 1)];
    }

for ($i = 1; $i < 2; $i++) {
    $sorteado[13] = $numerosSorteados[rand(0,$quantidadeNumero - 1)];
    }

for ($i = 1; $i < 2; $i++) {
    $sorteado[14] = $numerosSorteados[rand(0,$quantidadeNumero - 1)];
    }

for ($i = 1; $i < 2; $i++) {
    $sorteado[15] = $numerosSorteados[rand(0,$quantidadeNumero - 1)];
    }

for ($i = 1; $i < 2; $i++) {
    $sorteado[16] = $numerosSorteados[rand(0,$quantidadeNumero - 1)];
    }

for ($i = 1; $i < 2; $i++) {
    $sorteado[17] = $numerosSorteados[rand(0,$quantidadeNumero - 1)];
    }

for ($i = 1; $i < 2; $i++) {
    $sorteado[18] = $numerosSorteados[rand(0,$quantidadeNumero - 1)];
    }

for ($i = 1; $i < 2; $i++) {
    $sorteado[19] = $numerosSorteados[rand(0,$quantidadeNumero - 1)];
    }

for ($i = 1; $i < 2; $i++) {
    $sorteado[20] = $numerosSorteados[rand(0,$quantidadeNumero - 1)];
    }


if( $sorteado[1] < $sorteado[2] && $sorteado[2] < $sorteado[3] && $sorteado[3] < $sorteado[4] && $sorteado[4] < $sorteado[5] && $sorteado[5] < $sorteado[6]){
    $resposta = "true";
} else{
    $resposta = "false";
}


echo $sorteado[1] . ",";
echo $sorteado[2] . ",";
echo $sorteado[3] . ",";
echo $sorteado[4] . ",";
echo $sorteado[5] . ",";
echo $sorteado[6] . "  $resposta" . "</b> <br /> </b> <br />";

if( $sorteado[6] < $sorteado[7] && $sorteado[7] < $sorteado[8] && $sorteado[8] < $sorteado[9] && $sorteado[9] < $sorteado[10] && $sorteado[10] < $sorteado[11]){
    $resposta = "true";
} else{
    $resposta = "false";
}


echo $sorteado[7] . ",";
echo $sorteado[8] . ",";
echo $sorteado[9] . ",";
echo $sorteado[10] . ",";
echo $sorteado[11] . ",";
echo $sorteado[12] . "  $resposta" . "</b> <br /> </b> <br />";

if( $sorteado[13] < $sorteado[14] && $sorteado[14] < $sorteado[15] && $sorteado[15] < $sorteado[16] && $sorteado[16] < $sorteado[17] && $sorteado[117] < $sorteado[18]){
    $resposta = "true";
} else{
    $resposta = "false";
}


echo $sorteado[13] . ",";
echo $sorteado[14] . ",";
echo $sorteado[15] . ",";
echo $sorteado[16] . ",";
echo $sorteado[17] . ",";
echo $sorteado[18] . "  $resposta" . "</b> <br /> </b> <br />";

echo "Numeros aleatorios caso sejam sequencial ira aparecer true caso não sejam aparecera false.<br /><br />";
?>