# Zhuo Chen
# HW7
# 11/18/2018

#USE zhc008DB;


-- Use for Traveller --
-- trigger that creates a new resturant profile when a natural attraction opens a new resturants which has not registered in the resturant table
DROP TRIGGER IF EXISTS ReviewTrigger;
DELIMITER |
CREATE Trigger ReviewTrigger
AFTER INSERT ON Comment
FOR EACH ROW
BEGIN
	Update Tourist_Spot
	SET Total_Score = Total_Score + New.Star, Total_Review = Total_Review + 1, Review = Total_Score / Total_Review
	WHERE TS_Name = New.Attraction;
	END; |
DELIMITER ;


-- Use for Homework --

-- Check that the Hiking Trail temperature change is smaller than 10 degree 
DROP TRIGGER IF EXISTS TempChangeCheckUpdateTrigger;
DELIMITER |
CREATE TRIGGER TempChangeCheckUpdateTrigger
	BEFORE UPDATE ON Hiking_Trail
	FOR EACH ROW
	BEGIN
		IF (ABS(NEW.Average_Time - OLD.Average_Time)  > 10) THEN
			SET NEW.Average_Time = OLD.Average_Time;
		END IF;
	END; |
DELIMITER ;

-- trigger that will store the change to Resturant Star
DROP TRIGGER IF EXISTS StarChangesTrigger;
DELIMITER |
CREATE Trigger StarChangesTrigger
AFTER UPDATE ON Resturant
FOR EACH ROW
BEGIN
	IF (NEW.Star != OLD.Star) THEN
		INSERT IGNORE INTO StarChange (Resturant, oldStar, newStar, userChange, dateChanged)
        VALUES(OLD.Resturant_Name, OLD.Star, NEW.Star, CURRENT_USER(), NOW());
	END IF;
END; |
DELIMITER ;

-- trigger that creates a new resturant profile when a natural attraction opens a new resturants which has not registered in the resturant table
DROP TRIGGER IF EXISTS NAOfferChangesTrigger;
DELIMITER |
CREATE Trigger NAOfferChangesTrigger
BEFORE INSERT ON NA_Offer
FOR EACH ROW
BEGIN
	IF (NEW.Resturant_Name NOT IN (SELECT Resturant_Name FROM Resturant)) THEN
		INSERT IGNORE INTO Resturant (Resturant_Name, Food_Type, Sales_Millions, Number_of_Units, Star, Resturant_Info)
        VALUES(New.Resturant_Name, NULL, NULL, NULL, NULL, NULL);
	END IF;
END; |
DELIMITER ;

SHOW TRIGGERS;


