<?php

require_once("../../class/html/Header.class.php");
require_once("../../class/html/D2Test.class.php");


echo D2Test::pageHead();
echo Header::header();
echo D2Test::d2List();
echo D2Test::scriptWhite();