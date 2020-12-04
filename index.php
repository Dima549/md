<?php

require 'core/EquationInterface.php';
require 'core/LogInterface.php';
require 'core/LogAbstract.php';

require 'dimitriu/LinearEquation.php';
require 'dimitriu/QuadraticEquation.php';
require 'dimitriu/MyLog.php';

$equation = new dimitriu\QuadraticEquation();
try
{
    $result = $equation->solve(5, 14, 4);
    $str = implode("; ", $result);
    dimitriu\MyLog::Instance()::log($str);
}
catch (Error $error)
{
    dimitriu\MyLog::Instance()::log($error->getMessage());
}