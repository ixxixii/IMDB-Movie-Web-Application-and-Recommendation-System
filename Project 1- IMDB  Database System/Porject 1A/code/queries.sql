#Give me the names of all the actors in the movie 'Die Another Day'
SELECT CONCAT(Actor.first, ' ', Actor.Last) as ActorNames
FROM Actor, Movie, MovieActor
WHERE Movie.title = 'Die Another Day' and MovieActor.mid = Movie.id and Actor.id = MovieActor.aid;

#Give me the count of all the actors who acted in multiple movies.
SELECT COUNT(*) as Total 
FROM(SELECT aid
from MovieActor
GROUP by aid
having count(*) > 1) multiactorid;

#Give me the title of movies that sell more than 1,000,000 tickets.
SELECT Movie.title as Titles
FROM Movie, Sale
WHERE Movie.id = Sale.mid and ticketsSold > 1000000;

#Give me the title of movies whose imdb raing are greater than 95 order by imdb rating.
SELECT Movie.title as Titles
FROM Movie, MovieRating
WHERE Movie.id = MovieRating.mid and imdb > 95
ORDER BY imdb desc


#Give me the names of all the people who are both actors and directors.
SELECT CONCAT(S.first,' ',S.last)
FROM Actor S,Director E
WHERE S.id=E.id;

