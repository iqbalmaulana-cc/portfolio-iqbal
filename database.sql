-- Database portfolio untuk section galeri
CREATE DATABASE IF NOT EXISTS db_maulana
	CHARACTER SET utf8mb4
	COLLATE utf8mb4_unicode_ci;

USE db_maulana;

-- Tabel untuk menyimpan data galeri
CREATE TABLE IF NOT EXISTS galeri (
	id INT UNSIGNED NOT NULL AUTO_INCREMENT,
	nama_file VARCHAR(150) NOT NULL,
	kategori VARCHAR(100) NOT NULL,
	jenis VARCHAR(100) NOT NULL,
	PRIMARY KEY (id)
) ENGINE=InnoDB
  DEFAULT CHARACTER SET=utf8mb4
  COLLATE=utf8mb4_unicode_ci;
