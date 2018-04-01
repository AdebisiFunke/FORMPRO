

CREATE DATABASE UsingForm;

/************************************************************
Ctrate User  TABLE
*************************************************************/
CREATE TABLE Users
(
user_id  int(10)	NOT NULL AUTO_INCREMENT,
nemail 	varchar(60)	NOT NULL,
pass 	char(40)	NOT NULL,
first_name 	varchar(20)	NOT NULL,
last_name 	varchar(20)	NOT NULL,
registration_date 	timestamp	NOT NULL,
tnumber 	varchar(20)	NOT NULL,
anumber 	varchar(20)	NOT NULL,
birth_date 	date	NOT NULL,
PRIMARY KEY(user_id),
INDEX (nemail)
)ENGINE = MYISAM;
