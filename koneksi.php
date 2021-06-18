<?php
$conn = mysqli_connect("localhost", 'root', '', 'dbsiswa');

function koneksi($query)
{
    global $conn;


    $result = mysqli_query($conn, $query);


    $rows = [];

    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}

function tambah($data)
{
    global $conn;
    $nis = htmlspecialchars($data['nis']);
    $nama = htmlspecialchars($data['nama']);
    $tanggal = htmlspecialchars($data['tanggal']);
    $jurusan = htmlspecialchars($data['jurusan']);
    $agama = htmlspecialchars($data['agama']);
    $alamat = htmlspecialchars($data['alamat']);

    $result = "INSERT INTO dsiswa VALUE
    ('','$nis','$nama','$tanggal','$jurusan','$agama','$alamat')
    ";

    mysqli_query($conn, $result);

    return mysqli_affected_rows($conn);
}

function hapus($id)
{
    global $conn;
    $result = "DELETE FROM dsiswa WHERE ID = $id";

    mysqli_query($conn, $result);

    return mysqli_affected_rows($conn);
}
function edit($data)
{
    global $conn;
    $id = $data['id'];
    $nis = htmlspecialchars($data['nis']);
    $nama = htmlspecialchars($data['nama']);
    $tanggal = htmlspecialchars($data['tanggal']);
    $jurusan = htmlspecialchars($data['jurusan']);
    $agama = htmlspecialchars($data['agama']);
    $alamat = htmlspecialchars($data['alamat']);

    $result = "UPDATE dsiswa set
    nis = '$nis',
    nama = '$nama',
    tanggal = '$tanggal',
    jurusan = '$jurusan',
    agama = '$agama',
    alamat = '$alamat'
    WHERE ID = $id
    ";

    mysqli_query($conn, $result);

    return mysqli_affected_rows($conn);
}
