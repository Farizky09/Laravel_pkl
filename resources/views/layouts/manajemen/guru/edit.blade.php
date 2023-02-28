<h1> Form Edit Guru</h1>
<form action="guru/update/{{$guru->id}}" method="POST">
@csrf

nip :
<input type="text" name="nip" value="{{$guru->nip}}"><br>
nama_guru :
<input type="text" name="nama_guru" value="{{$guru->nama_guru}}"><br>
nohp_guru  :
<input type="text" name="nohp_guru" value="{{$guru->nohp_guru}}"><br>
jk_guru :
<input type="text" name="jk_guru" value="{{$guru->jk_guru}}"><br>
alamat_guru :
<input type="text" name="alamat_guru" value="{{$guru->alamat_guru}}"><br>

<button type="submit">Save</button>
</form>
