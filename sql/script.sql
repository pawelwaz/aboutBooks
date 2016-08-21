use aboutBooks;
create user if not exists 'aboutBooks'@'%' identified by 'aboutBooks';
create user if not exists 'aboutBooks'@'localhost' identified by 'aboutBooks';
grant all privileges on aboutBooks.* to 'aboutBooks'@'%';
grant all privileges on aboutBooks.* to 'aboutBooks'@'localhost';
flush privileges;
create table AppUser(
	id int not null auto_increment,
    login varchar(32) not null,
    password varchar(32) not null,
    primary key(id)
);