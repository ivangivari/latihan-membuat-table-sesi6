<?php
include ("konfigurasi.php");

$s_db = "CREATE TABLE tbUser(        
id INT AUTO_INCREMENT PRIMARY KEY,
nama VARCHAR(19),
email VARCHAR(255),
username VARCHAR(10),
passkey VARCHAR(255),
iduser VARCHAR(255)
);";
echo "SQL: ".$s_db."<br>";

//koneksi ke DBMS Mysql 
$cnn = mysqli_connect (DBHOST, DBUSER, DBPASS, DBNAME, DBPORT);
if($cnn){
echo "koneksi ke DBMS mysql Sukses<br>";
$hsl = mysqli_query($cnn, $s_db);
if ($hsl){
    echo "Membuat Table tbUser sukses<br>";
}else{
    echo "Membuat Table tbUser gagal<br>";
}

}else{
    echo "koneksi ke DBMS mysqli Gagal<br>";
}