<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form>
    <input type="number" name="search" placeholder="Enter your number"/>
    <input type="submit" id="submit" value="Find"/>
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $searchNumber = $_POST['search'];
    $number = $searchNumber;
    switch ($number) {
        case '0':
            echo 'zero';
            break;
        case '1':
            echo 'one';
            break;
        case '2':
            echo 'two';
            break;
        case '3':
            echo 'three';
            break;
        case '4':
            echo 'four';
            break;
        case '5':
            echo 'five';
            break;
        case '6':
            echo 'six';
            break;
        case '7':
            echo 'seven';
            break;
        case '8':
            echo 'eight';
            break;
        case '9':
            echo 'nine';
            break;
        default:
            echo 'Out of ability';
    }
}
?>
</body>
</html>
