
</head>
<style type="text/css">
<!--
.style16 {color: #000000; font-weight: bold; font-size: 24; }
.style17 {font-size: 24}
.style19 {color: #000000; font-weight: bold; font-size: 24px; }
.style20 {font-size: 24px}
.style22 {color: #FFFFFF; font-weight: bold; font-size: 28px; }
.style26 {font-size: 36px; }
-->
</style>
<body>
<div align="center"><?php include('dealer_header.php');?>
                        <h2 align="left" style="font-size:36px;">ORDER DETAILS</h2>
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
                     
                     <?php
					 $id=$_GET['id'];
					 require_once('dbcon.php');
  $ss1="select * from branch_order_request where ono='$id' ";
  $rs1=mysql_query($ss1);
  $row1=mysql_fetch_array($rs1);
  ?>  
<p align="center">&nbsp;	</p>
                      <table width="1119" border="1" align="center" style="margin-left:70px;">
                        <tr>
                          <td height="43" colspan="7" bgcolor="#99CCFF"><div align="center">
                            <p><span class="style26">SIRI TRADERS ORGANIZATION</span></p>
                            <p><span class="style20">SIRI NAGAR NARAYANPUR YELLAPUR 581 359(U.K)</span></p>
                          </div></td>
                        </tr>
                        <tr>
                          <td width="465" height="43" bgcolor="#99CCFF"><span class="style16 style20">User Id</span></td>
                          <td width="110" bgcolor="#99CCFF"><span class="style16 style20"><?php echo $row1['user_id'];?></span></td>
                          <td width="102" bgcolor="#99CCFF">&nbsp;</td>
                          <td width="108" bgcolor="#99CCFF">&nbsp;</td>
                          <td width="105" bgcolor="#99CCFF">&nbsp;</td>
                          <td width="96" bgcolor="#99CCFF">&nbsp;</td>
                          <td width="87" bgcolor="#99CCFF">&nbsp;</td>
                        </tr>
                        <tr>
                          <td height="43" bgcolor="#99CCFF"><span class="style16 style20">Branch</span></td>
                          <td bgcolor="#99CCFF"><span class="style16 style20"><?php echo $row1['branch'];?></span></td>
                          <td bgcolor="#99CCFF">&nbsp;</td>
                          <td bgcolor="#99CCFF">&nbsp;</td>
                          <td bgcolor="#99CCFF">&nbsp;</td>
                          <td bgcolor="#99CCFF">&nbsp;</td>
                          <td bgcolor="#99CCFF">&nbsp;</td>
                        </tr>
                        <tr>
                          <td height="44" bgcolor="#99CCFF"><span class="style16 style20">OrderNo</span></td>
                          <td bgcolor="#99CCFF"><span class="style16 style20"><?php echo $row1['ono'];?></span></td>
                          <td bgcolor="#99CCFF">&nbsp;</td>
                          <td bgcolor="#99CCFF">&nbsp;</td>
                          <td bgcolor="#99CCFF">&nbsp;</td>
                          <td bgcolor="#99CCFF">&nbsp;</td>
                          <td bgcolor="#99CCFF">&nbsp;</td>
                        </tr>
                        <tr>
                          <td bgcolor="#99CCFF"><span class="style17"></span></td>
                          <td bgcolor="#99CCFF">&nbsp;</td>
                          <td bgcolor="#99CCFF">&nbsp;</td>
                          <td bgcolor="#99CCFF">&nbsp;</td>
                          <td bgcolor="#99CCFF">&nbsp;</td>
                          <td bgcolor="#99CCFF">&nbsp;</td>
                          <td bgcolor="#99CCFF">&nbsp;</td>
                        </tr>
                        <tr>
                          <td height="58" bgcolor="#996600"><span class="style22">Betel Nut Name</span></td>
                          <td bgcolor="#996600"><span class="style22">Quality</span></td>
                          <td bgcolor="#996600"><span class="style22">UOM</span></td>
                          <td bgcolor="#996600"><span class="style22">Quantity</span></td>
                          <td bgcolor="#996600"><span class="style22">Rate</span></td>
                          <td bgcolor="#996600"><span class="style22">Total</span></td>
                          <td bgcolor="#996600">&nbsp;</td>
                        </tr>
                        <?php
						
  require_once('dbcon.php');
  $ss="select * from branch_order_request where ono='$id'";
  $rs=mysql_query($ss);
  while($row=mysql_fetch_array($rs))
  {
  ?>
                        <tr>
                          <td height="46" bgcolor="#99CCFF"><span class="style19 style17"><?php echo $row['betelnut_name'];?></span></td>
                          <td bgcolor="#99CCFF"><span class="style19 style17"><?php echo $row['quality'];?></span></td>
                          <td bgcolor="#99CCFF"><span class="style19 style17"><?php echo $row['uom'];?></span></td>
                          <td bgcolor="#99CCFF"><span class="style19 style17"><?php echo $row['quantity'];?></span></td>
                          <td bgcolor="#99CCFF"><span class="style19 style17"><?php echo $row['rate'];?></span></td>
                          <td bgcolor="#99CCFF"><span class="style19 style17"><?php echo $row['total'];?></span></td>
                          <td bgcolor="#99CCFF"><a href="branch_order_remove.php?id=<?php echo $row['user_id'];?>" class="style20 style17" style="color:#FF0000;">Remove</a></td>
                        </tr>
                        <?php
						}
						?>
                        <tr>
                          <td height="37" bgcolor="#99CCFF"><span class="style19 style17">CGST(9%)</span></td>
                          <td bgcolor="#99CCFF">&nbsp;</td>
                          <td bgcolor="#99CCFF">&nbsp;</td>
                          <td bgcolor="#99CCFF">&nbsp;</td>
                          <td bgcolor="#99CCFF">&nbsp;</td>
                          <td bgcolor="#99CCFF"><span class="style19 style17"><?php echo $row1['CGST'];?></span></td>
                          <td bgcolor="#99CCFF">&nbsp;</td>
                        </tr>
                        <tr>
                          <td height="41" bgcolor="#99CCFF"><span class="style19 style17">SGST(9%)</span></td>
                          <td bgcolor="#99CCFF">&nbsp;</td>
                          <td bgcolor="#99CCFF">&nbsp;</td>
                          <td bgcolor="#99CCFF">&nbsp;</td>
                          <td bgcolor="#99CCFF">&nbsp;</td>
                          <td bgcolor="#99CCFF"><span class="style19 style17"><?php echo $row1['SGST'];?></span></td>
                          <td bgcolor="#99CCFF">&nbsp;</td>
                        </tr>
                        <tr>
                          <td height="48" bgcolor="#999999"><span class="style19 style17"><strong>Grand Total</strong></span></td>
                          <td bgcolor="#999999">&nbsp;</td>
                          <td bgcolor="#999999">&nbsp;</td>
                          <td bgcolor="#999999">&nbsp;</td>
                          <td bgcolor="#999999">&nbsp;</td>
                          <td bgcolor="#999999"><span class="style19 style17"><?php echo $row1['grandtotal'];?></span></td>
                          <td bgcolor="#999999"><span class="style17"></span></td>
                        </tr>
                        <tr>
                          <td height="45" bgcolor="#99CCFF"><span class="style17"></span></td>
                          <td colspan="3" bgcolor="#99CCFF"><a href="branch_order_comfirm.php?id=<?php echo $id;?>&total=<?php echo $row1['grandtotal'];?>" class="style20 style17" style="color: #FF6600;"><strong>Click Here to Confirm Your Order</strong></a></td>
                          <td bgcolor="#99CCFF">&nbsp;</td>
                          <td bgcolor="#99CCFF">&nbsp;</td>
                          <td bgcolor="#99CCFF">&nbsp;</td>
                        </tr>
</table>
<p align="center"><a href="branch_order_comfirm.php?id=<?php echo $id;?>&total=<?php echo $row1['grandtotal'];?>"></a></p>
<?php include('footer.php');?>