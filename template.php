<html>
    <head>
        <title>Телефонный справочник</title>
        <meta charset="utf-8">

        <style>
            tr,td {
                padding: 4px;
            }
        </style>

    </head>

    <body>


        <table border="1">
            <tr>
                <td>Имя</td>
                <td>Фамилия</td>
                <td>Адресс</td>
                <td>Телефон</td>

                <?php foreach ($data as $value): ?>

                <tr>

                    <?php if (is_array($value)) foreach ($value as $val): ?>

                            <td><?= $val ?></td>

                        <?php endforeach; ?>
                </tr>

            <?php endforeach; ?>

        </table>


    </body>

</html>

