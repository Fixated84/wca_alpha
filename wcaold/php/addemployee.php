<?php
 
include('database.php');
 

//this check is all the formfills have been sent
if (isset($_POST['name'], $_POST['address'],$_POST['phone'],$_POST['email']  )){
	$errors = array();
	
//check if the first name only contains letters and not 0 characters in length 	 
 if (preg_match('/^[a-zA-Z ]+$/i', $_POST['name']) === 0) 
 { $errors[] = 'Your first name should contain letters only.';
}
//check if the first name only contains letters and not 0 characters in length 
// if (preg_match('/^[a-zA-Z]+$/i', $_POST['lastname']) === 0) 
// { $errors[] = 'Your last name should contain letters only.';
//}
 
//Checks if the email is valid
if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) === false)  
	 { $errors[] = 'Your email address does not appear to be valid.';

}

  
 if (preg_match('/^[a-zA-Z0-9]+$/i', $_POST['phone']) === 0) 
	 { $errors[] = 'The phone you selected does not appear to be valid.';}

 
 

 if (preg_match('/^[a-zA-Z0-9]+$/i', $_POST['address']) === 0) 
 { $errors[] = 'Your username should contain letters only.';
 
 }
  
//if there are no errors then it will add users to the database
if (empty($errors)){
	
 
	
 
 if	(add_employee($_POST['name'],$_POST['address'], $_POST['phone'], $_POST['email']) === false) {$errors[] = 'Something went wrong, you may have already submitted your information.'; }
		
 
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
    <title>AllStyle Homes - Employee Form</title>
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
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#inverseNavbar1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
       <!-- <a class="navbar-brand" href="#">AllStyle Homes</a>-->
        
        </div>
        
         <div class="navbar-header1">
        <button type="button" class="navbar-toggle collapsed menu-toggle pull-left" data-toggle="collapse" ><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
       <!-- <a class="navbar-brand" href="#">AllStyle Homes</a>-->
        
        </div>
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="inverseNavbar1">
        <ul class="nav navbar-nav">
       <!--   <li class="active"><a href="#">Link<span class="sr-only">(current)</span></a></li>-->
          <li ><a href="../index.html">Home</a></li>
           <li><a href="../pages/pages/about.html">About</a></li>
          <!-- <li><a href="pages/design.html">Design</a></li>-->
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
     
        
      </div>
      <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
  </nav>
<div class="navbarside navbar-inverse">

<nav >
<ul class="nav navbar-nav">
<br>
<br>

           <li ><a href="../index.html">Home</a></li>
           <li><a href="../pages/about.html">About</a></li>
       <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Design<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="pages/design.html">Display Homes</a></li>
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
  <img src="../images/logo.png" class="img-responsive center-block" alt="Placeholder image"> 
 
  <!--End Col-->
  </div>
    <div class="row">
        <div class="col-sm-7 col-sm-offset-1 col-lg-offset-2 col-lg-6 col-xs-10 col-xs-offset-1">
         <hr>
 <h3 id='typewriter'>AllStyle Homes Add Employee Form </h3>
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
<p>
<label for="name">Name:</label>
<input type="text" name="name" id="name" value="<?php if (isset($_POST['name'])) echo htmlentities($_POST['name']); ?>" />
</p>
 

<p>
  <label for="address">Address:</label>
<input type="text" name="address" id="address" value="<?php if (isset($_POST['address'])) echo htmlentities($_POST['address']); ?>" />
</p>
<p>
<label for="phone">Phone:</label>
<input type="text" name="phone" id="phone" value="<?php if (isset($_POST['phone'])) echo htmlentities($_POST['phone']); ?>" />
</p>

<p>
<label for="email">Email:</label>
<input type="text" name="email" id="email" value="<?php if (isset($_POST['email'])) echo htmlentities($_POST['email']); ?>" />
</p>

 
  

<p>

 <button type="submit"  name="submit" class="btn btn-sm btn-default" >Submit</button>
 <button type="button"  name="submit" onClick="window.location.href='employees.php'" class="btn btn-sm btn-default" >Go Back</button>
<!--<input type="submit" value="Submit" /> 
<input name="Button2" type="button"   onClick="window.location.href='employees.php'" value="Go Back"/>
--> 
<!--<input type="button" value="Login" onClick="window.location.href='orderlist.php'"/> 
-->
 

</p>

</form>

 </div>

<br>
      </div>
        <div class="col-sm-3 col-lg-3">
        
     <hr>


 
 <a  href="https://greatstartgrant.osr.qld.gov.au/" target="_blank" ><img  class="displayed img-responsive" src="../images/grant.png" alt="New Start Grant" height="130" width="180">  </a>
     

      <a  href="../pages/design.html" ><img class="displayed img-responsive"  src="../images/340.PNG" alt="Home and Land from $340 per week" height="130" width="180">  </a>  
     
  

     <a  href="../pages/design.html" ><img class="displayed img-responsive"  src="../images/land.PNG" alt="Home and land from 270000" height="130" width="180">    </a>
    
   

        <a  href="https://greatstartgrant.osr.qld.gov.au/quick-calculate.php" target="_blank" ><img class="displayed img-responsive"  src="../images/loan.PNG" alt="Loan Calculator" height="130" width="180"></a>     
    
        
        
        
        </div>
        
      </div>
      
      <hr>
        <div class="row">
    <div class="text-center col-md-6 col-md-offset-3">
      
            <p>Copyright &copy; 2015 &middot; All Rights Reserved &middot; <a href="../pages/privacy.html" >Privacy Information</a> | <a href="admin.php" >Admin Page</a></p>
    </div>
      
  </div>
    <hr>
    <!--End Row-->   
</div>
<!--End Wrapper-->
  </div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
	<script src="../js/jquery-1.11.2.min.js"></script>

	<!-- Include all compiled plugins (below), or include individual files as needed --> 
	<script src="../js/bootstrap.js"></script>
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
  </body>
</html>