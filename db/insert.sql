DELETE FROM turno;
DELETE FROM paciente;
DELETE FROM usuario;
DELETE FROM consultorio;


INSERT INTO usuario(usuario,password,nombre,apellido,rol) VALUES ("adminis","admin1234","Maria","Recepci&oacute;n","admin");

INSERT INTO usuario(usuario,password,nombre,apellido,rol) VALUES ("jlopez","lopezj","Juan","Lopez","doc");
INSERT INTO usuario(usuario,password,nombre,apellido,rol) VALUES ("jgarcia","garciaj","Jose","Garcia","doc");
INSERT INTO usuario(usuario,password,nombre,apellido,rol) VALUES ("framirez","ramirezf","Fabian","Ramirez","doc");
INSERT INTO usuario(usuario,password,nombre,apellido,rol) VALUES ("fmendez","mendezf","Fernanda","Mendez","doc");

INSERT INTO paciente(id_paciente,nombre,apellido) VALUES (1,"Nicolas","Callejas");
INSERT INTO paciente(id_paciente,nombre,apellido) VALUES (2,"Yanina","Caceres");
INSERT INTO paciente(id_paciente,nombre,apellido) VALUES (3,"Sebastian","Otto");
INSERT INTO paciente(id_paciente,nombre,apellido) VALUES (4,"Facundo","Devalle");
INSERT INTO paciente(id_paciente,nombre,apellido) VALUES (5,"Soledad","Fernandez");


INSERT INTO consultorio(numero,nombre,descripcion) VALUES (1,"Sala 1","Medico Clinico");
INSERT INTO consultorio(numero,nombre,descripcion) VALUES (2,"Emergencias 1","Sala de emergencias funcional para todo tipo.");
INSERT INTO consultorio(numero,nombre,descripcion) VALUES (3,"Emergencias 2(ERs)","Sala equipada para enfocarse en emergencias médicas graves");
INSERT INTO consultorio(numero,nombre,descripcion) VALUES (4,"Radiografias","Sala de radiografias");
INSERT INTO consultorio(numero,nombre,descripcion) VALUES (5,"Pediatria","Medico pediatra");



INSERT INTO turno(fecha,id_paciente,usuario,numero) VALUES("2013-09-05 15:00:00",1,"jlopez",1);
INSERT INTO turno(fecha,id_paciente,usuario,numero) VALUES("2013-09-05 15:30:00",2,"jlopez",1);
INSERT INTO turno(fecha,id_paciente,usuario,numero) VALUES("2013-09-05 15:30:00",1,"jgarcia",1);





