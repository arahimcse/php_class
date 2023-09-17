<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autoloading Classes</title>
</head>
<body>
    <a href="https://www.php.net/manual/en/language.oop5.autoload.php">Autoloading Classes</a>
    <?php
    spl_autoload_register(
        function($className)
        {
            include $className . '.php';
            var_dump('hhh'.$className);
        }
    );

    $obj1 = new c1();
    $obj2 = new c2(); 
    ?>
</body>
</html>