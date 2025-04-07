CREATE DATABASE BestMountainEver;

CREATE USER administrator@localhost IDENTIFIED BY 'eC$%C85bxM4aCX$z@zb8';
GRANT ALL PRIVILEGES ON BestMountainEver.* TO administrator@'eC$%C85bxM4aCX$z@zb8';
FLUSH PRIVILEGES;

CREATE TABLE utenti (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome_utente VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL
);




