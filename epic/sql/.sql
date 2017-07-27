DROP TABLE IF EXISTS item;
DROP TABLE IF EXISTS profile;

CREATE TABLE profile(
profileId INT UNSIGNED AUTO_INCREMENT NOT NULL,
	profileActivationToken CHAR(32),
	profileAtHandle VARCHAR(128),
	profileEmail VARCHAR(128)NOT NULL ,
	profilePhone VARCHAR(32),
	profileHash CHAR(128)NOT NULL,
	profileSalt CHAR(64)NOT NULL,
	UNIQUE (profileEmail),
	UNIQUE (profilePhone),
	PRIMARY KEY (profileId)
);



CREATE TABLE item(
		itemProfileId INT UNSIGNED NOT NULL,
		itemId INT UNSIGNED AUTO_INCREMENT NOT NULL,
		itemName VARCHAR (128) NOT NULL,
		itemPrice VARCHAR (32) NOT NULL,
	PRIMARY KEY (itemId),
	FOREIGN KEY (itemprofileId) REFERENCES profile(profileId),
	UNIQUE (itemName),
	UNIQUE (itemPrice)
);