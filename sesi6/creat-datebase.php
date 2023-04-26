<?php
include ("konfigurasi.php");

$s_db = "CREATE DATABASE ".DBNAME;        
echo "SQL: ".$s_db."<br>";

//koneksi ke DBMS Mysql 
$cnn = mysqli_connect (DBHOST, DBUSER, DBPASS);
if($cnn){
echo "koneksi ke DBMS mysql Sukses<br>";
$hsl = mysqli_query($cnn, $s_db);
if ($hsl){
    echo "Membuat database" .DBNAME." sukses<br>";
}else{
    echo "Membuat database" .DBNAME." gagal<br>";
}

}else{
    echo "koneksi ke DBMS mysqli Gagal<br>";
}