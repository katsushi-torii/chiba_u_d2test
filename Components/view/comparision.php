<?php

require_once("../../Config.inc.php");
require_once("../../class/object/ComparisionColors.class.php");
require_once("../../PDOAgent.class.php");
require_once("../../DAO/SelectComparisionDAO.class.php.php");
require_once("../../class/converter/ComparisionColorConverter.class.php");
require_once("../../class/html/Header.class.php");
require_once("../../class/html/Comparision.class.php");

SelectComparisionDAO::startDb();

$comparisionColorList = ComparisionColorConverter::convertComparisionColor(
    SelectComparisionDAO::getAllComparisionColors()
);
shuffle($comparisionColorList);

echo Comparision::pageHead();
echo Header::header();
echo Comparision::comparisionList($comparisionColorList);
echo Comparision::script();