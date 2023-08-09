<!DOCTYPE html>
<html lang="tr-TR">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-language" content="tr">
<title>gamber alperen</title>
</head>
<body>
    <?php
        $DB =   mysqli_connect("localhost", "root", "", "classicmodels");
        mysqli_set_charset($DB, "utf8");

        if(mysqli_connect_errno()){
            echo "Bağlantı hatası <br />";
            echo "Hata açıklaması: " . mysqli_connect_error();
            die();
        }
        $Sorgu  = mysqli_query($DB, "SELECT city, SUM(creditLimit) AS ToplamDeger FROM customers GROUP BY city HAVING ToplamDeger>0");
               if($Sorgu){
                   $KayitSayisi    =   mysqli_num_rows($Sorgu);
                       echo "Tabloda bulunan kayıt sayısı: " . $KayitSayisi . "<br />";
                        if($KayitSayisi>0){
                            while($Kayitar=mysqli_fetch_assoc($Sorgu)){
                                   echo "Şehir ismi: " . $Kayitar["city"] . "<br />";
                                   echo "Toplam kredi değeri:" . $Kayitar["ToplamDeger"] . "<br /><br />";
                               }
                           }else{
                               echo "Kayıt bulunamadı!";
                           }
               }else{
                   echo "Sorgu hatası";
              }
          mysqli_close($DB);
    ?>
</body>
</html>
