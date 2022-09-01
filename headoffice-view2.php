
</head>
<style type="text/css">
<!--
.style17 {font-family: Arial, Helvetica, sans-serif; font-weight: bold; color: #FFFFFF; font-size: 30px; }
.style19 {color: #000000; font-weight: bold; font-size: 24px; }
-->
</style>
<body>
<div align="center"><?php include('admin_header.php');?>
                        <h2 align="left" style="font-size:36px;">HEAD OFFICE</h2>
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
<table width="1400" height="195" border="1">
  <tr bgcolor="#0033FF">
    <td width="351" height="87" bgcolor="#3399FF"><span class="style17">Head Office Name</span></td>
    <td width="170" bgcolor="#3399FF"><span class="style17">Location</span></td>
    <td width="165" bgcolor="#3399FF"><span class="style17">Address</span></td>
    <td width="154" bgcolor="#3399FF"><span class="style17">District</span></td>
    <td width="129" bgcolor="#3399FF"><span class="style17">Tauk</span></td>
    <td width="126" bgcolor="#3399FF"><span class="style17">Contact</span></td>
    <td colspan="2" bordercolor="#0066FF" bgcolor="#CC3333"> <div align="center" class="style17">Activity </div></td>
  </tr>
  <?php
  require_once('dbcon.php');
  $ss="select * from headoffice";
  $rs=mysql_query($ss);
  while($row=mysql_fetch_array($rs))
  {
  ?>
  <tr>
    <td height="100" bgcolor="#FFFFFF"><div align="center"><span class="style19"><?php echo $row['hname'];?></span></div></td>
    <td bgcolor="#FFFFFF"><div align="center"><span class="style19"><?php echo $row['hlocation'];?></span></div></td>
    <td bgcolor="#FFFFFF"><div align="center"><span class="style19"><?php echo $row['haddress'];?></span></div></td>
    <td bgcolor="#FFFFFF"><div align="center"><span class="style19"><?php echo $row['hdistrict'];?></span></div></td>
    <td bgcolor="#FFFFFF"><div align="center"><span class="style19"><?php echo $row['htaluk'];?></span></div></td>
    <td bgcolor="#FFFFFF"><div align="center"><span class="style19"><?php echo $row['hcontact'];?></span></div></td>
    <td width="125" bordercolor="#0066FF" bgcolor="#FFFFFF"><div align="center" class="style19"><a href="headoffice-delete.php?id=<?php echo $row['hcontact'];?>">delete</a></div></td>
    <td width="128" bordercolor="#0066FF" bgcolor="#FFFFFF"><div align="center" class="style19"><a href="headoffice_update.php?id=<?php echo $row['hcontact'];?>">update</a></div></td>
  </tr>
  <?php } ?>
</table>
<?php include('footer.php');?>
