<!DOCTYPE html>
<html lang="tr-TR">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-language" content="tr">
<title>gamber alperen</title>
</head>
<body>
    <?php
    $Db =   mysqli_connect("localhost", "root", "", "uskumru");
    mysqli_set_charset($Db, "utf8");

    if(mysqli_connect_errno()){
        echo "Bağlantı hatası! <br /> Hata açıklaması: " . mysqli_connect_error();
        die();
    }

    $Sorgu  =   mysqli_query($Db, "SELECT * FROM oldurulecekler");
        if($Sorgu){
            $KacKayit   =   mysqli_num_rows($Sorgu);
            if($KacKayit>0){
                while($Kayitlar=mysqli_fetch_assoc($Sorgu)){
                    echo $Kayitlar["id"] . " | " . $Kayitlar["Adi"]  . " | " . $Kayitlar["Soyadi"] . " | " . $Kayitlar["Yas"] . " | " . $Kayitlar["Cinsiyet"] . " | " . $Kayitlar["Emailadresi"] . " | "
                    . $Kayitlar["Durum"] . " | " . $Kayitlar["HangiPartili"] . " | " . $Kayitlar["KayitTarihi"] . " | <a href='guncelle.php?id=" . $Kayitlar["id"] . "'>Güncelle</a> <br />";
                }
            }else{
                echo "Kayıt yok :(";
            }
        }else{
            echo "Sorgu hatası!";
        }

    mysqli_close($Db);

    ?>
</body>
</html>




