DROP DATABASE IF EXISTS chores_mgt; 

CREATE DATABASE chores_mgt;

USE chores_mgt;

CREATE TABLE Chores (cid INT PRIMARY KEY, chorname VARCHAR(100));

CREATE TABLE Status (sid INT PRIMARY KEY, sname VARCHAR(50));

CREATE TABLE Family_name (fid INT PRIMARY KEY, fam_name VARCHAR(100));

CREATE TABLE Role (rid INT PRIMARY KEY, rname VARCHAR(50));

CREATE TABLE People (
  pid INT PRIMARY KEY,
  rid INT,
  fid INT,
  fname VARCHAR(50),
  lname VARCHAR(50),
  gender VARCHAR(10),
  dob DATE,
  tel VARCHAR(20),
  email VARCHAR(100),
  passwd VARCHAR(100),
  FOREIGN KEY (rid) REFERENCES Role (rid),
  FOREIGN KEY (fid) REFERENCES Family_name (fid)
);

CREATE TABLE Assignment (
  assignmentid INT PRIMARY KEY,
  cid INT,
  sid INT,
  date_assign DATE,
  date_due DATE,
  last_updated TIMESTAMP,
  date_completed DATE,
  img VARCHAR(100),
  who_assigned INT,
  FOREIGN KEY (cid) REFERENCES Chores (cid),
  FOREIGN KEY (sid) REFERENCES Status (sid),
  FOREIGN KEY (who_assigned) REFERENCES People (pid)
);

CREATE TABLE Assigned_people (
  pid INT,
  assignmentid INT,
  FOREIGN KEY (pid) REFERENCES People (pid),
  FOREIGN KEY (assignmentid) REFERENCES Assignment (assignmentid)
);