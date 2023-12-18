<?php

require 'vendor/autoload.php';
require 'src/MagicClass.php';
require 'src/Drawing.php';

/*use app\MagicClass;

// Создаем экземпляр класса MagicClass
$instance = new MagicClass();

// Выводим результат в браузер
echo "<pre>";
$instance->nonExistentMethod(); // Вызов __call
MagicClass::nonExistentStaticMethod(); // Вызов __callStatic
echo $instance->nonExistentProperty; // Вызов __get
$instance->nonExistentProperty = 'New Value'; // Вызов __set
isset($instance->nonExistentProperty); // Вызов __isset
unset($instance->nonExistentProperty); // Вызов __unset
echo $instance; // Вызов __toString
$instance(); // Вызов __invoke

$serialized = serialize($instance); // Вызов __sleep
$unserialized = unserialize($serialized); // Вызов __wakeup

$clonedInstance = clone $instance; // Вызов __clone

var_dump($instance->__debugInfo()); // Вызов __debugInfo*/


$T1 = new Point(5, 7);


$V1 = new Vector(3, -2);


$V2 = new Vector(0, 0);

$V3 = perpendicularVector($V1);

// Функция для создания перпендикулярного вектора
function perpendicularVector(Vector $vector) {
    return new Vector(-$vector->y, $vector->x);
}

// Вывод длины каждого вектора
echo "Vector V1 length: {$V1->length()} <br>";
echo "Vector V2 length: {$V2->length()} <br>";
echo "Vector V3 length: {$V3->length()} <br>";

// Проверка перпендикулярности между V1 и V3
echo "Перпендикулярны ли вектора V3 и V1: " . ($V1->isPerpendicular($V3) ? 'Да' : 'Нет') . "<br>";

// Перенос точки T1 на вектор V1
$T1->x += $V1->x;
$T1->y += $V1->y;

// Вывод результатов
echo "Координаты Т1 после её переноса на вектор V1: ({$T1->x}, {$T1->y}) <br>";
?>