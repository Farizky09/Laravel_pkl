<?php

namespace Database\Seeders;

use App\Models\Kelas;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $listSpName = [
            'RPL 1',
            'RPL 2',
            'RPL 3',
            'OTKP 1',
            'OTKP 2',
            'OTKP 3',
            'BDP 1',
            'BDP 2',
            'BDP 3',
            'BDP 4',
            'MM 1',
            'MM 2',
            'AKL 1',
            'AKL 2',
            'AKL 3',
            'KKBT 1',
        ];
        $listSpFullname = [
            'Rekayasa Perangkat Lunak 1',
            'Rekayasa Perangkat Lunak 2',
            'Rekayasa Perangkat Lunak 3',
            'Otomatisasi Tata Kelola Perkantoran 1',
            'Otomatisasi Tata Kelola Perkantoran 2',
            'Otomatisasi Tata Kelola Perkantoran 3',
            'Bisnis dan Pemasaran 1',
            'Bisnis dan Pemasaran 2',
            'Bisnis dan Pemasaran 3',
            'Bisnis dan Pemasaran 4',
            'Multimedia 1',
            'Multimedia 2',
            'Akuntansi Keuangan Lembaga 1',
            'Akuntansi Keuangan Lembaga 2',
            'Akuntansi Keuangan Lembaga 3',
            'Kriya Kreatif Batik dan Tekstil 1',
        ];

        $i = 0;
        foreach($listSpName as $listSp){
            Kelas::create([
                'nama'=> $listSp,
                'nama_lengkap' => $listSpFullname[$i]
            ]);
            $i++;
        }
    }
}
