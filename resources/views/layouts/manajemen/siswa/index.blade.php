<x-html-layout>
    <x-slot:title>
        Siswa
        </x-slot>
        <x-sidebar-layout></x-sidebar-layout>
        <div id="main" class="pt-xl-0 pt-sm-3 mt-0 ml-1 px-4">
            <div class="row">
                <div class="col-6 order-md-1">
                    <div class="m-0 pt-2 ">
                        <h3 class="m-0 p-0 text-white">Siswa</h3>
                        <p class="text-white-50">Table seluruh data siswa yang tersedia</p>
                    </div>
                </div>
                <div class="mt-3 col-6 order-md-2">
                    <nav class="breadcrumb-header float-end" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="text-white-50 breadcrumb-item active">Manajemen</li>
                            <li class="breadcrumb-item"><a class="text-white" href="stock">Siswa</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div style="border-radius: 4px; border-bottom: 2px solid" class="card p-0 mt-3 border-primary">
                <div
                    class="card-header m-0 p-0 ms-auto pt-3 px-4 d-flex flex-row align-items-center justify-content-center">
                    <a href="{{ route('siswa-create') }}" type="button"
                        class="btn btn-success rounded-pill btn-sm float-end ms-2">
                        <i class="bi bi-plus-circle"></i>
                        <span> | Tambah Siswa</span>
                    </a>
                </div>
                <div style="position: absolute; top: -20px; left: 10px;border-radius: 5px;padding: 10px 10px; border-bottom: 2px solid;text-align: center; box-shadow: 0 0 10px rgba(0, 0, 0, .15);"
                    class="card border-0 shadow rounded">
                    <h6 style="margin: 0px;">Siswa</h6>
                </div>
                <div class="card-body mt-2">
                    <div class="table-responsive">
                        <table class="table" id="table">
                            <thead>
                                <tr>
                                    <th>NO</th>
                                    <th>NIS</th>
                                    <th>Nama</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Kelas</th>
                                    <th>No HP</th>
                                    <th>Alamat</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($siswa as $siswa)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $siswa->nis }}</td>
                                        <td>{{ $siswa->nama_siswa }}</td>
                                        @if ($siswa->jk_siswa == 'l')
                                            <td>Laki - Laki</td>
                                        @else
                                            <td>Perempuan</td>
                                        @endif
                                        <td>{{ $siswa->kelas_siswa }}</td>
                                        <td>{{ $siswa->nohp_siswa }}</td>
                                        <td>{{ $siswa->alamat_siswa }}</td>
                                        <td class="text-center">
                                            <a href="{{ route('siswa-edit', ['id' => $siswa->id]) }}"
                                                class="btn btn-warning btn-sm"><i class="bi bi-pencil"></i>
                                            </a>
                                            <a href="#" class="btn btn-danger btn-sm hapus"
                                                data-id="{{ $siswa->id }}" data-name="{{ $siswa->nama_siswa }}"><i
                                                    class="bi bi-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="8" class="text-center text-danger">
                                            Data Siswa belum Tersedia.
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        </div>
        <x-html-script-layout>
            <script>
                let jquery_datatable = $("#table").DataTable();
                $('.hapus').click(function() {
                    var siswa_id = $(this).attr('data-id')
                    var siswa_name = $(this).attr('data-name')
                    const swalWithBootstrapButtons = Swal.mixin({
                        customClass: {
                            confirmButton: 'btn btn-success ms-2',
                            cancelButton: 'btn btn-danger'
                        },
                        buttonsStyling: false
                    })

                    swalWithBootstrapButtons.fire({
                        title: 'Yakin?',
                        html: "Kamu akan kehilangan <strong>data siswa</strong> yang bernama " + siswa_name + "",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonText: 'Iya, Saya Yakin!',
                        cancelButtonText: 'Tidak, Batalkan!',
                        reverseButtons: true
                    }).then((result) => {
                        if (result.isConfirmed) {
                            window.location = "item-delete/" + siswa_id;
                        } else if (
                            /* Read more about handling dismissals below */
                            result.dismiss === Swal.DismissReason.cancel
                        ) {
                            swalWithBootstrapButtons.fire(
                                'Dibatalkan',
                                'Data tidak jadi dihapus :)',
                                'error'
                            )
                        }
                    })
                });
            </script>
            {{-- <script src="{{ asset('assets/js/pages/dashboard.js') }}"></script> --}}
        </x-html-script-layout>
</x-html-layout>
