<?php 
require 'functions.php';

$nis = $_GET["NIS"];

if(hapus($nis) > 0 ){
    echo "
        <script>
            alert('Data Siswa berhasil dihapus');
            document.location.href = 'index1.php';
        </script>
        ";
} else {
    echo "
        <script>
            alert('Data Siswa Gagal dihapus');
            document.location.href = 'index1.php';
        </script>
        ";
}

?>