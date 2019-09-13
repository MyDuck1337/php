<?php
echo "Часть1";
echo '<br>';
$a = 3;
$b = $a;
echo $b;

$a1 = 10;
$b2 = 2;

echo "<br>";

$sum = ($a1 + $b2)/2;
echo $sum;

echo "<br>";

$minus = ($a1 - $b2)/2;
echo $minus;

echo "<br>";

$umnoj = ($a1 * $b2)/2;
echo $umnoj;

echo "<br>";

$delenie = ($a1/$b2)/2;
echo $delenie;

echo "<br>";

$c = 15;
$d = 2;

$result = $c + $d;
echo $result;

echo "<br>";

$a3 = 10;
$b3 = 2;
$c3 = 5;

$summa = ($a3 + $b3 + $c3)/2;
echo $summa;

echo "<br>";

$a4 = 17;
$b4 = 10;
$c4 = $a4 - $b4;

$d = 17;
$result2 = $c4 + $d;
echo $result2;
echo "<br>";
echo "Часть2";
echo "<br>";

$text = "Привет, Мир!";
echo $text, " Моя первая программа";

echo "<br>";

$text1 = 'Привет, ';
$text2 = 'Мир!';
echo $text1, $text2;

echo "<br>";

$name = 'Максим';
echo 'Привет, ', $name, '!';
echo "<br>";
$text3 = 'Новый текст';
echo $text3;

echo "<br>";

$age = 18;
$height = 178;
echo 'Мой возраст: ', $age, ' | ', 'Мой рост: ', $height;

echo "<br>";

//$text4 = ['a', 'b', 'c', 'd', 'e'];
//echo $text4[0].$text4[2].$text4[4];
$text5 = 'abcde';
echo $text5[0], $text5[2], $text5[4];

echo "<br>";
echo "Часть3";
echo "<br>";

$arr1 = ['a','b','c'];
var_dump($arr1);
echo "<br>";
var_dump($arr1[0]);
var_dump($arr1[1]);
var_dump($arr1[2]);

echo "<br>";

echo $arr1[0].$arr1[1].$arr1[2];

echo "<br>";

$arr2 = ['a','b','c', 'd'];
echo ("$arr2[0]+$arr2[1], $arr2[2]+$arr2[3], $arr2[0] - $arr2[3], $arr2[0]/$arr2[3]");

echo "<br>";

$arr3 = [2,5,3,9];
$result = ($arr3[0]*$arr3[1])+($arr3[2]*$arr3[3]);
echo $result;

echo "<br>";
echo "Часть4";
echo "<br>";

$arr4[1]=1;
$arr4[2]=2;
$arr4[3]=3;
$arr4[4]=4;
$arr4[5]=5;

echo $arr4[1];

echo "<br>";

$arr5 = ['a'=>11,'b'=>20,'c'=>30];
echo $arr5[2];
echo $arr5['a'] + $arr5['b'] + $arr5['c'];

echo "<br>";

$arr6 = ['q3'=>12, 'r3'=>23, 'f3'=>14];
echo $arr6['q3'] + $arr6['r3'] + $arr6['f3'];

echo "<br>";

$arr7 = ['Коля'=>'1000$', 'Вася'=>'500$', 'Петя'=>'200$'];
echo $arr7['Петя'];


echo "<br>";

$arr8 = ['1'=>'Январь', '2'=>'Февраль', '3'=>'Март', '4'=>'Апрель', '5'=>'Май', '6'=>'Июнь','7'=>'Июль', '8'=>'Август', '9'=>'Сентябрь', '10'=>'Октябрь', '11'=>'Ноябрь', '12'=>'Декабрь'];
echo $arr8['9'];
echo "<br>";
echo $arr8['6'];

echo "<br>";

$arr9=['1'=>'Понедельник','2'=>'Вторник','3'=>'Среда','4'=>'Четверг','5'=>'Пятница','6'=>'Суббота','7'=>'Воскресенье'];
$day=3;
echo $arr9[$day];

?>