

CREATE Database `fanimation`

CREATE TABLE Category (
 id int NOT NULL  AUTO_INCREMENT,   
 SKU varchar(50) NOT NULL UNIQUE, 
 SKU_Category varchar(50) NOT NULL,
 PRIMARY KEY (id)
);

CREATE TABLE Products (
    id int NOT NULL AUTO_INCREMENT,
    SKU varchar(50) NOT NULL, 
 Name varchar(50) NOT NULL,
 Finish varchar(50) NOT NULL,
 Blade_Span varchar(50) NULL,
 Bulb_Type varchar(50) NULL,
 Close_to_Ceiling_Kit varchar(50) NULL,
 Control_Type varchar(50) NULL,
 Energy_Star varchar(50) NULL,
 Collection varchar(50) NOT NULL,
 Light_Kit_Included varchar(50) NULL,
 Location_Rating varchar(50) NOT NULL,
 Motor_Size varchar(50) NULL,
 Motor_Type varchar(50) NULL,
 Number_of_Blades varchar(50) NULL,
 PRIMARY KEY (id),
 CONSTRAINT fk_SKU
 FOREIGN KEY (SKU) REFERENCES Category(SKU)
);

CREATE TABLE User_Info (
 User_ID int NOT NULL AUTO_INCREMENT,
 Username varchar(50) NOT NULL,
 Pass_word varchar(50) NOT NULL,
 Email varchar(50) NOT NULL,
 PRIMARY KEY (User_ID)
);

CREATE TABLE User_Address (
    User_ID int NOT NULL AUTO_INCREMENT,
	SKU varchar(50) NOT NULL,
	Username varchar(50) NOT NULL,
	Email varchar(50) NOT NULL,
	Address varchar(250) NULL,
    PRIMARY KEY (User_ID),
    CONSTRAINT fk_SKU_user
    FOREIGN KEY (SKU) REFERENCES Category(SKU)
)