<?php
 // = comentarios de linhas unicas


 /**
  * 
            Comentarios de varias linhas 
        @author JoaoPdSsilva 
        @return void

  */

//echo "Aulão do DanielHe4rt";

# Usando var_dump para descobrir informações da variavel 

//var_dump("Aulão do DanielHe4rt") = string(21)
//var_dump(123) = int(123)
//var_dump([1]) = array(1) {
  //[0]=>
  //int(1)
//var_dump(12.3) = float(12.3)
//var_dump(true) = bool(true)
//var_dump(0b11) Binario (255)
//var_dump(0x1A) Hexadecimal



// ---------------------------------------

                //TIPOS DE DADOS

// 0 = false
// 1 = true


/**
 * 
 * 
 * $fim = "developers";
 * echo sprintf(
    "Vai caralho %s %s %s",
    $fim,
    $fim,
    $fim
)
 * 
 *
*/
                //Vetores = Arrays
// Maneiras de iniciar um array
// var_dump(array()); == maneira antiga
// $pessoas = (['he4rt', 'henrique', 'kaiki', 'fabio', 'diogo']);

// var_dump($pessoas[2]);

  //  $pessoa = [
  //      'name' => 'Joao Pedro',
  //      'age' => 23,
  //     'occupation' => 'Desempregado'
  //  ];

  //  var_dump($pessoa['name']);

/** mt avançada para iniciantes
    $pessoa1= 'paulo';
    $pessoa2='pedro';

    $id='pessoa2';

    echo $$id;
*/

//$pessoas = (['he4rt', 'henrique', 'kaiki', 'fabio', 'diogo']);

//echo "esses caras são maneiros" . $pessoas; = errado

//var_dump(implode('', ['he4rt', 'henrique', 'kaiki', 'fabio', 'diogo']));

//$comando = " ./twitter publicar minha vida é massa ";

//$explode = explode(' ', $comando);

//echo 'O comando é: ' . $explode[1];

$melhorComunidade = "Rocket Developers";

$melhorComunidade = str_replace('Rocket', 'He4rt', $melhorComunidade);

echo $melhorComunidade;




?>

