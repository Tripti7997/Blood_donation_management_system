
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Blood Donation Forum | Member Profile</title>
<link href="registration.css" rel="stylesheet" type="text/css" />

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


<SCRIPT type="text/javascript">
    window.history.forward();
    function noBack() { window.history.forward(); }
</SCRIPT>
</HEAD>
<BODY onload="noBack();"
    onpageshow="if (event.persisted) noBack();" onunload="">


<?php
include("db.php"); 

$uname=$_POST['uname'];
$pass=$_POST['pass'];

if ($uname=="" or $pass=="")
{
echo "All fields must be entered, hit back button and re-enter information";
}
else
{
$sql="SELECT * FROM member_reg WHERE uname='".$uname."' and pass='".$pass."'";
 $result=mysqli_query($db_handle,$sql);
$count=mysqli_num_rows($result);
if($count==1){}

else
{

header('location: member_login.php');
}
}
?>

<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="./images/ban1.jpg" height="250" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="./images/ban2.jpg" height="250" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="./images/ban3.jpg" height="250" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>




                        <div id="tab" style="margin-top: 150px;">
                                <ul>

                                        <!-- CSS Tabs -->
<li><a href="index.php"><span><button class="btn btn-success">Home</button></span></a></li>
<li><a href="#"><span><button class="btn btn-success">Profile</button></span></a></li>
<li><a href="member_search.php"><span><button class="btn btn-success">Search Donor</button></span></a></li>
<li><a href="request_blood.php"><span><button class="btn btn-success">Request Blood</button></span></a></li>

<li><a href="contact_us.php"><span><button class="btn btn-success">Contact Us</button></span></a></li>

                                </ul>
    </div>
  </div>
</div>

<div class="quick">
Quik Links</div>

<br />
  
<div class="row">
  <div class="col-3">
    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
      <a href="#" class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">About Us</a>
      <a href="#" class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Tips</a>
      <a href="#" class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Eligibility</a>
      <a href="#" class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Contact Us</a>
    </div>
  </div>




<div id="mainform">
<form id="form1" name="form1" method="post" action="">
  <table class="tbl_form" width="461" height="160">
    <tr>      </tr>
    <tr>
      <td colspan="3" class="cptn">
	  <?php 


	  while($row=mysqli_fetch_array($result))
	  {
	  echo ' Hi,  &nbsp;&nbsp;'.$row['name'] ;
	
	  ?>      </td>
      </tr>
    <tr>
      <td colspan="3">&nbsp;</td>
      </tr>
    <tr>
      <td class="field" width="200">Name</td>
      <td class="field" width="5">:</td>
      <td class="data">&nbsp;&nbsp;        <?php
	   echo ''.$row['name'] ;  
	  
	  ?></td>
    </tr>
    
    <tr>
      <td class="field">Mobile Number</td>
      <td class="field">:</td>
      <td class="data">&nbsp;&nbsp;        <?php
	   echo ''.$row['mob_num'] ;  
	  
	  ?></td>
    </tr>
    <tr>
      <td class="field">E-mail ID</td>
      <td class="field">:</td>
      <td class="data">&nbsp;&nbsp;        <?php
	   echo ''.$row['e_mail'] ;  
	  }
	  ?>      </td>
    </tr>
    <tr>
      <td class="field">&nbsp;</td>
      <td class="field">&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>    </tr>
    <tr>      </tr>
  </table>
  </form>
</div>
</div>


<div class="footer">
<div class="bottom" align="center">United School of Business Management ,Bhubaneswar</div></div>

</body>
</html>
