<?php

include("koneksi.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['daftar'])){

    // ambil data dari formulir
    $nama_lengkap = $_POST['nama_lengkap'];
    $alamat = $_POST['alamat'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    $asal_sekolah = $_POST['asal_sekolah'];

    // buat query
    $sql = "INSERT INTO calon_siswa (nama_lengkap, alamat, jenis_kelamin, agama, asal_sekolah) VALUE ('$nama_lengkap', '$alamat', '$jenis_kelamin', '$agama', '$asal_sekolah')";
    $query = mysqli_query($db, $sql);

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('Location: berhasil-daftar.php?status=sukses');
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        header('Location: berhasil-daftar.php?status=gagal');
    }


} else {
    die("Akses dilarang...");
}

?>