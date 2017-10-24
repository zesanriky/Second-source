PHP and AJAX MySQL Database 

In the AJAX I will demonstrate how a web page can fetch information from a MySQL database using AJAX technology.

HTML- 
The example above contains a simple HTML form and a link to a JavaScript:

As you can see it is just a simple HTML form with a drop down box called "users" with names and the "id" from the database as option values.

The paragraph below the form contains a div called "txtHint". The div is used as a placeholder for info retrieved from the web server.

When the user selects data, a function called "showUser()" is executed. The execution of the function is triggered by the "onchange" event.

In other words: Each time the user changes the value in the drop down box, the function showUser() is called.

AJAX- 

This is the JavaScript code stored in the file "selectuser.js":

The stateChanged() and GetXmlHttpObject functions are the same as in the PHP AJAX Suggest chapter, you can go to there for an explanation of those.

The showUser() Function

If an item in the drop down box is selected the function executes the following:

 -Calls on the GetXmlHttpObject function to create an XMLHTTP object
 -Defines the url (filename) to send to the server
 -Adds a parameter (q) to the url with the content of the dropdown box
 -Adds a random number to prevent the server from using a cached file
 -Call stateChanged when a change is triggered
 -Opens the XMLHTTP object with the given url
 -Sends an HTTP request to the server

PHP- The server page called by the JavaScript, is a simple PHP file called "getuser.php".

The page is written in PHP and uses a MySQL databse.

The code runs a SQL query against a database and returns the result as an HTML table:

When the query is sent from the JavaScript to the PHP page the following happens:

    PHP opens a connection to a MySQL server
    The "user" with the specified name is found
    A table is created and the data is inserted and sent to the "txtHint" placeholder









