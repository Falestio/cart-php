<?php
session_start();

$barang_terbeli = $_SESSION["barang_terbeli"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <?php
        foreach ($barang_terbeli as $barang){
            echo json_encode($barang);
        }
    ?>
</body>
</html>