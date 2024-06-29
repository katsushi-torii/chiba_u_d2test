<?php

require_once("../../Config.Inc.php");
require_once("../../class/object/ComparisionColors.class.php");
require_once("../../PDOAgent.class.php");
require_once("../../DAO/FunctionComparisionDAO.class.php");
require_once("../../class/html/Header.class.php");

echo Header::header();

FunctionComparisionDAO::startDb();

if(!empty($_POST)){
    $ids = $_POST['ids'];
    $selectedColors = $_POST['results'];
    $selectedNumbers = $_POST['numbers'];
    $idArray = explode(",", $ids);
    $selectedColorsArray = explode(",", $selectedColors);
    $selectedNumbersArray = explode(",", $selectedNumbers);
    for($i = 0; $i < 24; $i++){
        echo "id = {$idArray[$i]}, color={$selectedColorsArray[$i]} <br>";
        // FunctionComparisionDAO::updateComparisionColors($idArray[$i], $selectedNumbersArray[$i]);
    };
}

echo "<a href='d2test.php'>d2</a>";