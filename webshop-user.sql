GRANT SELECT, INSERT, UPDATE, DELETE, CREATE, FILE, INDEX,
 ALTER, CREATE TEMPORARY TABLES, EXECUTE, CREATE VIEW, SHOW VIEW, 
REATE ROUTINE, ALTER ROUTINE, EVENT, TRIGGER ON *.* TO `Webshop_user`@`%` 
IDENTIFIED BY PASSWORD '*3974FB80987650CDB496BAFBC40E42DB0D9A45A4';

GRANT ALL PRIVILEGES ON `webshop`.* TO `Webshop_user`@`%`;