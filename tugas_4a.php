<?php
	$beli = 8000;
	$jual = 7500;
	$untung_ekor = 300;
	$jumlah_ekor = round(($beli-$jual)/$untung_ekor,0);

	echo "Harga Beli = Rp $beli<br>
			Harga Jual = Rp $jual<br>
			Keuntungan = Rp $untung_ekor<br>
			Berapa Jumlah Kambing yang dibeli?<br>
			Jawaban: $jumlah_ekor ekor";
?>