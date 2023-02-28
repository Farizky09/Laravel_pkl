{{-- <h1> Form Tambah Siswa</h1>
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
</form> --}}
<x-html-layout>
    <x-slot:title>
        Siswa
        </x-slot>
        <x-sidebar-layout></x-sidebar-layout>
        <div id="main" class="pt-xl-0 pt-sm-3 mt-0 ml-1 px-4">
            <div class="row">
                <div class="col-6 order-md-1">
                    <div class="m-0 pt-2 ">
                        <h3 class="m-0 p-0 text-white">Tambah Siswa</h3>
                        <p class="text-white-50">Form penambahan siswa</p>
                    </div>
                </div>
                <div class="mt-3 col-6 order-md-2">
                    <nav class="breadcrumb-header float-end" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="text-white-50 breadcrumb-item active">Manajemen</li>
                            <li class="breadcrumb-item"><a class="text-white" href="stock">Tambah Siswa</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
            <section class="section">
                <form action="{{ route('siswa-create') }}" method="POST">
                    <div style="border-bottom: 2px solid; border-radius: 4px;" class="card border-primary">
                        <div class="card-body">
                            <x-auth-validation-errors class="mb-4" :errors="$errors" />
                            <div class="row">
                                @csrf
                                <div class="row p-0 m-0">
                                    <div class="col-sm-12 col-md-6">
                                        <div class="form-group">
                                            <label for="name">Nama</label>
                                            <input type="text" name="nama_siswa" class="form-control"
                                                placeholder="Nama" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <div class="form-group">
                                            <label for="writter">Nomor HP</label>
                                            <input type="number" name="nohp_siswa" class="form-control"
                                                placeholder="08*********" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row p-0 m-0">
                                    <div class="col-sm-12 col-md-6">
                                        <div class="form-group">
                                            <label for="name">NIS</label>
                                            <input type="number" name="nis" class="form-control" placeholder="NIS"
                                                required>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <label for="kelasSelect">Kelas</label>
                                        <select class="form-select" name="kelas_siswa" id="kelasSelect" required>
                                            <option disabled selected value>Pilih Kelasmu</option>
                                            @foreach ($dataKelas as $kategori)
                                                <option value="{{ $kategori->nama }}">{{ $kategori->nama_lengkap }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="code">Alamat</label>
                                    <textarea class="form-control" name="alamat_siswa" placeholder="Rumah dekat dengan apa? Kelurahan-Kecamatan-Kabupaten"
                                        id="floatingTextarea" style="height: 44px;" required></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="categorySelect">Jenis Kelamin</label>
                                    <select class="form-select" name="jk_siswa" id="categorySelect" required>
                                        <option disabled selected value>Pilih Jenis Kelamin</option>
                                        <option value="l" required>Laki-Laki</option>
                                        <option value="p" required>Perempuan</option>
                                    </select>
                                    <p>
                                        <small class="text-muted">Nama jenis kelamin pilihan kamu.</small>
                                    </p>
                                </div>
                            </div>
                            <div class="px-2 d-flex justify-content-end">
                                <button class="btn btn-primary w-auto" type="submit">Buka Rekening Baru</button>
                            </div>
                        </div>
                    </div>
                </form>
            </section>
        </div>

        </div>
        <x-html-script-layout></x-html-script-layout>
</x-html-layout>
