# Destiny
Installing Destiny in the Web Server
------------------------------------
Requirements:

Web Service

PHP

MySQL Server 

------------------------------------
Installation:

1. Copy the 'Destiny' folder in the Web server default directory.

2. Inside Destiny directory find the following files:

config.php
loginc.php
signupc.php

Open them with a text editor like notepad, enter your MySQL sever Host, Username and Password in each file inside the "" quotation marks and save.

$host       = "";
$username   = "";
$password   = "";

3. Open your MySQL server command line and create a database named 'Destiny'.

CREATE DATABASE Destiny;

4. Close the MySQL command line and enter the command line console of the server and enter the following command.

mysql -u [your mySQL username] -p[your mysql password] Destiny < [the path to destiny.sql file inside DestinyProject folder]

for Example

mysql -u root -p123 Destiny < C:\DestinyProject\destiny.sql


Congratulations! the installation is done!

In case of any enquiry contact me 

abfrad@gmail.com
Abdullah Frahmand

-----------------------------------------

2013 Destiny 
