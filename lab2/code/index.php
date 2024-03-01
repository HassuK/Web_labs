<?php

//task 2 numbers
/* $a = 123;
echo $a;
echo "\n";

$float = 1.3;
echo $float;
echo "\n";

$b = 111;
echo $a - $b;
echo "\n";


$last_month = 1187.23;
$this_month = 1089.98;
echo $last_month - $this_month;
echo "\n"; */

//task 11, multiplication and division
/*$num_languages = 4;
$months = 11;
$days = $months * 16;
$days_per_language = $days / $num_languages;
echo $days_per_language;
echo "\n";*/

//task 12, power (возведение в степень)
/*echo 8**2;  //operator ** mean, that first number to the power of second
echo "\n"; */

//task13, Assignment Operators. Тут же настолько всё пока очевидно, всё было, что и комментировать нечего...
/*$my_num = 7;
$answer = $my_num;
$answer += 2;
$answer *= 2;
$answer -= 2;
$answer /= 2;
$answer -= $my_num;
echo $answer;
echo "\n";*/

//task 14, Math funcs
/*$a = 10;
$b = 3;
echo $a % $b;
echo "\n";

if ($a % $b === 0){
    echo "Делится ", $a / $b, "\n";
}
else echo "Делится с остатком ", $a % $b, "\n";  //i have read, that echo can use arguments to output with ','
                                                //and will output all of them

$a = 12;
$b = 2;

if ($a % $b === 0){
    echo "Делится ", $a / $b, "\n";
}
else echo "Делится с остатком ", $a % $b, "\n";

$st = pow(2,10);
echo $st, "\n";

$sqrt = sqrt(245);
echo $sqrt, "\n";

$array = array(4, 2, 5, 19, 13, 0, 10);
$sum = 0;

foreach ($array as &$value) {
    $sum += pow($value,2); //суммируем по всем элементам массива в квадрате
}

$sum = sqrt($sum);
echo $sum,"\n";

$sqrt = sqrt(379);
echo round($sqrt), " ", round($sqrt, 1), " ", round($sqrt,2), "\n";  //round - округление до ближайшего
                                                                     //так же можно вывести определенное количество знаков после запятой
$sqrt = sqrt(587);
$arr = array('floor' => floor($sqrt), 'ceil' => ceil($sqrt));

echo $arr['floor'], " ", $arr['ceil'], "\n";  //ceil - округление до большего, floor - до меньшего
//floor и ceil - ключи. "Вместо" индексов. И индексов здесь нет. Только ключи. То есть обратиться к массиву $arr[0] не сможем

$arr = array(4, -2, 5, 19, -130, 0, 10);
$min = min($arr);
$max = max($arr);
echo $min," ", $max, "\n";


$a=rand(1,100);
echo $a,"\n";

for ($i = 0; $i < 10; $i++){
    $arr[$i] = rand(1,100);
}
for ($i = 0; $i < 10; $i++){
    echo $arr[$i], " ";
}
echo "\n";


$a = 5;
$b = 6;
echo abs($a - $b), "\n";  //проверил, работает с разными а и б

$arr=array(1, 2, -1, -2, 3, -3);

for ($i = 0; $i < count($arr); $i++){   //самый простой алгоритм. Большего пока и не требуется. Просто взяли модули от каждого числа в массиве
    $arr[$i] = abs($arr[$i]);
}
for ($i = 0; $i < count($arr); $i++){
    echo $arr[$i], " ";
}
echo "\n";


$a = 40;          //опять же - самый простой алгоритм, большего не требуется пока. Просто идем от 1 и до самого числа а
                //и проверяем, делится ли число а на наш делитель div. Да - добавляем в массив. Нет - нет
$div = 1;
$i = 0;
$arr = array(1);
while ($div <= $a){
    if ($a % $div === 0){
        $arr[$i] = $div;
        $i++;
    }
    $div++;
}

for ($i = 0; $i < count($arr); $i++){
    echo $arr[$i], " ";
}
echo "\n";

$arr=array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);         //простой алгоритм... всё прозрачно
$max_sum = 10;
$arr_sum = 0;
$quantity = 0;
for ($i = 0; $i < count($arr); $i++){
    $arr_sum += $arr[$i];
    $quantity++;
    if ($arr_sum > $max_sum){
        break;
    }
}
echo $quantity,"\n";


*/

//task 15. Funcs
/*function printStringReturnNumber()  //не совсем понял сам таск.... но для примера, что понимание функций есть - пойдет наверно
{
echo "Hello world\n";
return rand(1,100);
}
$my_num = printStringReturnNumber();
echo $my_num, "\n"; */

//task 16, Funcs
function increaseEnthusiasm($str){
    $str.= "!";
return $str;
}

echo increaseEnthusiasm("city_life"), "\n";

function repeatThreeTimes($str)
{
    $tmp = $str;
    $str.= $tmp;  //так выглядит "добавка" к строке новой строки
    $str.= $tmp;
    return $str;
}

echo repeatThreeTimes("city_life"), "\n";
echo increaseEnthusiasm(repeatThreeTimes("city_life")), "\n";

function cut($str, $num = 10)
{
    $str_final = '';
    for ($i = 0; $i < $num && $i < strlen($str); $i++){
        $str_final[$i] = $str[$i];
}
    return $str_final;
}

echo cut("longsig"),"\n";  //для примера взял строку менее 10 символов, чтобы показать, что код не крашится.
echo cut("longsig",2),"\n";

$arr=array (1,2,3,4,5,6,7,8,9);

function recurs_output($array, $size = 0) //дефолтное значение 0, чтобы в функцию передать только массив. Так удобнее и проще для прочтения кода
{
if ($size < count($array)){   //то есть у нас условие не выхода из рекурсии, а условие "продолжения" рекурсии. Увеличиваем наш индекс, пока он не дойдет до
                                //размера массива
    echo $array[$size], " ";
    $size++;
    recurs_output($array, $size);
}

}

recurs_output($arr);
echo "\n";

function sum_of_digits($num, $sum = 0)  //дефолтное значение суммы цифр равно 0. Ибо каждую сумму мы должны обнулить
{
    if ($num <= 9){  //если у нас число меньше 10 - значит добились своего и выходим из рекурсии
        return $num;
    }
    if ($num > 9) {
        while ($num > 9) {  //просто берем остатки от деления на 10 и складываем. А сама число делим на 10
            $sum += $num % 10;
            $num /= 10;
            $num = floor($num);  //причем число округляем в меньшую сторону (ибо 118/10 = 11,8. Нам нужно часть без учета числа после запятой. Поэтому
                                //всегда берем, округляя в меньшую сторону)
        }
        $sum += $num;  //это мы прибавляем последнюю цифру, которую не успели прибавить в вайле (так как туда уже не попали по условию)
    }
  return sum_of_digits($sum); //и теперь передаем в эту функцию саму сумму цифр

}

$num = 892;   //8+9+2=19 1+9=10 1+0=0

echo sum_of_digits($num), "\n";