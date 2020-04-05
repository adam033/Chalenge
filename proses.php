<?php
include 'koneksi.php';

if(isset($_POST['simpan'])){
    $nis=$_POST['nis'];
    $nama=$_POST['nama'];
    $jurusan = $_POST['jurusan'];
    $kelas = $_POST['kelas'];
    $alamat = $_POST['alamat'];
    $web = $_POST['web'];
    $pbo = $_POST['pbo'];
    $basdat = $_POST['basdat'];
    $desain = $_POST['desain'];
    $progdas = $_POST['progdas'];
    $rata = ($web + $pbo + $basdat + $desain + $progdas)/5;
    $predikat =0;
    if ($rata <= 50){
        $predikat = "E";
    }else if ($rata >= 60 && $rata <= 69){
        $predikat = "D";
    }else if ($rata >= 70 && $rata <= 79){
        $predikat = "C";
    }else if ($rata >=80 && $rata <= 89){
        $predikat = "B";
    }else if ($rata >=90 && $rata <= 100 ){
        $predikat = "A";
    }
    $ket ;
    if ($predikat == "E"){
        $ket = "Rendah";
    }
    if ($predikat == "D"){
        $ket = "Kurang";
    }
    if ($predikat == "C"){
        $ket = "Cukup";
    }
    if ($predikat == "B"){
        $ket = "Baik";
    }
    if ($predikat == "A"){
        $ket = "Sangat Baik";
    }

    
    $sql = "INSERT INTO rekap(nis,nama,jurusan,kelas,alamat,nilai_web,nilai_pbo,nilai_basdat,nilai_desain,nilai_progdas,ratarata,predikat,keterangan) VALUES ('$nis','$nama','$jurusan','$kelas','$alamat','$web','$pbo','$basdat','$desain','$progdas','$rata','$predikat','$ket')";
    $res = mysqli_query($koneksi,$sql);
    $count = mysqli_affected_rows($koneksi);
    
    if($count == 1)
    {
        header("Location:hasil.php");
    }
    else{
        header("Location:form.php");
    }
}else{
    header("Location:form.php");

}
?>