<?php
include 'koneksi.php';

$sql = "SELECT * FROM rekap ORDER BY nis";

$res = mysqli_query($koneksi , $sql);
$rekap = array();

while ($data = mysqli_fetch_assoc($res)) {
    $rekap[] = $data;

}
?>
    <title>Rekap Nilai</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale = 1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="bootstrap/js/jquery.min.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/bootstrap.js"></script>
<style>
    img{
        width: 75px;
    }
    thead{
        background-color: darkgray;
        color: black;
    }
    tbody{
        background-color: gainsboro;
        color: black;
    }
    body{
        background-color: darkslategray;
    }
    div.card{
        border-radius: 20px;
        border-color: black;
    }
</style>
<div class="container">
    <div class="row mt-4">
        <div class="col-md">
            <div class="card bg-light">
                <div class="card-header">
                    <h2 class="card-title text-black"><i><img src="buku.png"></i><font face="Berlin Sans FB"> Rekap Nilai</font></h2>
                </div>
                <div class="card-body">
                    <table class="table table-striped bg-info ">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nis</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Kelas</th>
                                <th scope="col">Jurusan</th>
                                <th scope="col">Alamat</th>
                                <th scope="col">Nilai WEB</th>
                                <th scope="col">Nilai PBO</th>
                                <th scope="col">Nilai Basdat</th>
                                <th scope="col">Nilai Desain</th>
                                <th scope="col">Nilai Progdas</th>
                                <th scope="col">Rata Rata</th>
                                <th scope="col">Predikat</th>
                                <th scope="col">Keterangan</th>
                            </tr>
                        </thead>
                        <tbody>


                        <?php
    $no = 1;
    foreach ($rekap as $r) { ?>

    <tr>
        
        <th scope="row"><?= $no ?></th>
        <td><?= @$r['nis'] ?></td>
        <td><?= @$r['nama'] ?></th>
        <td><?= @$r['kelas'] ?></th>
        <td><?= @$r['jurusan'] ?></th>
        <td><?= @$r['alamat'] ?></th>
        <td><?= @$r['nilai_web'] ?></th>
        <td><?= @$r['nilai_pbo'] ?></th>
        <td><?= @$r['nilai_basdat'] ?></th>
        <td><?= @$r['nilai_desain'] ?></th>
        <td><?= @$r['nilai_progdas'] ?></th>
        <td><?= @$r['ratarata'] ?></th>
        <td><?= @$r['predikat'] ?></th>
        <td><?= @$r['keterangan'] ?></th>

                                        
<?php 
    $no++;
}
?>

                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
