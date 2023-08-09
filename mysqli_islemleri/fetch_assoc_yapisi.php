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
            while($Kayit = $Sorgu->fetch_assoc()){
                echo "<pre>";
                print_r($Kayit);
                echo "</pre>";
            }
            echo "veri tabanına bağlantı sağlandı <br />";
        }else{
            echo "sorgu hatası!";
        }
        $Db->close();
    ?>
</body>
</html>
