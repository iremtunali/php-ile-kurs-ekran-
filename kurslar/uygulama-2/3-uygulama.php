<?php
    const title="Popüler Kurslar";
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

    $kurs1_altBaslik= ucfirst(strtolower($kurs1_altBaslik));
    $kurs2_altBaslik = ucfirst(strtolower($kurs2_altBaslik));
    $kurs3_altBaslik= ucfirst(strtolower($kurs3_altBaslik));

    $kurs1_altBaslik=substr($kurs1_altBaslik,0,50)."...";//0. indeksten 50. indekse kadar yazar sonuna ...ekler
    $kurs2_altBaslik=substr($kurs2_altBaslik,0,50)."...";
    $kurs3_altBaslik=substr($kurs3_altBaslik,0,50)."...";

    $kurs1_url= str_replace([" "],["-"],strtolower($kurs1_baslik));
    $kurs2_url= str_replace([" "],["-"],strtolower($kurs2_baslik));
    $kurs3_url= str_replace([" ","."],["-",""],strtolower($kurs3_baslik));
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
        <h1 class="mb-3"><?php echo title; ?></h1>
        <div class="card mb-3"> <!-- her bir kurs için 3 birim-->
            <div class="row"> <!-- div in kısa yolu .row enter yaparsan direk divler -->
                <div class="col-3"><!--3lük kolon sol ve 9luk kolon sağ -->
                    <img src="img/<?php echo $kurs1_resim;?>" alt="" class="img-fluid rounded-start"><!-- img-fluid 3lük kolona kendini sığdırsın, rounded-start resmin sol tarafını yuvarla-->
                </div>
                <div class="col-9">
                    <div class="card-body">
                        <h5 class="card-title">
                            <a href="<?php echo $kurs1_url; ?>">
                                <?php echo $kurs1_baslik; ?>
                            </a>
                        </h5>
                        <p class="card-text"><?php echo $kurs1_altBaslik;?></p>
                        <p>
                            <span class="badge rounded-pill text-bg-primary">
                                Beğeni:<?php echo $kurs1_begeniSayisi;?>
                            </span>
                            <span class="badge rounded-pill text-bg-danger">
                                Yorum:<?php echo $kurs1_yorumSayisi;?>
                            </span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="card mb-3"> <!-- her bir kurs için 3 birim-->
            <div class="row"> <!-- div in kısa yolu .row enter yaparsan direk divler -->
                <div class="col-3"><!--3lük kolon sol ve 9luk kolon sağ -->
                    <img src="img/<?php echo $kurs2_resim;?>" alt="" class="img-fluid rounded-start"><!-- img-fluid 3lük kolona kendini sığdırsın, rounded-start resmin sol tarafını yuvarla-->
                </div>
                <div class="col-9">
                    <div class="card-body">
                        <h5 class="card-title">
                            <a href="<?php echo $kurs2_url; ?>">
                                <?php echo $kurs2_baslik; ?>
                            </a>
                        </h5>
                        <p class="card-text"><?php echo $kurs2_altBaslik;?></p>
                        <p>
                            <span class="badge rounded-pill text-bg-primary">
                                Beğeni:<?php echo $kurs2_begeniSayisi;?>
                            </span>
                            <span class="badge rounded-pill text-bg-danger">
                                Yorum:<?php echo $kurs2_yorumSayisi;?>
                            </span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="card mb-3"> <!-- her bir kurs için 3 birim-->
            <div class="row"> <!-- div in kısa yolu .row enter yaparsan direk divler -->
                <div class="col-3"><!--3lük kolon sol ve 9luk kolon sağ -->
                    <img src="img/<?php echo $kurs3_resim;?>" alt="" class="img-fluid rounded-start"><!-- img-fluid 3lük kolona kendini sığdırsın, rounded-start resmin sol tarafını yuvarla-->
                </div>
                <div class="col-9">
                    <div class="card-body">
                        <h5 class="card-title">
                            <a href="<?php echo $kurs3_url; ?>">
                                <?php echo $kurs3_baslik; ?>
                            </a>
                        </h5>
                        <p class="card-text"><?php echo $kurs3_altBaslik;?></p>
                        <p>
                            <span class="badge rounded-pill text-bg-primary">
                                Beğeni:<?php echo $kurs3_begeniSayisi;?>
                            </span>
                            <span class="badge rounded-pill text-bg-danger">
                                Yorum:<?php echo $kurs3_yorumSayisi;?>
                            </span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>  
</body>
</html>