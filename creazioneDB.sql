CREATE DATABASE BestMountainEver;

CREATE USER nome_utente@'%' IDENTIFIED BY 'password';
GRANT ALL PRIVILEGES ON BestMountainEver.* TO nome_utente@'%';
FLUSH PRIVILEGES;

CREATE TABLE utenti (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome_utente VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL
);




