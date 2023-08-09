<!DOCTYPE html>
<html lang="tr-TR">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-language" content="tr">
<title>gamber alperen</title>
</head>
<body>
    <?php
    $db =   mysqli_connect("localhost", "root", "", "uskumru");
    mysqli_set_charset($db, "utf8");

    if(mysqli_connect_errno()){
        echo "Bağlantı hatası <br /> Hata açıklaması: " . mysqli_connect_error();
        die();
    }

    $Ekle   =   mysqli_query($db, "INSERT INTO oldurulecekler (Adi, Soyadi, Durumu, Emailadresi, HangiPartili) VALUES ('yusüf', 'yozgard', '1', 'dryusüf_yozgard@gmail.com', 'Galiba chpli')");
        if($Ekle){
            echo "Kayıt başarıyla eklendi! <br /><br />";
        }else{
            echo "Sorgu hatası!! <br />";
        }

    $Sorgu  =   mysqli_query($db, "SELECT * FROM oldurulecekler");
        if($Sorgu){
            $KayitSayisi    =   mysqli_num_rows($Sorgu);
                if($KayitSayisi>0){
                    while($Kayitlar=mysqli_fetch_assoc($Sorgu)){
                        echo "Öldürülecekler listesinde id değeri: " . $Kayitlar["id"] . "<br />";
                        echo "Öldürülecekler listesinde Adı: " . $Kayitlar["Adi"] . "<br />";
                        echo "Öldürülecekler listesinde Soyadı: " . $Kayitlar["Soyadi"] . "<br />";
                        echo "Öldürülecekler listesinde Durumu: " . $Kayitlar["Durumu"] . "<br />";
                        echo "Öldürülecekler listesinde e-mail adresii: " . $Kayitlar["Emailadresi"] . "<br />";
                        echo "Öldürülecekler listesinde Partisi: " . $Kayitlar["HangiPartili"] . "<br />";
                        echo "Öldürülecekler listesinde Kayıt tarihi: " . $Kayitlar["KayitTarihi"] . "<br /><br /><br />"; 
                    }

                }else{
                    "Kayıt bulunamadı! <br />";
                }

        }else{
            echo "Sorgu hatası!! <br />";
        }

    mysqli_close($db);
    ?>
</body>
</html>




