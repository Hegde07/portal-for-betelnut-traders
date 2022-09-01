<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Change Password</title>
<style type="text/css">
<!--
.style4 {font-size: 30px}
.style5 {font-weight: bold; color: #000000;}
-->
</style>
</head>

<body>
<?php include('cheader.php');?>
<h2 class="style8" style="font-size:36px;">CHANGE PASSWORD </h2>
</div><!-- end col -->
                    <div class="col-lg-4 col-md-4 col-sm-12 hidden-xs-down hidden-sm-down">
                       
                    </div><!-- end col -->                    
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end page-title -->

        <section class="section lb" >
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                        <div class="sidebar" style="width:1500px; margin-left: -193px; margin-top:-63px; margin-bottom:-110px;">
                            <div class="widget-no-style">
                                <div class="newsletter-widget text-center align-self-center">
<form id="form1" name="form1" method="post" action="changepassword_con.php">
  <table width="789" align="center" style="margin-left:150px;">
    <tr>
      <td width="475" height="62"><div align="left" class="style4"><span class="style5">OLD PASSWORD</span></div></td>
      <td width="302"><strong>
        <label>
        <input type="text" name="t2" id="t2" />
        </label>
      </strong></td>
    </tr>
    <tr>
      <td height="55"><div align="left" class="style4"><span class="style5">NEW PASSWORD</span></div></td>
      <td><input name="t3" type="text" id="t3" /></td>
    </tr>
    <tr>
      <td height="69"><div align="left" class="style4"><span class="style5">RE-ENTER NEW PASSWORD</span></div></td>
      <td><input name="t4" type="text" id="t4" /></td>
    </tr>
    <tr>
      <td height="79" colspan="2"><div align="center"><strong>
        <input type="submit" name="b1" id="b1" value="CHANGE PASSWORD" style="background-color:#009900; color:#FFFFFF; width:400px; height:60px; font:Arial, Helvetica, sans-serif; font-size:24px; "/>
        <label></label>
      </strong></div></td>
    </tr>
  </table>
</form>
<?php include('footer.php');?>
<p>&nbsp;</p>
</body>
</html>
