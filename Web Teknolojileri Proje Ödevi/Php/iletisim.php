<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link rel="stylesheet" href="/Css/Anasayfa.css">
    <script src="https://kit.fontawesome.com/1cbc0a7af6.js" crossorigin="anonymous"></script>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>İletişim</title>


</head>

<body>
    <!--Navbar başlangıç-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><i class="fas fa-file-word iHome"></i>Giriş</a>

            </button>
        </div>
    </nav>
    <!--Navbar bitiş-->
    <br><br><br>

    <section class="section">
    <?php
    $isim = $_POST["adsoyad"];
    $konu = $_POST["konu"];
    $email = $_POST["email"];
    $mesaj = $_POST["mesaj"];
    $cinsiyet = $_POST["cinsiyet"];
    echo "<b>Form Gönderme İşleminiz Başarılıyla Sonuçlanmıştır.</b><br /><br />";
    echo "<u>Girmiş Olduğunuz Bilgiler:</u>";
    echo "<br />Ad-Soyad: " . $isim;
    echo "<br />Konu: " . $konu;
    echo "<br />Mesaj: " . $mesaj;
    echo "<br />Cinsiyet: " . $cinsiyet;
    ?>
    <br><br>
    Geri dönmek istiyorsanız <a href="iletişim.html">Buraya</a> basın.
    </section>
</body>

</html>