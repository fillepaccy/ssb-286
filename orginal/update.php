<?php
include_once './StudentsRecords.php';
$SR=new StudentsRecords();
if(isset($_GET['updt'])){
    $rgst_id=$_GET['updt'];
}
$fname=$lname=$usernme=$passwrd=$date="";
if(isset($_POST['save'])){
    if(isset($_POST['Firstname'])) $fname=$_POST['Firstname'];
    if(isset($_POST['Lastname'])) $lname=$_POST['Lastname'];
    if(isset($_POST['Email'])) $usernme=$_POST['Email'];
    if(isset($_POST['Password'])) $passwrd=$_POST['Password'];
    if(isset($_POST['RegistrationDate'])) $date=$_POST['RegistrationDate'];
$result=$SR->updateRecords($fname,$lname,$usernme, $passwrd, $date, $rgst_id);    
if($result){
    echo"<h3>Student Records Added Successfuly</h3>";
}
else{
    echo"<h3>Failed to add student Records</h3>"; 
}
}

$onestudent=$SR->onestudentRecords($rgst_id);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	

    <title>form</title>
</head>
<body>
<div class="registerdform"> 
  <form action="./update.php" method="POST">
    <h1 class="htitle">Registration form to someone who want to stay</h1>
    <label for="" class="inpt">Firstname: </label><input type="text" name="Firstname" value="<?=$onestudent['rgst_fname']?>"><br><br>
    <label for="" class="inpt">Lastname: </label><input type="text" name="Lastname" value="<?=$onestudent['rgst_lname']?>"><br><br>
    <label for="" class="inpt">Email: </label><input type="text" name="Email"value="<?=$onestudent['rgst_email']?>"><br><br>
    <label for="" class="inpt">Password: </label><input type="password" name="Password" id=""value="<?=$onestudent['rgst_password']?>"><br><br>
    <label for=""class="inpt">RegistrationDate: </label><input type="date" name="RegistrationDate" id=""value="<?=$onestudent['rgst_date']?>"><br><br>
   <div class="buttons"> 
    <button type="submit" name="update" class="btn btn-success">Update</button>
   </div>  
</form>  
</div>   
</body>
</html>