<?php
    const title="Popüler Kurslar";
    $kategoriler=array("Programlama","Web Geliştirme","Veri Analizi","Ofis Uygulamaları");
    sort($kategoriler);
    $kurslar= array(
        "1"=>array(
            "baslik"=>"Php Kursu",
            "altBaslik"=>"Sıfırdan ileri seviye Php ile web geliştirme",
            "resim"=>"php.jpg",
            "yayinTarihi"=>"01.01.2023",
            "yorumSayisi"=>"100",
            "begeniSayisi"=>"200"
        ),
        "2"=>array(
            "baslik"=>"Python Kursu",
            "altBaslik"=>"Sıfırdan ileri seviye Python programlama",
            "resim"=>"python.jpg",
            "yayinTarihi"=>"01.01.2023",
            "yorumSayisi"=>"400",
            "begeniSayisi"=>"300"
        ),
        "3"=>array(
            "baslik"=>"Node.js Kursu",
            "altBaslik"=>"Sıfırdan ileri seviye Node.js ile web geliştirme",
            "resim"=>"node.jpg",
            "yayinTarihi"=>"01.01.2023",
            "yorumSayisi"=>"300",
            "begeniSayisi"=>"500"
        )
    );
    $yeni_film=array(
        "baslik"=>"Django Kursu",
        "altBaslik"=>"Sıfırdan ileri seviye Django programlama",
        "resim"=>"node.jpg",
        "yayinTarihi"=>"01.01.2023",
        "yorumSayisi"=>"300",
        "begeniSayisi"=>"500"
    );
    $kurslar["4"]=$yeni_film;
    $kurs1_baslik="Php Kursu";
    $kurs1_altBaslik="Sıfırdan ileri seviye Php ile web geliştirme";
    $kurs1_resim="php.jpg";
    $kurs1_yayınTarihi="01.01.2023";
    $kurs1_yorumSayisi="300";
    $kurs1_begeniSayisi="200";

    $kurs2_baslik="Python Kursu";
    $kurs2_altBaslik="Sıfırdan ileri seviye Python programlama";
    $kurs2_resim="python.jpg";
    $kurs2_yayınTarihi="01.01.2023";
    $kurs2_yorumSayisi="400";
    $kurs2_begeniSayisi="300";

    $kurs3_baslik="Node.js Kursu";
    $kurs3_altBaslik="Sıfırdan ileri seviye Node.js ile web geliştirme";
    $kurs3_resim="node.jpg";
    $kurs3_yayınTarihi="01.01.2023";
    $kurs3_yorumSayisi="300";
    $kurs3_begeniSayisi="500";

    $kurs1_altBaslik= ucfirst(strtolower($kurslar["1"]["altBaslik"]));
    $kurs2_altBaslik = ucfirst(strtolower($kurslar["2"]["altBaslik"]));
    $kurs3_altBaslik= ucfirst(strtolower($kurslar["3"]["altBaslik"]));

    $kurs1_altBaslik=substr($kurs1_altBaslik,0,50)."...";//0. indeksten 50. indekse kadar yazar sonuna ...ekler
    $kurs2_altBaslik=substr($kurs2_altBaslik,0,50)."...";
    $kurs3_altBaslik=substr($kurs3_altBaslik,0,50)."...";

    $kurs1_url= str_replace([" "],["-"],strtolower($kurslar["1"]["baslik"]));
    $kurs2_url= str_replace([" "],["-"],strtolower($kurslar["2"]["baslik"]));
    $kurs3_url= str_replace([" ","."],["-",""],strtolower($kurslar["3"]["baslik"]));
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" />
    <title>Document</title>
</head>
<body>
    <div class="container my-3"> <!--my 3 üstten alttan, container ise sağdan soldan pay bırakır -->
        <div class="row">
            <div class="col-3"><!--sayfayı ikiye böler sağ taraf 3 kolon sol taraf 9 kolon olur-->
                <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action active"><?php echo $kategoriler[0]; ?></a>
                    <a href="#" class="list-group-item list-group-item-action"><?php echo $kategoriler[1]; ?></a>
                    <a href="#" class="list-group-item list-group-item-action"><?php echo $kategoriler[2]; ?></a>
                    <a href="#" class="list-group-item list-group-item-action"><?php echo $kategoriler[3]; ?></a>
                </div>
            </div>
            <div class="col-9">
                <h1 class="mb-3"><?php echo title; ?></h1>
                <p class="lead">
                    <?php echo count($kategoriler)?> kategoride <?php echo count($kurslar) ?> kurs listelenmiştir
                </p>
                <div class="card mb-3"> <!-- her bir kurs için 3 birim-->
                    <div class="row"> <!-- div in kısa yolu .row enter yaparsan direk divler -->
                        <div class="col-3"><!--3lük kolon sol ve 9luk kolon sağ -->
                            <img src="img/<?php echo ($kurslar["1"]["resim"]);?>" alt="" class="img-fluid rounded-start"><!-- img-fluid 3lük kolona kendini sığdırsın, rounded-start resmin sol tarafını yuvarla-->
                        </div>
                        <div class="col-9">
                            <div class="card-body">
                                <h5 class="card-title">
                                    <a href="<?php echo $kurs1_url; ?>">
                                        <?php echo ($kurslar["1"]["baslik"]); ?>
                                    </a>
                                </h5>
                                <p class="card-text"><?php echo ($kurslar["1"]["altBaslik"]);?></p>
                                <p>
                                    <span class="badge rounded-pill text-bg-primary">
                                        Beğeni:<?php echo ($kurslar["1"]["begeniSayisi"]);?>
                                    </span>
                                    <span class="badge rounded-pill text-bg-danger">
                                        Yorum:<?php echo ($kurslar["1"]["yorumSayisi"]);?>
                                    </span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-3"> <!-- her bir kurs için 3 birim-->
                    <div class="row"> <!-- div in kısa yolu .row enter yaparsan direk divler -->
                        <div class="col-3"><!--3lük kolon sol ve 9luk kolon sağ -->
                            <img src="img/<?php echo ($kurslar["2"]["resim"]);?>" alt="" class="img-fluid rounded-start"><!-- img-fluid 3lük kolona kendini sığdırsın, rounded-start resmin sol tarafını yuvarla-->
                        </div>
                        <div class="col-9">
                            <div class="card-body">
                                <h5 class="card-title">
                                    <a href="<?php echo $kurs2_url; ?>">
                                        <?php echo ($kurslar["2"]["baslik"]); ?>
                                    </a>
                                </h5>
                                <p class="card-text"><?php echo ($kurslar["2"]["altBaslik"]);?></p>
                                <p>
                                    <span class="badge rounded-pill text-bg-primary">
                                        Beğeni:<?php echo ($kurslar["2"]["begeniSayisi"]);?>
                                    </span>
                                    <span class="badge rounded-pill text-bg-danger">
                                        Yorum:<?php echo ($kurslar["2"]["yorumSayisi"]);?>
                                    </span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-3"> <!-- her bir kurs için 3 birim-->
                    <div class="row"> <!-- div in kısa yolu .row enter yaparsan direk divler -->
                        <div class="col-3"><!--3lük kolon sol ve 9luk kolon sağ -->
                            <img src="img/<?php echo ($kurslar["3"]["resim"]);?>" alt="" class="img-fluid rounded-start"><!-- img-fluid 3lük kolona kendini sığdırsın, rounded-start resmin sol tarafını yuvarla-->
                        </div>
                        <div class="col-9">
                            <div class="card-body">
                                <h5 class="card-title">
                                    <a href="<?php echo $kurs3_url; ?>">
                                        <?php echo ($kurslar["3"]["baslik"]); ?>
                                    </a>
                                </h5>
                                <p class="card-text"><?php echo ($kurslar["3"]["altBaslik"]);?></p>
                                <p>
                                    <span class="badge rounded-pill text-bg-primary">
                                        Beğeni:<?php echo ($kurslar["3"]["begeniSayisi"]);?>
                                    </span>
                                    <span class="badge rounded-pill text-bg-danger">
                                        Yorum:<?php echo ($kurslar["3"]["yorumSayisi"]);?>
                                    </span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-3"> <!-- her bir kurs için 3 birim-->
                    <div class="row"> <!-- div in kısa yolu .row enter yaparsan direk divler -->
                        <div class="col-3"><!--3lük kolon sol ve 9luk kolon sağ -->
                            <img src="img/<?php echo ($kurslar["4"]["resim"]);?>" alt="" class="img-fluid rounded-start"><!-- img-fluid 3lük kolona kendini sığdırsın, rounded-start resmin sol tarafını yuvarla-->
                        </div>
                        <div class="col-9">
                            <div class="card-body">
                                <h5 class="card-title">
                                    <a href="<?php echo $kurs1_url; ?>">
                                        <?php echo ($kurslar["4"]["baslik"]); ?>
                                    </a>
                                </h5>
                                <p class="card-text"><?php echo ($kurslar["4"]["altBaslik"]);?></p>
                                <p>
                                    <span class="badge rounded-pill text-bg-primary">
                                        Beğeni:<?php echo ($kurslar["4"]["begeniSayisi"]);?>
                                    </span>
                                    <span class="badge rounded-pill text-bg-danger">
                                        Yorum:<?php echo ($kurslar["4"]["yorumSayisi"]);?>
                                    </span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>  
</body>
</html>