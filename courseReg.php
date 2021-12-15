<?php 

session_start();
error_reporting(0);
if (!isset($_SESSION['username'])) {
    header("Location: reg1.php");
}

?>
<!DOCTYPE HTML>
<html>
  <head>
    <style>
      body{background-image: url('all.jpg')}
      
    </style>
    <meta charset="UTF-8">
  <title>CodePen - Bootstrap 3 Registration Form with Validation</title>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>

<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.0/css/bootstrapValidator.min.css'><link rel="stylesheet" href="./fstyle.css">

</head>
  </head>  
<body>

<form class="well form-horizontal" action="phpform.php" method="POST"  id="contact_form">
<button onclick="document.location='index.html'"><b>🏠🏫🏠</b></button>
<fieldset>

<!-- Form Name -->
<legend><center><h2><b>COURSE REGISTRATION</b></h2></center></legend><br>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label">Course Name</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
  <input type="text" id="coursename" class="form-control" name="coursename" maxlength="30" required >
    </div>
  </div>
</div>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label" >Course code</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
  <input type="number" id="coursecode" class="form-control" min="100" max="400" name="coursecode" required>
    </div>
  </div>
</div>

  <div class="form-group"> 
  <label class="col-md-4 control-label">Department / Office</label>
    <div class="col-md-4 selectContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
    <select name="department" class="form-control selectpicker" required >
      <option value="">Select your Department</option>
      <option>C.engineering</option>
      <option>C.science</option>
      <option >Accounts</option>
      <option >Finance</option>
      <option >Arts & Craft</option>
      <option >Language</option>
    </select>
  </div>
</div>
</div>
  
<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label">Semester</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
  <select name="semester" required class="form-control selectpicker">
    <option value="">Select your semester</option>
    <option>1</option>
    <option>2</option>
  </select>
    </div>
  </div>
</div>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label" >Year</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
  <select type="number" name="year" class="form-control selectpicker">
    <option value="">Select the yr</option>
    <option>2020</option>
    <option>2021</option>
  </select>
    </div>
  </div>
</div>

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label" >Course Instructor</label> 
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <select type="text" name="courseinstructor" maxlength="30" class="form-control selectpicker" required >
    <option value="">Select your Tutor</option>
    <option>Mr.Leonard</option>
    <option>Mrs.Jackline</option>
    <option >Mr.Mahundi</option>
    <option >Mr.Alexander</option>
    <option >Mr.Jonathan</option>
    <option >Mr.Damian</option>
  </select>
    </div>
  </div>
</div>

<!-- Text input-->
       <div class="form-group">
  <label class="col-md-4 control-label">Course description</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
        <textarea id="description" name="description" rows="5" cols="40" maxlength="50" required ></textarea>
    </div>
  </div>
</div>


<!-- Text input-->
       
<div class="form-group">
  <label class="col-md-4 control-label">Results/Grade</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
        <select type="text" name="grade" required class="form-control selectpicker" required >
            <option value="">Select your grade</option>
            <option>A</option>
            <option>B+</option>
            <option >B</option>
            <option >C</option>
            <option >D</option>
            <option >E</option>
          </select>
    </div>
  </div>
</div>

<!-- Select Basic -->

<!-- Success message -->
<div class="alert alert-success" role="alert" id="success_message">Success <i class="glyphicon glyphicon-thumbs-up"></i> Success!.</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-4"><br>
    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<button type="submit" class="btn btn-warning" >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspSUBMIT <span class="glyphicon glyphicon-send"></span>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</button>
  </div>
</div>

</fieldset>
</form>
</div>
    </div><!-- /.container -->
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js'></script><script  src="./script.js"></script>

<br>
<br>

</body>
</html>