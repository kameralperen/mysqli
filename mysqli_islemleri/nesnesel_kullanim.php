<!DOCTYPE html>
<html lang="tr-TR">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-language" content="tr">
<title>Başlık</title>
</head>
<body>
    <?php
	/*
		$veritabani		=	new mysqli("localhost", "root", "1", "yapilacaklar_projesi");
		$veritabani->set_charset("utf8mb4");

		if($veritabani->connect_errno){
			echo "veri tabani baglantisi kurulamadi <br />";
			echo "Hatanın sebebi: " . $veritabani->connect_error;
		}else{
			echo "veri tabani baglantisi yapildi.";
		}

		$veritabani->close();
		*/




		$veritabani		=	new mysqli("localhost", "root", "", "yapilacaklar_projesi");
		$veritabani->set_charset("utf8mb4");
		if($veritabani->connect_errno){
			die("Bağlantı kurulamadı");
		}else{
			echo "veri tabani baglantisi yapildi.";
		}

		echo "selam şişko";

		$veritabani->close();
    ?>
</body>
</html>


