<?php

include("HEADER.html"); // untuk membuka file header.html
include("main.html"); // untuk membuka file main.html

$nim = @$_POST["nim"]; // untuk menampilkan nim
$nama = @$_POST["nama"]; // untuk menampilkan nama

echo "$nim $nama";
//Simpan kedalam file
	

	$fileku=fopen("data.txt","a"); //untuk membuka data yang ada di txt
	$data=$nim.";".$nama."\n";
	fwrite($fileku,$data); // untuk menulis file
	fclose($fileku); // untuk menutup file

echo "<pre>";
echo "DATA Mahasiswa<br>";
echo "===========================<br>";
include("data.txt");
echo "</pre>";	
include("FOOTER.html");
?>