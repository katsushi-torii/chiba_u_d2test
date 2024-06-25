<?php

require_once("../../class/html/Header.class.php");
require_once("../../class/html/Home.class.php");

echo Home::pageHead();
echo Header::header();
echo Home::start();
echo Home::pageEnd();