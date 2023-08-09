<!DOCTYPE html>
<html lang="tr-TR">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-language" content="tr">
<title>gamber alperen</title>
</head>
<body>
    <?php
        $Db =   mysqli_connect("localhost","root","","classicmodels");
        mysqli_set_charset($Db, "utf8");
            if(mysqli_connect_errno()){
                echo "Bağlantı hatası <br />" . "Hata sebebi: " . mysqli_connect_error();
                die();
            }

            $Sorgu  = mysqli_query($Db, "SELECT DISTINCT city FROM customers");
                if($Sorgu){
                    $KayitSayisi    =   mysqli_num_rows($Sorgu);
                        if($KayitSayisi>0){
                            echo "Müşteriler tablosunda bulunan müşterilerin şehirleri: <br /><br />";
                            while($Kayitlar=mysqli_fetch_assoc($Sorgu)){
                                echo $Kayitlar["city"] . "<br />";
                                    $Sorgu2=mysqli_query($Db, "SELECT * FROM customers WHERE city='" . $Kayitlar["city"] . "'");
                                        if($Sorgu2){
                                            $KayitSayisi2    =   mysqli_num_rows($Sorgu2);
                                                if($KayitSayisi2>0){
                                                    while($Kayitlar2=mysqli_fetch_assoc($Sorgu2)){
                                                        echo $Kayitlar2["contactFirstName"] . "<br />";
                                                    }
                                                }else{
                                                    echo "Kayıt yok";
                                                }
                                        }else{
                                            echo "Sorgu hatası <br />";
                                        }   
                            }
                            echo "<br /><br /><br />";
                        }else{
                            echo "bilinen böyle bir kayıt yok";
                        }
                }else{
                    echo "Sorgu hatası!";
                }
               
        mysqli_close($Db);
    ?>
</body>
</html>
