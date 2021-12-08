DROP DATABASE fswd14_cr12_mount_everest_Hikmet_Prizreni
​
/* Create Database */
​
CREATE DATABASE fswd14_cr12_mount_everest_Hikmet_Prizreni DEFAULT CHARACTER SET utf8;
​
​
/* Create Table */
​
CREATE TABLE trips(
   id INT AUTO_INCREMENT PRIMARY KEY,
   name VARCHAR(50),
   price DECIMAL(10,2),
   description TEXT,
   lat DECIMAL(8,6),
   lng DECIMAL(9,6),
   picture VARCHAR(50)
)
​
/* Insert values */
​
INSERT INTO trips
VALUES
(1, "Niagarawaterfall", 500.00, "Famous, high waterfalls on the border between Canada and the U.S., with guided tours and boat rides", 43.08297, -79.07411, "niagara.jpg"),
(2, "Vltava river", 499.50, "The city of Prague is not only the capital city of the Czech Republic; it is the largest city in the country and the fourteenth largest in the entire European Union.", 49.53372, 14.15740, "czechrepublic.jpg"),
(3, "Cala de Sant Vicent",  490.90, "Super beautiful bay with crystal clear sea. Great restaurants and hotels. A bay to unwind.", 39.99399, 3.04964, "ibiza.jpg"),
(4, "Himalaya", 850.90, "We stayed there 1 night after visiting the EBC.
I'm amazed at what the people up there conjure up.", 30.19570, 83.44099, "himalaya.jpg"),
(5, "Cinque Terre Italy", 680.90, "Be inspired and discover new regions, sights and attractions for your holiday in Italy.", 44.20403, 9.69924, "italy.jpg"),
(6, "Jablanica Bosnia", 990.90, "If you think of Bosnia, the country on the Balkan Peninsula probably does not come to mind as a holiday destination at first. And this despite the fact that there are numerous natural beauties and incredible treasures of different cultures to discover in the Balkan state of 3 million inhabitants. ", 43.66211, 17.16278, "winterbosnia.jpg"),
(7, "Imatran Kylpylä Spa Finnish", 799.99, "Dieses Spa-Resort am Saimaa-See ist 1 Gehminute von Saimaa Adventures für Sportaktivitäten und -ausrüstung sowie 14 km von der Kirche der Drei Kreuze entfernt.Die funktionalen Zimmer bieten Fernseher und Minibar sowie kostenloses WLAN. Zimmer mit gehobener Ausstattung haben einen Balkon, während Suiten eine Küche und eine Sauna haben.", 61.21595, 28.72784, "finnish.jpg"),
(8, "Mount Everest", 215, "This mountain will teach you a lots of great lessons in life, and one of them is that when you see the peak, it doesn't mean that you will always climb higher, as sometimes the mountain will force you to go down many time to reach high levels, and this life as you sometimes go down to go up and high.", 27.98926, 86.92540, "mountain1.jpg"),
(9, "Red Mountain USA", 1280.90, "Mountain is not as red as described. Too much sand. It was too hot due to sun being overhead. Tore up my $300 boots.", 35.52410, -111.87501, "redmountain.jpg");
