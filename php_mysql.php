<html>
<head>
    <meta charset="utf-8">
</head>
<body>
<?php
error_reporting(E_ALL);
$mysqli = mysqli_connect('localhost', 'testuser', 'password', 'sample') or die('Error: '.mysqli_connect_error());
mysqli_set_charset($mysqli, 'UTF-8');

//$query = 'SELECT * FROM customers WHERE name like "%S_ignal%"';
//
//$a = mysqli_query($mysqli, $query);
//
//$res = mysqli_fetch_all($a, MYSQLI_ASSOC);
//
//$b = mysqli_query($mysqli, 'SELECT LAST_INSERT_ID');
//
//mysqli_close($mysqli);

//$query = 'SELECT `name`, last_name, first_name, credit_limit FROM customers WHERE country = ? AND credit_limit > ?';
//$smt = mysqli_prepare($mysqli, $query);
//mysqli_stmt_bind_param($smt, 'si', $country, $climit);
//
//$country = 'Germany';
//$climit = 10000;
//
//mysqli_stmt_execute($smt);
//
//mysqli_stmt_bind_result($smt, $n, $ln, $fn, $cl);
//
//mysqli_stmt_fetch($smt);
//
//while (mysqli_stmt_fetch($smt)){
//    echo $n, ', ', $fn, ', ', $ln , ' => ', $cl, '<br/>';
//}

// =====================================


mysqli_select_db($mysqli, 'test_db');

//$query = 'INSERT INTO category (parent_id, title, description) VALUES (?, ?, ?)';
//$stmt = mysqli_prepare($mysqli, $query);
//mysqli_stmt_bind_param($stmt, 'iss', $parent, $title, $descr);
//
//$arr = [
//    [
//        'parent' => null,
//        'title' => 'Электроника',
//        'descr' => 'blablabla'
//    ],
//    [
//        'parent' => 4,
//        'title' => 'Стулья',
//        'descr' => ''
//    ],
//];
//
//foreach($arr as $row){
//    extract($row);
//    $r = mysqli_stmt_execute($stmt);
//    $a = mysqli_insert_id($mysqli);
//    var_dump($r, $a);
//    echo '<br/>';
//}

$query = 'UPDATE category SET description= ? WHERE id=?';
$stmt = mysqli_prepare($mysqli, $query);
mysqli_stmt_bind_param($stmt, 'ss', $descr, $id);

$id = 15;
$descr = 'sdfasdfasdfasd';

mysqli_stmt_execute($stmt);

mysqli_close($mysqli);

?>

<pre>
    <?php //print_r($res); ?>
</pre>
</body>
</html>
