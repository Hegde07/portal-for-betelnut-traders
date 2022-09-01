
</head>

<style type="text/css">
<!--
.style21 {font-family: Arial, Helvetica, sans-serif; font-weight: bold; font-size: 30px; color: #FFFFFF; }
.style22 {font-size: 30px}
.style23 {font-weight: bold; color: #FFFFFF; font-family: Arial, Helvetica, sans-serif;}
.style25 {color: #000000; font-weight: bold; font-size: 24px; }
.style28 {font-size: 24px}
-->
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
<div align="center"></div>
<table width="1400" height="189" border="1">
  <tr bgcolor="#0033FF">
    <td width="251" height="77" bgcolor="#3399FF"><span class="style21">Betal Nut Name</span></td>
    <td width="242" bgcolor="#3399FF"><div align="center" class="style22"><span class="style23">UOM</span></div></td>
    <td width="193" bgcolor="#3399FF"><span class="style21">Quality Level</span></td>
    <td width="176" bgcolor="#3399FF"><span class="style21">Quantity</span></td>
    <td width="126" bgcolor="#3399FF"><span class="style21">Rate</span></td>
    <td width="126" bgcolor="#3399FF"><span class="style21">Image</span></td>
    <td colspan="2" bgcolor="#CC3333"><div align="center" class="style21">Activity</div></td>
  </tr>
  <?php
  require_once('dbcon.php');
  $ss="select * from betelnut_price";
  $rs=mysql_query($ss);
  while($row=mysql_fetch_array($rs))
  {
  ?>
  <tr>
    <td bgcolor="#FFFFFF"><div align="center"><span class="style25"><?php echo $row['BETEL_NUT_NAME'];?></span></div></td>
    <td bgcolor="#FFFFFF"><div align="center"><span class="style25"><?php echo $row['BETEL_NUT_CATEGORY'];?></span></div></td>
    <td bgcolor="#FFFFFF"><div align="center"><span class="style25"><?php echo $row['QUALITY_LEVEL'];?></span></div></td>
    <td bgcolor="#FFFFFF"><div align="center"><span class="style25"><?php echo $row['QUANTITY'];?></span></div></td>
    <td bgcolor="#FFFFFF"><div align="center"><span class="style25"><?php echo $row['RATE'];?></span></div></td>
    <td bgcolor="#FFFFFF"><img src="upload/<?php echo $row['IMAGE'];?>" width="100" height="100"></td>
    <td width="113" bgcolor="#FFFFFF"><div align="center" class="style25 style28"><a href="betulnut_price-delete.php?id=<?php echo $row['BETEL_NUT_NAME'];?>" class="style6">delete</a></div></td>
    <td width="121" bgcolor="#FFFFFF"><div align="center" class="style25"><a href="betelnut_price_update.php?id=<?php echo $row['BETEL_NUT_NAME'];?>" class="style6">update</a></div></td>
  </tr>
  <?php } ?>
</table>
<?php include('footer.php');?>
