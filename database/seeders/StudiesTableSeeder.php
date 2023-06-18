<?php

namespace Database\Seeders;
use Illuminate\Support\Facades;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Seeder;

class StudiesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        DB::table('studies')->delete();

        DB::table('studies')->insert(array (
            0 =>
            array (
                'id' => 6,
                'nama' => 'Ilmu Perpustakaan',
                'keterangan' => 'Lorem ipsum dolor',
                'created_at' => '2023-05-29 20:54:49',
                'updated_at' => '2023-05-29 20:54:49',
            ),
            1 =>
            array (
                'id' => 7,
                'nama' => 'Ilmu Komunikasi',
                'keterangan' => 'Lorem ipsum dolor',
                'created_at' => '2023-05-29 20:54:58',
                'updated_at' => '2023-05-29 20:54:58',
            ),
            2 =>
            array (
                'id' => 8,
                'nama' => 'Bahasa dan Sastra',
                'keterangan' => 'Lorem ipsum dolor',
                'created_at' => '2023-05-29 20:55:11',
                'updated_at' => '2023-05-29 20:55:11',
            ),
            3 =>
            array (
                'id' => 9,
                'nama' => 'Ilmu Hubungan Internasional',
                'keterangan' => 'Lorem ipsum dolor',
                'created_at' => '2023-05-29 20:55:25',
                'updated_at' => '2023-05-29 20:55:25',
            ),
            4 =>
            array (
                'id' => 10,
                'nama' => 'Ilmu Hukum',
                'keterangan' => 'Lorem ipsum dolor',
                'created_at' => '2023-05-29 20:55:33',
                'updated_at' => '2023-05-29 20:55:33',
            ),
            5 =>
            array (
                'id' => 11,
                'nama' => 'Ilmu Politik',
                'keterangan' => 'Lorem ipsum dolor',
                'created_at' => '2023-05-29 20:55:43',
                'updated_at' => '2023-05-29 20:55:43',
            ),
            6 =>
            array (
                'id' => 12,
                'nama' => 'Statistika',
                'keterangan' => 'Lorem ipsum dolor',
                'created_at' => '2023-05-29 20:55:56',
                'updated_at' => '2023-05-29 20:55:56',
            ),
            7 =>
            array (
                'id' => 13,
                'nama' => 'Administrasi Negara',
                'keterangan' => 'Lorem ipsum dolor',
                'created_at' => '2023-05-29 20:56:10',
                'updated_at' => '2023-05-29 20:56:10',
            ),
            8 =>
            array (
                'id' => 14,
                'nama' => 'Akuntansi',
                'keterangan' => 'Lorem ipsum dolor',
                'created_at' => '2023-05-29 20:56:17',
                'updated_at' => '2023-05-29 20:56:17',
            ),
            9 =>
            array (
                'id' => 15,
                'nama' => 'Ilmu Ekonomi',
                'keterangan' => 'Lorem ipsum dolor',
                'created_at' => '2023-05-29 20:56:32',
                'updated_at' => '2023-05-29 20:56:32',
            ),
            10 =>
            array (
                'id' => 16,
                'nama' => 'Pendidikan Matematika',
                'keterangan' => 'Lorem ipsum dolor',
                'created_at' => '2023-06-10 06:23:42',
                'updated_at' => '2023-06-10 06:23:42',
            ),
            11 =>
            array (
                'id' => 17,
                'nama' => 'Ilmu Fisika',
                'keterangan' => 'Lorem ipsum dolor',
                'created_at' => '2023-06-10 06:24:01',
                'updated_at' => '2023-06-10 06:24:01',
            ),
            12 =>
            array (
                'id' => 18,
                'nama' => 'Ilmu Kimia',
                'keterangan' => 'Lorem ipsum dolor',
                'created_at' => '2023-06-10 06:24:17',
                'updated_at' => '2023-06-10 06:24:17',
            ),
            13 =>
            array (
                'id' => 19,
                'nama' => 'Teknik Informatika',
                'keterangan' => 'Lorem ipsum dolor',
                'created_at' => '2023-06-10 06:24:27',
                'updated_at' => '2023-06-10 06:24:27',
            ),
            14 =>
            array (
                'id' => 20,
                'nama' => 'Sistem Informasi',
                'keterangan' => 'Lorem ipsum dolor',
                'created_at' => '2023-06-10 06:24:37',
                'updated_at' => '2023-06-10 06:24:37',
            ),
            15 =>
            array (
                'id' => 21,
                'nama' => 'Seni Rupa',
                'keterangan' => 'Lorem ipsum dolor',
                'created_at' => '2023-06-10 06:26:34',
                'updated_at' => '2023-06-10 06:26:34',
            ),
            16 =>
            array (
                'id' => 22,
                'nama' => 'Teknik Arsitektur',
                'keterangan' => 'Lorem ipsum dolor',
                'created_at' => '2023-06-10 06:26:42',
                'updated_at' => '2023-06-10 06:26:42',
            ),
            17 =>
            array (
                'id' => 23,
                'nama' => 'Planologi',
                'keterangan' => 'Lorem ipsum dolor',
                'created_at' => '2023-06-10 06:26:52',
                'updated_at' => '2023-06-10 06:26:52',
            ),
            18 =>
            array (
                'id' => 24,
                'nama' => 'Teknik Sipil',
                'keterangan' => 'Lorem ipsum dolor',
                'created_at' => '2023-06-10 06:27:06',
                'updated_at' => '2023-06-10 06:27:06',
            ),
            19 =>
            array (
                'id' => 25,
                'nama' => 'Seni Musik',
                'keterangan' => 'Lorem ipsum dolor',
                'created_at' => '2023-06-10 06:27:18',
                'updated_at' => '2023-06-10 06:27:18',
            ),
            20 =>
            array (
                'id' => 26,
                'nama' => 'Kedokteran Gigi',
                'keterangan' => 'Lorem ipsum dolor',
                'created_at' => '2023-06-10 06:28:31',
                'updated_at' => '2023-06-10 06:28:31',
            ),
            21 =>
            array (
                'id' => 27,
                'nama' => 'Kebidanan',
                'keterangan' => 'Lorem ipsum dolor',
                'created_at' => '2023-06-10 06:28:39',
                'updated_at' => '2023-06-10 06:28:39',
            ),
            22 =>
            array (
                'id' => 28,
                'nama' => 'Seni Tari',
                'keterangan' => 'Lorem ipsum dolor',
                'created_at' => '2023-06-10 06:28:51',
                'updated_at' => '2023-06-10 06:28:51',
            ),
            23 =>
            array (
                'id' => 29,
                'nama' => 'PJKR',
                'keterangan' => 'Lorem ipsum dolor',
                'created_at' => '2023-06-10 06:28:59',
                'updated_at' => '2023-06-10 06:28:59',
            ),
            24 =>
            array (
                'id' => 30,
                'nama' => 'Teknik Mesin',
                'keterangan' => 'Lorem ipsum dolor',
                'created_at' => '2023-06-10 06:29:06',
                'updated_at' => '2023-06-10 06:29:06',
            ),
            25 =>
            array (
                'id' => 31,
                'nama' => 'Ilmu Sosiologi',
                'keterangan' => 'Lorem ipsum dolor',
                'created_at' => '2023-06-10 06:29:56',
                'updated_at' => '2023-06-10 06:29:56',
            ),
            26 =>
            array (
                'id' => 32,
                'nama' => 'PGPAUD',
                'keterangan' => 'Lorem ipsum dolor',
                'created_at' => '2023-06-10 06:30:03',
                'updated_at' => '2023-06-10 06:30:03',
            ),
            27 =>
            array (
                'id' => 33,
                'nama' => 'PGSD',
                'keterangan' => 'Lorem ipsum dolor',
                'created_at' => '2023-06-10 06:30:10',
                'updated_at' => '2023-06-10 06:30:10',
            ),
            28 =>
            array (
                'id' => 34,
                'nama' => 'Psikologi',
                'keterangan' => 'Lorem ipsum dolor',
                'created_at' => '2023-06-10 06:30:24',
                'updated_at' => '2023-06-10 06:30:24',
            ),
            29 =>
            array (
                'id' => 35,
                'nama' => 'Kedokteran',
                'keterangan' => 'Lorem ipsum dolor',
                'created_at' => '2023-06-10 06:30:31',
                'updated_at' => '2023-06-10 06:30:31',
            ),
            30 =>
            array (
                'id' => 36,
                'nama' => 'Ilmu Keperawatan',
                'keterangan' => 'Lorem ipsum dolor',
                'created_at' => '2023-06-10 06:30:41',
                'updated_at' => '2023-06-10 06:30:41',
            ),
            31 =>
            array (
                'id' => 37,
                'nama' => 'Kesehatan Masyarakat',
                'keterangan' => 'Lorem ipsum dolor',
                'created_at' => '2023-06-10 06:30:52',
                'updated_at' => '2023-06-10 06:30:52',
            ),
            32 =>
            array (
                'id' => 38,
                'nama' => 'Antropologi',
                'keterangan' => 'Lorem ipsum dolor',
                'created_at' => '2023-06-10 06:31:01',
                'updated_at' => '2023-06-10 06:31:01',
            ),
            33 =>
            array (
                'id' => 39,
                'nama' => 'Ilmu Agama',
                'keterangan' => 'Lorem ipsum dolor',
                'created_at' => '2023-06-10 06:31:44',
                'updated_at' => '2023-06-10 06:31:44',
            ),
            34 =>
            array (
                'id' => 40,
                'nama' => 'Administrasi Niaga',
                'keterangan' => 'Lorem ipsum dolor',
                'created_at' => '2023-06-10 06:31:51',
                'updated_at' => '2023-06-10 06:31:51',
            ),
            35 =>
            array (
                'id' => 41,
                'nama' => 'Kedokteran Hewan',
                'keterangan' => 'Lorem ipsum dolor',
                'created_at' => '2023-06-10 06:32:30',
                'updated_at' => '2023-06-10 06:32:30',
            ),
            36 =>
            array (
                'id' => 42,
                'nama' => 'Perikanan',
                'keterangan' => 'Lorem ipsum dolor',
                'created_at' => '2023-06-10 06:32:43',
                'updated_at' => '2023-06-10 06:32:43',
            ),
            37 =>
            array (
                'id' => 43,
                'nama' => 'Peternakan',
                'keterangan' => 'Lorem ipsum dolor',
                'created_at' => '2023-06-10 06:32:57',
                'updated_at' => '2023-06-10 06:32:57',
            ),
            38 =>
            array (
                'id' => 44,
                'nama' => 'Ilmu Biologi',
                'keterangan' => 'Lorem ipsum dolor',
                'created_at' => '2023-06-10 06:33:07',
                'updated_at' => '2023-06-10 06:33:07',
            ),
            39 =>
            array (
                'id' => 45,
                'nama' => 'Pertanian',
                'keterangan' => 'Lorem ipsum dolor',
                'created_at' => '2023-06-10 06:33:15',
                'updated_at' => '2023-06-10 06:33:15',
            ),
            40 =>
            array (
                'id' => 46,
                'nama' => 'Ilmu Filsafat',
                'keterangan' => 'Lorem ipsum dolor',
                'created_at' => '2023-06-10 06:33:24',
                'updated_at' => '2023-06-10 06:33:24',
            ),
            41 =>
            array (
                'id' => 47,
                'nama' => 'Ilmu Sejarah',
                'keterangan' => 'Lorem ipsum dolor',
                'created_at' => '2023-06-10 06:33:33',
                'updated_at' => '2023-06-10 06:33:33',
            ),
        ));


    }
}
