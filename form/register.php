<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Akun</title>
</head>

<body>
    <form action="">
        <label for="">Nama Lengkap</label>
        <input type="text" name="nama_lengkap" placeholder="ex:jaemina">

        <br>

        <label for="">Jenis Kelamin</label>
        <input type="radio" name="j_kelamin"> Laki Laki
        <input type="radio" name="j_kelamin"> Perempuan

        <br>

        <label for="">Kabupaten/Kota</label>
        <select name="kota">
            <option value="kota_bandung">Kota Bandung</option>
            <option value="kota_bandung">Kab.Bandung</option>
            <option value="kota_bandung">Kabupaten Bandung Barat</option>
            <option value="kota_bandung">Kota Cimahi</option>
        </select>

        <br>
        <label for="">Alamat</label>
        <textarea name="alamat" id="" cols="30" rows="10"></textarea>

        <br>
        <input type="button" value="kirim">
    </form>
</body>

</html>