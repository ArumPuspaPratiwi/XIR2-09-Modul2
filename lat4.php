<?php
  $nama = "Arum";
  $kelas = "XIRPL2";
  $alamat = "@kos_ong";

  function tampil_nama() {
    global$nama;
    echo "Nama saya : ".$nama." <br>";
  }
  function tampil_kelas() {
      global$kelas;
      echo "Kelas saya : ".$kelas." <br>";
    }
  function tampil_alamat() {
        global$alamat;
        echo "Alamat saya : ".$alamat." <br>";
      }
tampil_nama();
tampil_kelas();
tampil_alamat();
?>
