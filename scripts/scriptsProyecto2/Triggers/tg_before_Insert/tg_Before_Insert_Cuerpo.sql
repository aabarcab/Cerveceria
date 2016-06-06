DELIMITER $$
CREATE TRIGGER proyecto2.tg_Before_Insert_Cuerpo
BEFORE INSERT ON proyecto2.cuerpo
FOR EACH ROW
BEGIN
	DECLARE vUser varchar(50);
   -- Find username of person performing the INSERT into table
   SELECT USER() INTO vUser;
  SET NEW.created_By = vUser;
  Set NEW.creation_date = now();
END;
$$
DELIMITER ;