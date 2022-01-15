Bamini font added/ 
http://localhost/dompdf/HtmlToPdfController to run the app
DBNAME : dbmanage
Table Query:

CREATE TABLE `memberTable` (
 `id` int(10) NOT NULL AUTO_INCREMENT,
 `member` varchar(50),
 `paddress` varchar(70),
 `city` varchar(20),
 `country` varchar(20),
 `state` varchar(20),
 `district` varchar(20),
 `taluk` varchar(20),
 `pin` int(6),
 `cnumber` varchar (10),
 `wnumber` varchar (10),
 `email` varchar(40),
 `dob` date,
  `gender` varchar(12),
  `equalification` varchar(30),
 `skills` varchar(70),
 `baptized` varchar(3),
 `declaration` varchar(30),
 `adhar` varchar(16),
  `memberimage` varchar(30),
    
  PRIMARY KEY (`id`));
