
<?php
function esCapicua(int $num): bool {
    $numCadena = (string)$num; 
    $length = strlen($numCadena);

    for ($i = 0; $i < $length/2; $i++) {
        if ($numCadena[$i] == $numCadena[$length - 1 - $i]) {
            return true; 
        }
            
        
    }
    return false;

}

var_dump(esCapicua(12321));
var_dump(esCapicua(12345)); 


function esPrimo(int $num): bool {

    for ($i = 2; $i < $num/2; $i++) {
        if ($num%$i==0) {
            return false;
        
        }
    }
    return true;  

}

var_dump(esPrimo(6));
var_dump(esPrimo(3)); 

function siguientePrimo(int $num): int {
    $num++;
    while (!esPrimo($num)) {
        $num++;
    }
    return $num;
}

function potencia(int $base, int $exp): int {
    return $base ** $exp;
}

function digitos(int $num): int {
    $num = abs($num);
    if ($num === 0) return 1;
    $contador = 0;
    while ($num > 0) {
        $num = ($num - $num % 10) / 10; 
        $contador++;
    }
    return $contador;
}

function voltea(int $num): int {
    $negativo = $num < 0;
    $volteao = 0;
    while ($num > 0) {
        $volteao = $volteao * 10 + ($num % 10);
        $num = ($num - $num % 10) / 10;
    }
    return $negativo ? -$volteao : $volteao;
}

function digitoN(int $num, int $n): int|null {
    $len = digitos($num);
    if ($n >= $len) return null;

    $tmp = $num;
    $pos = $len - $n - 1;
    for ($i = 0; $i < $pos; $i++) {
        $tmp = ($tmp - $tmp % 10) / 10;
    }
    return $tmp % 10;
}

function quitaDerecha(int $num, int $n): int {
    for ($i = 0; $i < $n; $i++) {
        $num = ($num - $num % 10) / 10;
    }
    return $num;
}

function quitaIzquierda(int $num, int $n): int {
    $len = digitos($num);
    $numQ = $num;
    for ($i = 0; $i < $len - $n; $i++) {
        $numQ = ($numQ - $numQ % (10 * ($len - $i))) / 1; 
    }
    $factor = 1;
    for ($i = 0; $i < $len - $n; $i++) $factor *= 10;
    return $num % $factor;
}

function pegaDerecha(int $num, int $digito): int {
    return $num * 10 + $digito;
}

function pegaIzquierda(int $num, int $digito): int {
    $len = digitos($num);
    $factor = 1;
    for ($i = 0; $i < $len; $i++) $factor *= 10;
    return $digito * $factor + $num;
}

var_dump(pegaIzquierda(1234,3));