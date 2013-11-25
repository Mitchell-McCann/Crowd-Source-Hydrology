CREATE TABLE Operations (
  id INTEGER PRIMARY KEY NOT NULL AUTO_INCREMENT,
  description VARCHAR(255),
  F1 VARCHAR (500),
  F2 VARCHAR (500),
  F3 VARCHAR (500),
  F4 VARCHAR (500),
  F5 VARCHAR (500),
  F6 VARCHAR (500)
);

CREATE TABLE Equipment (
  id INTEGER PRIMARY KEY NOT NULL AUTO_INCREMENT,
  qrCode BLOB,
  gps POINT,
  opCode INT, 
  FOREIGN KEY (opCode) references Operations(id)
);

CREATE TABLE Users (
  id INTEGER PRIMARY KEY NOT NULL AUTO_INCREMENT,
  nameFirst VARCHAR(50),
  nameLast VARCHAR(100),
  email VARCHAR(255),
  password VARCHAR(255),
  phone VARCHAR(11),
  rank INT(1)
);

CREATE TABLE Transaction (
  id INTEGER PRIMARY KEY NOT NULL AUTO_INCREMENT,
  timeDate TIMESTAMP,
  opCode INTEGER,
  gps POINT,
  idEquip INTEGER,
  F1 VARCHAR (50),
  F2 VARCHAR (50),
  F3 VARCHAR (50),
  F4 VARCHAR (50),
  F5 VARCHAR (50),
  F6 VARCHAR (50),
  FOREIGN KEY (opCode) references Operations(id),
  FOREIGN KEY (idEquip) references Equipment(id)
); 
