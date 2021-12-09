<?php
class StudentsRecords{

    public function addRecords($fname,$lname,$email,$passwrd,$date){

        $hostname='localhost';
        $username='root';
        $dbname='student';
        $password='';
    
        $conn=new mysqli($hostname,$username,$password,$dbname);
        $query="INSERT INTO registerform VALUES('','$fname','$lname','$email','$passwrd','$date')";
        $result=$conn->query($query);
        if($result){
            return true;
        }
        else{
            return false;
        }
    }

    public function readRecords(){

        $hostname='localhost';
        $username='root';
        $dbname='student';
        $password='';

        $conn=new  mysqli($hostname,$username,$password,$dbname);
        $query="SELECT * FROM registerform";
        $result=$conn->query($query);
        if($result->num_rows>0){
            return $result;
        }
        else{
            return "None information";
        }

    }
    public function updateRecords($fname,$lname,$email,$passwrd,$date,$rgst_id){
        
        $hostname='localhost';
        $username='root';
        $dbname='student';
        $password='';

        $conn=new mysqli($hostname,$username,$password,$dbname);
        $query="UPDATE INTO registerform SET rgst_fname=$fname,rgst_lname=$lname,rgst_email=$,rgst_password=$passwrd,rgst_date=$date WHERE rgst_id=$rgst_id";
        $result=$conn->query($query);
        if($result){
            return true;

        }
        else{
            return false;
        }
    }
    public function deleteRecords($rgst_id){
        $hostname='localhost';
        $username='root';
        $dbname='student';
        $password='';

        $conn=new mysqli($hostname,$username,$password,$dbname);
        $query="DELETE*FROM registerform WHERE rgst_id=$rgst_id";
        $result=$conn->query($query);
        if($result){
            return true;
        }
        else{
            return false;
        }

    }
    public function onestudentRecords($rgst_id){
        $hostname='localhost';
        $username='root';
        $dbname='student';
        $password='';

        $conn=new mysqli($hostname,$username,$password,$dbname);
        $query="SELECT*FROM registerform WHERE rgst_id=$rgst_id";
        $result=$conn->query($query);
        $resulttwo=$result->fetch_assoc();
        return $resulttwo;
    }
}
?>