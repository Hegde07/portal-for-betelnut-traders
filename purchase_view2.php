<style type="text/css">
<!--
.style5 {color: #FFFFFF; font-size: 24px; font-weight: bold; }
.style6 {font-size: 24px}
-->
</style>
                        <?php include('accountant_header.php');?>
<h2 style="font-size:36px;">Purchase</h2>
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
                                <blockquote>
  <table width="1400" border="1">
    <tr>
      <td width="134" height="52" bgcolor="#0033FF"><span class="style5">Purchaseid</span></td>
      <td width="115" bgcolor="#0033FF"><span class="style5">Marketid</span></td>
      <td width="108" bgcolor="#0033FF"><span class="style5">Quantity</span></td>
      <td width="167" bgcolor="#0033FF"><span class="style5">PurchaseDate</span></td>
      <td width="46" bgcolor="#0033FF"><span class="style5">Cost</span></td>
      <td width="181" bgcolor="#0033FF"><span class="style5">BetelNut Name</span></td>
      <td width="100" bgcolor="#0033FF"><span class="style5">TotalCost</span></td>
      <td width="35" bgcolor="#0033FF"><span class="style5">Gst</span></td>
      <td width="52" bgcolor="#0033FF"><span class="style5">CGst</span></td>
      <td width="48" bgcolor="#0033FF"><span class="style5">SGst</span></td>
      <td width="121" bgcolor="#0033FF"><span class="style5">GrandTotal</span></td>
      <td width="217" bgcolor="#0033FF"><span class="style5">TransportCharge</span></td>
    </tr>
     <?php
	 $from_date=$_POST['t1'];
	 $to_date=$_POST['t2'];
  require_once('dbcon.php');
  $ss="select * from purchase where pdate>='$from_date' and pdate<='$to_date'";
 
  $rs=mysql_query($ss);
  while($row=mysql_fetch_array($rs))
  {
  ?>
    <tr>
      <td height="59" bgcolor="#FFFFFF"><span class="style6"><?php echo $row['pid'];?></span></td>
      <td bgcolor="#FFFFFF"><span class="style6"><?php echo $row['mid'];?></span></td>
      <td bgcolor="#FFFFFF"><span class="style6"><?php echo $row['pquantity'];?></span></td>
      <td bgcolor="#FFFFFF"><span class="style6"><?php echo $row['pdate'];?></span></td>
      <td bgcolor="#FFFFFF"><span class="style6"><?php echo $row['cost'];?></span></td>
      <td bgcolor="#FFFFFF"><span class="style6"><?php echo $row['aid'];?></span></td>
      <td bgcolor="#FFFFFF"><span class="style6"><?php echo $row['totalcost'];?></span></td>
      <td bgcolor="#FFFFFF"><span class="style6"><?php echo $row['gst'];?></span></td>
      <td bgcolor="#FFFFFF"><span class="style6"><?php echo $row['cgst'];?></span></td>
      <td bgcolor="#FFFFFF"><span class="style6"><?php echo $row['sgst'];?></span></td>
      <td bgcolor="#FFFFFF"><span class="style6"><?php echo $row['grandtotal'];?></span></td>
      <td bgcolor="#FFFFFF"><span class="style6"><?php echo $row['transportcharge'];?></span></td>
    </tr>
    <?php
	 }
	?>
  </table>
  <p>&nbsp;</p>
  <p align="center"><a href="Graph/purchase_report_graph.php" style="font-size:24px; color:#FF0000;"> Report As in Graph </a></p>
</blockquote>
<?php include('footer.php');?>
<p>&nbsp;</p>

