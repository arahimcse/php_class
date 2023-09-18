<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Constructor and Descructor</title>
</head>
<body>
    <a href="https://www.php.net/manual/en/language.oop5.decon.php"></a>
    <?php

class MyDestructableClass 
{

    
    function __destruct() {
        print "Destroying " . __CLASS__ . "\n";
    }
    
    function __construct() {
        print "In constructor\n";
    }

}

$obj = new MyDestructableClass();
?>
</body>
</html>