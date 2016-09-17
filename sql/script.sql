create database aboutBooks CHARACTER SET utf8 COLLATE utf8_general_ci;
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
    creds int not null,
    primary key(id)
);
create table Writer(
	id int not null auto_increment,
    name text not null,
    surname text not null,
    bio text,
    moder int not null,
    primary key(id),
    foreign key(moder) references AppUser(id)
);
create table WriterComment(
	id int not null auto_increment,
    content text not null,
    writer int not null,
    user int not null,
    primary key(id),
    foreign key(writer) references Writer(id),
    foreign key(user) references AppUser(id)
);
create table Genre(
	id int not null auto_increment,
    name text not null,
    primary key(id)
);
create table Book(
	id int not null auto_increment,
    title text not null,
    description text not null,
    writer int not null,
    foreign key(writer) references Writer(id),
    genre int not null,
    foreign key(genre) references Genre(id),
    moder int not null,
    foreign key(moder) references AppUser(id),
    primary key(id)
);
create table BookComment(
	id int not null auto_increment,
    content text not null,
    book int not null,
    user int not null,
    primary key(id),
    foreign key(book) references Book(id),
    foreign key(user) references AppUser(id)
);

insert into AppUser(login, password, creds) values('root', md5('root'), 1);