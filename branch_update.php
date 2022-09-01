
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
.style8 {color: #000000; font-size: 24px; font-weight: bold;}
</style>
<body>
<div align="center"><?php include('branch_header.php');?>
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
                        <div class="sidebar" style="width:1500px; margin-left: -193px; margin-top:-63px; margin-bottom:-110px;">
                            <div class="widget-no-style">
                                <div class="newsletter-widget text-center align-self-center">
                                <form action="branch_info_db1.php" method="post" enctype="multipart/form-data" name="form1">
<?php
$id=$_GET['id'];
require_once('dbcon.php');
$ss="select * from branch_info where BRANCH_NAME='$id'";
$rs=mysql_query($ss);
$row=mysql_fetch_array($rs);
?>
  <table width="509" align="center" style="margin-left:150px;">
  <input type="hidden" name="id" value="<?php echo $id;?>" />

    <tr>
      <td width="272" height="60"><span class="style8">BRANCH NAME </span></td>
      <td width="221"><label>
        <input name="t1" type="text" id="t1" required pattern="[A-Za-z\s]+" title="enter characters only" value="<?php echo $row['BRANCH_NAME'];?>" readonly >
      </label></td>
    </tr>
    <tr>
      <td height="67"><span class="style8">BRANCH ADDRESS </span></td>
      <td><label>
        <textarea name="t2" id="t2" required pattern="[A-Za-z\s]+" title="enter characters only" > <?php echo $row['BRANCH_ADDRESS'];?></textarea>
      </label></td>
    </tr>
    <tr>
      <td height="51"><span class="style8">BRANCH CITY </span></td>
      <td><input name="t3" type="text" id="t3" required pattern="[A-Za-z\s]+" title="enter characters only" value="<?php echo $row['BRANCH_CITY'];?>"></td>
    </tr>
    <tr>
      <td height="51"><span class="style8">CATEGORY</span></td>
      <td><input name="t4" type="text" id="t4" required pattern="[A-Za-z\s]+" title="enter characters only" value="<?php echo $row['CATEGORY'];?>"></td>
    </tr>
    <tr>
      <td height="49"><span class="style8">QUALITY LEVEL </span></td>
      <td><label>
        <select name="l1" id="l1">
          <option value="QUALITY1">QUALITY1</option>
          <option value="QUALITY2">QUALITY2</option>
          <option value="QUALITY3">QUALITY3</option>
        </select>
      </label></td>
    </tr>
    <tr>
      <td height="52"><span class="style8">QUANTITY</span></td>
      <td><input name="t5" type="number" id="t5" required value="<?php echo $row['QUANTITY'];?>"></td>
    </tr>
    <tr>
      <td height="56"><span class="style8">RATE</span></td>
      <td><input name="t6" type="number" id="t6" required value="<?php echo $row['RATE'];?>"></td>
    </tr>
    <tr>
      <td height="89" colspan="2"><div align="center" class="style1">
        <label>
        <input type="submit" name="b1" id="b1" value="Submit" style="background-color:#000000; color:#FFFFFF; font-size:18px; height:50px; width:80px;" />
        </label>
      </div></td>
    </tr>
  </table>
</form>
 <?php include('footer.php');?>
<p>&nbsp;</p>
