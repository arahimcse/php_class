<?php 

class myDateTime extends DateTime{
    public function __construct()
    {
        parent::__construct();
    }
}

$data = new myDateTime();
echo $var;