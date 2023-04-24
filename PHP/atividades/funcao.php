<?php
//http://localhost/curso/php/atividades/funcao.php
/*      Declaração de função

        function nomequevcescolher(){
            code to be executed;
        }

        Execução da função
        nomequevcescolher();
    */

function soma()
{
    echo (2 + 2);
    echo "<br>";
}

function somaDois($param)
{
    echo ($param + 2);
    echo "<br>";
}

#soma();
somaDois(28);
somaDois(98);
somaDois(38);

echo "<br><br>"; #espaçamento

function somaDoisDif($param, $param2)
{
    echo ($param + $param2);
    echo "<br>";
}

somaDoisDif(2, 3);
somaDoisDif(20, 32);
somaDoisDif(88, 12);

echo "<br><br><br>"; #espaçamento

function saudacao($nome)
{
    echo ("Boa noite, " . $nome);
    echo "<br>";
}

saudacao("Jonas<br><br>");

function saudacao2($tempo, $nome2)
{
    echo ($tempo . $nome2);
    echo "<br>";
}

saudacao2("Bom dia ", "Jonas");
saudacao2("Boa tarde ", "Jonas");
saudacao2("Boa noite ", "Jonas");

echo "<br><br><br>"; #espaçamento

$ano = 2022;
function informacoes($name, $number, $born,)
{
    echo "($name . (1 - $born)";
}

informacoes("Jonas", "(2022, 2004)", "(71)99338-9531");
