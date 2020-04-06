<?php 
$a = 100; // число - integer
$b = 15.12; // дробь - float
echo $a;
echo "<hr/>";
echo $b;
$c = "Haudi Ho!"; // строка string. str
$d = "Haudi Ho!"; // строка string. str
$e = [1,2,3,4,5];
echo $c;
echo "<hr/>";
echo $d;
echo "<hr/>";
echo "эллемент массива с индексом 0: ";
echo $e[0];
echo "<hr/>";
echo "эллемент массива с индексом 1: ";
echo $e[1];
echo "<hr/>";
echo "эллемент массива с индексом 2: ";
echo $e[2];
echo "<hr/>";
echo "эллемент массива с индексом 3: ";
echo $e[3];
echo "<hr/>";
echo "эллемент массива с индексом 4: ";
echo $e[4];
echo "<hr/>";
$f = [
"Jony",
"Abraham",
"Kolya"];
echo "<hr/>";
echo $f[0];
echo "<hr/>";
echo $f[1];
echo "<hr/>";
echo $f[2];
echo "<hr/>";
$g = [
"name" => "Abraham",
"surname" => "Potapenko",
"age" => 33,
"byear" => 1977,
"education" => [
"school in 2003", 
"college in 2008"]
];
echo $g["name"];
echo "<hr/>";
echo $g["surname"];
echo "<hr/>";
echo $g["age"];
echo "<hr/>";
echo $g["byear"];
echo "<hr/>";
echo $g["education"][0];
echo "<hr/>";
echo $g["education"][1];
$j = false;// буливо значение
$i = 200;
echo "<hr/>";
echo "test: $i";
echo "<hr/>";
echo 'test: $i';