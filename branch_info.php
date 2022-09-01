
</head>

<style type="text/css">
<!--
-->
a:hover{
color:#00CC00;
}
.style1 {
	font-family: Arial, Helvetica, sans-serif;
	font-weight: bold;
}
.style12 {font-family: Arial, Helvetica, sans-serif; font-weight: bold; color: #000000; font-size: 30px; }
</style>
<body>
<div align="center"><?php include('admin_header.php');?>
  <h2 align="left" style="font-size:36px;">BRANCH INFORMATION</h2>
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
                        <div class="sidebar" style="width:1500px; margin-left: -193px; margin-top:-63px; height:595px;">
                            <div class="widget-no-style">
                                <div class="newsletter-widget text-center align-self-center">
                                
                                 <?php
  require_once('dbcon.php');
  $ss="select max(BRANCH_ID) from branch_info";
  $rs=mysql_query($ss);
  $row=mysql_fetch_array($rs);
  $count=$row[0];
  if($count==0)
  {
     $count=1;
  }
  else
  {
    $count++;
  }
  ?>
                                <form action="branch_info_insert.php" method="post" enctype="multipart/form-data" name="form1">
  <table width="636" align="center" style="margin-left:160px;">
  
  <tr>
      <td width="363" height="60"><span class="style12">Branch Id </span></td>
      <td width="261"><label>
        <input name="id" type="text" id="t1" required value="<?php echo $count;?>">
      </label></td>
    </tr>
    <tr>
      <td width="363" height="60"><span class="style12">Branch Name </span></td>
      <td width="261"><label>
        <input name="t1" type="text" id="t1" required pattern="[A-Za-z\s]+" title="enter characters only">
      </label></td>
    </tr>
    <tr>
      <td height="67"><span class="style12">Branch Address </span></td>
      <td><label>
        <textarea name="t2" id="t2" required pattern="[A-Za-z\s]+" title="enter characters only"></textarea>
      </label></td>
    </tr>
    <tr>
      <td height="51"><span class="style12">Branch City </span></td>
      <td><input name="t3" type="text" id="t3" required pattern="[A-Za-z\s]+" title="enter characters only"></td>
    </tr>
    <tr>
      <td height="51"><span class="style12">Betel Nut Name</span></td>
      <td><input name="t4" type="text" id="t4" required pattern="[A-Za-z\s]+" title="enter characters only"></td>
    </tr>
    <tr>
      <td height="49"><span class="style12">Quality Level </span></td>
      <td><label>
        <select name="l1" id="l1">
          <option value="QUALITY1">QUALITY1</option>
          <option value="QUALITY2">QUALITY2</option>
          <option value="QUALITY3">QUALITY3</option>
        </select>
      </label></td>
    </tr>
    <tr>
      <td height="52"><span class="style12">Quantity</span></td>
      <td><input name="t5" type="number" id="t5" required ></td>
    </tr>
    <tr>
      <td height="56"><span class="style12">Rate</span></td>
      <td><input name="t6" type="number" id="t6" required ></td>
    </tr>
    <tr>
      <td height="89" colspan="2"><div align="center" class="style1">
        <label>
        <input type="submit" name="b1" id="b1" value="Submit" style="background-color:#000000; color:#FFFFFF; font-size:24px; height:50px; width:200px;" />
        </label>
        <input type="reset" name="b2" id="b2" value="Reset" style="background-color:#FF0000; color:#FFFFFF; font-size:24px; height:50px; width:200px;">
      </div></td>
    </tr>
  </table>
</form>
 <?php include('footer.php');?>
<p>&nbsp;</p>
