<?php
    $username="admin";
    $password="1234";
    if($username != "admin"){
        echo "kullanıcı adı yanlış";
    }elseif ($password !="1234"){
        echo "parola yanlış";
    }else{
        echo "Merhaba BTK";
    }
    $sayi=5;
    switch($sayi){
        case 5:
            echo "beş";
            break;
        case 6:
            echo "altı";
            break;
        default:
            echo "yanlış veri";
    }
    $yas=20;
    $sonuc=($yas>=18) ? "ehliyet alabilir" : "ehliyet alamaz";
    echo $sonuc;//ternary operatörü ? soru sorar 1 se ilki döndürür 0 se ikinciyi döndürür 

?>