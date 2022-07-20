<?php 

$koneksi = mysqli_connect("localhost","root","","phpdasar");

function query($query){
    global $koneksi;
    $result = mysqli_query($koneksi, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data){

    global $koneksi;
    $namaD = $data["namaD"];
    $namaB = $data["namaB"];
    $lahir = $data["lahir"];
    $agama = $data["agama"];
    $jk    = $data["jk"];
    $alamat= $data["alamat"];
    $ibu   = $data["ibu"];  
    $ayah  = $data["ayah"];

    $tambah = "INSERT INTO siswa VALUES ('','$namaD','$namaB','$lahir','$agama','$jk','$alamat','$ibu','$ayah')";

    mysqli_query($koneksi, $tambah);

    return mysqli_affected_rows($koneksi);
}

function hapus($nis){
    global $koneksi;

    mysqli_query($koneksi, "DELETE FROM siswa WHERE NIS=$nis");

    return mysqli_affected_rows($koneksi);
}

function ubah($data){

    global $koneksi;
    $nis   = $data["NIS"];
    $namaD = $data["namaD"];
    $namaB = $data["namaB"];
    $lahir = $data["lahir"];
    $agama = $data["agama"];
    $jk    = $data["jk"];
    $alamat= $data["alamat"];
    $ibu   = $data["ibu"];  
    $ayah  = $data["ayah"];

    $ubah = "UPDATE siswa SET nama_depan='$namaD', nama_belakang ='$namaB', tanggal_lahir='$lahir', agama='$agama', jenis_kelamin='$jk', alamat='$alamat', nama_ibu='$ibu', nama_ayah='$ayah' WHERE NIS=$nis";

    mysqli_query($koneksi, $ubah);

    return mysqli_affected_rows($koneksi);
}
?>
