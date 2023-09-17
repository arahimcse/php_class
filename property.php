<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>This is the class properties</title>
</head>
<body>
    <a href="./https://www.php.net/manual/en/language.oop5.properties.php">Property</a>
    <?php 
    class User{
        public int $id;
        public ?string $name;
        public function __construct(int $id, ?string $string){
            $this->id = $id;
            $this->name = $string; 
        }
    }
    $myObj = new User(123, 'Abdur Rahim');
    var_dump($myObj->id);
    var_dump($myObj->name);


    class Shape{
        public int $numberOfSide;
        public string $name;

        public function setNumberOfSide(int $id):void 
        {
            $this->numberOfSide = $id;
        }
        public function setName(string $name): void 
        {
            $this->name = $name;
        }

        public function getnumberOfSide():int 
        {
            return $this->numberOfSide; 
        }
        public function getName():string 
        {
            return $this->name;
        }
    }
    $shape = new Shape();
    $shape->setnumberOfSide(3);
    $shape->setName('Triangle');
    var_dump($shape->getName());
    var_dump(($shape->getnumberOfSide()));

    //Example #4 Example of readonly properties
    class Test{
        public readonly string $props;
        public function __construct(string $props)
        {
            $this->props = $props;
        }
    }
    $test = new Test('this is props');
    var_dump($test->props);
    //$test->props = 'this is '; Cannot modify readonly property Test::$propsPHP(PHP2436)
    ?>
</body>
</html>