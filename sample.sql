CREATE TABLE sample
(
   sample_id    INT NOT NULL AUTO_INCREMENT,
   name         VARCHAR(128) NOT NULL,
   email        VARCHAR(128) NOT NULL,
   password     VARCHAR(256) NOT NULL,
   dropdown     VARCHAR(128) NOT NULL,
   checkbox     BOOLEAN NOT NULL,
   radio        INT NOT NULL,
   textarea     TEXT NOT NULL,
   PRIMARY KEY  (sample_id)
);