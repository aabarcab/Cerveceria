CREATE DEFINER=`root`@`localhost` PROCEDURE `UPD_CANTON`(P_DESCRIPCION VARCHAR(45),
															P_NEW_DESCRIPCION VARCHAR(45),
                                                            P_NEW_ID_PROVINCIA INT(11))
BEGIN
	UPDATE CANTON
SET DESCRIPCION = P_NEW_DESCRIPCION,
	ID_PROVINCIA = P_NEW_PROVINCIA
    WHERE DESCRIPCION = P_DESCRIPCION;
COMMIT;
END