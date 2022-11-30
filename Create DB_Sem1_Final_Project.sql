USE master
GO
IF NOT EXISTS (
 SELECT name
 FROM sys.databases
 WHERE name = N'Sem1_Final_Project'
)
 CREATE DATABASE [Sem1_Final_Project];
GO
IF SERVERPROPERTY('ProductVersion') > '12'
 ALTER DATABASE [Sem1_Final_Project] SET QUERY_STORE=ON;
GO