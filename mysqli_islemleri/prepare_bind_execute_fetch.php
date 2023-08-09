<!DOCTYPE html>
<html lang="tr-TR">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-language" content="tr">
<title>gamber alperen</title>
</head>
<body>
    <?php
    $vt =   new mysqli("localhost", "root", "", "uskumru");
    $vt->set_charset("utf8");

    if($vt->connect_errno){
        echo "Bağlantı hatası! <br /> Hata açıklaması: " . $vt->connect_error;
        die();
    }
    /*
    $Query  =   $vt->prepare("SELECT * FROM oldurulecekler WHERE id>? AND id<?"); //Sorgu başlatmak için kullanılır
    if($Query){
        $Birincikosul   =   2;
        $Ikincikosul   =   5;
        $Query->bind_param("ii", $Birincikosul, $Ikincikosul); //sorgu içerisindeki ?(soru işareti)ne parametre göndermek için kullanılır. İlk parametre veri türü 2. parametre  değişkene depolanan bir değer olmalı
        $Query->execute();
        $Query->bind_result($id, $adi, $soyadi, $yas, $cinsiyet, $durum, $email, $partisi, $kayittarihi);
        while($Query->fetch()){
            echo $id . " | " . $adi . " | " . $soyadi . " | " . $yas . " | " . $cinsiyet . " | " . $durum . " | " . $email . " | " . $partisi . " | " . $kayittarihi . "<br />";
        }
    }else{
        echo "sorgu hatası!";
    }
    */
    $Adekle = 'Ali Emin'; $Soyadekle='toklu'; $yasEkle=22; $Cinsiyetekle='erkek'; $DurumEkle ='hayır'; $EmailEkle='combamali38@gmail.com'; $PartisiniEkle='chp';
    $Ekle = $vt->prepare("INSERT INTO oldurulecekler (Adi, Soyadi, Yas, Cinsiyet, Durum, Emailadresi, HangiPartili) VALUES (?, ?, ?, ?, ?, ?, ?)");
    if($Ekle){
        $Ekle->bind_param("ssissss", $Adekle, $Soyadekle, $yasEkle, $Cinsiyetekle, $DurumEkle, $EmailEkle, $PartisiniEkle);
        $Ekle->execute();
        if($Ekle){
            echo "Kayıt başarıyla eklendi";
        }else{
            echo "Sorgu hatası";
        }
    }else{
        echo "Sorgu hatası!";
    }

    $vt->close();

    ?>
</body>
</html>




