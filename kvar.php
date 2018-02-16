<?php
#вводим кол-во этажей и кол-во квартир на этаже, подъезд неизвестный
$handle = fopen ("php://stdin","r");

echo "How many floors? \n";

$level_count = (int)fgets($handle); #кол-во этажей
 
echo "how many apartments are on the floor? \n";

$rooms_on_level = (int)fgets($handle); #кол-во квартир на этаже
 
$rooms = $level_count * $rooms_on_level; # Количество квартир в подъезде

echo "enter number of floors \n"; 

$room_number = (int)fgets($handle); # Номер квартиры

$access = intval($room_number / $rooms); # Номер подъезда

$level = $room_number % $rooms ? ceil($room_number % $rooms / $rooms_on_level) : $level_count; # Номер этажа
 
echo "entrence #$access       floor #$level";
?>