How to Select Data Between Two Dates in PHP/MySQL ?

This project will show you how to select mysql rows between two inputted dates. I've also included 2 mysqli methods which are Object-oriented and Procedural in the comments. So, feel free to switch between them.

Creating our Database

First, we're going to create a database that contains our data.

1. Open phpMyAdmin.
2. Click databases, create a database and name it as "between".
3. After creating a database, click the SQL and paste the below code.

[code]

CREATE TABLE `login` (
  `logid` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `login_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


[/code]
 
Inserting Data Into our Database

Next Step in to insert some data into our database. This will serve as our reference when we select our dates.
1. Click the database "between" that we have created earlier.
2. Click SQL and paste the code below.


[code]

INSERT INTO `login` (`logid`, `username`, `login_date`) VALUES
(1, 'nurhodelta', '2017-08-22 07:10:00'),
(2, 'lee', '2017-05-22 08:30:00'),
(3, 'nurhodelta', '2017-08-22 13:15:00'),
(4, 'lee', '2017-03-22 14:00:00'),
(5, 'nurhodelta', '2017-05-16 10:30:00'),
(6, 'lee', '2017-08-15 20:00:00');

[/code]



Creating our Connection

Next step is to create a database connection and save it as "conn.php". This file will serve as our bridge between our form and our database. To create the file, open your HTML code editor and paste the code below after the tag.


[code]

<?php

//MySQLi Procedural
//$conn = mysqli_connect("localhost","root","","between");
//if (!$conn) {
//  die("Connection failed: " . mysqli_connect_error());
//}

//MySQLi Object-oriented
$conn = new mysqli("localhost","root","","between");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

?>

[/code]


Creating our Form and Table

Lastly, we create our login table, our form and our result table on one page. To create the page, open your HTML code editor and paste the code below after the tag. We name this page as "index.php".


[code]

index.php

[/code]






