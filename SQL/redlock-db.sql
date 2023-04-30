CREATE DATABASE Redlock;

USE Redlock;

CREATE TABLE users (
  ID INT NOT NULL AUTO_INCREMENT,
  Nama VARCHAR(255) NOT NULL,
  Alamat VARCHAR(255) NOT NULL,
  Jabatan VARCHAR(255) NOT NULL,
  PRIMARY KEY (ID)
);

INSERT into users values("1", "Florentyna", "Kebon Jeruk", "Squidz");
INSERT into users values("2", "Florencia", "Kebon Jeruk","Spongebob");
INSERT into users values("3", "Jovita", "Karawaci", "Patrick");
INSERT into users values("4", "Jocelyn", "Karawaci", "Gary");
