<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Basic</title>
</head>
<body>
    <a href="https://www.php.net/manual/en/language.oop5.basic.php">The Basic</a>
    <?php
    //Example #1 Simple Class definition
    class SimpleClass{
        //Properties decleration
        public $var = 'a default value.';
         
        //Method decleration
        public function displayVar()
        {
            echo $this->var;
        }
    }
    ?>
</body>
</html>