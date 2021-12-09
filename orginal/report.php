<?php
include_once './StudentsRecords.php';
$SR=new StudentsRecords();
$reports=$SR->readRecords();
if(isset($_GET['del'])){
    $rgst_id=$_GET['del'];
    $deleting=$SR->deleteRecords($rgst_id);
    if($deleting){
        echo"<h3>Student Records deleted successfuly</h3>";
    }
    else{
        header('location:./report.php');
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="studentReportsdata">
    <h3>REPORT FORM OF STUDENTS</h3>

        <table>
            <tr>
                <th>NO</th>
                <th>FIRST NAME</th>
                <th>LAST NAME</th>
                <th>USERNAME</th>
                <th>PASSWORD</th>
                <th>DATE</th>
                <th>Action</th>
            </tr>
            <?php
            foreach($reports as $report){
            ?>
            <tr>
                <td><?=$report['rgst_id']?></td>
                <td><?=$report['rgst_fname']?></td>
                <td><?=$report['rgst_lname']?></td>
                <td><?=$report['rgst_username']?></td>
                <td><?=$report['rgst_password']?></td>
                <td><?=$report['rgst_date']?></td>
                <td>
                    <a href=""></a>
                </td>
            </tr>
            <?php
            }
            ?>
        </table>
    </div>
    
</body>
</html>