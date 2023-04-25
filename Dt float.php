<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $a = 90.56;
    var_dump($a);
    $b = 90.87 ;
    var_dump($b);
    function addnumbers(int $a, int $b)
    {
        return $a + $b;
    }
    var_dump($a + $b);
    ?>
</body>

</html>