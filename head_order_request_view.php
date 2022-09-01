
</head>

<style type="text/css">
<!--
.style12 {color: #FFFFFF; font-family: Arial, Helvetica, sans-serif; font-weight: bold; font-size: 24px; }
.style31 {color: #000000; font-weight: bold; font-size: 20px; }
.style33 {color: #FF0000; font-weight: bold; font-size: 20px; }
-->
</style>
<body>
<div align="center"><?php include('admin_header.php');?>
                        <h2 align="left" style="font-size:36px;">DEALER ORDER REQUEST	</h2>
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
                        <div class="sidebar" style="width:1540px; margin-left: -210px; margin-top:-63px; margin-bottom:-110px;">
                            <div class="widget-no-style">
                                <div class="newsletter-widget text-center align-self-center">
<div align="center"></div>
<table width="1400" height="185" border="1" style="margin-left:-25px;">
  <tr bgcolor="#0099FF">
    <td width="118" height="90"><span class="style12">Order_No</span></td>
    <td width="86"><span class="style12">Dealer Id</span> </td>
    <td width="175"><span class="style12">BetelNut_Name</span></td>
    <td width="53"><span class="style12">Uom</span></td>
    <td width="97"><span class="style12">Quantity</span></td>
    <td width="64"><span class="style12">Price</span></td>
    <td width="58"><span class="style12">Total</span></td>
    <td width="50"><span class="style12">GST</span></td>
    <td width="111"><span class="style12">CGST</span></td>
    <td width="86"><span class="style12">SGST</span></td>
    <td width="122"><span class="style12">Grandtotal</span></td>
    <td width="123"><span class="style12">Orderdate</span></td>
    <td width="175"><span class="style12">Order_status</span></td>
  </tr>
  <?php
  require_once('dbcon.php');
  session_start();
  //$u=$_SESSION['t1'];
  $ss="select * from dealer_order_request where order_status='confirmed'";
  $rs=mysql_query($ss);
  while($row=mysql_fetch_array($rs))
  {
  ?>
  <tr>
    <td height="87" bgcolor="#FFFFFF"><div align="center"><span class="style31"><?php echo $row['order_no'];?></span></div></td>
    <td bgcolor="#FFFFFF"><div align="center"><span class="style31"><?php echo $row['dealer_id'];?></span></div></td>
    <td bgcolor="#FFFFFF"><div align="center"><span class="style31"><?php echo $row['betelnut'];?></span></div></td>
    <td bgcolor="#FFFFFF"><div align="center"><span class="style31"><?php echo $row['uom'];?></span></div></td>
    <td bgcolor="#FFFFFF"><div align="center"><span class="style31"><?php echo $row['quantity'];?></span></div></td>
    <td bgcolor="#FFFFFF"><div align="center"><span class="style31"><?php echo $row['price'];?></span></div></td>
    <td bgcolor="#FFFFFF"><div align="center"><span class="style31"><?php echo $row['total'];?></span></div></td>
    <td bgcolor="#FFFFFF"><div align="center"><span class="style31"><?php echo $row['gst_tax'];?></span></div></td>
    <td bgcolor="#FFFFFF"><div align="center"><span class="style31"><?php echo $row['cgst'];?></span></div></td>
    <td bgcolor="#FFFFFF"><div align="center"><span class="style31"><?php echo $row['sgst'];?></span></div></td>
    <td bgcolor="#FFFFFF"><div align="center"><span class="style31"><?php echo $row['gradtotal'];?></span></div></td>
    <td bgcolor="#FFFFFF"><div align="center"><span class="style33"><?php echo $row['order_date'];?></span></div></td>
    
  <td bgcolor="#FFFFFF"><div align="center"><span class="style33"><?php echo $row['order_status'];?></span></div></td>
  </tr>
  <?php } ?>
</table>
<?php include('footer.php');?>
