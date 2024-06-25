<?php

require_once("../../class/html/Header.class.php");
require_once("../../class/html/Comparision.class.php");

echo Comparision::pageHead();
echo Header::header();
echo Comparision::comparisionList();
echo Comparision::script();