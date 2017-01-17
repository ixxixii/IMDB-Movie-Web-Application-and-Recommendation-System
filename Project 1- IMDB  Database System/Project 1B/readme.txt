This folder contains 3 subfolders in Project 1B by Zihao Zhang (04593253)
     +- readme.txt
     |
     +- team.txt
     |   
     +- sql (2 files in total)
	 |
	 +- create.sql
	 |
	 +- load.sql
     |
     +- www (13 files in total) 
	 |
	 +- index.php 
	 |
	 +- search.php
	 |
	 +- actors.php
	 |
	 +- addActorDirector.php
	 |
	 +- addMovieActor.php
	 |
	 +- addMovieActorLater.php
	 |
	 +- addMovieDirector.php
	 |
	 +- addMovieInfo.php
	 |
	 +- directors.php
	 |
	 +- movies.php
	 |
	 +- reviewRate.php
	 |
	 +- showActor.php
	 |
	 +- showMovie.php
     |
     +- testcase (5 files in total)
         |
         +- t1.html
	 |
         +- t2.html
         |
         +- t3.html
         |
         +- t4.html
         |
         +- t5.html

‘sql’ contains your (revised) create.sql and load.sql files from project 1A.
‘www’ contains all the source code and other supplementary files of your web site.
‘testcase’ contains five selenium test case files, named as t1.html through t5.html.
‘team.txt’ contains the UID of Zihao Zhang


—-Basic project criteria met—-:

1.Four input pages:
1)Page I1: A page that lets users to add actor and/or director information.
2)Page I2: A page that lets users to add movie information.
3)Page I3: A page that lets users to add comments to movies.
4)Page I4: A page that lets users to add "actor to movie" relation(s).
5)Page I5: A page that lets users to add "director to movie" relation(s).

2.Two browsing pages:
1)Page B1: A page that shows actor information.
	Show links to the movies that the actor was in.
2)Page B2: A page that shows movie information.
	Show links to the actors/actresses that were in this movie.
	Show the average score of the movie based on user feedbacks.
	Show all user comments.Contain "Add Comment" button which links to Page I3 where users can add comments.

3.One search page:
1)Page S1: A page that lets users search for an actor/actress/movie through a keyword search interface. 



—-New features this project has made-—:
1.A neat decoration for the UI.

2.In Search page, users could find all elements in the Movie Database match the key word and these elements are lists separated as Actor Director and Movie,with each a link to this element’s information page.

3.In add Actor/Director/Movie page,
1)A Pull-down Menu is added to the Data of Birth/Death ,to make sure the format inputted by the users is correct and be convenient to users.
2)After the users submit the form by click the add button, a feedback like ”Successfully added first last as an actor. View your profile here” will show up and the users could view the new-added item with a simple click of here(with a link to the item information page)

4.MPAA ratings of every Movies are marked with red color.

5.In the addReview page,users could simple click on the name of movie show in the top to view the information page of the specific movie,which the new-added comments are also available.

6.small revised of some other features.





















