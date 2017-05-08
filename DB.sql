create database bpptik_lat1;
use bpptik_lat1;

create table role(
	id_role int primary key auto_increment,
	role_name varchar(25) not null
);

create table account(
	account_id int primary key auto_increment,
	username varchar(20) not null,
	password varchar(32) not null,
	role int(3) not null,
	foreign key (role) references role(id_role)
);

create table user(
	user_id int primary key auto_increment,
	user_name varchar(50) not null,
	user_address varchar(255) not null,
	user_email varchar(50) not null,
	account int not null,
	foreign key (account) references account(account_id)
);

create table category(
	category_id int primary key auto_increment,
	category_name varchar(20) not null
);

create table product(
	product_id int primary key not null,
	product_name varchar(100) not null,
	product_price decimal(8,2) not null,
	product_stock int(3) not null,
	category int not null,
	foreign key (category) references category(category_id)
);

create table transaction(
	transaction_id int primary key auto_increment,
	transaction_code varchar(7) not null,
	user int not null,
	product int not null,
	quantity int(3) not null,
	transaction_date date not null,
	transaction_total decimal(12,2) not null,
	payment int(1) not null default 0,
	foreign key (user) references user(user_id),
	foreign key (product) references product(product_id)
);