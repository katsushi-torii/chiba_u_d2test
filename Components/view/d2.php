<?php

require_once("../../Config.inc.php");
require_once("../../PDOAgent.class.php");
require_once("../../DAO/FunctionD2DAO.class.php");
require_once("../../class/html/Header.class.php");
require_once("../../class/html/D2Test.class.php");

FunctionD2DAO::startDb();

if(!empty($_POST)){
    $colors = $_POST['colors'];
    // echo $colors;
    FunctionD2DAO::updateColors($colors);
}

echo D2Test::pageHead();
echo Header::header();
echo D2Test::d2List();
echo D2Test::script();