<?php

include "interface/Resizeable.php";
include "geometry_classes/Shape.php";
include "geometry_classes/Circle.php";
include "geometry_classes/Rectangle.php";
include "geometry_classes/Square.php";

$rectangle = new Rectangle("rectangle",60,30);
$circle = new Circle("circle",10);
$square = new Square("square",30);

echo 'Entry area of circle: ' . $circle->calculateArea() . '<br>';
echo 'Area of circle then: ' . $circle->resize(10) . '<br>';
echo 'Entry area of rectangle:' . $rectangle->getArea() . '<br>';
echo 'Area of rectangle then: ' . $rectangle->resize(20) . '<br>';
echo 'Entry area of square:' . $square->getArea() . '<br>';
echo 'Area of square then: ' . $square->resize(30) ."<br>";
