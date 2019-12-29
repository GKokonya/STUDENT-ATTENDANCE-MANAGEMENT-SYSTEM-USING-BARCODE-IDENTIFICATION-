 DROP DATABASE IF EXISTS `final`;
CREATE DATABASE IF NOT EXISTS `final`;
USE `final`;

create table course(
id int(5) primary key AUTO_INCREMENT,
course_name  varchar(30) not null unique,
course_unit_cost int(10) not null
);

insert into course values('1','N/A','0');
insert into course values('2','BBIT','10000000');

Create table users(
user_id int(6) not null primary key AUTO_INCREMENT,
first_name  varchar(20) not null,
last_name varchar(20) not null,
email varchar(50) not null unique,
username int(6) not null unique,
password varchar(200) not null,
user_type varchar(20) not null,
course_name  varchar(30) not null

);

INSERT INTO `users` (`user_id`, `first_name`, `last_name`, `email`, `username`, `password`, `user_type`, `course_name`) VALUES

(1, 'James', 'Kokonya', 'kokonyajames@gmail.com', 112019, 'b4cc344d25a2efe540adbf2678e2304c', 'administrator', 'N/A');

create table unit(
id int(5) primary key AUTO_INCREMENT,
unit_code varchar(10) not null unique,
unit_name varchar(50) not null unique,
course_name varchar(30) not null,
lecturer int(6) not null,
year_of_study varchar(20) not null,
semester varchar(20) not null,
unit_cost int(10) not null
);

INSERT INTO unit(id,unit_code,unit_name,course_name,lecturer,year_of_study,semester,unit_cost) VALUES
(1, 'BBT1101', 'Introduction_to_Programing','BBIT', 11111, 'first_year', 'first_semester', '20000');

create table unit_enrollment(
unit_enrol_id int(100) not null primary key,
student_username  int(6)not null,
unit_name varchar(50) not null

);



create table class_attendance(
week int(2) not null,
student_username  int(6) not null,
unit_name varchar(50) not null,     
attendance_date timestamp not null

);

 
alter table users add foreign key(course_name) references course(course_name);
alter table unit add foreign key(lecturer) references users(username);
alter table unit add foreign key(course_name) references users(course_name);
alter table unit_enrollment add foreign key(unit_name) references unit(unit_name);
alter table unit_enrollment add foreign key(student_username) references users(username);
alter table class_attendance add foreign key(unit_name) references unit_enrollment(unit_name);
alter table class_attendance add foreign key(student_username) references unit_enrollment(student_username);