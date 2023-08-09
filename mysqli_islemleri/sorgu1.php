<!DOCTYPE html>
<html lang="tr-TR">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-language" content="tr">
<title>gamber alperen</title>
</head>
<body>
    <?php
        $Db     =   mysqli_connect("localhost", "root", "", "uskumru");
        mysqli_set_charset($Db, "utf8mb4");

        if(mysqli_connect_errno()){
            echo "Veritabanina baglanti kurulamadi <br /> Hata sebebi: " . mysqli_connect_error() . "<br />";
        }else{
            echo "Başarili bağlanti sağlandi <br />";
        }

        $sorgu  =   mysqli_query($Db, "CREATE TABLE oldurulecekler (
            id int(10) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
            Adi varchar(100) NOT NULL COLLATE utf8_general_ci,
            Soyadi varchar(100) NOT NULL COLLATE utf8_general_ci,
            Durumu tinyint(1) UNSIGNED NOT NULL,
            Emailadresi varchar(255) NOT NULL UNIQUE KEY COLLATE utf8_general_ci,
            HangiPartili varchar(100) NOT NULL COLLATE utf8_general_ci,
            KayitTarihi TIMESTAMP DEFAULT current_timestamp NOT NULL
        )");
        if($sorgu){
            echo "Tablo oluşturuldu";
        }else{
            echo "yazdigin sorguyu sikim";
        }
        mysqli_close($Db);
    ?>
</body>
</html>


