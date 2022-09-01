
</head>
<style type="text/css">
<!--
.style7 {
	color: #000000;
	font-size: 30px;
}
.style9 {color: #FFFFFF; font-weight: bold; font-size: 30px; }
.style11 {color: #000000; font-weight: bold; font-size: 30px; }
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
                        <div class="sidebar" style="width:1550px; margin-left: -220px; margin-top:-63px; margin-bottom:-110px;">
                            <div class="widget-no-style">
                                <div class="newsletter-widget text-center align-self-center">
<div align="center"></div>
<table width="1400" height="261" border="1" style="margin-left:-15px;">
  <tr>
    <td width="180" height="123" bgcolor="#009966"><span class="style9">BranchName</span></td>
    <td width="211" bgcolor="#009966"><span class="style9">BranchAddress</span></td>
    <td width="161" bgcolor="#009966"><span class="style9">BranchCity</span></td>
    <td width="115" bgcolor="#009966"><span class="style9">BetelNutName</span></td>
    <td width="176" bgcolor="#009966"><span class="style9">QualityLevel</span></td>
    <td width="111" bgcolor="#009966"><span class="style9">Quantity</span></td>
    <td width="59" bgcolor="#009966"><span class="style9">Rate</span></td>
    <td width="175" bgcolor="#009966"><span class="style9">CurrentStock</span></td>
    <td bgcolor="#FF0000"><span class="style9">ORDER</span></td>
  </tr>
  <?php
  $branch=$_POST['t1']; 
  require_once('dbcon.php');
  $ss="select * from branch_info where branch_name='$branch'";
  $rs=mysql_query($ss);
  while($row=mysql_fetch_array($rs))
  {
  ?>
  <tr>
    <td height="130" bgcolor="#FFFFFF"><div align="center"><span class="style11"><?php echo $row['BRANCH_NAME'];?></span></div></td>
    <td bgcolor="#FFFFFF"><div align="center"><span class="style11"><?php echo $row['BRANCH_ADDRESS'];?></span></div></td>
    <td bgcolor="#FFFFFF"><div align="center"><span class="style11"><?php echo $row['BRANCH_CITY'];?></span></div></td>
    <td bgcolor="#FFFFFF"><div align="center"><span class="style11"><?php echo $row['CATEGORY'];?></span></div></td>
    <td bgcolor="#FFFFFF"><div align="center"><span class="style11"><?php echo $row['QUALITY_LEVEL'];?></span></div></td>
    <td bgcolor="#FFFFFF"><div align="center"><span class="style11"><?php echo $row['QUANTITY'];?></span></div></td>
    <td bgcolor="#FFFFFF"><div align="center"><span class="style11"><?php echo $row['RATE'];?></span></div></td>
    <td bgcolor="#FFFFFF"><div align="center"><span class="style11"><?php echo $row['current_stock'];?></span></div></td>
    <td width="138" bgcolor="#FFFFFF"><div align="center" class="style13 style7"><a href="send_orders2.php?id=<?php echo $row['BRANCH_NAME'];?>"><strong>ORDER</strong></a></div></td>
  </tr>
  <?php } ?>
</table>
<?php include('footer.php');?>
