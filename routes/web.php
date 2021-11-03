<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {


    $org_posts = [
        [
            "name_organisasi" => "PRAMUKA", 
            "Des" => "Aktif dalam organisasi Pramuka Penegak Bantara SMA Negeri 2 Subang pada tahun 2015 sampai 2017."
        ],
        [
            "name_organisasi" => "FILM PENDEK",
            "Des" => "Mengikuti Ekstrakurikuler sekolah SMA Negeri 2 subang pada tahun 2016 dan mengikuti perlombaan film pendek, mendapatkan juara 1 tingkat Kab.Subang."
        ],
        [
            "name_organisasi" => "KELOMPOK SENI MAHASISWA",
            "Des" => "Aktif kegiatan unit kampus dan menjabat Wakil Koordinator Megapixel Utama (Photography) tahun 2017 sampai 2021."
        ]
    ];

    $pen_posts = [
        [
            "name_pen" => "SMP Negeri 2 Subang", 
            "thn" => "2011 - 2014",
            "des1" => "",
            "des2" => ""
        ],
        [
            "name_pen" => "SMA Negeri 2 Subang", 
            "thn" => "2014 - 2017",
            "des1" => "IPS Kurikulum 2013",
            "des2" => ""
        ],
        [
            "name_pen" => "Universitas Widyatama", 
            "thn" => "2017 - 2021",
            "des1" => "Fakultas Teknik",
            "des2" => "Program Studi s1 Informatika"
        ]
    ];




    $ker_posts = [
        [
            "name_ker" => "Magang | PT Fasifica Raya Teknologi", 
            "thn" => "Agustus 2020 - November 2020",
            "des1" => "Mengerjakan project aplikasi bug tracking yang saat itu di butuhkan oleh perusahaan.",
            "des2" => "",
            "des3" => ""
        ],
        [
            "name_ker" => "Freelancer | Affectum Photography", 
            "thn" => "2018 - Sekarang",
            "des1" => "Fotografer",
            "des2" => "Videografer",
            "des3" => "Editor Foto & Video"


        ]
    ];




    return View ('Konten', [
        "title" => "Curiculum Vitae",
       
        /*
            Array Home
        */
        "homename1" => "Agung Gumelar",
        "homename2" => "Firmansyah",
        "animasi1" => "S1 Informatika",
        "animasi2" => "Universitas Widyatama",
        /*
           End Array Home
        */

        /*
            Array Profil
        */
        "Profil" => "Profil",
        "Nama" => "Agung Gumelar Firmansyah",
        "ttl" => "Subang, 22 Maret 1999",
        "tinggi" => "167 cm",
        "berat" => "50 kg",
        /*
           End Array Profil
        */
        /*
            Array SoftSkills
        */
        "soft" => "Soft Skills",
        "s1" => "Pekerja Keras",
        "s2" => "Teamwork",
        "s3" => "Komunikasi",
        "s4" => "Kreatif",
        /*
           End Array SoftSkills
        */

        /*
            Array HardSkills
        */
        "hard" => "Hard Skills",
        
        "h1" => "Adobe Premier",
        "h2" => "Adobe Photoshop",
        "h3" => "Adobe Lightroom",
        "h4" => "Adobe Ilustrator ",
        "h5" => "Programing php (Laravel)",
        "h6" => "Ms Word",
        "h7" => "Ms Power Point",
        "h8" => "Ms Excell",
        /*
           End Array HardSkills
        */

         /*
           Array Pengalaman Organisasi
        */
        "org" => "Oganisasi",
        "posts" => $org_posts,
        /*
           End Array Pengalaman Organisasi
        */

          /*
           Array Pengalaman Pendidikan
        */
        "pen" => "Pendidikan",
        "posts1" => $pen_posts,
        /*
           End Array Pengalaman Pendidikan
        */

         /*
           Array Pengalaman kerja
        */
        "ker" => "Pengalaman Kerja",
        "posts2" => $ker_posts
        /*
           End Array Pengalaman kerja
        */
        
        

        


    ]
    );
});

