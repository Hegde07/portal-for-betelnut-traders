<?php include('accountant_header.php');?>
<style type="text/css">
<!--
.style1 {
	color: #FFFFFF;
	font-weight: bold;
}
.style2 {color: #FFFFFF}
.style3 {color: #0000FF}
.style7 {color: #FFFFFF; font-weight: bold; font-size: 30px; }
-->
</style>

<h2 align="left" style="font-size:36px;">Sales Report</h2>
</div>
<div align="center">
  <!-- end col -->
                    <hr />
</div>
<div class="col-lg-4 col-md-4 col-sm-12 hidden-xs-down hidden-sm-down">                    </div><!-- end col -->                    
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
<blockquote>
  <table width="1400" height="114" border="1" align="center">
    <tr>
      <td bgcolor="#0000FF"><span class="style7">Salesid</span></td>
      <td bgcolor="#0000FF"><span class="style7">Dealerid</span></td>
      <td bgcolor="#0000FF"><span class="style7">BetelNut Name</span></td>
      <td bgcolor="#0000FF"><span class="style7">Salesdate</span></td>
      <td bgcolor="#0000FF"><span class="style7">Quantity</span></td>
      <td bgcolor="#0000FF"><span class="style7">CostperQty</span></td>
      <td bgcolor="#0000FF"><span class="style7">Totalcost</span></td>
    </tr>
    <?php
	$from_date=$_POST['t1'];
	$to_date=$_POST['t2'];
  require_once('dbcon.php');
  $ss="select * from sales where sdate>='$from_date' and sdate<='$to_date'";
  $rs=mysql_query($ss);
  $total=0;
  while($row=mysql_fetch_array($rs))
  {
      $total+=$row['stotalcost'];
  ?>
    <tr>
      <td bgcolor="#FFFFFF"><?php echo $row['sid'];?></td>
      <td bgcolor="#FFFFFF"><?php echo $row['did'];?></td>
      <td bgcolor="#FFFFFF"><?php echo $row['aid'];?></td>
      <td bgcolor="#FFFFFF"><?php echo $row['sdate'];?></td>
      <td bgcolor="#FFFFFF"><?php echo $row['squantity'];?></td>
      <td bgcolor="#FFFFFF"><?php echo $row['cost-per-qty'];?></td>
      <td bgcolor="#FFFFFF"><?php echo $row['stotalcost'];?></td>
    </tr>
    <?php
	}
	?>
    <tr>
      <td bgcolor="#999999"><span class="style1">Grand Total</span></td>
      <td bgcolor="#999999"><span class="style2"></span></td>
      <td bgcolor="#999999"><span class="style2"></span></td>
      <td bgcolor="#999999"><span class="style2"></span></td>
      <td bgcolor="#999999"><span class="style2"></span></td>
      <td bgcolor="#999999"><span class="style2"></span></td>
      <td bgcolor="#999999"><span class="style2"><strong><?php echo $total;?></strong></span></td>
    </tr>
  </table>
  <p align="center"><a href="Graph/index.php" style="font-size:24px; color:#FF0000;"> Report As in Graph </a></p>
</blockquote>
<?php include('footer.php');?>
<p>&nbsp;</p>
