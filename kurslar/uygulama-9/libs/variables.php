<?php
    const title = "Popüler Kurslar";

    $kategoriler = array(
        array("kategori_adi"=>"Programlama","aktif"=>true),
        array("kategori_adi"=>"Web Geliştirme","aktif"=>false),
        array("kategori_adi"=>"Veri Analizi","aktif"=>false),
        array("kategori_adi"=>"Ofis Uygulamaları","aktif"=>false),
        array("kategori_adi"=>"Mobil Uygulamalar","aktif"=>false) 
    );

    sort($kategoriler);

    $kurslar = array(
        "1" => array(
            "baslik" => "Php Kursu",
            "altBaslik" => "Sıfırdan ileri seviye Php ile web geliştirme kursu",
            "resim" => "php.jpg",
            "yayinTarihi" => "01.01.2023",
            "yorumSayisi" => 0,
            "begeniSayisi" => 10,
            "onay" => true
        ),
        "2" => array(
            "baslik" => "Python Kursu",
            "altBaslik" => "Sıfırdan ileri seviye Python programlama",
            "resim" => "python.jpg",
            "yayinTarihi" => "01.01.2023",
            "yorumSayisi" => 10,
            "begeniSayisi" => 0,
            "onay" => true
        ),
        "3" => array(
            "baslik" => "Node.js Kursu",
            "altBaslik" => "Sıfırdan ileri seviye Node.js programlama",
            "resim" => "node.jpg",
            "yayinTarihi" => "01.01.2023",
            "yorumSayisi" => 10,
            "begeniSayisi" => 20,
            "onay" => true
        ),
        "4" => array(
            "baslik" => "Django Kursu",
            "altBaslik" => "Sıfırdan ileri seviye Django programlama",
            "resim" => "node.jpg",
            "yayinTarihi" => "01.01.2023",
            "yorumSayisi" => 0,
            "begeniSayisi" => 5,
            "onay" => true
        )
    );
?>