<?php

require 'functions.php';

$nis = $_GET["NIS"];
$siswaa = query("SELECT * FROM siswa WHERE NIS=$nis")[0];

if(isset($_POST["ubah"])){
    if(ubah($_POST) > 0){ 
        echo "
        <script>
            alert('Data Siswa berhasil diubah');
            document.location.href = 'index.php';
        </script>
        ";
    } else {
        echo "
        <script>
            alert('Data Siswa gagal diubah');
            document.location.href = 'index.php';
        </script>
        ";
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Ubah Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
</head>

<body style="background-color: #83c5be">
    <form action="" method="post">

        <h2 class="text-center" style="margin-top:65px;">Ubah Data Siswa SDN 04</h2>
        <div class=" rounded p-4 position-absolute top-50 start-50 translate-middle shadow-lg p-3 mb-5 rounded" style="width:30%; background-color:#006d77; color:white">
            <div style="display: flex;">
                <div class="col-2 me-2 d-flex flex-column text-end pe-3" style="width:40%">
                    <label for="namaD" class="mb-2" style="height:30px"><b>Nama Depan</b></label>
                    <label for="namaB" class="mb-2" style="height:30px"><b>Nama Belakang</b></label>
                    <label for="lahir" class="mb-2" style="height:28px"><b>Tanggal Lahir</b></label>
                    <label for="agama" class="mb-2" style="height:25px"><b>Agama</b></label>
                    <label for="jk" class="mb-2" style="height:25px"><b>Jenis Kelamin</b></label>
                    <label for="alamat" class="mb-2" style="height:30px"><b>Alamat</b></label>
                    <label for="ibu" class="mb-2" style="height:30px"><b>Nama Ibu</b></label>
                    <label for="ayah" class="mb-2" style="height:30px"><b>Nama Ayah</b></label>
                </div>
                <div style="width:50%;display: flex;flex-direction: column;align-items: flex-start;" >
                    <input type="hidden" name="NIS" class="mb-2" value="<?php echo $siswaa["NIS"];?>">
                    <input type="text" name="namaD" id="namaD" class="mb-2" value="<?php echo $siswaa["nama_depan"];?>">
                    <input type="text" name="namaB" id="namaB" class="mb-2" value="<?php echo $siswaa["nama_belakang"];?>">
                    <input type="date" id="lahir" name="lahir" class="mb-2" value="<?php echo $siswaa["tanggal_lahir"];?>">
                    <select name="agama" id="agama" class="mb-2">
                        <option value="<?php echo $siswaa["agama"];?>" selected hidden><?php echo $siswaa["agama"];?>
                        </option>
                        <option value="ISLAM">ISLAM</option>
                        <option value="PROTESTAN">PROTESTAN</option>
                        <option value="KATOLIK">KATOLIK</option>
                        <option value="HINDU">HINDU</option>
                        <option value="BUDHA">BUDHA</option>
                    </select>
                    <select name="jk" id="jk" class="mb-2">
                        <option value="<?php echo $siswaa["jenis_kelamin"]; ?>" selected hidden>
                            <?php echo $siswaa["jenis_kelamin"]; ?></option>
                        <option value="PEREMPUAN">Perempuan</option>
                        <option value="LAKI-LAKI">Laki - Laki</option>
                    </select>
                    <input type="text" name="alamat" id="alamat" class="mb-2" value="<?php echo $siswaa["alamat"];?>">
                    <input type="text" name="ibu" id="ibu" class="mb-2" value="<?php echo $siswaa["nama_ibu"];?>">
                    <input type="text" name="ayah" id="ayah" class="mb-2" value="<?php echo $siswaa["nama_ayah"];?>">
                    <button type="submit" name="ubah">UBAH !</button>
                </div>
            </div>
        </div>
        </ul>
    </form>
</body>

</html>