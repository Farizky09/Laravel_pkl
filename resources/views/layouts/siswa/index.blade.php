<x-html-layout>
    <x-slot:title>
        Siswa
        </x-slot>
        <x-sidebar-with-profile-layout></x-sidebar-with-profile-layout>

        <div class="main-content">
    <div class="container">
    <div class="card p-5">
        <h1>Data Siswa</h1>
            <a href="siswa/create">Tambah</a>
            <table>
                <tr>
                    <th>Id</th>
                    <th>nis</th>
                    <th>nama_siswa</th>
                    <th>jk_siswa</th>
                    <th>kelas_siswa</th>
                    <th>nohp_siswa</th>
                    <th>alamat_siswa</th>
                </tr>
                @foreach ($siswa as $siswa)
                <tr>
                    <td>{{$siswa->id}}</td>
                    <td>{{$siswa->nis}}</td>
                    <td>{{$siswa->nama_siswa}}</td>
                    <td>{{$siswa->jk_siswa}}</td>
                    <td>{{$siswa->kelas_siswa}}</td>
                    <td>{{$siswa->nohp_siswa}}</td>
                    <td>{{$siswa->alamat_siswa}}</td>
                    <td>
                        <a href="siswa/edit/{{$siswa->id}}">Edit</a>
                        |
                        <a href="siswa/delete/{{$siswa->id}}">Delete</a>
                    </td>
                </tr>

                @endforeach
            </table>
        </div>
    </div>
</div>
<x-html-script-layout>
    <script>
        let jquery_datatable = $("#table").DataTable();
    </script>
    <script src="{{ asset('assets/js/pages/dashboard.js') }}"></script>
</x-html-script-layout>
</x-html-layout>
