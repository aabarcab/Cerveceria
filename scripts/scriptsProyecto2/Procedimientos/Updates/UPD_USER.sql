CREATE DEFINER=`root`@`localhost` PROCEDURE `UPD_USUARIO`(P_USER VARCHAR(45), P_NEW_USER VARCHAR(45),
															P_NEW_PASSWORD VARCHAR(45))

	UPDATE USUARIO
SET USER = P_NEW_USER,
	PASSWORD = P_NEW_PASSWORD
    WHERE USER = P_USER;
