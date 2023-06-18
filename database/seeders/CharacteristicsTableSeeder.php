<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class CharacteristicsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        DB::table('characteristics')->delete();

        DB::table('characteristics')->insert(array (
            0 =>
            array (
                'id' => 6,
                'kode' => 'C001',
                'ciri' => 'Suka bercerita',
                'created_at' => '2023-05-29 20:32:28',
                'updated_at' => '2023-05-29 20:33:53',
            ),
            1 =>
            array (
                'id' => 7,
                'kode' => 'C002',
                'ciri' => 'Memiliki ingatan yang baik untuk hal-hal yang sepele',
                'created_at' => '2023-05-29 20:34:08',
                'updated_at' => '2023-05-29 20:34:08',
            ),
            2 =>
            array (
                'id' => 8,
                'kode' => 'C003',
                'ciri' => 'Menyukai permainan kata-kata',
                'created_at' => '2023-05-29 20:34:24',
                'updated_at' => '2023-05-29 20:34:24',
            ),
            3 =>
            array (
                'id' => 9,
                'kode' => 'C004',
                'ciri' => 'Hobi membaca buku',
                'created_at' => '2023-05-29 20:34:34',
                'updated_at' => '2023-05-29 20:34:34',
            ),
            4 =>
            array (
                'id' => 10,
                'kode' => 'C005',
                'ciri' => 'Seorang pembicara yang baik',
                'created_at' => '2023-05-29 20:35:00',
                'updated_at' => '2023-05-29 20:35:00',
            ),
            5 =>
            array (
                'id' => 11,
                'kode' => 'C006',
                'ciri' => 'Menyukai pelajaran bahasa daripada matematika dan ilmu alam',
                'created_at' => '2023-05-29 20:35:28',
                'updated_at' => '2023-05-29 20:35:28',
            ),
            6 =>
            array (
                'id' => 12,
                'kode' => 'C007',
                'ciri' => 'Senang membicarakan dan menulis ide-ide yang ada di otak',
                'created_at' => '2023-05-29 20:36:58',
                'updated_at' => '2023-05-29 20:36:58',
            ),
            7 =>
            array (
                'id' => 13,
                'kode' => 'C008',
                'ciri' => 'Memiliki kosakata yang cukup banyak sehingga tidak ada hambatan atau kesulitan dalam berkomunikasi dengan berbagai kalangan',
                'created_at' => '2023-05-29 20:37:23',
                'updated_at' => '2023-05-29 20:37:23',
            ),
            8 =>
            array (
                'id' => 14,
                'kode' => 'C009',
                'ciri' => 'Senang menulis karangan atau segala hal yang berbentuk tulisan',
                'created_at' => '2023-05-29 20:38:11',
                'updated_at' => '2023-05-29 20:38:11',
            ),
            9 =>
            array (
                'id' => 15,
                'kode' => 'C010',
                'ciri' => 'Lebih memilih untuk menulis dalam presentasi kelompok',
                'created_at' => '2023-05-29 20:38:29',
                'updated_at' => '2023-05-29 20:38:29',
            ),
            10 =>
            array (
                'id' => 19,
                'kode' => 'C011',
                'ciri' => 'Dapat menggunakan banyak kata-kata yang berbeda untuk mengekspresikan diri',
                'created_at' => '2023-06-10 06:39:41',
                'updated_at' => '2023-06-10 06:39:41',
            ),
            11 =>
            array (
                'id' => 20,
                'kode' => 'C012',
                'ciri' => 'Menyukai perdebatan dan diskusi',
                'created_at' => '2023-06-10 06:39:53',
                'updated_at' => '2023-06-10 06:39:53',
            ),
            12 =>
            array (
                'id' => 21,
                'kode' => 'C013',
                'ciri' => 'Sangat menyukai pelajaran matematika',
                'created_at' => '2023-06-10 06:40:06',
                'updated_at' => '2023-06-10 06:40:06',
            ),
            13 =>
            array (
                'id' => 22,
                'kode' => 'C014',
                'ciri' => 'Menyukai permainan yang menggunakan logika, seperti teka-teki angka',
                'created_at' => '2023-06-10 06:40:29',
                'updated_at' => '2023-06-10 06:40:29',
            ),
            14 =>
            array (
                'id' => 23,
                'kode' => 'C015',
                'ciri' => 'Dapat memecahkan soal-soal hitungan',
                'created_at' => '2023-06-10 06:40:41',
                'updated_at' => '2023-06-10 06:40:41',
            ),
            15 =>
            array (
                'id' => 24,
                'kode' => 'C016',
                'ciri' => 'Jika harus mengingat sesuatu, cenderung menempatkan setiap kejadian dalam urutan yang logis',
                'created_at' => '2023-06-10 06:41:08',
                'updated_at' => '2023-06-10 06:41:08',
            ),
            16 =>
            array (
                'id' => 25,
                'kode' => 'C017',
                'ciri' => 'Senang mencari tahu bagaimana cara kerja setiap benda',
                'created_at' => '2023-06-10 06:41:19',
                'updated_at' => '2023-06-10 06:41:19',
            ),
            17 =>
            array (
                'id' => 26,
                'kode' => 'C018',
                'ciri' => 'Menyukai komputer dan berbagai permainan angka-angka',
                'created_at' => '2023-06-10 06:41:32',
                'updated_at' => '2023-06-10 06:41:32',
            ),
            18 =>
            array (
                'id' => 27,
                'kode' => 'C019',
                'ciri' => 'Menyukai permainan catur, sudoku, atau monopoli',
                'created_at' => '2023-06-10 06:41:44',
                'updated_at' => '2023-06-10 06:41:44',
            ),
            19 =>
            array (
                'id' => 28,
                'kode' => 'C020',
                'ciri' => 'Dapat menghitung angka di luar kepala dengan mudah',
                'created_at' => '2023-06-10 06:41:56',
                'updated_at' => '2023-06-10 06:41:56',
            ),
            20 =>
            array (
                'id' => 29,
                'kode' => 'C021',
                'ciri' => 'Jika sesuatu rusak dan tidak berfungsi, akan melihat bagian-bagiannya dan mencari tahu bagaimana cara kerjanya',
                'created_at' => '2023-06-10 06:42:08',
                'updated_at' => '2023-06-10 06:42:08',
            ),
            21 =>
            array (
                'id' => 30,
                'kode' => 'C022',
                'ciri' => 'Suka berpikir melalui masalah dengan hati-hati, mempertimbangkan segala konsekuensinya',
                'created_at' => '2023-06-10 06:42:20',
                'updated_at' => '2023-06-10 06:42:20',
            ),
            22 =>
            array (
                'id' => 31,
                'kode' => 'C023',
                'ciri' => 'Senang menonton film atau membaca buku yang melibatkan berpikir logis seperti buku atau film detektif',
                'created_at' => '2023-06-10 06:42:56',
                'updated_at' => '2023-06-10 06:42:56',
            ),
            23 =>
            array (
                'id' => 32,
                'kode' => 'C024',
                'ciri' => 'Senang membuat eksperimen sederhana',
                'created_at' => '2023-06-10 06:43:07',
                'updated_at' => '2023-06-10 06:43:07',
            ),
            24 =>
            array (
                'id' => 33,
                'kode' => 'C025',
                'ciri' => 'Lebih memilih peta daripada petunjuk tertulis dalam mencari sebuah alamat',
                'created_at' => '2023-06-10 06:43:19',
                'updated_at' => '2023-06-10 06:43:19',
            ),
            25 =>
            array (
                'id' => 34,
                'kode' => 'C026',
                'ciri' => 'Gemar dan mampu mengerjakan teka-teki menyusun potongan gambar, labirin dan teka-teki visual lainnya',
                'created_at' => '2023-06-10 06:43:37',
                'updated_at' => '2023-06-10 06:43:37',
            ),
            26 =>
            array (
                'id' => 35,
                'kode' => 'C027',
                'ciri' => 'Hobi dalam bidang fotografi',
                'created_at' => '2023-06-10 06:43:52',
                'updated_at' => '2023-06-10 06:43:52',
            ),
            27 =>
            array (
                'id' => 36,
                'kode' => 'C028',
                'ciri' => 'Senang menggambar dan menciptakan sesuatu',
                'created_at' => '2023-06-10 06:44:03',
                'updated_at' => '2023-06-10 06:44:03',
            ),
            28 =>
            array (
                'id' => 37,
                'kode' => 'C029',
                'ciri' => 'Menyukai pelajaran geografi daripada matematika',
                'created_at' => '2023-06-10 06:44:17',
                'updated_at' => '2023-06-10 06:44:17',
            ),
            29 =>
            array (
                'id' => 38,
                'kode' => 'C030',
                'ciri' => 'Senang membuat coretan-coretan di kertas',
                'created_at' => '2023-06-10 06:44:29',
                'updated_at' => '2023-06-10 06:44:29',
            ),
            30 =>
            array (
                'id' => 39,
                'kode' => 'C031',
                'ciri' => 'Ketika membaca majalah, lebih suka melihat gambar-gambarnya daripada membaca teksnya',
                'created_at' => '2023-06-10 06:44:43',
                'updated_at' => '2023-06-10 06:44:43',
            ),
            31 =>
            array (
                'id' => 40,
                'kode' => 'C032',
                'ciri' => 'Mahir membangun konstruksi tiga dimensi seperti lego',
                'created_at' => '2023-06-10 06:44:56',
                'updated_at' => '2023-06-10 06:44:56',
            ),
            32 =>
            array (
                'id' => 41,
                'kode' => 'C033',
                'ciri' => 'Lebih mudah belajar dengan gambar daripada dengan teks',
                'created_at' => '2023-06-10 06:45:08',
                'updated_at' => '2023-06-10 06:45:08',
            ),
            33 =>
            array (
                'id' => 42,
                'kode' => 'C034',
                'ciri' => 'Menyukai pelajaran seni rupa',
                'created_at' => '2023-06-10 06:45:20',
                'updated_at' => '2023-06-10 06:45:20',
            ),
            34 =>
            array (
                'id' => 43,
                'kode' => 'C035',
                'ciri' => 'Menata ulang ruang adalah hal menyenangkan',
                'created_at' => '2023-06-10 06:45:38',
                'updated_at' => '2023-06-10 06:45:38',
            ),
            35 =>
            array (
                'id' => 44,
                'kode' => 'C036',
                'ciri' => 'Dapat dengan mudah mambayangkan bagaimana penampakan suatu benda dilihat dari berbagai sisi',
                'created_at' => '2023-06-10 06:46:06',
                'updated_at' => '2023-06-10 06:46:06',
            ),
            36 =>
            array (
                'id' => 45,
                'kode' => 'C037',
                'ciri' => 'Senang mendengarkan musik dan radio',
                'created_at' => '2023-06-10 06:46:20',
                'updated_at' => '2023-06-10 06:46:20',
            ),
            37 =>
            array (
                'id' => 46,
                'kode' => 'C038',
                'ciri' => 'Cenderung bersenandung ketika sedang melakukan aktivitas',
                'created_at' => '2023-06-10 06:46:33',
                'updated_at' => '2023-06-10 06:46:33',
            ),
            38 =>
            array (
                'id' => 47,
                'kode' => 'C039',
                'ciri' => 'Memiliki suara yang merdu',
                'created_at' => '2023-06-10 06:46:46',
                'updated_at' => '2023-06-10 06:46:46',
            ),
            39 =>
            array (
                'id' => 48,
                'kode' => 'C040',
                'ciri' => 'Bisa memainkan salah satu alat musik dengan baik',
                'created_at' => '2023-06-10 06:47:13',
                'updated_at' => '2023-06-10 06:47:13',
            ),
            40 =>
            array (
                'id' => 49,
                'kode' => 'C041',
                'ciri' => 'Suka mendengarkan musik sambil belajar atau sambil membaca buku',
                'created_at' => '2023-06-10 06:47:26',
                'updated_at' => '2023-06-10 06:47:26',
            ),
            41 =>
            array (
                'id' => 50,
                'kode' => 'C042',
                'ciri' => 'Jika harus mengingat sesuatu, mencoba untuk membuat irama tentang hal tersebut',
                'created_at' => '2023-06-10 06:47:46',
                'updated_at' => '2023-06-10 06:47:46',
            ),
            42 =>
            array (
                'id' => 51,
                'kode' => 'C043',
                'ciri' => 'Menikmati berbagai macam gaya musik',
                'created_at' => '2023-06-10 06:47:59',
                'updated_at' => '2023-06-10 06:47:59',
            ),
            43 =>
            array (
                'id' => 52,
                'kode' => 'C044',
                'ciri' => 'Apabila mendengarkan suatu karya musik satu atau dua kali, dapat menyanyikannya kembali dengan cukup baik',
                'created_at' => '2023-06-10 06:48:16',
                'updated_at' => '2023-06-10 06:48:16',
            ),
            44 =>
            array (
                'id' => 53,
                'kode' => 'C045',
                'ciri' => 'Jika sesuatu rusak dan tidak berfungsi, cenderung mengetuk-ngetuk jari membentuk suatu irama sambil mencari jalan keluar',
                'created_at' => '2023-06-10 06:48:28',
                'updated_at' => '2023-06-10 06:48:28',
            ),
            45 =>
            array (
                'id' => 54,
                'kode' => 'C046',
                'ciri' => 'Lebih bersemangat ketika musik dimainkan',
                'created_at' => '2023-06-10 06:48:38',
                'updated_at' => '2023-06-10 06:48:38',
            ),
            46 =>
            array (
                'id' => 55,
                'kode' => 'C047',
                'ciri' => 'Tahu apabila ada nada musik yang sumbang',
                'created_at' => '2023-06-10 06:48:49',
                'updated_at' => '2023-06-10 06:48:49',
            ),
            47 =>
            array (
                'id' => 56,
                'kode' => 'C048',
                'ciri' => 'Terkadang berjalan kaki sambil melantunkan lagu',
                'created_at' => '2023-06-10 06:49:16',
                'updated_at' => '2023-06-10 06:49:16',
            ),
            48 =>
            array (
                'id' => 57,
                'kode' => 'C049',
                'ciri' => 'Olahraga merupakan suatu hobi',
                'created_at' => '2023-06-10 06:49:28',
                'updated_at' => '2023-06-10 06:49:28',
            ),
            49 =>
            array (
                'id' => 58,
                'kode' => 'C050',
                'ciri' => 'Menyukai kegiatan-kegiatan seperti menjahit dan membuat bentuk-bentuk',
                'created_at' => '2023-06-10 06:49:44',
                'updated_at' => '2023-06-10 06:49:44',
            ),
            50 =>
            array (
                'id' => 59,
                'kode' => 'C051',
                'ciri' => 'Penting untuk menyentuh benda yang baru ditemukan untuk melengkapi informasi mengenai benda tersebut',
                'created_at' => '2023-06-10 06:50:24',
                'updated_at' => '2023-06-10 06:50:24',
            ),
            51 =>
            array (
                'id' => 60,
                'kode' => 'C052',
                'ciri' => 'Tidak dapat duduk diam dalam waktu yang lama',
                'created_at' => '2023-06-10 06:50:38',
                'updated_at' => '2023-06-10 06:50:38',
            ),
            52 =>
            array (
                'id' => 61,
                'kode' => 'C053',
                'ciri' => 'Selalu menggunakan gerak tangan atau bahasa tubuh lain ketika berbicara dengan orang lain',
                'created_at' => '2023-06-10 06:50:57',
                'updated_at' => '2023-06-10 06:50:57',
            ),
            53 =>
            array (
                'id' => 62,
                'kode' => 'C054',
                'ciri' => 'Pernah mempunyai prestasi yanng cukup menonjol di salah satu atau lebih cabang olahraga',
                'created_at' => '2023-06-10 06:51:11',
                'updated_at' => '2023-06-10 06:51:11',
            ),
            54 =>
            array (
                'id' => 63,
                'kode' => 'C055',
                'ciri' => 'Menikmati kegiatan yang menantang bahaya atau pengalaman fisik yang menegangkan',
                'created_at' => '2023-06-10 06:51:26',
                'updated_at' => '2023-06-10 06:51:26',
            ),
            55 =>
            array (
                'id' => 64,
                'kode' => 'C056',
                'ciri' => 'Suka pekerjaan yang melibatkan keterampilan tangan',
                'created_at' => '2023-06-10 06:51:46',
                'updated_at' => '2023-06-10 06:51:46',
            ),
            56 =>
            array (
                'id' => 65,
                'kode' => 'C057',
                'ciri' => 'Jika sesuatu rusak dan tidak berfungsi, cenderung memisahkan setiap bagian lalu menggabungkannya kembali',
                'created_at' => '2023-06-10 06:51:58',
                'updated_at' => '2023-06-10 06:51:58',
            ),
            57 =>
            array (
                'id' => 66,
                'kode' => 'C058',
                'ciri' => 'Harus mempraktikan sesuatu keterampilan yang baru, tidak sekedar membaca atau melihat',
                'created_at' => '2023-06-10 06:52:10',
                'updated_at' => '2023-06-10 06:52:10',
            ),
            58 =>
            array (
                'id' => 67,
                'kode' => 'C059',
                'ciri' => 'Gagasan terbaik biasanya muncul ketika jalan-jalan atau joging atau saat terlibat kegiatan fisik lainnya',
                'created_at' => '2023-06-10 06:52:23',
                'updated_at' => '2023-06-10 06:52:23',
            ),
            59 =>
            array (
                'id' => 68,
                'kode' => 'C060',
                'ciri' => 'Ikut sekurang-kurangnya satu kegiatan olahraga atau kegiatan fisik secara teratur',
                'created_at' => '2023-06-10 06:52:36',
                'updated_at' => '2023-06-10 06:52:36',
            ),
            60 =>
            array (
                'id' => 69,
                'kode' => 'C061',
                'ciri' => 'Mampu bergaul baik dengan orang lain',
                'created_at' => '2023-06-10 06:52:56',
                'updated_at' => '2023-06-10 06:52:56',
            ),
            61 =>
            array (
                'id' => 70,
                'kode' => 'C062',
                'ciri' => 'Senang berkumpul dan berorganisasi',
                'created_at' => '2023-06-10 06:53:14',
                'updated_at' => '2023-06-10 06:53:14',
            ),
            62 =>
            array (
                'id' => 71,
                'kode' => 'C063',
                'ciri' => 'Mempunyai beberapa teman dekat',
                'created_at' => '2023-06-10 06:53:25',
                'updated_at' => '2023-06-10 06:53:25',
            ),
            63 =>
            array (
                'id' => 72,
                'kode' => 'C064',
                'ciri' => 'Suka untuk mengajar orang lain tentang hal-hal yang dipelajari',
                'created_at' => '2023-06-10 06:53:37',
                'updated_at' => '2023-06-10 06:53:37',
            ),
            64 =>
            array (
                'id' => 73,
                'kode' => 'C065',
                'ciri' => 'Senang bekerja sama dalam kelompok',
                'created_at' => '2023-06-10 06:53:48',
                'updated_at' => '2023-06-10 06:53:48',
            ),
            65 =>
            array (
                'id' => 74,
                'kode' => 'C066',
                'ciri' => 'Sering didatangi orang untuk dimintai nasehat atau saran, baik di sekolah maupun di lingkungan tempat tinggal',
                'created_at' => '2023-06-10 06:54:02',
                'updated_at' => '2023-06-10 06:54:02',
            ),
            66 =>
            array (
                'id' => 75,
                'kode' => 'C067',
                'ciri' => 'Jika harus mengingat sesuatu akan meminta seseorang untuk menguji',
                'created_at' => '2023-06-10 06:54:15',
                'updated_at' => '2023-06-10 06:54:15',
            ),
            67 =>
            array (
                'id' => 76,
                'kode' => 'C068',
            'ciri' => 'Dalam berargumentasi, cenderung meminta bantuan teman atau pihak- pihak yang memiliki otoritas (ahli) dalam bidang tersebut',
                'created_at' => '2023-06-10 06:54:30',
                'updated_at' => '2023-06-10 06:54:30',
            ),
            68 =>
            array (
                'id' => 77,
                'kode' => 'C069',
                'ciri' => 'Senang terlibat dalam kegiatan sosial yang berkaitan dengan organisasi sekolah atau lingkungan tempat tinggal',
                'created_at' => '2023-06-10 06:54:50',
                'updated_at' => '2023-06-10 06:54:50',
            ),
            69 =>
            array (
                'id' => 78,
                'kode' => 'C070',
                'ciri' => 'Orang sering menunjuk sebagai pemimpin',
                'created_at' => '2023-06-10 06:54:59',
                'updated_at' => '2023-06-10 06:54:59',
            ),
            70 =>
            array (
                'id' => 79,
                'kode' => 'C071',
                'ciri' => 'Ketika sedang ada masalah, cenderung meminta bantuan kepada orang lain daripada berusaha menyelesaikan masalah itu sendirian',
                'created_at' => '2023-06-10 06:55:16',
                'updated_at' => '2023-06-10 06:55:16',
            ),
            71 =>
            array (
                'id' => 80,
                'kode' => 'C072',
                'ciri' => 'Lebih suka permainan bersama untuk mengisi waktu luang dari pada hiburan bersifat individual seperti main game',
                'created_at' => '2023-06-10 06:55:28',
                'updated_at' => '2023-06-10 06:55:28',
            ),
            72 =>
            array (
                'id' => 81,
                'kode' => 'C073',
                'ciri' => 'Suka mengerjakan sesuatu sendirian tanpa ada gangguan orang lain',
                'created_at' => '2023-06-10 06:55:40',
                'updated_at' => '2023-06-10 06:55:40',
            ),
            73 =>
            array (
                'id' => 82,
                'kode' => 'C074',
                'ciri' => 'Memiliki buku harian atau catatan pribadi untuk menuliskan kehidupan pribadi',
                'created_at' => '2023-06-10 06:55:51',
                'updated_at' => '2023-06-10 06:55:51',
            ),
            74 =>
            array (
                'id' => 83,
                'kode' => 'C075',
                'ciri' => 'Mampu belajar dari kegagalan dan keberhasilan yang pernah di alami',
                'created_at' => '2023-06-10 06:56:04',
                'updated_at' => '2023-06-10 06:56:04',
            ),
            75 =>
            array (
                'id' => 84,
                'kode' => 'C076',
                'ciri' => 'Tidak suka keramaian',
                'created_at' => '2023-06-10 06:56:17',
                'updated_at' => '2023-06-10 06:56:17',
            ),
            76 =>
            array (
                'id' => 85,
                'kode' => 'C077',
                'ciri' => 'Tahu kelebihan dan kekurangan diri sendiri',
                'created_at' => '2023-06-10 06:56:30',
                'updated_at' => '2023-06-10 06:56:30',
            ),
            77 =>
            array (
                'id' => 86,
                'kode' => 'C078',
            'ciri' => 'Memiliki tekad yang kuat, mandiri dan berpendirian kuat (tidak mudah ikut-ikutan orang lain)',
                'created_at' => '2023-06-10 06:56:48',
                'updated_at' => '2023-06-10 06:56:48',
            ),
            78 =>
            array (
                'id' => 87,
                'kode' => 'C079',
                'ciri' => 'Jika harus mengingat sesuatu, cenderung menutup mata dan merasakan situasi yang sedang terjadi',
                'created_at' => '2023-06-10 06:57:00',
                'updated_at' => '2023-06-10 06:57:00',
            ),
            79 =>
            array (
                'id' => 88,
                'kode' => 'C080',
                'ciri' => 'Lebih memilih menghabiskan akhir pekan sendirian dari pada menghabiskan waktu bersama teman',
                'created_at' => '2023-06-10 06:57:23',
                'updated_at' => '2023-06-10 06:57:23',
            ),
            80 =>
            array (
                'id' => 89,
                'kode' => 'C081',
                'ciri' => 'Jika sesuatu rusak dan tidak berfungsi, akan mempertimbangkan apakah benda tersebut layak untuk diperbaiki',
                'created_at' => '2023-06-10 06:57:40',
                'updated_at' => '2023-06-10 06:57:40',
            ),
            81 =>
            array (
                'id' => 90,
                'kode' => 'C082',
                'ciri' => 'Menganggap sebagai orang yang mandiri',
                'created_at' => '2023-06-10 06:57:51',
                'updated_at' => '2023-06-10 06:57:51',
            ),
            82 =>
            array (
                'id' => 91,
                'kode' => 'C083',
                'ciri' => 'Memiliki tujuan-tujuan penting dalam hidup, yang dipikirkan secara teratur',
                'created_at' => '2023-06-10 06:58:02',
                'updated_at' => '2023-06-10 06:58:02',
            ),
            83 =>
            array (
                'id' => 92,
                'kode' => 'C084',
                'ciri' => 'Memiliki hobi atau minat khusus yang disimpan untuk diri sendiri',
                'created_at' => '2023-06-10 06:58:13',
                'updated_at' => '2023-06-10 06:58:13',
            ),
            84 =>
            array (
                'id' => 93,
                'kode' => 'C085',
                'ciri' => 'Sangat memperhatikan sekeliling dan apa yang sedang terjadi di sekitar',
                'created_at' => '2023-06-10 06:58:25',
                'updated_at' => '2023-06-10 06:58:25',
            ),
            85 =>
            array (
                'id' => 94,
                'kode' => 'C086',
            'ciri' => 'Senang berjalan-jalan di hutan (atau taman) dan melihat-lihat pohon serta bunga',
                'created_at' => '2023-06-10 06:58:41',
                'updated_at' => '2023-06-10 06:58:41',
            ),
            86 =>
            array (
                'id' => 95,
                'kode' => 'C087',
                'ciri' => 'Senang berkebun',
                'created_at' => '2023-06-10 06:58:51',
                'updated_at' => '2023-06-10 06:58:51',
            ),
            87 =>
            array (
                'id' => 96,
                'kode' => 'C088',
                'ciri' => 'Mempunyai minat cukup besar pada alam, ekologi, tanaman atau binatang',
                'created_at' => '2023-06-10 06:59:03',
                'updated_at' => '2023-06-10 06:59:03',
            ),
            88 =>
            array (
                'id' => 97,
                'kode' => 'C089',
                'ciri' => 'Ketika dewasa, ingin pergi dari kota yang ramai ke tempat yang masih alamiah untuk menikmati alam',
                'created_at' => '2023-06-10 06:59:14',
                'updated_at' => '2023-06-10 06:59:14',
            ),
            89 =>
            array (
                'id' => 98,
                'kode' => 'C090',
                'ciri' => 'Suka berkelana, hiking, atau sekedar jalan-jalan di alam terbuka',
                'created_at' => '2023-06-10 06:59:26',
                'updated_at' => '2023-06-10 06:59:26',
            ),
            90 =>
            array (
                'id' => 99,
                'kode' => 'C091',
                'ciri' => 'Senang mempelajari nama-nama makhluk hidup di lingkungan, seperti bunga dan pohon',
                'created_at' => '2023-06-10 06:59:41',
                'updated_at' => '2023-06-10 06:59:41',
            ),
            91 =>
            array (
                'id' => 100,
                'kode' => 'C092',
                'ciri' => 'Dalam berargumentasi, cenderung membandingkan lawan dengan seseorang atau sesuatu yang pernah dibaca atau dengar lalu bereaksi',
                'created_at' => '2023-06-10 06:59:56',
                'updated_at' => '2023-06-10 06:59:56',
            ),
            92 =>
            array (
                'id' => 101,
                'kode' => 'C093',
                'ciri' => 'Jika sesuatu rusak dan tidak berfungsi, akan memperhatikan sekeliling untuk melihat apa yang bisa ditemukan untuk memperbaikinya',
                'created_at' => '2023-06-10 07:00:43',
                'updated_at' => '2023-06-10 07:00:43',
            ),
            93 =>
            array (
                'id' => 102,
                'kode' => 'C094',
            'ciri' => 'Mampu mengerjakan dengan baik tugas atau kegiatan yang berkaitan dengan sistem kehidupan (biologi, ilmu alam)',
                'created_at' => '2023-06-10 07:01:28',
                'updated_at' => '2023-06-10 07:01:28',
            ),
            94 =>
            array (
                'id' => 103,
                'kode' => 'C095',
                'ciri' => 'Cukup fasih menjelaskan perbedaan jenis pohon atau jenis flora dan fauna',
                'created_at' => '2023-06-10 07:01:39',
                'updated_at' => '2023-06-10 07:01:39',
            ),
            95 =>
            array (
                'id' => 104,
                'kode' => 'C096',
                'ciri' => 'Memiliki hewan peliharaan yang bermacam-macam atau setidaknya dua jenis hewan peliharaan dan mempunyai kebun',
                'created_at' => '2023-06-10 07:01:50',
                'updated_at' => '2023-06-10 07:01:50',
            ),
            96 =>
            array (
                'id' => 105,
                'kode' => 'C097',
                'ciri' => 'Menyukai pembahasan tentang kehidupan',
                'created_at' => '2023-06-10 07:02:00',
                'updated_at' => '2023-06-10 07:02:00',
            ),
            97 =>
            array (
                'id' => 106,
                'kode' => 'C098',
                'ciri' => 'Agama adalah hal yang penting',
                'created_at' => '2023-06-10 07:02:14',
                'updated_at' => '2023-06-10 07:02:14',
            ),
            98 =>
            array (
                'id' => 107,
                'kode' => 'C099',
                'ciri' => 'Menikmati jika melihat karya seni',
                'created_at' => '2023-06-10 07:02:26',
                'updated_at' => '2023-06-10 07:02:26',
            ),
            99 =>
            array (
                'id' => 108,
                'kode' => 'C100',
                'ciri' => 'Relaksasi dan meditasi latihan yang bermanfaat',
                'created_at' => '2023-06-10 07:02:43',
                'updated_at' => '2023-06-10 07:02:43',
            ),
            100 =>
            array (
                'id' => 109,
                'kode' => 'C101',
                'ciri' => 'Suka mengunjungi situs alam',
                'created_at' => '2023-06-10 07:03:00',
                'updated_at' => '2023-06-10 07:03:00',
            ),
            101 =>
            array (
                'id' => 110,
                'kode' => 'C102',
                'ciri' => 'Menikmati membaca filsuf kuno dan modern',
                'created_at' => '2023-06-10 07:03:14',
                'updated_at' => '2023-06-10 07:03:14',
            ),
            102 =>
            array (
                'id' => 111,
                'kode' => 'C103',
                'ciri' => 'Belajar hal-hal baru lebih mudah ketika memahaminya',
                'created_at' => '2023-06-10 07:03:28',
                'updated_at' => '2023-06-10 07:03:28',
            ),
            103 =>
            array (
                'id' => 112,
                'kode' => 'C104',
                'ciri' => 'Ingin mengetahui apakah ada bentuk-bentuk lain dari kehidupan di alam semesta',
                'created_at' => '2023-06-10 07:03:39',
                'updated_at' => '2023-06-10 07:03:39',
            ),
            104 =>
            array (
                'id' => 113,
                'kode' => 'C105',
                'ciri' => 'Mempelajari sejarah dan budaya kuno membantu memberi suatu pandangan yang nyata',
                'created_at' => '2023-06-10 07:03:51',
                'updated_at' => '2023-06-10 07:03:51',
            ),
            105 =>
            array (
                'id' => 114,
                'kode' => 'C106',
                'ciri' => 'Hobi membaca buku sejarah',
                'created_at' => '2023-06-10 07:04:02',
                'updated_at' => '2023-06-10 07:04:02',
            ),
            106 =>
            array (
                'id' => 115,
                'kode' => 'C107',
                'ciri' => 'Cukup fasih dalam menjelaskan budaya kuno',
                'created_at' => '2023-06-10 07:04:19',
                'updated_at' => '2023-06-10 07:04:19',
            ),
            107 =>
            array (
                'id' => 116,
                'kode' => 'C108',
                'ciri' => 'Mempunyai minat cukup besar dalam mempelajari sejarah',
                'created_at' => '2023-06-10 07:04:30',
                'updated_at' => '2023-06-10 07:04:30',
            ),
        ));


    }
}
