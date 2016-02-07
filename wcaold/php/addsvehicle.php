<?php
 
include('database.php');
 

//this check is all the formfills have been sent
if (isset($_POST['manufacturer'],$_POST['model'],$_POST['category'],$_POST['year'],$_POST['price'],$_POST['kilometres'],$_POST['colour'],$_POST['registration'],$_POST['vin'],$_POST['cylinders'],$_POST['fuel'],$_POST['transmission']   )){
	$errors = array();
	
//check if the first name only contains letters and not 0 characters in length 	 
 // if (preg_match('/^[0-9]+$/i', $_POST['stocknumber']) === 0) 
 // { $errors[] = 'The stock number should contain numbers only.';
// }
//check if the first name only contains letters and not 0 characters in length 
  if (preg_match('/^[a-zA-Z ]+$/i', $_POST['manufacturer']) === 0) 
  { $errors[] = 'The manufacturer should contain letters only.';
 }
 
   if (preg_match('/^[a-zA-Z- ]+$/i', $_POST['model']) === 0) 
  { $errors[] = 'The model should contain letters only.';
 }
 
    if (preg_match('/^[a-zA-Z0-9 ]+$/i', $_POST['category']) === 0) 
  { $errors[] = 'The category should contain letters only.';
 }
 
     if (preg_match('/^[0-9]+$/i', $_POST['year']) === 0) 
  { $errors[] = 'The year should contain numbers only.';
 }
 
      if (preg_match('/^[0-9,.]+$/i', $_POST['price']) === 0) 
  { $errors[] = 'The price should contain numbers only.';
 }
 
       if (preg_match('/^[0-9,.]+$/i', $_POST['kilometres']) === 0) 
  { $errors[] = 'The price should contain numbers only.';
 }
 
        if (preg_match('/^[a-zA-Z ]+$/i', $_POST['colour']) === 0) 
  { $errors[] = 'The price should contain numbers only.';
 }
//Checks if the email is valid
//if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) === false)  
	// { $errors[] = 'Your email address does not appear to be valid.';

//}

  
// if (preg_match('/^[a-zA-Z0-9]+$/i', $_POST['phone']) === 0) 
	// { $errors[] = 'The phone you selected does not appear to be valid.';}
 //
 
 

// if (preg_match('/^[a-zA-Z0-9]+$/i', $_POST['username']) === 0) 
// { $errors[] = 'Your username should contain letters only.';
 
 //}
// if (preg_match('/^[a-zA-Z0-9]+$/i', $_POST['password']) === 0) 
// { $errors[] = 'Your password should contain letters only.';
////}

//if there are no errors then it will add users to the database
if (empty($errors)){
	
 
	
 
 if	(add_vehicles($_POST['manufacturer'],$_POST['model'],$_POST['category'],$_POST['year'],$_POST['price'],$_POST['kilometres'],$_POST['colour'],$_POST['registration'],$_POST['vin'],$_POST['cylinders'],$_POST['fuel'],$_POST['transmission']) === false) {$errors[] = 'Something went wrong, you may have already submitted your information.'; }
		
 
/*mail_order($_POST['email']);*/
 
}
}
 
 
 

?> 



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="../images/icon.ico">

   




    <title>West Coast Auto - Add Vehicle</title>
    <!-- Bootstrap -->
  <link href="../css/bootstrap.css" rel="stylesheet">
  <link href="../css/style.css" rel="stylesheet">
  
  
  
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
  </head>
  
  
  
  <body>
  
   <!--Testing Fix Nav with navbar-fixed-top-->
  <nav class="navbar navbar-inverse navbar-fixed-top">
     <!--Testing Fix Nav with navbar-fixed-top-->
     
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button  type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#inverseNavbar1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
       <!-- <a class="navbar-brand" href="#">AllStyle Homes</a>-->
        
        </div>
         
              <div class="navbar-header1">
        <button   type="button" class="navbar-toggle collapsed menu-toggle pull-left" data-toggle="collapse" ><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
 
         <!-- <a class="navbar-brand" href="#">AllStyle Homes</a>-->
        
        </div>
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="inverseNavbar1">
        <ul class="nav navbar-nav">
       <!--   <li class="active"><a href="#">Link<span class="sr-only">(current)</span></a></li>-->
           <li ><a href="../index.html">Home</a></li>
           <li class="active"><a href="employee.php">Employee Login</a></li>
          <!-- <li><a href="pages/design.html">Design</a></li>-->
  
           <li><a href="../pages/ourprocess.html">Privacy Policy</a></li>
                             
        </ul>
     
        
      </div>
      <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
  </nav>

<div class="navbarside navbar-inverse">

<nav >
<ul class="nav navbar-nav">
 <br><br>

           <li class="active" ><a href="../index.html">Home</a></li>
           <li><a href="../pages/about.html">About</a></li>
             <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Design<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="../pages/design.html">Display Homes</a></li>
            <li class="divider"></li>
            <li><a href="../pages/appliances.html">Appliances</a></li>                       
            <li><a href="../pages/indoor.html">Indoors</a></li>
            <li><a href="../pages/outdoor.html">Outdoors</a></li>
          </ul>
        </li>
          <li><a href="../pages/ourprocess.html">Our Process</a></li>
           <li><a href="../pages/faq.html">FAQ</a></li>  
           <li><a href="../pages/testimonials.html">Testimonials</a></li>  
                <li><a href="clients.php">Clients</a></li>  
           <li><a href="../pages/contact.html">Contact</a></li>   
              </ul>  
</nav>

</div>

  <div class="container">
    <div class="row">
     
   <div class="col-md-12 col-sm-8 col-sm-offset-0">
 
 <!--Testing Fix Nav with 3 br-->
  <br>
  
<br>
<br>
 <!--Testing Fix Nav with 3 br-->
 
  <img src="../images/logo.png" class="img-responsive center-block" alt="Placeholder image"> <br>
   <!--<hr>-->
  <!--End Col-->
  
  </div>
  
    <div class="col-md-12 col-sm-8 col-sm-offset-0 col-lg-offset-1 col-lg-10">
 
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#defaultNavbar1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
  
            
            </div>
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="defaultNavbar1">
            <ul class="nav navbar-nav hello">
            
              <li ><a href="#">Home<span class="sr-only">(current)</span></a></li>
 
 
  
 
 
              <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">About<span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="#">History</a></li>
                  <li><a href="#">Our Values</a></li>
                  
                </ul>
              </li>
       <li ><a href="#">Specials</a></li> 
       <li ><a href="#">Used Vehicles</a></li>             
               <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Finance<span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="#">Insurance</a></li>
                  
                </ul>
              </li>            
     <li ><a href="#">Testimonals</a></li>         
        <li ><a href="#">Contact</a></li>         
             
            </ul>
    
 
          </div>
          <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
      </nav>

      <!--Testing Fix Nav with 3 br-->
 
   <!--<hr>-->
  <!--End Col-->
  
  </div>
    </div>
    <div class="row">
        
        <div class="col-sm-7 col-sm-offset-1 col-lg-offset-1 col-lg-11">
         <hr>
       <h3 >West Coast Auto - Add Vehicle</h3>  <br>
       
         <div class="row">
        
        <div class="col-sm-7 col-sm-offset-1 col-lg-3 col-lg-offset-3 hello"> 
    <div><br>
   <?php
 
 // shows errors
 if (empty($errors) === false) {
	 echo '<p>', implode('<br>', $errors), '';
 
 } else if (isset($errors) === false) {
	 echo '<p>Please fill in the form.</p>';
 }else{
	
	 echo '<p>You information has been submitted.</p>';
 }
?>
 

</div>
<div>

 

<form id="signupform"   method="post">
<!--<p>
<label for="stocknumber">Stock No:</label>
<input type="text" name="stocknumber" id="stocknumber" value="<?php if (isset($_POST['stocknumber'])) echo htmlentities($_POST['stocknumber']); ?>" />
</p>-->
 

<p>
<!--  <label for="manufacturer">Manufacturer:</label>
<input type="text" name="manufacturer" id="manufacturer" value="<?php if (isset($_POST['manufacturer'])) echo htmlentities($_POST['manufacturer']); ?>" />
-->

<select id="manufacturer" name="manufacturer" style="width:190px">
<?php 
$sql = mysql_query("SELECT name FROM manufacturer");
while ($row = mysql_fetch_array($sql)){
echo "<option value=\"". $row['name'] ."\">" . $row['name'] . "</option>";
}
?>
</select>

</p>
<p>
<label for="model">Model:</label>
<input type="text" name="model" id="model" value="<?php if (isset($_POST['model'])) echo htmlentities($_POST['model']); ?>" />
</p>

<!--<p>
<label for="category">Category:</label>
<input type="text" name="category" id="category" value="<php if (isset($_POST['category'])) echo htmlentities($_POST['category']); ?>" />
</p>-->


<p>

 <label for="category">Category:</label><br>

<select id="category" name="category" style="width:190px">
<?php 
$sql = mysql_query("SELECT description FROM category");
while ($row = mysql_fetch_array($sql)){
echo "<option value=\"".$row['description']."\">". $row['description'] . "</option>";
}
?>  
</select>
<!--  <select id="category" name="category" style="width:190px">
    <option value="Cab Chassi">Cab Chassis</option>
    <option value="Coupe">Coupe</option>
     <option value="Light Truck">Light Truck</option>  
     <option value="Sedan">Sedan</option>  
     <option value="Ute">Ute</option>  
     <option value="Wagon">Wagon</option>  
     <option value="Convertible">Convertible</option>  
     <option value="Hatch">Hatch</option>  
     <option value="People Mover">People Mover</option>  
     <option value="SUV">SUV</option>  
     <option value="Van">Van</option>    
             
        </select>
        
-->        
</p>

<p>
<label for="year">Year:</label>
<input type="text" name="year" id="year" value="<?php if (isset($_POST['year'])) echo htmlentities($_POST['year']); ?>" />
</p>
<p>
<label for="price">Price:</label>
<input type="text" name="price" id="price" value="<?php if (isset($_POST['price'])) echo htmlentities($_POST['price']); ?>" />
</p>

<p>
<label for="kilometres">Kilometres:</label>
<input type="text" name="kilometres" id="kilometres" value="<?php if (isset($_POST['kilometres'])) echo htmlentities($_POST['kilometres']); ?>" />
</p>

<!--<p>
<label for="colour">Colour:</label>
<input type="text" name="colour" id="colour" value="?php if (isset($_POST['colour'])) echo htmlentities($_POST['colour']); ?>" />
</p>
-->
<p>

 <label for="colour">Colour:</label><br>

  <select id="colour" name="colour" style="width:190px">
    <option value="Beige">Beige</option>
    <option value="Black">Black</option>
     <option value="Blue">Blue</option>  
     <option value="Bronze">Bronze</option>  
     <option value="Brown">Brown</option>  
     <option value="Gold">Gold</option>  
     <option value="Green">Green</option>  
     <option value="Grey">Grey</option>  
     <option value="Magenta">Magenta</option>  
     <option value="Maroon">Maroon</option>  
     <option value="Orange">Orange</option>    
     <option value="Pink">Pink</option>        
     <option value="Purple">Purple</option> 
     <option value="Red">Red</option>      
     <option value="Silver">Silver</option>      
     <option value="White">White</option>   
     <option value="Yellow">Yellow</option>           
        </select>
        
</p>

<p>
<label for="registration">Registration:</label>
<input type="text" name="registration" id="registration" value="<?php if (isset($_POST['registration'])) echo htmlentities($_POST['registration']); ?>" />
</p>

<p>
<label for="vin">Vin:   </label><br>
<input type="text" name="vin" id="vin" value="<?php if (isset($_POST['vin'])) echo htmlentities($_POST['vin']); ?>" />
</p>

<!--<p>
<label for="cylinders">Cylinders:</label>
<input type="text" name="cylinders" id="cylinders" value="?php if (isset($_POST['cylinders'])) echo htmlentities($_POST['cylinders']); ?>" />
</p>
-->

<p>

 <label for="cylinders">Cylinders:</label><br>

  <select id="cylinders" name="cylinders" style="width:190px">
    <option value="0">0</option>
    <option value="1">1</option>
     <option value="2">2</option>  
     <option value="3">3</option>  
     <option value="4">4</option>  
     <option value="5">5</option>  
     <option value="6">6</option>  
     <option value="7">7</option>  
     <option value="8">8</option>  
     <option value="9">9</option>  
     <option value="10">10</option>    
     <option value="11">11</option>        
     <option value="12">12</option>        
        </select>
        
</p>

<!--<p>
<label for="fuel">Fuel:</label><br>
<input type="text" name="fuel" id="fuel" value="" /> ?php if (isset($_POST['fuel'])) echo htmlentities($_POST['fuel']); ?></p>-->


<p>

 <label for="fuel">Fuel:</label><br>

  <select id="fuel" name="fuel" style="width:190px">
    <option value="Diesel">Diesel</option>
    <option value="Electric">Electric</option>
     <option value="LPG">LPG</option>  
     <option value="Petrol">Petrol</option>  
     
        </select>
</p>



<!--<p>
<label for="transmission">Transmission:</label>
<input type="text" name="transmission" id="transmission" value="<" />
</p>
?php if (isset($_POST['transmission'])) echo htmlentities($_POST['transmission']); ?>-->
<p>

 <label for="transmission">Transmission:</label><br>

  <select id="transmission" name="transmission" style="width:190px">
    <option value="Automatic">Automatic</option>
    <option value="Manual">Manual</option>
   

     
        </select>
</p>

  

<p>

 <button type="submit"  name="submit"   class="btn btn-sm btn-default">Submit</button>
 <button type="button"  name="submit" onClick="window.location.href='vehiclelist.php'" class="btn btn-sm btn-default" >Go Back</button>
 
 </p>

</form>

 </div>
  </div>
 

<br>       
         
         
         </div>
</div>

  
        
        </div>
        
 
        
     
      
      <hr>
        <div class="row center-block">
    <div class="text-center col-md-6 col-md-offset-3 col-lg-6 col-lg-offset-0 hello">
      
      <p>Copyright &copy; 2015 &middot; All Rights Reserved &middot; <a href="index.html" >Home</a> | <a href="pages/privacy.html" >Privacy Policy</a>  </p>
    </div>
      
  </div>
    <hr>
    <!--End Row-->   

<!--End Wrapper-->
  </div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
	<script src="../js/jquery-1.11.2.min.js"></script>

	<!-- Include all compiled plugins (below), or include individual files as needed --> 
    
       
    
    
	<script src="../js/bootstrap.js"></script>
    
    
   <script type="text/javascript">
	  
	   
	  
     $('.updateinfo').click(function(event) {
		 
	$('.hideupdate').toggle();
 
		 
	// var menu = "hide"; 
  
	// if (menu == "hide") {
	// $('.hideupdate').css('display', 'block');
	 
	// menu = "hide";
	 
	// }else {
		 
	//	  $('.hideupdate').css('display', 'none');
		  
		//   menu = "show";
	  
	  
	  
	 //  }
 
	   
	  firstname = document.querySelector('.updatefirstname'),
	  lastname = document.querySelector('.updatelastname') ,
	  email = document.querySelector('.updateemail') ,
      phonenumber = document.querySelector('.updatephone') ,
	  property = document.querySelector('.updateproperty') ;
	  username = document.querySelector('.updateusername') ;
	  
	  updatehelp = document.querySelector('.updatehelp') ;  
	//  passwd = document.querySelector('.updatepassword') ; 
		 // phone = document.querySelector('$testr') 
		       
			    var select1 = event.target.parentNode.previousSibling.previousSibling.previousSibling.previousSibling.previousSibling.textContent; 
			  //  var select2 = event.target.parentNode.previousSibling.previousSibling.previousSibling.previousSibling.previousSibling.previousSibling.textContent; 
				
		       var select3 = event.target.parentNode.previousSibling.previousSibling.previousSibling.textContent;
			   
			   var select4 = event.target.parentNode.previousSibling.previousSibling.previousSibling.previousSibling.textContent; 
			   
			//   var select5 = event.target.parentNode.previousSibling.previousSibling.previousSibling.textContent; 

			     var select6 = event.target.parentNode.previousSibling.previousSibling.textContent; 
				 
				  var select7 = event.target.parentNode.previousSibling.previousSibling.textContent;
				 updatehelp
				 
				//   var select7 = event.target.parentNode.previousSibling.previousSibling.textContent; 
			  
		firstname.value =  select1 ;
phonenumber.value = select4;
		email.value =  select3 ;
 	
 
		username.value = select6;
     	 updatehelp.value = select7;
		 //  alert(select7);
			  
    
		 
 
      
    });
   </script>      
    
    
    <script type="text/javascript">
$(document).ready(function() {
	
	var menu = "close";
	
   $('.menu-toggle').click(function()  {
	   
	   if (menu == "close") {
		   	   
	   $('.navbarside').css('-webkit-transform', 'translate(0,0)');
	   $('.navbarside').css('-moz-transform', 'translate(0,0)'); 
	   $('.navbarside').css('-o-transform', 'translate(0,0)'); 
	   $('.navbarside').css('transform', 'translate(0,0)'); 
 
	   $('.container').css('-webkit-transform', 'translate(30%,0)');
	   $('.container').css('-moz-transform', 'translate(30%,0)');
	   $('.container').css('-o-transform', 'translate(30%,0)');	   
	   $('.container').css('transform', 'translate(30%,0)');
		
	   $('.navbar-header1').css('-webkit-transform', 'translate(0,0)');
	   $('.navbar-header1').css('-moz-transform', 'translate(0,0)');	   
	   $('.navbar-header1').css('-o-transform', 'translate(0,0)');	   
	   $('.navbar-header1').css('transform', 'translate(0,0)');	   
	   
	   $('.navbar-header1').css('-webkit-transform', 'translate(30%,0)');
	   $('.navbar-header1').css('-moz-transform', 'translate(30%,0)');   
	   $('.navbar-header1').css('-o-transform', 'translate(30%,0)');
	   $('.navbar-header1').css('transform', 'translate(30%,0)');   
	   
	   menu = "open";
	   
	   }else {
		   
	   $('.navbarside').css('-webkit-transform', 'translate(-100%,0)');
	   $('.navbarside').css('-moz-transform', 'translate(-100%,0)');	   
	   $('.navbarside').css('-o-transform', 'translate(-100%,0)');	   
	   $('.navbarside').css('transform', 'translate(-100%,0)');	   
	   
	   $('.container').css('-webkit-transform', 'translate(0,0)');
	   $('.container').css('-moz-transform', 'translate(0,0)');	   
	   $('.container').css('-o-transform', 'translate(0,0)');
	   $('.container').css('transform', 'translate(0,0)');	   
	   	   
	   $('.navbar-header1').css('-webkit-transform', 'translate(-100%,0)');
	   $('.navbar-header1').css('-moz-transform', 'translate(-100%,0)');	   
	   $('.navbar-header1').css('-o-transform', 'translate(-100%,0)');	   
	   $('.navbar-header1').css('transform', 'translate(-100%,0)');	   
	   
	   $('.navbar-header1').css('-webkit-transform', 'translate(0,0)');
	   $('.navbar-header1').css('-moz-transform', 'translate(0,0)');
	   $('.navbar-header1').css('-o-transform', 'translate(0,0)');	   
	   $('.navbar-header1').css('transform', 'translate(0,0)');
	   
	  
	   
	  menu = "close";
	  
	  
	  
	   }
	});   
});
</script>
 <!--    <script type="text/javascript">
$('#myModal').on('shown.bs.modal', function () {
  $('#myInput').focus()
  
 document.getElementsByClassName("rickroll").item("iframe").src = "http://www.youtube.com/embed/dQw4w9WgXcQ?html5=1&autoplay=1";

  
})
</script> -->

<script type="text/javascript">
$('#myModal').on('shown.bs.modal', function () {
      
        $('#myModal').modal('show');
       
   document.getElementsByClassName("rickroll").item("iframe").src = "https://www.youtube.com/embed/dQw4w9WgXcQ?html5=1&autoplay=1";
    });

    $('#myModal').click(function () {
      document.getElementsByClassName("rickroll").item("iframe").src = "1";
 
  
    });
</script>
 


  </body>
</html>