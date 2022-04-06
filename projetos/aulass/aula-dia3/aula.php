
<?php

// Funções e retornos

/** 
 * Manipulando arquivos pt1
 * $arquivo = 'he4rt.txt';

$arquivo = fopen($arquivo, 'r');

$linha = fread($arquivo, 8192);

var_dump($arquivo);
**/  

/** 
 * Manipulando arquivos pt2
$arquivo = 'he4rt.txt';
$arquivo = fopen($arquivo, 'a');
$escreveu = fwrite($arquivo, "\n segue a he4rt ae \n");

var_dump($escreveu);

*/

/**
 *  Manipulando arquivos pt3
$arquivo = 'pessoas.txt';
$arquivo = fopen($arquivo, 'r');

while(($usuario = fgets($arquivo, 4096)) != false ){
   $usuario = trim($usuario);
   $usuario = ucfirst($usuario);

    echo $usuario . PHP_EOL;

    if(trim($usuario) == 'E amigos'){
        echo "Fim do arquivo" . PHP_EOL;
    }
    
}

fclose($arquivo);
*/

// Escondendo digitos de cartão com substr

//$cartaoDeCredito = '5132 4055 6572 1918';

//$quatroDigitos = substr($cartaoDeCredito, -4);
//$proBanco = "**** **** **** $quatroDigitos";

//echo $proBanco;

/*** usando substr para diminuir texto
$title = "Meu primeiro post";
$content = "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Impedit perspiciatis a aut quo eveniet odit, autem maxime ea magnam optio quidem enim, id laudantium provident quasi fuga maiores! Ducimus, doloribus.";

$description = substr($content, 0, 120) . '... Leia a mais no meu blog que é pago pois sou capitalista';

echo $title . PHP_EOL;
echo $description . PHP_EOL;

    
$title = "CLI da He4rt";
echo str_pad($title, 40, '-', STR_PAD_BOTH);

    Criando argumentos com explode ou com $argv

$comando = "php artisan twitter:cli change-username JaoPredo";

$argumentos = explode(' ', $comando);

var_dump($argumentos);
*/
