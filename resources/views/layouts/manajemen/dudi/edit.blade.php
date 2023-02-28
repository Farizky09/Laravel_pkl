<h1> Form Edit Guru</h1>
<form action="dudi/update/{{$dudi->id}}" method="POST">
@csrf

nama_dudi :
<input type="text" name="nama_dudi" value="{{$dudi->nama_dudi}}"><br>
nohp_dudi :
<input type="text" name="nohp_dudi" value="{{$dudi->nohp_dudi}}"><br>
email_dudi  :
<input type="email" name="email_dudi" value="{{$dudi->email_dudi}}"><br>
alamat_dudi :
<input type="text" name="alamat_dudi" value="{{$dudi->alamat_dudi}}"><br>


<button type="submit">Save</button>
</form>
