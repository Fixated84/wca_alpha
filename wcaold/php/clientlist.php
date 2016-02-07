 

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="../images/icon.ico">
    <title>West Coast Auto - Client List</title>
    <!-- Bootstrap -->
  <link href="../css/bootstrap.css" rel="stylesheet">
  <link href="../css/style.css" rel="stylesheet">
  
<script type='text/javascript'>//<![CDATA[ 
window.onload=function(){
var btns = document.querySelectorAll('.case')   ,

       
	     emailaddr = document.querySelector('.emailaddr')   
		 
		 
		 
	//	 update = document.querySelector('.update')   
		// phone = document.querySelector('$test') 
		 
	 ;

// looping through the nodelist and attaching eventlisteners
[].forEach.call(btns, function(btn) {
    btn.addEventListener('click', function(event) {
        // fetching the phone number
    //    var selectedPhone = email.value;
	       var selectedPhone = event.target.parentNode.previousSibling.previousSibling.previousSibling.previousSibling.textContent;
	 
    //var test = document.getElementById('firstname').value
	
	// var test = event.target.parentNode.previousSibling.textContent;
  
      emailaddr.value = selectedPhone    ; //setting the value
	  
	 // update.value =  test;
	  
	   // alert(selectedPhone);
	   
	 	 
		 
    }, false);
	
}); 
}//]]>  
 
</script>

 

 
 
   <script>
window.onorientationchange = function() { location.reload() };
</script>
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
           
           <li><a href="../php/clients.php">Clients</a></li>             
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
 

           <li   ><a href="index.html">Home</a></li>
           <li><a href="pages/about.html">About</a></li>
             <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Design<span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="pages/design.html">Display Homes</a></li>
            <li class="divider"></li>
  <li><a href="../pages/appliances.html">Appliances</a></li>                       
            <li><a href="../pages/indoor.html">Indoors</a></li>
            <li><a href="../pages/outdoor.html">Outdoors</a></li>
          </ul>
        </li>
          <li><a href="pages/ourprocess.html">Our Process</a></li>
           <li><a href="pages/faq.html">FAQ</a></li>  
           <li><a href="pages/testimonials.html">Testimonials</a></li> 
                      <li><a href="pages/testimonials.html">Clients</a></li>   
           <li><a href="pages/contact.html">Contact</a></li>   
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
        <div class="col-sm-7 col-sm-offset-1 col-lg-offset-2 col-lg-6">
         <hr>
          <h3>AllStyle Homes Clients</h3>

<SCRIPT type="text/javascript">
function goToPage(url)
{
var initial = "http://localhost/php/removeclient";
var extension = ".php?email=";

document.something.action=initial+extension+url;
}
</SCRIPT>

      
  <!--<INPUT type="text"  id="test"  name="test" value=""  class="phone1"> --> 
 

 

<table  class="gridtable">
  <tr>
<th>Name</th>

<th>Address</th>
<th>Phone</th>
<th>Email</th>

 <!--<th>Password</th>-->
 <th>Remove</th >
 <th>Update</th >
<tr>



 
<?php
include('database.php');





$query = mysql_query("SELECT * FROM customers WHERE 1 ");
 while($row = mysql_fetch_array($query)):

$firstname = $row['name'];
 
$email = $row['address'];
$phone = $row['phone'];
$property = $row['email'];
 
  
 
// echo "<td>".$row['email']."</td>";
//echo "<td>".$row['phone']."</td>";
//echo "<td>".$row['username']."</td>";

echo "<tr id=\"tr1\">";
echo "<td>".$row['name']."</td>";
echo "<td>".$row['address']."</td>";
 echo "<td>".$row['phone']."</td>";
 echo "<td>".$row['email']."</td>";
 
 // echo "<td>".$row['password']."</td>";
  echo "<td> <input type=\"checkbox\" class=\"case\" name=\"case[]\" value=\"\1\" onclick=\"myfunc(this);\" onChange=\"cbChange(this)\"></td>";
  echo "<td> <input type=\"checkbox\" class=\"updateinfo\" name=\"updateinfo[]\" value=\"\1\" onclick=\"myfunc(this);\" onChange=\"cbChange(this)\"></td>";
endwhile;
    
	/* <?php $testr = $_POST['testcode']?> */
	 
	
   //  $testr = document.getElementById('test').value;
   // if( isset( $_POST ["test"] )) $testr = $_POST ["test"];
	
	//echo $testr;
  
 // $testr = document.getElementById('test').value;
  
  
  //   if(isset($_POST['updatename'])){
	//	   $testr = $_POST['updatename'];
 //  echo $testr;
       // echo("You clicked button update!");
        //and then execute a sql query here
 //   $updateQuery =   mysql_query("UPDATE `clients` SET `username` = '".$testr."'");
// }
 //   else {
 //   echo" dhur";
  //  }
	
	
   
   if (isset($_POST['updatefirstname'])) {
	   //   echo("You clicked button one!");
   $fname  = $_POST['updatefirstname'];
   $lname = $_POST['updatelastname'];
   $emailadd = $_POST['updateemail'];
   $phonenum = $_POST['updatephone']; 
   $propertys = $_POST['updateproperty'];  
   $usrname = $_POST['updateusername']; 
   
   $help = $_POST['updatehelp']; 
   
 // echo $help;
 
 // PRROBLEM MAYBE QUERY LISTING ALL ENTRYS
 
 
      $updateQuery =    mysql_query("UPDATE `clients` SET `firstname` = '".$fname."', `lastname` = '".$lname."', `email` = '".$emailadd."', `phone` = '".$phonenum."', `property` = '".$propertys."', `username` = '".$usrname."' WHERE `username` = '".$help."'");
  
//  echo "<h1>Hello ".$testr."</h1>";
    
  
 $query = mysql_query("SELECT * FROM clients WHERE username = '".$usrname."'");
  while($row = mysql_fetch_array($query)):
 
     
   
  
    



 
 
endwhile;
   } 
  
?>

</table><br> 

 
 
<div class="col-sm-3 col-md-9 col-md-offset-2 col-lg-offset-4 col-lg-5">

 

<form  class="hideupdate"    method="post">
First Name: <input type="text" name="updatefirstname" class="updatefirstname">
<br>
Last Name: <input type="text" name="updatelastname" class="updatelastname">
<br>
Email: <input type="text" name="updateemail" class="updateemail">
<br>
Phone: <input type="text" name="updatephone" class="updatephone">
<br>
<!--Property: <input type="text" name="updateproperty" class="updateproperty">-->
  Display House:<br>

    <select id="updateproperty" name="updateproperty" style="width:190px" class="updateproperty">
    <option value="Moreton 130">Moreton 130</option>
    <option value="Moreton 134">Moreton 134</option>
    <option value="Whitsunday 138">Whitsunday 138</option>   
    <option value="Sorrento 145">Sorrento 145</option> 
    <option value="Maquarie 147">Maquarie 147</option>   
    <option value="Sorrento 151">Sorrento 151</option> 
    <option value="Maquarie 151">Maquarie 151</option>   
    <option value="Alice 152">Alice 152</option> 
    <option value="Jodie 154">Jodie 154</option>   
    <option value="Brook 162">Brook 162</option> 
    <option value="Halifax 162">Halifax 162</option>   
    <option value="Jodie 163">Jodie 163</option>
    <option value="Sorrento 165">Sorrento 165</option>   

     
        </select>
 

<br> 
Username: <input type="text" name="updateusername" class="updateusername">  
 <input type="hidden" name="updatehelp" class="updatehelp">  
<br>
<!--Password: <input type="text" name="updatepassword" class="updatepassword"> -->
<!--<input type="submit">--> 
<br>
     <button type="submit" class="btn btn-sm btn-default center-block" >Submit</button>
</form>
<br><br>
</div> 
 <br>
 
<FORM name="something" method="post" onsubmit="goToPage(this.url.value);">
  
  <div class="col-sm-3 col-md-9 col-md-offset-2 col-lg-7 col-lg-offset-4">
  <button type="button" class="btn btn-sm btn-default ce" onClick="window.location.href='addcustomer.php'" value="Log Out">Add</button> 
    
         <INPUT type="hidden"  id="hello1" name="emailaddr"   class="aa" >
        <button type="submit"  name="url" class="btn btn-sm btn-default emailaddr" >Remove</button>
        
 <button type="button"  name="goback" onClick="window.location.href='admin.php'" class="btn btn-sm btn-default" >Go Back</button>
         
         <button type="button" class="btn btn-sm btn-default" onClick="window.location.href='password_protect_client.php?logout=1'" value="Log Out">Logout</button>      
   </div>     
 </FORM>    
  
  
 
</div>
        <div class="col-sm-3 col-lg-3 col-md-offset-1">
        
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
		       
			    var select1 = event.target.parentNode.previousSibling.previousSibling.previousSibling.previousSibling.previousSibling.previousSibling.previousSibling.textContent; 
			    var select2 = event.target.parentNode.previousSibling.previousSibling.previousSibling.previousSibling.previousSibling.previousSibling.textContent; 
				
		       var select3 = event.target.parentNode.previousSibling.previousSibling.previousSibling.previousSibling.previousSibling.textContent; 
			  
			   var select4 = event.target.parentNode.previousSibling.previousSibling.previousSibling.previousSibling.textContent; 
			   
			   var select5 = event.target.parentNode.previousSibling.previousSibling.previousSibling.textContent; 

			     var select6 = event.target.parentNode.previousSibling.previousSibling.textContent; 
				 
				  var select7 = event.target.parentNode.previousSibling.previousSibling.textContent;
				 updatehelp
				 
				//   var select7 = event.target.parentNode.previousSibling.previousSibling.textContent; 
			  
		firstname.value =  select1 ;
		lastname.value =  select2 ;
		email.value =  select3 ;
 	phonenumber.value = select4;
	 	property.value = select5;
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
  </body>
</html>