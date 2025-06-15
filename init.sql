-- Inicializační SQL skript pro databázi
CREATE DATABASE IF NOT EXISTS strojni_dilna CHARACTER SET utf8mb4 COLLATE utf8mb4_czech_ci;
USE strojni_dilna;
-- Tabulka pro uživatelské účty
CREATE TABLE IF NOT EXISTS ucty (
    id INT PRIMARY KEY AUTO_INCREMENT,
	jmeno CHAR(20) NOT NULL,
    prijmeni CHAR(20) NOT NULL,
	login VARCHAR(20) NOT NULL UNIQUE,
    pass VARCHAR(256) NOT NULL,
    email VARCHAR(50) NOT NULL,
    telefon VARCHAR(13) NOT NULL,
    zeme CHAR(30) NOT NULL,
    pohlavi CHAR(4),
    dat_nar DATE NOT NULL,
    typ_uctu ENUM('OBYCEJNY', 'ADMIN') DEFAULT 'OBYCEJNY',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_czech_ci;
-- Tabulka pro komentáře/novinky
CREATE TABLE IF NOT EXISTS komenty (
    id_kom INT PRIMARY KEY AUTO_INCREMENT,
    datum DATETIME NOT NULL,
    nazev_kom CHAR(30) NOT NULL,
	id_uziv INT(11) NOT NULL,
	text VARCHAR(6000) NOT NULL,
    FOREIGN KEY (id_uziv) REFERENCES ucty(id) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
-- Tabulka pro zakázky/objednávky
CREATE TABLE IF NOT EXISTS zakazky (
    id_zak INT PRIMARY KEY AUTO_INCREMENT,
    datum TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    nazev CHAR(40) NOT NULL,
	email VARCHAR(50) NOT NULL,
	druhy CHAR(100),
	vaha CHAR(10),
	sirka INT(15),
	vyska INT(15),
	hloubka INT(15),
	material CHAR(15),
	popis VARCHAR(6000),
	cinnost VARCHAR(100),
    id_uziv INT(11) NOT NULL,
    FOREIGN KEY (id_uziv) REFERENCES ucty(id) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
-- Vložení testovacího admin účtu (heslo: Admin123)
INSERT IGNORE INTO ucty (`jmeno`, `prijmeni`, `login`, `pass`, `email`, `telefon`, `zeme`, `pohlavi`, `dat_nar`, `typ_uctu`)
VALUES ('Patrik', 'Poklop', 'imang21', '$2y$10$TTgBenXIX/ieVeYA1ezvEOlqItfyqLsl55rnrFNCMJPEP261ulK9G','imanggamer@gmail.com', '702742701', 'Česká republika', 'M', '2002-10-18', 'ADMIN');

INSERT INTO `komenty` (`id_kom`, `datum`, `nazev_kom`, `id_uziv`, `text`) VALUES (NULL, '2025-06-11 09:27:32.000000', 'Novinka', '1', 'Vítejete na stránce.');

INSERT IGNORE INTO zakazky (`datum`, `nazev`, `email`, `druhy`, `vaha`, `sirka`, `vyska`, `hloubka`, `material`, `popis`, `cinnost`, `id_uziv`)
VALUES ('2002-10-10','Objednavka10','patrik.jeliman@seznam.cz', 'vrtání,řezání,sváření', '50kg', 8, 10, 7, 'kov','Velká hlavice se šrouby a závity ve tvaru kruhu. Těžká a středně velká.', 'Vyvrtat díru', 1);

-- Oprava kódování pro existující data (pokud existují)
UPDATE komenty SET nazev_kom = CONVERT(BINARY CONVERT(nazev_kom USING latin1) USING utf8mb4) WHERE 1;
UPDATE komenty SET text = CONVERT(BINARY CONVERT(text USING latin1) USING utf8mb4) WHERE 1;
