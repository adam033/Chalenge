
<head>
    <title>Form Nilai Siswa</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale = 1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="bootstrap/js/jquery.min.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/bootstrap.js"></script>
<style>
body{
    background-color: darkslategrey;
}
    div.card{
        margin-left: 275px;
        margin-top: 50px;
        border-radius: 20px;
    }
img{
    width: 100px;
}
input{
    width: 400px;
    border-radius: 5px;
    border-color: darkslategray;
}
option{
    border-radius: 5px;
}
button{
    width: 300px;
}
</style>
</head>
<body>
<div class="container">
<div class="card col-sm-6">
<div class="card-header bg-none text-black">
    <center>
    <img src="topi.webp">
    <font face = "Berlin Sans FB"><h2>Form Nilai</h2></font>
    </center>
</div>
<div class="card-body bg-none text-black">
<form action="proses.php" method="post">
    <div class="form group">
    <font face = "Berlin Sans FB"><h5>NIS</h5></font>
    <input type="text" name="nis" id="nis" placeholder="Masukan Nis Anda">
    </div>
    <div class="form-group">
    <font face = "Berlin Sans FB"><h5>Nama</h5></font>
    <input type="text" name="nama" id="nama" placeholder="Masukan Nama Anda">
    </div>
    <div class="form-group">
    <font face = "Berlin Sans FB"><h5>Kelas</h5></font>
    <select name="kelas" id="kelas">
        <option value="">Pilih Kelas</option>
        <option value="X">X</option>
        <option value="XI">XI</option>
        <option value="XII">XII</option>
    </select>
    </div>
    <div class="form-group">
    <font face = "Berlin Sans FB"><h5>Jurusan</h5></font>
    <select name="jurusan" id="jurusan">
        <option value="">Pilih Jurusan</option>
        <option value="RPL">RPL</option>
        <option value="TKJ">TXJ</option>
    </select>
    </div>
    <div class="form-group">
    <font face = "Berlin Sans FB"><h5>Alamat</h5></font>
    <input type="text" name="alamat" id="alamat" placeholder="Masukan Alamat Anda">
    </div>
    <div class="form-group">
    <font face = "Berlin Sans FB"><h5>Nilai Matpel WEB</h5></font>
    <input type="text" name="web" id="web" placeholder="Masukan Nilai Matpel Web Anda">
    </div>
    <div class="form-group">
    <font face = "Berlin Sans FB"><h5>Nilai Matpel PBO</h5></font>
    <input type="text" name="pbo" id="pbo" placeholder="Masukan Nilai Matpel PBO Anda">
    </div>
    <div class="form-group">
    <font face = "Berlin Sans FB"><h5>Nilai Matpel Basdat</h5></font>
    <input type="text" name="basdat" id="basdat" placeholder="Masukan Nilai Basdat Anda">
    </div>
    <div class="form-group">
    <font face = "Berlin Sans FB"><h5>Nilai Mapel Desain</h5></font>
    <input type="text" name="desain" id="desain" placeholder="Masukan Nilai Desain Anda">
    </div>
    <div class="form-group">
    <font face = "Berlin Sans FB"><h5>Nilai Mapel Progdas</h5></font>
    <input type="text" name="progdas" id="progdas" placeholder="Masukan Nilai Progdas Anda">
    </div>
</div>
<div class="card-footer bg-dark text-white">
    <div class="form-group">
    <center>
    <button class="btn btn-info" type="submit" name="simpan">Simpan</button>
    <br>
    &copy;<h6>Copyright By Adam Himawan</h6>
    </center>    
</div>
</div>
</form>
</div>
</div>
</body>

