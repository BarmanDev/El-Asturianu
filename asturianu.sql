CREATE DATABASE asturianu;
USE asturianu;

CREATE TABLE usuarios(
	idUsuario int primary key not null AUTO_INCREMENT,
    nombre varchar (50),
    apellidos varchar (50),
    direccion varchar (150),
    telefono varchar (10),
    pass varchar (50),
    administrador tinyint(1) default 0
);

INSERT INTO usuarios VALUES ('1', "admin","admin", "asturianu", "admin", "admin", 1);
INSERT INTO usuarios (nombre,apellidos,direccion,telefono,pass) VALUES ("clientePrueba","clientePrueba", "clientePrueba", "prueba","prueba");


CREATE TABLE reservas(
	idReserva int primary key not null AUTO_INCREMENT,
    nombre varchar (150),
    apellidos varchar (50),
    direccion varchar (150),
    telefono varchar (10),
    fecha  varchar(50),
    hora varchar(50),
    estado varchar(50) default "pendiente",
    num_comensales  varchar(50),
    num_mesa varchar(50) default "sin asignar",
    idUsuario int,
	CONSTRAINT FK_reservar_usuarios FOREIGN KEY(idUsuario) REFERENCES usuarios(idUsuario) on delete cascade
);
INSERT INTO reservas (nombre,apellidos,telefono,fecha,hora) VALUES ('pruebaReserva','pruebaReserva','prueba','01-11-2022','pruebaReserva');

	

create table productos(
	idProducto int primary key not null AUTO_INCREMENT,
    categoria varchar(80),
    plato varchar (50),
    precio int,
    idUsuario int,
    CONSTRAINT FK_productos_usuarios FOREIGN KEY(idUsuario) REFERENCES usuarios(idUsuario) on delete cascade

);
INSERT INTO productos(categoria, plato, precio)VALUES ("Para compartir","Arroz manchego", 18);
INSERT INTO productos(categoria, plato, precio)VALUES ("Para compartir","Arroz marinero", 19);
INSERT INTO productos(categoria, plato, precio)VALUES ("Para compartir","Brandada de bacalao", 14);
INSERT INTO productos(categoria, plato, precio)VALUES ("Para compartir","Croquetas de carrilleras", 12);
INSERT INTO productos(categoria, plato, precio)VALUES ("Para compartir","Croquetas de chosco", 12);

INSERT INTO productos(categoria, plato, precio)VALUES ("Quesos Astrurianos","Cabrales", 12);
INSERT INTO productos(categoria, plato, precio)VALUES ("Quesos Astrurianos","Aguega Pitu", 15);
INSERT INTO productos(categoria, plato, precio)VALUES ("Quesos Astrurianos","La Peral", 15);
INSERT INTO productos(categoria, plato, precio)VALUES ("Quesos Astrurianos","Queso el Monje", 17);
INSERT INTO productos(categoria, plato, precio)VALUES ("Quesos Astrurianos","Ahumado Curado", 12);

INSERT INTO productos(categoria, plato, precio)VALUES ("Especialidades a la brasa","Chosco de Tineo", 15);
INSERT INTO productos(categoria, plato, precio)VALUES ("Especialidades a la brasa","Chuletas de cordero", 18);
INSERT INTO productos(categoria, plato, precio)VALUES ("Especialidades a la brasa","Chuletón de vacuno 1kg aprox", 40);
INSERT INTO productos(categoria, plato, precio)VALUES ("Especialidades a la brasa","Lechazo a la brasa", 42);
INSERT INTO productos(categoria, plato, precio)VALUES ("Especialidades a la brasa","Gulas a la brasa", 14);

INSERT INTO productos(categoria, plato, precio)VALUES ("Pescados a la brasa","Dorada", 15);
INSERT INTO productos(categoria, plato, precio)VALUES ("Pescados a la brasa","Salmón", 6);
INSERT INTO productos(categoria, plato, precio)VALUES ("Pescados a la brasa","Sardinas", 11);
INSERT INTO productos(categoria, plato, precio)VALUES ("Pescados a la brasa","Oricios a la brasa", 12);

INSERT INTO productos(categoria, plato, precio)VALUES ("Ibericos a la brasa ","Abanico", 16);
INSERT INTO productos(categoria, plato, precio)VALUES ("Ibericos a la brasa ","Carrilleras", 16);
INSERT INTO productos(categoria, plato, precio)VALUES ("Ibericos a la brasa ","Costillas", 14);
INSERT INTO productos(categoria, plato, precio)VALUES ("Ibericos a la brasa ","Presa", 18);
INSERT INTO productos(categoria, plato, precio)VALUES ("Ibericos a la brasa ","Secreto", 18);

INSERT INTO productos(categoria, plato, precio)VALUES ("Carnes D.O asturianas ","Chistorra Astur", 7);
INSERT INTO productos(categoria, plato, precio)VALUES ("Carnes D.O asturianas ","Alitas de Pitu", 10);
INSERT INTO productos(categoria, plato, precio)VALUES ("Carnes D.O asturianas ","churrasco", 15);
INSERT INTO productos(categoria, plato, precio)VALUES ("Carnes D.O asturianas "," Lacón de Quiros", 10);
INSERT INTO productos(categoria, plato, precio)VALUES ("Carnes D.O asturianas ","Pollo de Pitu a la parrilla", 10);

INSERT INTO productos(categoria, plato, precio)VALUES ("Postres caseros ","Tarta de la guela", 6);
INSERT INTO productos(categoria, plato, precio)VALUES ("Postres caseros ","Arroz con leche", 6);
INSERT INTO productos(categoria, plato, precio)VALUES ("Postres caseros ","Piña a la brasa", 6);
INSERT INTO productos(categoria, plato, precio)VALUES ("Postres caseros ","Frixuelos", 6);
INSERT INTO productos(categoria, plato, precio)VALUES ("Postres caseros ","Casadielles", 6);

INSERT INTO productos(categoria, plato, precio)VALUES ("Bebidas ","Sidra Vda Angelón", 3);
INSERT INTO productos(categoria, plato, precio)VALUES ("Bebidas ","Agua de cuevas 1L", 2);
INSERT INTO productos(categoria, plato, precio)VALUES ("Bebidas ","Refrecos", 3);
INSERT INTO productos(categoria, plato, precio)VALUES ("Bebidas ","Cervezas", 3);

