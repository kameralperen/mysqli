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

        $sorgu  =   mysqli_query($Db, "CREATE TABLE sikicitayfa LIKE classicmodels.employees");
        if($sorgu){
            echo "Tablo oluşturuldu <br />";
            $sorgu2  =   mysqli_query($Db, "INSERT INTO sikicitayfa SELECT * FROM classicmodels.employees");
            if($sorgu2){
                echo "kayitlar kopyalandi";
            }else{
                echo "kayitlar alinamadi";
            }
        }else{
            echo "yazdigin sorguyu sikim";
        }
        mysqli_close($Db);
    ?>
</body>
</html>


