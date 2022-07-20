<?php 
require 'functions.php';

$siswa = query("SELECT * FROM siswa");
$i = 1;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Data Siswa</title>
</head>

<body>

    <h2 style="text-align: center;">Data Siswa SDN 04 NEPAL</h2>
    <a href="tambah.php"><div style="text-align: center;">TAMBAH DATA</div></a>
    <table border="1" cellpadding="10" cellspacing="0" style="border-collapse: collapse; margin: 30px auto 0 auto">
        <thead>
            <tr>
                <th>#</th>
                <th>Nama</th>
                <th>Tanggal Lahir</th>
                <th>Agama</th>
                <th>Jenis Kelamin</th>
                <th>Alamat</th>
                <th>Nama Ibu</th>
                <th>Nama Ayah</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>

        <?php foreach($siswa as $data_siswa) : ?>
            <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $data_siswa["nama_depan"];?> <?php echo $data_siswa["nama_belakang"]; ?></td>
                <td><?php echo $data_siswa["tanggal_lahir"];?></td>
                <td><?php echo $data_siswa["agama"];?></td>
                <td><?php echo $data_siswa["jenis_kelamin"];?></td>
                <td><?php echo $data_siswa["alamat"];?></td>
                <td><?php echo $data_siswa["nama_ibu"];?></td>
                <td><?php echo $data_siswa["nama_ayah"];?></td>
                <td>
                    <a href="ubah.php?NIS=<?php echo $data_siswa["NIS"];?>">UBAH</a>
                    |
                    <a href="hapus.php?NIS=<?php echo $data_siswa["NIS"];?>" onclick="return confirm('Apakah anda yakin ingin menghapus Data ini ?');">HAPUS</a>
                </td>
            </tr>
        <?php 
        $i++;
        endforeach;
        ?>
        </tbody>
    </table>
</body>

</html>