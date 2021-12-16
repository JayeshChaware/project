<?php

require_once ('dbh.php');

$pname = $_POST['pname'];
$eid = $_POST['eid'];
$subdate = $_POST['duedate'];

$sql = "INSERT INTO project(eid, pname, duedate ,mark, pstatus) VALUES (".$eid." , '".$pname."' , '".$subdate."',0 , 'Due')";
$stmt = $conn->prepare($sql);
$result = mysqli_query($conn, $sql);


if(($result) == true){
    
    
    header("Location: ..//assignproject.php");
}

else{
    echo $stmt->error;
    echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Failed to Assign')
    window.location.href='javascript:history.go(-1)';
    </SCRIPT>");
    
}




?>