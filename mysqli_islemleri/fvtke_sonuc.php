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
    
        $GelenAdiDegeri         =   $_POST["adi"];
        $GelenSoyadiDegeri      =   $_POST["soyadi"];
        $GelenYasDegeri         =   $_POST["yas"];
        $GelenCinsiyetDegeri    =   $_POST["cinsiyet"];
        $GelenDurumuDegeri      =   $_POST["durum"];
        $GelenEmailDegeri       =   $_POST["email"];
        $GelenPartiDegeri       =   $_POST["partisi"];

        $Ekle   =   mysqli_query($db, "INSERT INTO oldurulecekler (Adi, Soyadi, Yas, Cinsiyet, Durum, Emailadresi, HangiPartili) 
        VALUES 
        ('$GelenAdiDegeri', '$GelenSoyadiDegeri', '$GelenYasDegeri', '$GelenCinsiyetDegeri', '$GelenDurumuDegeri', '$GelenEmailDegeri', '$GelenPartiDegeri')");
            if($Ekle){
                header("Location:index.php");
                exit();
            }else{
                echo "Sorgu hatası!! <br />";
            }

        mysqli_close($db);
    ?>
</body>
</html>




