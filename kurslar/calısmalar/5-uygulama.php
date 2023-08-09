<?php
   $plakalar= array("41","53","34");
   /*$sehirler= array("kocaeli","rize","istanbul");

   echo "$plakalar [0] : $sehirler[0]"."<br>";
   echo "$plakalar [1] : $sehirler[1]"."<br>";
   echo "$plakalar [2] : $sehirler[2]"."<br>";*/
   $plaka_bilgileri= array("41"=>"kocaeli","53"=>"rize","34"=>"istanbul");
   echo $plaka_bilgileri ["41"]."<br>";
   echo $plaka_bilgileri ["53"]."<br>";
   echo $plaka_bilgileri ["34"]."<br>";
   echo count($plakalar)."<br>";//eleman sayısını gösterir
   print_r($plakalar)."<br>";//dizilerin kendisini echo olmadan yazdırır
   array_unshift($plakalar,20)."<br>";//dizinin başına eleman ekler array_push diznin sonuna eleman ekler
   array_shift($plakalar)."<br>";//baştan eleman siler pop sondan eleman siler
   asort($plaka_bilgileri)."<br>";//değerlerine göre sıralar sort ise plaka değerlerine göre sıralar
   //ksort key olan kısımları sıralar rsort tersten sıralar
   $str="Kocaeli,41";//stringi diziye çevirdik
   $arr=explode(",",$str);
   print_r($arr);
   $arr=array("iremtunali","mail(@gmail.com");//burada ise diziyi stringe çevirdik
   $str=implode(",",$arr);
   echo $str;
   echo array_count_values($plakalar);//kaç kez tekrarlandığını söyler
   array_flip($plakalar);//key ve value yeri değişir
?>