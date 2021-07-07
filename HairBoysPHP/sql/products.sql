-- Drop the database if it exists
DROP DATABASE IF EXISTS	hairboys;

--Create the database and grant privileges
CREATE DATABASE hairboys;
GRANT USAGE ON *.* TO 'appuser'@'localhost' IDENTIFIED BY 'password';
GRANT ALL PRIVILEGES ON demo.* TO 'appuser'@'localhost';
FLUSH PRIVILEGES;

USE hairboys;

--Create the products table
CREATE TABLE products(
	id				INT(10) NOT NULL PRIMARY KEY AUTO_INCREMENT,
	name			VARCHAR(256) NOT NULL,
	prodPage	VARCHAR(256) NOT NULL,
	img				VARCHAR(256) NOT NULL,
	type      VARCHAR(256) NOT NULL,
	hold			VARCHAR(256) NOT NULL,
	shine			VARCHAR(256) NOT NULL,
	scent			VARCHAR(256) NOT NULL,
	rating		INT NOT NULL,
	price			INT NOT NULL
);

--Insert product values into product table
INSERT INTO products (name, prodPage, img, type, hold, shine, scent, rating, price)
	VALUES 	("Arcadian Matte Paste", "productarcadian.php", "arcadianmatte.jpg", "paste", "Firm", "Matte", "Citrus and Wood", 5, 30),
					("Flagship Dead Sea Clay", "productflagship.php", "flagship.jpg", "clay", "Firm", "Matte", "Floral Spice", 3, 30),
					("Shear Revival American Gardens", "productshearrevival.php", "shearrevival.jpg", "clay", "Firm", "Matte", "Orange and Oak", 5, 30),
					("Grim Grease Medium", "productgrimgrease.php", "grimgrease.jpg", "pomade", "Medium", "Low", "Cologne", 5, 25),
					("Lockharts Gonzo Grease", "productlockharts.php", "lockharts.jpg", "pomade", "Heavy", "High", "Spicy", 4, 25),
					("Reuzel Matte Pomade", "productreuzel.php", "reuzel.jpg", "pomade", "Medium", "Low", "Chocolate Mint", 3, 20),
					("Arcadian Styling Pomade", "productarcadianstyling.php", "arcadianstyling.jpg", "pomade", "Medium", "High", "Fresh Citrus", 2, 25),
					("Dapper Boy Pomade", "productdapperboy.php", "dapperboy.jpg", "pomade", "Medium", "High", "Tobacco Vanilla", 2, 15),
					("Grim Grease Matte Cream", "productgrimgreasematte.php", "grimgreasematte.jpg", "paste", "Heavy", "Matte", "Summer Blend", 4, 25),
					("Reuzel Green Pomade", "productreuzelgreen.php", "reuzelgreen.jpg", "pomade", "Medium", "High", "Green Apples", 1, 10)
