SET NAMES 'utf8';
DROP DATABASE IF EXISTS paginatitulacion;
CREATE DATABASE IF NOT EXISTS paginatitulacion DEFAULT CHARACTER SET utf8;
USE paginatitulacion;

CREATE TABLE modalidades_titulacion(
id_mtc INTEGER NOT NULL AUTO_INCREMENT,
modalidad_titulacion_mtc VARCHAR(120) NOT NULL,
PRIMARY KEY(id_mtc),
CONSTRAINT NAME_STRUCTURE CHECK(modalidad_titulacion_mtc REGEXP '[A-Za-z\s]+$')
)DEFAULT CHARACTER SET utf8;

CREATE TABLE formulario(
id_fmr INTEGER NOT NULL AUTO_INCREMENT, 
nombres_fmr VARCHAR(150) NOT NULL,
apellido_paterno_fmr VARCHAR(100) NOT NULL,
apellido_materno_fmr VARCHAR(100) NOT NULL,
numero_cuenta_fmr VARCHAR(9) NOT NULL,
numero_celular_fmr VARCHAR(10) NOT NULL,
correo_electronico_fmr VARCHAR(100) NOT NULL,
plan_estudios_fmr ENUM('Plan 0080', 'Plan 0082', 'Plan 1279', 'Plan 2119') NOT NULL,
id_mtc INTEGER NOT NULL,
PRIMARY KEY(id_fmr),
FOREIGN KEY (id_mtc) REFERENCES modalidades_titulacion(id_mtc),
CONSTRAINT MINIMUM_4_CHARACTERS_NAME CHECK(CHAR_LENGTH(nombres_fmr)>=4 AND CHAR_LENGTH(apellido_paterno_fmr)>=4 AND CHAR_LENGTH(apellido_materno_fmr)>=4),
CONSTRAINT NAME_STRUCTURE CHECK(nombres_fmr REGEXP '[A-Za-z\s]+$'),
CONSTRAINT ONLY_LETTERS CHECK(apellido_paterno_fmr REGEXP '[A-Za-z]+$' AND apellido_materno_fmr REGEXP '[A-Za-z]+$'),
CONSTRAINT ONLY_NINE_NUMBER_ACCOUNT_NUMBER CHECK(numero_cuenta_fmr REGEXP'^[0-9]{9}$'),
CONSTRAINT ONLY_TEN_NUMBER_PHONE_NUMBER CHECK(numero_celular_fmr REGEXP'^[0-9]{10}$'),
CONSTRAINT EMAIL CHECK(correo_electronico_fmr REGEXP '^[a-z0-9!#$%&*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?$'),
CONSTRAINT EXCLUSIVE_ACCOUNT_NUMBER UNIQUE(numero_cuenta_fmr),
CONSTRAINT EXCLUSIVE_EMAIL UNIQUE(correo_electronico_fmr)
)DEFAULT CHARACTER SET utf8;

INSERT INTO modalidades_titulacion (modalidad_titulacion_mtc) 
VALUES ('Tesis o tesina y examen profesional'),
('Actividad de investigación en su alternativa de tesis o tesina'),
('Actividad de apoyo a la docencia'),
('Trabajo profesional'),
('Servicio social'),
('Actividad de investigación en su alternativa de artículo académico'),
('Examen general de conocimientos externo'),
('Totalidad de créditos y alto nivel académico'),
('Estudios en posgrado'),
('Ampliación y profundización de conocimientos en su alternativa de semestre adicional'),
('Ampliación y profundización de conocimientos en su alternativa cursos o diplomados de educación continua');