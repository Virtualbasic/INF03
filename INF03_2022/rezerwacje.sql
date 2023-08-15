CREATE TABLE drezerwacje(
    id Int(255) AUTO_INCREMENT,
    nr_stolika int(255),
    data_rez datetime,
    liczba_osob int(255),
    telefon varchar(255),
    PRIMARY KEY(id)
);

INSERT INTO drezerwacje(nr_stolika,data_rez,liczba_osob,telefon) VALUES(1, "2017-07-04", 4, "111222333");