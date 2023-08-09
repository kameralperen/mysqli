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

        $GelenIDDegeri              =   $_GET["id"];
        $GelenAdiDegeri             =   $_POST["Adi"];
        $GelenSoyadiDegeri          =   $_POST["Soyadi"];
        $GelenYasDegeri             =   $_POST["Yas"];
        $GelenCinsiyetDegeri        =   $_POST["Cinsiyet"];
        $GelenEmailDegeri           =   $_POST["Emailadresi"];
        $GelenDurumDegeri           =   $_POST["Durum"];
        $GelenHangiPartiliDegeri    =   $_POST["HangiPartili"];


        $Guncelle   = mysqli_query($Db, "UPDATE oldurulecekler SET Adi='$GelenAdiDegeri', Soyadi='$GelenSoyadiDegeri', Yas='$GelenYasDegeri', Cinsiyet='$GelenCinsiyetDegeri',
        Emailadresi='$GelenEmailDegeri', Durum='$GelenDurumDegeri', HangiPartili='$GelenHangiPartiliDegeri' WHERE id =" . $GelenIDDegeri);
        if($Guncelle){
            echo "Kayıtlar başarıyla güncellendi :)) <br />";
            echo "<a href=index.php>Ana sayfaya geri dön</a>";

        }else{
            echo "Sorgu hatası!";
        }

        mysqli_close($Db);

    ?>

</body>
</html>




