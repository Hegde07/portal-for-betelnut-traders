
</head>

<style type="text/css">
<!--
.style6 {color: #FFFFFF; font-weight: bold; }
.style14 {color: #FFFFFF; font-weight: bold; font-size: 30px; }
.style15 {font-size: 30px}
.style16 {color: #000000; font-weight: bold; font-size: 30px; }
-->
</style>
<body>
<div align="center"><?php include('dealer_header.php');?>
                        <h2 align="left" style="font-size:36px;">BETEL NUT PRICE (HEAD OFFICE)</h2>
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
<table width="1400" height="181" border="1">
  <tr bgcolor="#0000FF">
    <td width="297" height="69" bgcolor="#009966"><span class="style14">Betel_Nut_Name</span></td>
    <td width="160" bgcolor="#009966"><div align="center" class="style15"><span class="style6">Uom</span></div></td>
    <td width="221" bgcolor="#009966"><span class="style14">Quality_Level</span></td>
    <td width="177" bgcolor="#009966"><span class="style14">Quantity</span></td>
    <td width="141" bgcolor="#009966"><span class="style14">Rate</span></td>
    <td width="223" bgcolor="#009966"><span class="style14">Current Stock</span></td>
    <td width="135" bgcolor="#009966"><span class="style14">Image</span></td>
  </tr>
  <?php
  require_once('dbcon.php');
  $ss="select * from betelnut_price";
  $rs=mysql_query($ss);
  while($row=mysql_fetch_array($rs))
  {
  ?>
  <tr>
    <td bgcolor="#FFFFFF"><div align="center"><span class="style16"><?php echo $row['BETEL_NUT_NAME'];?></span></div></td>
    <td bgcolor="#FFFFFF"><div align="center"><span class="style16"><?php echo $row['BETEL_NUT_CATEGORY'];?></span></div></td>
    <td bgcolor="#FFFFFF"><div align="center"><span class="style16"><?php echo $row['QUALITY_LEVEL'];?></span></div></td>
    <td bgcolor="#FFFFFF"><div align="center"><span class="style16"><?php echo $row['QUANTITY'];?></span></div></td>
    <td bgcolor="#FFFFFF"><div align="center"><span class="style16"><?php echo $row['RATE'];?></span></div></td>
     <td bgcolor="#FFFFFF"><div align="center"><span class="style16"><?php echo $row['current_stock'];?></span></div></td>
    <td bgcolor="#FFFFFF"><img src="upload/<?php echo $row['IMAGE'];?>" width="100" height="100"></td>
  </tr>
  <?php } ?>
</table>
<?php include('footer.php');?>
