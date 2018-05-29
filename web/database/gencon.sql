DROP TABLE movies;
DROP TABLE ratings;

CREATE TABLE ratings
(
  id SERIAL PRIMARY KEY,
  code VARCHAR(10) UNIQUE NOT NULL,
  name VARCHAR(100)
);

CREATE TABLE movies
(
  id SERIAL PRIMARY KEY,
  title VARCHAR(200) NOT NULL,
  year SMALLINT,
  rating_id INT REFERENCES ratings(id)
);

INSERT INTO ratings(code, name) VALUES
('G', 'General Audiences'),
('PG', 'Parental Guidence'),
('PG-13', 'Parental Guidence Age 13'),
('R', 'Restricted'),
('NR', 'Not Rated');

INSERT INTO movies(title, year, rating_id) VALUES
('The Incredibles 2', 2018, (SELECT id FROM ratings WHERE code = 'PG')),
('Star Wars: A New Hope', 1977, (SELECT id FROM ratings WHERE code = 'PG')),
('Logan', 2018, (SELECT id FROM ratings WHERE code = 'R')),
('Finding Nemo', 2003, (SELECT id FROM ratings WHERE code = 'PG'));

SELECT m.title, m.year, r.code FROM movies m 
  INNER JOIN ratings r ON m.rating_id = r.id;

SELECT m.title, m.year, r.code FROM movies m 
  INNER JOIN ratings r ON m.rating_id = r.id
  WHERE r.code = 'PG';

--cat ./web/psql/init.sql | heroku psql