DROP TABLE IF EXISTS article ;
CREATE TABLE article (id_article INT(25) AUTO_INCREMENT NOT NULL,
titrearticle CHAR(25),
contenuarticle VARCHAR(250),
PRIMARY KEY (id_article)) ENGINE=InnoDB;

