
<!DOCTYPE html>
<html lang="en">
<head>
<title>Student's Site |Admin</title>


<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

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
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <!-- CSS Tabs -->
<li><a href="index.php"><span><button class="btn btn-success">Home</button></span></a></li></ul></div>

<form name="frm" method="post" action="mail.php">
        <table width="97%" border="0" align="center" cellpadding="0" cellspacing="0">
          <tr>
            <td height="26" colspan="7"><span><div class="al"><label>Send SMS</label></div></span> </td>
          </tr>
          <tr>
            <td width="21%" height="19">&nbsp;</td>
            <td width="18%">&nbsp;</td>
            <td width="8%">&nbsp;</td>
            <td width="14%">&nbsp;</td>
            <td width="18%">&nbsp;</td>
            <td width="15%">&nbsp;</td>
            <td width="6%">&nbsp;</td>
          </tr>
          
         
          <tr>
            <td height="29"><strong>ENTER YOUR NAME</strong></td>
            <td><input class="form-control" name="a2" type="text" id="a2"></td>
            <td><strong>Message</strong></td>
            <td><textarea class="form-control" name="a3" id="a3" cols="45" rows="5"></textarea></td>
            <td><strong>Mobile Number</strong></td>
            <td><input class="form-control" name="a" type="text" id="a"></td>
            <td><input class="form-control" type="submit" name="Submit" value="Send"></td>
          </tr>
          
        </table>
</form>
       
</body>
</html>
