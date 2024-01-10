CREATE DATABASE CRUD;

USE CRUD;

CREATE TABLE IF NOT EXISTS livre (
    id INT(11) PRIMARY KEY AUTO_INCREMENT,
    titre VARCHAR(255) NOT NULL,
    ISBN VARCHAR(50) NOT NULL,
    résumé TEXT
) CHARACTER SET utf8mb4; 