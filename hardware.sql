drop database if exists blog_hardware;
create database blog_hardware;
use blog_hardware;

create table users (
	ID INT primary key auto_increment,
	user varchar(20),
	password varchar (255)
);

create table entries (
	ID INT primary key auto_increment,
	Title VARCHAR(50),
	Category INT,
	Author INT,
	Content text,
	DATE date,
	Visibility bool,
	Open bool,
	foreign key (Author) references users(ID)
	on delete cascade
);

create table categories (
	ID INT primary key auto_increment,
	Name VARCHAR(50),
	Parent int,
	foreign key (Parent) references categories(ID)
);

create table comments (
	ID INT primary key auto_increment,
	User INT,
	Entry INT,
	Content tinytext,
	Parent int,
	foreign key (User) references users(ID)
	on delete cascade,
	foreign key (Entry) references entries(ID)
	on delete cascade
);