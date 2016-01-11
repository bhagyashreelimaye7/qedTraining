# qedTraining
Database structure of the project:

All the connection variables are declared and defined in qedinfo and qedConnectDb files.
The creation of the tables will be done when the qedInstall.php is run on the browser.

The database contains of 2 tables, Users and Role

The Users table has all the required attributes of a user.
Role table has all the roles and their ids.
The database structure is as follows:-


Users:
+----------+-------------+------+-----+---------+----------------+
| Field    | Type        | Null | Key | Default | Extra          |
+----------+-------------+------+-----+---------+----------------+
| id       | int(11)     | NO   | PRI | NULL    | auto_increment |
| fname    | varchar(30) | YES  |     | NULL    |                |
| lname    | varchar(30) | YES  |     | NULL    |                |
| email    | varchar(30) | YES  |     | NULL    |                |
| password | varchar(32) | YES  |     | NULL    |                |
| roleid   | int(11)     | YES  | MUL | NULL    |                |
+----------+-------------+------+-----+---------+----------------+
 where,
 roleid is a foreign key which is a primary key of Role table.

Role:

+----------+-------------+------+-----+---------+----------------+
| Field    | Type        | Null | Key | Default | Extra          |
+----------+-------------+------+-----+---------+----------------+
| roleid   | int(11)     | NO   | PRI | NULL    | auto_increment |
| roleName | varchar(30) | YES  |     | NULL    |                |
+----------+-------------+------+-----+---------+----------------+

 