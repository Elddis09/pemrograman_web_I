<?php
include("koneksi.php");

#get data

$query = "SELECT * FROM user order by id ASC";

// Mengeksekusi query ke database menggunakan koneksi $conn dan menyimpan hasilnya dalam variabel $data.
$data = mysqli_query($conn, $query);
?>
<table border="1">
    <tr>
        <th>Nama Lengkap</th>
        <th>Jenis Kelamin</th>
        <th>Hobi</th>
        <th>Alamat</th>
    </tr>
    <?php

    //while ($list = $data->fetch_object() ) {: Memulai loop while untuk mengambil setiap baris hasil query sebagai objek. Setiap iterasi loop mengambil satu baris data.
    //$list = $data->fetch_object(): Mengambil satu baris data dari hasil query sebagai objek dan menyimpannya dalam variabel $list.
    while ($list = $data->fetch_object()) {
    ?>
        <tr>
            <td><?= $list->nama; ?></td>
            <td><?= $list->jenis_kelamin; ?></td>
            <td><?= $list->hobi; ?></td>
            <td><?= $list->kota . "-" . $list->alamat; ?></td>
        </tr>


    <?php
    }
    ?>
</table>