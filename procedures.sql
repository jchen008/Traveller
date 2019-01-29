# Zhuo Chen
# HW7
# 11/18/2018

#USE zhc008DB;

# Create the procedure which return the hiking trial or building start by the prefix given by user
DROP PROCEDURE IF EXISTS findAttractions;
DELIMITER |
CREATE PROCEDURE findAttractions(	
	IN startWith 		VARCHAR(50),
    IN country			VARCHAR(50))
BEGIN		
	SELECT *
	FROM
	(SELECT 	Trail_Name AS name, 'Hiking_Trail' AS type
	FROM 		Hiking_Trail
	WHERE		NA_Name IN (SELECT TS_Name
											FROM Tourist_Spot
											WHERE Country_Name = country)
	UNION 
	SELECT 	Building_Name AS name, 'Building' AS type
	FROM 		Building
	WHERE		CA_Name IN (SELECT TS_Name
											FROM Tourist_Spot
											WHERE Country_Name = country)) AS T
	WHERE T.name LIKE CONCAT(startWith,'%');
END |
DELIMITER ;

# Create the procedure which return the resturants opened in both natural and cultural attractions and have a average star given by user requirement
DROP PROCEDURE IF EXISTS findResturants;
DELIMITER |
CREATE PROCEDURE findResturants(	
	IN reqr 		INT)
BEGIN		
	SELECT n1.Resturant_Name, AVG(n3.Star) AS Avg_Star
	FROM CA_Offer n1 INNER JOIN NA_Offer n2 
	ON n1.Resturant_Name = n2.Resturant_Name 
	INNER JOIN Resturant n3
	ON n1.Resturant_Name = n3.Resturant_Name
	GROUP BY n1.Resturant_Name
	HAVING Avg_Star > reqr;
END |
DELIMITER ;

# Create the procedure which return the hiking trail based on the difficulty given by user requirement
DROP PROCEDURE IF EXISTS findTrails;
DELIMITER |
CREATE PROCEDURE findTrails(	
	IN difficulty 		VARCHAR(50))
BEGIN		
	SELECT *
	FROM (SELECT H.Trail_Name, N.Average_Temp,
	CASE
		WHEN H.Distance < 3 THEN 'Short'
		WHEN H.Distance >= 3 AND H.Distance < 7 THEN 'Medium'
		ELSE 'Long'
	END AS Difficulty
	FROM Hiking_Trail H, Natural_Attractions N
	WHERE H.NA_Name = N.NA_Name) AS T
	WHERE T.Difficulty = difficulty;
END |
DELIMITER ;

# Database Modification, add Country to Country Table
DROP PROCEDURE IF EXISTS addCountry;
DELIMITER |
CREATE PROCEDURE addCountry(	
	IN addName 		VARCHAR(50),    
	IN addPopulation 		INT)
BEGIN	
	INSERT INTO Country (Country_Name, Population)
	VALUES(addName, addPopulation);
END; |
DELIMITER ;

# Database Modification, add all other remaining Resturants which had not been open at a tourist attraction given by user in CA_Offer Table
DROP PROCEDURE IF EXISTS openResturant;
DELIMITER |
CREATE PROCEDURE openResturant(	
	IN restName		VARCHAR(50))
BEGIN	
	INSERT INTO `CA_Offer` (CA_Name, Resturant_Name, Num)
	SELECT DISTINCT c.CA_Name, r.Resturant_Name, 0
	FROM CA_Offer c, Resturant r
	WHERE c.CA_Name = restName
	AND r.Resturant_Name NOT IN (SELECT Resturant_Name
															FROM CA_Offer
															WHERE  CA_Name = restName);
END; |
DELIMITER ;






