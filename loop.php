<?php
$loop = 20;
$num = 1;
for ($i = 0; $i <= $loop; $i++) {
	if ($i == 1) {
	echo "Aku Data Ke - " . $num++  . " dan mendapatkan mendali emas <br>";
	}
	elseif ($i == 2) {
    echo "Aku Data Ke - " . $num++ . " dan mendapatkan mendali perak <br>";
	}
	elseif ($i == 3) {
    echo "Aku Data Ke - " . $num++ . " dan mendapatkan mendali perunggu <br>";
	}
	elseif ($i >= 4 && $i <= 6) {
	echo "Aku Data Ke - " . $num++ . " dan mendapatkan tas laptop <br>";
	}
	elseif ($i >= 7 && $i <= 9 ) {
	echo "Aku Data Ke - " . $num++ . " dan mendapatkan tas karung <br>";
	}
	elseif ($i >= 10 ) {
	echo "Aku Data Ke - " . $num++ . " dan tidak mendapatkan apapun <br>";
	}

}
?>