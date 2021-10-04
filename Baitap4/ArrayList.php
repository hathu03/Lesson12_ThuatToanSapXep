<?php

class ArrayList
{
protected $myList;
function __construct()
{
    $this->myList = [];
}
function addCountry($country) {
    array_push($this->myList, $country);
}
function sortList() {
    for ($i= 0; $i < count($this->myList,); $i++) {
        $val = $this->myList[$i]->totalGoldMedals;
        $j = $i - 1;
        while ($j >= 0 and $this->myList[$j]->totalGoldMedals > $val->totalGoldMedals) {
            $this->myList[$j + 1]->totalGoldMedals = $this->myList[$j]->totalGoldMedals;
            $j--;
        }
        $this->myList[$j + 1]->totalGoldMedals = $val;
    }
    for ($i=0; $i<count($this->myList); $i++) {
        echo "<br>";
        $this->myList[$i] -> readCountry();
        echo "<br>";
    }
}
}