<?php
    $sayi1=5;
    $sayi3=8;
    $sayi2=3;
    echo "sonuç:".(5+3)."<br>";
    echo "sonuç:".($sayi1+$sayi2/$sayi3)."<br>";//işlem önceliği vardır
    echo var_dump(is_int(5.2))."<br>";//true false değer döndürür
    echo var_dump(is_float(5.2))."<br>";
    echo is_int(5)."<br>";
    echo var_dump(is_numeric("5"))."<br>";//numeric sayı mı demek string olsa bile arkada işlem görebilir
    echo abs(-10)."<br>";//mutlak değeri alır
    echo ceil(4.3)."<br>";//her zamanyukarı yuvarlar floor aşağı yuvarlar round yakınına yuvarlar
    echo max (1,2,34,6,9)."<br>";

    
    define("baglanti","mysql bağlantı cümlesi");
    echo baglanti;//başına dolar işareti koymamıza gerek yok çünkü sabit const da aynı şeydir yeni değer atayamazsın
    $renkler= array ("kırmızı","mavi","sarı");
?>
