<style type="text/css">
<!--
.style1 {
	color: #000000;
	font-weight: bold;
}
.style3 {color: #FFFFFF; font-weight: bold; }
.style4 {font-size: 24px}
-->
</style>
<blockquote>
<?php include('admin_header.php');?>
<h2 style="font-size:36px;">BILL GENERATION</h2>
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
                                <blockquote>
  <table width="394" height="213" border="1" style="margin-left:150px;">
    <tr bgcolor="#0099FF">
      <td width="384" height="107"><div align="center" class="style4"><span class="style3">ORDER NUMBER</span></div></td>
    </tr>
      <?php
  require_once('dbcon.php');
  $ss="select distinct(order_no) from dealer_order_request where order_status='confirmed'";
  $rs=mysql_query($ss);
  while($row=mysql_fetch_array($rs))
  {
  ?>
    <tr bgcolor="#FFFFFF">
      <td height="98"><div align="center" class="style4"><a href="bill1.php?id=<?php echo $row['order_no'];?>" class="style1"> <?php echo $row['order_no'];?></a></div></td>
    </tr>
     <?php
  }
  ?>
  </table>
</blockquote>
<?php include('footer.php');?>
<p>&nbsp;</p>
