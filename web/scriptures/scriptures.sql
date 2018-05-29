DROP TABLE scriptures_topics;
DROP TABLE scriptures;
DROP TABLE topics;

CREATE TABLE scriptures(
  id SERIAL PRIMARY KEY,
  book VARCHAR(100),
  chapter INTEGER,
  verse INTEGER,
  content VARCHAR(2048)
);

CREATE TABLE topics(
  id SERIAL PRIMARY KEY,
  topic VARCHAR(100)
);

CREATE TABLE scriptures_topics(
  id SERIAL PRIMARY KEY,
  scripture INT REFERENCES scriptures(id),
  topic INT REFERENCES topics(id)
);

INSERT INTO topics (topic) VALUES
  ('Faith'),
  ('Hope'),
  ('Charity');

INSERT INTO scriptures(book, chapter, verse, content) VALUES
  ('John', 1, 5, 'And the light shineth in darkness; and the darkness comprehended it not.'),
  ('D&C', 88, 49, 'The light shineth in darkness, and the darkness comprehendeth it not; nevertheless, the day shall come when you shall comprehend even God, being quickened in him and by him.'),
  ('D&C', 93, 28, 'He that keepeth his commandments receiveth truth and light, until he is glorified in truth and knoweth all things.'),
  ('Mosiah', 16, 9, 'He is the light and the life of the world; yea, a light that is endless, that can never be darkened; yea, and also a life which is endless, that there can be no more death.'),
  ('Bob', 4, 20, 'Thou shalt be awesome.');

INSERT INTO scriptures_topics(scripture, topic) VALUES 
  (1,1),
  (1,3),
  (2,2),
  (3,3),
  (4,1);

SELECT s.book, s.chapter, s.verse, st.scripture, st.topic, t.id, t.topic
FROM scriptures s 
INNER JOIN scriptures_topics st ON s.id = st.scripture
INNER JOIN topics t on st.topic = t.id;

-- SELECT t.topic
-- FROM scriptures_topics st
-- INNER JOIN topics t ON st.topic = t.id
-- WHERE st.scripture = 1;

SELECT t.topic AS topic FROM scriptures_topics st INNER JOIN topics t ON st.topic = t.id WHERE st.scripture = 1;