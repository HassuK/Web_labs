<?php

//таск 1

$str = 'ahb acb aeb aeeb adcb axeb acbgb';
$strArray = str_split($str); //делаем из строки массив

$regExpr = '!a.{2}b!u'; // наша регулярка

$match = [];

preg_match_all($regExpr, $str, $match); //ищем регулярку в строке и сохраняем в массив совпадения

var_dump($match);
echo "\n\n";


// таск 2
function numpow ($num)
{
    return pow($num, 3);
};

$str = 'a1b2c3';
$num = '![0-9]!';

$exchange = preg_replace_callback(  //эта функция работает по принципу preg_replace
                                    //только заменяет на значение функции. То есть
                                    //в строке $str ищем регулярку $num и заменяем ее на значение функции (куда передается наш $num)
    $num,
    function ($num) {
       return pow($num[0], 3);  //$num это же строка. Поэтому по индексу берем. Благо у нас тут числа однозначные, поэтому тут можно просто взять 0 индекс
    },
    $str);

echo $exchange, "\n\n";