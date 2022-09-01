<?php include('accountant_header.php');?>
<style type="text/css">
<!--
.style5 {font-size: 30px; font-weight: bold; font-family: Arial, Helvetica, sans-serif; }
-->
</style>
<h2 style="font-size:36px;">SALES REPORT</h2>
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
<form name="form1" method="post" action="sales_view2.php">
  <table width="388" align="center" style="margin-left:150px;">
    <tr>
      <td width="188" height="68"><span class="style5">From date</span></td>
      <td width="184"><label>
        <input type="date" name="t1" id="t1">
      </label></td>
    </tr>
    <tr>
      <td height="69"><span class="style5">To date</span></td>
      <td><input type="date" name="t2" id="t2"></td>
    </tr>
    <tr>
      <td height="68" colspan="2"><label></label>
      <div align="center">
        <input type="submit" name="button" id="button" value="Submit" style="font-size:24px; height:50x; width:90px; background-color:#000000; color:#FFFFFF;">
      </div></td>
    </tr>
  </table>
</form>
<?php include('footer.php');?>