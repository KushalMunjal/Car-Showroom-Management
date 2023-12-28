<?php
session_start();

if(isset($_POST["login"])){

if(!empty($_POST['user']) && !empty($_POST['pass'])) {
    
	$user=$_POST['user'];
	$pass=$_POST['pass'];
    
    $db = mysqli_connect("localhost","root","Kushal@MySQL","car_showroom");
    
	$query=mysqli_query($db,"SELECT * FROM admin WHERE admin_name='".$user."' AND admin_pass='".$pass."'");
    
   	$numrows = mysqli_num_rows($query);
    
	if($numrows !=0)
	{
        while($row=mysqli_fetch_assoc($query))
        {
            $dbusername=$row['admin_name'];
            $dbpass=$row['admin_pass'];
               
	    }

        
        if($user == $dbusername && $pass == $dbpass)
        {

            $_SESSION['admin_name']= $dbusername;

            /* Redirect browser */
            header("Location: admin.php");
        }
	} 
    else 
    {
	echo "Invalid username or password!";
	}

} 
    else {
	echo "All fields are required!";
        }
}
?>

<!DOCTYPE HTML>
<html>
<head>
<title></title>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>

<div class="header">	
<div class="wrap"> 
	<div class="header-bot">
		 <div class="logo">
			 <a href="index.html"><img src="images/logo.png" alt="" style ="width:450px; height: 160px;"></a>
		 </div>

		
		
		<div class="clear"></div> 
	   </div>
	  </div>	
</div>
<div class="header-bottom">
	<div class="wrap">
	<h1 class="text-center"><u>ADMINISTRATOR</u></h1>
		<div class="page-not-found">
		<div class="text-center">
          <h2>SIGN IN
          </h2>
        </div>
      
        <div class="container-fluid row">
          
            <div class="col-md-3"></div>
          
      
          <div class="col-md-6">
        <form class="text-center" action="adminlogin.php" method="post" >            
            <div ><br/>
               <label>USERNAME</label>
      <input type="text" class="form-control transparent-input" size="50" placeholder="" name="user" required >
             </div>
 
            <div ><br/>
               <label>PASSWORD</label>
      <input type="password" class="form-control transparent-input" size="50" placeholder="" name="pass" required>
             </div> 
            <div><br/>
                <button type="submit" class="btn btn-primary" value="login" name="login">Sign in</button>
             </div>
         </form>     
          </div>
        
        </div> 
		</div>
	</div>
</div>


<div class="footer">
	<div class="wrap">
	   <div class="footer-top">			

				<div class="col_1_of_5 span_1_of_5">
					<div class="footer-grid twitts">
					<h3>Our Company</h3>
						<div class="f_menu">
							 <ul>
						          <li>This is a CAR selling dealer</li>
						     	  <li>Please read our Terms and Conditions </li>
						     </ul>
						</div>
				   </div>
				</div>

				<div class="col_1_of_5 span_1_of_5">
					<div class="footer-grid twitts">
						<h3>Get in touch</h3>
						<ul class="follow_icon">
							<li><a href="https://www.google.com" style="opacity: 1;"><img src="images/follow_icon.png" alt=""></a></li>
							<li><a href="#" style="opacity: 1;"><img src="images/follow_icon1.png" alt=""></a></li>
							<li><a href="#" style="opacity: 1;"><img src="images/follow_icon2.png" alt=""></a></li>
							<li><a href="#" style="opacity: 1;"><img src="images/follow_icon3.png" alt=""></a></li>
							<li><a href="#" style="opacity: 1;"><img src="images/follow_icon4.png" alt=""></a></li>
							<li><a href="#" style="opacity: 1;"><img src="images/follow_icon5.png" alt=""></a></li>
						</ul>
						<p>+91 7990280714</p>
						<span>support@abc.com</span>
					</div>
				</div>
				
				<div class="clear"></div>
		</div>
	</div>
</div>
</body>
</html>

    	
    	
            