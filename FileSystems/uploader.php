<?php
$allowTypes = ['image/jpeg', 'image/jpg', 'image/png'];
$uploadDir = __DIR__ . DIRECTORY_SEPARATOR . 'upload';
if (!file_exists($uploadDir) && !is_dir($uploadDir)) {
    mkdir($uploadDir);
}

if (!empty($_FILES) && in_array($_FILES['myfiles']['type'], $allowTypes)) {
    if (move_uploaded_file(
        $_FILES['myfiles']['tmp_name'],
        $uploadDir . DIRECTORY_SEPARATOR . $_FILES['myfiles']['name'])
    ) {
        echo 'Файл загружен<br/>';
    } else {
        echo 'Ошибка загрузки<br/>';
    }
} elseif (!empty($_FILES)) {
    echo 'Недопустимый тип файла<br/>';
}


?>
<html>
<head></head>
<body>
<form method="post" enctype="multipart/form-data">
    <input type="file" name="myfiles"/><br/>
    <input type="submit"/>
</form>
</body>
</html>
