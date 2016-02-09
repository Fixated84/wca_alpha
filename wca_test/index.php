<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="css/bulma.css">

<title>Untitled Document</title>
<style>
  .propertys{
/*	height:  258px;
	width: 555px;*/
	
	height:240px;
	width:320px;
	
	}
	
	table.gridtable {
	font-family: verdana,arial,sans-serif;
	color:#333333;
	border-width: 1px;
	border-color: #e86600;
	border-collapse: collapse;
	text-align:center;
	 margin-left:auto; 
    margin-right:auto;
}
table.gridtable th {
	border-width: 1px;
	padding-left: 6px;
	padding-right: 6px;
	text-align:center;
	border-style: solid;
	border-color: #30c200;
	background-color: #ffffff;
	font-size:12px;
}
table.gridtable td {
	border-width: 1px;
	padding-left: 6px;
	padding-right: 6px;
	padding-top: 1px;
	padding-bottom: 4px;
	border-style: solid;
	border-color: #30c200;
	background-color: #ffffff;
	font-size:10px;
}
	
	</style>
</head>

<body>
<nav class="navbar">
  <p class="navbar-item is-centered">
    <a class="link is-info" href="#">Home</a>
  </p>
  <p class="navbar-item is-centered">
    <a class="link is-info" href="#">Menu</a>
  </p>
  <p class="navbar-item is-centered">
    <img src="images/bulma-banner.png" alt="" style="height: 33px;">
  </p>
  <p class="navbar-item is-centered">
    <a class="link is-info" href="#">Reservations</a>
  </p>
  <p class="navbar-item is-centered">
    <a class="link is-info" href="#">Contact</a>
  </p>
</nav>

<div class="columns">
  <div class="column">
  <?php
 include("connect.php");

$query = "SELECT * FROM vehiclelist WHERE 1 ";
$result = mysqli_query($con,$query);

 
 while ($row = mysqli_fetch_array($result)) :
 
 

$year = $row['Year'];
$make = $row['Manufacturer'];
$model = $row['Model'];
$category = $row['Category'];
$colour = $row['Colour'];
$price = $row['Price'];

$stockno = $row['Stocknumber'];	


echo "<p><strong>$year $make $model $category $colour</strong></p>";
echo "<div id=\"".$stockno."\" class=\"imagemap\">";
 
 	
 
	echo "<a href=\"images/cars/".$stockno."_1.jpeg\" class=\"highslide\" onclick=\"return hs.expand(this)\">	";
		
		
       echo "<img class=\"propertys img-responsive img-cool1z\" src=\"images/cars/".$stockno."_1.jpeg\"  alt=\"Thumbnail Image 1\"> </a>";
     
	// endwhile;  
	echo "</div>"; 

endwhile;
?>
  </div>
  <div class="column">
     <?php
		 include("connect.php");

$query = "SELECT * FROM vehiclelist WHERE 1 ";
$result = mysqli_query($con,$query);

 
 while ($row = mysqli_fetch_array($result)):
 

$year = $row['Year'];
$make = $row['Manufacturer'];
$model = $row['Model'];
$category = $row['Category'];
$colour = $row['Colour'];
$stockno = $row['Stocknumber'];	
            
     echo "<table>
 <br>
<td   class=\"but1\" onClick=\"chpic('images/cars/".$stockno."_1.jpeg');\" onMouseOver=\"this.className='but2';\" onMouseOut=\"this.className='but1';\" ><img  class=\"designthumbs img-responsive\" src=\"images/cars/".$stockno."_1.jpeg\" alt=\"\"></td>
  
<td   class=\"but1\" onClick=\"chpic('images/cars/".$stockno."_2.jpeg');\" onMouseOver=\"this.className='but2';\" onMouseOut=\"this.className='but1';\" ><img  class=\"designthumbs img-responsive\" src=\"images/cars/".$stockno."_2.jpeg\" alt=\"\"></td>  
  
 
</tr>

<td   class=\"but1\" onClick=\"chpic('images/cars/".$stockno."_3.jpeg');\" onMouseOver=\"this.className='but2';\" onMouseOut=\"this.className='but1';\" ><img  class=\"designthumbs img-responsive\" src=\"images/cars/".$stockno."_3.jpeg\" alt=\"\"></td>  

<td   class=\"but1\" onClick=\"chpic('images/cars/".$stockno."_4.jpeg');\" onMouseOver=\"this.className='but2';\" onMouseOut=\"this.className='but1';\" ><img  class=\"designthumbs img-responsive\" src=\"images/cars/".$stockno."_4.jpeg\" alt=\"\"></td>  
</table>  <br>";
 endwhile;
 ?>      
  </div>
  <div class="column">
  
  </div>
  <div class="column">
   <?php

 
 	 include("connect.php");

$query = "SELECT * FROM vehiclelist WHERE 1 ";
$result = mysqli_query($con,$query);

 
 while ($row = mysqli_fetch_array($result)):
 

$year = $row['Year'];
$make = $row['Manufacturer'];
$model = $row['Model'];
$category = $row['Category'];
$colour = $row['Colour'];
$stockno = $row['Stocknumber'];	

    echo " 
  
 <table  class=\"gridtable\">
  <tr>
<th>Stock No</th>
<td>".$row['Stocknumber']."</td>
    </tr>
  <tr>
 <th>Category</th>
 <td>".$row['Category']."</td>
    </tr>
  <tr>
<th>Kilometres</th>
 <td>".$row['Kilometres']."</td>
    </tr>
  <tr>
<th>Colour</th> 
 <td>".$row['Colour']."</td>
    </tr>
  <tr>
<th>VIN</th> 
 <td>".$row['Vin']."</td>
    </tr>
  <tr> 
<th>Fuel</th> 
 <td>".$row['Fuel']."</td>
   </tr>
     <tr> 
   <th>Cylinders</th> 
 <td>".$row['Cylinders']."</td>
   </tr>
  <tr> 
<th>Transmission</th>  
  <td>".$row['Transmission']."</td>
   </tr>
  <tr>";
  
 

 
 endwhile;

 ?>
  </div>
</div>
 <!--=====================================-->
 
</body>
</html>
