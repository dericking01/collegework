<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: reg1.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
<style>
  body{background-image: url(cm.jpg); }
</style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>

<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.0/css/bootstrapValidator.min.css'><link rel="stylesheet" href="./fstyle.css">
</head>
<body>
    <?php echo "<h1>Welcome " . $_SESSION['username'] . "</h1>"; ?>
    <!-- partial:index.partial.html -->
<div class="container">

<form class="well form-horizontal" action="connect.php" method="POST"  id="contact_form">
<fieldset>

<!-- Form Name -->
<legend><center><h2><b>Registration Form</b></h2></center></legend><br>

<!-- Text input-->

<div class="form-group">
<label for="firstname" class="col-md-4 control-label">First Name</label>  
<div class="col-md-4 inputGroupContainer">
<div class="input-group">
<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
<input  name="firstname" id="firstname" required placeholder="First Name" class="form-control"  type="text">
</div>
</div>
</div>

<!-- Text input-->

<div class="form-group">
<label for="surname" class="col-md-4 control-label" >Last Name</label> 
<div class="col-md-4 inputGroupContainer">
<div class="input-group">
<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
<input id="surname" name="surname" required placeholder="surname" class="form-control"  type="text">
</div>
</div>
</div>

<div class="form-group"> 
<label class="col-md-4 control-label">Middlename</label>
<div class="col-md-4 selectContainer">
<div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
    
    <input type="text" id="middlename" name="middlename" required>
<!--  <select name="department" class="form-control selectpicker">
  <option value="">Select your Department/Office</option>
  <option>Department of Engineering</option>
  <option>Department of Agriculture</option>
  <option >Accounting Office</option>
  <option >Tresurer's Office</option>
  <option >MPDC</option>
  <option >MCTC</option>
  <option >MCR</option>
  <option >Mayor's Office</option>
  <option >Tourism Office</option>
</select> -->
</div>
</div>
</div>

<!-- Text input-->

<div class="form-group">
<label class="col-md-4 control-label">Username</label>  
<div class="col-md-4 inputGroupContainer">
<div class="input-group">
<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
<input  name="username" id="username" required placeholder="Username" class="form-control"  type="text">
</div>
</div>
</div>

<!-- Text input-->

<div class="form-group">
<label for="password" class="col-md-4 control-label" >Password</label> 
<div class="col-md-4 inputGroupContainer">
<div class="input-group">
<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
<input name="password" id="password" required placeholder="Password" class="form-control"  type="password">
</div>
</div>
</div>

<!-- Text input-->

<div class="form-group">
<label for="mobilenumber" class="col-md-4 control-label" >Mobile Number</label> 
<div class="col-md-4 inputGroupContainer">
<div class="input-group">
<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
<input id="mobilenumber" name="mobilenumber" required placeholder="start with '0'" class="form-control"  type="password">
</div>
</div>
</div>

<!-- Text input-->
   <div class="form-group">
<label for="email" class="col-md-4 control-label">E-Mail</label>  
<div class="col-md-4 inputGroupContainer">
<div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
<input name="email" placeholder="E-Mail Address" class="form-control" id="email" type="text" required>
</div>
</div>
</div>


<!-- Text input-->
   
<div class="form-group">
<label for="socialaccount" class="col-md-4 control-label">social account</label>  
<div class="col-md-4 inputGroupContainer">
<div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
<input placeholder="@username" id="socialaccount" name="socialaccount" required class="form-control" type="text">
</div>
</div>
</div>

<!-- Select Basic -->
<p>File Upload<input type="File" id="image" name="image" multiple ></p>

<!-- Success message -->
<div class="alert alert-success" role="alert" id="success_message">Success <i class="glyphicon glyphicon-thumbs-up"></i> Success!.</div>

<!-- Button -->
<div class="form-group">
<label class="col-md-4 control-label"></label>
<div class="col-md-4"><br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<button type="submit" class="btn btn-warning" >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspSUBMIT <span class="glyphicon glyphicon-send"></span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</button>
</div>
</div>
<button onclick="document.location='index.html'"><b>🪒🪒🪒</b></button>
</fieldset>
</form>
</div>
</div><!-- /.container -->
<!-- partial -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js'></script><script  src="./script.js"></script>
<button onclick="document.location='logout.php'"><b>LOGOUT</b></button>
</body>
</html>