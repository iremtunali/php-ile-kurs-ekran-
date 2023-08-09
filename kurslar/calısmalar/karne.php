<?php
    /*$a=10;
    $b=20;
    $c=5;
    echo (($a*$b)-($a+$b+$c))."<br>";
    echo (($a+$b+$c)%3)."<br>";
    echo var_dump(($a>50 and $a<100))."<br>";
    echo var_dump(($a>0 and $a%2==0))."<br>";
    $username="irem";
    $password=1234;
    echo var_dump(($username=="irem" and $password=1234))."<br>";*/
    $vize1=60;
    $vize2=60;
    $final=70;
    $ortalama=(($vize1*30/100)+($vize2*30/100)+($final*40/100));
    echo $ortalama."<br>";
    echo "geçme durumunuz: ".($ortalama>50)."<br>";
    echo "geçme durumunuz: ".($ortalama>50 and $final>=50)."<br>";
    echo "geçme durumunuz: ".($ortalama>50 or $final>=70)."<br>";

?>