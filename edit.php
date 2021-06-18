<?php
require 'koneksi.php';

date_default_timezone_set("asia/jakarta");

$id = $_GET['id'];

$data = koneksi("SELECT * FROM dsiswa WHERE ID = $id")[0];

if (isset($_POST['submit'])) {
    if (edit($_POST) > 0) {
        echo "
        <script>
            alert('data successfully changed');
            document.location.href='data.php';
        </script>
        ";
    } else {
        echo "
        <script>
            alert('data failed changed');
            document.location.href='data.php';
        </script>
        ";
    }
}
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>

    <form method="post" style="width: 400px; margin:auto; margin-top:20px">
        <input type="hidden" name="id" id="id" value="<?= $data['ID'] ?>">
        <div class="form-group">
            <label for="nis">Nis</label>
            <input type="text" class="form-control" id="nis" name="nis" value="<?= $data['nis']; ?>">
        </div>
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" value="<?= $data['nama']; ?>">
        </div>
        <div class="form-group">
            <label for="tanggal">Tanggal Lahir</label>
            <input type="date" class="form-control" id="tanggal" name="tanggal" value="<?= $data['tanggal']; ?>">
        </div>
        <div class=" form-group">
            <label for="jurusan">Jurusan</label>
            <select name="jurusan" id="jurusan">
                <option value="RPL" <?php if ($data['jurusan'] === 'RPL') echo 'selected="selected"'; ?>>REKAYASA PERANGKAT LUNAK</option>
                <option value="MM" <?php if ($data['jurusan'] === 'MM') echo 'selected="selected"'; ?>>MULTIMEDIA</option>
                <option value="TKJ" <?php if ($data['jurusan'] === 'TKJ') echo 'selected="selected"'; ?>>TENIK KOMPUTER & JARINGAN</option>
            </select>
        </div>
        <div class="form-group">
            <label for="agama">agama</label>
            <select name="agama" id="agama">
                <option value="islam" <?php if ($data['agama'] === 'islam') echo 'selected="selected"'; ?>>islam</option>
                <option value="kristen" <?php if ($data['agama'] === 'kristen') echo 'selected="selected"'; ?>>kristen</option>
                <option value="katolik" <?php if ($data['agama'] === 'katolik') echo 'selected="selected"'; ?>>katolik</option>
                <option value="budha" <?php if ($data['agama'] === 'budha') echo 'selected="selected"'; ?>>budha</option>
                <option value="hindu" <?php if ($data['agama'] === 'hindu') echo 'selected="selected"'; ?>>hindu</option>
                <option value="Kong Hu Cu" <?php if ($data['agama'] === 'Kong Hu Cu') echo 'selected="selected"'; ?>>Kong Hu Cu</option>
            </select>
        </div>
        <div class="form-group">
            <label for="alamat">Alamat</label>
            <input type="text" class="form-control" id="alamat" name="alamat" value="<?= $data['alamat']; ?>">
        </div>
        <button type="submit" class="btn btn-primary" name="submit" id="submit">Submit</button>
    </form>
    <a href="data.php"><button class="btn btn-danger" style="float: left; margin-left:690px; margin-top:-38px">cancel</button></a>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
</body>

</html>