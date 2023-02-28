<h1> Form Tambah Guru</h1>
<form action="guru/store" method="POST">
@csrf

nama_dudi :
<input type="text" name="nama_dudi"><br>
nohp_dudi :
<input type="text" name="nohp_dudi"><br>
email_dudi  :
<input type="text" name="email_dudi"><br>
alamat_dudi :
<input type="text" name="alamat_dudi"><br>
<button type="submit">Save</button>
</form>
