-- =============================================
-- BASE DE DATOS: thread_db
-- PROYECTO: Thread — Wear the Moment
-- EJECUTAR EN: phpMyAdmin o MySQL de XAMPP
-- =============================================

CREATE DATABASE IF NOT EXISTS thread_db
    CHARACTER SET utf8
    COLLATE utf8_general_ci;

USE thread_db;

-- Tabla de mensajes de contacto
CREATE TABLE IF NOT EXISTS contactos (
    id          INT AUTO_INCREMENT PRIMARY KEY,
    nombre      VARCHAR(100)  NOT NULL,
    email       VARCHAR(150)  NOT NULL,
    telefono    VARCHAR(20)   DEFAULT NULL,
    asunto      VARCHAR(200)  NOT NULL,
    mensaje     TEXT          NOT NULL,
    fecha       DATETIME      DEFAULT CURRENT_TIMESTAMP,
    leido       TINYINT(1)    DEFAULT 0     -- 0 = no leído, 1 = leído (backoffice)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Datos de prueba para verificar backoffice
INSERT INTO contactos (nombre, email, telefono, asunto, mensaje) VALUES
('Ana García',   'ana@correo.com',   '7711234567', 'Consulta tallas',    'Hola, quisiera saber si tienen talla XS en el blazer camel.'),
('Luis Pérez',   'luis@correo.com',  '7719876543', 'Disponibilidad',     '¿Tienen el vestido midi en color negro?'),
('María López',  'maria@correo.com', NULL,          'Envíos a domicilio', 'Me gustaría saber si hacen envíos a Pachuca centro.');
