<?php
include_once './StudentsRecords.php';
$SR=new StudentsRecords();
$fname=$lname=$usernme=$passwrd=$date="";
if(isset($_POST['save'])){
    if(isset($_POST['Firstname'])) $fname=$_POST['Firstname'];
    if(isset($_POST['Lastname'])) $lname=$_POST['Lastname'];
    if(isset($_POST['Email'])) $usernme=$_POST['Email'];
    if(isset($_POST['Password'])) $passwrd=$_POST['Password'];
    if(isset($_POST['RegistrationDate'])) $date=$_POST['RegistrationDate'];
    $result=$SR->addRecords($fname,$lname,$usernme,$passwrd,$date);
    if($result){
        echo"<h3>The records of student added successfuly</h3>";
    }
    else{
        die("<h3>Failed to add the student</h3>");
    }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>form</title>
</head>
<style>
     .registerdform{
    background-color: rgba(28, 224, 21, 0.918);
    width: 800px;
    margin-top: 100px;
    margin-left: 250px;
    border-radius: 20px;
    padding: 20px;
    box-shadow: 5px 5px 5px 5px white;
     }
    .buttons{
    
    background-color:rgb(233, 227, 233);
    text-align: center;
    padding: 2px;
    } 
    .htitle{
    text-align: center;
    text-decoration: double;
    font-size: large;
    color: blue;
  
}
         p{
    color: white;
    font-weight:100;
	 font-size: x-large;
} 
         
               
               
</style>
<body>
<div><h1 class="htitle">Ragistration form to someone who wont to stay</h1></div>
<div class="registerdform"> 
  <form action="./index.php" method="POST">
  <label for="" class="inpt"> Your First_name:</label>
            <input type="text" placeholder="Enter your first_name" ><br>
           <br> <label for="" class="inpt"> Your Last_name:</label>
            <input type="text" placeholder="Enter your Last_name" ><br>
           <br> <label for="" class="inpt"> Your Email:</label>
            <input type="text" placeholder="Enter your Email" ><br>
           <br> <label for="" class="inpt"> Your Password:</label>
            <input type="text" placeholder="Enter your Password" ><br>
           <br> <label for="" class="inpt">  Date:</label>
            <input type="text" placeholder="mm/dd/yyyy" ><br>
            <p>
               <select type="text" value="" name="Answer">
                   <option>I accept</option>
                   <option>Not accept</option>
               </select>
               please select to comfirm that you acepted the terms and condition
            </p>
            <br/>
            <p class="buttons"> 
            <button type="submit" name="save" class="btn">Submit</button>
    <button type="reset" name="reset" class="btn">Reset</button>
   </p> 
            </form>  
</div>   
</body>
</html>