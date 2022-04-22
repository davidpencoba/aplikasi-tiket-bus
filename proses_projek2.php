<?php
echo "<center>";
echo "<font size=8>";
echo "<b>Program Penjualan Tiket<br>Kereta Api";
echo "<hr>";
echo "<table>";
$kotatujuan=$_POST['kotatujuan'];
$kelas=$_POST['kelas'];
$jumlah=$_POST['jumlah'];
if($kotatujuan=="Bogor"&&$kelas=="Ekonomi"){
	$harga=100000;
}else
if($kotatujuan=="Jakarta"&&$kelas=="Ekonomi"){
	$harga=150000;
}else
if($kotatujuan=="Cirebon"&&$kelas=="Ekonomi"){
	$harga=200000;
}else
if($kotatujuan=="Bogor"&&$kelas=="Bisnis"){
	$harga=150000;
}else
if($kotatujuan=="Jakarta"&&$kelas=="Bisnis"){
	$harga=200000;
}else
if($kotatujuan=="Cirebon"&&$kelas=="Bisnis"){
	$harga=250000;
}else
if($kotatujuan=="Bogor"&&$kelas=="Eksekutif"){
	$harga=200000;
}else
if($kotatujuan=="Jakarta"&&$kelas=="Eksekutif"){
	$harga=250000;
}else
if($kotatujuan=="Cirebon"&&$kelas=="Eksekutif"){
	$harga=100000;
}else
$hargatiket=$harga;
$totalharga=$jumlah*$harga;
echo "<tr><td>Kota Tujuan<td>:$kotatujuan";
echo "<tr><td>Kelas<td>:$kelas";
echo "<tr><td>Jumlah Tiket<td>:$jumlah";
echo "<tr><td colspan=3><hr>";
echo "<tr><td>Harga Tiket<td>:";
echo "Rp.".number_format($harga,2,',',',');
echo "<tr><td>Total Harga<td>:";
echo "Rp.".number_format($totalharga,2,',',',');
?>