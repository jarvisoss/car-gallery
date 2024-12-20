CREATE DATABASE IF NOT EXISTS car_gallery;
USE car_gallery;
CREATE TABLE IF NOT EXISTS cars (
    id INT NOT NULL AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL,
    image VARCHAR(255) NOT NULL,
    year INT NOT NULL,
    price DECIMAL NOT NULL,
    PRIMARY KEY (id)
) ENGINE = INNODB;
INSERT INTO cars (id, name, year, price, image)
VALUES (
        1,
        'BMW M5',
        2019,
        80000,
        'http://localhost:8080/images/bmw_m5.jpg'
    ),
    (
        2,
        'Mercedes-Benz S-Class',
        2021,
        150000,
        'http://localhost:8080/images/mercedes_s.jpg'
    ),
    (
        3,
        'Land Rover Range Rover',
        2020,
        180000,
        'http://localhost:8080/images/range-rover.jpg'
    ),
    (
        4,
        'Lexus LX570',
        2016,
        50000,
        'http://localhost:8080/images/lexus_lx570.jpg'
    ),
    (
        5,
        'Toyota Land Cruiser 200',
        2016,
        45000,
        'http://localhost:8080/images/toyota200.jpg'
    ),
    (
        6,
        'Tesla Model S',
        2021,
        110000,
        'http://localhost:8080/images/tesla_s.jpg'
    ),
    (
        7,
        'Mercedes-Benz C63 AMG',
        2018,
        70000,
        'http://localhost:8080/images/mercedes_c63.jpg'
    ),
    (
        8,
        'Mercedes-Benz G63 AMG',
        2021,
        300000,
        'http://localhost:8080/images/mercedes_g63.jpg'
    ),
    (
        9,
        'BMW 7',
        2022,
        180000,
        'http://localhost:8080/images/bmw7.jpg'
    ),
    (
        10,
        'Audi A8',
        2022,
        130000,
        'http://localhost:8080/images/audi_a8.jpg'
    );
