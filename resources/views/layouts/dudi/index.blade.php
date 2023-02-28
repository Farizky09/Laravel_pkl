<x-html-layout>
    <x-slot:title>
        DUDI
        </x-slot>
        <x-sidebar-with-profile-layout></x-sidebar-with-profile-layout>
<h1>Data Guru</h1>
<div class="container">
    <a href="dudi/create">Tambah</a>
    <table>
<tr>
    <th>Id</th>
    <th>nama_dudi</th>
    <th>nohp_dudi</th>
    <th>email_dudi</th>
    <th>alamat_dudi</th>
    <th>Aksi</th>
</tr>
@foreach ($dudi as $dudi)
<tr>
    <td>{{$dudi->id}}</td>
    <td>{{$dudi->nama_dudi}}</td>
    <td>{{$dudi->nohp_dudi}}</td>
    <td>{{$dudi->email_dudi}}</td>
    <td>{{$dudi->alamat_dudi}}</td>
    <td>
        <a href="dudi/edit/{{$dudi->id}}">Edit</a>
        |
        <a href="dudi/delete/{{$dudi->id}}">Delete</a>
    </td>
</tr>

@endforeach
    </table>
</div>
<x-html-script-layout>
    <script>
        let jquery_datatable = $("#table").DataTable();
    </script>
    <script src="{{ asset('assets/js/pages/dashboard.js') }}"></script>
</x-html-script-layout>
</x-html-layout>
