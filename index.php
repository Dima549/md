<?php

ini_set("display_errors", 1);
error_reporting (-1);

require __DIR__ . '/vendor/autoload.php';

dimitriu\MyLog::Instance()::log("Версия программы ".file_get_contents("./version"));

$equation = new dimitriu\QuadraticEquation();
try
{
    echo "Enter 3 values \n\r";

    $a = readline("Enter a: \n\r");
    $b = readline("Enter b: \n\r");
    $c = readline("Enter c: \n\r");

    dimitriu\MyLog::Instance()::log("Equation: x=".$a."x2+".$b."x+".$c."\n\r");

    $result = $equation->solve($a, $b, $c);

    $str = implode("; ", $result);

    dimitriu\MyLog::Instance()::log("Solution: ".$str."\n\r");
}
catch (dimitriu\DimitriuException $error)
{
    dimitriu\MyLog::Instance()::log($error->getMessage());
}
dimitriu\MyLog::write();