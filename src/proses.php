<?php
include 'database.php';

$db = new Database();
$aksi = $_GET['aksi'];

if ($aksi == "tambah") {
    //tambah data
    $db->tambah_data($_POST['nama'], $_POST['alamat'], $_POST['nohp']);
    header("location:index.php");
} elseif ($aksi == "update") {
    //tambah data
    $db->update_data($_POST['id'], $_POST['nama'], $_POST['alamat'], $_POST['nohp']);
    header("location:index.php");
} elseif ($aksi == "hapus") {
    $db->hapus_data($_GET['id']);
    header("location:index.php");
}
