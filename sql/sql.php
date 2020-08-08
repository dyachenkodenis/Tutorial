<?php
require('../inc/test.php');

//MySQL Commands

//To login (from unix shell) use -h only if needed.
$sql = "[mysql dir]/bin/mysql -h hostname -u root -p";
//Create a database on the sql server.
$sql1 = "create database [databasename];";
//List all databases on the sql server.
$sql2 = "show databases;";
//Switch to database.
$sql3 = "use [db name];";
//To see all the tables in the db
$sql4 = "show tables";
//To see database's field formats.
$sql5 = "describe [table name];";
//To delete a db.
$sql6 = "drop database [database name];";
//To delete a table
$sql7 = "drop table [table name];";
//Show all data in a table
$sql8 = "SELECT * FROM [table name];";
//Return the columns and column information pertaining to the designated table.
$sql9 = "show columns from [table name];";
//Show certain selected rows with the value "whatever".
$sql10 = "SELECT * FROM [table name] WHERE [field name] = 'whatever';";
//Show all records containing the name "Bob" AND the phone_number '3444444'.
$sql11 = "SELECT * FROM [table name] WHERE name = 'Bob' AND phone_number = '3444444';";
//Show all records not containing the name 'Bob' AND the phone_number '3444444' order by the phone number field.
$sql12 = "SELECT * FROM [table name] WHERE name != 'Bob' AND  phone_number = '3444444' order by phone_number;";
//Show all records starting with the letters 'bob' AND the phone_num '3444444'.
$sql13 = "SELECT * FROM [table name] WHERE name like 'Bob%' AND phone_number = '3444444';";
//Use a regular expression to find records. Use 'REGEXP BINARY' to forse case-sensitivity. This finfs any record begining with a.
$sql14 = "SELECT * FROM [table name] WHERE rec RLIKE '^a$';";
//Show unique records.
$sql15 = "SELECT DISTINCT [column name] FROM [table name];";
//Show selected records sorted in an ascending (asc) or descending (desc).
$sql16 = "SELECT [col1],[col2] FROM [table name] ORDER BY [col2] DESC;";
//Count rows
$sql17 = "SELECT COUNT(*) from [table name];";
//Switch to the msql db. Create a new user.
$sql18 = "INSERT INTO [table name] (Host, User, Password) VALUES('%', 'user', PASSWORD('password'));";
//Change a users password. (from unix shell).
$sql19 = "[mysql dir]/bin/mysqladmin -u root -h [hostname (example.com)] -p passord 'new-password';";
//Change a users password. (from MySQL prompt).
$sql20 = "SET PASSWORD FOR 'user'@'hostname' = PASSWORD('passwordhere');";
//Switch to mysqli db. Give user privilagies for a db.
$sql21 = "INSERT INTO [table name] (Host, Db, User, Select_priv, Insert_priv, Update_priv, Delete_priv, Create_priv, Drop_priv) VALUES ('%', 'db', 'user', 'Y', 'Y', 'Y', 'Y', 'Y', 'N');";
//To update info already in a table.
$sql22 = "UPDATE [table name] SET Select_priv = 'Y', Insert_priv = 'Y' WHERE [field_name] = 'user';";
//Delete a row(s) from a table.
$sql23 = "DELETE FROM [table_name] WHERE [field_name] = 'whatever';";
//Update database permissions/privilages.
$sql24 = "FLUSH PRIVILEGES;";
//Delete a column
$sql25 = "alter table [table_name] drop column [column_name];";
//Add a new column to db.
$sql26 = "alter table [table_name] add column [new column name] varchar (20);";
//Change coumn name.
$sql27 = "alter table [table_name] change [old column name][new column name] varchar(50);";
//Make a unique column so you get no dupes.
$sql28 = "alter table [table_name] add unique ([column name]);";
//Make a column bigger.
$sql29 = "alter table [table_name] modify [column_name] VARCHAR(3);";
//Delete unique from table.
$sql30 = "alter table [table_name] drop index [column_name];";
//Load a CSV file into a table.
$sql31 = "LOAD DATA INFILE '/tmp/filename.csv' replace INTO TERMINATED BY '\n' (field1,field2,field3);";
//Dump all databases for backup. Backup file is sql commands to recreate all db's.
$sql32 = "[mysql dir]/bin/mysqldump -u root -p password --opt >/tmp/alldatabases.sql";
//Dump one database for backup.
$sql33 = "[mysql dir]/bin/mysqldump -u username -p password --databases databasename >/tmp/databasename.sql";
//Dump a table from a batabase.
$sql34 = "[mysql dir]/bin/mysqldump -c -u username -p password databasename tablename >/tmp/databasename.tablename.sql";
//Restore database (or database table) from backup.
$sql35 = "[mysql dir]/bin/mysql -u username -p password databasename < /tmp/databasename.sql";
//Create Table Example 1.
$sql36 = "CREATE TABLE [table name] (firstname VARCHAR(20), middleintial VARCHAR(3), lastname VARCHAR(35), suffix VARCHAR(3), officeid VARCHAR(10), userid VARCHAR(15), username VARCHAR(8), email officied VARCHAR(35), phone VARCHAR(25), groups VARCHAR(15), datestamp DATE, timestamp time, pgpemail VARCHAR(255));";
//Create Table Example 2.
$sql27 = "create table [table name] (personid int(50) not null auto_increment primary key, firstname varchar(35), middlename varchar(50), lastname varchar(50) default 'bato');";
