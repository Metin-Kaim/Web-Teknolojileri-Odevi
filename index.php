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

    <title>Login</title>

    <style>
        .formdivi {
            margin: 100px auto 0 auto;
            border: 1px solid #ccc;
            max-width: 300px;
            padding: 10px;
            background: #f2f2f2;
        }

        .inputform {
            width: 100%;
            margin: 0 0 15px 0;
            padding: 0 2% 5px 2%;
        }
    </style>
</head>

<body>




    <!--Navbar başlangıç-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><i class="fas fa-file-word iHome"></i>Login</a>

            </button>
        </div>
    </nav>
    <!--Navbar bitiş-->
    <br><br><br>


    <?php
    $eMail = "g201210072@sakarya.edu.tr";
    $sifre = "g201210072";

    $veriEMail = $_POST["email"];
    $veriSifre = $_POST["sifre"];
    $gonderVerisi = $_POST["giris"];

    if ($gonderVerisi == "Giriş Yap") {
        if ($veriEMail == "" || $veriSifre == "") {
            echo "Lütfen alanları doldurun.";
        } else if ($veriEMail == $eMail && $veriSifre == $sifre) {

            header("Location: Giris.html");
        } else {
            echo "İşlem Başarısız Oldu. Tekrar Deneyin.";
        }
    }

    ?>

    <div class="formdivi">
        <h4>Giriş Yap</h4>
        <form action="" method="POST">

            <input type="email" placeholder="E-posta..." name="email" id="email" class="inputform"> <br>

            <input type="password" placeholder="Şifre..." name="sifre" id="sifre" class="inputform"><br>

            <input type="submit" value="Giriş Yap" name="giris" id="giris" style="margin: 5px 0 0 0;">
        </form>
    </div>



</body>

</html>