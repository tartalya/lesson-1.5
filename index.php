
<?php

$filename = 'data.json';

if (file_exists($filename)) {

    $data = json_decode(file_get_contents($filename), true);

    $firstnames = array_column($data, 'firstName');
    $lastnames = array_column($data, 'lastName');
    $phones = array_column($data, 'phone');
    $addresses = array_column($data, 'address');


    for ($i = 0; count($firstnames) > $i; $i++) {

        $sorted[$i][] = $firstnames[$i];
        $sorted[$i][] = $lastnames[$i];
        $sorted[$i][] = $addresses[$i];
        $sorted[$i][] = $phones[$i];
    }


    //echo '<pre>';
    //var_dump($sorted);

    require'template.php';
} else {

    echo 'Ошибка получения данных';
    die();
}
?>