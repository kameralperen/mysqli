<!DOCTYPE html>
<html lang="tr-TR">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-language" content="tr">
<title>gamber alperen</title>
</head>
<body>
    <?php
        $Db =   mysqli_connect("localhost", "root", "", "classicmodels");
        mysqli_set_charset($Db, "utf8");

        if(mysqli_connect_errno()){
            echo "Veritabanına bağlanılamadi<br />";
            echo "hata açıklaması: " . mysqli_connect_error();
            die();
        }

        $Sorgu  =   mysqli_query($Db, "SELECT * FROM customers INNER JOIN orders ON customers.customerNumber = orders.customerNumber");
            if($Sorgu){
                $KayitSayisi    =   mysqli_num_rows($Sorgu);
                    if($KayitSayisi>0){
                        while($Kayitlar =  mysqli_fetch_assoc($Sorgu)){
                            echo "Müşteri numarası: " . $Kayitlar["customerNumber"] . "<br />";
                            echo "Müşteri sipariş numarası: " . $Kayitlar["orderNumber"] . "<br />";
                            echo "Müşteri sipariş tarihi: " . $Kayitlar["orderDate"] . "<br />";
                            echo "Müşteri ismi: " . $Kayitlar["customerName"] . "<br />";               
                            echo "Müşteri telefonu: " . $Kayitlar["phone"] . "<br />";                
                            echo "Müşteri ülkesi: " . $Kayitlar["customerName"] . "<br />";
                            echo "Müşteri şehri: " . $Kayitlar["city"] . "<br /><br />";
                        }
                    }else{
                        echo "Belirtilen kriterlerle ilgili kayıt bulunamadı";
                    }
            }else{
                echo "Sorgu hatası";
            }

        mysqli_close($Db);

        /*
        İkiden fazla tablo inner join ile bağlanılacaksa id değerleri her zaman aynı gelmeyebilir. Bu yüzden alias(AS) kullanmak zorundayız.
         Çekeceğimiz id değerine göre veya diğer değerlere
        göre AS yazıp dizi oluşturduğumuz değişkenin içinde alias isimlerini belirtmeliyiz.
         */
    ?>
</body>
</html>
