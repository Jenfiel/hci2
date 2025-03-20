DELIMITER $$

CREATE PROCEDURE `AddGender`(IN genderName VARCHAR(255))
BEGIN
    INSERT INTO `gender` (`gender_name`) VALUES (genderName);
END$$

DELIMITER ;

DELIMITER $$

CREATE PROCEDURE `GetAllGenders`()
BEGIN
    SELECT * FROM `gender`;
END$$

DELIMITER ;
