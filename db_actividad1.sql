-- DROP SCHEMA control_acceso_db;
CREATE SCHEMA control_acceso_db;
USE control_acceso_db;

DROP TABLE control_acceso_db.tbl_user;
CREATE TABLE control_acceso_db.tbl_user (
    id_user INT NOT NULL AUTO_INCREMENT,
    firstname VARCHAR(45) NOT NULL,
    lastname VARCHAR(45) NOT NULL,
    username VARCHAR(45) NOT NULL,
    pwd VARCHAR(45) NOT NULL, 
    user_profile INT NOT NULL,
    CONSTRAINT pk_user PRIMARY KEY(id_user),
    UNIQUE INDEX user_UNIQUE (username)
);

INSERT INTO control_acceso_db.tbl_user(firstname, lastname, username, pwd, user_profile)
VALUES ('Michael', 'Gonzalez', 'mikle', 'miklePWD', 1);
INSERT INTO control_acceso_db.tbl_user(firstname, lastname, username, pwd, user_profile)
VALUES ('Rober', 'Mart', 'alex', 'alexPWD', 2);