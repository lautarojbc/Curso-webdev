<?php
$variableA = 4 ;
$variableB = 5.5;
$variableC = 9.5;
/*---------------------------------------------------------------------------*/
function ejercicio1( $varA, $varB) {
  echo "Ejercicio 1:\n";
  $resultado = ($varA + $varB);
  echo "El resultado de la suma es $resultado\n";
  $resultado = ($varA - $varB);
  echo "El resultado de la resta es $resultado\n";
  $resultado = ($varA * $varB);
  echo "El resultado del producto es $resultado\n";
  echo "\n";
}
/*---------------------------------------------------------------------------*/
function ejercicio2( $notaA, $notaB, $notaC ) {
  echo "Ejercicio 2:\n";
  $promedio = ($notaA + $notaB + $notaC) / 3;
  echo "Promedio del alumno $promedio\n";
  echo "\n";
}
/*---------------------------------------------------------------------------*/
function ejercicio3( $varA) {
  echo "Ejercicio 3:\n";
  $aux = $varA % 2;
  if ( $aux == 0) {
    echo "La variable es par\n";
  }
  else echo "La variable es impar\n";
  echo "\n";
}
/*---------------------------------------------------------------------------*/
function ejercicio4( $varA, $varB, $varC, $varD, $varE, $varF, $varG, $varH, $varI, $varJ) {
  echo "Ejercicio 4:\n";
  $mayor = $varA;
  if ( $mayor < $varB ) {
    $mayor = $varB;
  }
  if ( $mayor < $varC ) {
    $mayor = $varC;
  }
  if ( $mayor < $varD ) {
    $mayor = $varD;
  }
  if ( $mayor < $varE ) {
    $mayor = $varE;
  }
  if ( $mayor < $varF ) {
    $mayor = $varF;
  }
  if ( $mayor < $varG ) {
    $mayor = $varG;
  }
  if ( $mayor < $varH ) {
    $mayor = $varH;
  }
  if ( $mayor < $varI ) {
    $mayor = $varI;
  }
  if ( $mayor < $varJ ) {
    $mayor = $varJ;
  }
  echo "El mayor es $mayor\n";
  echo "\n";
}

/* Definición del manual de php:
Un array en PHP es en realidad un mapa ordenado. Un mapa es un tipo de datos que asocia valores con claves. 
Este tipo se optimiza para varios usos diferentes; se puede emplear como un array, lista (vector),
tabla asociativa (tabla hash - una implementación de un mapa), diccionario, colección, pila, cola, y posiblemente más.
 Ya que los valores de un array pueden ser otros arrays, también son posibles árboles y arrays multidimensionales.
*/
//arreglo a utilizar en el ej4
$arrNumerico = array(1, 2, 3, 80, 45, 80, 10, 11, 300, 2);

function ejercicio4_a($arregloNumerico) {
  echo "Ejercicio 4 usando array:\n";
  //Tomamos el primer elemento como el mayor
  $mayor = $arregloNumerico[0];
  for( $i = 1; $i < 10; $i++) {
    //comparamos con el resto de elementos
    if( $arregloNumerico[$i] > $mayor ) {
      //Si el numero de la posicion i del arreglo es mas grande
      //que $mayor, este numero pasa a ser el nuevo valor de la variable
      $mayor = $arregloNumerico[$i];
    }
  }
  echo "El mayor elemento del array es $mayor\n";
  echo "\n";
}
/*---------------------------------------------------------------------------*/
//Definimos un array de 50 numeros
//arreglo a utilizar en el ej5
$arrGrande = array(1, -2, 3, 80, -45, 80, 10, 11, 300, 2, 10, 20, 30, 800, -450, 800, 100, 110, -3000, 20,
 -1, 2, 3, 80, 45, -80, 10, 11, 300, 2, 10, 20, 30, -800, 450, 800, 100, -110, 3000, 20, 1, 2, -3, 80, 45, 80, -10, 11, 300, 2);

function ejercicio5 ( $arregloGrande) {
  echo "Ejercicio 5:\n";
  $promedioGrandes = 0;
  $contadorGrandes = 0;
  $sumaChicos = 0;

  for( $i = 0; $i < 50; $i++) {
    if( $arregloGrande[$i] > 100 ) {
      $promedioGrandes = $promedioGrandes + $arregloGrande[$i];
      $contadorGrandes++;
    }
    else if ($arregloGrande[$i] < -10) {
      $sumaChicos = $sumaChicos + $arregloGrande[$i];
    }
  }

  echo "Suma de los numeros menores a -10: $sumaChicos\n";
  if( $contadorGrandes > 0) {
    $promedioGrandes = $promedioGrandes / $contadorGrandes;
    echo "Promedio de los numeros mayores a 100: $promedioGrandes\n";
  }
  echo "\n";
}

/*---------------------------------------------------------------------------*/
function ejercicio6( $varA) {
  echo "Ejercicio 6:\n";
  $flag = 3;
  $i = 1;
  //No entra al while si es multiplo de 5
  //para evitar un bucle infinito
  if($varA % 5 != 0) {
    while( $flag != 0) {
      $multiplo = ($varA * $i);
      if ( $multiplo % 5 != 0 ) {
        echo "$multiplo\n";
        $flag--;
      }
      $i++;
    }
  }
  echo "\n";
}

/*---------------------------------------------------------------------------*/
$tipo = "Rueda de camion";
$grosor = 0.23;
$diametroA = 1.35;
$diametroB = 1.45;
$diametroC = 1.4;
$marca = "Kimashuki";

function ejercicio7($diamet) {
  echo "Ejercicio 7:\n";
  if( $diamet > 1.4) {
    echo "La rueda es para un vehiculo grande\n";
  }
  else if( $diamet <= 1.4 ) {
    echo "La rueda es para un vehiculo grande\n";
  }
  else 
    echo "No existe un tamaño de rueda válido\n";
}

/*---------------------------------------------------------------------------*/
// Tests
ejercicio1( $variableA, $variableB);

ejercicio2( $variableA, $variableB, $variableC);

ejercicio3( $variableA);
ejercicio3( $variableB);

ejercicio4(1, 2, 3, 80, 45, 80, 10, 11, 300, 2);
ejercicio4_a( $arrNumerico);

ejercicio5( $arrGrande);

ejercicio6(7);
ejercicio6(5);
ejercicio6(514);

ejercicio7($diametroA);
ejercicio7($diametroB);
ejercicio7($diametroC);
?>
