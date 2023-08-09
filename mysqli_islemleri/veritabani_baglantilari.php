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
        $DB     =   mysqli_connect("127.0.0.1", "root", "");
		mysqli_set_charset($DB, "utf8mb4");
		if(!($DB)){
			echo "Veritabanına bağlanılmadı.". mysqli_connect_error();
		}
		else{
			echo "Veritabanına bağlandı.";
            mysqli_select_db($DB,"yapilacaklar_projesi");
		}

        mysqli_close($DB);*/





        $DB     =   @mysqli_connect("127.0.0.1", "root", "yapilacaklar_projesi");
		@mysqli_set_charset($DB, "utf8mb4");
		if(!($DB)){
			die("Veritabanına bağlanılmadı.");
		}
		else{
			echo "Veritabanına bağlandı.";
		}

        @mysqli_close($DB);
    ?>
</body>
</html>


