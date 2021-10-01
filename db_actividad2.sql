DROP SCHEMA control_acceso_db; 
CREATE SCHEMA control_acceso_db;
USE control_acceso_db;

DROP TABLE IF EXISTS control_acceso_db.roles;
CREATE TABLE control_acceso_db.roles (
    id_role INT NOT NULL,
    role_name VARCHAR(45) NOT NULL,
    CONSTRAINT pk_role PRIMARY KEY (id_role)
);

DROP TABLE IF EXISTS control_acceso_db.users;
CREATE TABLE control_acceso_db.users (
    id_user INT NOT NULL AUTO_INCREMENT,
    firstname VARCHAR(45) NOT NULL,
    lastname VARCHAR(45) NOT NULL,
    username VARCHAR(45) NOT NULL,
    pwd VARCHAR(45) NOT NULL,
    user_role INT NOT NULL,
    CONSTRAINT pk_user PRIMARY KEY (id_user),
    UNIQUE INDEX user_UNIQUE (username),
    CONSTRAINT fk_users_roles FOREIGN KEY (user_role)
        REFERENCES control_acceso_db.roles (id_role)
        ON UPDATE CASCADE ON DELETE RESTRICT
);

DROP TABLE IF EXISTS control_acceso_db.activities;
CREATE TABLE control_acceso_db.activities (
    id_activity INT NOT NULL,
    activity_name VARCHAR(45) NOT NULL,
    link VARCHAR(250) NULL,
    CONSTRAINT pk_activities PRIMARY KEY (id_activity)
);

DROP TABLE IF EXISTS control_acceso_db.activity_management;
CREATE TABLE control_acceso_db.activity_management (
    id_activity_management INT NOT NULL,
    id_role INT NOT NULL,
    id_activity INT NOT NULL,
    CONSTRAINT pk_activity_management PRIMARY KEY (id_activity_management),
    CONSTRAINT fk_roles_activities FOREIGN KEY (id_role)
        REFERENCES control_acceso_db.roles (id_role)
        ON UPDATE CASCADE ON DELETE RESTRICT,
    CONSTRAINT fk_activities_roles FOREIGN KEY (id_activity)
        REFERENCES control_acceso_db.activities (id_activity)
        ON UPDATE CASCADE ON DELETE RESTRICT
);

INSERT INTO control_acceso_db.roles (id_role, role_name)
VALUES
    (1, 'Administrador'),
    (2, 'Vendedor'),
    (3, 'Cliente');

INSERT INTO control_acceso_db.users (firstname, lastname, username, pwd, user_role)
VALUES
    ('Michael', 'Gonzalez', 'mikle', 'mikle', 1),
    ('Rober', 'Martinez', 'alex', 'alex', 2),
    ('David', 'Rojas', 'delta', 'delta', 3);

INSERT INTO control_acceso_db.activities (id_activity, activity_name, link)
VALUES
    (1, 'Crear usuarios', 'create.php'),
    (2, 'Modificar usuarios', 'modify.php'),
    (3, 'Eliminar usuarios', 'delete.php'),
    (4, 'Listar usuarios', 'list.php'),
    (5, 'Gestión de libros', NULL),
    (6, 'Préstamos de libros', NULL);

INSERT INTO control_acceso_db.activity_management (id_activity_management, id_role, id_activity)
VALUES
    (1, 1, 1),
    (2, 1, 2),
    (3, 1, 3),
    (4, 1, 4),
    (5, 2, 1),
    (6, 2, 4),
    (7, 3, 1);

SELECT * FROM control_acceso_db.users;
SELECT * FROM control_acceso_db.roles;
SELECT * FROM control_acceso_db.activities;
SELECT * FROM control_acceso_db.activity_management;