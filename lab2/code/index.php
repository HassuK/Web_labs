<?php

//task 2 numbers
/* $a=123;
echo $a;
echo "\n";

$float =1.3;
echo $float;
echo "\n";

$b=111;
echo $a-$b;
echo "\n";


$last_month=1187.23;
$this_month=1089.98;
echo $last_month-$this_month;
echo "\n"; */

//task 11, multiplication and division
/*$num_languages=4;
$months=11;
$days=$months*16;
$days_per_language=$days/$num_languages;
echo $days_per_language;
echo "\n";*/

//task 12, power (возведение в степень)
/*echo 8**2;  //operator ** mean, that first number to the power of second
echo "\n"; */

//task13, Assignment Operators. Тут же настолько всё пока очевидно, всё было, что и комментировать нечего...
/*$my_num=7;
$answer=$my_num;
$answer+=2;
$answer*=2;
$answer-=2;
$answer/=2;
$answer-=$my_num;
echo $answer;
echo "\n";*/

//task 14, Math funcs
$a=10;
$b=3;
echo $a%$b;
echo "\n";

if ($a%$b===0){
    echo "Делится ", $a/$b, "\n";
}
else echo "Делится с остатком ", $a%$b, "\n";  //i have read, that echo can use arguments to output with ','
                                                //and will output all of them

$a=12;
$b=2;

if ($a%$b===0){
    echo "Делится ", $a/$b, "\n";
}
else echo "Делится с остатком ", $a%$b, "\n";

$st=pow(2,10);
echo $st, "\n";

$sqrt=sqrt(245);
echo $sqrt, "\n";

$array=array(4, 2, 5, 19, 13, 0, 10);
$sum=0;

foreach ($array as &$value) {
    $sum += pow($value,2); //суммируем по всем элементам массива в квадрате
}

$sum=sqrt($sum);
echo $sum,"\n";

$sqrt=sqrt(379);
echo round($sqrt), " ", round($sqrt, 1), " ", round($sqrt,2), "\n";  //round - округление до ближайшего
                                                                     //так же можно вывести определенное количество знаков после запятой
$sqrt=sqrt(587);
$arr=array('floor'=>floor($sqrt), 'ceil'=>ceil($sqrt));

echo $arr['floor'], " ", $arr['ceil'], "\n";  //ceil - округление до большего, floor - до меньшего
//floor и ceil - ключи. "Вместо" индексов. И индексов здесь нет. Только ключи. То есть обратиться к массиву $arr[0] не сможем

$arr=array(4, -2, 5, 19, -130, 0, 10);
$min=min($arr);
$max=max($arr);
echo $min," ", $max, "\n";


$a=rand(1,100);
echo $a,"\n";

for ($i=0;$i<10;$i++){
    $arr[$i] = rand(1,100);
}
for ($i=0;$i<10;$i++){
    echo $arr[$i], " ";
}
echo "\n";


$a=5;
$b=6;
echo abs($a-$b), "\n";  //проверил, работает с разными а и б

$arr=array(1, 2, -1, -2, 3, -3);

for ($i=0;$i<count($arr);$i++){   //самый простой алгоритм. Большего пока и не требуется. Просто взяли модули от каждого числа в массиве
    $arr[$i]=abs($arr[$i]);
}
for ($i=0;$i<count($arr);$i++){
    echo $arr[$i], " ";
}
echo "\n";


$a=40;          //опять же - самый простой алгоритм, большего не требуется пока. Просто идем от 1 и до самого числа а
                //и проверяем, делится ли число а на наш делитель div. Да - добавляем в массив. Нет - нет
$div=1;
$i=0;
$arr=array(1);
while ($div<=$a){
    if ($a%$div===0){
        $arr[$i]=$div;
        $i++;
    }
    $div++;
}

for ($i=0;$i<count($arr);$i++){
    echo $arr[$i], " ";
}
echo "\n";




