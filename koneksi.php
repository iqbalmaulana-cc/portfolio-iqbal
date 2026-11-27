<?php
// Konfigurasi koneksi database lokal XAMPP
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'db_maulana';

$mysqli = new mysqli($host, $user, $password);

// Hentikan halaman jika koneksi awal ke MySQL gagal
if ($mysqli->connect_error) {
	die('Koneksi MySQL gagal: ' . $mysqli->connect_error);
}

$mysqli->set_charset('utf8mb4');

// Buat database jika belum ada
$mysqli->query("CREATE DATABASE IF NOT EXISTS `$database` CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci");

// Pilih database yang digunakan
$mysqli->select_db($database);

// Buat tabel galeri jika belum ada
$sqlTabelGaleri = "
	CREATE TABLE IF NOT EXISTS galeri (
		id INT UNSIGNED NOT NULL AUTO_INCREMENT,
		nama_pengirim VARCHAR(100) NOT NULL,
		kategori VARCHAR(100) NOT NULL,
		jenis VARCHAR(100) NOT NULL,
		PRIMARY KEY (id)
	) ENGINE=InnoDB
";

if (!$mysqli->query($sqlTabelGaleri)) {
	die('Pembuatan tabel galeri gagal: ' . $mysqli->error);
}

// Sesuaikan tabel lama jika masih memakai nama kolom nama_file
$kolomGaleri = $mysqli->query("SHOW COLUMNS FROM galeri");
$daftarKolom = [];

if ($kolomGaleri) {
	while ($kolom = $kolomGaleri->fetch_assoc()) {
		$daftarKolom[] = $kolom['Field'];
	}
}

if (!in_array('nama_pengirim', $daftarKolom, true) && in_array('nama_file', $daftarKolom, true)) {
	$mysqli->query("ALTER TABLE galeri ADD COLUMN nama_pengirim VARCHAR(100) NOT NULL AFTER id");
	$mysqli->query("UPDATE galeri SET nama_pengirim = nama_file");
	$mysqli->query("ALTER TABLE galeri DROP COLUMN nama_file");
}

// Pastikan kolom kategori dan jenis mendukung teks seperti form
$mysqli->query("ALTER TABLE galeri MODIFY kategori VARCHAR(100) NOT NULL");
$mysqli->query("ALTER TABLE galeri MODIFY jenis VARCHAR(100) NOT NULL");
