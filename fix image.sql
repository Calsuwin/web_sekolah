-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for asumi
CREATE DATABASE IF NOT EXISTS `asumi` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `asumi`;

-- Dumping structure for table asumi.articles
CREATE TABLE IF NOT EXISTS `articles` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `image` varchar(255) DEFAULT NULL,
  `category` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `published_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table asumi.articles: ~4 rows (approximately)
REPLACE INTO `articles` (`id`, `image`, `category`, `title`, `content`, `published_at`, `created_at`, `updated_at`) VALUES
	(1, 'artikel/4.jpeg', 'Pendidikan', 'Sosialisasi LPK Hikari di SMKN 4 Tasikmalaya', 'Kegiatan sosialisasi dari LPK Hikari memberikan wawasan baru bagi siswa SMKN 4 Tasikmalaya tentang peluang pelatihan dan kerja di Jepang. Melalui acara ini, siswa diajak memahami pentingnya disiplin, keterampilan, dan budaya kerja internasional sebagai bekal menghadapi dunia industri global.', '2025-10-02 01:15:13', '2025-10-15 01:15:17', '2025-10-15 01:15:17'),
	(2, 'artikel/3.jpg', 'Prestasi', 'Lomba Kompetensi Siswa (LKS) SMKN 4 Tasikmalaya', 'Ajang bergengsi yang menjadi wadah unjuk kemampuan terbaik siswa SMKN 4 Tasikmalaya. Melalui LKS, para peserta menunjukkan keahlian, kreativitas, dan semangat juang tinggi untuk meraih prestasi, sekaligus membawa nama sekolah menuju tingkat yang lebih tinggi.', '2023-02-15 01:16:10', '2025-10-15 01:16:17', '2025-10-15 01:16:17'),
	(3, 'artikel/2.jpg', 'Edukasi Sosial', 'Edukasi “Save The Children” Berjualan di SMKN 4 Tasikmalaya', 'Kegiatan edukatif yang mengajarkan siswa SMKN 4 Tasikmalaya tentang kemandirian dan tanggung jawab melalui praktik berjualan. Bersama program “Save The Children,” siswa belajar nilai-nilai kewirausahaan, empati sosial, dan pentingnya berkontribusi positif bagi lingkungan sekitar.', '2024-12-15 01:16:59', '2025-10-15 01:17:08', '2025-10-15 01:17:08'),
	(4, 'artikel/1.jpg', 'Prestasi', 'Penghargaan Desain Poster SMKN 4 Tasikmalaya', 'Ajang kreatif yang menyoroti bakat visual dan imajinasi siswa SMKN 4 Tasikmalaya. Melalui lomba desain poster ini, para peserta menunjukkan kemampuan artistik sekaligus pesan kuat dalam karya mereka, dan para pemenang diberi penghargaan atas ide brilian serta ketekunan mereka dalam berkarya.', '2024-11-15 01:17:53', '2025-10-15 01:18:04', '2025-10-15 01:18:04');

-- Dumping structure for table asumi.cache
CREATE TABLE IF NOT EXISTS `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table asumi.cache: ~4 rows (approximately)
REPLACE INTO `cache` (`key`, `value`, `expiration`) VALUES
	('356a192b7913b04c54574d18c28d46e6395428ab', 'i:1;', 1760494424),
	('356a192b7913b04c54574d18c28d46e6395428ab:timer', 'i:1760494424;', 1760494424),
	('livewire-rate-limiter:16d36dff9abd246c67dfac3e63b993a169af77e6', 'i:1;', 1760490205),
	('livewire-rate-limiter:16d36dff9abd246c67dfac3e63b993a169af77e6:timer', 'i:1760490205;', 1760490205);

-- Dumping structure for table asumi.cache_locks
CREATE TABLE IF NOT EXISTS `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table asumi.cache_locks: ~0 rows (approximately)

-- Dumping structure for table asumi.carousels
CREATE TABLE IF NOT EXISTS `carousels` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `image` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `link` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table asumi.carousels: ~6 rows (approximately)
REPLACE INTO `carousels` (`id`, `image`, `title`, `description`, `link`, `created_at`, `updated_at`) VALUES
	(1, 'carousel/1\r\n.jpg', 'Guru-Guru Inspiratif SMKN 4 Tasikmalaya', 'Mereka bukan sekadar pengajar, tapi teladan yang menyalakan semangat belajar setiap hari. Di SMKN 4 Tasikmalaya, para guru hadir dengan dedikasi, kehangatan, dan tekad untuk membentuk generasi yang cerdas, terampil, dan berkarakter.', 'awewe', '2025-10-15 01:07:21', '2025-10-15 01:07:21'),
	(2, 'carousel/2.jpg', 'Jalan Sehat SMKN 4 Tasikmalaya', 'Kegiatan penuh semangat dan kebersamaan di mana seluruh warga SMKN 4 Tasikmalaya melangkah bersama dalam suasana ceria. Jalan Sehat ini bukan sekadar olahraga, tapi juga ajang mempererat silaturahmi, menumbuhkan semangat hidup sehat, dan memperkuat rasa kekeluargaan di lingkungan sekolah.', 'assaasassa', '2025-10-15 01:09:15', '2025-10-15 01:09:15'),
	(3, 'carousel/3.jpg', 'Job Fair EDU 2024 SMKN 4 Tasikmalaya', 'Ajang bergengsi yang mempertemukan dunia pendidikan dan dunia kerja. Job Fair EDU 2024 di SMKN 4 Tasikmalaya menjadi wadah bagi siswa untuk mengenal lebih dekat peluang karier, berinteraksi langsung dengan perusahaan ternama, dan mempersiapkan diri memasuki dunia profesional dengan percaya diri dan kompetensi unggul.', 'aww', '2025-10-15 01:10:11', '2025-10-15 01:10:11'),
	(4, 'carousel/4.JPG', 'Jalan Sehat SMKN 4 Tasikmalaya', 'Kegiatan penuh semangat dan kebersamaan di mana seluruh warga SMKN 4 Tasikmalaya melangkah bersama dalam suasana ceria. Jalan Sehat ini bukan sekadar olahraga, tapi juga ajang mempererat silaturahmi, menumbuhkan semangat hidup sehat, dan memperkuat rasa kekeluargaan di lingkungan sekolah.', 'dasd', '2025-10-15 01:10:34', '2025-10-15 01:10:34'),
	(5, 'carousel/5.JPG', 'Ulangan Kelas 12 SMKN 4 Tasikmalaya', 'Momen penting bagi para siswa kelas 12 untuk menguji pemahaman, kedisiplinan, dan kesiapan menghadapi ujian akhir. Ulangan ini bukan sekadar penilaian, tetapi langkah menuju kedewasaan belajar dan pembuktian hasil dari perjalanan panjang di SMKN 4 Tasikmalaya.', 'qfqwf', '2025-10-15 01:11:02', '2025-10-15 01:11:02'),
	(6, 'carousel/6.JPG', 'Guru Heboh Wanita SMKN 4 Tasikmalaya', 'Suasana sekolah jadi lebih berwarna dengan kehadiran para guru wanita yang energik, penuh humor, dan inspiratif. Mereka tak hanya mengajar dengan hati, tapi juga membawa keceriaan yang membuat setiap sudut SMKN 4 Tasikmalaya terasa hidup dan bersemangat.', 'asdfs', '2025-10-15 01:11:38', '2025-10-15 01:11:38');

-- Dumping structure for table asumi.eskuls
CREATE TABLE IF NOT EXISTS `eskuls` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `image` varchar(255) DEFAULT NULL,
  `nama_eskul` varchar(255) NOT NULL,
  `kode_eskul` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `pembina` varchar(255) DEFAULT NULL,
  `ketua` varchar(255) DEFAULT NULL,
  `jadwal` varchar(255) DEFAULT NULL,
  `jumlah_anggota` int NOT NULL DEFAULT '0',
  `lokasi_latihan` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `eskuls_kode_eskul_unique` (`kode_eskul`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table asumi.eskuls: ~17 rows (approximately)
REPLACE INTO `eskuls` (`id`, `image`, `nama_eskul`, `kode_eskul`, `deskripsi`, `pembina`, `ketua`, `jadwal`, `jumlah_anggota`, `lokasi_latihan`, `created_at`, `updated_at`) VALUES
	(1, 'eskuls/paskib.png', 'Pasukan Pengibar Bendera', 'eskul1', 'Eskul yang berfokus pada pembinaan kedisiplinan dan kemampuan siswa dalam upacara bendera. Anggota belajar baris-berbaris, kerja sama tim, dan rasa nasionalisme.', 'Budi Santoso, S.Pd.', 'Rizki Ramadhan', 'Setiap Senin dan Rabu pukul 15.00–16.30', 25, 'Lapangan SMKN 4 Tasikmalaya', '2025-10-15 01:22:31', '2025-10-15 01:22:31'),
	(2, 'eskuls/pramuka.png', 'Pramuka', 'eskul2', 'Pramuka adalah singkatan dari Praja Muda Karana yang berarti "Orang Muda yang Suka Berkarya". Ini adalah organisasi pendidikan nonformal di Indonesia yang bertujuan membentuk generasi muda berkarakter, berakhlak mulia, dan memiliki keterampilan hidup melalui kegiatan di alam terbuka yang menyenangkan, sehat, dan teratur.', 'asmi', 'asmi', 'jumat 14.00 - 19.00', 123, 'SMKN4', '2025-10-15 01:26:30', '2025-10-15 01:26:30'),
	(3, 'eskuls/pmr.png', 'PMR SMKN4 TASIKMALAYA', 'eskul3', 'Organisasi siswa yang bergerak di bidang kesehatan dan kemanusiaan, membentuk kepedulian, keterampilan pertolongan pertama, dan jiwa sosial siswa.', 'asmi', 'asmi', 'Setiap Rabu, pukul 15.00–17.00', 43, 'Aula SMKN 4 Tasikmalaya / Lapangan sekolah', '2025-10-15 01:29:19', '2025-10-15 01:29:19'),
	(4, 'eskuls/pks.png', 'Patroli Keamanan Sekolah', 'eskul4', 'Ekstrakurikuler yang bertugas membantu menjaga ketertiban dan keamanan di lingkungan sekolah, melatih kedisiplinan, tanggung jawab, dan kemampuan koordinasi antaranggota.', 'azmiiiiziiz', 'azmziz', 'Setiap Senin dan Kamis, pukul 15.00–16.30', 243, 'Sekolah SMKN 4 Tasikmalaya (seluruh area sekolah)', '2025-10-15 01:30:57', '2025-10-15 01:30:57'),
	(5, 'eskuls/plh.png', 'Pecinta Lingkungan Hidup', 'eskul5', 'Ekstrakurikuler yang bergerak di bidang kepedulian lingkungan, melatih siswa menjaga kebersihan, konservasi, dan kegiatan penghijauan di sekolah dan sekitar lingkungan.', 'Setiap Selasa, pukul 15.00–16.30', 'asasumi', 'assuasumi', 234, 'Area sekolah SMKN 4 Tasikmalaya / Taman sekolah / Lingkungan sekitar', '2025-10-15 01:32:23', '2025-10-15 01:32:23'),
	(6, 'eskuls/pd.jpg', 'Perisai Diri', 'eskul6', 'Ekstrakurikuler bela diri yang melatih siswa keterampilan fisik, disiplin, konsentrasi, dan pertahanan diri untuk menjaga keselamatan diri sendiri dan orang lain.', 'pathh', 'pathh', 'Setiap Kamis, pukul 15.00–17.00', 432, 'Aula / Lapangan SMKN 4 Tasikmalaya', '2025-10-15 01:33:26', '2025-10-15 01:33:26'),
	(7, 'eskuls/it.png', 'IT Club', 'eskul7', 'Ekstrakurikuler bagi siswa yang tertarik pada teknologi informasi, pemrograman, jaringan, dan pengembangan perangkat lunak, sekaligus meningkatkan keterampilan digital dan kreativitas.', 'azmiiiiiiiiiiiiiiii', 'azumi', 'Setiap Rabu, pukul 15.00–17.00', 999, 'Lab Komputer SMKN 4 Tasikmalaya', '2025-10-15 01:34:28', '2025-10-15 01:34:28'),
	(8, 'eskuls/ec.png', 'English Club', 'eskul8', 'Ekstrakurikuler yang bertujuan meningkatkan kemampuan berbahasa Inggris siswa melalui percakapan, debat, presentasi, dan kegiatan kreatif lainnya, serta membiasakan penggunaan bahasa Inggris dalam kehidupan sehari-hari.', 'azmi dong', 'azm', 'Setiap Selasa, pukul 15.00–16.30', 468, 'Ruang Bahasa / Lab Bahasa SMKN 4 Tasikmalaya', '2025-10-15 01:35:34', '2025-10-15 01:35:34'),
	(9, 'eskuls/cm.png', 'Cinematography', 'eskul9', 'Ekstrakurikuler yang fokus pada seni pembuatan film, termasuk pengambilan gambar, penyutradaraan, editing, dan produksi video kreatif untuk meningkatkan kreativitas dan kemampuan teknis siswa.', 'asmmii', 'assususmi', 'Setiap Jumat, pukul 15.00–17.00', 0, 'Ruang Multimedia / Lab Komputer SMKN 4 Tasikmalaya', '2025-10-15 01:37:17', '2025-10-15 01:37:17'),
	(10, 'eskuls/lp.png', 'Laskar Pustaka', 'eskul10', 'Ekstrakurikuler yang bergerak di bidang literasi dan minat baca, melatih siswa mencintai buku, menulis kreatif, serta menyelenggarakan kegiatan perpustakaan dan sosialisasi literasi di sekolah.', 'muhun', 'mahan', 'Setiap Rabu, pukul 15.00–16.30', 754, 'Perpustakaan SMKN 4 Tasikmalaya', '2025-10-15 01:38:27', '2025-10-15 01:38:27'),
	(11, 'eskuls/irma.png', 'IRMA', 'eskul11', 'Ekstrakurikuler yang fokus pada pengembangan spiritual dan akhlak siswa, meliputi kegiatan keagamaan, pengajian, dakwah, dan kepedulian sosial di lingkungan sekolah dan masyarakat.', 'ustadz Azmi', 'AZMI YMK', 'Setiap Senin, pukul 15.00–16.30', 656, 'Mushola / Masjid SMKN 4 Tasikmalaya', '2025-10-15 01:41:18', '2025-10-15 01:41:18'),
	(12, 'eskuls/bt.png', 'Bulu Tangkis', 'eskul12', 'Ekstrakurikuler olahraga yang melatih keterampilan bermain bulu tangkis, meningkatkan kebugaran, refleks, dan sportivitas siswa, sekaligus mempersiapkan siswa untuk kompetisi antar sekolah.', 'mister asmi', 'mister asmi', 'Setiap Selasa dan Kamis, pukul 15.00–17.00', 676, 'Lapangan Bulu Tangkis SMKN 4 Tasikmalaya', '2025-10-15 01:42:39', '2025-10-15 01:42:39'),
	(13, 'eskuls/fm.png', 'Futsal SMKN 4', 'eskul13', 'Futsal SMKN 4', 'mas asmi jago bola', 'mas asmi jago bola', 'Setiap Rabu dan Jumat, pukul 15.00–17.00', 18, 'Lapangan Futsal SMKN 4 Tasikmalaya', '2025-10-15 01:44:08', '2025-10-15 01:44:08'),
	(14, 'eskuls/b.png', 'Basket', 'eskul14', 'Ekstrakurikuler olahraga yang melatih kemampuan bermain basket, teknik dribble, passing, shooting, kerjasama tim, serta mempersiapkan siswa untuk kompetisi antar sekolah.', 'AZMMZZMZ', 'AZMZMMZ', 'Setiap Senin dan Kamis, pukul 15.00–17.00', 356, 'Lapangan Basket SMKN 4 Tasikmalaya', '2025-10-15 01:45:55', '2025-10-15 01:45:55'),
	(15, 'eskuls/v.jpg', 'Voli', 'eskul15', 'Ekstrakurikuler olahraga yang melatih keterampilan bermain voli, kerja sama tim, strategi permainan, serta meningkatkan kebugaran dan sportivitas siswa.', 'azmi jago voli', 'azmi jago voli', 'Setiap Selasa dan Jumat, pukul 15.00–17.00', 521, 'Lapangan Voli SMKN 4 Tasikmalaya', '2025-10-15 01:46:53', '2025-10-15 01:46:53'),
	(17, 'eskuls/sb.jpg', 'Sepak Bola', 'eskul16', 'Ekstrakurikuler olahraga yang melatih kemampuan bermain sepak bola, teknik dasar, strategi tim, dan kebugaran fisik siswa, sekaligus mempersiapkan siswa untuk kompetisi antar sekolah.', 'azmi pemain bola', 'azmi pemain bola', 'Setiap Senin dan Rabu, pukul 15.00–17.00', 8767, 'Lapangan Sepak Bola SMKN 4 Tasikmalaya', '2025-10-15 01:48:21', '2025-10-15 01:50:27'),
	(18, 'eskuls/osis.png', 'OSIS SMKN 4', 'eskul17', 'Organisasi siswa yang bertugas mengembangkan kepemimpinan, kreativitas, dan tanggung jawab sosial siswa melalui kegiatan organisasi, kepanitiaan, dan program kerja sekolah.', 'slebew', 'sasmi', 'Setiap Rabu, pukul 15.00–16.30', 80, 'Ruang OSIS / Aula SMKN 4 Tasikmalaya', '2025-10-15 01:49:28', '2025-10-15 01:49:28');

-- Dumping structure for table asumi.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table asumi.failed_jobs: ~0 rows (approximately)

-- Dumping structure for table asumi.galeris
CREATE TABLE IF NOT EXISTS `galeris` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `image` varchar(255) NOT NULL,
  `nama_galeri` varchar(255) NOT NULL,
  `kode_galeri` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table asumi.galeris: ~8 rows (approximately)
REPLACE INTO `galeris` (`id`, `image`, `nama_galeri`, `kode_galeri`, `deskripsi`, `created_at`, `updated_at`) VALUES
	(1, 'galeri/lks\r\n.jpg', 'LKS', '1', 'LKS (Lomba Kompetensi Siswa) adalah kompetisi bagi siswa SMK untuk mengasah keterampilan, kreativitas, dan kemampuan sesuai bidang keahlian, sekaligus mempersiapkan mereka menghadapi dunia kerja.  ✅ Ini tepat 200 huruf.', '2025-10-15 01:54:52', '2025-10-15 01:54:52'),
	(2, 'galeri/pkl.jpg', 'Penutupan Kegiatan PKL', '2', 'Kegiatan Praktek Kerja Lapangan (PKL) resmi ditutup. Terima kasih kepada pembimbing, sekolah, dan instansi yang telah mendukung. Semoga pengalaman ini menjadi bekal siswa menghadapi dunia kerja.', '2025-10-15 01:56:06', '2025-10-15 01:56:06'),
	(3, 'galeri/poster.jpg', 'Penghargaan Juara Desain Poster', '3', 'Diberikan penghargaan kepada Jurusan DKV atas prestasi sebagai Juara Lomba Desain Poster, mengapresiasi kreativitas, inovasi, dan kualitas karya yang luar biasa.', '2025-10-15 01:57:14', '2025-10-15 01:57:14'),
	(4, 'galeri/gawe.jpg', 'Persiapan Kerja | Forum HRD', '4', 'Kegiatan Persiapan Kerja | Forum HRD bertujuan membekali siswa dengan wawasan dunia industri, etika kerja, dan keterampilan profesional melalui sesi berbagi bersama para praktisi HRD.', '2025-10-15 01:58:08', '2025-10-15 01:58:08'),
	(5, 'galeri/gizi.jpg', 'Sosialisasi MBG', '5', 'Kegiatan Sosialisasi MBG dilaksanakan untuk mengenalkan program pelatihan dan peluang kerja bagi siswa, sekaligus memperluas wawasan mereka tentang dunia industri dan karier masa depan.', '2025-10-15 01:59:05', '2025-10-15 01:59:05'),
	(6, 'galeri/dagang.jpg', 'Save The Children | Kewirausahaan', '6', 'Kegiatan Save The Children | Kewirausahaan bertujuan menumbuhkan jiwa usaha, kreativitas, dan kemandirian siswa melalui pelatihan, simulasi bisnis, serta pendampingan dari mentor profesional.', '2025-10-15 02:00:16', '2025-10-15 02:00:16'),
	(7, 'galeri/jobfair.JPG', 'Job Fair & Edu Fair 2024', '7', 'Kegiatan Job Fair & Edu Fair 2024 menjadi wadah bagi siswa untuk mengenal dunia kerja dan pendidikan tinggi melalui pameran perusahaan, kampus, serta sesi informasi karier dan peluang studi.', '2025-10-15 02:02:20', '2025-10-15 02:02:20'),
	(8, 'galeri/jalan.jpg', 'Jalan Santai SMKN 4 Tasikmalaya', '8', 'Kegiatan Jalan Santai SMKN 4 Tasikmalaya dilaksanakan untuk mempererat kebersamaan warga sekolah, menumbuhkan semangat hidup sehat, serta memperkuat rasa solidaritas antar siswa dan guru.', '2025-10-15 02:03:07', '2025-10-15 02:03:07');

-- Dumping structure for table asumi.greetings
CREATE TABLE IF NOT EXISTS `greetings` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `content` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table asumi.greetings: ~0 rows (approximately)
REPLACE INTO `greetings` (`id`, `name`, `title`, `photo`, `content`, `created_at`, `updated_at`) VALUES
	(1, 'Kurniawan', 'S.Pd, M.Pd', 'greetings/kepalasekolah.CDMQ7SQv.png', '<p>Assalamualaikum Warahmatullahi Wabarakatuh</p><p>Segala puji dan syukur kita panjatkan kehadirat Allah SWT, semoga kita semua ada dalam lindungan-Nya. Dan atas perkenan-Nya pula kami dapat menghadirkan website SMK Negeri 4 Tasikmalaya ini. Kami berharap dengan adanya website di SMK Negeri 4 Tasikmalaya ini para pengunjung dapat mengenal lebih jauh tentang sekolah kami sehingga dapat mempererat tali silaturrahmi antara sekolah dengan masyarakat demi kemajuan kita bersama. Tiada gading yang tak retak, website kami ini masih dalam proses pengembangan, masih banyak kekurangan yang harus kami perbaiki. Kritik dan sarannya yang membangun sangat kami harapkan untuk pengembangan ke depan.</p><p>Akhirnya, saya mengucapkan terimakasih yang sebesar-besarnya kepada semua pihak yang tidak dapat disebutkan satu segala bantuan dan persatu atas fasilitasnya yang telah diberikan semoga semua yang kita lakukan bermanfaat bagi masyarakat.</p><p>Wassalamu&#039;alaikum Warahmatullahi Wabarakatuh.</p>', '2025-10-15 02:08:26', '2025-10-15 02:08:26');

-- Dumping structure for table asumi.jobs
CREATE TABLE IF NOT EXISTS `jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint unsigned NOT NULL,
  `reserved_at` int unsigned DEFAULT NULL,
  `available_at` int unsigned NOT NULL,
  `created_at` int unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `jobs_queue_index` (`queue`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table asumi.jobs: ~0 rows (approximately)

-- Dumping structure for table asumi.job_batches
CREATE TABLE IF NOT EXISTS `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table asumi.job_batches: ~0 rows (approximately)

-- Dumping structure for table asumi.jurusans
CREATE TABLE IF NOT EXISTS `jurusans` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `image` varchar(255) NOT NULL,
  `nama_jurusan` varchar(255) NOT NULL,
  `kode_jurusan` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `kaprog` varchar(255) DEFAULT NULL,
  `akreditasi` varchar(5) DEFAULT NULL,
  `jumlah_siswa` int NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table asumi.jurusans: ~5 rows (approximately)
REPLACE INTO `jurusans` (`id`, `image`, `nama_jurusan`, `kode_jurusan`, `deskripsi`, `kaprog`, `akreditasi`, `jumlah_siswa`, `created_at`, `updated_at`) VALUES
	(1, 'jurusans/tkj\r\n.png', 'Teknik Komputer dan Jaringan (TKJ)', '1', 'Jurusan TKJ membekali siswa dengan kemampuan merakit, mengonfigurasi, dan mengelola jaringan komputer, serta memahami sistem keamanan dan teknologi informasi sesuai kebutuhan industri modern.', 'pA aSmI', 'A', 700, '2025-10-15 02:10:10', '2025-10-15 02:10:10'),
	(2, 'jurusans/pplg.png', 'Pengembangan Perangkat Lunak Dan Gim (PPLG)', 'My Kisah', 'Jurusan PPLG berfokus pada pengembangan perangkat lunak dan gim, melatih siswa dalam pemrograman, desain antarmuka, dan logika kreatif untuk menciptakan solusi digital inovatif.', 'AZMIIIIIIIIII', 'A+', 732, '2025-10-15 02:11:10', '2025-10-15 02:11:10'),
	(3, 'jurusans/tsm.png', 'Teknik Sepeda Motor (TSM)', '3', 'Jurusan TSM membekali siswa dengan keterampilan servis, perawatan, dan perbaikan sepeda motor, serta pengetahuan tentang teknologi otomotif modern dan pelayanan pelanggan profesional.', 'PA ASMI LGI', 'B', 543, '2025-10-15 02:11:55', '2025-10-15 02:11:55'),
	(4, 'jurusans/dkv\r\n.png', 'Desain Komunikasi Visual (DKV)', '4', 'Jurusan DKV mengajarkan siswa mengolah pesan visual secara kreatif melalui desain grafis, ilustrasi, fotografi, dan media digital untuk menghasilkan karya yang komunikatif dan estetis.', 'asssasamimimmimii', 'B', 634, '2025-10-15 02:12:35', '2025-10-15 02:12:35'),
	(5, 'jurusans/toi.png', 'Teknik Otomasi Industri (TOI)', '5', 'Jurusan TOI membekali siswa dengan keterampilan mengoperasikan, merancang, dan memelihara sistem otomasi berbasis listrik, sensor, dan PLC yang digunakan dalam proses industri modern.', 'asmi jmk spd mpd', 'A', 231, '2025-10-15 02:13:27', '2025-10-15 02:13:27');

-- Dumping structure for table asumi.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table asumi.migrations: ~0 rows (approximately)
REPLACE INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '0001_01_01_000000_create_users_table', 1),
	(2, '0001_01_01_000001_create_cache_table', 1),
	(3, '0001_01_01_000002_create_jobs_table', 1),
	(4, '2025_09_15_095004_create_galeris_table', 1),
	(5, '2025_09_15_104405_create_jurusans_table', 1),
	(6, '2025_09_15_112045_create_eskuls_table', 1),
	(7, '2025_09_15_122914_create_profils_table', 1),
	(8, '2025_09_16_105834_create_carousels_table', 1),
	(9, '2025_09_16_115629_create_statistics_table', 1),
	(10, '2025_09_16_115801_create_articles_table', 1),
	(11, '2025_09_17_112541_create_greetings_table', 1),
	(12, '2025_09_19_090512_drop_galeris_table', 1);

-- Dumping structure for table asumi.password_reset_tokens
CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table asumi.password_reset_tokens: ~0 rows (approximately)

-- Dumping structure for table asumi.profils
CREATE TABLE IF NOT EXISTS `profils` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `sejarah` longtext,
  `visi` longtext,
  `misi` longtext,
  `data_pokok` longtext,
  `data_statistik` longtext,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table asumi.profils: ~0 rows (approximately)

-- Dumping structure for table asumi.sessions
CREATE TABLE IF NOT EXISTS `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint unsigned DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text,
  `payload` longtext NOT NULL,
  `last_activity` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table asumi.sessions: ~0 rows (approximately)
REPLACE INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
	('nHqhMx8OjOjHKRE2YdfoAI17MikXENtnBHS6DW0u', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/141.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiVmFxbm9lcVhDOU82VzcyamR4VXF3NkdEaFRvTEdIOXB2SmRUZm1YQiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjg6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9nYWxlcmkiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1760512508);

-- Dumping structure for table asumi.statistics
CREATE TABLE IF NOT EXISTS `statistics` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `value` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table asumi.statistics: ~0 rows (approximately)
REPLACE INTO `statistics` (`id`, `title`, `value`, `created_at`, `updated_at`) VALUES
	(1, 'Guru / Pendidik', 82, '2025-10-15 02:13:59', '2025-10-15 02:13:59'),
	(2, 'Siswa', 2435, '2025-10-15 02:14:12', '2025-10-15 02:14:12'),
	(3, 'Staf TU', 13, '2025-10-15 02:14:24', '2025-10-15 02:14:24'),
	(4, 'Ekstrakurikuler', 17, '2025-10-15 02:14:40', '2025-10-15 02:14:40');

-- Dumping structure for table asumi.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table asumi.users: ~1 rows (approximately)
REPLACE INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'Asumi', 'asumi@gmail.com', NULL, '$2y$12$V66WneieRhqDkdHzKXoOxOpgqRumclzh2wOqsoOzJeWfSlvdtMbW.', 'ieeZWABlkpR8ijOC8LgpnU2kvf5uHHH0jsVeQm0TfpVxJwBbd5HBGM7wFQyP', '2025-10-15 01:02:17', '2025-10-15 01:02:17');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
