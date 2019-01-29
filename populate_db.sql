# Zhuo Chen
# HW3 
# 10/23/2018
#USE zhc008DB;

SET SQL_SAFE_UPDATES=0;
DELETE FROM `Tourist_Spot`;
SET SQL_SAFE_UPDATES=1;
INSERT INTO `Tourist_Spot` (TS_ID, TS_Name, Country_Name, Review, Total_Score, Total_Review) VALUES (101, 'Yellowstone', 'United States', 0, 0, 0);
INSERT INTO `Tourist_Spot` (TS_ID, TS_Name, Country_Name, Review, Total_Score, Total_Review) VALUES (102, 'Yosemite', 'United States', 0, 0, 0);
INSERT INTO `Tourist_Spot` (TS_ID, TS_Name, Country_Name, Review, Total_Score, Total_Review) VALUES (103, 'Glacier National Park', 'United States', 0, 0, 0);
INSERT INTO `Tourist_Spot` (TS_ID, TS_Name, Country_Name, Review, Total_Score, Total_Review) VALUES (104, 'Grand Canyon', 'United States', 0, 0, 0);
INSERT INTO `Tourist_Spot` (TS_ID, TS_Name, Country_Name, Review, Total_Score, Total_Review) VALUES (105, 'Serengeti National Park', 'Tanzania', 0, 0, 0);
INSERT INTO `Tourist_Spot` (TS_ID, TS_Name, Country_Name, Review, Total_Score, Total_Review) VALUES (106, 'Zion National Park', 'United States', 0, 0, 0);
INSERT INTO `Tourist_Spot` (TS_ID, TS_Name, Country_Name, Review, Total_Score, Total_Review) VALUES (107, 'Great Barrier Reef', 'Australia', 0, 0, 0);
INSERT INTO `Tourist_Spot` (TS_ID, TS_Name, Country_Name, Review, Total_Score, Total_Review) VALUES (108, 'Torres Del Paine National Park', 'Chile', 0, 0, 0);
INSERT INTO `Tourist_Spot` (TS_ID, TS_Name, Country_Name, Review, Total_Score, Total_Review) VALUES (109, 'Kruger National Park', 'South Africa', 0, 0, 0);
INSERT INTO `Tourist_Spot` (TS_ID, TS_Name, Country_Name, Review, Total_Score, Total_Review) VALUES (110, 'Grand Teton National Park', 'United States', 0, 0, 0);
INSERT INTO `Tourist_Spot` (TS_ID, TS_Name, Country_Name, Review, Total_Score, Total_Review) VALUES (201, 'Forbidden City', 'China', 0, 0, 0);
INSERT INTO `Tourist_Spot` (TS_ID, TS_Name, Country_Name, Review, Total_Score, Total_Review) VALUES (202, 'Milan Cathedral', 'Italy', 0, 0, 0);
INSERT INTO `Tourist_Spot` (TS_ID, TS_Name, Country_Name, Review, Total_Score, Total_Review) VALUES (203, 'Dome of the Rock', 'Isreal', 0, 0, 0);
INSERT INTO `Tourist_Spot` (TS_ID, TS_Name, Country_Name, Review, Total_Score, Total_Review) VALUES (204, 'St Paul Cathedral', 'United Kingdom', 0, 0, 0);
INSERT INTO `Tourist_Spot` (TS_ID, TS_Name, Country_Name, Review, Total_Score, Total_Review) VALUES (205, 'Red Square', 'Russia', 0, 0, 0);
INSERT INTO `Tourist_Spot` (TS_ID, TS_Name, Country_Name, Review, Total_Score, Total_Review) VALUES (206, 'Neuschwanstein Castle', 'Germany', 0, 0, 0);
INSERT INTO `Tourist_Spot` (TS_ID, TS_Name, Country_Name, Review, Total_Score, Total_Review) VALUES (207, 'Taj Mahal', 'India', 0, 0, 0);
INSERT INTO `Tourist_Spot` (TS_ID, TS_Name, Country_Name, Review, Total_Score, Total_Review) VALUES (208, 'J. Paul Getty Museum', 'United States', 0, 0, 0);
INSERT INTO `Tourist_Spot` (TS_ID, TS_Name, Country_Name, Review, Total_Score, Total_Review) VALUES (209, 'Falling water', 'United States', 0, 0, 0);
INSERT INTO `Tourist_Spot` (TS_ID, TS_Name, Country_Name, Review, Total_Score, Total_Review) VALUES (210, 'Buckingham Palace', 'United Kingdom', 0, 0, 0);
INSERT INTO `Tourist_Spot` (TS_ID, TS_Name, Country_Name, Review, Total_Score, Total_Review) VALUES (211, 'The Great Wall', 'China', 0, 0, 0);


SET SQL_SAFE_UPDATES=0;
DELETE FROM `Natural_Attractions`;
SET SQL_SAFE_UPDATES=1;
INSERT INTO `Natural_Attractions` (NA_NAME, Type_View, Average_Temp, TS_ID) VALUES ('Yellowstone', 'Mountain', 53, 101);
INSERT INTO `Natural_Attractions` (NA_NAME, Type_View, Average_Temp, TS_ID) VALUES ('Yosemite', 'Mountain', 62, 102);
INSERT INTO `Natural_Attractions` (NA_NAME, Type_View, Average_Temp, TS_ID) VALUES ('Glacier National Park', 'Mountain', 42, 103);
INSERT INTO `Natural_Attractions` (NA_NAME, Type_View, Average_Temp, TS_ID) VALUES ('Grand Canyon', 'Canyon', 76, 104);
INSERT INTO `Natural_Attractions` (NA_NAME, Type_View, Average_Temp, TS_ID) VALUES ('Serengeti National Park', 'Prairie', 78, 105);
INSERT INTO `Natural_Attractions` (NA_NAME, Type_View, Average_Temp, TS_ID) VALUES ('Zion National Park', 'Mountain', 72, 106);
INSERT INTO `Natural_Attractions` (NA_NAME, Type_View, Average_Temp, TS_ID) VALUES ('Great Barrier Reef', 'Ocean', 82, 107);
INSERT INTO `Natural_Attractions` (NA_NAME, Type_View, Average_Temp, TS_ID) VALUES ('Torres Del Paine National Park', 'Mountain', 61, 108);
INSERT INTO `Natural_Attractions` (NA_NAME, Type_View, Average_Temp, TS_ID) VALUES ('Kruger National Park', 'Prairie', 83, 109);
INSERT INTO `Natural_Attractions` (NA_NAME, Type_View, Average_Temp, TS_ID) VALUES ('Grand Teton National Park', 'Mountain', 72, 110);

SET SQL_SAFE_UPDATES=0;
DELETE FROM `Cultural_Attractions`;
SET SQL_SAFE_UPDATES=1;
INSERT INTO `Cultural_Attractions` (CA_NAME, TS_ID, City) VALUES ('Forbidden City', 201, 'Beijing');
INSERT INTO `Cultural_Attractions` (CA_NAME, TS_ID, City) VALUES ('Milan Cathedral', 202, 'Milan');
INSERT INTO `Cultural_Attractions` (CA_NAME, TS_ID, City) VALUES ('Dome of the Rock', 203, 'Jerusalem');
INSERT INTO `Cultural_Attractions` (CA_NAME, TS_ID, City) VALUES ('St Paul Cathedral', 204, 'London');
INSERT INTO `Cultural_Attractions` (CA_NAME, TS_ID, City) VALUES ('Red Square', 205, 'Moscow');
INSERT INTO `Cultural_Attractions` (CA_NAME, TS_ID, City) VALUES ('Neuschwanstein Castle', 206, 'Hohenschwangau');
INSERT INTO `Cultural_Attractions` (CA_NAME, TS_ID, City) VALUES ('Taj Mahal', 207, 'Agra');
INSERT INTO `Cultural_Attractions` (CA_NAME, TS_ID, City) VALUES ('J. Paul Getty Museum', 208, 'Los Angeles');
INSERT INTO `Cultural_Attractions` (CA_NAME, TS_ID, City) VALUES ('Falling water', 209, 'Pittsburgh');
INSERT INTO `Cultural_Attractions` (CA_NAME, TS_ID, City) VALUES ('Buckingham Palace', 210, 'London');
INSERT INTO `Cultural_Attractions` (CA_NAME, TS_ID, City) VALUES ('The Great Wall', 211, 'Beijing');

SET SQL_SAFE_UPDATES=0;
DELETE FROM `Resturant`;
SET SQL_SAFE_UPDATES=1;
INSERT INTO `Resturant` (Resturant_Name, Food_Type, Sales_Millions, Number_Of_Units, Star, Resturant_Info) VALUES ('Panda Express', 'Ethnic', 2903, 1893, 2, 'Resturant_Info');
INSERT INTO `Resturant` (Resturant_Name, Food_Type, Sales_Millions, Number_Of_Units, Star, Resturant_Info) VALUES ('McDonalds', 'Burger', 36389, 14155, 3, 'Resturant_Info');
INSERT INTO `Resturant` (Resturant_Name, Food_Type, Sales_Millions, Number_Of_Units, Star, Resturant_Info) VALUES ('KFC', 'Chicken', 4483, 4167, 5, 'Resturant_Info');
INSERT INTO `Resturant` (Resturant_Name, Food_Type, Sales_Millions, Number_Of_Units, Star, Resturant_Info) VALUES ('Starbucks', 'Snack', 14795, 13172, 2, 'Resturant_Info');
INSERT INTO `Resturant` (Resturant_Name, Food_Type, Sales_Millions, Number_Of_Units, Star, Resturant_Info) VALUES ('Subway', 'Sandwich', 11300, 26744, 2, 'Resturant_Info');
INSERT INTO `Resturant` (Resturant_Name, Food_Type, Sales_Millions, Number_Of_Units, Star, Resturant_Info) VALUES ('Taco Bell', 'Ethnic', 9353, 6278, 5, 'Resturant_Info');
INSERT INTO `Resturant` (Resturant_Name, Food_Type, Sales_Millions, Number_Of_Units, Star, Resturant_Info) VALUES ('Dunkin Donuts', 'Snack', 8200, 8828, 4, 'Resturant_Info');
INSERT INTO `Resturant` (Resturant_Name, Food_Type, Sales_Millions, Number_Of_Units, Star, Resturant_Info) VALUES ('Chick-fil-A', 'Chicken', 7973, 2102, 2, 'Resturant_Info');
INSERT INTO `Resturant` (Resturant_Name, Food_Type, Sales_Millions, Number_Of_Units, Star, Resturant_Info) VALUES ('Chipotle', 'Ethnic', 3905, 2198, 4, 'Resturant_Info');
INSERT INTO `Resturant` (Resturant_Name, Food_Type, Sales_Millions, Number_Of_Units, Star, Resturant_Info) VALUES ('El Pollo Loco', 'Chicken', 796, 460, 4, 'Resturant_Info');


SET SQL_SAFE_UPDATES=0;
DELETE FROM `Designer`;
SET SQL_SAFE_UPDATES=1;
INSERT INTO `Designer` (Designer, Year_Born, Gender, Personal_Info, Country_Name) VALUES ('Xiang Kuai', 1399, 'Male', ' Personal Info','China');
INSERT INTO `Designer` (Designer, Year_Born, Gender, Personal_Info, Country_Name) VALUES ('Simone da Orsenigo', 1838, 'Male', ' Personal Info','Italy');
INSERT INTO `Designer` (Designer, Year_Born, Gender, Personal_Info, Country_Name) VALUES ('Zheng Ying', 685, 'Male', ' Personal Info','China');
INSERT INTO `Designer` (Designer, Year_Born, Gender, Personal_Info, Country_Name) VALUES ('Sir Christopher Wren', 1632, 'Male', ' Personal Info','United Kingdom');
INSERT INTO `Designer` (Designer, Year_Born, Gender, Personal_Info, Country_Name) VALUES ('Postnik Yakolev', 1555, 'Male', ' Personal Info','Russia');
INSERT INTO `Designer` (Designer, Year_Born, Gender, Personal_Info, Country_Name) VALUES ('Eduard Riedel', 1813, 'Male', ' Personal Info','Germany');
INSERT INTO `Designer` (Designer, Year_Born, Gender, Personal_Info, Country_Name) VALUES ('Mughal Emperor Shah Jahan', 1628, 'Male', ' Personal Info','India');
INSERT INTO `Designer` (Designer, Year_Born, Gender, Personal_Info, Country_Name) VALUES ('Richard Meier', 1934, 'Male', ' Personal Info','United States');
INSERT INTO `Designer` (Designer, Year_Born, Gender, Personal_Info, Country_Name) VALUES ('Frank Lloyd Wright', 1867, 'Male', ' Personal Info','United States');
INSERT INTO `Designer` (Designer, Year_Born, Gender, Personal_Info, Country_Name) VALUES ('William Winde', 1645, 'Male', ' Personal Info','United Kingdom');
INSERT INTO `Designer` (Designer, Year_Born, Gender, Personal_Info, Country_Name) VALUES ('Shimoda Kikutaro', 1866, 'Male', ' Personal Info','Japan');



SET SQL_SAFE_UPDATES=0;
DELETE FROM `Country`;
SET SQL_SAFE_UPDATES=1;
INSERT INTO `Country` (Country_Name, Population) VALUES ('China', 1415045928);
INSERT INTO `Country` (Country_Name, Population) VALUES ('India ', 1354051854);
INSERT INTO `Country` (Country_Name, Population) VALUES ('United States', 326766748);
INSERT INTO `Country` (Country_Name, Population) VALUES ('Russia', 143964709);
INSERT INTO `Country` (Country_Name, Population) VALUES ('Germany', 82293457);
INSERT INTO `Country` (Country_Name, Population) VALUES ('Turkey', 81916871);
INSERT INTO `Country` (Country_Name, Population) VALUES ('Italy', 59290969);
INSERT INTO `Country` (Country_Name, Population) VALUES ('United Kingdom', 66573504);
INSERT INTO `Country` (Country_Name, Population) VALUES ('Isreal', 8452841);
INSERT INTO `Country` (Country_Name, Population) VALUES ('Cambodia', 16245729);
INSERT INTO `Country` (Country_Name, Population) VALUES ('Tanzania', 59687076);


SET SQL_SAFE_UPDATES=0;
DELETE FROM `CA_Offer`;
SET SQL_SAFE_UPDATES=1;
INSERT INTO `CA_Offer` (CA_Name, Resturant_Name, Num) VALUES ('Forbidden City', 'Panda Express', 2);
INSERT INTO `CA_Offer` (CA_Name, Resturant_Name, Num) VALUES ('Forbidden City', 'McDonalds', 1);
INSERT INTO `CA_Offer` (CA_Name, Resturant_Name, Num) VALUES ('The Great Wall', 'KFC', 2);
INSERT INTO `CA_Offer` (CA_Name, Resturant_Name, Num) VALUES ('The Great Wall', 'McDonalds', 3);
INSERT INTO `CA_Offer` (CA_Name, Resturant_Name, Num) VALUES ('St Paul Cathedral', 'Starbucks', 2);
INSERT INTO `CA_Offer` (CA_Name, Resturant_Name, Num) VALUES ('Milan Cathedral', 'KFC', 2);
INSERT INTO `CA_Offer` (CA_Name, Resturant_Name, Num) VALUES ('Red Square', 'Starbucks', 3);
INSERT INTO `CA_Offer` (CA_Name, Resturant_Name, Num) VALUES ('Red Square', 'KFC', 1);
INSERT INTO `CA_Offer` (CA_Name, Resturant_Name, Num) VALUES ('Neuschwanstein Castle', 'Dunkin Donuts', 2);
INSERT INTO `CA_Offer` (CA_Name, Resturant_Name, Num) VALUES ('Neuschwanstein Castle', 'Starbucks', 2);
INSERT INTO `CA_Offer` (CA_Name, Resturant_Name, Num) VALUES ('Taj Mahal', 'KFC', 2);
INSERT INTO `CA_Offer` (CA_Name, Resturant_Name, Num) VALUES ('Taj Mahal', 'Dunkin Donuts', 1);
INSERT INTO `CA_Offer` (CA_Name, Resturant_Name, Num) VALUES ('J. Paul Getty Museum', 'Starbucks', 2);
INSERT INTO `CA_Offer` (CA_Name, Resturant_Name, Num) VALUES ('J. Paul Getty Museum', 'KFC', 2);
INSERT INTO `CA_Offer` (CA_Name, Resturant_Name, Num) VALUES ('Falling water', 'Dunkin Donuts', 1);
INSERT INTO `CA_Offer` (CA_Name, Resturant_Name, Num) VALUES ('Falling water', 'Starbucks', 2);
INSERT INTO `CA_Offer` (CA_Name, Resturant_Name, Num) VALUES ('Buckingham Palace', 'KFC', 1);
INSERT INTO `CA_Offer` (CA_Name, Resturant_Name, Num) VALUES ('Buckingham Palace', 'Dunkin Donuts', 2);
INSERT INTO `CA_Offer` (CA_Name, Resturant_Name, Num) VALUES ('Buckingham Palace', 'Starbucks', 2);



SET SQL_SAFE_UPDATES=0;
DELETE FROM `NA_Offer`;
SET SQL_SAFE_UPDATES=1;
INSERT INTO `NA_Offer` (NA_Name, Resturant_Name, Num) VALUES ('Yellowstone', 'Panda Express', 2);
INSERT INTO `NA_Offer` (NA_Name, Resturant_Name, Num) VALUES ('Yellowstone', 'KFC', 2);
INSERT INTO `NA_Offer` (NA_Name, Resturant_Name, Num) VALUES ('Yosemite', 'McDonalds', 3);
INSERT INTO `NA_Offer` (NA_Name, Resturant_Name, Num) VALUES ('Yosemite', 'Panda Express', 2);
INSERT INTO `NA_Offer` (NA_Name, Resturant_Name, Num) VALUES ('Glacier National Park', 'Panda Express', 2);
INSERT INTO `NA_Offer` (NA_Name, Resturant_Name, Num) VALUES ('Glacier National Park', 'Starbucks', 1);
INSERT INTO `NA_Offer` (NA_Name, Resturant_Name, Num) VALUES ('Grand Canyon', 'Dunkin Donuts', 2);
INSERT INTO `NA_Offer` (NA_Name, Resturant_Name, Num) VALUES ('Grand Canyon', 'Panda Express', 1);
INSERT INTO `NA_Offer` (NA_Name, Resturant_Name, Num) VALUES ('Serengeti National Park', 'Panda Express', 2);
INSERT INTO `NA_Offer` (NA_Name, Resturant_Name, Num) VALUES ('Zion National Park', 'Starbucks', 1);
INSERT INTO `NA_Offer` (NA_Name, Resturant_Name, Num) VALUES ('Great Barrier Reef', 'Panda Express', 2);
INSERT INTO `NA_Offer` (NA_Name, Resturant_Name, Num) VALUES ('Torres Del Paine National Park', 'Starbucks', 1);
INSERT INTO `NA_Offer` (NA_Name, Resturant_Name, Num) VALUES ('Kruger National Park', 'Dunkin Donuts', 2);
INSERT INTO `NA_Offer` (NA_Name, Resturant_Name, Num) VALUES ('Grand Teton National Park', 'Starbucks', 1);
INSERT INTO `NA_Offer` (NA_Name, Resturant_Name, Num) VALUES ('Grand Teton National Park', 'Panda Express', 2);

SET SQL_SAFE_UPDATES=0;
DELETE FROM `Hiking_Trail`;
SET SQL_SAFE_UPDATES=1;
INSERT INTO `Hiking_Trail` (NA_Name, Trail_Name, Distance, Average_Time) VALUES ('Yellowstone', 'Artist Paint Pots', 1.2, 1);
INSERT INTO `Hiking_Trail` (NA_Name, Trail_Name, Distance, Average_Time) VALUES ('Yellowstone', 'Cygnet Lakes Trail', 8, 5);
INSERT INTO `Hiking_Trail` (NA_Name, Trail_Name, Distance, Average_Time) VALUES ('Yosemite', 'Half Dome', 14.2, 9);
INSERT INTO `Hiking_Trail` (NA_Name, Trail_Name, Distance, Average_Time) VALUES ('Yosemite', 'Inspiration Point', 2.6, 2);
INSERT INTO `Hiking_Trail` (NA_Name, Trail_Name, Distance, Average_Time) VALUES ('Glacier National Park', 'Apgar Lookout', 7.1, 5);
INSERT INTO `Hiking_Trail` (NA_Name, Trail_Name, Distance, Average_Time) VALUES ('Grand Canyon', 'Ken Patrick Trail', 10, 6);
INSERT INTO `Hiking_Trail` (NA_Name, Trail_Name, Distance, Average_Time) VALUES ('Grand Canyon', 'Uncle Jim Trail', 5, 3);
INSERT INTO `Hiking_Trail` (NA_Name, Trail_Name, Distance, Average_Time) VALUES ('Serengeti National Park', 'A Point', 3, 2);
INSERT INTO `Hiking_Trail` (NA_Name, Trail_Name, Distance, Average_Time) VALUES ('Zion National Park', 'Riverside Walk', 2, 1);
INSERT INTO `Hiking_Trail` (NA_Name, Trail_Name, Distance, Average_Time) VALUES ('Zion National Park', 'Emerald Pools Trail', 2, 2);
INSERT INTO `Hiking_Trail` (NA_Name, Trail_Name, Distance, Average_Time) VALUES ('Great Barrier Reef', 'Dive Trail', 2, 3);
INSERT INTO `Hiking_Trail` (NA_Name, Trail_Name, Distance, Average_Time) VALUES ('Torres Del Paine National Park', 'Grey Glacier ', 7.5, 6);
INSERT INTO `Hiking_Trail` (NA_Name, Trail_Name, Distance, Average_Time) VALUES ('Kruger National Park', 'Wolhuter', 3, 2);
INSERT INTO `Hiking_Trail` (NA_Name, Trail_Name, Distance, Average_Time) VALUES ('Grand Teton National Park', 'The Canyon', 4.6, 3);
INSERT INTO `Hiking_Trail` (NA_Name, Trail_Name, Distance, Average_Time) VALUES ('Grand Teton National Park', 'Hermitage Point', 3.6, 2);




SET SQL_SAFE_UPDATES=0;
DELETE FROM `Building`;
SET SQL_SAFE_UPDATES=1;
INSERT INTO `Building` (Building_ID, Building_Name, CA_Name, Year_Built, Description, Designer) VALUES (001, 'Hall of Supreme Harmony', 'Forbidden City', 1420, 'Description', 'Xiang Kuai');
INSERT INTO `Building` (Building_ID, Building_Name, CA_Name, Year_Built, Description, Designer) VALUES (002, 'Hall of Central Harmony', 'Forbidden City', 1420, 'Description', 'Xiang Kuai');
INSERT INTO `Building` (Building_ID, Building_Name, CA_Name, Year_Built, Description, Designer) VALUES (003, 'Hall of Preserving Harmony', 'Forbidden City', 1420, 'Description', 'Xiang Kuai');
INSERT INTO `Building` (Building_ID, Building_Name, CA_Name, Year_Built, Description, Designer) VALUES (004, 'Milan Cathedral', 'Milan Cathedral', 1386, 'Description', 'Simone da Orsenigo');
INSERT INTO `Building` (Building_ID, Building_Name, CA_Name, Year_Built, Description, Designer) VALUES (005, 'The Great Wall', 'The Great Wall', 1644, 'Description', 'Zheng Ying');
INSERT INTO `Building` (Building_ID, Building_Name, CA_Name, Year_Built, Description, Designer) VALUES (006, 'St Paul Cathedral', 'St Paul Cathedral', 1697, 'Description', 'Sir Christopher Wren');
INSERT INTO `Building` (Building_ID, Building_Name, CA_Name, Year_Built, Description, Designer) VALUES (007, 'St Basil Cathedral', 'Red Square', 1561, 'Description', 'Postnik Yakolev');
INSERT INTO `Building` (Building_ID, Building_Name, CA_Name, Year_Built, Description, Designer) VALUES (008, 'Neuschwanstein Castle', 'Neuschwanstein Castle', 1869, 'Description', 'Eduard Riedel');
INSERT INTO `Building` (Building_ID, Building_Name, CA_Name, Year_Built, Description, Designer) VALUES (009, 'Taj Mahal', 'Taj Mahal', 1653, 'Description', 'Mughal Emperor Shah Jahan');
INSERT INTO `Building` (Building_ID, Building_Name, CA_Name, Year_Built, Description, Designer) VALUES (010, 'The Central Garden lawn', 'J. Paul Getty Museum', 1997, 'Description', 'Richard Meier');
INSERT INTO `Building` (Building_ID, Building_Name, CA_Name, Year_Built, Description, Designer) VALUES (011, 'Falling water', 'Falling water', 1936, 'Description', 'Frank Lloyd Wright');
INSERT INTO `Building` (Building_ID, Building_Name, CA_Name, Year_Built, Description, Designer) VALUES (012, 'Buckingham Palace', 'Buckingham Palace', 1703, 'Description', 'William Winde');



