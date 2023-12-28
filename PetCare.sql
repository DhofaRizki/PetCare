CREATE DATABASE pet_care;
USE pet_care;

CREATE TABLE tb_admin (
	id INT UNSIGNED PRIMARY KEY NOT NULL AUTO_INCREMENT,
	email VARCHAR (100) NOT NULL,
	namalengkap VARCHAR (100) NOT NULL,
	jeniskelamin ENUM ('', 'L', 'P') DEFAULT '',
	katasandi VARCHAR (50) NOT NULL,
	UNIQUE(email)
	)ENGINE=INNODB;

CREATE TABLE tb_pengguna (
	id INT UNSIGNED PRIMARY KEY NOT NULL AUTO_INCREMENT,
	email VARCHAR (100) NOT NULL,
	namalengkap VARCHAR (100) NOT NULL,
	jeniskelamin ENUM ('', 'L', 'P') DEFAULT '',
	katasandi VARCHAR (50) NOT NULL,
	UNIQUE(email)
	)ENGINE=INNODB;

CREATE TABLE tb_barang (
	id INT UNSIGNED PRIMARY KEY NOT NULL AUTO_INCREMENT,
	namabarang VARCHAR (150) NOT NULL,
	jenis VARCHAR (100) NOT NULL,
	harga INT (50) NOT NULL,
	lokasi VARCHAR (200) NOT NULL,
    detail VARCHAR (1000) NOT NULL
	)ENGINE=INNODB;

CREATE TABLE tb_grooming (
	id INT UNSIGNED PRIMARY KEY NOT NULL AUTO_INCREMENT,
	jenishewan VARCHAR (100) NOT NULL,
	jenispaket VARCHAR (100) NOT NULL,
	harga INT (50) NOT NULL,
	lokasi VARCHAR (200) NOT NULL
	)ENGINE=INNODB;
	
CREATE TABLE tb_dokter (
	id INT UNSIGNED PRIMARY KEY NOT NULL AUTO_INCREMENT,
	nama VARCHAR (100) NOT NULL,
	notlp INT (20) NOT NULL,
	jadwal VARCHAR (100) NOT NULL, 
	lokasi VARCHAR (200) NOT NULL
	)ENGINE=INNODB;

CREATE TABLE tb_pemesanan_barang (
	jenis INT UNSIGNED,
	namabarang INT UNSIGNED,
	lokasi INT UNSIGNED,
    detail INT UNSIGNED,
	
	FOREIGN KEY (jenis) REFERENCES tb_barang(id) ON UPDATE CASCADE,
	FOREIGN KEY (namabarang) REFERENCES tb_barang(id) ON UPDATE CASCADE,
    FOREIGN KEY (lokasi) REFERENCES tb_barang(id) ON UPDATE CASCADE,
    FOREIGN KEY (detail) REFERENCES tb_barang(id) ON UPDATE CASCADE
	
	)ENGINE=INNODB;

CREATE TABLE tb_pemesanan_grooming (
    namalengkap INT UNSIGNED,
	namahewan VARCHAR (100) NOT NULL,
	jenishewan INT UNSIGNED,
	kelamin ENUM ('', 'L', 'P') DEFAULT '',
	jenispaket INT UNSIGNED,
	harga INT UNSIGNED,

	FOREIGN KEY (namalengkap) REFERENCES tb_pengguna(id) ON UPDATE CASCADE,
	FOREIGN KEY (jenishewan) REFERENCES tb_grooming(id) ON UPDATE CASCADE,
	FOREIGN KEY (jenispaket) REFERENCES tb_grooming(id) ON UPDATE CASCADE,
	FOREIGN KEY (harga) REFERENCES tb_grooming(id) ON UPDATE CASCADE
	
	)ENGINE=INNODB;

CREATE TABLE tb_pemesanan_dokter (
	namadokter INT UNSIGNED,
	namahewan VARCHAR (100) NOT NULL,
	jenishewan INT UNSIGNED,
	tgl_dtg DATE NOT NULL,
	jam VARCHAR (50) NOT NULL,
	notlp INT (20) NOT NULL,
	keluhan VARCHAR (500) NOT NULL,
	
	FOREIGN KEY (nama) REFERENCES tb_dokter(id) ON UPDATE CASCADE,
	FOREIGN KEY (jenishewan) REFERENCES tb_grooming(id) ON UPDATE CASCADE
	
	)ENGINE=INNODB;
	