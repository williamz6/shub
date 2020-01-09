<?php
require('db.php');
session_start();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Soutech</title>
	<link href="css/bootstrap-4.3.1.css" rel="stylesheet" type="text/css">
	<link href="LineIcons-Package/LineIcons.css" rel="stylesheet" type="text/css">
	<link href="css/style.css" rel="stylesheet" type="text/css">
	
	<style>


.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-menu {
  display: none;
  position: absolute;
  background-color: antiquewhite;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-menu a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-menu a:hover {background-color: #336066;
		
		color: #fff !important;
		}

.dropdown:hover .dropdown-menu {display: block;}


</style>
</head>

<body>
	<section class="img">
	  <nav class="navbar navbar-expand-lg navbar-light bg-transparent"> <a class="navbar-brand" href="/"><img src="images/logo-1.png" class="img-fluid" width="50" alt="SOUTECH	"></a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
		  <div class="collapse navbar-collapse" id="navbarSupportedContent1">
		    <ul class="navbar-nav ml-auto">
		      <li class="nav-item active"> <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a> </li>
		      <li class="nav-item"> <a class="nav-link" href="#">Visit Soutech</a> </li>
		      <li class="nav-item"> <a class="nav-link" href="#">IT& Biz Training</a> </li>
		      <li class="nav-item"> <a class="nav-link" href="#">Tech Updates</a> </li>
		      <li class="nav-item"> <a class="nav-link" href="#">Hub Programs</a> </li>
		      <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Space Programs </a>
		        <div class="dropdown-menu" aria-labelledby="navbarDropdown1"> <a class="dropdown-item" href="#">Action</a> <a class="dropdown-item" href="#">Another action</a>
		          <div class="dropdown-divider"></div>
		          <a class="dropdown-item" href="#">Something else here</a> </div>
	          </li>
		      <li class="nav-item"> <a class="nav-link" href="#">Contact</a> </li>
	        </ul>
<!--
		    <form class="form-inline my-2 my-lg-0">
		      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
		      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
	        </form>
-->
	    </div>
	  </nav>
		<?php
		if(isset($_SESSION['message'])):
?>
		<div class="alert alert-<?=$_SESSION['msg_type']?> alert-dismissible" role="alert" id="alertMsg"><span class="close" data-dismiss="alert" aria-label="Close" style="cursor: pointer;">&times;</span>
<?php
		echo $_SESSION['message'];
			 unset($_SESSION['message']);
?>
			</div>
<?php endif; ?>
		<div class="container">
			<p class="lead smtext text-light mt-5">
				We create a convenient working space best to you.
				The global community for
tech entrepreneurs & startups
			</p>
			<button class="btn btn-outline-warning float-right" type="submit">Get Started </button>
			
		</div>
    </section>
	<section class="bg">
		<div class="container">
			<div class="row">
			  <div class="col-md-6 mt-4">
				<p class="lead text-warning font-italic font-weight-normal text-uppercase">Apply For Training</p>
				<form class="mb-5">
					  <div class="form-group">
					    <label for="exampleInputEmail1">Email address</label>
					    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
					    <small id="emailHelp1" class="form-text text-muted">We'll never share your email with anyone else.</small> </div>
					  <div class="form-group">
					    <label for="exampleInputPassword1">Course</label>
					    <select>
						  	<option>Web Design</option>
						  	<option>Digital Marketing</option>
						  	<option>Andriod</option>
						  	<option>Cyber Security</option>
						  	<option>SEO</option>
						  </select>
			      </div>
					 
					  <button type="submit" class="btn btn-primary">Submit</button>
			    </form>
                </div>
				<div class="col-md-6 mt-4">
					
					<button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#exampleModal">
  Become a Member
</button>
					<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-primary">
        <h5 class="modal-title " id="exampleModalLabel">Become A Member</h5>
        <button type="button" class="btn btn-danger" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
			<div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="exampleInputEmail2" placeholder="Enter name" name="name">
            </div>
          <div class="form-group">
            <label for="exampleInputEmail2">Email address</label>
            <input type="email" class="form-control" id="" placeholder="Enter email" name="email">
            <small id="emailHelp2" class="form-text text-muted">We'll never share your email with anyone else.</small> </div>
          <div class="form-group">
            <label for="exampleInputPassword2">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password" name="psw">
          </div>
			<div class="form-group">
            <label for="exampleInputPassword2">Confirm Password</label>
            <input type="password" class="form-control" id="" placeholder="Confirm Password" name="cpsw">
			</div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-success"  name="reg">Register</button>
      </div>
    </div>
  </div>
</div>
				</div>
			</div>
		</div>
	</section>
	<footer>
	<div class="container">
		<div class="row mt-5">
			<div class="col-md-6">
				<h4>Contact Info</h4>
			<div class="abj">
						<ul class="list-unstyled"><span class="text-dark text-uppercase font-weight-bold">Abuja Office</span>
				<li style="display: flex; flex-flow: row;"><i class="lni lni-map text-warning mr-3 mt-1"></i>SOUTECH Web Consults.
67 Block 1A, Guest House, Kano Street After Shehu Shagari Mosque,900241
Area 1, Abuja</li>
					<li style="display: flex; flex-flow: row;"><i class="text-warning mr-3 mt-1 lni-phone"></i>+234( 0803 412 1380)</li>
					<li style="display: flex; flex-flow: row;"><i class="text-warning mr-3 mt-1 lni-envelope"></i>contact@soutechventures.com</li>
					
				</ul>
				</div>
				<div class="owerri">
						<ul class="list-unstyled"><span class="text-dark text-uppercase font-weight-bold">Owerri Office</span>
				<li style="display: flex; flex-flow: row;"><i class="lni lni-map text-warning mr-3 mt-1"></i>SOUTECH Co working Hub
30 Mbari Street, By Crunchies
Ikenegbu Layout,
Owerri, Imo State</li>
					<li style="display: flex; flex-flow: row;"><i class="text-warning mr-3 mt-1 lni-phone"></i>+234( 0803 412 1380)</li>
					<li style="display: flex; flex-flow: row;"><i class="text-warning mr-3 mt-1 lni-envelope"></i>contact@soutechventures.com</li>
					
				</ul>
				</div>
				
				
			</div>
			<div class="col-md-6">
				<p class="text-center font-weight-bold">Our Services and Training Solutions</p>
				<div>
					<ul>
					<li><a href="/">Mobile App Development</a></li>
					<li><a href="/">Websites, eBusiness &  eCommerce Platform Development</a></li>
					<li><a href="/">Integrated Online Marketing Solutions</a></li>
					</ul>
				</div>
				<div>
					<ul>
					<li><a href="/">Web Portals and Application Development</a></li>
					<li><a href="/">Alternative Energy Deployment</a></li>
					<li><a href="/">Softwares(Antivirus,Windows,Utility)</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="socials mx-auto text-center">
			<div class="text-center d-flex">
				<ul class="list-unstyled mx-auto d-flex" style="flex-flow: row;">
				<li class="mr-2"><a href="/" class="text-warning"><i class="lni-facebook size-sm"></i></a></li>
				<li class="mr-2"><a href="/" class="text-warning"><i class="lni-whatsapp size-sm"></i></a></li>
				<li><a href="/" class="text-warning"><i class="lni-instagram-original size-sm"></i></a></li>
				</ul>
			</div>
		</div>
	</div>
	</footer>
	
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap-4.3.1.js"></script>
</body>
</html>
<?php
if(isset($_POST['reg'])){
	$name= $_POST['name'];
	$email= $_POST['email'];	
	$psw= $_POST['psw'];	
	$cpsw= $_POST['cpsw'];
	
	if($psw == $cpsw){
		$insertquery= "INSERT INTO users(`name`,`email`,`password`) VALUES('$name','$email','$psw')";
		
		$insertact= mysqli_query($dblink,$insertquery) or die(mysqli_error($dblink));
		 $_SESSION['message']= "record has been added";
		$_SESSION['msg_type']= "success";
		 exit(header("location: index.php")); 
	}
	
}
?>
