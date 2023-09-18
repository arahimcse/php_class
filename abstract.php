<?php 

abstract class AbstractClass{
    abstract protected function prefixName($name);
}

class Tom extends AbstractClass{
    public function prefixName($name, $separated='.')
    {
        if($name == 'Pacman')
        {
            $prefix = "Mr"; 
        } elseif($name == 'Pacwoman')
        {
            $prefix = 'Mrs'; 
        } else 
        {
            $prefix ='';
        }
        return "{$prefix}{$separated} {$name}";
    }

}

$obj = new Tom();
echo $obj->prefixName('Pacman');
echo $obj->prefixName('Pacwoman');