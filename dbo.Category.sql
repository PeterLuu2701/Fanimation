-- Create a new table called 'Category' in schema 'dbo'
-- Drop the table if it already exists
IF OBJECT_ID('dbo.Category', 'U') IS NOT NULL
 DROP TABLE dbo.Category;
GO
-- Create the table in the specified schema
CREATE TABLE dbo.Category
(
 SKU nvarchar NOT NULL PRIMARY KEY, -- primary key column
 SKU_Category nvarchar(50) NOT NULL,
 
);
GO