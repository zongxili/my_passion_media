CREATE TABLE Employees
(
  employeeID int,
  firstName varchar(255),
  lastName varchar(255)
);

CREATE TABLE Addresses
(
  addressID int,
  employeeID int,
  address varchar(255),
  city varchar(255),
  provinceID int,
  postalCode varchar(10)
);

CREATE TABLE Provinces
(
  provinceID int,
  province varchar(255)
);

INSERT INTO Provinces (provinceID, province) VALUES (1, 'British Columbia');

INSERT INTO Provinces VALUES (2, 'Alberta');

INSERT INTO Employees VALUES (1, 'Zongxi', 'Li');

INSERT INTO Employees VALUES (2, 'Jeff', 'Hong');

INSERT INTO Employees VALUES (3, 'John', 'Wang');

INSERT INTO Addresses VALUES (1, 3, '170-6371 Crescent Road', 'Vancouver', 1, 'V6T 1Z2');

INSERT INTO Addresses VALUES (2, 2, '520 E 1st Ave', 'Vancouver', 1, 'V5T 0H2');

INSERT INTO Addresses VALUES (3, 1, '116 St & 85 Ave', 'Edmonton', 2, 'T6G 2R3');