<!DOCTYPE html>
<html lang="tr">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content='text/html; charset=UTF-8' http-equiv='Content-Type' />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> Elektrik Tüketim Ücreti Hesaplama 2022 </title>
    <meta name="description" content=" Elektrik Tüketim Ücreti Hesaplama 2022 ">
    <meta name="keywords" content=" Elektrik Tüketim Ücreti Hesaplama 2022 ">
    <meta name="author" content="Mustafa BÜKÜLMEZ">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css'>
</head>

<body style="overflow:hidden;">
    <div class="row">
        <div class="container-fluid" style="width:100%; height:600px; margin-left:5%;">
            <br />
            <h2> ELEKTRİK TÜKETİM ÜCRETİ HESAPLAMA 2022</h2>
            <strong> <a style="text-decoration:none;" target="_blank" href="https://mustafabukulmez.com/">Mustafa BÜKÜLMEZ</a></strong>
            <?php

            $saatlik_ucret = "0";
            $gunluk_ucret = "0";
            $aylik_ucret = "0";
            $yillik_ucret = "0";
            $watt = "";
            $kac_saat = "";
            if (isset($_POST) && !empty($_POST)) {

                $ucret = $_POST["kullanim_ucret"]; // 1.37;
                $kac_saat = $_POST["kullanim_saati"]; // 5;
                $watt = $_POST["kullanim_watt"]; //1500;
                $kWatt = $watt  / 1000;

                $saatlik_ucret = $kWatt  * $ucret;
                $gunluk_ucret =  $saatlik_ucret * $kac_saat;
                $aylik_ucret  = $gunluk_ucret * 30;
                $yillik_ucret  = $aylik_ucret * 12;
            } ?>
            <br /><br />

            <form action="#" method="post" enctype="multipart/form-data">

                <div class="form-group ">
                    <div class="col-md-6">
                        <label for="kullanim_watt"> Kaç Watt </label>
                        <input class="form-control" type="text" id="kullanim_watt" name="kullanim_watt" value="<?= $watt ?>" style="width:200px;" />
                        <label for="kullanim_watt" style="color:red;"> Örn: 18000 BTU klime ortalama 1800 Watt, küçük bir ısıtıcı ortalama 1500 Watt Tüketir.</label>
                    </div>
                </div>
                <br />
                <div class="form-group ">
                    <div class="col-md-6">
                        <label for="kullanim_ucret"> Kullanım Ücreti </label>
                        <input class="form-control" type="text" id="kullanim_ucret" name="kullanim_ucret" value="1.37" style="width:200px;" />
                        <label for="kullanim_watt" style="color:red;"> Aylık Tüketim 210 kWh üstü için Ücret 2.06 dır.</label>
                    </div>
                </div>
                <br />
                <div class="form-group ">
                    <div class="col-md-6">
                        <label for="kullanim_saati"> Günlük Kullandığınız Saat </label>
                        <input class="form-control" type="text" id="kullanim_saati" name="kullanim_saati" value="<?= $kac_saat ?>" style="width:200px;" />
                        <label for="kullanim_watt" style="color:red;"> Günde kaç saat çalıştıyorsunuz?</label>
                    </div>
                </div>
                <br />
                <div class="form-group ">
                    <button class="btn btn-primary" type="submit" id="submit" name="submit">Hesapla</button>
                </div>
            </form>
            <br />
            <br />
            <p> Saatlik Kullanım Ücreti: <strong> <?= $saatlik_ucret ?></strong> TL</p>
            <p> Günlük Kullanım Ücreti: <strong> <?= $gunluk_ucret ?></strong> TL -><em> Günde <?= $kac_saat ?> Saat çalıştırılması</em></p>
            <p> Aylık Kullanım Ücreti: <strong> <?= $aylik_ucret ?></strong> TL -> <em>Günlük Ücret x 30 Gün</em></p>
            <p> Yıllık Kullanım Ücreti: <strong> <?= $yillik_ucret ?></strong> TL -><em>Aylık Ücret x 12 Ay </em></p>
            <h3>NOT: Bu Hesaplamaya vergiler vs. ek ücretler eklenmemiştir... <br />
                Sadece yazdığınız WATT değerinin <br />2022 Yılı Türkiye Elektrik kullanım ücreti üzerinden
                kaç TL olduğunu hesaplamaktadır. <br />
                Örneğin, 18000 BTU bir klima, günde 10 saat çalışırsa elektrik faturasını ne karar arttırır? <br />
                gibi soruların cevaplarını verir.
            </h3>

        </div>
    </div>

</body>

</html>