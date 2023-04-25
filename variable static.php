<?php
function mytest() {
    static $p=5;
    echo $p;
    $p++;
}
mytest();
echo"<br>";
mytest();
echo"<br>";
mytest();
?>