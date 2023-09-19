<?php 

class A{
    private $key;
    public function __construct(string $key)
    {
        $this->key = $key;
    }

    public function __invoke(array $a, array $b):int 
    {
        return $a[$this->key] <=> $b[$this->key];
    }
}

$customers = [
    ['id' => 1, 'first_name' => 'John', 'last_name' => 'Do'],
    ['id' => 3, 'first_name' => 'Alice', 'last_name' => 'Gustav'],
    ['id' => 2, 'first_name' => 'Bob', 'last_name' => 'Filipe']
];

usort($customers, new A('first_name'));
print_r($customers);


usort($customers, new A('last_name'));
print_r($customers);
