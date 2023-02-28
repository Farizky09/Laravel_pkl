<h1> Form Edit Siswa</h1>
<form action="siswa/update/{{$siswa->id}}" method="POST">
@csrf

nis :
<input type="text" name="nis" value="{{$siswa->nis}}"><br>
nama_siswa :
<input type="text" name="nama_siswa" value="{{$siswa->nama_siswa}}"><br>
jk_siswa  :
<input type="text" name="jk_siswa" value="{{$siswa->jk_siswa}}"><br>
kelas_siswa :
<input type="text" name="kelas_siswa" value="{{$siswa->kelas_siswa}}"><br>
nohp_siswa :
<input type="number" name="nohp_siswa" value="{{$siswa->nohp_siswa}}"><br>
alamat_siswa :
<input type="text" name="alamat_siswa" value="{{$siswa->alamat_siswa}}"><br>
<button type="submit">Save</button>
</form>
