<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>E-Blood Donation Forum | Member Profile</title>

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



<br /><br /><br /><br /><br /><br /></center>
                        <div id="tab">
                                <ul>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <!-- CSS Tabs -->
<li><a href="#"><span><button class="btn btn-success">Profile</button></span></a></li>
<li><a href="member_search.php"><span><button class="btn btn-success">Search Donor</button></span></a></li>
<li><a href="request_blood.php"><span><button class="btn btn-success">Request Blood</button></span></a></li>

<li><a href="msg.php"><span><button class="btn btn-success">Contact Us</button></span></a></li>

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





<br />
    <br />
  <br />
  <br />
  <br />
  <br />
  <br />
  <br />
  <br />
  <br />
  <br />
  <br />
<br /><br /><br /><br /><br /><br /><br />

<div id="mainform">
<form id="form1" name="form1" method="post" action="insert_reqst.php">
  <table class="tbl_form" width="461" height="431">
    <tr>
      <td class="cptn" colspan="4"><div class="al"><label> Request for Blood</label></div></td>
      </tr>
    <tr>
      <td colspan="4">&nbsp;</td>
      </tr>
    <tr>
      <td width="156" height="31" class="field">Patient's Name</td>
      <td width="32" class="field">:</td>
      <td colspan="2">
        <!-- <input type="text" name="pt_name" id="textfield" /> -->
        <input class="form-control" name="pt_name" type="text" id="textfield"> 
              </td>
    </tr>
    <tr>
      <td class="field">Type of Disease</td>
      <td class="field">:</td>
      <td colspan="2">
        <!-- <input type="text" name="typ_dis" id="textfield2" /> -->
        <input class="form-control" name="typ_dis" type="text" id="textfield2"> 
              </td>
    </tr>
    <tr>
      <td class="field">Doctor's Name</td>
      <td class="field">:</td>
      <td colspan="2">
        <!-- <input type="text" name="doc_name" id="textfield3" /> -->
        <input class="form-control" name="doc_name" type="text" id="textfield3"> 
              </td>
    </tr>
    
    <tr>
      <td class="field">When Required</td>
      <td class="field">:</td>
      <td width="144">
        <input class="form-control" type="text" name="whn_req" id="textfield4" />      </td>
      <td width="109">YY-MM-DD</td>
    </tr>
    <tr>
      <td class="field">Contact Number</td>
      <td class="field">:</td>
      <td colspan="2">
        <input class="form-control" name="cont_num" type="text" id="textfield5" value="91" />      </td>
    </tr>
    <tr>
      <td class="field">Blood Group</td>
      <td class="field">:</td>
      <td colspan="2"><span class="field">
        <select class="form-control" name="blood_gp" size="1" id="select">
          <option>- - Select - -</option>
          <option>A+</option>
          <option>A-</option>
          <option>B+</option>
          <option>B-</option>
          <option>AB+</option>
          <option>AB-</option>
          <option>O+</option>
          <option>O-</option>
        </select>
      </span></td>
    </tr>
    <tr>
      <td class="field">Quantity</td>
      <td class="field">:</td>
      <td><input class="form-control" type="text" name="quan" id="textfield7" /></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td class="field">City</td>
      <td class="field">:</td>
      <td colspan="2"><input class="form-control" type="text" name="req_city" id="textfield8" /></td>
    </tr>
    <tr>
      <td class="field">Contact Person Name</td>
      <td class="field">:</td>
      <td colspan="2">
        <input class="form-control" type="text" name="cont_per_name" id="textfield6" />      </td>
    </tr>
    <tr>
      <td height="97" class="field"><div align="center">Hospital Name/Address</div></td>
      <td class="field">:</td>
      <td colspan="2">
        <textarea class="form-control" name="hosp_add" id="textarea" cols="30" rows="3"></textarea>      </td>
    </tr>
    <tr>
      <td colspan="4">&nbsp;</td>
      </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td colspan="2" align="right">
       <input type="submit" name="button" id="button" value="Submit" onclick="myfun();" style="background-color: #07BD18; height: 40px; width: 150px; border-radius: 5px; margin-right: 70%;" />       </td>
    </tr>
  </table>
  </form>
</div>
</div>

<div class="card" style="width: 18rem; height: 400px; margin-left: 74%; margin-top: -600px;">
  <img src="./images/card5.png" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text">Only about 350-450ml of blood is taken during a donation session. There is enough blood in the body to donate it without any ill effects. The body makes new blood after donation. </p>
  </div>
</div>  



<div class="footer" style="margin-top: 250px;">
<div class="bottom" align="center">United School Of usiness Management ,Bhubaneswar</div></div>

<script type="text/javascript">
  function myfun()
  {
    alert("Thank you for registration -:)");
  }
</script>


</body>
</html>
