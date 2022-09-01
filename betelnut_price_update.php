
</head>

<style type="text/css">
<!--
-->
a:hover{
color:#00CC00;
}
.style5 {font-family: Georgia, "Times New Roman", Times, serif; font-weight: bold; color: #000000; }
.style6 {color: #000000}
.style12 {font-family: Arial, Helvetica, sans-serif; font-weight: bold; color: #000000; font-size: 30px; }
</style>
<body>
<div align="center"><?php include('admin_header.php');?>
                        <h2 align="left" style="font-size:36px;">BETEL NUT PRICE</h2>
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
<form action="betelnut_price_db.php" method="post" enctype="multipart/form-data" name="form1">
<?php
$id=$_GET['id'];
require_once('dbcon.php');
$ss="select * from betelnut_price where BETEL_NUT_NAME='$id'";
$rs=mysql_query($ss);
$row=mysql_fetch_array($rs);
?>
  <table width="701" height="441" align="center" style="margin-left:150px; margin-top:-44px;">
  <input type="hidden" name="id" value="<?php echo $id;?>" />

    <tr>
      <td width="388" height="58"><span class="style12">BETEL NUT NAME </span></td>
      <td width="301"><span class="style6">
        <label>
        </span>  <span class="style6">
        <input name="t1" type="text" id="t1" required pattern="[A-Za-z\s]+" title="enter characters only" value="<?php echo $row['BETEL_NUT_NAME'];?>" readonly>
        </span><span class="style6"></span><span class="style6">        </label>
          </span></td>
    </tr>
    <tr>
      <td height="55"><span class="style12">UOM </span></td>
      <td>        <input name="t2" type="text" id="t2" required pattern="[A-Za-z\s]+" title="enter characters only" value="<?php echo $row['BETEL_NUT_CATEGORY'];?>">      </td>
    </tr>
    <tr>
      <td height="62"><span class="style12">QUALITY LEVEL</span></td>
      <td><span class="style6">
        <label>
        <div align="center">
          <select name="l1" id="l1">
            <option value="1">QUALITY1</option>
            <option value="2">QUALITYY2</option>
            <option value="3">QUALITY3</option>
          </select>
        </div>
        </label>
      </span></td>
    </tr>
    <tr>
      <td height="54"><span class="style12">QUANTITY</span></td>
      <td>        <input name="t3" type="number" id="t3" required value="<?php echo $row['QUANTITY'];?>">      </td>
    </tr>
    <tr>
      <td height="50"><span class="style12">RATE</span></td>
      <td>        <input name="t4" type="number" id="t4" required value="<?php echo $row['RATE'];?>">      </td>
    </tr>
    <tr>
      <td height="68"><span class="style12">IMAGE</span></td>
      <td><span class="style6">
        <label>
        </span> 
        <span class="style6">
        <input type="file" name="file" id="file" />
        </span><span class="style6"></span><span class="style6">        </label>
          </span></td>
    </tr>
    <tr>
      <td height="76" colspan="2"><div align="center" class="style5">
        <label>
        <input type="submit" name="b1" id="b1" value="Submit" style="background-color:#000000; color:#FFFFFF; font-size:18px; height:50px; width:80px;" /> 
        </label>
      </div></td>
    </tr>
  </table>
</form>
 
<?php include('footer.php');?>
<p><em></em></p>
