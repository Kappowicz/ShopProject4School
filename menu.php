<!DOCTYPE html>
<html lang="en">
<head>
  <title>Zapraszamy!</title>
  <link rel="icon" href="jacobscofee.png" type="image/png">
  <meta charset="utf-8">
  <link rel="stylesheet" href="cascadic.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body style="background-color: rgb(51, 51, 51);">
<!-- pasek z logo -->
<div class="container-fluid" style="background-color: black;">
    <img src="jacobscofee.png" width="120">
</div>

<!-- navbar -->
<nav class="navbar navbar-expand-md navbar-dark mt-2" style="background-color: black; font-weight: bold;">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse justify-content-around" id="collapsibleNavbar">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="menu.html">MENU</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="mapa.html">MAPA SKLEPOW</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="kontakt.html">KARIERA</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">KONTAKT</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="o_nas.html">O NAS</a>
        </li>
      </ul>
    </div>
</nav>

<!-- rodzaje kawy -->




<div class="container-fluid mt-2 text-white" style="background-color: black;">

<?php
require("connect.php");

$qr = "Select * from produkt";
$result = $conn->query($qr);

while ($row = $result->fetch_assoc()) {
$nazwa = $row['Nazwa'];
$ilosc = $row['Ilosc'];
$cena = $row['Cena'];
$promocja = $row['Promocja'];
echo "<div style='width: 150px;float:left;text-align:center;'>
<img style='width: 150px; height: 150px;'src='filizanka.png'>
$nazwa <br>
Ilość: $ilosc ";
if ($promocja > 0)
{
  echo "<br> Cena: <s>$cena</s><br>";
  $cena = $cena - ($cena * $promocja);
  $cena = round($cena, 2);
  echo "<b>$cena zł</b><br>";
  $promocja = $promocja * 100;
  echo "Promocja: <b>$promocja %</b>";
}
else
{
  echo "<p>Cena: $cena zł</p>";
}
echo "
<button type='button'>Dodaj do koszyka</button>
</div>";

}
  ?>


    <div class="row pb-3" style="font-weight: bold;">
        <div class="col-md-12">
            <div class="container">
                <p><img src="kubek.png" class="img-fluid" width="30">ANOWAK: POLECAM, DOBRA KAWA</p>
                <p><img src="kubek.png" class="img-fluid" width="30">GRIGORI: NIE ZNAM LEPSZEJ</p>
                <p><img src="kubek.png" class="img-fluid" width="30">SHMEET: DOBRA</p>
                <p><img src="kubek.png" class="img-fluid" width="30">KONOP: BRAKUJE INNYCH SMAKOW</p>
                <p><img src="kubek.png" class="img-fluid" width="30">COMOOH: LUBIE WYPIC PO PRACY</p>
                <p><img src="kubek.png" class="img-fluid" width="30">DOWNILL: MOJA ULUBIONA</p>
            </div>
        </div>
    </div>
</div>



<!-- prawa -->
<div class="container-fluid mt-2 py-5 text-center" style="background-color: black;">
    <b style="font-weight: bold; color: white;">CAPY CAFE 2022 WSZYSTKIE PRAWA ZASTRZEZONE.</b>
</div>
</body>
</html>
