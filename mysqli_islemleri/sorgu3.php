<!DOCTYPE html>
<html lang="tr-TR">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-language" content="tr">
<title>gamber alperen</title>
</head>
<body>
    <?php
        $VeritabaniBaglantisi   =   mysqli_connect("localhost", "root", "", "uskumru");
        mysqli_set_charset($VeritabaniBaglantisi, "utf8mb4");
        if(mysqli_connect_errno()){
            echo "Veri tabanina baglanilamadi <br />" . "Hata sebebi: " . mysqli_connect_error();
        }else{
            echo "Basarili baglanti <br />";
        }
        $Sorgu  =   mysqli_query($VeritabaniBaglantisi, "DROP TABLE sikicitayfa");
            if($Sorgu){
                echo "Tablo silindi";
            }else{
                echo "sorgu hatasi";
            }

        mysqli_close($VeritabaniBaglantisi);
    ?>
</body>
</html>


