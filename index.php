<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>UAS SERVER ADMIN</h1>
    <h3>Dibuat oleh : Christopher Winston (2301850121)</h3>
    <br>
</body>
</html>

<?php

    // Connect to Database
    $db_hostname = "172.20.0.2";
    $db_usernme = "root";
    $db_password = "passwd";
    $db_database = "trucorp-db";
    $connect = new mysqli($db_hostname, $db_usernme, $db_password, $db_database);
    if($connect->connect_error) die('Error database'.$connect->connect_error);

    $query = "SELECT * FROM users";
    $result = $connect->query($query);

    $rowcount = 0;

    ?>
    <table style="border:1px solid black;border-collapse:collapse;margin:5px;padding:5px;">

    <tr>
        <td style="border:1px solid black;margin:5px;padding:5px; text-align: center;"> <b>ID</b> </td>
        <td style="border:1px solid black;margin:5px;padding:5px; text-align: center;"> <b>Nama</b> </td>
        <td style="border:1px solid black;margin:5px;padding:5px; text-align: center;"> <b>Alamat</b> </td>
        <td style="border:1px solid black;margin:5px;padding:5px; text-align: center;"> <b>Jabatan</b> </td>
    </tr>

    <?php
    while($row = $result->fetch_assoc())
    {
    ?>
        <tr>
            <td style="border:1px solid black;margin:5px;padding:5px;"> <?=$row['ID']?> </td>
            <td style="border:1px solid black;margin:5px;padding:5px;"> <?=$row['Nama']?> </td>
            <td style="border:1px solid black;margin:5px;padding:5px;"> <?=$row['Alamat']?> </td>
            <td style="border:1px solid black;margin:5px;padding:5px;"> <?=$row['Jabatan']?> </td>
        </tr>
        <?php $rowcount+=1; ?>

    <?php
    }
    echo nl2br("\nJumlah user dalam database adalah : ".$rowcount);
?>
