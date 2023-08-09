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
			echo "Veri tabanına bağlanılamadı <br />";
			echo "Hata sebebi: " . mysqli_connect_error();
		}else{
			echo "Başarılı 1. bağlantı! <br />";
			mysqli_select_db($Db, "yapilacaklar_projesi");
		}


		$Db2	= mysqli_connect("localhost", "root", "", "lokanta");
		mysqli_set_charset($Db2, "utf8mb4");
		if(mysqli_connect_errno()){
			echo "Veri tabanına bağlanılamadı <br />";
			echo "Hata sebebi: " . mysqli_connect_error();
		}else{
			echo "Başarılı 2. bağlantı! <br />";
		}

		$Db3	= 	new mysqli("localhost", "root", "", "uskumru");
		$Ch3->set_charset("utf8mb4");
		if($Db3->connect_errno){
			echo "Veri tabanına bağlanılamadı <br />";
			echo "Hata sebebi: " . $Db3->connect_error;
		}else{
			echo "Başarılı 3. bağlantı! <br />";
		}

		mysqli_close($Db);
		mysqli_close($Db2);
		$Db3->close();


    ?>
</body>
</html>


