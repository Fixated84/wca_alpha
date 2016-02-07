<?php
 
include('database.php');
 

//this check is all the formfills have been sent
if (isset($_POST['name'], $_POST['phone'],$_POST['email'],$_POST['username'],$_POST['password']   )){
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

 
 

 if (preg_match('/^[a-zA-Z0-9]+$/i', $_POST['username']) === 0) 
 { $errors[] = 'Your username should contain letters only.';
 
 }
 if (preg_match('/^[a-zA-Z0-9]+$/i', $_POST['password']) === 0) 
 { $errors[] = 'Your password should contain letters only.';
}

//if there are no errors then it will add users to the database
if (empty($errors)){
	
 
	
 
 if	(add_employee($_POST['name'],$_POST['phone'], $_POST['email'], $_POST['username'],$_POST['password']) === false) {$errors[] = 'Something went wrong, you may have already submitted your information.'; }
		
 
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

   




    <title>West Coast Auto - Add Salespersons</title>
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
       <h3 >West Coast Auto Salespersons</h3>  <br>
       
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
<p>
<label for="name">Name:</label>
<input type="text" name="name" id="name" value="<?php if (isset($_POST['name'])) echo htmlentities($_POST['name']); ?>" />
</p>
 

<p>
  <label for="phone">Phone Number:</label>
<input type="text" name="phone" id="phone" value="<?php if (isset($_POST['phone'])) echo htmlentities($_POST['phone']); ?>" />
</p>
<p>
<label for="email">Email Address:</label>
<input type="text" name="email" id="email" value="<?php if (isset($_POST['email'])) echo htmlentities($_POST['email']); ?>" />
</p>

<p>
<label for="username">Username:</label>
<input type="text" name="username" id="username" value="<?php if (isset($_POST['username'])) echo htmlentities($_POST['username']); ?>" />
</p>

<p>
<label for="password">Password:</label>
<input type="text" name="password" id="password" value="<?php if (isset($_POST['password'])) echo htmlentities($_POST['password']); ?>" />
</p>

  

<p>

 <button type="submit"  name="submit" class="btn btn-sm btn-default" >Submit</button>
 <button type="button"  name="submit" onClick="window.location.href='salespersonlist.php'" class="btn btn-sm btn-default" >Go Back</button>
 
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