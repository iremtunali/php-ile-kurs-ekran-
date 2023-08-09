<?php
    /*$i=1;
    $toplam=0;
    while($i<=100){
        $toplam +=$i;
        $i +=1;
    }
    echo $toplam."<br>";
    $ogrenciler=array("ali","ayşe","ahmet","deniz","mehmet");
    for($i=0;$i<count($ogrenciler);$i+=1){
        echo $ogrenciler[$i]."<br>";
    }*/
    $urunler = array(
        "100" => array(
            "urun_adi" => "iphone 14", 
            "fiyat" => 30000
        ),
        "101" => array(
            "urun_adi" => "iphone 15", 
            "fiyat" => 40000
        ),
        "102" => array(
            "urun_adi" => "iphone 16", 
            "fiyat" => 50000
        ),
    );
    $keys = array_keys($urunler);

    for($i=0; $i<count($urunler); $i++) {

        echo $urunler[$keys[$i]]["urun_adi"]."<br>";
        echo $urunler[$keys[$i]]["fiyat"]."<br>";

        echo "<br>";

    }
    foreach($urunler as $urun){
        echo $urun[0]." ".$urun[1]."<br>";
    }
    foreach ($$urunler as $key => $value) {
        echo $key."<br>";
        print_r($value)."<br>";
    }
?>