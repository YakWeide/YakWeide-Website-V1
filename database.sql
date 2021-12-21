CREATE DATABASE yakweide;

CREATE TABLE account (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
username VARCHAR(30) NOT NULL,
password VARCHAR(256) NOT NULL,
email VARCHAR(50),
discord_id int(4),
discord_username VARCHAR(30),
minecraft_username VARCHAR(30),
minecraft_uuid int(128),
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

Select * from account;

Select id from account where username = '';

Select password from account where id = '';

Select reg_date from account where id = '';

Insert into account (username, password, email, discord_id, discord_username, minecraft_username, minecraft_uuid) values ('', '', '', '', '', '', '');

Insert into account (username, password, email) values ('', '', '');

UPDATE account set minecraft_username = '', minecraft_uuid = '' where id = '';
UPDATE account set discord_username = '', discord_id = '' where id = '';

UPDATE account set password = '' where id = '';

