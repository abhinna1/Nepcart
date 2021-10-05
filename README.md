# Nepcart
Nepcart is an e-commerce website built using html, css, php and mysql. A local server is hosted using xampp for this purpose.
In order to run the web app, first clone the repository in the htdocs folder inside the xampp folder. After cloning, make sure you are on the master branch.
Next, import the sql file in the config folder using phpmyadmin.
After importing the sql file, go the the Config.php file in the config folder and scroll down to the getObject() method in the Config class.
Inside the getObject() method, set the second and third parameter of the Config object to your sql server's username and password respectively.
After this, you can use the website by visiting the "http://localhost/nepcart/signup%20page/registration.php" url to redirect you to the sign up page.
You can now create a new account and login or search products on your own.
