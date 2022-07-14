<?php
	echo"<head><title>My Guest Book</title></head>";
	$fp = fopen("guestbook.txt","r");
	echo"<body bgcolor=white>";
	echo("<center><h1>Table Guest Book</h1>");
	echo ("<a href='index.html'>::Isi Buku Tamu::</a><br><hr>");
	echo "<table border='1' width='70%' align=center>";
	echo("<tr><td>Tanggal</td><td>Nama</td><td>Email</td><td>Alamat</td><td>Status</td><td>Komentar</td></tr>");
	$tanggalhariini=date("d-m-Y");
	while($isi=fgets($fp,80))
	{
		$pisah=explode("|",$isi);
		echo("<tr><td>$tanggalhariini</td><td>$pisah[0]</td><td>$pisah[2]</td><td>$pisah[1]</td><td>$pisah[3]</td><td>$pisah[4]</td></tr>");
	} 
	echo"</table>";
	echo "</body>";

?>