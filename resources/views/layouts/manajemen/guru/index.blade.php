<x-slot:title>
    Guru
    </x-slot>
    <x-sidebar-with-profile-layout></x-sidebar-with-profile-layout>
    <h1>Data Guru</h1>
    <div class="container">
        <a href="guru/create">Tambah</a>
        <table>
            <tr>
                <th>Id</th>
                <th>nip</th>
                <th>nama_guru</th>
                <th>nohp_guru</th>
                <th>jk_guru</th>
                <th>alamat_guru</th>

                <th>Aksi</th>
            </tr>
            @foreach ($guru as $guru)
                <tr>
                    <td>{{ $guru->id }}</td>
                    <td>{{ $guru->nip }}</td>
                    <td>{{ $guru->nama_guru }}</td>
                    <td>{{ $guru->nohp_guru }}</td>
                    <td>{{ $guru->jk_guru }}</td>
                    <td>{{ $guru->alamat_guru }}</td>

                    <td>
                        <a href="guru/edit/{{ $guru->id }}">Edit</a>
                        |
                        <a href="guru/delete/{{ $guru->id }}">Delete</a>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
    <x-html-script-layout>
        <script>
            let jquery_datatable = $("#table").DataTable();
        </script>
        <script src="{{ asset('assets/js/pages/dashboard.js') }}">
        </script>
    </x-html-script-layout>
    </x-html-layout>
