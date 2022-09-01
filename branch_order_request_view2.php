
</head>

<style type="text/css">
<!--
.style12 {color: #FFFFFF; font-family: Arial, Helvetica, sans-serif; font-weight: bold; font-size: 24px; }
.style19 {color: #000000}
.style21 {color: #FF0000}
.style22 {
	font-size: 18px;
	font-weight: bold;
}
-->
</style>
<body>
<div align="center"><?php include('branch_header.php');?>
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
                        <div class="sidebar" style="width:1500px; margin-left: -193px; margin-bottom:-110px; margin-top:-63px;">
                            <div class="widget-no-style">
                                <div class="newsletter-widget text-center align-self-center">
<div align="center"></div>
<table width="1379" height="185" border="1" style="margin-left:-29px;">
  <tr bgcolor="#CC6666">
    <td width="88" height="90"><div align="center"><span class="style12">User_id</span></div></td>
    <td width="83"><div align="center"><span class="style12">Branch</span></div></td>
    <td width="95"><div align="center"><span class="style12">Orderno</span></div></td>
    <td width="174"><div align="center"><span class="style12">Betelnut_name</span></div></td>
    <td width="82"><div align="center"><span class="style12">Quality</span></div></td>
    <td width="52"><div align="center"><span class="style12">uom</span></div></td>
    <td width="98"><div align="center"><span class="style12">Quantity</span></div></td>
    <td width="52"><div align="center"><span class="style12">Rate</span></div></td>
    <td width="59"><div align="center"><span class="style12">Total</span></div></td>
    <td width="68"><div align="center"><span class="style12">CGST</span></div></td>
    <td width="67"><div align="center"><span class="style12">SGST</span></div></td>
    <td width="124"><div align="center"><span class="style12">Grandtotal</span></div></td>
    <td width="115"><div align="center"><span class="style12">Orderdate</span></div></td>
    <td width="134"><div align="center"><span class="style12">Orderstatus</span></div></td>
  </tr>
  <?php
  require_once('dbcon.php');
  session_start();
  $u=$_SESSION['t1'];
  $ss="select * from branch_order_request where branch='$u'";
  $rs=mysql_query($ss);
  while($row=mysql_fetch_array($rs))
  {
  ?>
  <tr>
    <td height="87" bgcolor="#FFFFFF"><div align="center" class="style22"><span class="style19"><?php echo $row['user_id'];?></span></div></td>
    <td bgcolor="#FFFFFF"><div align="center" class="style22"><span class="style19"><?php echo $row['branch'];?></span></div></td>
    <td bgcolor="#FFFFFF"><div align="center" class="style22"><span class="style19"><?php echo $row['ono'];?></span></div></td>
    <td bgcolor="#FFFFFF"><div align="center" class="style22"><span class="style19"><?php echo $row['betelnut_name'];?></span></div></td>
    <td bgcolor="#FFFFFF"><div align="center" class="style22"><span class="style19"><?php echo $row['quality'];?></span></div></td>
    <td bgcolor="#FFFFFF"><div align="center" class="style22"><span class="style19"><?php echo $row['uom'];?></span></div></td>
    <td bgcolor="#FFFFFF"><div align="center" class="style22"><span class="style19"><?php echo $row['quantity'];?></span></div></td>
    <td bgcolor="#FFFFFF"><div align="center" class="style22"><span class="style19"><?php echo $row['rate'];?></span></div></td>
    <td bgcolor="#FFFFFF"><div align="center" class="style22"><span class="style19"><?php echo $row['total'];?></span></div></td>
    <td bgcolor="#FFFFFF"><div align="center" class="style22"><span class="style19"><?php echo $row['CGST'];?></span></div></td>
    <td bgcolor="#FFFFFF"><div align="center" class="style22"><span class="style19"><?php echo $row['SGST'];?></span></div></td>
    <td bgcolor="#FFFFFF"><div align="center" class="style22"><span class="style19"><?php echo $row['grandtotal'];?></span></div></td>
    <td bgcolor="#FFFFFF"><div align="center" class="style22"><span class="style19"><?php echo $row['orderdate'];?></span></div></td>
    <td bgcolor="#FFFFFF"><div align="center" class="style22"><span class="style21"><?php echo $row['order_status'];?></span></div></td>
  </tr>
  <?php } ?>
</table>
<?php include('footer.php');?>
