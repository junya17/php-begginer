<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<?php

function init(){

say_Something();
echo "<br>";
calculate();

}

function calculate() {

    echo 456 + 345;
}

function say_Something(){

    echo "Hello Student, do you like the class? yes? okay great";
}

init();

?>
</body>
</html>