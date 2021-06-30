<?php
$filename = 'counter.txt';	//mendefinisikan nama file untuk menyimpan counter

function counter(){		//function counter
	global $filename;	//set global variabel $filename

	if(file_exists($filename)){		//jika file counter.txt ada
		$value = file_get_contents($filename);	//set value = nilai di notepad
	}else{		//jika file counter.txt tidak ada maka akan membuat file counter.txt
		$value = 0;		//kemudian set value = 0
	}

	file_put_contents($filename, ++$value);		//menuliskan kedalam file counter.txt value+1
}

counter();	//menjalankan function counter

echo 'Total pengunjung: '.file_get_contents($filename);	//menampilkan counter di website
?>
