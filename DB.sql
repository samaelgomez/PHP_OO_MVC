DROP TABLE if exists category_list;
DROP TABLE if exists categories;
CREATE TABLE if not exists categories (
	id int AUTO_INCREMENT,
    image_path varchar(255),
    product_category varchar(255),
    PRIMARY KEY (id)
);
INSERT INTO categories (image_path, product_category)
VALUES ("view/img/bg-img/50.jpg","fighting"),
	   ("view/img/bg-img/51.jpg","R18"),
	   ("view/img/bg-img/52.jpg","adventure"),
       ("view/img/bg-img/53.jpg","gore"),
       ("view/img/bg-img/54.jpg","rpg");

DROP TABLE if exists videogames;
CREATE TABLE videogames (
  name varchar(255) NOT NULL,
  pegi int DEFAULT NULL,
  edition varchar(255) DEFAULT NULL,
  languages varchar(255) DEFAULT NULL,
  videogame_image varchar(255) DEFAULT ("view/img/bg-img/7.jpg"),
  PRIMARY KEY (name)
);
INSERT INTO videogames (name, pegi, edition, languages, videogame_image)
VALUES ("Tekken 7", "16", "deluxe", "engish", "view/img/bg-img/201.jpg"),
	   ("Soul Calibur VI", "16", "standard", "english", "view/img/bg-img/202.jpg"),
       ("Danganronpa", "16", "standard", "spanish", "view/img/bg-img/203.jpg"),
       ("Dark Souls", "18", "collectionist", "english, spanish, italian", "view/img/bg-img/204.jpg"),
       ("Doki Doki Literature Club", "18", "standard", "english, spanish", "view/img/bg-img/205.jpg"),
       ("Final Fantasy", "12", "deluxe", "english", "view/img/bg-img/206.jpg"),
       ("Ghost Trick: Phantom Detective", "12", "standard", "english, italian", "view/img/bg-img/207.jpg"),
       ("Kingdom Hearts", "12", "standard", "english, italian, spanish", "view/img/bg-img/208.png"),
       ("Nine Hours, Nine Persons, Nine Doors", "18", "standard", "english", "view/img/bg-img/209.jpg"),
       ("Phoenix Wright: Ace Attorney", "7", "standard", "english, spanish", "view/img/bg-img/210.jpg"),
       ("Professor Layton and the Curious Village", "3", "standard", "english, italian, spanish", "view/img/bg-img/211.jpg");
CREATE TABLE if not exists category_list (
	category_id int,
    videogame varchar(255),
    PRIMARY KEY (category_id, videogame),
    CONSTRAINT FK_Category FOREIGN KEY (category_id) REFERENCES categories(id)
    ON DELETE CASCADE ON UPDATE CASCADE,
    CONSTRAINT FK_Videogame FOREIGN KEY (videogame) REFERENCES videogames(name)
    ON DELETE CASCADE ON UPDATE CASCADE
);
INSERT INTO category_list (category_id, videogame)
VALUES (4,"Danganronpa"),
       (3,"Dark Souls"),
       (4,"Dark Souls"),
       (2,"Doki Doki Literature Club"),
       (4,"Doki Doki Literature Club"),
       (3,"Final Fantasy"),
       (5,"Final Fantasy"),
       (3,"Ghost Trick: Phantom Detective"),
	   (3,"Kingdom Hearts"),
       (5,"Kingdom Hearts"),
       (2,"Nine Hours, Nine Persons, Nine Doors"),
       (3,"Phoenix Wright: Ace Attorney"),
       (3,"Professor Layton and the Curious Village"),
       (1,"Soul Calibur VI"),
       (1,"Tekken 7");