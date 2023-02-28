<h1> Form Tambah Guru</h1>
<form action="guru/store" method="POST">
@csrf

nip :
<input type="text" name="nip"><br>
nama_guru :
<input type="text" name="nama_guru"><br>
nohp_guru  :
<input type="text" name="nohp_guru"><br>
jk_guru :
<input type="text" name="jk_guru"><br>
alamat_guru :
<input type="text" name="alamat_guru"><br>

<button type="submit">Save</button>
</form>
