CREATE DATABASE IF NOT EXISTS fresh_tomatos;
USE fresh_tomatos;
CREATE TABLE IF NOT EXISTS movies (
	title       VARCHAR(1000),
	rating      INT,
	lengthofmovie INT,
	description VARCHAR(1000),
	photo       VARCHAR(1000)
);

INSERT INTO	movies VALUES ("Finding Dory", 8, 102, "When the newly crowned Queen Elsa accidentally uses her power to turn things into ice to curse her home in infinite winter, her sister, Anna, teams up with a mountain man, his playful reindeer, and a snowman to change the weather condition.", "http://ia.media-imdb.com/images/M/MV5BMTQ1MjQwMTE5OF5BMl5BanBnXkFtZTgwNjk3MTcyMDE@._V1_UX182_CR0,0,182,268_AL_.jpg");
INSERT INTO	movies VALUES ("High School Musical", 5, 98, "Troy and Gabriella - two teens who are worlds apart - meet at a karaoke contest and discover their mutual love for music.", "http://ia.media-imdb.com/images/M/MV5BMTI4NzMzMDM3Nl5BMl5BanBnXkFtZTcwNjgzMjU0MQ@@._V1_UY268_CR8,0,182,268_AL_.jpg");
INSERT INTO	movies VALUES ("Into the Woods", 6, 125, "A witch tasks a childless baker and his wife with procuring magical items from classic fairy tales to reverse the curse put on their family tree.", "http://ia.media-imdb.com/images/M/MV5BMTY4MzQ4OTY3NF5BMl5BanBnXkFtZTgwNjM5MDI3MjE@._V1_UX182_CR0,0,182,268_AL_.jpg");
INSERT INTO	movies VALUES ("Cinderella", 7, 105, "When her father unexpectedly passes away, young Ella finds herself at the mercy of her cruel stepmother and her scheming step-sisters. Never one to give up hope, Ella's fortunes begin to change after meeting a dashing stranger.", "http://ia.media-imdb.com/images/M/MV5BMjMxODYyODEzN15BMl5BanBnXkFtZTgwMDk4OTU0MzE@._V1_UX182_CR0,0,182,268_AL_.jpg");
INSERT INTO	movies VALUES ("Star Wars VII: The Force Awakens", 8, 96, "Three decades after the defeat of the Galactic Empire, a new threat arises. The First Order attempts to rule the galaxy and only a ragtag group of heroes can stop them, along with the help of the Resistance.", "http://ia.media-imdb.com/images/M/MV5BOTAzODEzNDAzMl5BMl5BanBnXkFtZTgwMDU1MTgzNzE@._V1_SY317_CR0,0,214,317_AL_.jpg");