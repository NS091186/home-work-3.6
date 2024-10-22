<?php
//Уровень 1: Легкий
//Задачи:
//1. Конкатенация строк:
//Объявите две строки, объедините их в одну.
//Подсказка: используйте оператор . для объединения переменных.

$str1 = "Hello";
$str2 = "my frend";
echo $str1. " ". $str2. "!" . "\n"; // Hello my frend!

//2. Изменение регистра:
//Преобразуйте строку в нижний и верхний регистры.
//Подсказка: используйте strtoupper() и strtolower() .

$str = "Hello World!";
echo strtolower($str). "\n";
echo strtoupper($str). "\n";

//3. Сравнение строк:
//Сравните две строки, учитывая и не учитывая регистр.
//Подсказка: попробуйте операторы == , === и функцию strcasecmp() .

$str1 = "Hello";
$str2 = "WORLD";

$result = strcasecmp($str1, $str2); 
if ($result == 0) {
    echo "Строки равны". "\n";
    } elseif ($result < 0) {
    echo "Первая строка меньше". "\n";
    } else {
    echo "Первая строка больше". "\n";
    }


//4. Поиск подстроки:
//Найдите позицию подстроки в строке.
//Подсказка: используйте функцию strpos() .

$str = "Hello, World!";
echo strpos($str, "World"). "\n"; // 7

//5. Замена подстроки:
//Замените одно слово в строке на другое.
//Подсказка: используйте str_replace() .

$str = "Hello, World!";
echo str_replace("World", "PHP", $str). "\n"; // Hello, PHP!

//6. Форматирование строки:
//Отформатируйте строку с использованием переменных.
//Подсказка: используйте функцию sprintf() с нужными спецификаторами.

$name = "Natalia";
$age = 39;
$formSprint = sprintf("My name is %s,  I'm %d years old.", $name, $age);
echo $formSprint."\n"; // My name is Natalia, and I'm 30 years old.

//7. Разделение строки:
//Разделите строку по разделителю и объедините её обратно.
//Подсказка: используйте explode() и implode() .

$str = "Hello, World!";
$words = explode(" ", $str);
$strResult = implode(" ", $words);
echo $strResult."\n"; // Hello, World!

//8. Работа с многострочным текстом:
//Преобразуйте многострочный текст в HTML-разметку с <br> .
//Подсказка: используйте nl2br() .

$str = "Hello, World!\I am glad to see you?\n";
echo nl2br($str);

//Уровень 2: Усложненный
//Задачи:
/*1. Сложная конкатенация строк:
Объедините несколько строк и добавьте в них переменные в одном
выражении.
Подсказка: используйте оператор . для объединения строк с динамическими
данными.*/

$str1 = "Hello";
$str2 = "World";
$var = "!";
echo $str1. " ". $str2. " ". $var. "\n"; // Hello World!

/*2. Изменение регистра с условиями:
Преобразуйте строку так, чтобы каждое слово начиналось с заглавной
буквы.
Подсказка: используйте функции ucwords() и strtolower() .*/

$str = "hello world!";
$words = explode(" ", $str);
foreach ($words as &$word) {
    $word = ucfirst(strtolower($word));
}

$str = implode(" ", $words);
echo $str. "\n"; // Hello World!

/*3. Сравнение строк с учётом регистра и без:
Проверьте строки на полное совпадение и сравните их без учёта регистра.
Подсказка: используйте операторы == , === и функцию strcasecmp() .*/

$str1 = "Hello";
$str2 = "WORLD";
echo strcasecmp($str1, $str2) == 0? "Equal" : "Not equal". "\n"; 
echo strcasecmp($str1, $str2) === 0? "Equal" : "Not equal". "\n"; 

//4. Замена подстроки с использованием массива:
//Замените несколько слов в строке одновременно, используя массивы для поиска и замены.
//Подсказка: примените str_replace() , передавая массивы.

$str = "Hello, World!";
$search = ["Hello"];
$replace = ["Good day"];
$newStr = str_replace($search, $replace, $str);
echo $newStr . "\n";

//5. Форматирование строки с числом:
//Отформатируйте строку, включив в неё числовые значения и строки.
//Подсказка: используйте функцию sprintf() с комбинацией %s и %d .

$num = 24;
$str = "Hello, World!";
echo sprintf("%d %s", $num, $str). "\n"; // 24 Hello, World!

//6. Разделение и объединение сложной строки:
//Разделите строку с числовыми значениями по разделителю, суммируйте
//Подсказка: используйте explode() и array_sum() .

$str = "12 34 56";
$nums = explode(" ", $str);
$sum = array_sum($nums);
echo $sum. "\n"; 

//7. Создание случайной строки:
//Напишите функцию, которая генерирует случайную строку из букв и цифр.
//Подсказка: используйте массив символов и функцию rand() .

function generateRandomString($length) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVW';
    $result = '';

    for ($i = 0; $i < $length; $i++) {
        $result.= $characters[rand(0, strlen($characters) - 1)];
    }

    return $result;
}

echo generateRandomString(10)."\n"; 

/*8. Проверка строки на палиндром:
Напишите функцию, которая проверяет, является ли строка палиндромом.
Подсказка: используйте strrev() для переворота строки.*/
