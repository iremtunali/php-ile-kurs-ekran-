<?php
    $a=2;
    $b=20;
    //echo $a++."<br>";//burada ilk a'yı yazdırır sonra arttırır
    echo ++$a."<br>";//burada ise ilk a'yı arttırır sonra yazdırır
    echo $a.=$b."<br>";//a ile b'yi birleştirir
    $sonuc=($a==$b);
    echo var_dump($sonuc)."<br>";//true ya da false değer gönderir
    $c="10";
    $d=10;
    $sonuc1=($c==$d);//bunun tür dönüşümünü yapar o yüzden true değer döndürür
    echo $sonuc1."<br>";
    $sonuc1=($c===$d);//burada ise tür dönüşümünü yapamaz tiplerini kontrol eder
    echo $sonuc1."<br>";
    $sonuc=($a<=>$b);//a küçükse b den -1, a=b ise 0, a büyükse b de 1
    
?>