<?php
//memanggil file koneksi.php
include "koneksi.php";

//menerima data inputan dari form di index.php
$nama=$_POST['nama'];
$no_hp=$_POST['no_hp'];
$alamat=$_POST['alamat'];

//menyimpan data kedalam tabel
$simpan=mysqli_query($koneksi,"INSERT INTO tb_kuliner (nama,no_hp,alamat) VALUES ('$nama','$no_hp','$alamat')") or die(mysqli_error($koneksi));
if ($simpan)
{
?>
<script>
window.alert('Data berhasil disimpan, terimakasih sudah berkunjung');
window.location.href="index.php";
</script>
<?php
}
?>