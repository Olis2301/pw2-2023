<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nilai siswa</title>
</head>
<body>

<?php 


$name = $_POST['nama_lengkap'];
$matkul = $_POST['matkul'];
$uts = $_POST['nilai_uts'];
$uas = $_POST['nilai_uas'];
$tugas = $_POST['nilai_tugas'];
$total = ($uts * 0.3) + ($uas * 0.35) + ($tugas * 0.35);



echo '<br> nama siswa :' . $name;
echo '<br> mata kuliah :' . $matkul;
echo '<br> Nilai uts adalah :' . $uts;
echo '<br> Nilai uas adalah :' . $uas;
echo '<br> Nilai tugas adalah :' . $tugas;
echo '<hr>';
echo 'Total Nilai : ' . $total;    
echo  '<hr>';

?>
    
</body>
</html>