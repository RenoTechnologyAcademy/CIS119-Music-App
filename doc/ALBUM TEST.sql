CREATE TABLE album (
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    name TEXT,
    artist TEXT,
    year_released INT,
    genre TEXT,
    date_added DATETIME
);

INSERT INTO album
(name, artist, year_released, genre, date_added)
VALUES
('The Black Album', 'Metallica', 1992, 'Rock', '2022-03-23');

INSERT INTO album
(name, artist, year_released, genre, date_added)
VALUES
('Channel Orange', 'Frank Ocean', 2014, 'Hip Hop', '2022-03-23');

INSERT INTO album
(name, artist, year_released, genre, date_added)
VALUES
('Ropin the Wind', 'Garth Brooks', 1991, 'Country', '2022-03-23');

INSERT INTO album
(name, artist, year_released, genre, date_added)
VALUES
('Lazaretto', 'Jack White', 2007, 'Alternative', '2022-03-23');
