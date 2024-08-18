DROP TABLE IF EXISTS modCategories;
CREATE TABLE modCategories (
    ModCategoryId VARCHAR(255) NOT NULL PRIMARY KEY,
    ModCategoryName VARCHAR(255) NOT NULL,
    Created TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
	Modified TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
INSERT INTO modCategories (ModCategoryId, ModCategoryName) VALUES ("large-scale-projects", "Large-scale projects");
INSERT INTO modCategories (ModCategoryId, ModCategoryName) VALUES ("individual-galaxies", "Individual galaxies");
INSERT INTO modCategories (ModCategoryId, ModCategoryName) VALUES ("text-projects", "Text projects");
INSERT INTO modCategories (ModCategoryId, ModCategoryName) VALUES ("community-competition-packs", "Community Competition packs");

DROP TABLE IF EXISTS mods;
CREATE TABLE mods (
    ModId VARCHAR(255) NOT NULL PRIMARY KEY, -- short name
    ModName VARCHAR(255) NOT NULL,
    Author VARCHAR(255),
    Description TEXT, 
    ModImages JSON,
    ModLinks JSON,
    ModCategory VARCHAR(255),
    Created TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
	Modified TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (ModCategory)
        REFERENCES modCategories(ModCategoryId)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
INSERT INTO mods (ModId, ModName, Author, Description, ModImages, ModLinks, ModCategory) VALUES ("NMG",
    "Neo Mario Galaxy",
    "Aurum; SY24; MTLenz; Mixlas; Super Hackio; froggo; Alex SMG; Floaty; Super o' Brothers; MikaMusic; Mr. BMY; Gabbo",
    "<b>Neo Mario Galaxy</b> is an unofficial modification of Super Mario Galaxy 2. This hack can be played legally on any homebrew-enabled Wii or Wii U console.<br>No backup images or hardware modifications are required. As of December 2023, <em>Neo Mario Galaxy</em> has been downloaded over 25,000 times!<br><br><h3>Features<br><ul><li>Supports all major game versions.</li><li><b>8 new galaxies</b> featuring <b>42 Power Stars</b>!</li><li>The return of the <b>Ice Flower</b> and <b>Flying Star</b>!</li><li>New <b>collectable items</b>!</li><li>Choose between <b>Normal</b> and <b>Daredevil</b> mode.</li><li>Custom and remixed <b>music</b>.</li></ul>",
    "[\"https://aurumsmods.com/nmg/title01.jpg\", \"https://aurumsmods.com/nmg/cloudygarden01.jpg\", \"https://aurumsmods.com/nmg/sweettreat01.jpg\", \"https://aurumsmods.com/nmg/cosmicspirit01.jpg\", \"https://aurumsmods.com/nmg/turnlog01.jpg\", \"https://aurumsmods.com/nmg/sweettreat02.jpg\", \"https://aurumsmods.com/nmg/gloomygalleon01.jpg\", \"https://aurumsmods.com/nmg/itemcollection01.jpg\", \"https://aurumsmods.com/nmg/battleblast01.jpg\", \"https://aurumsmods.com/nmg/cometobs01.jpg\", \"https://aurumsmods.com/nmg/eepbeep01.jpg\", \"https://aurumsmods.com/nmg/krakenking01.jpg\"]",
    "[{\"Url\": \"https://mega.nz/file/4hU1lQ6I#KpYw7itYC8_fKDl6h8D8kAIaBjq21ID-rtTpH7yvO80\", \"Name\": \"Download Neo Mario Galaxy\"}, {\"Url\": \"https://mega.nz/file/Mw13RICD#CaXbsIAXY_H-9UCV9zEpUAYv1gnrvccoQfFp9OB5SWA\", \"Name\": \"Download Dolphin HD textures\"}]",
    "large-scale-projects");