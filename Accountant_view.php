
</head>

<style type="text/css">
<!--
.style10 {color: #FFFFFF; font-family: Arial, Helvetica, sans-serif; font-size: 24px; font-weight: bold; }
.style14 {font-size: 24; color: #000000; }
-->
</style>
<body>
<div align="center"><?php include('accountant_header.php');?>
                        <h2 align="left" style="font-size:36px;">Accountant</h2>
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
                        <div class="sidebar" style="width:1518px; margin-left: -205px; margin-top:-63px; margin-bottom:-110px;">
                            <div class="widget-no-style">
                                <div class="newsletter-widget text-center align-self-center">
<div align="center"></div>
<table width="1400" height="118" border="1">
  <tr>
    <td width="284" bgcolor="#9966FF"><span class="style10">Name</span></td>
    <td width="315" bgcolor="#9966FF"><span class="style10">Address</span></td>
    <td width="273" bgcolor="#9966FF"><span class="style10">Contact</span></td>
    <td width="244" bgcolor="#9966FF"><span class="style10">Email</span></td>
    <td width="170" bgcolor="#FF0000"> <span class="style10">Activity</span> </td>
  </tr>
  <?php
  require_once('dbcon.php');
  $ss="select * from accountant";
  $rs=mysql_query($ss);
  while($row=mysql_fetch_array($rs))
  {
  ?>
  <tr>
    <td><div align="center"><span class="style14"><?php echo $row['aname'];?></span></div></td>
    <td><div align="center"><span class="style14"><?php echo $row['aaddress'];?></span></div></td>
    <td><div align="center"><span class="style14"><?php echo $row['acontact'];?></span></div></td>
     <td><div align="center"><span class="style14"><?php echo $row['aemail'];?></span></div></td>
    <td><a href="Accountant_delete.php?id=<?php echo $row['aemail'];?>" class="style14">delete</a></td>
  </tr>
  <?php } ?>
</table>
<?php include('footer.php');?>
