<?php 
include("db.php"); 

$uname=$_POST['uname'];
$pass=$_POST['pass'];
$name=$_POST['name'];
$age=$_POST['age'];
$gn=$_POST['gn'];
$dob=$_POST['dob'];
$weight=$_POST['weight'];
$bg=$_POST['bg'];
$ldd=$_POST['ldd'];
$state=$_POST['state'];
$city=$_POST['city'];
$pc=$_POST['pc'];
$mob_num=$_POST['mob_num'];
$email=$_POST['email'];
$msg=$_POST['msg'];

 $usercheck = $uname;

 $check = mysqli_query($db_handle,"SELECT uname FROM member_reg WHERE uname = '$usercheck'") 

or die(mysql_error());

 $check2 = mysqli_num_rows($check);


if ($uname==""  or $pass=="" or $name=="" or $mob_num=="" or $email=="")
{
echo "All fields must be entered, hit back button and re-enter information";
}
elseif ($check2 != 0) {

 		die('Sorry, the username '.$_POST['uname'].' is already in use.');

 				}


elseif($_POST['pass'] != $_POST['cpass']) {

 		die('Your passwords did not match.');

 	}

else{

$sql="INSERT INTO donor_reg(uname, pass,name,age,gender,dob,weight,b_gp,ldd,state,city,pin_code,mob_num,e_mail,msg)
VALUES
('$uname','$pass','$name','$age','$gn','$dob','$weight','$bg','$ldd','$state','$city','$pc','$mob_num','$email','$msg')";
 mysqli_query($db_handle,$sql) or die("CONNECTION FAILED");

 echo "Your message has been received";
 header( 'Location: donor_login.php' ) ;

 }
?>
