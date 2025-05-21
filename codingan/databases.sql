CREATE DATABASE hanif_khalilurrahim_11pplg_uuk;
USE hanif_khalilurrahim_11pplg_uuk;

CREATE TABLE user (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50),
    password VARCHAR(50),
    role ENUM('admin', 'kader')
);

CREATE TABLE data_bayi (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(100),
    tinggi int,
    berat int,
);

INSERT INTO user (username, password, role) VALUES
('admin', 'admin123', 'admin')