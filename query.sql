CREATE database laraveldb

USE laraveldb
#DROP TABLE Alumno
CREATE TABLE Alumno (
	id int primary key,
    nombres varchar(100),
    apellidos varchar(100),
    activo boolean default true
)

INSERT INTO Alumno(id, nombres, apellidos) 
            VALUES(1, 'Fabio', 'Casafranca'),
				  (2, 'Cayetana', 'Casafranca');
					
SELECT * FROM Alumno;
CREATE TABLE Curso (
	id int primary key,
    nombre varchar(100),
    activo boolean
)