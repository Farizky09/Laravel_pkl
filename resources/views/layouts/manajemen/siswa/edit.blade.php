<x-html-layout>
    <x-slot:title>
        Siswa
        </x-slot>
        <x-sidebar-layout></x-sidebar-layout>
        <div id="main" class="pt-xl-0 pt-sm-3 mt-0 ml-1 px-4">
            <div class="row">
                <div class="col-6 order-md-1">
                    <div class="m-0 pt-2 ">
                        <h3 class="m-0 p-0 text-white">Edit Siswa</h3>
                        <p class="text-white-50">Form pengubahan siswa</p>
                    </div>
                </div>
                <div class="mt-3 col-6 order-md-2">
                    <nav class="breadcrumb-header float-end" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="text-white-50 breadcrumb-item active">Manajemen</li>
                            <li class="breadcrumb-item"><a class="text-white" href="stock">Edit Siswa</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
            <section class="section">
                <form action="{{ route('siswa-edit',['id'=> $siswa->id]) }}" method="POST">
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
                                                value="{{ $siswa->nama_siswa }}" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <div class="form-group">
                                            <label for="writter">Nomor HP</label>
                                            <input type="number" name="nohp_siswa" class="form-control"
                                                value="{{ $siswa->nohp_siswa }}" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row p-0 m-0">
                                    <div class="col-sm-12 col-md-6">
                                        <div class="form-group">
                                            <label for="name">NIS</label>
                                            <input type="number" name="nis" class="form-control"
                                                value="{{ $siswa->nis }}" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6">
                                        <label for="kelasSelect">Kelas</label>
                                        <select class="form-select" name="kelas_siswa" id="kelasSelect" required>
                                            <option disabled selected value>Pilih Kelasmu</option>
                                            @foreach ($dataKelas as $kategori)
                                                <option value="{{ $kategori->nama }}" {{ $siswa->kelas_siswa == $kategori->nama ? 'selected' : '' }}>{{ $kategori->nama_lengkap }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="code">Alamat</label>
                                    <textarea class="form-control" name="alamat_siswa" dengan apa? Kelurahan-Kecamatan-Kabupaten" id="floatingTextarea"
                                        style="height: 44px;" required>{{ $siswa->alamat_siswa }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="categorySelect">Jenis Kelamin</label>
                                    <select class="form-select" name="jk_siswa" id="categorySelect" required>
                                        <option disabled selected value>Pilih Jenis Kelamin</option>
                                        <option value="l" {{ $siswa->jk_siswa == 'l' ? 'selected' : '' }}
                                            required>Laki-Laki
                                        </option>
                                        <option value="p " {{ $siswa->jk_siswa == 'p' ? 'selected' : '' }}
                                            required>Perempuan
                                        </option>
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
