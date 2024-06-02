<?php
    session_start();
    $host ='localhost';
    $user = 'root';
    $pass = '';
    $db= 'pembelajaran';
    $mysqli = mysqli_connect($host,$user,$pass,$db) or die('Tidak dapat koneksi ke Database');
    $inner = 'SELECT siswa.nis_siswa, nama_siswa, alamat, TTL_siswa,no_mapel,id_kelas FROM siswa INNER JOIN data_kelas ON siswa.nis_siswa = data_kelas.nis_siswa';
    $right = 'SELECT guru_pengajar.no_pengajar,nama_guru, TTL, no_mapel, id_kelas FROM data_kelas RIGHT JOIN guru_pengajar ON data_kelas.no_pengajar=guru_pengajar.no_pengajar;';
    $left = 'SELECT siswa.nis_siswa, nama_siswa, alamat, TTL_siswa,no_mapel,id_kelas FROM siswa LEFT JOIN data_kelas ON siswa.nis_siswa = data_kelas.nis_siswa';
?>