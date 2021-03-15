/* --- These commands will only work on your localhost ---*/

CREATE USER 'web289user'@'localhost' identified by '8N=YwFDn4]';
GRANT ALTER ROUTINE, SHOW VIEW, INDEX, UPDATE, ALTER, GRANT OPTION, CREATE TEMPORARY TABLES, EVENT, INSERT, REFERENCES, CREATE ROUTINE, SELECT, LOCK TABLES, CREATE VIEW, EXECUTE, TRIGGER, CREATE, DELETE, DROP ON `dbiuluarg3kqiv`.* TO 'web289user'@'localhost';

/* You need this line if you are using MySQL 8+ */
ALTER USER 'web289user'@'localhost' IDENTIFIED WITH mysql_native_password BY '8N=YwFDn4]';

FLUSH PRIVILEGES;FLUSH PRIVILEGES;
