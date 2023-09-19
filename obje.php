<?php 


class Myclass{
    public $p1= 'value 1';
    public $p2 = 'value 2';
    public $p3 = 'value 3';

    protected $p4 = "Protected properties call able only from it child class and it's self only";
    private $p5 = "private properties call able from it's self only";

    public function printData()
    {
        echo __CLASS__."Inside Myclass";
        foreach($this as $key=>$value)
        {
            echo $key, "=> ", $value, "<br/>";
        }
    }
}

$obj = new Myclass();
foreach($obj as $key=>$value)
{
    echo $key, "=> ", $value, "<br/>"; 
}

$obj->printData();