<!DOCTYPE html>
<html lang="tr-TR">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-language" content="tr">
<title>gamber alperen</title>
</head>
<body>
    <?php
        $VeriTabaninaBaglan =   new mysqli("localhost", "root", "", "uskumru");
        $VeriTabaninaBaglan->set_charset("utf8mb4");
        if($VeriTabaninaBaglan->connect_errno){
            echo "Bağlanti hatasi <br /> Hata sebebi: " . $VeriTabaninaBaglan->connect_error;
        }else{
            echo "Basarili bağlanti kuruldu! <br />";
        }
        $Sorgu  = $VeriTabaninaBaglan->query("TRUNCATE TABLE oldurulecekler");
            if($Sorgu){
                echo "Tablo içerği boşaltildi";
            }else{
                echo "Sorgu hatasi";
            }

        $VeriTabaninaBaglan->close();
    ?>
</body>
</html>


