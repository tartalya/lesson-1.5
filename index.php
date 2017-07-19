
<?php

$filename = 'data.json';

if (file_exists($filename)) {

    $data = json_decode(file_get_contents($filename), true);

    require'template.php';
} else {

    echo 'Ошибка получения данных';
    die();
}
?>