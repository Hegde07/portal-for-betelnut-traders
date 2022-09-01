
</head>
<style type="text/css">
<!--
.style4 {color: #000000}
.style11 {
	font-size: 24px;
	font-weight: bold;
	color: #000000;
}
.style12 {font-size: 24px}
.style26 {
	font-size: 36px;
	color: #FFFFFF;
}
.style28 {font-size: 24px; color: #FFFFFF; }
.style29 {color: #000000; font-weight: bold; font-size: 30px; }
-->
</style>
<body>
<div align="center"><?php include('admin_header.php');?>
                        <h2 align="left" style="font-size:36px;">BILL DETAILS</h2>
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
                     
                     <?php
					 $id=$_GET['id'];
					 require_once('dbcon.php');
  $ss1="select * from dealer_order_request where order_no='$id' ";
  $rs1=mysql_query($ss1);
  $row1=mysql_fetch_array($rs1);
  ?>  
<p align="center">&nbsp;	</p>
                      <table width="883" border="1" align="center" style="margin-left:70px;">
                        <tr>
                          <td height="43" colspan="5" bgcolor="#996600"><div align="center" class="style11">
                            <p><span class="style26">SIRI TRADERS ORGANIZATION</span></p>
                            <p><span class="style28">SIRI NAGAR NARAYANPUR YELLAPUR 581 359(U.K)</span></p>
                          </div></td>
                        </tr>
                        <tr>
                          <td width="389" height="43" bgcolor="#99CCFF"><span class="style11">User Id</span></td>
                          <td width="107" bgcolor="#99CCFF"><span class="style11"><?php echo $row1['dealer_id'];?></span></td>
                          <td width="111" bgcolor="#99CCFF">&nbsp;</td>
                          <td width="128" bgcolor="#99CCFF">&nbsp;</td>
                          <td width="114" bgcolor="#99CCFF">&nbsp;</td>
                        </tr>
                        
                        <tr>
                          <td height="44" bgcolor="#99CCFF"><span class="style11">OrderNo</span></td>
                          <td bgcolor="#99CCFF"><span class="style11"><?php echo $row1['order_no'];?></span></td>
                          <td bgcolor="#99CCFF">&nbsp;</td>
                          <td bgcolor="#99CCFF">&nbsp;</td>
                          <td bgcolor="#99CCFF">&nbsp;</td>
                        </tr>
                        <tr>
                          <td bgcolor="#99CCFF"><span class="style4"></span></td>
                          <td bgcolor="#99CCFF">&nbsp;</td>
                          <td bgcolor="#99CCFF">&nbsp;</td>
                          <td bgcolor="#99CCFF">&nbsp;</td>
                          <td bgcolor="#99CCFF">&nbsp;</td>
                        </tr>
                        <tr>
                          <td height="58" bgcolor="#999999"><span class="style29">Betel Nut Name</span></td>
                          
                          <td bgcolor="#999999"><span class="style29">UOM</span></td>
                          <td bgcolor="#999999"><span class="style29">Quantity</span></td>
                          <td bgcolor="#999999"><span class="style29">Rate</span></td>
                          <td bgcolor="#999999"><span class="style29">Total</span></td>
                        </tr>
                        <?php
						
  require_once('dbcon.php');
  $ss="select * from dealer_order_request where order_no='$id'";
  $rs=mysql_query($ss);
  while($row=mysql_fetch_array($rs))
  {
  ?>
                        <tr>
                          <td height="46" bgcolor="#99CCFF"><span class="style11"><?php echo $row['betelnut'];?></span></td>
                          
                          <td bgcolor="#99CCFF"><span class="style11"><?php echo $row['uom'];?></span></td>
                          
                          <td bgcolor="#99CCFF"><span class="style11"><?php echo $row['quantity'];?></span></td>
                          
                          
                          <td bgcolor="#99CCFF"><span class="style11"><?php echo $row['price'];?></span></td>
                          <td bgcolor="#99CCFF"><span class="style11"><?php echo $row['total'];?></span></td>
                        </tr>
                        <?php
						}
						?>
                        <tr>
                          <td height="37" bgcolor="#99CCFF"><span class="style11">CGST(9%)</span></td>
                          <td bgcolor="#99CCFF"><span class="style12"></span></td>
                          <td bgcolor="#99CCFF"><span class="style12"></span></td>
                          <td bgcolor="#99CCFF"><span class="style12"></span></td>
                          <td bgcolor="#99CCFF"><span class="style11"><?php echo $row1['cgst'];?></span></td>
                        </tr>
                        <tr>
                          <td height="41" bgcolor="#99CCFF"><span class="style11">SGST(9%)</span></td>
                          <td bgcolor="#99CCFF"><span class="style12"></span></td>
                          <td bgcolor="#99CCFF"><span class="style12"></span></td>
                          <td bgcolor="#99CCFF"><span class="style12"></span></td>
                          <td bgcolor="#99CCFF"><span class="style11"><?php echo $row1['sgst'];?></span></td>
                        </tr>
                        <tr>
                          <td height="48" bgcolor="#999999"><span class="style11"><strong>Grand Total</strong></span></td>
                          <td bgcolor="#999999"><span class="style12"></span></td>
                          <td bgcolor="#999999"><span class="style12"></span></td>
                          <td bgcolor="#999999"><span class="style12"></span></td>
                          <td bgcolor="#999999"><span class="style11"><?php echo $row1['gradtotal'];?></span></td>
                        </tr>
</table>
<?php include('footer.php');?>