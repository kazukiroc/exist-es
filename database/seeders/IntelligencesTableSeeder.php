<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class IntelligencesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        DB::table('intelligences')->delete();

        DB::table('intelligences')->insert(array (
            0 =>
            array (
                'id' => 5,
                'kode' => 'I001',
                'jenis' => 'Kecerdasan Linguistik-Verbal',
                'prodi' => 'Ilmu Perpustakaan,Ilmu Komunikasi,Bahasa dan Sastra,Ilmu Hubungan Internasional,Ilmu Hukum,Ilmu Politik',
                'created_at' => '2023-05-29 20:59:03',
                'updated_at' => '2023-05-29 20:59:03',
            ),
            1 =>
            array (
                'id' => 6,
                'kode' => 'I002',
                'jenis' => 'Kecerdasan Logika-Matematik',
                'prodi' => 'Statistika,Administrasi Negara,Akuntansi,Ilmu Ekonomi,Pendidikan Matematika,Ilmu Fisika,Ilmu Kimia,Teknik Informatika,Sistem Informasi',
                'created_at' => '2023-06-10 06:25:37',
                'updated_at' => '2023-06-10 06:25:37',
            ),
            2 =>
            array (
                'id' => 7,
                'kode' => 'I003',
                'jenis' => 'Kecerdasan Spasial-Visual',
                'prodi' => 'Seni Rupa,Teknik Arsitektur,Planologi,Teknik Sipil',
                'created_at' => '2023-06-10 06:27:51',
                'updated_at' => '2023-06-10 06:27:51',
            ),
            3 =>
            array (
                'id' => 8,
                'kode' => 'I004',
                'jenis' => 'Kecerdasan Ritmik-Musik',
                'prodi' => 'Seni Musik',
                'created_at' => '2023-06-10 06:28:16',
                'updated_at' => '2023-06-10 06:28:16',
            ),
            4 =>
            array (
                'id' => 9,
                'kode' => 'I005',
                'jenis' => 'Kecerdasan Kinestetik',
                'prodi' => 'Kedokteran Gigi,Kebidanan,Seni Tari,PJKR,Teknik Mesin',
                'created_at' => '2023-06-10 06:29:37',
                'updated_at' => '2023-06-10 06:29:37',
            ),
            5 =>
            array (
                'id' => 10,
                'kode' => 'I006',
                'jenis' => 'Kecerdasan Interpersonal',
                'prodi' => 'Ilmu Sosiologi,PGPAUD,PGSD,Psikologi,Kedokteran,Ilmu Keperawatan,Kesehatan Masyarakat,Antropologi',
                'created_at' => '2023-06-10 06:31:27',
                'updated_at' => '2023-06-10 06:31:27',
            ),
            6 =>
            array (
                'id' => 11,
                'kode' => 'I007',
                'jenis' => 'Kecerdasan Intrapersonal',
                'prodi' => 'Ilmu Agama,Administrasi Niaga',
                'created_at' => '2023-06-10 06:32:18',
                'updated_at' => '2023-06-10 06:32:18',
            ),
            7 =>
            array (
                'id' => 12,
                'kode' => 'I008',
                'jenis' => 'Kecerdasan Naturalis',
                'prodi' => 'Kedokteran Hewan,Perikanan,Peternakan,Ilmu Biologi,Pertanian',
                'created_at' => '2023-06-10 06:34:01',
                'updated_at' => '2023-06-10 06:34:01',
            ),
            8 =>
            array (
                'id' => 13,
                'kode' => 'I009',
                'jenis' => 'Kecerdasan Eksistensial',
                'prodi' => 'Ilmu Filsafat,Ilmu Sejarah',
                'created_at' => '2023-06-10 06:34:31',
                'updated_at' => '2023-06-10 06:34:31',
            ),
        ));


    }
}
