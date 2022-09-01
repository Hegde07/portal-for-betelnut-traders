<?php include('accountant_header.php');?>
<style type="text/css">
<!--
.style15 {color: #000000; font-family: Arial, Helvetica, sans-serif; font-weight: bold; font-size: 30px; }
-->
</style>
<h2 style="font-size:36px;"><strong>PURCHASE REPORT</strong></h2>
</div><!-- end col -->
                    <div class="col-lg-4 col-md-4 col-sm-12 hidden-xs-down hidden-sm-down">                    </div><!-- end col -->                    
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end page-title -->

        <section class="section lb" >
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                        <div class="sidebar" style="width:1519px; margin-left: -205px; margin-top:-63px; margin-bottom:-110px;">
                            <div class="widget-no-style">
                                <div class="newsletter-widget text-center align-self-center"><form id="form1" name="form1" method="post" action="purchase_view2.php">
  <table width="416" align="center" style="margin-left:150px;">
    <tr>
      <td width="207" height="67"><span class="style15">From Date</span></td>
      <td width="197"><label>
        <input type="date" name="t1" id="textfield" />
      </label></td>
    </tr>
    <tr>
      <td height="69"><span class="style15">To Date</span></td>
      <td><input type="date" name="t2" id="textfield2" /></td>
    </tr>
    <tr>
      <td height="117" colspan="2"><div align="center">
        <label>
        <input type="submit" name="button" id="button" value="Submit" style="background-color:#000000; font-size:24px; width:50x; height:50px; color:#FFFFFF;" />
        </label>
      </div></td>
    </tr>
  </table>
</form>
<?php include('footer.php');?>

</body>
</html>
