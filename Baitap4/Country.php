<?php

class Country
{
    public $name;
    public $totalGoldMedals;
    function __construct($name, $totalGoldMedals) {
        $this->name = $name;
        $this->totalGoldMedals = $totalGoldMedals;
    }
    function readCountry() {
        echo "Name: " .$this->name."Total Gold Medals: ".$this->totalGoldMedals;
    }
}
