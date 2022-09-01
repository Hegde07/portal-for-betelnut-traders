
</head>

<style type="text/css">
<!--
.style11 {color: #FFFFFF; font-weight: bold; font-size: 30px; }
.style13 {color: #000000; font-weight: bold; font-size: 30px; }
-->
</style>
<body>
<div align="center"><?php include('dealer_header.php');?>
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
<div align="center"></div>
<table width="1400" height="207" border="1">
  <tr>
    <td width="155" height="101" bgcolor="#009966"><span class="style11">Branch_Name</span></td>
    <td width="206" bgcolor="#009966"><span class="style11">Branch_Address</span></td>
    <td width="155" bgcolor="#009966"><span class="style11">Branch_City</span></td>
    <td width="166" bgcolor="#009966"><span class="style11">Betel Nut Name</span></td>
    <td width="139" bgcolor="#009966"><span class="style11">Quality_Level</span></td>
    <td width="117" bgcolor="#009966"><span class="style11">Quantity</span></td>
    <td width="112" bgcolor="#009966"><span class="style11">Rate</span></td>
  </tr>
  <?php
  require_once('dbcon.php');
  $ss="select * from branch_info";
  $rs=mysql_query($ss);
  while($row=mysql_fetch_array($rs))
  {
  ?>
  <tr>
    <td height="98" bgcolor="#FFFFFF"><div align="center"><span class="style13"><?php echo $row['BRANCH_NAME'];?></span></div></td>
    <td bgcolor="#FFFFFF"><div align="center"><span class="style13"><?php echo $row['BRANCH_ADDRESS'];?></span></div></td>
    <td bgcolor="#FFFFFF"><div align="center"><span class="style13"><?php echo $row['BRANCH_CITY'];?></span></div></td>
    <td bgcolor="#FFFFFF"><div align="center"><span class="style13"><?php echo $row['CATEGORY'];?></span></div></td>
    <td bgcolor="#FFFFFF"><div align="center"><span class="style13"><?php echo $row['QUALITY_LEVEL'];?></span></div></td>
    <td bgcolor="#FFFFFF"><div align="center"><span class="style13"><?php echo $row['QUANTITY'];?></span></div></td>
    <td bgcolor="#FFFFFF"><div align="center"><span class="style13"><?php echo $row['RATE'];?></span></div></td>
  </tr>
  <?php } ?>
</table>
<?php include('footer.php');?>
