<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        $projects = [
            [
                'title' => 'Sistem informasi Akademik',
                'description' => 'Aplikasi berbasis web untuk mengelola data akademik, termasuk pendaftaran mahasiswa, pengelolaan mata kuliah, dan penilaian.',
                'teknologi' => 'Laravel. bootstrap',
                'image' => 'project1.jpg',
                'status' => 'selesai',
            ],
            [
                'title' => 'E-Commerce',
                'description' => 'Aplikasi berbasis web untuk menjual produk secara online, termasuk fitur keranjang belanja, pembayaran, dan pengiriman.',
                'teknologi' => 'PHP & Google search console',
                'image' => 'project1.jpg',
                'status' => 'In Progress',
            ],
            [
                'title' => 'Design Cover',
                'description' => 'Aplikasi',
                'teknologi' => 'Figma, Adobe Illustrator',
                'image' => 'project1.jpg',
                'status' => 'Work In Progress',
            ],
            [
                'title' => 'Database Akademik',
                'description' => 'aplikasi berbasis web untuk mengelola data akademik, termasuk pendaftaran mahasiswa, pengelolaan mata kuliah, dan penilaian.',
                'teknologi' => 'Laravel. mysql',
                'image' => 'project1.jpg',
                'status' => 'selesai',
            ],
            [
                'title' => 'Website Company Profile',
                'description' => 'Website berbasis web untuk menampilkan profil perusahaan, termasuk informasi tentang produk, layanan, dan kontak.',
                'teknologi' => 'Html, CSS, Javascript',
                'image' => 'project1.jpg',
                'status' => 'selesai',
            ],
            [
                'title' => 'Website berbasis Laravel',
                'description' => 'Website berbasis web untuk menampilkan profil perusahaan, termasuk informasi tentang produk, layanan, dan kontak.',
                'teknologi' => 'Laravel. bootstrap',
                'image' => 'project1.jpg',
                'status' => 'selesai',
            ],
            [
                'title' => 'Machine Learning',
                'description' => 'Machine learning adalah cabang dari kecerdasan buatan yang memungkinkan komputer untuk belajar dari data dan membuat prediksi atau keputusan tanpa diprogram secara eksplisit.',
                'teknologi' => 'Python, TensorFlow',
                'image' => 'project1.jpg',
                'status' => 'selesai',
            ],
            [
                'title' => 'ESP32 & Arduino',
                'description' => 'Arduino adalah platform open-source yang digunakan untuk membuat proyek elektronik interaktif. ESP32 adalah mikrokontroler yang memiliki kemampuan Wi-Fi dan Bluetooth, memungkinkan pengembangan aplikasi IoT (Internet of Things).',
                'teknologi' => 'Arduino, ESP32',
                'image' => 'project1.jpg',
                'status' => 'selesai',
            ],
            [
                'title' => 'Dashboard page UMKM',
                'description' => 'UMKM adalah singkatan dari Usaha Mikro, Kecil, dan Menengah. Dashboard page UMKM adalah halaman web yang menampilkan informasi dan statistik terkait UMKM, seperti penjualan, pelanggan, dan produk.',
                'teknologi' => 'HTML',
                'image' => 'project1.jpg',
                'status' => 'selesai',
            ],
            [
                'title' => 'AI Prompter',
                'description' => 'Prompt engineering adalah proses merancang dan menyusun prompt (perintah atau pertanyaan) yang efektif untuk model bahasa berbasis AI, seperti GPT-3 atau GPT-4. Tujuannya adalah untuk mendapatkan respons yang relevan, akurat, dan bermanfaat dari model tersebut.',
                'teknologi' => 'Claude, Gemini',
                'image' => 'project1.jpg',
                'status' => 'selesai',
            ],         
        ];

         foreach ($projects as $project) {
            Project::create($project);
        }
    }
}
