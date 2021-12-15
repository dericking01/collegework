<?php
$firstname=$_POST['firstname'];
$middlename=$_POST['middlename'];
$surname=$_POST['surname'];
$username=$_POST['username'];
$email=$_POST['email'];
$mobilenumber=$_POST['mobilenumber'];
$socialaccount=$_POST['socialaccount'];
$password=$_POST['password'];
if(!empty($firstname) || !empty($middlename) || !empty($surname) || !empty($username) || !empty($email) || !empty($mobilenumber) || !empty($socialaccount) || !empty($password) ){
    $host="localhost";
    $dbusername="root";
    $dbpassword="";
    $dbname="regform";
    //create a connection
    $conn=new mysqli($host,$dbusername,$dbpassword,$dbname);
    if(mysqli_connect_error()){
        die('connect error('.mysqli_connect_errno().')'.mysqli_connect_error());
    }else{
        $SELECT="SELECT email From registration Where email=? Limit 1";
        $INSERT="INSERT Into registration(firstname,middlename,surname,username,email,mobilenumber,socialaccount,password) values(?,?,?,?,?,?,?,?)";
        //prepare statement
        $stmt=$conn->prepare($SELECT);
        $stmt->bind_param("s",$email);
        $stmt->execute();
        $stmt->bind_result($email);
        $stmt->store_result();
        $rnum=$stmt->num_rows;
        if($rnum==0){
            $stmt->close();
            $stmt=$conn->prepare($INSERT);
            $stmt->bind_param("sssssiss",$firstname,$middlename,$surname,$username,$email,$mobilenumber,$socialaccount,$password);
            $stmt->execute();
            echo "New record inserted successfully";
        }else{
            echo "someone else has already registered using this email";
        }
        $stmt->close();
        $conn->close();
    }
}else{
    echo "All fields required";
    die();
}
?>
<!DOCTYPE html>
<html>
    <title>connect</title>
    <head>
    <style>
      body{background-image: url('pn.jpg')}
    </style>
    </head>
    <body>
        <br>
        <br>
        <button onclick="document.location='coursereg.php'"><b>COURSE REGISTRATION</b></button><br>
	<br>
	<button onclick="document.location='index.html'"><b>HOME</b></button><br>
    <br>
    <button onclick="document.location='logout.php'"><b>LOGOUT</b></button>
    </body>
</html>