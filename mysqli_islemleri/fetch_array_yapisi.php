<!DOCTYPE html>
<html lang="tr-TR">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-language" content="tr">
<title>gamber alperen</title>
</head>
<body>
    <?php
    $VeriTabaninaBaglanicaz =   mysqli_connect("localhost", "root", "", "classicmodels");
    mysqli_set_charset($VeriTabaninaBaglanicaz, "utf8mb4");
    if(mysqli_connect_errno()){
        echo "Veri tabanina bağlanilamadi<br /> Hata sebebi: " . mysqli_connect_error();
    }else{
        echo "Başarili bir bağlanti<br /><br />";
    }
    $Sorgu  =   mysqli_query($VeriTabaninaBaglanicaz, "SHOW TABLES");
        if($Sorgu){
            while($TabloAdlari=mysqli_fetch_array($Sorgu)){
                echo "Tablo Adi: " . $TabloAdlari[0] . "<br />";
                    $Sorgu2 =   mysqli_query($VeriTabaninaBaglanicaz, "SHOW COLUMNS FROM " . $TabloAdlari[0]);
                        while($SutunAdi= mysqli_fetch_array($Sorgu2))
                            if($Sorgu2){
                                echo "Sütun Adi: " . $SutunAdi[0] . "<br />";
                            }else{
                                echo "Sorgu hatasi";
                            }
                            echo "<br />";
            }
        }else{
            echo "Sorgu hatasi";
        }
        mysqli_close($VeriTabaninaBaglanicaz);
    ?>
</body>
</html>


