<?php
    $opsi = "P1";

    if(isset($_GET["pg"])){
        $opsi = $_GET["pg"];
    }

    $Judulpage = "";
    $Konten = "";

    switch($opsi){
        case "P1":
            $Judulpage = "Page 1";
            $Konten ="<h3>Page 1</h3><p>Isi Dari Page Satu</p>";
            break;
        case "P2":
            $Judulpage = "Page 2";
            $Konten ="<h3>Page 2</h3><p>Isi Dari Page Dua</p>";
            break;
        case "P3":
            $Judulpage = "Page 3";
            $Konten ="<h3>Page 3</h3><p>Isi Dari Page Tiga</p>";
            break;
        case "P4":
            $Judulpage = "Page 4";
            $Konten ="<h3>Page 4</h3><p>Isi Dari Page Empat</p>";
            break;
        default:
            $Judulpage = "Page 1";
            $Konten ="<h3>Page 1</h3><p>Isi Dari Page Satu</p>";
            break;

    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?$Judulpage;?></title>
</head>
<body>

    <a href="Latihan03.php?pg=P1">Page1</a>  <a href="Latihan03.php?pg=P2">Page2</a> <a href="Latihan03.php?pg=P3">Page3</a> <a href="Latihan03.php?pg=P4">Page4</a>

    <?php
        echo $Konten;
    ?>
</body>
</html> 