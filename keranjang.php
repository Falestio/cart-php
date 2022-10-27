<?php
session_start();

$produk = [
    "silver" => [
        "nama" => "Paket Silver",
        "harga" => 20
    ],
    "gold" => [
        "nama" => "Paket Gold",
        "harga" => 40
    ],
    "platinum" => [
        "nama" => "Paket Platinum",
        "harga" => 60
    ],
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keranjang</title>
</head>
<body>
    <h1>Keranjang</h1>
    <b>
    Daftar Barang
    <?php
        $total_semua = 0;
        $barang_terbeli = [];

        foreach($_POST as $key => $val){
            $nama_barang = $key;
            $harga_satuan = $produk[$key]["harga"];
            $total_harga = intval($val) * $harga_satuan;
            $total_semua = $total_semua + $total_harga;

            $global_data = [
                "nama_barang" => $nama_barang,
                "harga_satuan" => $harga_satuan,
                "jumlah" => $val
            ];

            array_push($barang_terbeli, $global_data);
            
            echo "Barang: $nama_barang, Jumlah: $val, Harga Satuan: $harga_satuan, Total: $total_harga <br>";
        }
        
        $_SESSION["barang_terbeli"] = $barang_terbeli;
        echo "TOTAL: $total_semua";

    ?>

    <form action="dashboard.php">
        <input type="submit" value="Bayar">
    </form>
    </b>
    
</body>
</html>