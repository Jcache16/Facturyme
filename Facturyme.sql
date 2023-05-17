-- Crear la base de datos
Drop Database if exists Facturyme;
CREATE DATABASE Facturyme;

-- Usar la base de datos
USE Facturyme;
Drop table if exists Usuarios;
-- Crear la tabla de usuarios
CREATE TABLE Usuarios (
  RFC VARCHAR(100) NOT NULL PRIMARY KEY,
  nombre VARCHAR(50)NOT NULL,
  apellido VARCHAR(50)NOT NULL,
  direccion_fiscal VARCHAR(100) NOT NULL,
  Razon_Social VARCHAR(100)NOT NULL,
  Tipo_Persona VARCHAR(100) NOT NULL,
  contraseña VARCHAR(100) NOT NULL
);

INSERT INTO Usuarios (RFC, nombre, apellido, direccion_fiscal, Razon_Social, Tipo_Persona, contraseña)
VALUES ('RFCEJEMPLO', 'Axel', 'Valdes', 'Blvd. Luis Donaldo Colosio Km 13.5 M 2 Zona 8 SM 299, Carr. Cancún - Tulum, 77565 Cancún, Q.R', 'Axel Valdes', 'Persona Física','hola');


Drop Table if exists Facturas;
-- Crear la tabla de facturas
CREATE TABLE Facturas (
  id_factura INT PRIMARY KEY NOT NULL auto_increment,
  RFC_usuario VARCHAR(50) NOT NULL,
  RFC_destinatario VARCHAR(50) NOT NULL,
  RSocial_usuario VARCHAR(50) NOT NULL,
  RSocial_destinatario VARCHAR(50) NOT NULL,
  monto DECIMAL(10, 2) NOT NULL,
  fecha DATE NOT NULL,
  usoCFDI VARCHAR (100) NOT NULL,
  descripcion VARCHAR (100) NOT NULL,
  num_factura VARCHAR (100),
  FOREIGN KEY (RFC_usuario) REFERENCES Usuarios(RFC)
);

Select * from Usuarios where RFC = 'RFCEJEMPLO';
SELECT * FROM fACTURAS;
