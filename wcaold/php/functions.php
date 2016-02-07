 <?php
 
 
 
 
 // adds the infomation to the table.
 function add_user($firstname, $lastname, $email, $phone, $property){
	 
//The escapes characters like ' and " to prevent MySQL Injections.  
//this will append a backslash to any my sql special characters then set its self back to the variable.
$firstname = mysql_real_escape_string($firstname);	
$lastname = mysql_real_escape_string($lastname);	
$email = mysql_real_escape_string($email);	
$phone = mysql_real_escape_string($phone);	
$property = mysql_real_escape_string($property);	

//this inserts the above into the columns
$result = mysql_query("INSERT INTO `users` (`firstname`, `lastname`, `email`, `phone`, `property`) VALUES ('{$firstname}', '{$lastname}', '{$email}','{$phone}','{$property}')");

 // when result is not = false meaning the query has not failed we want to return true when it is false we want to return false.
 return ($result !== false) ? true : false;
 
 }
 
  // adds the infomation to the table.
 function add_car($name){
	 
//The escapes characters like ' and " to prevent MySQL Injections.  
//this will append a backslash to any my sql special characters then set its self back to the variable.
$name = mysql_real_escape_string($name);	
 

//this inserts the above into the columns
$result = mysql_query("INSERT INTO `manufacturer` (`name`) VALUES ('{$name}')");

 // when result is not = false meaning the query has not failed we want to return true when it is false we want to return false.
 return ($result !== false) ? true : false;
 
 }
 
 
 
  function add_customer($name, $address, $phone, $email){
	 
//The escapes characters like ' and " to prevent MySQL Injections.  
//this will append a backslash to any my sql special characters then set its self back to the variable.
$name = mysql_real_escape_string($name);	
$address = mysql_real_escape_string($address);	
 	
$phone = mysql_real_escape_string($phone);	
$email = mysql_real_escape_string($email);	

//this inserts the above into the columns
$result = mysql_query("INSERT INTO `customers` (`name`, `address`, `phone`, `email`) VALUES ('{$name}', '{$address}', '{$phone}','{$email}')");

 // when result is not = false meaning the query has not failed we want to return true when it is false we want to return false.
 return ($result !== false) ? true : false;
 
 }
 
 
  function add_client($firstname, $lastname, $email, $phone, $property, $username, $password){
	 
//The escapes characters like ' and " to prevent MySQL Injections.  
//this will append a backslash to any my sql special characters then set its self back to the variable.
$firstname = mysql_real_escape_string($firstname);	
$lastname = mysql_real_escape_string($lastname);	
$email = mysql_real_escape_string($email);	
$phone = mysql_real_escape_string($phone);	
$property = mysql_real_escape_string($property);	
$username = mysql_real_escape_string($username);	
$password = mysql_real_escape_string($password);	

//this inserts the above into the columns
$result = mysql_query("INSERT INTO `clients` (`firstname`, `lastname`, `email`, `phone`, `property`, `username`, `password`) VALUES ('{$firstname}', '{$lastname}', '{$email}','{$phone}','{$property}','{$username}','{$password}')");

 // when result is not = false meaning the query has not failed we want to return true when it is false we want to return false.
 return ($result !== false) ? true : false;
 
 }
 
 
   function add_employee($name, $phone, $email, $username, $password){
	 
//The escapes characters like ' and " to prevent MySQL Injections.  
//this will append a backslash to any my sql special characters then set its self back to the variable.
$firstname = mysql_real_escape_string($firstname);	
$lastname = mysql_real_escape_string($phone);	
$email = mysql_real_escape_string($email);	
 	

$username = mysql_real_escape_string($username);	
$password = mysql_real_escape_string($password);	

//this inserts the above into the columns
$result = mysql_query("INSERT INTO `salesperson` (`name`, `phone`, `email`, `username`, `password`) VALUES ('{$name}', '{$phone}', '{$email}','{$username}','{$password}')");

 // when result is not = false meaning the query has not failed we want to return true when it is false we want to return false.
 return ($result !== false) ? true : false;
 
 }
 
    function add_vehicles($manufacturer, $model, $category, $year, $price, $kilometres, $colour, $registration, $vin, $cylinders, $fuel, $transmission){
	 
//The escapes characters like ' and " to prevent MySQL Injections.  
//this will append a backslash to any my sql special characters then set its self back to the variable.
	
$manufacturer = mysql_real_escape_string($manufacturer);	
$model = mysql_real_escape_string($model);	
$category = mysql_real_escape_string($category);	
$year = mysql_real_escape_string($year);	
$price = mysql_real_escape_string($price);	
$kilometres = mysql_real_escape_string($kilometres);	
$colour = mysql_real_escape_string($colour);	
$registration = mysql_real_escape_string($registration);	
$vin = mysql_real_escape_string($vin);	
$cylinders = mysql_real_escape_string($cylinders);	
$fuel = mysql_real_escape_string($fuel);	
$transmission = mysql_real_escape_string($transmission);	
 




//this inserts the above into the columns
$result = mysql_query("INSERT INTO `vehiclelist` (`manufacturer`, `model`, `category`, `year`, `price`, `kilometres`, `colour`, `registration`, `vin`, `cylinders`, `fuel`, `transmission`) VALUES ( '{$manufacturer}', '{$model}','{$category}','{$year}','{$price}','{$kilometres}','{$colour}','{$registration}','{$vin}','{$cylinders}','{$fuel}','{$transmission}')");

 // when result is not = false meaning the query has not failed we want to return true when it is false we want to return false.
 return ($result !== false) ? true : false;
 
 }
 
    function update_employee($username){
	 
//The escapes characters like ' and " to prevent MySQL Injections.  
//this will append a backslash to any my sql special characters then set its self back to the variable.


$username = mysql_real_escape_string($username);	
$password = mysql_real_escape_string($password);	

//this inserts the above into the columns
$result = mysql_query("INSERT INTO `employees` (`username`) VALUES ('{$username}')");

 // when result is not = false meaning the query has not failed we want to return true when it is false we want to return false.
 return ($result !== false) ? true : false;
 
 }
 
 
 // removes the user email from the table.
  function remove_user($email){

//this will append a backslash to any my sql special characters then set its self back to the variable.
$email = mysql_real_escape_string($email);
//delete from table where the email = the string $email
mysql_query("DELETE FROM `users` WHERE `email` = '{$email}'");	 
	 
	  
 }
 
   function remove_client($email){

//this will append a backslash to any my sql special characters then set its self back to the variable.
$email = mysql_real_escape_string($email);
//delete from table where the email = the string $email
mysql_query("DELETE FROM `clients` WHERE `email` = '{$email}'");	 
	 
	  
 }
 
   function remove_salesperson($email){

//this will append a backslash to any my sql special characters then set its self back to the variable.
$email = mysql_real_escape_string($email);
//delete from table where the email = the string $email
mysql_query("DELETE FROM `salesperson` WHERE `email` = '{$email}'");	 
	 
   
 } 
 
    function remove_vehicle($stocknumber){

//this will append a backslash to any my sql special characters then set its self back to the variable.
$stocknumber = mysql_real_escape_string($stocknumber);
//delete from table where the email = the string $email
mysql_query("DELETE FROM `vehiclelist` WHERE `stocknumber` = '{$stocknumber}'");	 
	 
   
 } 
 
 
 
 
 // sends the message to all users.
  function mail_order($email){{
	$to = 'fixated84@gmail.com';
$subject = 'AllStyle Homes Order Form';

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$property = $_POST['property'];
 

$body =  <<<EMAIL

Order From: $firstname $lastname 

Email    : $email 
Phone    : $phone 
Property : $property
 

 

EMAIL;

 $header = 'From: AllStyle Homes <orders@alltyleshomes.com.au>';
 
  
/*	mail($to, $subject, $body , $header);*/
		 
	}
 
 }

 
	 
	  
 
 
 
  ?>