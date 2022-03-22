<?php
require_once '../model/Peserta.php';

function adaPermintaanProsesTambah(){
    if(isset($_POST['email']) && isset($_POST['nama'])){
        return true;
    } else return false;
}

function tampilkanFormulirTambahPeserta(){
    require_once '../view/view-tambah-peserta.php';
}

function kirimKeHalamanUtama($pesan){
    header("Location: index.php?pesan=$pesan");
}

if(adaPermintaanProsesTambah()){
    // $peserta = new Peserta();
    // $peserta->setEmail($_POST['email']);
    // $peserta->setNama($_POST['nama']);
    $peserta = new Peserta($_POST['email'],$_POST['nama']);
    $peserta->add();
    $pesan = "Peserta berhasil ditambah.";
    kirimKeHalamanUtama($pesan);
} else {
    tampilkanFormulirTambahPeserta();
}

?>