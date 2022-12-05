-- Create a new table called 'User_Info' in schema 'dbo'
-- Drop the table if it already exists
IF OBJECT_ID('dbo.User_Info', 'U') IS NOT NULL
 DROP TABLE dbo.User_Info;
GO
-- Create the table in the specified schema
CREATE TABLE dbo.User_Info
(
 User_ID nvarchar(50) NOT NULL PRIMARY KEY,
 Username nvarchar(50) NOT NULL,
 Pass_word nvarchar(50) NOT NULL,
 
);
GO