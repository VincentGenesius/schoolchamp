# 🏆 SchoolChamp

*SchoolChamp* adalah platform berbasis web yang dirancang untuk mengelola seluruh data kompetisi, penjadwalan, serta pencapaian (prestasi) siswa dan pembimbing di lingkungan sekolah secara terpusat, efisien, dan terstruktur.

---

## 👥 Tim Pengembang (Group 1 - XII TKJ 3)

Proyek **SchoolChamp** ini dikembangkan secara kolaboratif oleh 4 anggota tim:

| Nama Anggota | Peran (Role) | Tanggung Jawab & Tugas Utama |
| :--- | :--- | :--- |
| **[Vincent Genesius]** | **Project Leader & Backend Developer** | Merancang arsitektur database, membangun seluruh logika Backend (Controller, CRUD, Query Builder untuk search & filter dinamis, Enum, Model Events), sistem autentikasi, serta manajemen storage file. |
| **[Joey Jason Lee]** | **Frontend Developer** | Mengonversi dan mengintegrasikan rancangan desain antarmuka ke dalam struktur Blade templates Laravel, memastikan konsistensi komponen UI, serta merapikan tata letak tampilan web. |
| **[Carryn]** | **UI/UX Designer** | Merancang wireframe, user flow, dan design system utama aplikasi (pemilihan skema warna tema seperti #990000, tipografi, ikon Material Symbols, dan tata letak dashboard / overview). |
| **[Jobi Johanes]** | **UI/UX Designer** | Merancang wireframe, user flow, dan design system utama aplikasi (pemilihan skema warna tema seperti #990000, tipografi, ikon Material Symbols, dan tata letak dashboard / overview). |

---

## 🚀 Fitur Utama

Sistem ini dilengkapi dengan berbagai modul dan fungsi utama:

### 1. Dashboard & Overview
* *Statistik Ringkas:* Menampilkan total jumlah kompetisi, partisipan (siswa), prestasi (pencapaian), dan pembimbing (advisors).
* *Status Kompetisi:* Ringkasan jumlah kompetisi berdasarkan status (Finished, Ongoing, Upcoming).
* *Aktivitas Terbaru:* Menampilkan daftar kompetisi dan prestasi yang baru saja ditambahkan secara real-time.

### 2. Manajemen Kompetisi (Competitions Management)
* *CRUD Kompetisi:* Menambah, melihat rincian (detail), memperbarui (edit), dan menghapus data kompetisi.
* *Informasi Lengkap:* Pencatatan nama kompetisi, bidang/kategori (field), tanggal pelaksanaan, status kompetisi, nama peserta, hingga nama guru pembimbing (advisory).
* *Pencarian & Filter:* Fitur pencarian cepat dan pemfilteran data kompetisi.

### 3. Penjadwalan (Schedule)
* *Jadwal Mendatang & Berlangsung:* Visualisasi kartu (card view) untuk memantau agenda kompetisi yang sedang berlangsung (Ongoing) dan yang akan datang (Upcoming).
* *Detail Ringkas:* Memuat informasi tanggal, lokasi/tempat pelaksanaan, serta status pendaftaran siswa pada kompetisi tersebut.

### 4. Pencatatan Prestasi (Achievement Management)
* *CRUD Prestasi:* Menambah, memperbarui, dan menghapus riwayat kemenangan atau penghargaan yang diraih.
* *Detail Pencapaian:* Mengelola data juara/medali yang diperoleh (Competition Result), peserta terkait, bidang, dan tanggal pencapaian.
* *Pencarian & Filter:* Memudahkan pencarian riwayat prestasi berdasarkan kata kunci tertentu.

---

## 🏗️ Arsitektur Sistem

Aplikasi ini dibangun menggunakan pola arsitektur **MVC (Model-View-Controller)** berbasis framework Laravel untuk memisahkan logika bisnis, pengolahan data, dan tampilan antarmuka:

* **Backend & Routing:** Menggunakan *Resource Controller* (`CompetitionController`, `ScheduleController`, `AchievementController`, `OverviewController`) serta *Middleware* khusus (`auth` dan `role:admin`) untuk mengamankan akses halaman.
* **Data & Validasi:** Menggunakan **PHP Enum** (`StatusCompetitionEnum`) untuk standarisasi status kompetisi (*Upcoming*, *Ongoing*, *Finished*), *Form Request* untuk validasi input terpisah, dan *Model Events* untuk manajemen penghapusan file gambar otomatis di *storage*.
* **Frontend:** Menggunakan *Blade Templating Engine* yang dipadukan dengan komponen *utility-first* dari **Tailwind CSS**.

### Struktur Database Utama
* **`users`**: Menyimpan data kredensial akun administrator (`id`, `name`, `email`, `password`, `role`).
* **`competitions`**: Menyimpan seluruh data kompetisi, jadwal, dan prestasi (`id`, `event`, `field`, `participant`, `advisor`, `date`, `status`, `location`, `achievement`, `image`).

---

## 🛠️ Teknologi yang Digunakan

* *Frontend / UI:* HTML5, CSS3, JavaScript / Library Tailwind
* *Backend:* PHP / Node.js / Framework Laravel
* *Database:* MySQL 
* *Version Control:* Git & GitHub

---

## ⚙️ Cara Instalasi & Menjalankan Proyek

Ikuti langkah-langkah di bawah ini untuk menjalankan proyek ini di komputer lokalmu:

1. **Clone repository ini:**
   ```bash atau terminal
   git clone [https://github.com/VincentGenesius/schoolchamp.git]
   cd schoolchamp

2. **Install dependencies PHP (Composer) & Node.js (NPM):**
   composer install
   npm install && npm run build

3. **Salin file konfigurasi environment:**
   cp .env.example .env

4. **Konfigurasi Database:**
   Atur koneksi database kamu di dalam file .env (pastikan nama database sudah dibuat, misal "schoolchamp").

5. **Jalankan Migrasi & Seeder:**
   php artisan migrate --seed

6. **Hubungkan Storage Publik (Untuk Gambar Kompetisi):**
   php artisan storage:link

7. **Jalankan Server Lokal (Development Mode):**
   composer run dev

---

## 📄 Lisensi

Proyek **SchoolChamp** ini dilisensikan di bawah [MIT License](LICENSE). Penggunaan, modifikasi, dan distribusi kode sumber diperbolehkan dengan tetap menyertakan pemberitahuan hak cipta di atas.