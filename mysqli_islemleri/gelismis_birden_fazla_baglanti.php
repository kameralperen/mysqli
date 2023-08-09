<!DOCTYPE html>
<html lang="tr-TR">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-language" content="tr">
<title>Başlık</title>
</head>
<body>
    <?php
	
		$Db	= mysqli_connect("localhost", "root", "");
		mysqli_set_charset($Db, "utf8mb4");
		if(mysqli_connect_errno()){
			echo "Veri tabanına bağlanılamadı <br /> Hata sebebi: " . mysqli_connect_error();
		}else{
			echo "Başarılı bağlantı! <br />";
		}

		$Sorgu1		=	mysqli_query($Db, "SELECT * FROM yapilacaklar_projesi.yapilacaklar");
		$Sorgu2		=	mysqli_query($Db, "SELECT * FROM classicmodels.customers");

		mysqli_close($Db);


		$Db2	= 	new mysqli("localhost", "root", "");
		$Db2->set_charset("utf8mb4");
		if($Db2->connect_errno){
			echo "Veri tabanına bağlanılamadı <br /> Hata sebebi: " . $Db2->connect_error;
		}else{
			echo "Başarılı bağlantı! <br />";
		}

		$Sorgu3		=	$Db2->query("SELECT * FROM classicmodels.products");
        $Db2->close();


    ?>
</body>
</html>


