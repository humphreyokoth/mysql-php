<?php 
function OpenCon(){
    $dbhost = "localhost";
    $dbuser = "humphrey";
    $dbpass = "test";
    $db = "wp_course";
    $conn = new mysqli($dbhost,$dbuser,$dbpass,$db) or die ("connectfailed:%s\n".$conn->error);
    return $conn;
}
function CloseCon($conn){
$conn->close();


}

?>