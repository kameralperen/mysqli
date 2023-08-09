<!DOCTYPE html>
<html lang="tr-TR">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-language" content="tr">
<title>gamber alperen</title>
</head>
<body>
    <?php
        $Db =   new mysqli("localhost", "root", "", "classicmodels");
        $Db->set_charset("utf8mb4");

        if($Db->connect_errno){
            echo "Veri tabanı bağlantı hatası. <br /> Hata sebebi: " . $Db->connect_error . "<br />";
            die();
        }

        $Sorgu  =   $Db->query("SELECT * FROM products");
        if($Sorgu){
           echo "Ürün tablosunun verileri <br />"; 
                while($Kayit = $Sorgu->fetch_array()){
                    echo "Ürün Kodu: " . $Kayit[0] . "<br />";
                    echo "Ürünün ismi: " . $Kayit[1] . "<br />";
                    echo "Ürün Kategorisi: " . $Kayit[2] . "<br />";
                    echo "Ürünün satıcısı: " . $Kayit[3] . "<br />";
                    echo "Ürün açıklaması: " . $Kayit[4] . "<br />";
                    echo "Ürün stoğu: " . $Kayit[5] . "<br />";
                    echo "Ürünün satış fiyatı: " . $Kayit[6] . "<br />";
                    echo "Ürünün perakende satış fiyatı: " . $Kayit[7] . "<br /><br />";
                }
            echo "veri tabanına bağlantı sağlandı <br />";
        }else{
            echo "sorgu hatası!";
        }
        $Db->close();
    ?>
</body>
</html>
