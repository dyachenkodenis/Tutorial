<?php
require('../inc/test.php');

//MySQL Commands

//To login (from unix shell) use -h only if needed.
$sql = "[mysql dir]/bin/mysql -h hostname -u root -p";
//Create a database on the sql server.
$sql1 = "create database [databasename];";
//List all databases on the sql server.
$sql2 = "show databases;";
