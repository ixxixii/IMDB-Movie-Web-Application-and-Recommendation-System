-- Three Primary Key Constraints

-- 1. Inserting two Movies with the same id (primary key)
-- id 1881 has already exixted in Movie Table
-- (1881,"Honeymoon Academy",1990,"PG-13","Fidelity Cine TV")
-- ERROR 1062 (23000): Duplicate entry '1881' for key 'PRIMARY'
INSERT INTO Movie VALUES (1881,"The Jungle Book",2016,"PG-13","Walt Disney Pictures");

-- 2. Inserting two Actors with the same id (primary key)
-- id 1 has already existed in Actor Tabble
-- (1,"A","Isabelle","Female",19750525,\N)
-- ERROR 1062 (23000): Duplicate entry '1' for key 'PRIMARY'
INSERT INTO Actor VALUES (1, 'Neel', 'Sethi', 'Male', '2003-12-22', \N);

-- 3. Inserting two Directors with the same id (primary key)
-- id 37146 has already existed in Director Table
-- (37146,"Lipstadt","Aaron",19521112,\N)
-- ERROR 1062 (23000): Duplicate entry '37146' for key 'PRIMARY'
INSERT INTO Director VALUES (37146, 'Jon', 'Favreau', '1966-10-19', \N);


-- Six referential integrity constraints

-- 1. Sale : mid in Sale should appear in Moive id
-- ERROR 1452 (23000): Cannot add or update a child row: a foreign key constraint fails 
-- `CS143`.`Sale`, CONSTRAINT `Sale_ibfk_1` FOREIGN KEY (`mid`) REFERENCES `Movie` (`id`))
INSERT INTO Sale VALUES (1000000, 0, 0);

-- 2. MovieGenre : mid in MovieGenre should appear in Moive id
-- ERROR 1452 (23000) at line 24: Cannot add or update a child row: a foreign key constraint fails 
-- `CS143`.`MovieGenre`, CONSTRAINT `MovieGenre_ibfk_1` FOREIGN KEY (`mid`) REFERENCES `Movie` (`id`))
INSERT INTO MovieGenre VALUES (1000000, "Comedy");

-- 3. MovieDirector : mid in MovieDirector should appear in Moive id
-- ERROR 1452 (23000) at line 29: Cannot add or update a child row: a foreign key constraint fails 
-- (`CS143`.`MovieDirector`, CONSTRAINT `MovieDirector_ibfk_1` FOREIGN KEY (`mid`) REFERENCES `Movie` (`id`))
INSERT INTO MovieDirector VALUES (1000000, 37146);

-- 4. MovieDirector : did in MovieDirector should appear in Director id
-- ERROR 1452 (23000) at line 34: Cannot add or update a child row: a foreign key constraint fails 
-- `CS143`.`MovieDirector`, CONSTRAINT `MovieDirector_ibfk_2` FOREIGN KEY (`did`) REFERENCES `Director` (`id`))
INSERT INTO MovieDirector VALUES (1881, 1000000);

-- 5. MovieActor : mid in MovieActor should appear in Movie id
-- ERROR 1452 (23000) at line 39: Cannot add or update a child row: a foreign key constraint fails 
-- (`CS143`.`MovieActor`, CONSTRAINT `MovieActor_ibfk_1` FOREIGN KEY (`mid`) REFERENCES `Movie` (`id`))
INSERT INTO MovieActor VALUES (1000000, 1, "Mowgli");


-- 6. MovieRating : mid in MovieRating should appear in Movie id
-- ERROR 1452 (23000) at line 49: Cannot add or update a child row: a foreign key constraint fails 
INSERT INTO MovieRating VALUES (1000000, 100, 100);


-- Three CHECK constraints

-- 1. Check that the Movie id is greater than zero
#INSERT INTO Movie VALUES (-1,"The Jungle Book",2016,"PG-13","Walt Disney Pictures");

-- 2. Check that the Actor's ID is greater than zero
#INSERT INTO Actor VALUES (-1, 'Neel', 'Sethi', 'Male', '2003-12-22', \N);

-- 3. Check that the Director's id is greater than zero
#INSERT INTO Director VALUES (-1, 'Jon', 'Favreau', '1966-10-19', \N);



