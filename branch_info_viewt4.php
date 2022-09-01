
</head>

<style type="text/css">
<!--
.style11 {color: #FFFFFF; font-weight: bold; font-size: 24px; }
.style13 {color: #000000; font-weight: bold; font-size: 24px; }
-->
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
                        <div class="sidebar" style="width:1500px; margin-left: -193px; margin-bottom:-110px; margin-top:-63px;">
                            <div class="widget-no-style">
                                <div class="newsletter-widget text-center align-self-center">
<div align="center"></div>
<table width="1400" height="207" border="1">
  <tr bgcolor="#CC6666">
    <td width="171" height="101"><span class="style11">BRACH_NAME</span></td>
    <td width="225"><span class="style11">BRANCH_ADDRESS</span></td>
    <td width="173"><span class="style11">BRANCH_CITY</span></td>
    <td width="243"><span class="style11">BETEL NUT NAME</span></td>
    <td width="203"><span class="style11">QUALITY_LEVEL</span></td>
    <td width="128"><span class="style11">QUANTITY</span></td>
    <td width="80"><span class="style11">RATE</span></td>
    <td width="125"><span class="style11">ACTIVITY</span></td>
  </tr>
  <?php
  session_start();
  $u=$_SESSION['t1'];
  require_once('dbcon.php');
  $ss="select * from branch_info where BRANCH_NAME='$u' ";
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
    <td width="125" bgcolor="#FFFFFF"><div align="center" class="style13"><a href="branch_update.php?id=<?php echo $row['BRANCH_NAME'];?>">update</a></div></td>
  </tr>
  <?php } ?>
</table>
<?php include('footer.php');?>
