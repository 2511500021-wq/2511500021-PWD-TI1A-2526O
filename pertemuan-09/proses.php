<?php
session_start();
$sesnama= $_POST["txtNama"];
$sesemail = $_POST["txtEmail"];
$sespesan = $_POST["txtPesan"];
$_SESSION["sesnama"] = $sesnama;
$_SESSION["sesemail"] = $sesemail;
$_SESSION["sespesan"] = $sespesan;

$arrBiodata = [
"nim" => $_POST["txtNim"] ?? "",
"nama" => $_POST["txtNmLengkap"] ?? "",
"tempat" => $_POST["txtT4Lhr"] ?? "",
"tanggal" => $_POST["txtTg1Lhr"] ?? "",
"hobi" => $_POST["txtHobi"] ?? "",
"pasangan" => $_POST["txtPasangan"] ?? "",
"pekerjaan" => $_POST["txtKerja"] ?? "",
"ortu" => $_POST ["txtortu"] ?? "",
"kakak" => $_POST["txtNmKakak"] ?? "",
"adik" => $_POST["txtNmAdik"] ?? ""
];

$_SESSION["biodata"] = $arrBiodata;
header("location: index.php#contact");
header("location: index.php");
?>

