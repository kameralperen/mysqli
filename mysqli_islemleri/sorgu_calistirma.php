<!DOCTYPE html>
<html lang="tr-TR">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-language" content="tr">
<title>Başlık</title>
</head>
<body>
    <?php
	$Db	=	mysqli_connect("localhost", "root", "", "classicmodels");
	mysqli_set_charset($Db, "utf8mb4");
	if(mysqli_connect_errno()){
		echo "bağlantı kurulamadı <br />" . mysqli_connect_error();
	}else{
		echo "bağlantı kuruldu <br />";

	}
	$Sorgu		=	mysqli_query($Db, "SELECT * FROM products");
		if($Sorgu){
			echo "<pre>";
			print_r($Sorgu);
			echo "</pre>";
		}else{
			echo "sorgu hatası! <br />";
		}
		mysqli_close($Db);
    ?>
</body>
</html>


