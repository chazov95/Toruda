<?php
$array = [
    1 => '100',
    2 => '200',
    3 => '300',
    4 => '400',
    5 => '500',
];
$value = $_POST['value'];

if ($value > 0 && $value < 6) {

    echo $array[$value];
} else {
    echo "Введеные неверные данные";
}
