<?php
    $ad="İrem";
    $soyad="Tunalı"; 
    $yas=20; 
    //$mesaj= "My name is $ad $soyad and $yas years old.";
    $mesaj= "My name is {$ad} {$soyad} and {$yas} years old.";
    echo $mesaj."<br>";
    echo strlen($mesaj)."<br>";//yazının uzunluğunu hesaplar
    echo str_word_count($mesaj)."<br>";//kelime bilgisini verir
    echo strtolower($mesaj)."<br>";//harfleri küçük yazar
    echo ucfirst($mesaj)."<br>";//cümlenin baş harfini büyük yapar
    echo str_replace(["İrem","20"],["Kadir","21"],$mesaj)."<br>";
?>