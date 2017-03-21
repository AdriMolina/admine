use Login;

create table permiso
(
	id int not null auto_increment primary key,
	tipo varchar(50)
);

INSERT INTO permiso (tipo) VALUES ('Administrador');
INSERT INTO permiso (tipo) VALUES ('Usuario');

create table usuario
(
	id int not null auto_increment primary key,
	nick varchar(50),
	email varchar(100),
	pwd varchar(50),
	id_permiso int not null references permiso.id
);

INSERT INTO usuario (nick, email, pwd, id_permiso) VALUES ('Javier', 'jsl@hotmail.com', 'jsl2410', 2);
INSERT INTO usuario (nick, email, pwd, id_permiso) VALUES ('Adriana', 'adri@hotmail.com', 'adm178', 1);
