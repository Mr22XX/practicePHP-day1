<?php

$buku = [
    [
        "judul" => "Akuntansi Pengantar 1",
        "pengarang" => "Supardi",
        "penerbit" => "Gava Media",
        "terbit" => "2009"
    ],
    [
        "judul" => "Aplikasi Klinis Induk Ovulasi & Stimulasi Ovariu",
        "pengarang" => "Samsulhadi",
        "penerbit" => "Sagung Seto",
        "terbit" => "2013"
    ],
    [
        "judul" => "Aplikasi Praktis Asuhan Keperawatan Keluarga",
        "pengarang" => "Komang Ayu Heni",
        "penerbit" => "Sagung Seto",
        "terbit" => "2012"
    ],
    [
        "judul" => "A-Z Psikologi : Berbagai kumpulan topik Psikologi",
        "pengarang" => "Nasruddin Anshoriy",
        "penerbit" => "LKiS",
        "terbit" => "2008"
    ],
    [
        "judul" => "Biografi Gus Dur ; The Authorized Biography of KH. Abdurrahman Wahid (Soft Cover)",
        "pengarang" => "Greg Barton",
        "penerbit" => "LKiS",
        "terbit" => "2011"
    ],
    [
        "judul" => "Buku Ajar Tumbuh Kembang Remaja & Permasalahanya",
        "pengarang" => "Soetjiningsih",
        "penerbit" => "Sagung Seto",
        "terbit" => "2004"
    ],
    [
        "judul" => "Buku Ajar Tumbuh Kembang Remaja & Permasalahanya",
        "pengarang" => "Soetjiningsih",
        "penerbit" => "Sagung Seto",
        "terbit" => "2004"
    ],
    [
        "judul" => "Buku Ajar Tumbuh Kembang Remaja & Permasalahanya",
        "pengarang" => "Soetjiningsih",
        "penerbit" => "Sagung Seto",
        "terbit" => "2004"
    ],
    [
        "judul" => "Buku Ajar Tumbuh Kembang Remaja & Permasalahanya",
        "pengarang" => "Soetjiningsih",
        "penerbit" => "Sagung Seto",
        "terbit" => "2004"
    ],
    [
        "judul" => "Buku Ajar Tumbuh Kembang Remaja & Permasalahanya",
        "pengarang" => "Soetjiningsih",
        "penerbit" => "Sagung Seto",
        "terbit" => "2004"
    ],
    [
        "judul" => "Buku Ajar Tumbuh Kembang Remaja & Permasalahanya",
        "pengarang" => "Soetjiningsih",
        "penerbit" => "Sagung Seto",
        "terbit" => "2004"
    ],
    [
        "judul" => "Buku Ajar Tumbuh Kembang Remaja & Permasalahanya",
        "pengarang" => "Soetjiningsih",
        "penerbit" => "Sagung Seto",
        "terbit" => "2004"
    ],
]


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan php day1</title>
</head>
<style>
    *{
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }
    body{
        height: 100vh;
        background-color: rgb(245,245,245);
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        padding: 20px;
    }
    table{
        border-collapse: collapse;
        width: 100%;
        padding: 30px;
        margin: 50px;
    }
    h1{
        padding: 30px;
    }
    .table{
        display: flex;
        justify-content: center;
        align-items: flex-start;
        max-height : 80vh;
        width: 80%;
        background-color: white;
        border-radius: 8px;
        overflow-y: auto;
        padding: 20px;
        margin-top: 20px;

    }
    th{
        height: 80px;
    }
    td{
        height: 80px;
    }
</style>
<body>
    <h1>Daftar Buku</h1>
    <div class="table">
        <table border="1">
            <thead>
                <th>Judul</th>
                <th>Pengarang</th>
                <th>Penerbit</th>
                <th>Tahun Terbit</th>
            </thead>
            <?php foreach($buku as $book) : ?>
                <tbody>
                    <td><?= $book["judul"];?></td>
                    <td><?= $book["pengarang"] ?></td>
                    <td><?= $book["penerbit"] ?></td>
                    <td><?= $book["terbit"] ?></td>
                </tbody>
                <?php endforeach?>
            </table>
    </div>
</body>
</html>