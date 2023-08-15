CREATE TABLE pracownicy(
    id Int(255) AUTO_INCREMENT,
    imie varchar(255),
    nazwisko varchar(255),
    stanowisko int(255),    
    PRIMARY KEY(id)
);



UPDATE pracownicy  SET stanowisko = "barman" WHERE stanowisko ="kelner";

