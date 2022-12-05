-- Create a new table called 'Products' in schema 'dbo'
-- Drop the table if it already exists
IF OBJECT_ID('dbo.Products', 'U') IS NOT NULL
 DROP TABLE dbo.Products;
GO
-- Create the table in the specified schema
CREATE TABLE dbo.Products
(
 SKU nvarchar NOT NULL PRIMARY KEY, -- primary key column
 Name nvarchar(50) NOT NULL,
 Finish nvarchar(50) NOT NULL,
 Blade_Span nvarchar(50) NULL,
 Bulb_Type nvarchar(50) NULL,
 Close_to_Ceiling_Kit nvarchar(50) NULL,
 Control_Type nvarchar(50) NULL,
 Energy_Star nvarchar(50) NULL,
 Collection nvarchar(50) NOT NULL,
 Light_Kit_Included nvarchar(50) NULL,
 Location_Rating nvarchar(50) NOT NULL,
 Motor_Size nvarchar(50) NULL,
 Motor_Type nvarchar(50) NULL,
 Number_of_Blades nvarchar(50) NULL,
 
);
GO