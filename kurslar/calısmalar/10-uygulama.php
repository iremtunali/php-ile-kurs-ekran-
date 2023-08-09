<?php
    /*echo date('Y/m/d')."<br>";
    function toplama(){
        return 20+30;
    }
    echo toplama()."<br>";
    function saat(){
        return date('h');
    }
    function selamlama(){
        if(saat()<12){
            return "günaydın";
        }
        else
            return "iyi günler";
    }
    echo selamlama()."<br>";
    echo saat()."<br>";
    function yazma($kelime,$adet){
        for($i=0;$i<$adet;$i++){
            echo $kelime."<br>";
        }
    }    
    echo yazma("kadir",10)."<br>";
    function dikdortgenAlan($uzun,$kisa){
        return $uzun*$kisa;
    }
    function dikdortgenCevre($uzun,$kisa){
        return 2*($uzun+$kisa);
    }
    echo "Dikdörtgenin alanı: ".dikdortgenAlan(5,7)."<br>";
    echo "Dikdörtgenin çevresi: ".dikdortgenCevre(5,7)."<br>";
    function yaziTuraAt(){
        $sayi=rand(1,100);
        if($sayi<50){
            echo "Tura";
        }else{
            echo "Yazı";
        }
    }
    yaziTuraAt();*/
    function tambolen($sayi){
        $bolen=array();
        for($i=2;$i<$sayi;$i++){
            if($sayi%$i==0){
                array_push($bolen,$i);
            }
        }
        return $bolen;
    }
    echo "<pre>";
    print_r(tambolen(50))."<br>" ;
    echo "</pre>";
    /*echo "<br>";
    $sayilar= array(10,20,30);
    function toplam($sayilar){
        $toplam=0;
        foreach ($sayilar as $sayi) {
            $toplam+=$sayi;
        }
        return $toplam;
    }
    echo toplam($sayilar)."<br>";
    $x=5;//global scope
    echo $x;
    function test(){
        $GLOBALS["x"]=10;//global değişkeni değiştirir
        //echo $x;//local scope
    }
    test();
    echo "<br>";
    echo $x;
    function toplama(&$sayi){//göndermiş olduğumuz sayının adresine gönderir yani ikiside değişir diğer türlü örnek sayı sabit kalırdı
        $sayi+=10;
        echo $sayi."<br>";
    }
    $ornekSayi=25;
    toplama($ornekSayi);
    echo $ornekSayi;*/
    function introl(){
        $parametreSayisi=func_num_args();//fonksiyonun kaç parametre aldığını gösterir
        if($parametreSayisi==0)
            echo "parametre yok";
        else{
            $parametreler=func_get_args();//her bilgiyi getirir
            foreach ($parametreler as $parametre) {
                echo $parametreSayisi;
            }
        }
    }
    introl("ali","yılmaz");
    declare(strict_types=1);//php normalde string veri türünü int türüne dönüştürüp işlem yapabilir ama bu kod sayesinde katı kural uygulanır ve dönüştürülmez
    function toplama(int $sayi1,int $sayi2){
        return $sayi1+$sayi2;
    }
    echo toplama(10,20);
    
?>