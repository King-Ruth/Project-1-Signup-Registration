create database signup;
use signup;
create table people(ID int not null primary key auto_increment, username varchar(50) not null unique, 
passcode varchar(255) not null);
/*insert into people(username, passcode) values ("here", "whatever");
drop table people;*/
select * from people;
