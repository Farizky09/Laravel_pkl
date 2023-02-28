<h1> Form Tambah Siswa</h1>
<form action="siswa/store" method="POST">
@csrf

nis :
<input type="text" name="nis"><br>
nama_siswa :
<input type="text" name="nama_siswa"><br>
jk_siswa  :
<input type="text" name="jk_siswa"><br>
kelas_siswa :
<input type="text" name="kelas_siswa"><br>
nohp_siswa :
<input type="number" name="nohp_siswa"><br>
alamat_siswa :
<input type="text" name="alamat_siswa"><br>
<button type="submit">Save</button>
</form>
