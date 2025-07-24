CREATE DATABASE survey_puskesmas;
USE survey_puskesmas;

-- Tabel users
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Tabel responses
CREATE TABLE responses (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    medis_0 TINYINT,
    medis_1 TINYINT,
    medis_2 TINYINT,
    fasilitas_0 TINYINT,
    fasilitas_1 TINYINT,
    fasilitas_2 TINYINT,
    kepuasan_umum VARCHAR(50),
    kelebihan TEXT,
    kekurangan TEXT,
    saran_lain TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE
);

