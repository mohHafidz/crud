<?php
require 'koneksi.php';
$id = $_GET['id'];

if (hapus($id) > 0) {
    echo "
        <script>
            alert('data successfully deleted');
            document.location.href='data.php';
        </script>
        ";
} else {
    echo "
    <script>
        alert('data failed deleted');
        document.location.href='data.php';
    </script>
    ";
}
