<!DOCTYPE html>
<html lang="tr-TR">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-language" content="tr">
<title>gamber alperen</title>
</head>
<body>
    <?php
        $VeritabaninaBaglan =   mysqli_connect("localhost", "root", "", "classicmodels");
        mysqli_set_charset($VeritabaninaBaglan, "utf8mb4");
        if(mysqli_connect_errno()){
            echo "Veri tabanına bağlanılamadı :( <br /> Hata sebebi: " . mysqli_connect_error() . "<br />";
        }else{
            echo "Başarılı bağlantı sağlandı <br /><br />";
        }
        $Sorgu  =   mysqli_query($VeritabaninaBaglan, "SHOW TABLES");
            if($Sorgu){
                while($TabloAdi =   mysqli_fetch_array($Sorgu)){
                    echo "Tablo Adı: " . $TabloAdi[0] . "<br />";
                        $Sorgu2 =   mysqli_query($VeritabaninaBaglan, "CHECK TABLE " . $TabloAdi[0]);
                        $Sorgu3 =   mysqli_query($VeritabaninaBaglan, "ANALYZE TABLE " . $TabloAdi[0]);
                        $Sorgu4 =   mysqli_query($VeritabaninaBaglan, "REPAIR TABLE " . $TabloAdi[0]);
                        $Sorgu5 =   mysqli_query($VeritabaninaBaglan, "OPTIMIZE TABLE " . $TabloAdi[0]);
                            if(($Sorgu2 == true) and ($Sorgu3 == true) and ($Sorgu4 == true) and ($Sorgu5 == true)){
                                echo $TabloAdi[0] . " isimli tabloların bakımları yapıldı <br /><br />";
                            }else{
                                echo "Sorgu hatası!";
                            }
                }
            }else{
                echo "Sorgu hatası <br />";
            }
        mysqli_close($VeritabaninaBaglan);
    ?>
</body>
</html>
