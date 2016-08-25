<?php
// Чтение из потока
$a = file_get_contents('php://input');
var_dump($a);
?>

<form method="get">
    <input type="text" name="testinput"/>
    <input type="submit"/>
</form>
