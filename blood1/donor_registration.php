<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Blood Donation Forum</title>
<link href="registration.css" rel="stylesheet" type="text/css" />

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>



</head>

<body>

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



<br /><br /><br /><br /><br /><br />
                        <div id="tab">
                                <ul>
                                        <!-- CSS Tabs -->
<li><a href="index.php"><span><button class="btn btn-success">Home</button></span></a></li>
<li><a href="member_registration.php"><span><button class="btn btn-success">Member Registration</button></span></a></li>
<li><a href="donor_registration.php"><span><button class="btn btn-success">Donor Registration</button></span></a></li>
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
<form id="form1" name="form1" method="post" action="insert_donor_info.php">
  <table class="tbl_form" width="461" height="431">
    <tr>
      <td class="cptn" colspan="4"><div align="center"><div class="al"><label>DONOR REGISTRATION</label></div></div></td>
      </tr>
    <tr>
      <td class="cptn" colspan="4"><div class="label2"><label>Login Informations</label></div> </td>
    </tr>
    <tr>
      <td colspan="4">&nbsp;</td>
      </tr>
    <tr>
      <td width="155" height="31" class="field">User Name</td>
      <td width="33" class="field">:</td>
      <td colspan="2">
        <!-- <input type="text" name="uname" id="textfield" />     -->
        <input class="form-control" name="uname" type="text" id="textfield" placeholder="Enter username"> 
          </td>
    </tr>
    <tr>
      <td class="field">Password</td>
      <td class="field">:</td>
      <td width="145">
        <!-- <input type="password" name="pass" id="textfield2" />  -->
        <input class="form-control" name="pass" type="password" id="textfield2" placeholder="Enter Password"> 
             </td>
      <td width="108">Min 8 Character</td>
    </tr>
    <tr>
      <td class="field">Confirm Password</td>
      <td class="field">:</td>
      <td colspan="2">
        <!-- <input type="password" name="cpass" id="textfield3" /> -->
        <input class="form-control" name="cpass" type="password" id="textfield3" placeholder="Confirm password"> 
              </td>
    </tr>
    <tr>
      <td colspan="4" >&nbsp;</td>
      </tr>
    <tr>
      <td colspan="4" class="cptn"><div class="label2"><label>Basic Informations</label></div></td>
      </tr>
    <tr>
      <td colspan="4">&nbsp;</td>
      </tr>
    <tr>
      <td class="field">Name</td>
      <td class="field">:</td>
      <td colspan="2">
        <!-- <input type="text" name="name" id="textfield4" /> -->
        <input class="form-control" name="name" type="text" id="textfield4" placeholder="Enter your Name"> 
              </td>
    </tr>
    <tr>
      <td class="field">Age</td>
      <td class="field">:</td>
      <td colspan="2">
        <!-- <input type="text" name="age" id="textfield7" /> -->
          <input class="form-control" name="age" type="text" id="textfield7"> 

        </td>
    </tr>
    <tr>
      <td class="field">Gender</td>
      <td class="field">:</td>
      <td colspan="2"><select name="gn" id="select">
        <option>--Select--</option>
        <option>Male</option>
        <option>Female</option>
        </select>        </td>
    </tr>
    <tr>
      <td class="field">Date of Birth</td>
      <td class="field">:</td>
      <td>
        <!-- <input type="text" name="dob" id="textfield9" /> -->
          <input class="form-control" name="dob" type="text" id="textfield9" placeholder="DOB as YY-MM-DD"> 

        </td>
      <td>YY-MM-DD</td>
    </tr>
    <tr>
      <td class="field">Weight</td>
      <td class="field">:</td>
      <td>
        <!-- <input type="text" name="weight" id="textfield10" /> -->
          <input class="form-control" name="weight" type="text" id="textfield10"> 

        </td>
      <td>Kg</td>
    </tr>
    <tr>
      <td class="field">Blood Group</td>
      <td class="field">&nbsp;</td>
      <td colspan="2"><select name="bg" size="1" id="select">
          <option>- - Select - -</option>
          <option>A+</option>
          <option>A-</option>
          <option>B+</option>
          <option>B-</option>
          <option>AB+</option>
          <option>AB-</option>
          <option>O+</option>
          <option>O-</option>
        </select></td>
    </tr>
    <tr>
      <td class="field">Last Donated Date</td>
      <td class="field">:</td>
      <td>
        <!-- <input type="text" name="ldd" id="textfield12" /> -->
          <input class="form-control" name="ldd" type="text" id="textfield12" placeholder="DATE as YY-MM-DD"> 
        </td>
      <td>YY-MM-DD</td>
    </tr>
    <tr>
      <td colspan="4" class="field">&nbsp;</td>
      </tr>
    <tr>
      <td colspan="4" class="cptn"><div class="label2"><label>Contact Informations</label></div></td>
      </tr>
    <tr>
      <td colspan="4" class="field">&nbsp;</td>
      </tr>
    <tr>
      <td class="field">State</td>
      <td class="field">:</td>
      <td colspan="2">
        <!-- <input type="text" name="state" id="textfield13" /> -->
          <input class="form-control" name="state" type="text" id="textfield13"> 
        </td>
    </tr>
    <tr>
      <td class="field">City</td>
      <td class="field">:</td>
      <td colspan="2">
        <!-- <input type="text" name="city" id="textfield14" /> -->
          <input class="form-control" name="city" type="text" id="textfield14"> 

        </td>
    </tr>
    <tr>
      <td class="field">Pin Code</td>
      <td class="field">:</td>
      <td colspan="2">
       <!--  <input type="text" name="pc" id="textfield15" /> -->
         <input class="form-control" name="pc" type="text" id="textfield15"> 
       </td>
    </tr>
    <tr>
      <td class="field">Mobile Number</td>
      <td class="field">:</td>
      <td colspan="2">
        <!-- <input name="mob_num" type="text" id="textfield5" value="91" /> -->
        <input class="form-control" name="mob_num" type="text" id="textfield5"> 
                </td>
    </tr>
    <tr>
      <td class="field">E-mail ID</td>
      <td class="field">:</td>
      <td colspan="2">
        <!-- <input type="text" name="email" id="textfield6" /> -->
        <input class="form-control" name="email" type="text" id="textfield6"> 
              </td>
    </tr>
    <tr>
      <td height="97" class="field">Message</td>
      <td class="field">:</td>
      <td colspan="2">
        <textarea name="msg" id="textarea" cols="40" rows="3"></textarea>      </td>
    </tr>
    <tr>
      <td colspan="4">&nbsp;</td>
      </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td colspan="2" align="right">
        <input type="submit" name="button" id="button" value="Submit" onclick="myfun();" style="background-color: #07BD18; height: 40px; width: 150px; border-radius: 5px; margin-right: 70%;" />    </td>
    </tr>
  </table>
  </form>
</div>

<div class="card" style="width: 18rem; height: 400px; margin-left: 80px; margin-top: -70px;">
  <img src="./images/card2.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text">Donating blood regularly may lower iron stores, according to a 2013 studyTrusted Source. This may reduce the risk of heart attack. High body iron stores are believed to increase the risk of heart attack.</p>
  </div>
</div> 

<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
<br />
</div>
<div class="footer">
<div class="bottom" align="center">Instiute of Management and Information Technology , Cuttack</div></div>

<script type="text/javascript">
  function myfun()
  {
    alert("Thank you for registration -:)");
  }
</script>


</body>
</html>
