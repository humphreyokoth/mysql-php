<?php 
function OpenCon(){
    $dbuser = 'root';
    $dbhost = 'localhost';
    // $dbpass = '';
    $db ='wp_course';
    $conn = new mysqli($dbuser,$dbhost,$db) or die ("connectfailed:%s\n".$conn->error);
    return $conn;
}
function CloseCon($conn){
$conn->close();


}

?>