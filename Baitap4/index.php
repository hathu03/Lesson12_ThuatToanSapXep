<?php
include_once "Country.php";
include_once "ArrayList.php";
$country1 = new Country('America', 20);
$country2 = new Country('Brazil', 30);
$country3 = new Country('Singapore', 10);
$country4 = new Country('Vietnam', 15);
$country5 = new Country('China', 11);

$arrayList = new ArrayList();

$arrayList->addCountry($country1);
$arrayList->addCountry($country2);
$arrayList->addCountry($country3);
$arrayList->addCountry($country4);
$arrayList->addCountry($country5);

var_dump($arrayList);
//echo "Total Gold Madels: ".$arrayList;
//echo "Total Gold Madels: ".$arrayList;
//echo "Total Gold Madels: ".$arrayList;
//echo "Total Gold Madels: ".$arrayList;
//echo "Total Gold Madels: ".$arrayList;

