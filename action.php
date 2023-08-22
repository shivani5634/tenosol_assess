<?php
// echo "hello";
// print_r($_POST);
$conn=mysqli_connect('localhost','root','','phpcasestudy');
// $ip_address=$_SERVER['REMOTE_ADDR'];
// echo $ip_address;
// if($conn){
//     echo "connection successfull";
// }
$fullname=$_POST['fullName'];
$number=$_POST['number'];
$email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];
// $ip_address=$_SERVER['REMOTE_ADDR'];
global $sql_query;
if(!empty($_POST['fullName']) && !empty($_POST['number']) && !empty($_POST['email']) && !empty($_POST['subject']) && !empty($_POST['subject']) && !empty($_POST['message'])){
    $query="INSERT INTO `contact_form`(`fullName`, `number`, `email`, `subject`, `message`,`IP_address`) VALUES ('$fullname','$number','$email','$subject','$message','$ip_address')";
    $sql_query=mysqli_query($conn,$query);
}
else{
    echo "<em>Fields are required</em>";
    // header('location:index.php');
}

if($sql_query){
    header('location:msg.php');
    // echo "data inserted succesfully";
}
?>