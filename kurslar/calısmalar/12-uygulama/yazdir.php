<?php
    $query=$_GET['q'];//url den q parametresini alır ve ne yazdırmak istiyorsan onu yazdırır
    $category=$_GET['category'];
    echo $query;
    echo "<br>";
    echo $category;//urlden bilgi göndermeyi kullanıcı bilemez onun için buton kullanarak form yapacağız
?>
