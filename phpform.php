<?php
$coursename=$_POST['coursename'];
$coursecode=$_POST['coursecode'];
$description=$_POST['description'];
$department=$_POST['department'];
$semester=$_POST['semester'];
$year=$_POST['year'];
$courseinstructor=$_POST['courseinstructor'];
$grade=$_POST['grade'];
#connection
$conn = new mysqli('localhost','root','','regform');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into coursereg(coursename,coursecode,description,department,semester,year,courseinstructor,grade) 
        values(?,?,?,?,?,?,?,?)");
		$stmt->bind_param("sissiiss",$coursename,$coursecode,$description,$department,$semester,$year,$courseinstructor,$grade);
		$execval = $stmt->execute();
		echo $execval;
		echo "";
		$stmt->close();
		$conn->close();
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<style>
      body{background-image: url('gg.jpg')}
	  table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
  text-align: center;
}
th{color: blue;}

    </style>
    <meta charset="UTF-8">
    <title>courses</title>
</head>
<body>
<button onclick="document.location='index.html'"><b>🏠🏫🏠</b></button>
    <h1><p style="text-align: center;color: red;">Below is your detailed Course Information</p></h1>
	<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "regform";
	
	// Create connection
	$conn = new mysqli('localhost','root','','regform');
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}
	$sql = "SELECT coursename,coursecode,description,department,semester,year,courseinstructor,grade FROM coursereg";
	$result = $conn->query($sql);
	
	if ($result->num_rows > 0) {
		echo "<table><tr><th>COURSE NAME</th><th>COURSE CODE</th><th>DESCRIPTION</th><th>DEPARTMENT</th><th>SEMESTER</th><th>YEAR</th><th>INSTRUCTOR</th><th>GRADE</th></tr>";
		// output data of each row
		while($row = $result->fetch_assoc()) {
			echo "<tr><td>" . $row["coursename"]. "</td><td>". $row["coursecode"]. "</td><td>" . $row["description"]."</td><td>" .$row["department"]."</td><td>".$row["semester"]."</td><td>".$row["year"]."</td><td>".$row["courseinstructor"]."</td><td>".$row["grade"]. "</td></tr>";
		}
		echo "</table>";
	} else {
		echo "0 results";
	}
	
	?><br>
		<br>
<br>
	<br>
	<br>
	<button onclick="document.location='coursereg.php'"><b>REGISTER ANOTHER COURSE!</b></button><br>
	<br>
	<button onclick="document.location='logout.php'"><b>🪒🪒🪒</b></button>
</body>
</html>