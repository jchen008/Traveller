# Zhuo Chen
# HW3 
# 10/23/2018

#USE zhc008DB;
# Drop for foreign key constraint
DROP TABLE IF EXISTS CA_Offer;
DROP TABLE IF EXISTS NA_Offer;
DROP TABLE IF EXISTS StarChange;
DROP TABLE IF EXISTS Hiking_Trail;
DROP TABLE IF EXISTS Building;

DROP TABLE IF EXISTS `Tourist_Spot`;
CREATE TABLE `Tourist_Spot` (
  `TS_ID` INT NOT NULL,
  `TS_Name` VARCHAR(45) NOT NULL,
  `Country_Name` VARCHAR(45) NULL,
  `Review` FLOAT NOT NULL,
  `Total_Score` INT NOT NULL,
  `Total_Review` INT NOT NULL,
  PRIMARY KEY (`TS_ID`));

DROP TABLE IF EXISTS `Cultural_Attractions`;
CREATE TABLE `Cultural_Attractions` (
  `CA_Name` VARCHAR(45) NOT NULL,
  `TS_ID` INT NOT NULL,
  `City` VARCHAR(45) NULL,
  PRIMARY KEY (`CA_Name`));
  
    DROP TABLE IF EXISTS `Natural_Attractions`;
CREATE TABLE `Natural_Attractions` (
  `NA_Name` VARCHAR(45) NOT NULL,
  `Type_View` VARCHAR(45) NULL,
  `Average_Temp` INT NULL,
  `TS_ID` INT NOT NULL,
  PRIMARY KEY (`NA_Name`));
  
  DROP TABLE IF EXISTS `Resturant`;
CREATE TABLE `Resturant` (
  `Resturant_Name` VARCHAR(45) NOT NULL,
  `Food_Type` VARCHAR(45) NULL,
  `Sales_Millions` INT NULL,
  `Number_Of_Units` INT NULL,
  `Star` INT NULL,
  `Resturant_Info` VARCHAR(45) NULL,
  PRIMARY KEY (`Resturant_Name`));

DROP TABLE IF EXISTS `CA_Offer` ;
CREATE TABLE `CA_Offer` (
  `CA_Name` VARCHAR(45) NOT NULL,
  `Resturant_Name` VARCHAR(45) NOT NULL,
  `Num` INT NOT NULL,
  FOREIGN KEY(`CA_Name`) REFERENCES `Cultural_Attractions`( `CA_Name`),
  FOREIGN KEY(`Resturant_Name`) REFERENCES `Resturant`( `Resturant_Name`),
  PRIMARY KEY (`CA_Name`, `Resturant_Name`));

DROP TABLE IF EXISTS  `Building`;
CREATE TABLE `Building` (
  `Building_ID` INT NOT NULL,
  `Building_Name` VARCHAR(45) NULL,
  `CA_Name` VARCHAR(45) NOT NULL,
  `Year_Built` INT NULL,
  `Description` VARCHAR(45) NULL,
  `Designer` VARCHAR(45) NULL,
  FOREIGN KEY(`CA_Name`) REFERENCES `Cultural_Attractions`( `CA_Name`),
  PRIMARY KEY (`Building_ID`));

DROP TABLE IF EXISTS `Country`;
CREATE TABLE `Country` (
  `Country_Name` VARCHAR(45) NOT NULL,
  `Population` VARCHAR(45) NULL,
  PRIMARY KEY (`Country_Name`));

DROP TABLE IF EXISTS `Designer`;
CREATE TABLE `Designer` (
  `Designer` VARCHAR(45) NOT NULL,
  `Year_Born` INT NULL,
  `Gender` VARCHAR(45) NULL,
  `Personal_Info` VARCHAR(45) NULL,
  `Country_Name` VARCHAR(45) NULL,
  PRIMARY KEY (`Designer`));
  
DROP TABLE IF EXISTS `Hiking_Trail`;
CREATE TABLE `Hiking_Trail` (
  `Trail_Name` VARCHAR(45) NOT NULL,
  `NA_Name` VARCHAR(45) NOT NULL,
  `Distance` INT NULL,
  `Average_Time` VARCHAR(45) NULL,
  FOREIGN KEY(`NA_Name`) REFERENCES `Natural_Attractions`( `NA_Name`),
  PRIMARY KEY (`Trail_Name`, `NA_Name`));


DROP TABLE IF EXISTS `NA_Offer`;
CREATE TABLE `NA_Offer` (
  `NA_Name` VARCHAR(45) NOT NULL,
  `Resturant_Name` VARCHAR(45) NOT NULL,
  `Num` INT NOT NULL,
  FOREIGN KEY(`NA_Name`) REFERENCES `Natural_Attractions`( `NA_Name`),
  FOREIGN KEY(`Resturant_Name`) REFERENCES `Resturant`( `Resturant_Name`),
  PRIMARY KEY (`NA_Name`, `Resturant_Name`));
  
  
DROP TABLE IF EXISTS `StarChange`;
CREATE TABLE `StarChange` (
  `Resturant` VARCHAR(45) NOT NULL,
  `oldStar` INT NULL,
  `newStar` INT NULL,
  `userChange` VARCHAR(100) NOT NULL,
  `dateChanged` DATE,
  FOREIGN KEY(`Resturant`) REFERENCES `Resturant`( `Resturant_Name`),
  PRIMARY KEY (`userChange`, `dateChanged`));
  
DROP TABLE IF EXISTS `Registration`;
CREATE TABLE `Registration` (
  `ID` INT NOT NULL auto_increment,
  `Username` VARCHAR(100) NOT NULL,
  `Email` VARCHAR(100) ,
  `Password` VARCHAR(100) ,
  `Add1` VARCHAR(100) ,
  `Add2` VARCHAR(100) ,
  `Phone` VARCHAR(100) ,
  `Birthday` VARCHAR(100) ,
  `Nickname` VARCHAR(100) ,

  
  
  PRIMARY KEY (`ID`));

  
DROP TABLE IF EXISTS `Comment`;
CREATE TABLE `Comment` (
  `ID` INT NOT NULL auto_increment,
  `Username` VARCHAR(100) NOT NULL,
  `Attraction` VARCHAR(100) NOT NULL,
  `Star` INT NOT NULL,
  `Comment` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`ID`));


