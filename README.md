# Chalenge
Chalenge Form Nilai

### Membuat Index Pengisian Form
Pada langkah pertama yaitu membuat form untuk pengisian berupa identitas dan beberapa nilai mata pelajaran yang nanti akan disambungkan kedalam database yang saya beri nama **chalenge** dan berisi satu tabel dengan nama **rekap** dengan isi 12 kolom dengan primary keynya yaitu berupa **nis** siswa.
![Alt Text](https://github.com/adam033/Chalenge/blob/master/Screenshot%20(111).png)
Nah pada gambar diatas kita mengisikan data berupa nama dan lain lain yang nantinya akan masuk kedalam file **proses.php**

### Membuat File Proses
Pada langkah kedua yaitu membuat file untuk memproses seluruh data yang telah kita inputkan tadi yang nantinya kita akan sambungkan dengan database dan kita munculkan pada filr **hasil.php** sehingga file hasil.php mengoutput seluruh isi daripada database chalenge dari tabel rekap yang telah kita inputkan pada file **form.php**;

### Membuat File Hasil
Pada langkah ketiga yaitu membuat file output daripada hasil rekap nilai siswa yaitu dengan menyambungkan file php kita dengan database chalenge dengan menggunakan query **$sql** yang nanti apabila kita memasukan data yang ada pada tabel rekap maka otomatis akan muncul pada file **hasil.php**
![Alt Text](https://github.com/adam033/Chalenge/blob/master/Screenshot%20(112).png)
Nah seperti pada gambar diatas kita berada pada file hasil dimana apa yang kita inputkan tadi menjadi tampilan berupa tabel.
![Alt Text](https://github.com/adam033/Chalenge/blob/master/Screenshot%20(113).png)
Dan seperti inilah apa yang kita inputkan tadi juga akan otomatis terinput kepada database melalui file **proses.php**

## Terima kasih dan semoga bermanfaat


