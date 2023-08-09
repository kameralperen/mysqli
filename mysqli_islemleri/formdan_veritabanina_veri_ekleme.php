<!DOCTYPE html>
<html lang="tr-TR">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-language" content="tr">
<title>gamber alperen</title>
</head>
<body>
    <form action="sonuc.php" method="post">
        Adınız: <input type="text" name="adi"> <br />
        Soyadınız: <input type="text" name="soyadi"> <br />
        Yaşınız: <select name="yas">
                    <option value="">Lütfen seçiniz</option>
                    <option value="18">18</option>
                    <option value="19">19</option>
                    <option value="20">20</option>
                    <option value="21">21</option>
                    <option value="22">22</option>
                    <option value="23">23</option>
                    <option value="24">24</option>
                    <option value="25">25</option>
        </select><br />
        Cisniyetiniz: <input type="radio" name="cinsiyet" value="Erkek">ERKEK <input type="radio" name="cinsiyet" value="Kadın">kadın <br />
        durumunuz: <input type="radio" name="durum" value="evet">evet <input type="radio" name="durum" value="hayır">hayır <br />
        E-Mail adresiniz: <input type="email" name="email"><br />
        Hangi Partilisiniz: <input type="text" name="partisi"><br />
        <input type="submit" value="Kaydet">
    </form>
    <br /><br /><br />
    <?php
    $db =   mysqli_connect("localhost", "root", "", "uskumru");
    mysqli_set_charset($db, "utf8");

    if(mysqli_connect_errno()){
        echo "Bağlantı hatası <br /> Hata açıklaması: " . mysqli_connect_error();
        die();
    }
    $Sorgu  =   mysqli_query($db, "SELECT * FROM oldurulecekler");
        if($Sorgu){
            $KayitSayisi    =   mysqli_num_rows($Sorgu);
                if($KayitSayisi>0){
                    echo "Öldürülecekler listesi:<br /> ";
                    while($Kayitlar=mysqli_fetch_assoc($Sorgu)){
                       echo $Kayitlar["id"] . "| " . $Kayitlar["Adi"] . "| " . $Kayitlar["Soyadi"] . "| " . $Kayitlar["Yas"] . "| "
                        . $Kayitlar["Cinsiyet"] . "| " . $Kayitlar["Durum"] . "| " . $Kayitlar["Emailadresi"] . "| " . $Kayitlar["HangiPartili"] . "| "
                        . $Kayitlar["KayitTarihi"] . "<br />"; 
                    }

                }else{
                    "Kayıt bulunamadı! <br />";
                }

        }else{
            echo "Sorgu hatası!! <br />";
        }

    mysqli_close($db);
    ?>
</body>
</html>




